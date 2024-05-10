@extends('layout.layout')

@section('content')

<main>
    <h1>Modifier l'article</h1>
    <h1>{{$article->id}}</h1>
    <form action="{{ route('article.update', ['article' => $article]) }}" method="POST" enctype="multipart/form-data">
        {{-- <form> --}}
        @csrf
        @method('PUT')

        <label for="categorie_fr">Catégorie (FR):</label>
        <input type="text" id="categorie_fr" name="categorie_fr" value="{{ $article->categorie_fr }}" required>
        <br>

        <label for="categorie_en">Category (EN):</label>
        <input type="text" id="categorie_en" name="categorie_en" value="{{ $article->categorie_en }}" required>
        <br>

        <label for="image">Image:</label>
        <input type="file" id="image" name="image" accept="image/*">
        <br>

        <label for="description_fr">Description de l'image (FR):</label>
        <textarea id="description_fr" name="description_fr" required>{{ $article->description_fr }}</textarea>
        <br>

        <label for="description_en">Image Description (EN):</label>
        <textarea id="description_en" name="description_en" required>{{ $article->description_en }}</textarea>
        <br>

        <label for="lien_image">Lien de l'image:</label>
        <input type="text" id="lien_image" name="lien_image" value="{{ $article->lien_image }}" required>
        <br>

        <label for="texte_fr">Texte de l'article (FR):</label>
        <textarea id="texte_fr" name="texte_fr" required>{{ $article->texte_fr }}</textarea>
        <br>

        <label for="texte_en">Article Text (EN):</label>
        <textarea id="texte_en" name="texte_en" required>{{ $article->texte_en }}</textarea>
        <br>

        <button type="submit">Modifier l'article</button>
    </form>
</main>
<textarea id="edi"
@endsection


@section('scripts')
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection