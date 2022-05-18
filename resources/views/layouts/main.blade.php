<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    <!--Link do Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Link do Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <!--CSS da Aplicação-->
    <link rel="stylesheet" href="/css/estilo.css">

    </head>
    <body>
        @yield('content')
    </body>
    <footer>
        Nascimento &copy; 2022.
    </footer>
</html>
    