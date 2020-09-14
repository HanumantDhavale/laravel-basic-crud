<html>
<head>
    <title>List of Products</title>
</head>
<body>
<h3>List of Products</h3>
@if(Auth::check())
    Welcome, {{Auth::user()->name}}
    <br>
    <a href="{{route("logout")}}">Logout</a>
    <br>
    <br>
@endif
<a href="{{route("product.add")}}">Add new product</a>
<table border="1">
    <tr>
        <td>Name</td>
        <td>Price</td>
        <td>Desc</td>
        <td>Status</td>
        <td>Actions</td>
    </tr>
    @foreach($product_list as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->desc}}</td>
            <td>{{$product->status?"Active":"In-active"}}</td>
            <td>
                <a href="{{route("product.edit", $product->id)}}">Edit</a>
                |
                <a href="{{route("product.delete", $product->id)}}">Delete</a>
            </td>
        </tr>
    @endforeach
</table>
{{$product_list->links()}}
</body>
</html>
