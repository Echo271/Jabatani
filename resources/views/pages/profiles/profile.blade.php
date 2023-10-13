@extends('layouts.default')
@section('navbar')
    @include('includes.navbar')
@endsection
@section('content')
    <div class="container h-44 bg-abu-200">

    </div>
    <div class="container px-4">
        <a type="button" href="{{ url('create') }}"
            class="block mt-6 w-full rounded-full bg-hijau-primary px-3.5 
                        py-2.5 text-center text-xl font-bold text-white shadow-drop
                        hover:shadow transition duration-150 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah
        </a>
    </div>
@endsection
