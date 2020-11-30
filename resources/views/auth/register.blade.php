@extends('layouts.app')
@section('content')
    <div class="signup">
        <div class="signup__container">
            <h1>Register</h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div>
                    <input value="{{ old('name') }}" name="name" type="text" placeholder="Enter name" />
                    @error('name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <input value="{{ old('username') }}" name="username" type="text" placeholder="Enter username" />
                    @error('username')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
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
                <div>
                    <input name="password_confirmation" type="password" placeholder="Confirm password" />
                </div>
                <button>Signup</button>
                <a href="/login">Already have an account Login ?</a>
            </form>
        </div>
    </div>
@endsection
