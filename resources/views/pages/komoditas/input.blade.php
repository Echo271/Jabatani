@extends('layouts.default')
@section('navbar')
    @include('includes.navbar')
@endsection
@section('content')
    <div class="container px-4">
        <div class="container py-0 mx-auto px-4 mb-4 ">
            <form method="post" action="{{ url($tipe) }}" class="mx-auto mt-5 px-4 max-w-xl" enctype="multipart/form-data">
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

                <div x-data="{ photoName: null, photoPreview: null }" class="col-span-6 pb-5 ml-2 sm:col-span-4 md:mr-3">
                    <!-- Photo File Input -->
                    <input type="file" name="gambar" class="hidden" x-ref="photo"
                        x-on:change="
                                        photoName = $refs.photo.files[0].name;
                                        const reader = new FileReader();
                                        reader.onload = (e) => {
                                            photoPreview = e.target.result;
                                        };
                                        reader.readAsDataURL($refs.photo.files[0]);
                    ">

                    <label for="gambar" class="block mb-2 text-lg font-bold text-center text-hijau-primary" for="photo">
                        Profile Photo <span class="text-red-600"> </span>
                    </label>

                    <div class="text-center">
                        <!-- Current Profile Photo -->
                        <div class="mt-2" x-show="! photoPreview">
                            <img src="https://images.unsplash.com/photo-1531316282956-d38457be0993?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80"
                                class="w-40 h-40 m-auto rounded-full shadow">
                        </div>
                        <!-- New Profile Photo Preview -->
                        <div class="mt-2" x-show="photoPreview" style="display: none;">
                            <span class="block w-40 h-40 m-auto rounded-full shadow"
                                x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' +
                                photoPreview + '\');'"
                                style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                            </span>
                        </div>
                        <button type="button"
                            class="inline-flex items-center px-4 py-2 mt-2 ml-3 text-xs font-semibold tracking-widest uppercase transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm text-hijau-primary hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50"
                            x-on:click.prevent="$refs.photo.click()">
                            Edit Foto
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-8 gap-y-5 sm:gap-y-4">
                    {{-- Input Form --}}
                    @if ($tipe == 'update')
                        <input type="hidden" name="id" value="{{ $komoditas->id }}">
                    @endif
                    <input type="hidden" name="petani_id" value="{{ $user->id }}">

                    <label for="name" class="text-hijau-primary font-bold tracking-wider pl-2">Komoditas</label>
                    <input type="text" value="{{ $tipe == 'update' ? $komoditas->name : '' }}"
                        {{ $tipe == 'update' ? 'disabled' : '' }} name="name" id="name" autocomplete="name"
                        placeholder="Nama"
                        class="block w-full bg-abu-200 rounded-full border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-md pl-6  placeholder:text-abu-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <label for="stok" class="text-hijau-primary font-bold tracking-wider pl-2">Stok</label>
                    <input type="number" value="{{ $tipe == 'update' ? $komoditas->stock : '' }}" name="stok"
                        id="stok" autocomplete="stok" placeholder="0 Kg"
                        class="block w-full bg-abu-200 rounded-full border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-md pl-6  placeholder:text-abu-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <select id="kategori" name="kategori"
                        class="mt-1 block w-full py-2 pl-6 border text-hijau-primary border-gray-300 bg-white rounded-full shadow-sm focus:ring-hijau-primary focus:border-hijau-primary focus:text-hijau-primary text-md">
                        @foreach ($kategori as $item)
                            <option {{ $tipe == 'update' ? ($item->name == $komoditas->kategori ? 'selected' : '') : '' }}
                                value="{{ $item->name }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <label for="stok" class="text-hijau-primary font-bold tracking-wider pl-2">Keterangan</label>
                    <textarea class="mb-4 text-gray-500 rounded-2xl bg-abu-200   tracking-wider pl-4 border-0 py-2" name="keterangan"
                        id="keterangan" cols="30" rows="4" placeholder="Keterangan..">{{ $tipe == 'update' ? $komoditas->keterangan : '' }}</textarea>
                </div>
                {{-- Submit Form --}}
                <button type="submit"
                    class="block w-full rounded-full bg-hijau-primary px-3.5
                            py-2.5 text-center text-xl font-bold text-white shadow-drop
                            hover:shadow transition duration-150 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    {{ $tipe == 'update' ? 'Simpan' : 'Tambah' }}
                </button>
            </form>
        </div>
    </div>
    </div>
@endsection
