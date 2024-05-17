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
            <h1 class="text-center text-uppercase text-white">Pagina di prova con aggiunta di array</h1>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3>Ciao {{ $name }} {{ $surname }}.</h3>
                <h3>So che hai appena compiuto {{ $eta }} anni!</h3>
                <h3>La tua città di origine è {{ $luogo }}.</h3>
            </div>
            <div class="col-6">
                <h3>Sono felice che tu stia usando {{ $framework }}, ti permetterà di essere più ordinato e di capire meglio i concetti della programmazione. </h3>
            </div>
        </div>
    </div>

</body>

</html>