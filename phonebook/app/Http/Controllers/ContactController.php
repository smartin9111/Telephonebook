<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function get_all_contact()
    {
        $contacts = Contact::with('emails', 'PhoneNumbers')->get();

        return response()->json(['contacts' => $contacts]);
    }
}
