<html>

<body>
{{--     login form --}}
    <form method="post" action="{{route('user.login')}}">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Se connecter">
    </form> <br> <br> <br> <br>
{{--     register form --}}

    <form method="post" action="{{route('user.create')}}">
        @csrf
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <label for="password_confirmation">Password confirmation</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
        <br>
        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>
