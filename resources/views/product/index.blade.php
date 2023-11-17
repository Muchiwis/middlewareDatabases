<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <div class="content">
        @if ($products->isEmpty())
            <p>Lista vacia</p>
        @else
                @foreach ($products as $product)
                <div class="card">
                    <h3>{{$product->name}}</h3>
                    <p>{{$product->short_description}}</p>
                    <p>{{$product->price}}</p>
                </div>
                @endforeach

        @endif
    </div>

</body>
</html>