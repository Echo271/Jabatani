@extends('layouts.default')
@section('navbar')
    @include('includes.navbar')
@endsection
@section('content')
    @include('includes.search')
    <div class="container p-6 bg-hijau-primary">
        <div class="flex justify-between">
            <img class="w-16 h-16 my-auto mx-4" src="{{ asset('images/cabaibesar.png') }}" alt="Sunset in the mountains">
            <div class="flex flex-col w-[80%] ml-4 text-white">
                <h2 class="font-bold text-2xl">Cabai Merah Besar</h2>
                <p>Harga rata - rata pasar</p>
                <div class="flex gap-2 my-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-geo-alt"
                        viewBox="0 0 16 16">
                        <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                    <span class="text-white text-sm">Samarinda</span>
                </div>
                <ul class="text-sm">
                    <li>
                        <div class="flex justify-between">
                            <span>Segiri</span>
                            <span>Rp.23.000/kg</span>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between">
                            <span>Pasar Pagi</span>
                            <span>Rp.23.000/kg</span>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between">
                            <span>Palaran</span>
                            <span>Rp.23.000/kg</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container p-6 flex flex-col gap-6">
        <ul class="flex flex-col gap-4">
            @foreach ($komoditas as $item)
                <li>
                    @php
                        $petani = DB::table('users')->where('users.id',$item->petani_id)->get();
                    @endphp
                    <a class="block w-full h-44 rounded-2xl overflow-hidden shadow-lg bg-hijau-primary"
                        href="{{ url("/single-pedagang/$item->id/$user->id") }}">
                        <div class="px-4 h-[65%] bg-cover bg-center"
                            style="background-image: url('/images/cabai_besar.jpg')"></div>
                        <div class="px-4 py-1 flex justify-between">
                            <div class="p-2 flex flex-col">
                                <span class="text-white text-sm first-letter:uppercase">{{$petani[0]->name}}</span>
                                <span class="text-white text-sm">Stok : {{$item->stock}} kg</span>
                            </div>
                            <div class="p-2 flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                    class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                                <span class="text-white text-sm">{{$petani[0]->address}}</span>
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
