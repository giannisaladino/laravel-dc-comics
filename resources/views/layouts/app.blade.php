<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home Page')</title>
    @vite('resources/js/app.js')
</head>

<body>

    <header class="mb-4">
        <h1 class="text-center p-2" >COMICS!</h1>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <div class="justify-content-around collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item btn btn-info m-1">
                            <a class="nav-link active" aria-current="page" href=" {{ route('welcome') }} ">Home</a>
                        </li>
                        <li class="nav-item btn btn-info m-1">
                            <a class="nav-link" href=" {{ route('comics.index') }} ">Fumetti</a>
                        </li>

                        <li class="nav-item btn btn-info m-1">
                            <a class="nav-link" href=" {{ route('comics.create') }} ">Crea un fumetto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>