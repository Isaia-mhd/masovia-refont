<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\Brevo;
use App\Mail\PHPMailer;
use App\Services\ContactService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(ContactService $contactService)
    {
        $contacts = $contactService->contacts();
        return view("pages.contact", compact("contacts"));
    }

    public function sendMail(ContactRequest $request, PHPMailer $data)
    {
            return $data->mail($request->validated());
    }
}
