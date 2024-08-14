<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
        return view('site.contato');
    }
    public function enviar(Request $request)
    {
        // Processar os dados do formulário
        $nome = $request->input('nome');
        $email = $request->input('email');
        $mensagem = $request->input('mensagem');
        $assuntos = $request->input('assunto');

        // Lógica para salvar ou enviar os dados por e-mail...
        sleep(6);
        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
