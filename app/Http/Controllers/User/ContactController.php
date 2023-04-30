<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\User\ContactInterface;
use App\Http\Requests\ContactRequest;
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

    public function store(ContactRequest $request)
    {
        return $this->contactInterface->store($request);
    }
}
