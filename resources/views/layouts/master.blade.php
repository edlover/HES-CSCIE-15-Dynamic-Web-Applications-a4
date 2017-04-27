<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title', 'Usher Management Application')
        </title>

        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="/css/ushers.css" type='text/css' rel='stylesheet'>

        @stack('head')

    </head>
    <body>

        @if(Session::get('message') != null)
            <div class='message'>{{ Session::get('message') }}</div>
        @endif

        <header>
            <div class='container-fluid'>
                <div class='row page-header'>
                    <div class='col-sm-6'>
                        <h1>Church of the Messiah</h1>
                        <h5>The Episcopal Church in Gwynedd Pennsylvania</h5>
                    </div>
                    <div class='col-sm-6, header-right'>
                        <h2>Usher Management Application</h2>
                    </div>
                </div>
                <div class='row'>
                    <ul class='nav nav-tabs'>
                        <li role='presentation'><a href="#">Services</a></li>
                        <li role='presentation'><a href="#">Create Service(s)</a></li>
                        <li role='presentation'><a href='/teams'>Usher Teams</a></li>
                        <li role='presentation'><a href='/usher/new'>Create New Usher</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <section>
            @yield('content')
        </section>

        <footer>
            &copy; copyright {{ date('Y') }}. Church of the Messiah. All Rights Reserved.
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        @stack('body')

    </body>
</html>
