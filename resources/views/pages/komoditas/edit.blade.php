@extends('layouts.default')
@section('navbar')
    @include('includes.navbar')
@endsection
@section('content')
    @include('includes.search')
    {{-- Single Item --}}
    <div class="container bg-abu-200 text-hijau-primary">
        <div class="flex flex-col h-fit">
            <div class="px-4 h-36 bg-cover bg-center" style="background-image: url('/images/cabai_besar.jpg')"></div>
            <div class="flex flex-col w-full p-4 ">
                <h2 class="font-bold text-xl">Cabai Merah Besar</h2>
                <div class="py-1 flex justify-between">
                    <div class="flex flex-col">
                        <span class="text-sm">Pak Sarmidi</span>
                        <span class="text-xl pt-2">Stok : 150kg</span>
                    </div>
                    <div class="flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                        <span class="text-sm">Loa Buah</span>
                    </div>
                </div>
                <span class="text-2xl font-bold mx-auto">Total Pesanan</span>
                <span class="text-2xl font-bold mx-auto">120 Kg</span>
                <div class="flex gap-4">
                    <a type="button"
                        class="block mt-4 w-full rounded-full bg-hijau-primary px-3.5 
                        py-2.5 text-center text-sm font-bold text-white shadow-drop
                        hover:shadow transition duration-150 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Edit Komoditas
                    </a>
                    <a type="button"
                        class="block mt-4 w-full rounded-full bg-merah-primary px-3.5 
                        py-2.5 text-center text-sm font-bold text-white shadow-drop
                        hover:shadow transition duration-150 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Hapus Komoditas
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- ! Pesanan --}}
    <div class="container p-6 flex flex-col gap-4">
        <span class="text-abu-300 text-center">Pesanan</span>
        <ul>
            @php
                $data = DB::select("SELECT * FROM pesanan WHERE petani_id=$user->id");
            @endphp
            @foreach ($data as $komoditas)
                <li>
                    <a href="{{ url('single-komoditas', []) }}" class="block w-full h-full bg-hijau-primary rounded-lg p-2">
                        {{ $komoditas->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
