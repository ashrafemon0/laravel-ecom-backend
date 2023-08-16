<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function PostContact(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        date_default_timezone_set('Asia/Dhaka');
        $contact_time = date('h:i:sa');
        $contact_date = date('d-m-y');

        $result = Contact::insert([
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'contact_time' => $contact_time,
            'contact_date' => $contact_date

        ]);
        return $result;
    }
}
