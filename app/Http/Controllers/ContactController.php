<?php

namespace App\Http\Controllers;

use App\Services\ContactService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(ContactService $contactService)
    {
        $contacts = $contactService->contacts();
        return view("pages.contact", compact("contacts"));
    }
}
