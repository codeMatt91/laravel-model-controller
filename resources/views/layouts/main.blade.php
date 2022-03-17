<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ env('APP_NAME') }} | @yield('title', 'My project')</title>
</head>

<body>
    
    @include('includes.header')
    

    <main class="py-5">
        @yield('content')
    </main>

</body>
</html>