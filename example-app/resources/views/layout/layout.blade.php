<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    @php $locale = session()->get('locale'); @endphp
</head>
<body>
    <nav>
        <ul>
            @if(Auth::check())
                <li>Bonjour {{ $user->name }}</li>
                <li><a href="{{ route('logout') }}">Se déconnecter</a></li>
                <li><a href="{{ route('product.create') }}">Créer un emploi</a></li>
            @else
                 <li><a href="{{ route('product.home') }}">@lang('lang.home')</a></li>
                <li><a href="{{ route('login') }}">@lang('lang.connexion')</a></li>
                <li><a href="{{ route('user.registration') }}">@lang('lang.create_account')</a></li>
                {{-- <li><a href="{{ route('product.index') }}">Accueil</a></li> --}}
                <!-- You may choose to hide the "Créer un emploi" link for guests too -->
            @endif

            <li><a href="{{route('lang','en')}}">EN</a></li>
            <li><a href="{{route('lang','fr')}}">FR</a></li>
        </ul>
    </nav>
    

    @yield('content')

    <footer>
      <ul>
        <li>Adresse XYZ</li>
        <li>Telephone XYZ</li>
        <li>Fax XYZ</li>
    </ul>
    </footer>
</body>





</html>