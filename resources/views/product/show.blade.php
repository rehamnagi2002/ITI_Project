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
        body {
            background-color: #d9d9d9;
        }

        .container {
            background-color: #fff;
            color: black;
            width: 400px;
            text-align: center;
            margin: auto;
            margin-top: 150px;
            padding: 25px;
            border-radius: 20px;
            border-style: solid;
            border-color: #000;
        }

        .container h3 {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="{{ asset('images/' . $product->image) }}" alt="Image" width="200px" height="200px">
        <div>
            <h3>Product Name : {{ $product->name }}</h3>
            <h3>Price : ${{ $product->price }}</h3>
            <h3>Availability :{{ $product->availability }}</h3>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
