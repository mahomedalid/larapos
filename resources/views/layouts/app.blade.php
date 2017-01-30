@include('partials.header')

<body>
    @include('partials.navbar')

    @include('partials.notification')

    @yield('content')

    <!-- Scripts -->
    <script src="{{ URL::asset('/js/app.js') }}"></script>
    <script src="{{ URL::asset('/js/all.js') }}"></script>
</body>
</html>
