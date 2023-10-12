<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body class="font-kanit flex flex-col min-h-screen">
    <div class="p-5">
        <img class="mx-auto" width="120px" src="{{ asset('images/logo-primary.png') }}" alt="Logo">
    </div>
    <div class="container py-0 mx-auto px-4 ">
        <h1 class="text-xl text-center font-bold text-hijau-primary">Daftar</h1>
        <form method="POST" action="" class="mx-auto mt-5 px-4 max-w-xl">
            @csrf
            @if ($errors->any())
                <div class="bg-red-400 rounded-lg mb-2 text-white ">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li class="border pl-2 border-x-0 border-b-1">{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="grid grid-cols-1 gap-x-8 gap-y-5 sm:gap-y-4">
                {{-- Input Form --}}
                <input type="text" name="name" id="name" autocomplete="name" placeholder="Nama"
                    class="block w-full bg-abu-200 rounded-full border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-md pl-6  placeholder:text-abu-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <input type="number" name="phone" id="phone" autocomplete="phone" placeholder="Nomor Telepon"
                    class="block w-full bg-abu-200 rounded-full border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-md pl-6  placeholder:text-abu-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <input type="email" name="email" id="email" autocomplete="email" placeholder="Email"
                    class="block w-full bg-abu-200 rounded-full border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-md pl-6  placeholder:text-abu-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <input type="password" name="password" id="password" autocomplete="password" placeholder="Password"
                    class="block w-full bg-abu-200 rounded-full border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-md pl-6  placeholder:text-abu-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="password"
                    placeholder="Konfirmasi Password"
                    class="block w-full bg-abu-200 rounded-full border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-md pl-6  placeholder:text-abu-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                {{-- Submit Form --}}
                <button type="submit"
                    class="block w-full rounded-full bg-hijau-primary px-3.5 
                        py-2.5 text-center text-xl font-bold text-white shadow-drop
                        hover:shadow transition duration-150 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Daftar
                </button>
                <span class="text-sm text-center font-bold text-gray-500">Sudah punya akun ? Silahkan untuk
                    <a class="text-hijau-primary" href="/">Masuk</a>
                </span>
            </div>
        </form>
    </div>
    @include('includes.footer')
</body>

</html>
