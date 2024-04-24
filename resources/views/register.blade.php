<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body class="bg-blue-700">
    <div class="container flex justify-center items-center h-screen">
        <form method="post" action="{{ route('store') }}" class="p-5 bg-white rounded-sm w-full sm:w-2/3 md:w-1/2 lg:w-[400px]">
            <h1 class="mb-10 text-center font-bold text-xl">Form Register</h1>
            {{ csrf_field() }}
            <div class="mb-3">
                <input type="text" id="title" name="name" class="w-full px-4 py-2 border rounded bg-slate-200 focus:outline-none @error('name') border-red-700 @enderror focus:border-slate-300" placeholder="Enter your name" value="{{old('name')}}">
                @error('name') 
                <span class="text-red-700 text-[12px]">{{$message}}</span> 
                @enderror
            </div>
            <div class="mb-3">
                <input type="text" id="title" name="email" class="w-full px-4 py-2 border rounded bg-slate-200 focus:outline-none focus:border-slate-300" placeholder="Enter email" value="{{old('email')}}">
                @error('email') 
                <span class="text-red-700 text-[12px]">{{$message}}</span> 
                @enderror
            </div>
            <div class="mb-4">
                <input type="password" id="title" name="password" class="w-full px-4 py-2 border rounded bg-slate-200 focus:outline-none focus:border-slate-300" placeholder="Enter password">
                @error('password') 
                <span class="text-red-700 text-[12px]">{{$message}}</span> 
                @enderror
            </div>
            <button class="w-full py-2 mt-5 bg-blue-700 text-white rounded">Register</button>
            <p class="text-[12px] text-slate-400 text-center mt-3">Sudah punya akun? <a href="{{route('login')}}" class="text-blue-600">login</a></p>
        </form>
    </div>
</body>
</html>