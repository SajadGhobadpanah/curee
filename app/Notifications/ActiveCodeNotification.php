<?php

namespace App\Notifications;

use App\Notifications\Channels\SmsChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


;

class ActiveCodeNotification extends Notification
{
    use Queueable;

    public $code;
    public $phone;

    public function __construct($code, $phone)
    {
        $this->code = $code;
        $this->phone = $phone;
    }


    public function via($notifiable)
    {
        return [SmsChannel::class];
    }

    public function toGhasedakSms($notifiable)
    {
        return
            [
                'text' => $this->code,
                'phone' => $this->phone,
            ];

    }

}
