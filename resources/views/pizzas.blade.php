<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <h1>Pizza House</h1>
        <h1>The North's Best Pizzas</h1>
        <br>
        <br>
        @if($age > 18)
            <h1>Over 18</h1>
        @else
            <h1>Below 18</h1>
        @endif

        @unless($age < 18)
        <h1>Over 18</h1>

        @endunless

        @php
            echo "Yes"
        @endphp

        <!-- Stopped at lesson 6 -->
    </body>
</html>
