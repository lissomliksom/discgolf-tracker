<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Discgolf</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
      @yield('content')

      @yield('link')

      <footer class="footer has-background-dark">
        <div class="columns is-centered">
            <div class="column is-one-fifth">
                <div class="container">
                    <div class="content has-text-centered">
                        <p>
                            Code and design by <a href="https://www.github.com/lissomliksom" target="_blank">Simen Kristoffersen</a>
                        </p>
                        <p>
                            Icons made by 
                            <a href="https://www.freepik.com" title="Freepik">Freepik</a> 
                            from 
                            <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
      </footer>

    </body>
</html>