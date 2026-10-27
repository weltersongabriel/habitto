<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Criar um método chamado index que retorna a view 'site.index'
    public function index()
    {
        $nome = 'João';
        $habitos = ['Ler', 'Exercitar', 'Meditar'];
        
        return view('home', compact('nome', 'habitos'));
    }
}
