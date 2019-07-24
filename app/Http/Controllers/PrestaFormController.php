<?php

namespace App\Http\Controllers;

use App\Mail\prestaFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\AdresseDestinataire;

class PrestaFormController extends Controller
{

    public function create()
    {
        return view('prestation');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'date' => 'required',
            'message' => 'required',
            'prestation_slug' => '',
        ]);

        Mail::to('greg.lblr@gmail.com')->send(new prestaFormMail($data));

        // je1taptamere@gmail.com
        return back()->with('success','Message envoyé avec succès !');
        return redirect()->route('prestation', ['name' => strtolower($data['prestation_slug'])]);
    }

    public function email()
    {
        $email = AdresseDestinataire::select('email')->get()->toArray();
        return view('email', [
            'email' => $email,
        ]);
    }
}
