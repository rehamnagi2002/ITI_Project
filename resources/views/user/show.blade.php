<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .header {
            width: 100%;
            background-color: black;
            height: 150px;
        }

        .header h1 {
            color: white;
            text-align: center;
            padding-top: 30px;
            font-size: 60px;
            font-weight: bold;
        }

        .boxParent {
            display: flex;
            flex-wrap: wrap;
            /* justify-content: space-between; */
            height: 100%;
        }

        .box {
            width: 300px;
            margin: 20px;
            padding: 10px;
            border-radius: 15px;
            border-style: solid;
            border-color: #e6e6e6;
            text-align: center;
        }

        .box button {
            width: 150px;
            font-size: 20px;
            font-weight: bold;
        }

        .order {
            margin: 50px;
            /* width: 1200px; */
            border-radius: 15px;
            border-style: solid;
            border-color: #e6e6e6;
        }

        .order h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>House Of Wears</h1>
    </div>
    <div class="">
        <h3>{{ Auth::guard('web')->user()->name }}</h3>
    </div>
    <div>
        @foreach ($user->orders as $order)
            <div class="order">
                <h3>Order Price : {{ $order->price }}</h3>
                <div class="boxParent">
                    @foreach ($order->products as $product)
                        <div class="box">
                            <img src="{{ asset('images/' . $product->image) }}" alt="Image" width="200px"
                                height="200px">
                            <h4>{{ $product->name }}</h4>
                            <h5 class="price">${{ $product->price }}</h5>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
