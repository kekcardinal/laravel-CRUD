@extends('layout.layout')
    @section('content')   

    <main>
    <h1 class="titre"> Emplois</h1>

    <div>
       
    </div>
    <div>
        @if(session()->has('success'))

        <div>{{session('success')}}</div>
        @endif

    </div>

    <div class="conteneur-produits-titre">
    <div class="rows-produits">
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
        <div>
           Edit
        </div>
        <div>
           Supprimer
        </div>
    </div>
</div>
    <div class="conteneur-produits">
        @foreach($products as $product )
        <div class="rows-produits">
        <!-- <div>
            ID={{$product->id}}
        </div> -->
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
            {{$product->description}}
        </div>

        <div>
       <a href="{{route('product.edit',['product' => $product])}}"> Edit </a>
        </div>  
        <div>
        <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>
</div>
        </div>
        @endforeach
        </div>

</main>
@endsection