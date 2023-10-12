@extends('layouts.default')
@section('content')
    <div class="bg-transparent h-full">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-end p-4 lg:px-8" aria-label="Global">
                <div class="flex lg:hidden">
                    <button type="button" data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Product</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">FQA</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Team</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="{{ url('login') }}" class="text-sm font-semibold leading-6 text-gray-900">Log in <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </nav>
            {{-- SideBar --}}
            <div id="logo-sidebar"
                class="sm:hidden fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-hijau-primary border-r border-gray-200 dark:bg-green-800 dark:border-gray-700"
                role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-hijau-primary px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img class="h-24 w-auto bg-white rounded-full" src="{{ asset('images/logo-primary.png') }}"
                                alt="">
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700"
                            data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                            aria-controls="logo-sidebar">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="h-full pt-5 pb-4 overflow-y-auto bg-hijau-primary ">
                            <ul class="space-y-2 font-medium">
                                <li>
                                    <a href="{{ url('/dashboard') }}"
                                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-abu-200 group-hover:text-gray-900 dark:group-hover:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 21">
                                            <path
                                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                            <path
                                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                                        </svg>
                                        <span class="ml-3">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-abu-200 group-hover:text-gray-900 dark:group-hover:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 18 18">
                                            <path
                                                d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                                        </svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap">Data Komoditas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-abu-200 group-hover:text-gray-900 dark:group-hover:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                                        </svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap">Pesanan</span>
                                        <span
                                            class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-gray-700 dark:text-blue-300">3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-abu-200 group-hover:text-gray-900 dark:group-hover:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 18">
                                            <path
                                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                                        </svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-abu-200 group-hover:text-gray-900 dark:group-hover:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 18 20">
                                            <path
                                                d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                                        </svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('login') }}"
                                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-abu-200 group-hover:text-gray-900 dark:group-hover:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 18 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                                        </svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap">Masuk</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('register') }}"
                                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-abu-200 group-hover:text-gray-900 dark:group-hover:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                                            <path
                                                d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                                            <path
                                                d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                                        </svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap">Daftar</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        {{-- End SideBar --}}
        <div class="relative isolate -top-[72px] lg:px-8">
            <div class="mx-auto max-w-2xl sm:py-48 lg:py-56">
                <div class="flex justify-center items-center h-96 bg-center bg-cover"
                    style="background-image: url('/images/petani.jpg')">
                    <div class=" w-full h-full bg-hijau-primary/30 backdrop-blur-[2px] backdrop-brightness-[0.6]">
                    </div>
                    <div class="flex flex-col  justify-center items-center absolute">
                        <img class="z-10 w-40 h-40" src="{{ asset('/images/logo-secondary.png') }}" alt="">
                        <span class="z-10 text-white ">Jabat Tangan Untuk Kesejahteraan</span>
                    </div>
                </div>
                <div class="container flex flex-col p-4 bg-hijau-primary text-white">
                    <span class="text-lg text-center mx-16 tracking-wider mb-4">Perkenalkan kami dari JABATANI</span>
                    <p class="text-sm text-justify px-2 mb-14">JABATANI adalah sebuah platform sebagai jembatan antara
                        petani dan pedagang untuk memasarkan hasil
                        panennya. Hubungan petani dan pedagang berkaitan erat dengan stabilitas harga komoditas pertanian di
                        pasar.</p>
                </div>

                {{-- ! Login side --}}
                <div class="container p-8">
                    <p class="text-md text-center text-hijau-secondary font-bold tracking-wider">Mari <span
                            class="text-hijau-primary">GABUNG</span> bersama kami sebagai
                        <span class="text-hijau-primary">MITRA JABATANI</span>
                    </p>
                    <div class="flex flex-col gap-5 mt-6">
                        <a class="w-full flex flex-col p-2 py-6 rounded-2xl overflow-hidden shadow-big bg-abu-150"
                            href="{{ url('/login') }}">
                            <img class="w-32 mx-auto" src="{{ asset('images/farmer.png') }}"
                                alt="Sunset in the mountains">
                            <span class="mx-auto text-2xl font-bold text-hijau-primary">Petani</span>
                        </a><a class="w-full flex flex-col p-2 py-6 rounded-2xl overflow-hidden shadow-big bg-abu-150"
                            href="{{ url('/login') }}">
                            <img class="w-32 ml-[90px]" src="{{ asset('images/broker.png') }}"
                                alt="Sunset in the mountains">
                            <span class="mx-auto text-2xl font-bold text-hijau-primary">Pedagang</span>
                        </a>
                    </div>
                </div>

                {{-- ! FAQ Section --}}
                <div class="container py-6 bg-hijau-primary flex flex-col justify-center">
                    <span class="text-[40px] text-center font-bold text-white">FAQ</span>
                    <span class="text-lg text-center font-bold text-white tracking-wider">Seputar JABATANI</span>
                    <ul class="p-4 mx-4 list-decimal text-white">
                        <li>Apa itu Jabatani?</li>
                        <li>Apa saja keuntungan menjadi mitra Jabatani?</li>
                        <li>Bagaimana cara mendaftar menjadi mitra Jabatani?</li>
                        <li>Apa saja komoditas yang tersedia dilayanan ini?</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-abu-200 gap-4 flex items-center">
            <div class="p-6">
                <img class="w-96 mx-auto    " src="{{ asset('/images/logo-primary.png') }}" alt="">
            </div>
            <nav class="text-hijau-primary font-bold tracking-wider">
                <ul>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Petani</a></li>
                    <li><a href="#">Pedagang</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </nav>
            <p class="text-hijau-primary font-bold tracking-wider">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
        </div>
    </div>
@endsection
