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
            background-color: #f2f2f2;
        }

        li h3 {
            color: #fff;
            font-size: 20px;
            font-weight: bold;
        }

        .child {
            margin: 15px 20px;
            background-color: #050505;

        }

        .container {
            background-color: #f2f2f2;
            width: 981px;
            top: 0;
            display: flex;
            justify-content: space-between;
            padding: 10px 10px;
            z-index: 1;
        }

        .container a {
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            padding: 15px 20px;
            display: block;
            text-decoration: none;
        }

        .container a:hover {
            text-decoration: underline;
        }

        .dropdownChild a {
            color: #262626;
            text-align: center;
        }

        .container h2 {
            color: #262626;
            font-weight: bold;
            font-size: 40px;
            padding: 10px;
        }

        .btnClass {
            margin-left: 1200px;
            width: 200px;
            height: 70px;
            margin-top: 20px;
        }

        .btnClass h4 {
            font-weight: bold;
        }

        table {
            width: 800px;
            margin-left: 350px;
            border-collapse: collapse;
        }

        table,
        tr,
        td {
            border: 10px solid;
            border-color: #262626;
            color: black;
            text-align: center;
        }

        th {
            border: 10px solid;
            border-color: #262626;
            background-color: #262626;
            text-align: center;
            color: white;
            /* padding: 1rem; */
        }

        td {
            font-size: 20px;
            padding: 1rem;
        }

        .btntable {
            padding: 15px;
        }

        .catename {
            text-align: center;
            font-size: 30px;
            font-weight: bold;
        }

        .sidebar {
            background-color: #262626;
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
            font-size: 18px;
            font-weight: bold;
            padding: 50px 20px;
        }

        .sidebar a:hover {
            color: blue;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Orders</h2>
        <ul class="nav nav-underline justify-content-end ">
            <li class="nav-item dropdown ">
                <button class="btn  dropdown-toggle child" data-bs-toggle="dropdown" aria-expanded="false">
                    <h3>{{ Auth::guard('admin')->user()->name }}</h3>
                </button>
                <ul class="dropdown-menu dropdown-menu-light dropdownChild">
                    <li><a class="" href="{{ route('admin.login') }}">Logout</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white ">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="{{ route('admin.index') }}" class="list-group-item list-group-item-action py-2 ripple"
                    aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
                </a>
                <a href="{{ route('category.index') }}" class="list-group-item list-group-item-action py-2 ripple ">
                    <i class="fas fa-chart-area fa-fw me-3"></i><span>Categories</span>
                </a>
                <a href="{{ route('adminUser.index') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fas fa-chart-line fa-fw me-3"></i><span>Users</span>
                </a>
                <a href="{{ route('order.index') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a>
            </div>
        </div>
    </nav>
    <table class=>
        <thead>
            <tr>
                <th scope="col">
                    <h2>User Name</h2>
                </th>
                <th scope="col">
                    <h2>Price</h2>
                </th>
                <th scope="col">
                    <h2>Show Products<h2>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td class="catename">{{ $order->user->name }}</td>
                    <td class="catename">{{ $order->price }}</td>
                    <td>
                        <form action="{{ route('order.show', $order->id) }}" method="GET">
                            <button class="btn btn-dark btntable">Show Products</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
