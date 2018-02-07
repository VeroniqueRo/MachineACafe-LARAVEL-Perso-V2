
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Machine a café</title>

        <!-- Fonts -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
        integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <link href="/css/app.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <header>
            @include('template.menu')
        </header>
        <section>
            <div class="content">
                <div class="title m-b-md">
                    @yield('titre')
                </div>
                    @yield('image')
                    @yield('content')
            </div>
        </section>
        <footer>
            @include('template.footer')
        </footer>
    </body>
</html>
