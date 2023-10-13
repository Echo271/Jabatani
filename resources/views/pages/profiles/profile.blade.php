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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag-fill" viewBox="0 0 16 16">
                            <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                        <span>Petani</span>
                    </div>
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
                <div class="w-full pt-4">
                    <a class="w-fit gap-6 items-center flex text-base text-white text-center font-semibold bg-hijau-primary py-2 px-6 rounded-full" href=""><span>Edit Profile</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                      </svg>
                      </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container px-4">
        <a type="button" href="{{ url('create') }}"
            class="block mt-6 w-full rounded-full bg-hijau-primary px-3.5
                        py-2.5 text-center text-xl font-bold text-white shadow-drop
                        hover:shadow transition duration-150 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">+Tambah Komoditas
        </a>
    </div>

    <div class="container p-6 flex flex-col gap-6">
        <h1 class="text-center text-abu-300 -mt-3 -mb-3">Komoditas Saya</h1>
        <a class="w-full h-44 rounded-2xl overflow-hidden shadow-lg bg-hijau-primary" href="{{ url('/single') }}">
            <div class="px-4 h-[65%] bg-cover bg-center" style="background-image: url('/images/cabai_besar.jpg')"></div>
            <div class="p-4 flex justify-between text-white">
                <p>Cabai Besar Merah</p>
                <p>Stok: 150kg</p>
            </div>
        </a>
    </div>

    {{-- Profile Pedagang --}}

    <div class="container p-6 flex flex-col gap-6">
        <a href="" class="flex justify-around w-full text-white bg-hijau-primary m-auto p-4 rounded-full">
            <div class="">
                <p class="font-bold text-xl">Cabai Merah Besar</p>
                <p>Pak Sarmidi</p>
            </div>
            <div class="">
                <span class="flex gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                  </svg> Loa Buah</span>
                <p>Pesan: 50kg</p>
            </div>
        </a>
    </div>

@endsection
