<html>
<head>
    <title>Edit product</title>
</head>
<body>
<h3>Edit Product</h3>
<form action="{{route("product.update", $product_details->id)}}" method="POST">
    @csrf
    <p>
        Name : <br>
        <input type="text" name="name" value="{{$product_details->name}}">
        @error('name')
        <br>
        <span style="color: #f00;">
            {{$message}}
        </span>
        @enderror
    </p>
    <p>
        Price : <br>
        <input type="text" name="price" value="{{$product_details->price}}">
        @error('price')
        <br>
        <span style="color: #f00;">
            {{$message}}
        </span>
        @enderror
    </p>
    <p>
        Description : <br>
        <textarea name="desc">{{$product_details->desc}}</textarea>
    </p>
    <button type="submit">Update Product</button>
    <a href="{{route("product.list")}}">Back To List</a>
</form>
@foreach($product_details->attributes as $atrribute)
    <p>{{$atrribute->title}} : <b>{{$atrribute->value}}</b></p>
@endforeach
<form action="{{route("product.add.attribute", $product_details->id)}}" method="POST">
@csrf
    <p>
        Title : <br>
        <input type="text" name="title" value="{{old('title')}}">
        @error('title')
        <br>
        <span style="color: #f00;">
            {{$message}}
        </span>
        @enderror
    </p>
    <p>
        Value : <br>
        <input type="text" name="value" value="{{old('value')}}">
        @error('value')
        <br>
        <span style="color: #f00;">
            {{$message}}
        </span>
        @enderror
    </p>
    <p>
        <button type="submit">Add Attribute</button>
    </p>
</form>
</body>
</html>
