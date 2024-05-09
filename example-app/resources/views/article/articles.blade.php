@extends('layout.layout')

@section('content')

<main>
    <h1 class="titre">Articles vedettes</h1>

    <div class="conteneur-articles">
    @foreach ($articles as $article)
        <div class="articles">
            @if(session('locale') == 'en')
                <h2>{{ $article->categorie_en }}</h2>
                <p>{{ $article->description_en }}</p>
                <img src="{{ asset('storage/' . $article->image) }}" alt="Article Image">
                <p>{{ $article->texte_en }}</p>
            @else
                <h2>{{ $article->categorie_fr }}</h2>
                <p>{{ $article->description_fr }}</p>
                <img src="{{ asset('storage/' . $article->image) }}" alt="Article Image">
                <p>{{ $article->texte_fr }}</p>
            @endif

            @auth {{-- Only show the edit button if the user is authenticated --}}
            <a href="{{ route('article.edit', ['id' => $article->id]) }}">Edit</a>

                {{-- <h1>{{$article->id}}</h1> --}}
            @endauth
        </div>
    @endforeach
    </div>

</main>
@endsection
