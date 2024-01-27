<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/post.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fotorama.css') }}">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>
</head>

<body>

    {{ $slot }}
    @include('frontend.layouts.inc.footer')
    <!-- SweetAlert2 -->
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/fotorama.js') }}"></script>
    <!-- Your webpage content -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    @yield('scripts')
    <script>
        document.getElementById('supportButton').addEventListener('click', function() {
            var pdfUrl = '{{ asset('assets/support.pdf') }}';
            window.location.href = pdfUrl;
        });
        document.getElementById('mbsupportButton').addEventListener('click', function() {
            var pdfUrl = '{{ asset('assets/support.pdf') }}';
            window.location.href = pdfUrl;
        });
        
        $('.changeLanguage').change(function(event) {
            var url = "{{ route('google.translate.change') }}";
            window.location.href = url + "?lang=" + $(this).val()
        })
    </script>
</body>

</html>
