<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #600080;
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
            color: #600080;
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
    </style>
</head>

<body>
    <div class="parent">
        <div class="container">
            <h1>Add Category</h1>
            <form class="mx-auto" action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" name="name" placeholder="Entre category name"class="form-control"
                        id="name">
                </div>
                <div class="mb-3 child">
                    <button type="submit" class="btn btn-dark">Create</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
