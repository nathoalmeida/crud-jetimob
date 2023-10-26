<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar cadastro de livro</title>
</head>
<body>
    <form  action="{{ route('alterar_livro', ['id' => $livro->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <label for="">Título do livro: </label> </br>
        <input type="text" name="titulo" value="{{ $livro->titulo }}"> </br>
        <label for="">Autor: </label> </br>
        <input type="text" name="autor" value="{{ $livro->autor }}"> </br>
        <label for="">Classificação: </label> </br>
        1 <input type="range" name="classificacao" min="1" max="5" step="1" value="{{ $livro->classificacao }}"> 5 </br>
        <label for="">Resenha: </label> </br>
        <textarea name="resenha" >{{ $livro->resenha }}</textarea> </br>
        <button>Salvar</button>
    </form>
</body>
</html>