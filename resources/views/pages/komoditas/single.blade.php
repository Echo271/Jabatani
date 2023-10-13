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
                <div class="flex">
                    <form method="POST" action="#" class=" flex mt-2 gap-6 max-w-xl">
                        @csrf
                        @if ($errors->any())
                            <div class="bg-red-400 rounded-lg mx-4 mb-2 text-white ">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li class="border pl-2 border-x-0 border-b-1">{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{-- ! Input Form --}}
                        <div class="flex justify-between rounded-lg">
                            <input type="number"
                                class="focus:ring-none border-white text-center w-full h-full bg-white rounded-l-full  text-md flex items-center placeholder:text-abu-300 text-abu-300 outline-none"
                                name="pesanan" placeholder="0 Kg" value="0">
                            <button type="button" data-action="increment"
                                class="bg-hijau-primary  border-white border-r-2 border-y-2 text-white hover:text-gray-700 hover:bg-gray-400 h-full w-24 cursor-pointer outline-none">
                                <span class="m-auto text-2xl ">+</span>
                            </button>
                            <button type="button" data-action="decrement"
                                class=" bg-hijau-primary border-white border-y-2 rounded-r-full text-white hover:text-gray-700 hover:bg-gray-400 h-full w-24 cursor-pointer outline-none">
                                <span class="m-auto text-2xl">−</span>
                            </button>
                        </div>
                        {{-- ! Submit Form --}}
                        <button type="submit"
                            class="block w-full rounded-full bg-hijau-primary px-3.5
                            text-center text-xl font-bold text-white shadow-drop
                            hover:shadow transition duration-150 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Pesan
                        </button>
                    </form>
                </div>
                <a type="button"
                    class="block mt-6 w-full rounded-full bg-hijau-primary px-3.5
                        py-2.5 text-center text-xl font-bold text-white shadow-drop
                        hover:shadow transition duration-150 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Hubungi
                </a>
            </div>
        </div>
    </div>
    {{-- ! Komoditas Terkait --}}
    <div class="container p-6 flex flex-col gap-4">
        <span class="text-abu-300 ">Komoditas Lainnya Pak Sarmidi</span>
        <a class="w-full h-44 rounded-2xl overflow-hidden shadow-lg bg-hijau-primary" href="{{ url('/list') }}">
            <div class="px-4 h-[65%] bg-cover bg-center" style="background-image: url('/images/cabai_besar.jpg')"></div>
            <div class="px-4 py-1 flex justify-between">
                <div class="p-2 flex flex-col">
                    <span class="text-white text-sm">Pak Sarmidi</span>
                    <span class="text-white text-sm">Stok : 150 kg</span>
                </div>
                <div class="p-2 flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                        class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                    <span class="text-white text-sm">Loa Buah</span>
                </div>
            </div>
        </a>
        <a class="w-full h-44 rounded-2xl overflow-hidden shadow-lg bg-hijau-primary" href="{{ url('/list') }}">
            <div class="px-4 h-[65%] bg-cover bg-center" style="background-image: url('/images/cabai_besar1.webp')">
            </div>
            <div class="px-4 py-1 flex justify-between">
                <div class="p-2 flex flex-col">
                    <span class="text-white text-sm">Pak Aceng</span>
                    <span class="text-white text-sm">Stok : 420 kg</span>
                </div>
                <div class="p-2 flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                        class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                    <span class="text-white text-sm">Loa Duri</span>
                </div>
            </div>
        </a>
    </div>
    {{-- ! JS untuk input pesanan --}}
    <script>
        const input_target = document.querySelector(
            'input[name="pesanan"]'
        );

        function decrement(e) {
            const btn = e.target.parentNode.parentElement.querySelector(
                'button[data-action="decrement"]'
            );
            const target = input_target;
            let value = Number(target.value);
            value--;
            if (value >= 0) {
                target.value = value;
            }
        }

        function increment(e) {
            const btn = e.target.parentNode.parentElement.querySelector(
                'button[data-action="decrement"]'
            );
            const target = input_target;
            let value = Number(target.value);
            value++;
            target.value = value;
        }
        const decrementButtons = document.querySelectorAll(
            `button[data-action="decrement"]`
        );
        const incrementButtons = document.querySelectorAll(
            `button[data-action="increment"]`
        );
        decrementButtons.forEach(btn => {
            btn.addEventListener("click", decrement);
        });
        incrementButtons.forEach(btn => {
            btn.addEventListener("click", increment);
        });
    </script>
@endsection
