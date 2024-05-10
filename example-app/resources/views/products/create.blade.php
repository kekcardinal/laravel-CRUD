    @extends('layout.layout')
    @section('content')   
    
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

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
            <textarea id="#editor" class="ckeditor" type="text" name="name" placeholder="Name" required></textarea>
        </div>
        <div>
            <label>
                Quantity
            </label>
            <input type="text" name="qty" placeholder="Qty"  required/>
        </div>
        <div>
            <label>
                Price
            </label>
            <input type="text" name="price" placeholder="Price" required/>
        </div>
        <div>
            <label>
                Description
            </label>
            <textarea id="editor" type="text" name="description" placeholder="Description"></textarea>
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