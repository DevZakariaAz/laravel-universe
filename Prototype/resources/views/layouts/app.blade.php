<!DOCTYPE html>
<html>

<head>
    <title>Real Estate Agency - Prototype</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex vh-100 justify-content-center align-items-center">
    <div class="text-center">
        <h4>Prototype</h4>
        <div class="container p-6">
            <div class="d-flex justify-content-center gap-2">
                <a class="btn btn-primary" href="/">Home</a>
                <a class="btn btn-primary" href="/about">About</a>
                <a class="btn btn-primary" href="/contact">Contact</a>
            </div>
        </div>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
