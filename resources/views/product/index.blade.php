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
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            text-decoration: none;
            list-style-type: none;
        }

        body {
            font-family: system-ui;
        }

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
            margin-left: 250px;
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

        .btnclass {
            margin-left: 1000px;
            display: flex;
            flex-wrap: wrap;
        }

        .btnclass button {
            margin: 20px;
            padding: 10px;
            font-size: 20px;
            font-weight: bold;
            width: 150px;
        }

        .num input {
            width: 50px;
            height: 35px;
        }

        .search {
            width: 400px;
            margin-left: 1000px;
            margin-bottom: 20px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>House Of Wears</h1>
    </div>
    <form class="d-flex search" action="{{ route('searchP') }}" method="GET">
        @csrf
        <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search"
            value="{{ isset($search) ? $search : '' }}">
        <button class="btn btn-outline-danger" type="submit">Search</button>
    </form>
    <div class="btnclass">

        <form action="{{ route('category.indexU') }}" method="GET">
            <button class="btn btn-success">Categories</button>
        </form>
        <form action="{{ route('cart.index') }}" method="GET">
            <button class="btn btn-danger">Cart</button>
        </form>
    </div>

    <div class="boxParent">
        @foreach ($products as $product)
            <div class="box">
                <img src="{{ asset('images/' . $product->image) }}" alt="Image" width="200px" height="200px">
                <h4>{{ $product->name }}</h4>
                <h5 class="price">${{ $product->price }}</h5>
                <form action="{{ route('to_cart', $product->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 num">
                            <input type="number" value="1" min="1" name="quantity">
                        </div>
                        <div class="col-md-4 ">
                            <input type="submit" class="btn btn-primary boxbtn" value="Add to Cart">
                        </div>
                    </div>
                </form>
            </div>
        @endforeach
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
