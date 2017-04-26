<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title', 'Usher Team Scheduler')
        </title>

        <meta charset='utf-8'>
        <link href="/css/ushers.css" type='text/css' rel='stylesheet'>

        @stack('head')

    </head>
    <body>

        @if(Session::get('message') != null)
            <div class='message'>{{ Session::get('message') }}</div>
        @endif

        <header>
            <!-- put some sort of header picture here -->
        </header>

        <section>
            @yield('content')
        </section>

        <footer>
            &copy; {{ date('Y') }}
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        @stack('body')

    </body>
</html>
