<?php

namespace App\Rules;

use GuzzleHttp\Client;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Http;
use SebastianBergmann\Diff\Exception;

class RecaptchaRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function passes($attribute, $value)
    {



            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('RECAPTCAH_SECRET_KEY'),
                'response' => $value,
                'remoteip' => request()->ip(),
            ]);
            $response = $response->json();
            return $response['success'];


//        try {
//            $client = new Client();
//            $response = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify',
//                [
//                    'form-params' => [
//                        'secret' => env('RECAPTCAH_SECRET_KEY'),
//                        'response' => $value,
//                        'remoteip' => request()->ip(),
//
//                    ]
//                ]);
//            $response = json_decode($response->getBody());
//            return $response->success;
////            dd($response);
//        } catch (Exception $e) {
//            return 'error';
//        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
