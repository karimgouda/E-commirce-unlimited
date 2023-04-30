<?php

namespace App\Http\Repositories\Admin;

use App\Models\Contact;

class ContactRepository implements \App\Http\Interfaces\Admin\ContactInterface
{

    public function index()
    {
        $contacts = Contact::get();
        return view('Admin.pages.contact.index',compact('contacts'));
    }

    public function updateStatus($contact)
    {
        if($contact->status == 1){
            $contact->update(["status"=>0]);
            toast('Rejected Success','success');
        }else{
            $contact->update(["status"=>1  ]);
            toast('Approved Success','success');
        }
        return back();
    }

    public function delete($contact)
    {
        $contact->delete();
        toast('Delete Message Success','success');
        return back();
    }
}
