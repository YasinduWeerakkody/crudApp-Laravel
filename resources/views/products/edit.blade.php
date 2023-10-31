<!DOCTYPE html>
<html>
<head>
<title>Crud-app</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
        <h1>Edit a Product</h1>
        <!-- <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>

            @endif
        </div> -->
        
        <form method="post" action="{{route('products.update',['products' => $products])}}">
            @csrf
            @method('put')
            <div>
                <lable>Name</lable>
                <input type="text" name="name" placeholder="enter ur name" value="{{$products->name}}">
            </div>

            <div>
                <lable>Qty</lable>
                <input type="text" name="qty" placeholder="Qty" value="{{$products->qty}}">
            </div>

            <div>
                <lable>Price</lable>
                <input type="text" name="price" placeholder="price" value="{{$products->price}}">
            </div>

            <div>
                <lable>Description</lable>
                <input type="text" name="description" placeholder="description" value="{{$products->description}}">
            </div>

            <div>
                <input type="submit" value="Update">
            </div>
        </form>
   
</body>

</html>