<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Home</title>
</head>

<body>

    {{ $slot }}
    @include('frontend.layouts.inc.footer')
    <script src="assets/js/main.js"></script>
</body>

</html>
