@extends('layout.layout')
    @section('content')   

    <main>
    <h1 class="titre">Les emplois</h1>


    <div class="conteneur-produits-titre">
        <div class="header-rows-produits">
            <div>
               Nom
            </div>
            <div>
              Quantité
            </div>
            <div>
              Prix
            </div>
            <div>
               Description
            </div>
        </div>
    </div>
        <div class="conteneur-produits">
            @foreach($products as $product )
            <div class="rows-produits">
            <div>
                {{$product->name}}
            </div>
            <div>
                {{$product->qty}}
            </div>
            <div>
               {{$product->price}}
            </div>
            <div>
                {!!$product->description!!}
            </div>

        </div>
        @endforeach
    </div>

    <script>
        ClassicEditor
        .create(document.querySelector('#editor'), {
        autoLink: false // Disable automatic link conversion
            })
            .catch(error => {
                console.error(error);
            });
    </script>


    </main>
    @endsection