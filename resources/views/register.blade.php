@extends('layouts.guest')

@section('title',  'FoxLessons - Registrati')

@section('script')
<script src='{{ asset('js/register.js')  }}' defer></script>
@endsection

{{-- #TODO : insert action to route and change js
 --}}@section('main')
<main>

    <form name="registration_form" id="registration_form" method="post" action="{{ route('register') }}">
        <h3 id="site_name">FoxLessons</h3>
        <div id="register">Registrati</div>
        <div class="error1 hidden">Compila correttamente i campi.</div>

        @if($errors->has('error'))
        <div class="error1">Compila correttamente i campi.</div>
        @endif
        
        <p class="name"> <!-- 1- -->
            <label>Nome<input type='text' name='name' value="{{Request::old("name")}}"></label>

        </p>
        <p class="surname"> <!-- 2- -->
            <label>Cognome<input type='text' name='surname' value="   {{Request::old("surname")}}"></label>

        </p>
        <p class="username"> <!-- 3- -->
            <label>Nome Utente<input type='text' name='username' value="{{Request::old("username")}}"></label>

        </p>
        <p class="email"> <!-- 4- fb-->
            <label>E-Mail<input type='text' name='email' value="{{Request::old("email")}}"></label>
            
        </p>
        <p class="password"> <!-- 5- -->
            <label>Password <input type='password' name='password' value="{{Request::old("password")}}"></label>

        </p>
        <p class="confirmpassword"> <!-- 6- frb-->
            <label>Ripeti la password<input type='password' name='confirmpassword' value="{{Request::old("confirmpassword")}}"></label>

        </p>
        <p id="logandsubmit">
            <a href="{{ route('login')}}" id="loginredirect">Già registrato? Effettua il login.</a><input type='submit' id="submit" value="Registrati">
        </p>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
</main>
@endsection


