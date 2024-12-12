@extends('layouts.app')

@section('content')

    <body>
    <!-- Start Login -->
    <div class="formInner">
        <div class="imgInner">
            <img src="{{ asset('media/reg.jpeg') }}" alt="">
        </div>
        <div class="form">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <header>
                    <h1>Login</h1>
                    <span>Welcome back to sitname, Let’s get started!</span>
                </header>
                <div class="inputs">
                    <div class="input">
                        <input type="text" placeholder="Username" name="{{ config('fortify.username') }}" spellcheck="false" value="{{ old(config('fortify.username')) }}">
                        <img src="{{ asset('media/icons/User.png') }}" alt="">
                    </div>
                    <div class="input">
                        <input type="password" name="password" placeholder="Password">
                        <img src="{{ asset('media/icons/LockSimpleOpen.png') }}" alt="">
                    </div>
                    <div class="rem">
                        <div class="chk"><input type="checkbox" id="check"> <label for="check">Remember me</label></div>
                        <a href="##">Forget Password?</a>
                    </div>
                </div>
                <button type="submit" class="btn w100">Login</button>
                <div class="dont">
                    Don't have an account? <a href="{{ url('register') }}">Register now</a>
                </div>
            </form>
        </div>
    </div>
    <!-- End Login -->

    <!-- Success Pop Up -->
    @if(session('success'))
        <div class="popUp">
            <div class="message success">
                {{ session('success') }}
            </div>
        </div>
    @endif

    </body>

@endsection
