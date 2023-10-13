@extends('layouts.default')
@section('navbar')
    @include('includes.navbar')
@endsection
@section('content')

    {{-- Profile Petani --}}

    <div class="container pt-2 pb-8 shadow-lg">
        <div class="grid grid-cols-2 gap-2">
            <div class="w-full">
                <img class="w-3/4 rounded-full m-auto" src="https://cdn.pnghd.pics/data/221/foto-profil-kosong-39.jpg" alt="">
            </div>
            <div class="w-full m-auto">
                <div class="text-hijau-primary font-semibold">
                    <h2 class="text-2xl">Nama</h2>
                    <div class="py-1 flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                          </svg>
                        <span>08xx-xxx-xxx</span>
                    </div>
                    <div class="py-1 flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                          </svg>
                        <span>Alamat</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full pt-5 flex justify-center">
            <a class="w-3/4 items-center text-base text-center text-white font-semibold bg-hijau-primary py-2 px-6 rounded-full" href="">
                Hubungi
            </a>
        </div>
    </div>

    <div class="container p-6 flex flex-col gap-6">
        <h1 class="text-center text-abu-300 -mt-3 -mb-3">Komoditas Pak Sarmidi</h1>
        <a class="w-full h-44 rounded-2xl overflow-hidden shadow-lg bg-hijau-primary" href="{{ url('/single') }}">
            <div class="px-4 h-[65%] bg-cover bg-center" style="background-image: url('/images/cabai_besar.jpg')"></div>
            <div class="p-4 flex justify-between text-white">
                <p>Cabai Besar Merah</p>
                {{-- Stok komoditas --}}
                <p>Stok: 150kg</p>
            </div>
        </a>
    </div>

@endsection
