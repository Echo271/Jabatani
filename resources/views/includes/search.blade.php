{{-- Search Bar --}}
<div class="container mb-4">
    <form method="POST" action="#" class="mx-auto mt-5 px-4 max-w-xl">
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
        <div class="flex">
            {{-- Input Form --}}
            <input type="text" name="search" id="search" autocomplete="search" placeholder="Cari Komoditas"
                value="{{ old('email') }}"
                class="w-[85%] bg-abu-200 rounded-l-full border-0 py-2text-gray-900  placeholder:text-md pl-6
            placeholder:text-abu-300 focus:ring-0 sm:text-sm
            sm:leading-6">
            {{-- Submit Form --}}
            <button type="submit"
                class="w-[15%] border-0 rounded-r-full bg-abu-200 py-2.5 text-center text-xl font-bold text-white
                transition duration-150 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" class=" text-abu-300"
                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
        </div>
    </form>
</div>
{{-- End Search Bar --}}