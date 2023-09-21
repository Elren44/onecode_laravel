<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page.title', config('app.name'))</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic"
        rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('css')
</head>

<body class="body">
    <div class="d-flex flex-column min-vh-100 justify-content-between wrapper">
        @include('includes.alert')
        @include('includes.header')
        <main class="flex-grow-1 py-3">
            @yield('content')
        </main>
        @include('includes.footer')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.min.js" defer></script>
    @stack('js')
</body>

</html>
