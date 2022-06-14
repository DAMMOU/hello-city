<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name'))</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    </head>

    <body class="py-6 flex flex-col justify-between items-center  min-h-screen">
       <main role="main">
            @yield('content')
       </main>
              
       <footer class="text-gray-400">
            <p>&copy; Copyright {{date('Y')}} 
            @if(!Route::is('about'))
                &middot; <a href="{{ route('about') }}" class="text-indigo-500 hover:text-indigo-600 underline">About Us</a>
            </p>
            @endif
       </footer>
    </body>

</html>
