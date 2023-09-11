<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #002966;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            width: 450px;
            margin: auto;
            margin-top: 100px;
            padding: 20px;
        }

        .container h1 {
            color: #002966;
        }

        form {
            width: 350px;
            margin: auto;
            padding: 20px;
        }

        h1 {
            margin: auto;
            text-align: center;
        }

        .child {
            margin-left: 100px;
        }

        .child a {

            text-decoration: none;
        }
    </style>
</head>


<body>
    <div class="container">
        <h1>Register</h1>
        <form class="mx-auto" action="{{ route('admin.register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">User name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Confirm password</label>
                <input type="password" name="confirmPassword" class="form-control" id="exampleInputPassword2">
            </div>
            <div class="md-3 child">
                <a href="{{ route('admin.login') }}">Already registed?</a>
                <form action="{{ route('admin.index') }}" method="get">
                    <button type="submit" class="btn btn-primary">Singup</button>
                </form>
            </div>
    </div>
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
