<html lang="fr">
    <body>
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
    <ul>
        <h3>Liste de film </h3>
            @foreach($films as $film)
                <li> {{$film->titre}} </li>
            @endforeach
    </ul>
        <br>
    <ul>
        <h3>Mes film </h3>
            @foreach($mesfilms as $film)
                <li> {{$film->titre}} </li>
            @endforeach
    </ul>
    </body>
</html>
