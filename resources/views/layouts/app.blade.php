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
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href=" {{ route('welcome') }} ">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" {{ route('comics.index') }} ">Fumetti</a>
                        </li>

                        <li class="nav-item">
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