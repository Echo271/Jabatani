@extends('layouts.default')
@section('navbar')
    @include('includes.navbar')
@endsection
@section('content')
    <div class="container h-52 flex justify-center items-center bg-abu-300">
        <img src="{{ asset('images/maxresdefault.jpg') }}" alt="">
    </div>
    <div class="container max-h-full p-2">
        @include('includes.search')
        <div class="flex flex-wrap gap-6 justify-center p-4">
            <a class="w-36 p-2 py-6 rounded-2xl overflow-hidden shadow-lg bg-hijau-primary" href="{{ url('/list')}}">
                <img class="w-16 pb-2 mx-auto" src="{{ asset('images/cabaibesar.png') }}" alt="Sunset in the mountains">
                <div class="px-2 py-1 flex items-center flex-col">
                    <span class="text-white text-sm">Cabai Besar</span>
                    <span class="text-white text-sm">Rp23.000/kg</span>
                </div>
            </a>
            <a class="w-36 p-2 py-6 rounded-2xl overflow-hidden shadow-lg bg-hijau-primary" href="{{ url('/single') }}">
                <img class="w-16 pb-2 mx-auto" src="{{ asset('images/kubis.png') }}" alt="Sunset in the mountains">
                <div class="px-2 py-1 flex items-center flex-col">
                    <span class="text-white text-sm">Cabai Besar</span>
                    <span class="text-white text-sm">Rp23.000/kg</span>
                </div>
            </a>
            <a class="w-36 p-2 py-6 rounded-2xl overflow-hidden shadow-lg bg-hijau-primary" href="{{ url('/single') }}">
                <img class="w-16 pb-2 mx-auto" src="{{ asset('images/kubis.png') }}" alt="Sunset in the mountains">
                <div class="px-2 py-1 flex items-center flex-col">
                    <span class="text-white text-sm">Cabai Besar</span>
                    <span class="text-white text-sm">Rp23.000/kg</span>
                </div>
            </a>
            <a class="w-36 p-2 py-6 rounded-2xl overflow-hidden shadow-lg bg-hijau-primary" href="{{ url('/single') }}">
                <img class="w-16 pb-2 mx-auto" src="{{ asset('images/kubis.png') }}" alt="Sunset in the mountains">
                <div class="px-2 py-1 flex items-center flex-col">
                    <span class="text-white text-sm">Cabai Besar</span>
                    <span class="text-white text-sm">Rp23.000/kg</span>
                </div>
            </a>
        </div>
    </div>
@endsection
