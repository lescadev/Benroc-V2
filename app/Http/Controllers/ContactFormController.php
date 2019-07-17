<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{

    public function create()
    {
        return view('contact');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'objet' => 'required',
            'message' => 'required',
        ]);
       
        Mail::to('DrFoetus87@gmail.com')->send(new ContactFormMail($data));

        // je1taptamere@gmail.com

        return redirect()->route('contact');
    }
}
