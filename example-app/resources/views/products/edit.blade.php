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
            <input type="text" name="name" placeholder="Name" required value="{{$product->name}}"/>
        </div>
        <div>
            <label>
                Quantity
            </label>
            <input type="text" name="qty" placeholder="Qty"  required value="{{$product->qty}}"/>
        </div>
        <div>
            <label>
                Price
            </label>
            <input type="text" name="price" placeholder="Price" required value="{{$product->price}}"/>
        </div>
        <div>
            <label>
                Description
            </label>
            <textarea id="editor" type="text" name="description">{{$product->description}}</textarea>
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

@section('scripts')
<script>
    ClassicEditor
    .create(document.querySelector('#editor'), {
        link: {
            defaultProtocol: 'http://',
            addTargetToExternalLinks: true
        }
    })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection