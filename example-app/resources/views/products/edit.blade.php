@extends('layout.layout')
    @section('content')   

    <main>
    <h1>Edit</h1>
    <form method="post" action="{{route('product.update', ['product'=>$product])}}">
        @csrf
        @method('put')

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
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}"/>
        </div>
        <div>
            <label>
                Quantity
            </label>
            <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}"/>
        </div>
        <div>
            <label>
                Price
            </label>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}"/>
        </div>
        <div>
            <label>
                Description
            </label>
            <input type="text" name="description" placeholder="Description" value="{{$product->description}}"/>
        </div>

        <div>
            <label>
                Update
            </label>
            <input type="submit" value="Save a New  Product"/>
        </div>
    </form>

</main>
@endsection