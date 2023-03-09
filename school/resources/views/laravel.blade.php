<!DOCTYPE html>
<html lang="en">

<head>
    <title>1F</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>

    </style>
</head>

<body>

    <div class="p-5 bg-primary text-white text-center">
        <h1>課程介紹-Laravel</h1>
    </div>


    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <!-- laravel 寫法  -->
                    <!--  語法糖衣 -->
                    <a class="nav-link nav-hover" href="{{route('home')}}">首頁</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-hover" href="{{route('about')}}">關於我們</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{route('goods')}}">課程介紹</a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('php')}}">PHP</a></li>
                    <li><a class="dropdown-item" href="{{route('css')}}">CSS</a></li>
                    <li><a class="dropdown-item" href="{{route('html')}}">HTML</a></li>
                    <li><a class="dropdown-item" href="{{route('jquery')}}">Jquery</a></li>
                    <li><a class="dropdown-item" href="{{route('js')}}">JS</a></li>
                    <li><a class="dropdown-item" href="{{route('laravel')}}">Laravel</a></li>                    
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-hover" href="{{route('contact')}}">聯絡我們</a>
                </li>
            </ul>
        </div>
    </nav>


 
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="mt-5 p-4 bg-dark text-white text-center">
                     <h2></h2>
                </div>



            <div class="col-sm-12">
                <div class="mt-5 p-4 bg-dark text-white text-center">
                    <h2></h2>
                </div>
            </div>
        </div>
    </div>

</body>

</html>