@extends('layouts.default')
@section('navbar')
    @include('includes.navbar')
@endsection
@section('content')

    <div class="container">
        <div class="grid grid-cols-2 gap-5 pt-2">
            <div class="w-full self-center py-1">
                <img class="w-2/3 m-auto rounded-full" src="https://i.pinimg.com/550x/b7/1c/6b/b71c6b7c90235f42443eddff73dbe51e.jpg" alt="">
            </div>
            <div class="w-full">
                <h3>Pak Sarmadi</h3>
                <p>Role</p>
                <p>Nomor telepon</p>
                <p>Alamat</p>
                <a href="#" class="py-1 bg-black">Edit</a>
            </div>
        </div>
    </div>

@endsection
