<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel y Vue.js</title>
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ url('js/main.js') }}"></script>
</body>
</html>