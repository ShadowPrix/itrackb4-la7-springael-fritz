<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        nav a.active {
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        @include('partials._nav')

        <h1>Springael Movie Hub</h1>
        <p>Prepared by: Fritz C. Springael</p>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>