<!DOCTYPE html>
<html>
<head>
<title>Crud-app</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
        <h1>Create a Product</h1>
        <!-- <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>

            @endif
        </div> -->
        
        <form method="post" action="{{route('products.store')}}">
            @csrf
            @method('post')
            <div>
                <lable>Name</lable>
                <input type="text" name="name" placeholder="enter ur name">
            </div>

            <div>
                <lable>Qty</lable>
                <input type="text" name="qty" placeholder="Qty">
            </div>

            <div>
                <lable>Price</lable>
                <input type="text" name="price" placeholder="price">
            </div>

            <div>
                <lable>Description</lable>
                <input type="text" name="description" placeholder="description">
            </div>

            <div>
                <input type="submit" value="save a new product">
            </div>
        </form>
   
</body>

</html>