<!DOCTYPE html>
<html lang="en" 
@hasSection('theme') data-theme=@yield('theme') @endif
>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('layouts.header')
    <div class="bg-amber-200 dark:bg-blue-950 dark:text-white">
        <div class="w-4xl mx-auto px-6 py-8">
            @yield('content')
        </div>
    </div>
    
    @include('layouts.footer')
</body>
</html>