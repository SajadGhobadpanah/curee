<?php

namespace App\Notifications\Channels;

use Ghasedak\Exceptions\ApiException;

use Illuminate\Notifications\Notification;
use Ghasedak\Exceptions\HttpException;


class SmsChannel
{

    public function send($notifiable, Notification $notification)
    {

        if (!method_exists($notification, 'toGhasedakSms')) {
            throw new \Exception('toGhasedakSms not found');

        }

        $message = $notification->toGhasedakSms($notifiable);
        $code = $message['text'];
        $phone = $message['phone'];


        $apikey = config('services.ghasedak.api_key');
        try {
            $lineNumber = "10008566";
            $api = new \Ghasedak\GhasedakApi($apikey);
            $api->SendSimple($phone, $code, $lineNumber);
        } catch (ApiException $e) {
            echo $e->errorMessage();
        } catch (HttpException $e) {
            echo $e->errorMessage();
        }
    }

}
