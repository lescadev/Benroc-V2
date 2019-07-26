<?php

namespace App\Http\Controllers;

use App\Mail\contactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\AdresseDestinataire;

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
       
        Mail::to('greg.lblr@gmail.com')->send(new contactFormMail($data));
            //AdresseDestinataire::select('email')

        return back()->with('success','Message envoyé avec succès !');
    }

    public function email()
    {
        $email = AdresseDestinataire::select('email')->get()->toArray();
        return view('email', [
            'email' => $email,
        ]);
    }
}
