@extends('User.layout.masteregistry')
@section('title','login')

@section('content')

    <div class="d-flex userform">
        <section class="formimg">
            <img src="{{asset('images/bg1.jpg')}}" class="" alt="...">
        </section>
        <form action="{{route('authentification')}}" method="POST" autocomplete="off" enctype="multipart/form-data" style=" margin-left:50%; margin-top: 5%" class="form" >
            @csrf
    
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="veuillez entrer votre email" id="">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="">
            </div>
            <div class="mb-5">
                <button type="submit" class="btn btn-success float-end "> Se connecter</button>
            </div>
            <div class="">
                 <p class="mt-3 me-5"><b>Vous n'avez pas un compte?</b> <a href="{{route('register')}}">cliquez ici</a></p>
                 <p class="mt-3  float-start text-danger"><b>Mot de passe oublié? </b><a href="{{route('forgetPassword')}}" class="text-danger">cliquez ici</a></p>
            </div>
        </form>
    
    </div>    
@endsection
    
