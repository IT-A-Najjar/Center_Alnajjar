<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Center Al Najjar @yield('titel')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body >
<nav class="navbar navbar-expand-lg" style="background-color: #4a5568">
    <div class="container-fluid">
        <a class="navbar-brand" href="">
            <img width="46" src="/img/icon.jpg">
            Center Al Najjar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/female">woman</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{route('female.create')}}">create</a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="/login">login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    @yield('content')

<footer>
    <div class="content-footer" id="footer">
        <h2>
            MY <span>Accounts</span>
        </h2>
        <div class="social">
            <a href="https://www.facebook.com/abdullah.najjar.5851" target="_black"><img src="/img/facebook.png" alt=""></a>
            <a href="http://instagram.com/it_a_baraa" target="_black"><img src="/img/instagram.png" alt=""></a>
            <a href="https://t.me/E_i_Najjar" target="_black"><img src="/img/telegram.png" alt=""></a>
        </div>
        <p class="end">
            Programming by Abdullah Najjar
        </p>
    </div>
</footer>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>
