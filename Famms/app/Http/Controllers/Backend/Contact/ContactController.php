<?php

namespace App\Http\Controllers\Backend\Contact;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function contactview(request $request)
  {
    $contact = contact::all();
    // dd($contact);

    return view('Backend.Contact.index',compact('contact'));
  }


}
