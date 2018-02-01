<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
       $cursos = array(
        'Lógica de programação', 'Desenvolvimento Web com PHP',
        'Algoritmos e estrutura de dados', 'Test Driven Development'
      );

      return view('Cursos.index', compact('Cursos'));
}
