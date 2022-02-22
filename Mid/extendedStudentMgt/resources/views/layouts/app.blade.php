<html>
    <head>
        <!-- js or css codes -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <center>
        <br>
        @include('includes.header')
        <br>
        @yield('content')
        @yield('demo')

        <br>
        </center>
        <div align="center">Copy Right © AIUB 2022</div>
    </body>
</html>