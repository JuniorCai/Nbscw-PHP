<?php

namespace App\Listeners;

use App\Code\IService\ILoginLogService;
use App\Events\LoginLogEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LoginLogListener //implements ShouldQueue
{
    protected $LogService;
    public $tries = 1;

    /**
     * Create the event listener.
     *
     * @param ILoginLogService $loginLogService
     */
    public function __construct(ILoginLogService $loginLogService)
    {
        $this->LogService = $loginLogService;
    }

    /**
     * Handle the event.
     *
     * @param  LoginLogEvent  $event
     * @return void
     */
    public function handle(LoginLogEvent $event)
    {
        $logInfo = $event->getLogInfo();
        $this->LogService->CreateLog($logInfo);
    }
}
