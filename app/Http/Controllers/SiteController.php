<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        $nome = 'João';
        $habitos = ['Ler', 'Exercitar', 'Meditar'];

        return view('home', compact('nome', 'habitos'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}