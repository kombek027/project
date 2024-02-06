
<div class="div">
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>

    @endif
</div>
<form action="{{route('product.update', $product->id)}}" method='post'>

    @csrf
    <input type="text" name='name' placeholder="name" value='{{$product->name}}'>
    <input type="number" name='price' placeholder='price' value='{{$product->price}}'>
    <input type="text" name='description' placeholder='description' value='{{$product->description}}'>
    <button>submit</button>
</form>