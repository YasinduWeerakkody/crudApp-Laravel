<!DOCTYPE html>
<html>
<head>
<title>Crud-app</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div>
        <h1>Product</h1>
        <div>
            @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
            @endif
        </div>
        <div>
            <div>
                <a href="{{route('products.create')}}">Create a product</a>
            </div>
            <table class="table" border="1">
               
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->qty}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            <a href="{{route('products.edit',['products' => $product])}}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{route('products.destroy',['products' => $product])}}">
                                 @csrf
                                 @method('delete') 
                              <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
                <!-- <tbody>
                    <tr>
                        <td scope="row"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody> -->
            </table>
        </div>
    </div>
</body>

</html>