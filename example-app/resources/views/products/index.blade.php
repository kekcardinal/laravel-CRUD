<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>

    <div>
        <a href="{{route('product.create')}}">Creer un article</a>
    </div>
    <div>
        @if(session()->has('success'))

        <div>{{session('success')}}</div>
        @endif

    </div>
    <div style="display:flex; justify-content:space-between; width:fit-content; row-gap:30px; column-gap:25px; ">
        @foreach($products as $product )
        <div style="padding:10px; margin:10px; background-color:beige; border-radius:25px;">
        <div style="font-size:32pt;">
            ID={{$product->id}}
        </div>
        <div style="font-size:32pt;">
            Name={{$product->name}}
        </div>
        <div style="font-size:32pt;">
            Quantity={{$product->qty}}
        </div>
        <div style="font-size:32pt;">
            Price={{$product->price}}
        </div>
        <div style="font-size:32pt;">
            Description={{$product->description}}
        </div>

        <div style="font-size:32pt;">
       <a href="{{route('product.edit',['product' => $product])}}"> Edit </a>
        </div>  
        <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>
        </div>
        @endforeach
        </div>
</body>
</html>