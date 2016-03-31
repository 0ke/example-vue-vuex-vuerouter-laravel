<?php
namespace App\Helpers\Mailers;

use App\User;

class UserMailer extends Mailer
{

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function sendtoAdmin($mail)
    {
        $view = 'emails.reply';
        $data = ['name' => $mail->name,
            'title' => $mail->subject,
            'header' => 'message',
            'text' => $mail->message,
            'email' => $mail->email];

        //$user = new User;
        //$user->name = 'Jonas Vanderhaegen';
        //$user->email = 'jonasvanderhegen@hotmail.com';
        $user = $this->user->find(1);
        $subject = 'Bericht van ' . $mail->email;
        return $this->sendTo($user, $subject, $view, $data);
    }

    public function reply($mail)
    {
        $view = 'emails.reply';
        $data = ['name' => $mail->name,
            'title' => 'Antwoord op uw bericht',
            'header' => 'reply',
            'text' => $mail->message,
            'answer' => $mail->answer,
            'email' => $mail->email];

        $subject = 'Antwoord via jonasvanderhaegen.be';

        return $this->sendTo($mail, $subject, $view, $data);
    }

    public function sendWelcomemail($user)
    {
        $view = 'emails.reply';
        $data = ['name' => response()->returnLang($user->name, 'title', true),
            'title' => 'Antwoord op uw bericht',
            'header' => 'reply',
            'text' => $mail->message,
            'answer' => $mail->answer,
            'email' => $mail->email];

        $subject = 'Antwoord via jonasvanderhaegen.be';

        return $this->sendTo($mail, $subject, $view, $data);
    }

}
