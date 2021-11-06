<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <body>
        @yield('content')

        @yield('script')
    </body>
</html>