<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title') | {{ config('app.name') }}</title>

        <!-- bootstrap -->
        <link
            rel="stylesheet"
            href="{{ asset('theme/dist/vendor/bootstrap/css/bootstrap.min.css') }}"
        />
        <!-- font -->
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="{{ asset('theme/dist/css/style.min.css') }}" />
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        <script src="{{ asset('theme/dist/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('theme/dist/js/script.min.js') }}"></script>
    </body>
</html>
