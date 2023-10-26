<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
    public function create() 
    {
      return view('livros.create');
    }

    public function store(Request $request) 
    {
        Livro::create([
        'titulo' => $request->titulo,
        'autor' => $request->autor,
        'classificacao' => $request->classificacao,
        'resenha' => $request->resenha
      ]);
      
      return "Livro adicionado com sucesso";
    }

    public function show($id)
    {
      $livro = Livro::findOrFail($id);
      return view('livros.show', ['livro' => $livro]);
    }

    public function edit($id)
    {
      $livro = Livro::findOrFail($id);
      return view('livros.edit', ['livro'=> $livro]);
    }

    public function update(Request $request, $id)
    {
      $livro = Livro::findOrFail($id);

      $livro->update([
        'titulo' => $request->titulo,
        'autor' => $request->autor,
        'classificacao' => $request->classificacao,
        'resenha'=> $request->resenha,
      ]);

      return "Produto Atualizado com sucesso";
    }

    public function delete($id)
    {
      $livro = Livro::findOrFail($id);
      return view('livros.delete', ['livro' => $livro]);
    }

    public function destroy($id)
    {
      $livro = Livro::findOrFail($id);
      $livro->delete();

      return "Livro excluído com sucesso";
    }
}