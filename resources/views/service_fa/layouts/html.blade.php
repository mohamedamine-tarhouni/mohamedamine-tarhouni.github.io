<!DOCTYPE html>

<html lang="fr">

<head>
    @include('service_fa.layouts.head')
</head>

<body>

    <!--CONTENT-->
    @yield('content')
    <!--END: CONTENT-->
    @vite('resources/js/service_fa.js')
    @yield('scripts')
</body>

</html>
