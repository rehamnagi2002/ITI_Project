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
        .header a {
            text-decoration: none;
            font-size: 25px;
            margin: 20px;
            color: #000066;
            font-weight: bold;

        }

        .store {
            text-align: center;
            font-size: 50px;
            font-weight: bold;
            color: #000066;
            margin-top: 200px;
        }
    </style>
</head>

<body>

    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.create') }}">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.createregister') }}">Register</a>
        </li>

    </ul>
    <div class="store">
        <h1>House Of Wears</h1>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
