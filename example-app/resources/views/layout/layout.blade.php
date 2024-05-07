<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
</head>
<body>
<nav>
    <ul>
        <li><a href="{{route('product.index')}}">Accueil</a></li>
        <li> <a href="{{route('product.create')}}">Creer un emplois</a></li>
    </ul>
</nav>

    @yield('content')

    <footer>
      <ul>
        <li><a href="{{route('product.index')}}">Accueil</a></li>
        <li> <a href="{{route('product.create')}}">Creer un emplois</a></li>
    </ul>
    </footer>
</body>





</html>