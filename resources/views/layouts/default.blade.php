<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.head')
</head>
<body class="font-kanit flex flex-col min-h-screen">
    @yield('navbar')
    <div class="mt-14 pt-4 max-h-full">
        @yield('content')
    </div>
    @include('includes.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>
