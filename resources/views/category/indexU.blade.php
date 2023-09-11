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
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            padding: 58px 0 0;
            /* Height of navbar */
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
            width: 240px;
            z-index: 600;
        }

        .sidebar .active {
            border-radius: 5px;
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        }

        .sidebar a {
            font-size: 30px;
            font-weight: bold;
            color: black;
            padding: 30px;
            text-decoration: none;
            display: block;
        }

        .sidebar a:hover {
            color: blue;
        }

        .sidebar h3 {
            padding: 10px;
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

        .image {
            margin-left: 230px;
        }

        .image img {
            /* margin: auto; */
            width: 1305px;
            margin-top: 0;
            height: 565px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>House Of Wears</h1>
    </div>
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white ">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <h3>Categories</h3>
                @foreach ($categories as $category)
                    <a href="{{ route('category.showU', $category->id) }}"
                        class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>{{ $category->name }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </nav>
    <div class="image">
        {{-- <img src="{{ asset('images/background.jpg') }}" alt="Image"> --}}

        <img src="{{ asset('images/background2.jpg') }}" alt="Image">

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
