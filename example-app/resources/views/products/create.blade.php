    @extends('layout.layout')
    @section('content')   
    
    <main>
    <h1>Créer emplois</h1>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')

        <div>
        @if($errors->any())
        <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
        @endif

        </div>
        <div>
            <label>
                Name
            </label>
            <input type="text" name="name" placeholder="Name"/>
        </div>
        <div>
            <label>
                Quantity
            </label>
            <input type="text" name="qty" placeholder="Qty" />
        </div>
        <div>
            <label>
                Price
            </label>
            <input type="text" name="price" placeholder="Price"/>
        </div>
        <div>
            <label>
                Description
            </label>
            <input type="text" name="description" placeholder="Description"/>
        </div>

        <div>
            <label>
                Submit information
            </label>
            <input type="submit" value="Save a New  Product"/>
        </div>
    </form>

</main>
    @endsection