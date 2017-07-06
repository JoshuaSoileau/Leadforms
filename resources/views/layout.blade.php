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
            <div class="col-2">
                <nav class="nav-sidebar">
                    <ul class="nav">
                        <li class="active"><a href="javascript:;">All Forms</a></li>
                        <li><a href="javascript:;">All Leads</a></li>
                        <li><a href="javascript:;">My Settings</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-10">
                @yield('content')
            </div>
        </div>
    </body>
</html>
