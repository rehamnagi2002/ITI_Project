<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
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
            margin-left: 150px;
            height: 100%;
            width: 1200px;

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

        .boxbtn {
            font-size: 20px;
            font-weight: bold;
        }

        .order {

            margin-left: 700px;
            margin-top: 200px;

        }

        .order button {
            font-size: 20px;
            font-weight: bold;
            width: 100px;
            text-align: center;
            padding: 7px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>House Of Wears</h1>
    </div>
    <div class="boxParent">
        @foreach ($carts as $cart)
            <div class="box">
                <img src="{{ asset('images/' . $cart->product->image) }}" alt="Image" width="200px" height="200px">
                <h4>{{ $cart->product->name }}</h4>
                <h5 class="price">${{ $cart->product->price * $cart->quantity }}</h5>
                <h5>Quantity :{{ $cart->quantity }}</h5>
                <form action="{{ route('cart.destroy', $cart->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-dark btntable">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
    <div class="order">
        <form action="{{ route('addOrder') }}">
            <button class="btn btn-success btntable">Order</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
