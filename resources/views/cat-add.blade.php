<html>
<head>
    <title>Add Cat</title>
</head>
<body>
<h3>Add New Cat</h3>
<form action="{{route("cat.save")}}" method="POST"> {{--url("/customer/save")--}}
    @csrf
    <p>
        Title : <br>
        <input type="text" name="title" value="{{old('title')}}">
        @error('title') <div style="color: #f00;">{{$message}}</div> @enderror
    </p>
    <p>
        <button type="submit">Save</button>
    </p>
</form>
</body>
</html>
