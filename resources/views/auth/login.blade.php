@extends('layouts.app')
@section('content')
    <div class="login">
        <div class="login__container">
            <h1>Login</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <input value="{{ old('email') }}" name="email" type="email" placeholder="Enter email" />
                    @error('email')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <input name="password" type="password" placeholder="Enter password" />
                    @error('password')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit">Login</button>
                <a href="/">forget password</a>
            </form>
        </div>
    </div>
@endsection
