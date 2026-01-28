<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    @include('partials.navbar')
    <div class="grow container mx-auto px-4 py-6">
        @yield('content')
    </div>

    @include('partials.footer')
    <script src="js/app.js"></script>
    
</body>
</html>