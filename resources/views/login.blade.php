<html>
<head>
    <title>Login</title>
</head>
<body>
<h3>Login</h3>
<form action="{{route("login")}}" method="POST"> {{--url("/customer/save")--}}
    @csrf
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
        <input type="checkbox" name="remember"> Remember me
    </p>
    @if(!empty(session('error')))
        <p style="color: #f00">
            {{session('error')}}
        </p>
    @endif
    <p>
        <button type="submit">Login</button>
    </p>
</form>
</body>
</html>
