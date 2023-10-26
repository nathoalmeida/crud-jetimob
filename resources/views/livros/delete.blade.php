<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir livro</title>
</head>
<body>
    <form  action="{{ route('excluir_livro', ['id' => $livro->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <label for="">Tem certeza que deseja excluir esse produto?</label> </br>
        <input type="text" name="titulo" value="{{ $livro->titulo }}"> </br>
        <button>Sim</button>
    </form>
</body>
</html>