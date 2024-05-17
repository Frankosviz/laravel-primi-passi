<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    <nav class="bg-primary">
        <div>
            <h1 class="text-center text-uppercase text-white">My first Laravel project</h1>
        </div>
    </nav>
    <div class="container">
        <h2 class="text-uppercase text-center">Process to do to let Laravel work</h2>
    
    <div class="row my-5">
        <div class="col-6 ">
            <p class="text-center"><strong class="text-danger">(1)</strong>Andiamo a rimuovere il postcss per poi installare il nuovo bootstrap</p>
            <h4 class="fw-bold text-center">npm remove postcss</h4>
        </div>
        <div class="col-6">
            <p class="text-center"><strong class="text-danger">(2)</strong>Andiamo a scaricare il presettaggio precedentemente compilato dal prof Fabio Pacifici
                che installa
                bootstrap
                sass vite</p>
            <h4 class="fw-bold text-center">composer require pacificdev/laravel_9_preset</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <p class="text-center"><strong class="text-danger">(3)</strong>Andiamo a scaricare il pacchetto</p>
            <h4 class="fw-bold text-center">php artisan preset:ui bootstrap </h4>
        </div>
        <div class="col-6">
            <p class="text-center"><strong class="text-danger">(4)</strong> Andiamo ad installare il pacchetto</p>
            <h4 class="fw-bold text-center">npm install </h4>
        </div>
    </div>
    </div>

</body>

</html>