<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
#isset($title)
        {{$title}} |
{{config('app.name')}}
        @endisset
        {{config('app.name')}}
        @yield('link')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </title>

</head>
<body>

    <div class="container">
        @yield('isi')
    </div>

    @yield('script')
    <script src="{{ asset('js/app.js') }}"></script>
</body>


</html>