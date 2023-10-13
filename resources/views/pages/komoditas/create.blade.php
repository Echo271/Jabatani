@extends('layouts.default')
@section('navbar')
    @include('includes.navbar')
@endsection
@section('content')
    <div class="container h-44 bg-abu-200">

    </div>
    <div class="container px-4">
        <div class="container py-0 mx-auto px-4 mb-4 ">
            <form method="POST" action="" class="mx-auto mt-5 px-4 max-w-xl">
                @csrf
                @if ($errors->any())
                    <div class="bg-red-400 rounded-lg mb-2 text-white ">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li class="border pl-2 py-1 border-x-0 border-b-1">{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="grid grid-cols-1 gap-x-8 gap-y-5 sm:gap-y-4">
                    {{-- Input Form --}}
                    <label for="name" class="text-hijau-primary font-bold tracking-wider pl-2">Komoditas</label>
                    <input type="text" name="name" id="name" autocomplete="name" placeholder="Nama"
                        class="block w-full bg-abu-200 rounded-full border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-md pl-6  placeholder:text-abu-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <label for="stok" class="text-hijau-primary font-bold tracking-wider pl-2">Stok</label>
                    <input type="number" name="stok" id="stok" autocomplete="stok" placeholder="0 Kg"
                        class="block w-full bg-abu-200 rounded-full border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-md pl-6  placeholder:text-abu-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <select id="role" name="role"
                        class="mt-1 block w-full py-2 pl-6 border text-hijau-primary border-gray-300 bg-white rounded-full shadow-sm focus:ring-hijau-primary focus:border-hijau-primary focus:text-hijau-primary text-md">
                        <option class="hover:bg-black" value="pedagang">Pedagang</option>
                        <option value="petani">Petani</option>
                    </select>
                    <label for="stok" class="text-hijau-primary font-bold tracking-wider pl-2">Keterangan</label>
                    <textarea class="mb-4 text-gray-500 rounded-2xl bg-abu-200   tracking-wider pl-4 border-0 py-2" name="keterangan"
                        id="keterangan" cols="30" rows="4" placeholder="Keterangan.."></textarea>
                </div>
                {{-- Submit Form --}}
                <button type="submit"
                    class="block w-full rounded-full bg-hijau-primary px-3.5 
                            py-2.5 text-center text-xl font-bold text-white shadow-drop
                            hover:shadow transition duration-150 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah
                </button>
            </form>
        </div>
    </div>
    </div>
@endsection
