@extends('layouts.default')
@section('navbar')
    @include('includes.navbar')
@endsection
@section('content')
    @include('includes.search')
    {{-- Single Item --}}
    <div class="container">
        <div class="flex flex-col h-fit pb-4 text-hijau-primary shadow-lg">
            <div class="px-4 h-36 bg-cover bg-center" style="background-image: url('/images/cabai_besar.jpg')"></div>
            <div class="flex flex-col w-full p-4 text-center">
                <h2 class="font-bold text-xl">Cabai Merah Besar</h2>
                <h3 class="">Stok : 150kg</h3>
                <span class="text-lg font-semibold">Total Pesanan</span>
                <h2 class="text-lg font-semibold">120kg</h2>
                <div class="flex gap-4">
                    <a type="button"
                        class="block mt-4 w-full rounded-full bg-hijau-primary px-3.5
                        py-2.5 text-center text-md font-bold text-white shadow-drop
                        hover:shadow transition duration-150 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Edit Komoditas
                    </a>
                    <a type="button"
                        class="block mt-4 w-full rounded-full bg-merah-primary px-3.5
                        py-2.5 text-center text-md font-bold text-white shadow-drop
                        hover:shadow transition duration-150 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Hapus Komoditas
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- ! Komoditas Terkait --}}
    <div class="container p-6 flex flex-col gap-4">
        <span class="text-abu-300 text-center">Pesanan</span>
        <div class="flex justify-around w-full text-white bg-hijau-primary m-auto p-4 rounded-lg items-center">
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
            </a>
            <h2 class="font-bold text-lg">Pak Imam</h2>
            <div class="">
                <span class="flex gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                  </svg> Loa Buah</span>
                <p>Pesan: 50kg</p>
            </div>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                </svg>
            </a>
        </div>
    </div>
@endsection
