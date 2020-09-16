<html>
<head>
    <title>Update Cat</title>
</head>
<body>
<h3>Update Cat</h3>
<a href="{{route("product.list")}}">List</a>
<form action="{{route("cat.update", $cat->id)}}" method="POST"> {{--url("/customer/save")--}}
    @csrf
    <p>
        Title : <br>
        <input type="text" name="title" value="{{$cat->title}}">
        @error('title') <div style="color: #f00;">{{$message}}</div> @enderror
    </p>
    <p>
        @foreach(\App\Product::all() as $product)
            <input type="checkbox" name="products[]" {{in_array($product->id, $products)?"checked":null}} value="{{$product->id}}">{{$product->name}}
        @endforeach
    </p>
    <p>
        <button type="submit">Update</button>
    </p>
</form>
</body>
</html>
