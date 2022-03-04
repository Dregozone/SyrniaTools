<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ ucfirst($page) }} - {{ config('app.name') }}</title>
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{ asset('css/shared.css') }}" />
    </head>
    <body>

        <nav>
            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('tools') }}">Tools</a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}">Register</a>
                </li>
            </ul>
        </nav>

        <main class="container">
            @yield('content')
        </main>
        
    </body>
</html>
