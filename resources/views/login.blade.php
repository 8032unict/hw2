@extends('layouts.guest')

@section('title',  'FoxLessons - Login')

@section('script')
<script src='{{ asset('js/login.js')  }}' defer></script>
@endsection


@section('main')
<main>
    <form name="login_form" method="post" id="login_form" autocomplete="off" action="{{route('login')}}">
        <h3 id="site_name">FoxLessons</h3>
        @if ($errors->has('error'))
            <div class="errorLogin">Nome utente o password errata.</div>
        @endif
        <div class="error1 hidden">Compila tutti i campi.</div>
        <p>
            <label class="username">Nome Utente<input type='text' name='username' value="{{ old("username") }}"></label>
        </p>
        <p>
            <label class="password">Password <input type='password' name='password'></label>
        </p>
        <p id="logandsubmit">
            <a href="{{ route('register') }}" id="loginredirect">Non sei membro? Registrati.<a><input type='submit' value="Login"></label>
        </p>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
</main>
@endsection


