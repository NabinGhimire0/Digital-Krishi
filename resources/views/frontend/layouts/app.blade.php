<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/post.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>
</head>

<body>

    {{ $slot }}
    @include('frontend.layouts.inc.footer')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Your webpage content -->
    <script>
        document.getElementById('supportButton').addEventListener('click', function() {
            var pdfUrl = '{{ asset('assets/support.pdf') }}';
            window.location.href = pdfUrl;
        });
        document.getElementById('mbsupportButton').addEventListener('click', function() {
            var pdfUrl = '{{ asset('assets/support.pdf') }}';
            window.location.href = pdfUrl;
        });
    </script>
</body>

</html>
