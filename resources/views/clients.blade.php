<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    </head>
    <body>
     @foreach ($names as $item)
         <h2>{{$item}}</h2>
     @endforeach 
    </body>
</html>
