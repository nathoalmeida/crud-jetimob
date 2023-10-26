<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar novo livro</title>
</head>
<body>
    <form  action="{{ route('cadastrar_livro') }}" method="POST">
        @csrf
        <label for="">Título do livro: </label> </br>
        <input type="text" name="titulo"> </br>
        <label for="">Autor: </label> </br>
        <input type="text" name="autor"> </br>
        <label for="">Classificação: </label> </br>
        1 <input type="range" name="classificacao" min="1" max="5" step="1"> 5 </br>
        <label for="">Resenha: </label> </br>
        <textarea name="resenha" cols="30" rows="20"></textarea> </br>
        <button>Salvar</button>
        </form>
</body>
</html>