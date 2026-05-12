<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('img/cat.jpg')}}" type="image/x-icon">
</head>


<body>
    <h4>Bem vindo à aplicação de servidor</h4>

    {{-- {{}} abre o universo do php laravel, e vai buscar a função route com o nome welcome E SO PODEMOS CHAMAR APOS DAR UM NOME à ROTA NO FILE DO WEB.PHP--}}

    {{-- mais util chamar o nome da rota e nao o caminho pq fica mais facil usar --}}
    <ul>
        <li><a href="{{route('welcome_routename')}}">Welcome</a></li>
        <li><a href="{{route('testevariaveis')}}">Variáveis</a></li>
        <li><a href="{{route('users.add')}}">Adicionar Utilizador</a></li>
        <img src="{{asset('img/cat.jpg')}}" alt="">
    </ul>
</body>



</html>