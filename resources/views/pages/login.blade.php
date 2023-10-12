<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('/images/logo-primary.png')}}">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body class="font-kanit flex flex-col min-h-screen">
    <div class="p-5">
        <img class="mx-auto" width="120px" src="{{ asset('images/logo-primary.png') }}" alt="Logo">
    </div>
    <div class="container py-0 mx-auto px-4 ">

        <h1 class="text-xl text-center font-bold text-hijau-primary">Masuk</h1>

        {{-- ! Form Input --}}
        <form method="POST" action="" class="mx-auto mt-5 px-4 max-w-xl">
            @csrf
            @if ($errors->any())
                <div class="bg-red-400 rounded-lg mx-4 mb-2 text-white ">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li class="border pl-2 border-x-0 border-b-1">{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="grid grid-cols-1 gap-x-8 gap-y-5 sm:gap-y-4">
                {{-- Input Form --}}
                <input type="email" name="email" id="email" autocomplete="email" placeholder="Email"
                    value="{{ old('email') }}"
                    class="block w-full bg-abu-200 rounded-full border-0 px-3.5 py-2
                    text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-md pl-6
                    placeholder:text-abu-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm
                    sm:leading-6">
                <input type="password" name="password" id="password" autocomplete="password" placeholder="Password"
                    class="block w-full bg-abu-200 rounded-full border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-md pl-6  placeholder:text-abu-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                {{-- Submit Form --}}
                <button type="submit"
                    class="block w-full rounded-full bg-hijau-primary px-3.5 
                        py-2.5 text-center text-xl font-bold text-white shadow-drop
                        hover:shadow transition duration-150 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Masuk
                </button>
                <span class="text-xl text-center font-bold text-hijau-primary">atau</span>
                <a type="button"
                    class="px-4 py-2.5 shadow-drop bg-abu-100 text-abu-300 flex justify-start items-center gap-2 border-slate-200 rounded-full hover:border-slate-400 hover:text-slate-900 hover:shadow transition duration-150">
                    <img class="w-6 h-6" src="https://www.svgrepo.com/show/475656/google-color.svg"
                        loading="lazy"alt="google logo">
                    <span class="font-bold mx-auto">Google Account</span>
                </a>
                <a type="button"
                    class="px-4 py-2.5 shadow-drop bg-abu-100 text-abu-300 flex justify-start items-center gap-2 border-slate-200 rounded-full hover:border-slate-400 hover:text-slate-900 hover:shadow transition duration-150">
                    <svg fill="#3e5acc" width="28px" height="28px" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z">
                            </path>
                        </g>
                    </svg>
                    <span class="font-bold mx-auto">Facebook Account</span>
                </a>
                <span class="text-sm text-center font-bold text-gray-500">Belum punya akun ? Silahkan untuk
                    <a class="text-hijau-primary" href="{{ route('register') }}">Daftar</a>
                </span>
            </div>
        </form>
    </div>
    @include('includes.footer')
</body>

</html>
