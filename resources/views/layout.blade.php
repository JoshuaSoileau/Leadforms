<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('head')
    </head>
    <body>
        <div class="row">
            @include('header')
        </div>
        <div class="row">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </body>
</html>
