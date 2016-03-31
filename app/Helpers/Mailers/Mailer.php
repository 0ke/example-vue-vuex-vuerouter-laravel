<?php
namespace App\Helpers\Mailers;

use Mail;

class Mailer
{

    public function sendTo($user, $subject, $view, $data = [])
    {

        Mail::queue($view, $data, function ($message) use ($user, $subject) {
            $message->to($user->email, $user->name)->subject($subject);
        });

    }

}
