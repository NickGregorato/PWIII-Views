<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sobrenos extends Controller
{
    public function index()
    {
        $mensagem = "Sobre Nós...";
        return view('sobrenos', compact('mensagem'));
    }
}

