<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Kontakt;
use Illuminate\Http\Request;

class KontaktController extends Controller
{
    public function index(){
        return view('frontend.kontakt');
    }

    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'ime_prezime' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telefon' => ['required', 'string','min:10', 'max:14'],
            'naslov' => ['required', 'string', 'max:255'],
            'poruka' => ['required', 'string', 'max:255'],
        ]);
    }*/
    public function store(Request $request){
        
        $this->validate($request, [
            'ime_prezime' => 'required',
            'email'  => 'required|email',
            'telefon' => 'required|min:10, max:14',
            'naslov' => 'required',
            'poruka' => 'required'
        ]);
        /*$kontakt = new Kontakt;
        $kontakt->ime_prezime = $request->ime_prezime;
        $kontakt->email = $request->email;
        $kontakt->telefon = $request->telefon;
        $kontakt->naslov = $request->naslov;
        $kontakt->poruka = $request->poruka;

        $kontakt->save();*/

        Kontakt::create($request->all());

        return back()->with('success', 'Vasa poruka je prosledjena');
        //return redirect()->route('fronted.kontakt')->with('success', 'Vasa poruka je prosledjena');
    }
}
