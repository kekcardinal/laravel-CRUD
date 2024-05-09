@extends('layout.layout')
@section('content')   

<main>
<h1>Créer article</h1>
<form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('post')


    <label for="categorie_fr">Catégorie (FR):</label>
    <input type="text" id="categorie_fr" name="categorie_fr" required>
    <br>

    <label for="categorie_en">Category (EN):</label>
    <input type="text" id="categorie_en" name="categorie_en" required>
    <br>

    <label for="image">Image:</label>
    <input type="file" id="image" name="image" accept="image/*" required>
    <br>

    <label for="description_fr">Description de l'image (FR):</label>
    <textarea id="description_fr" name="description_fr" required></textarea>
    <br>

    <label for="description_en">Image Description (EN):</label>
    <textarea id="description_en" name="description_en" required></textarea>
    <br>

    <label for="lien_image">Lien de l'image:</label>
    <input type="text" id="lien_image" name="lien_image" required>
    <br>

    <label for="texte_fr">Texte de l'article (FR):</label>
    <textarea id="texte_fr" name="texte_fr" required></textarea>
    <br>

    <label for="texte_en">Article Text (EN):</label>
    <textarea id="texte_en" name="texte_en" required></textarea>
    <br>

    <button type="submit">Créer l'article</button>
</form>

</main>
@endsection