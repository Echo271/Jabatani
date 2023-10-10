<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jabatani</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="p-10">
        <img class="mx-auto" width="120px"
            src="https://images.unsplash.com/photo-1694901555616-d7b2b33e6406?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=600&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY5Njg2NDc2MQ&ixlib=rb-4.0.3&q=80&w=600"
            alt="">
    </div>
    <div class="container py-0 mx-auto px-4 ">
        <h1 class="text-xl text-center font-bold text-green-700">Masuk</h1>
        <form action="#" method="POST" class="mx-auto mt-5 px-4 max-w-xl sm:mt-20">
            <div class="grid grid-cols-1 gap-x-8 gap-y-5">
                <input type="email" name="email" id="email" autocomplete="email" placeholder="Email"
                    class="block w-full bg-slate-200 rounded-full border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-sm placeholder:font-bold placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <input type="password" name="password" id="password" autocomplete="password" placeholder="Password"
                    class="block w-full bg-slate-200 rounded-full border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-sm placeholder:font-bold placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <button type="submit"
                    class="block w-full rounded-full bg-green-700 px-3.5 
                        py-2.5 text-center text-xl font-bold text-white shadow-sm
                        hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login
                </button>
                <span class="text-xl text-center font-bold text-green-700">Atau</span>
                <a
                    class="px-4 py-2.5 border flex justify-center items-center gap-2 border-slate-200 rounded-full text-slate-700 hover:border-slate-400 hover:text-slate-900 hover:shadow transition duration-150">
                    <img class="w-6 h-6" src="https://www.svgrepo.com/show/475656/google-color.svg"
                        loading="lazy"alt="google logo">
                    <span>Login with Google</span>
                </a>
                <a type="button"
                    class="py-2.5 px-4 max-w-md  flex justify-center items-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full">
                    <svg width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 1792 1792"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z">
                        </path>
                    </svg>
                    Login with Facebook
                </a>
                <span class="text-sm text-center font-bold text-green-700">Belum punya akun ? Silahkan
                    <a class="text-sky-600" href="#">Daftar</a>
                </span>
            </div>
        </form>
    </div>

</body>

</html>
