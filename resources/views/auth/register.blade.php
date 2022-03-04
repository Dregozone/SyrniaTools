@extends('layout.app')

@section('content')
    <h1>Register</h1>

    <section>
        <form action="{{ route('register') }}" method="post" autocomplete="off">
            @csrf

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" id="username" placeholder="Enter your username" value="" />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Enter your email" value="" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Enter your password" />
            </div>

            <div class="form-group">
                <label for="password_confirm">Confirm password</label>
                <input class="form-control" type="password" name="password_confirm" id="password_confirm" placeholder="Confirm your password" />
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Login" aria-label="Submit Button" />
            </div>

        </form>
    </section>
@endsection
