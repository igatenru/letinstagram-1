<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>
    </head>
    <body>
        <h1>Добро пожаловать в {{ env('APP_NAME') }}!</h1>
        <img width='300px' src='{{ $imgsrc }}'>
        <ul>
        @forelse ($query as $q => $v) 
            <li>{{ $q }} = {{ $v }}</li>
        @empty
            <p>No data in $query</p>
        @endforelse
        </ul>
    </body>
</html>
