<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    {
        $mensagem = "Esta é uma mensagem para a página principal.";
        return view('principal', compact('mensagem'));
    }
}
