<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}} ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="{{asset('libraries/select2/css/select2.min.css')}}"> --}}
    <title>Quotes</title>
</head>
<body class="bg-lavender">
    @include('0 theme.bootstrap.index.nav')

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js')}} "></script>
    {{-- <script src="{{asset('libraries/select2/js/select2.min.js')}}"></script> --}}
    {{-- <script src="{{asset('libraries/select2/config.js')}}"></script> --}}
</body>
</html>
