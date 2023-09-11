<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #002966;
        }

        .parent {
            margin: auto;
            margin-top: 150px;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            width: 450px;
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
            margin-left: 120px;
        }

        .child a {
            text-decoration: none;
        }

        .alertStyle {
            width: 450px;
            margin: auto;
            margin-bottom: 10px;
        }
    </style>
</head>


<body>
    <div class="parent">
        @if (Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show alertStyle" role="alert">
                <strong>{{ Session::get('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="container">
            <h1>Login</h1>
            <form class="mx-auto" action="{{ route('admin.login') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <div class="mb-3 child">
                    <a href="">Forget password</a>
                    <form action="{{ route('admin.index') }}" method="get">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
