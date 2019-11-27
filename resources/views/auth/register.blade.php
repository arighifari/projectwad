@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/stylelogin.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="login-wrap">
                <div class="login-html">
                    <form  method="POST" action="{{ route('register') }}">
                        @csrf
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Register</label>
                        <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"></label>
                        <div class="login-form">
                            <div class="sign-in-htm">
                                <div class="group">
                                    <label for="user" class="label">Nama</label>
                                    <input id="user" type="text" class="input" name="name" placeholder="Nama" required>
                                </div>
                                <div class="group">
                                    <label for="userreg" class="label">Email</label>
                                    <input id="userreg" type="email" class="input" name="email" placeholder="Email" required>
                                </div>
                                <div class="group">
                                    <label for="user" class="label">Password</label>
                                    <input id="user" type="password" class="input" name="password" placeholder="Password" required autocomplete="new-password">
                                </div>
                                <div class="group">
                                    <label for="user" class="label">Confirm Password</label>
                                    <input id="user" type="password" class="input" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                </div>
                                <div class="group">
                                    <label for="">Have an Account?</label> <a href="{{route('login')}}">Login</a>
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Register">
                                </div>

                                <div class="hr"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
