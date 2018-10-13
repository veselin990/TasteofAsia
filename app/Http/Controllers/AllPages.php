<?php

namespace TasteofAsia\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use TasteofAsia\Meni;
use TasteofAsia\Specijaliteti;

class AllPages extends Controller
{
    public function index()
    {
        $specijalitetis = Specijaliteti::all();
        return view('pages.index',compact('specijalitetis'));
    }

    public function oNama()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function meni()
    {
        $menis = Meni::all();
        return view('pages.meni', compact('menis'));
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required',
            'message' => 'required:10',
            'subject' => 'required:3',
            'number' => 'required'
        ]);
        // POSTO NE MOZE REQUEST DA SE SALJE UNUTAR SEND FUNKCIJE, MORAM DA NAPRAVIM OD TOGA NIZ PA ONDA DA GA PROSLEDIM
            $data = array(
                'email' => $request->email,
                'subject' => $request->subject,
                'name' => $request->name,
                'number' => $request->number,
                'bodytext' => $request->message
            );

            Mail::send('emails.contact', $data, function ($message) use ($data){
                $message->from($data['email']);
                $message->to('veselin_90@hotmail.com');
                $message->subject($data['subject']);
            });

            Session::flash('success', 'Vasa poruka je poslata');

            return redirect()->back();
    }
}
