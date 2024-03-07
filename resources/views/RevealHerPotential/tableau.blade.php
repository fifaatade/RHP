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
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield('title')</title>
</head>
<style>
.page-break {
    page-break-after: always;
}
</style>
<body class="">
    <header id="header" >
        <nav class="navbar bg-secondary d-flex">
            <div class="container-sm ">
                <a class="nav-link d-flex align-center " href="{{route('home')}}">

                    <img src="{{asset('images/logo.png')}}" alt="" width="90" height="80" class="d-inline-block align-text-top" >
                    <b class=" p-2" >Reveal Her Potential</b>
                </a>
                <div>
                    <a href="{{route('logout')}}" class="btn btn-secondary  m-3 hidden-pdf" style="padding:10px; font-size:18px;margin:12px;text-decoration:none;" > se déconnecter</a>
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

    <div class="page-break">
    @include('RevealHerPotential.includes.tab')
    </div>

    <footer id="footer">
        <p class="d-inline-block align-text-bottom">Tous droits réservés, © 2024
            <a href="https://www.facebook.com/thespacengo" target="_blank" title="facebook"><i
                    class="fab fa-facebook-f fa-x "></i></a>
            <a href="https://twitter.com/theSPACEngo"><i class="fab fa-twitter fa-x " target="_blank"
                    title="twitter"></i></a>
            <a href="https://www.linkedin.com/company/thespacengo/" target="_blank"
                title="linkedin"><i class="fab fa-linkedin fa-x "></i></a>
        </p>
    </footer>
    <script src="{{asset('js/index.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js
    ">
    </script>
    
</body>
</html>


    
