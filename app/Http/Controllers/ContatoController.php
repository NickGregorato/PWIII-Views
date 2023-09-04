<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $mensagem = "Esta é uma mensagem para a página.";
        return view('principal', compact('mensagem'));
    }
}
