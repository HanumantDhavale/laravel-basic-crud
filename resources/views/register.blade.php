<html>
<head>
    <title>Register</title>
</head>
<body>
<h3>Register</h3>
<form action="{{route("register")}}" method="POST"> {{--url("/customer/save")--}}
    @csrf
    <p>
        Name : <br>
        <input type="text" name="name" value="{{old('name')}}">
        @error('name') <div style="color: #f00;">{{$message}}</div> @enderror
    </p>
    <p>
        email : <br>
        <input type="text" name="email" value="{{old('email')}}">
        @error('email') <div style="color: #f00;">{{$message}}</div> @enderror
    </p>
    <p>
        Password : <br>
        <input type="password" name="password" value="">
        @error('password') <div style="color: #f00;">{{$message}}</div> @enderror
    </p>
    <p>
        Confirm Password : <br>
        <input type="password" name="confirm_password" value="">
        @error('confirm_password') <div style="color: #f00;">{{$message}}</div> @enderror
    </p>
    <p>
        <button type="submit">Register</button>
    </p>
</form>
</body>
</html>
