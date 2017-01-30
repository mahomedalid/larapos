@include('partials.header')

<body>
    @yield('content')

    <!-- Scripts -->
    <script src="{{ URL::asset('/js/app.js') }}"></script>
    <script src="{{ URL::asset('/js/all.js') }}"></script>
</body>
</html>
