<html>
<head>
    <title>Add Customer</title>
</head>
<body>
<h3>Add New Customer</h3>
<form action="{{route("customer.save")}}" method="POST"> {{--url("/customer/save")--}}
    @csrf
    <p>
        Name : <br>
        <input type="text" name="name" value="{{old('name')}}">
        @error('name') <div style="color: #f00;">{{$message}}</div> @enderror
    </p>
    <p>
        City : <br>
        <input type="text" name="city" value="{{old('city')}}">
        @error('city') <div style="color: #f00;">{{$message}}</div> @enderror
    </p>
    <p>
        Age : <br>
        <input type="text" name="age" value="{{old('age')}}">
        @error('age') <div style="color: #f00;">{{$message}}</div> @enderror
    </p>
    <p>
        Adhar ID : <br>
        <input type="text" name="adhar_number" value="{{old('adhar_number')}}">
        @error('adhar_number') <div style="color: #f00;">{{$message}}</div> @enderror
    </p>
    <p>
        Birth Year : <br>
        <input type="text" name="birth_year" value="{{old('birth_year')}}">
        @error('birth_year') <div style="color: #f00;">{{$message}}</div> @enderror
    </p>
    <p>
        <button type="submit">Save</button>
    </p>
</form>
</body>
</html>
