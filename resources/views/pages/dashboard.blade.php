@extends('layouts.default')
@section('navbar')
    @include('includes.navbar')
@endsection
@section('content')
    <div class="container flex items-center justify-center h-52 bg-abu-300">


        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ url('/images/maxresdefault.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ url('/images/mqdefault.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ url('/images/el-nino-landa-indonesia-menteri-pertanian-siapkan-langkah-antisipasi-yvx.png') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </div>
    @if ($user->role == 'pedagang')
        {{-- Dashboard Pedagang --}}

    <div class="container max-h-full p-2">
        @include('includes.search') 
        <div class="flex flex-wrap justify-center gap-6 p-4">
            @if(isset($data_api['data1']['komoditas']) && isset($data_api['data1']['harga']))
                @for($i = 0; $i < count($data_api['data1']['komoditas']); $i++)
                    <a class="p-2 py-6 overflow-hidden shadow-lg w-36 rounded-2xl bg-hijau-primary" href="{{ url('/list')}}">
                        <img class="w-16 pb-2 mx-auto" src="{{ asset('images/cabaibesar.png') }}" alt="Sunset in the mountains">
                        <div class="flex flex-col items-center px-2 py-1">
                            <span class="text-sm text-white">{{ $data_api['data1']['komoditas'][$i] }}</span>
                            <span class="text-sm text-white">Rp{{ $data_api['data1']['harga'][$i] }}</span>
                        </div>
                    </a>
                @endfor
        @else
            <p>No data available.</p>
        @endif
        </div>
    </div>
    
    {{-- Dashboard Petani --}}
    <div class="container p-7">
        <h2 class="pb-3 text-center text-abu-300">Update Harga Komoditas Pasar</h2>
        @if(isset($data_api['data1']['komoditas']) && isset($data_api['data1']['harga']))
            @for($i = 0; $i < count($data_api['data1']['komoditas']); $i++)
            <div class="container py-2">
                <div class="flex items-center justify-between w-full gap-2 p-4 m-auto text-white rounded-lg bg-hijau-primary">
                    {{-- <img src="{{ asset('images/cabaibesar.png') }}" class="w-1/5" alt=""> --}}
                        <div class="flex items-center gap-2">
                            <h2 class="font-bold text-md">{{ $data_api['data1']['komoditas'][$i] }}</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-square-fill" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 9h8a.5.5 0 0 0 .374-.832l-4-4.5a.5.5 0 0 0-.748 0l-4 4.5A.5.5 0 0 0 4 11z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-square-fill" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 4a.5.5 0 0 0-.374.832l4 4.5a.5.5 0 0 0 .748 0l4-4.5A.5.5 0 0 0 12 6H4z"/>
                            </svg>
                            <p>Rp {{ $data_api['data1']['harga'][$i] }}</p>
                        </div>
                </div>
            </div>
            @endfor
        @else
            <p>No data available.</p>
        @endif
    </div>

@endsection
