<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body class="bg-slate-200">
    <header class="bg-gradient-to-r from-cyan-500 to-blue-500 w-full text-white font-bold py-3">
        <nav class="flex justify-between items-center container">
            <a href="{{ route('dashboard') }}" class="brand-logo font-black text-xl">
                Note APP
            </a>
            <div class="hidden sm:block">
                <a href="#" class="hover:bg-white hover:text-slate-900 py-1 px-4 rounded">Home</a>
                <a href="#" class="hover:bg-white hover:text-slate-900 py-1 px-4 rounded">About</a>
                <a href="{{ route('categories') }}" class="hover:bg-white hover:text-slate-900 py-1 px-4 rounded">Category</a>
                <a href="{{ route('form-tambah') }}" class="hover:bg-white hover:text-slate-900 py-1 px-4 rounded">add note</a>
            </div>
            <div>
                <a href="{{route('login')}}" class="bg-blue-700 bg-opacity-55 hover:bg-blue-800 text-white font-bold px-4 py-1 rounded focus:outline-none focus:shadow-outline hidden md:inline">Login</a>
                <a href="{{route('register')}}" class="bg-blue-700 bg-opacity-55 hover:bg-blue-800 text-white font-bold px-4 py-1 rounded focus:outline-none focus:shadow-outline hidden md:inline">Register</a>
            </div>
        </nav>
    </header>
    <div class="container py-10">

        @yield('content')

    </div>
</body>
</html>