<?php

namespace App\Http\Controllers\Auth;

use App\Code\Common\FromAdminOperate;
use App\Code\Common\LoginAgent;
use App\Code\Common\LoginTypeEnum;
use App\Code\IService\ILoginLogService;
use App\Code\IService\IUserService;
use App\Events\LoginLogEvent;
use App\Http\Controllers\WebController;
use App\Models\Member\User;
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(IUserService $userService)
    {
        $this->middleware('redirectLogin', ['except' => 'logout']);
        $this->UserService = $userService;
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

        $user = $this->create($request->all());

        $this->guard()->login($user);

        event(new LoginLogEvent($user,$request->ip(),LoginTypeEnum::UserName
            ,LoginAgent::PC,FromAdminOperate::FromUser,Carbon::now()));

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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
