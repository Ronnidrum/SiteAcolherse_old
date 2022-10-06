<?php

namespace App\Http\Controllers;

use App\Mail\acolherseMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContatoController extends Controller
{
    //
    public function index(){
        return view('site.Contato');
    }

    public function envioEmail(Request $request){

        //var_dump($request);
       // die();
        $request->validate(
            [
                'nome' => 'required|min:3|max:40',
                'email' => 'required|email',
                'mensagem' => 'required|min:5|max:2000'
            ],
            [
                'nome.required' => 'Por favor, informar o nome!',
                'nome.min' => 'O campo nome necessia de no mínimo 3 caracteres!',
                'nome:max' => 'O campo nome estourou no máximo de caracters, 40!',
                'email.required' => 'Por favor, Informar o e-mail!',
                'email.required' => 'Email incorretor!',
                'mensagem.required' => 'Por favor, Digitar o texto!',
                'mensagem.min' => 'O campo mensagem necessia de no mínimo 3 caracteres!',
                'mensagem.max' => 'O campo mensagem estourou no máximo de caracters, 2000!'
            ]

        );

        Mail::to('psicologiaacolherse@gmail.com')->send(new acolherseMail());
        return back()->with('success', 'email enviado com sucesso.');

    }
}
