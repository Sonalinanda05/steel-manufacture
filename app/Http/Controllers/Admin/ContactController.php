<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        $contact=Contact::latest()->get();
        return view('admin.contact.view',compact('contact'));
    }
}
