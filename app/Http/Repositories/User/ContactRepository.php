<?php

namespace App\Http\Repositories\User;

use App\Http\Interfaces\User\ContactInterface;
use App\Models\Contact;
use App\Models\Setting;

class ContactRepository implements ContactInterface
{

    public function index()
    {
        $settings = Setting::get();
        return view('EndUser.pages.contact',compact('settings'));
    }

    public function store($request)
    {
        Contact::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'subject'=>$request->subject,
           'message'=>$request->message
        ]);
        toast('Send a Message Your Admin','success');
        return back();
    }
}
