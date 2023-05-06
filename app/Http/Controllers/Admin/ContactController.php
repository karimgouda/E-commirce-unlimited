<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\ContactInterface;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $contactInterface;
    public function __construct(ContactInterface $contact)
    {
        $this->contactInterface = $contact;
    }

    public function index()
    {
        return $this->contactInterface->index();
    }

    public function updateStatus(Contact $contact)
    {
        return $this->contactInterface->updateStatus($contact);
    }

    public function delete(Contact $contact)
    {
        return $this->contactInterface->delete($contact);
    }
}
