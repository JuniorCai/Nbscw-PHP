<?php

namespace App\Http\Controllers\Auth;

use App\Code\Common\FromAdminOperate;
use App\Code\Common\LoginAgent;
use App\Code\Common\LoginTypeEnum;
use App\Code\IService\ILoginLogService;
use App\Http\Controllers\WebController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends WebController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';


    /**
     * Create a new controller instance.
     *
     * @param ILoginLogService $logService
     */
    public function __construct(ILoginLogService $logService)
    {
        $this->middleware('redirectLogin', ['except' => 'logout']);
//        $v = bcrypt("123456");
       // $t=$v;
        parent::__construct($logService);

    }

//    public function createAdmin()
//    {
//        $this->UserService->CreateUser(['email'=>'ccc@qq.com','name'=>'bbb','password'=>'123456']);
//    }


    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            //登录成功，进行登录日志记录
            $this->RecordLoginLog(LoginTypeEnum::Mobile,LoginAgent::PC,FromAdminOperate::FromUser,$request->ip());


            //返回响应
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function username()
    {

        return 'mobile';
    }
}
