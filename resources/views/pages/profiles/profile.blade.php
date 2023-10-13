@extends('layouts.default')
@section('navbar')
    @include('includes.navbar')
@endsection
@section('content')
    <div class="container h-44 bg-abu-200">

    </div>
    <div class="container px-4">
        <div class="flex flex-col gap-4">
            <a type="button" href="{{ url('input',[name=>'create']) }}"
                class="block mt-6 w-full rounded-full bg-hijau-primary px-3.5 
                        py-2.5 text-center text-xl font-bold text-white shadow-drop
                        hover:shadow transition duration-150 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah
            </a>
            @if ($user->role == 'admin')
                <span class="text-center text-abu-300">Komoditas Saya</span>
                <ul>
                    @php
                        $data = DB::select("SELECT * FROM komoditas WHERE petani_id=$user->id");
                    @endphp
                    @foreach ($data as $komoditas)
                        <li>
                            <a href="{{ url('single-komoditas', []) }}" class="block w-full h-full bg-hijau-primary rounded-lg p-2">
                                {{ $komoditas->name }}
                            </a>
                        </li>
                    @endforeach

                </ul>
            @endif
        </div>
    </div>
@endsection
