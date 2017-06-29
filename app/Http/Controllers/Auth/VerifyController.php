<?php

namespace App\Http\Controllers\Auth;

use App\Code\Common\SmsManagement;
use App\Code\IService\IUserService;
use App\Code\IService\IVerifyCodeService;
use App\Http\Controllers\WebController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VerifyController extends WebController
{
    //

    protected $VerifyCodeService;
    protected $UserService;

    public function __construct(IVerifyCodeService $verifyCodeService,IUserService $userService)
    {
        $this->VerifyCodeService = $verifyCodeService;
        $this->UserService = $userService;
    }

    public function sendMobileCode(Request $request)
    {
        $mobile = $request->input("mobile");
        $smsManagement = new SmsManagement($this->VerifyCodeService,$mobile,$request->ip());

        if($smsManagement->SendMobileCode())//
        {
            return response()->json(["status"=>1]);
        }
        return response()->json(["status"=>0]);
    }

    public function getCaptcha(Request $request,$tmp)
    {
        return captcha();
    }

    public function checkCaptcha(Request $request)
    {

        $rules = ['code' => 'required|captcha'];

        if(!$this->validateInput($request,$rules))
        {
            return response("false");
        }
        else
        {
            return response("true");
        }
    }

    public function checkAccountExist(Request $request)
    {
        $rules = ['accountName' => 'required'];

        if($this->validateInput($request,$rules))
        {
            $account = $request->input("accountName");
            $user = $this->UserService->GetUserByAccountName($account);
            if($user)
            {
                return "false";
            }
        }
        return "true";
    }

    public function checkMobileExist(Request $request)
    {
        $rules = ['mobile' => 'required'];

        if($this->validateInput($request,$rules))
        {
            $mobile = $request->input("mobile");
            $user = $this->UserService->GetUserByMobile($mobile);
            if($user)
            {
                return "false";
            }
        }
        return "true";

    }

    protected function validateInput(Request $request,$rules)
    {
        $validator = Validator::make($request->all(),$rules);
        return $validator->passes();
    }
}
