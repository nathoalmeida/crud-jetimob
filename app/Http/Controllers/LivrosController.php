<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function create() 
    {
        return view('livros.create');
    }
}
