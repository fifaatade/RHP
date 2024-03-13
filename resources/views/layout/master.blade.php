<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css
    ">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body class="">
    <header class="header">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container-sm nav">
                <a class="navbar-brand d-flex align-center " href="{{route('home')}}">
                    <img src="{{asset('images/logo.png')}}" alt="Logo" width="90" height="80" class="d-inline-block align-text-top">
                    <b class=" p-2" >Reveal Her <br> Potential</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarText" >
                    <ul class="navbar-nav float-end">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}#description">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('home')}}#gallery">Edition passée</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}#about">A propos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    @if (session('errors'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                    <li>{{session('errors')}}</li><br/>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <ul>
                    <li>{{session('success')}}</li><br/>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif

    @yield('content')
      

    <footer id="footer">
        <p class="d-inline-block align-text-bottom">Tous droits réservés, © 2024 theSPACE
        </p>
    </footer>
    <script src="{{asset('js/index.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js
    ">
    </script>
</body>
</html>