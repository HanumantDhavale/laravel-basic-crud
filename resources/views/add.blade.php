<html>
<head>
    <title>Add product</title>
</head>
<body>
<h3>Add New Product</h3>
<form action="{{route("product.save")}}" method="POST">
    @csrf
    <p>
        Name : <br>
        <input type="text" name="name" value="{{old('name')}}">
        @error('name')
        <br>
        <span style="color: #f00;">
            {{$message}}
        </span>
        @enderror
    </p>
    <p>
        Price : <br>
        <input type="text" name="price" value="{{old('price')}}">
        @error('price')
        <br>
        <span style="color: #f00;">
            {{$message}}
        </span>
        @enderror
    </p>
    <p>
        Description : <br>
        <textarea name="desc">{{old('desc')}}</textarea>
    </p>
    <button type="submit">Save Product</button>
    <a href="{{route("product.list")}}">Back To List</a>
</form>
</body>
</html>
