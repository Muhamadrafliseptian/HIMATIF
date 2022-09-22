<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HIMATIF | @yield('title')</title>
    @include('wargahimatif.partials.css.style')
    @yield('css')
</head>
<body>
    @include('wargahimatif.layouts.navbar.navbar')
    <main id="main">
        @yield('content')
    </main>
    @include('wargahimatif.layouts.footer.footer')
</body>
    @include('wargahimatif.partials.js.style')
    @yield('js')
</html>
