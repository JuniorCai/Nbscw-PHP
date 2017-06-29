<?php

namespace App\Http\Controllers\Auth;

use App\Code\Common\FromAdminOperateEnum;
use App\Code\Common\LoginAgentEnum;
use App\Code\Common\LoginModeEnum;
use App\Code\Common\SmsManagement;
use App\Code\IService\IUserService;
use App\Code\IService\IVerifyCodeService;
use App\Events\LoginLogEvent;
use App\Http\Controllers\WebController;
use App\Models\Member\User;
use App\Models\Member\UserGroupEnum;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends WebController
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $UserService;
    protected $VerifyCodeService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(IUserService $userService,IVerifyCodeService $verifyCodeService)
    {
        $this->middleware('redirectLogin', ['except' => 'logout']);
        $this->UserService = $userService;
        $this->VerifyCodeService = $verifyCodeService;
    }


    /**
     * 用户注册，登录后记录日志
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        //验证验证码
        $mobile = $request->input("mobile");
        $mobileCode = $request->input("mobileCode");
        $smsManagement = new SmsManagement($this->VerifyCodeService,$mobile,$request->ip());
        if(!$smsManagement->AuthMobileCode($mobileCode))
        {
            return redirect('register')->withInput($request->except('password'))->withErrors(["mobileCodeError"=>"短信验证码错误"]);
        }

        $user = $this->create($request);

        $this->guard()->login($user);

        event(new LoginLogEvent($user,$request->ip(),LoginModeEnum::Mobile
            ,LoginAgentEnum::PC,FromAdminOperateEnum::FromUser,Carbon::now()));

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'accountName' => 'required|max:255',
            'mobile' => 'required|max:11',
            'password' => 'required|min:6',
            'userName' => 'required',
            'gender' => 'required',
            'mobileCode' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(Request $request)
    {
        $data = $request->all();

        $userModel = new User();
        $userModel->accountName = $data['accountName'];
        $userModel->nickName = $data['accountName'];
        $userModel->mobile = $data['mobile'];
        $userModel->password = bcrypt($data['password']);
        $userModel->payPassword = bcrypt($data['password']);
        $userModel->userName = $data['userName'];
        $userModel->gender = $data['gender'];
        $userModel->userGroup = UserGroupEnum::MemberUser;
        $userModel->ip = $request->ip();
        $userModel->isAuth = false;
        $userModel->authMobile = true;
        $userModel->authEmail = false;
        $userModel->isAdmin = false;
        $userModel->email = "";
        $userModel->avatar = "";
        $userModel->qq = "";
        $userModel->areaId = 0000;
        $userModel->remark = "";
        $userModel->remember_token = "";

        return $this->UserService->CreateUser($userModel);

//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => bcrypt($data['password']),
//        ]);
    }
}
