@include('partials.header')

<body>
    @include('partials.navbar')

    @include('partials.notification')

    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/all.js"></script>
</body>
</html>
