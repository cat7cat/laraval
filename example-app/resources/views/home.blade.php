<!DOCTYPE html>
<html lang="en">

<head>
    <title>CHRIS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/app.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }

        nav-hover {
            padding: 20px;
            background: #ccc;
        }
    </style>
</head>

<body>

    <div class="p-5 bg-primary text-white text-center">
        <h1>HOME</h1>
        <p></p>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <!-- laravel 寫法  -->
                    <!--  語法糖衣 -->
                    <a class="nav-link nav-hover" href="{{url('')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-hover" href="{{url('f1')}}">1F</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-hover" href="{{url('f2')}}">2F</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-hover" href="{{url('f3')}}">3F</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-hover" href="{{route('hello_f4')}}">4F</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
            </div>     
    </div>

</body>

</html>