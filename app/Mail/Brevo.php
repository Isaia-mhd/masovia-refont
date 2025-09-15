<?php
namespace App\Mail;

use App\Contracts\Mailing;

class Brevo implements Mailing
{
    public function mail($data)
    {
        return "send by brevo";
    }
}
