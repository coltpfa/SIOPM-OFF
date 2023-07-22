<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME', "Laravel") }}</title>
    @vite([ 'resources/js/app.js'])
    @yield('css')

<body>


<div class="container">


    @yield('content')
</div>
@stack('js')
</body>

</html>



