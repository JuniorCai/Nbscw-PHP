<?php

namespace App\Events;

use App\Models\Member\LoginLog;
use App\Models\Member\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;



class LoginLogEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $user;
    protected $ip;
    protected $loginType;
    protected $loginAgent;
    protected $isFromAdmin;
    protected $logModel;


    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $userInfo,$ip,$loginType,$loginAgent,$isFromAdmin,$logDate)
    {
        $this->logModel = new LoginLog();
        $this->logModel->userId = $userInfo->id;
        $this->logModel->typeId = $loginType;
        $this->logModel->loginIp = $ip;
        $this->logModel->loginDate = $logDate;
        $this->logModel->loginAgent = $loginAgent;
        $this->logModel->admin = $isFromAdmin;
        $this->logModel->accountNo = $userInfo->mobile;

    }

    public function getLogInfo()
    {
        return $this->logModel;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
