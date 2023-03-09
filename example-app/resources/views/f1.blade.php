<!DOCTYPE html>
<html lang="en">

<head>
    <title>1F</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>

<body>

    <div class="p-5 bg-primary text-white text-center">
        <h1>1F</h1>

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
            <div class="col-sm-12">
                <div class="mt-5 p-4 bg-dark text-white text-center">

                     <h2>PHP 程式的寫法</h2>
                </div>



                <?php
                echo "<h2>九九乘法表</h2>";
                for ($i = 1; $i <= 7; $i++) { 
                    for ($j=1; $j <=7; $j++) { 
                        echo "$i*$j" . $i * $j . "" ; 
                    } 
                        echo "<br>" ; 
                    } 
                   
                ?>
            <div class="col-sm-12">
        <div class="mt-5 p-4 bg-dark text-white text-center">
                <h2>LARAVEL 程式的寫法</h2>
        </div>
        </div>
                {{-- 這種寫法要安裝 laravel blade 套件才可以用 --}}
                @php
                echo "<h2>九九乘法表</h2>";
                for ($i = 1; $i <= 7; $i++) { 
                    for ($j=1; $j <=7; $j++) { 
                        echo "$i*$j" . $i * $j . "" ; 
                    } 
                        echo "<br>" ; 
                    } 
                     
                @endphp


            </div>
        </div>

</body>

</html>