<?php

namespace App\Http\Controllers;

use App\Mail\PrestaFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        Mail::to('DrFoetus87@gmail.com')->send(new PrestaFormMail($data));

        // je1taptamere@gmail.com

        return redirect()->route('prestation', ['name' => strtolower($data['prestation_slug'])]);
    }
}
