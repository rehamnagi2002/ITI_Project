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
            background-color: #e5e6dd;
        }

        .container {
            background-color: #e5e6dd;
            width: 981px;
            top: 0;
            display: flex;
            justify-content: space-between;
            padding: 10px 10px;
            z-index: 1;
        }

        .container h4 {
            padding: 10px;
        }

        .container a {
            color: #000;
            font-size: 20px;
            font-weight: bold;
            padding: 15px 20px;
            display: block;
            text-decoration: none;
        }


        .container a:hover {
            color: #773727;
            text-decoration: underline;
        }

        .btnClass {
            margin: 10px;
            width: 140px;
            padding: 5px;
            font-size: 20px;
            font-weight: bold;
        }

        .image img {
            width: 1530px;
            height: 615px;
        }
    </style>
</head>

<body>
    <div class="container">
        <ul class="nav  justify-content-end ">
            <li class="nav-item dropdown cotnav">
                <button class="btn  dropdown-toggle child" data-bs-toggle="dropdown" aria-expanded="false">
                    <h3>{{ Auth::guard('web')->user()->name }}</h3>
                </button>
                <ul class="dropdown-menu dropdown-menu-light dropdownChild">
                    <li><a class="" href="{{ route('user.login') }}">Logout</a></li>
                </ul>
            </li>
            <li>
                <h4>{{ Auth::guard('web')->user()->email }}</h4>

            </li>
            <li>
                <form action="{{ route('user.show', Auth::guard('web')->user()->id) }}" method="GET">
                    <button class="btn btn-danger btnClass">My Orders</button>
                </form>
            </li>
            <li>
                <form action="{{ route('product.index') }}" method="GET">
                    <button class="btn btn-primary btnClass">Products</button>
                </form>
            </li>


        </ul>
    </div>

    <div class="image">
        {{-- <img src="{{ asset('images/background.jpg') }}" alt="Image"> --}}

        <img src="{{ asset('images/background3.jpg') }}" alt="Image">

    </div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
