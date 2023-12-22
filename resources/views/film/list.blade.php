@extends('layouts.base')

@section('content')
    <h1> List  de film {{$nom}}  -
    @auth
        <a> ma liste</a>
    @else
        <a href="{{ route('user.form') }}"> se connecter </a>
        @endauth
        </h1>
        <br>
        <br>
        <form action="{{ route('film.create') }}" method="post">
            @csrf
            <fieldset>
                <legend>ajouter un nouveau film</legend>
                <label for="titre">Nom</label>
                <input type="text" name="titre" id="titre">
                <br>
                <label for="description">Description</label>
                <input type="text" name="description" id="description">
                <br>
                <label for="realisateur">Realisateur</label>
                <input type="text" name="realisateur" id="realisateur">
                <br>
                <br>
                <input type="submit" value="Ajouter">
            </fieldset>
        </form>
        <ul class="row">
            <h3>Liste de film </h3>
            @foreach($films as $film)
                <div class="col col-md-6 col-lg-4 mt-2">
                    <div class="card shadow-sm">

                        <img class="card-image" src="https://images.caradisiac.com/logos/2/9/8/7/272987/S8-les-habitants-de-los-angeles-s-opposent-a-fast-furious-197701.jpg" alt="">
                        <div class="card-body">
                            <p class="card-text">{{$film->description}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted"> {{$film->votes}} votes</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </ul>
        <br>
        <ul class="row">
            <h3>Mes film </h3>
            @foreach($mesfilms as $film)
                <div class="col col-md-6 col-lg-4">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$film->titre}}</text></svg>

                        <div class="card-body">
                            <p class="card-text">{{$film->description}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </ul>
@endsection
