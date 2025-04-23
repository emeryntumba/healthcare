<!DOCTYPE html>
<html lang="en" data-theme="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="lg:mx-32">
        <header class="mt-2">
            <x-sections.navbar/>
        </header>

        @yield('content')

        <x-sections.footer/>
    </div>
</body>
</html>
