<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Movies DB | @yield('page-title')</title>
    <link rel="icon"  href="../../img/favicon.ico">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <div class="container-fluid d-flex justify-content-center py-4">
            <h1>The Movie DB</h1>
        </div>
    </header>
    <main>
        <div class="ms-container">
    
                @foreach ($movies as $movie)
                
                    <div class="ms-grid" style="width: 100%">
                        <div class="card" style="width: calc(100%/5 - 20px)">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                                <p class="card-text">{{ $movie->nationality }}</p>
                                <p class="card-text">{{ $movie->date }}</p>
                                <strong class="card-text">{{ $movie->vote }}</strong> 
                            </div>
                        </div>
                    </div>
        
                @endforeach
        </div>
    </main>
    <footer>

    </footer>

</body>

</html>