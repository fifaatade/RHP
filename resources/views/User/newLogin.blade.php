@extends('User.layout.masteregistry')
@section('title','new login')


@section('content')
    <div class="d-flex userform">
        <section class="formimg">
            <img src="{{asset('images/bg1.jpg')}}" class="" alt="...">
        </section>
        <form action="{{route('modifyPassWord')}}" method="POST" autocomplete="off" enctype="multipart/form-data" style=" margin-left:50%; margin-top: 5%" class="form" >
                @csrf
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" name="new_password" class="form-control" id="">
            </div>
            <div class="mb-3 mt-3">
                <label for="password_confirmation" class="form-label">Confirmation du mot de passe</label>
                <input type="password" name="new_password_confirmation" class="form-control" id="">
            </div>
            <button type="submit" class="btn btn-success float-end "> Enregistrer</button>
        </form>
    </div>
@endsection

