@extends('layouts.app')

@section('content')

<main class="form-signin">
    <form class="p-4">
        <img class="mb-4 w-75" src={{ url('/assets/images/logo.png') }} alt="">
        <label for="inputEmail" class="visually-hidden">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Correo Electrónico" required autofocus>
        <label for="inputPassword" class="visually-hidden">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Recordar mi cuenta
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar Sesión</bu </form>
</main>
@endsection