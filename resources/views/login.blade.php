<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body class="bg-blue-700">
    <div class="container px-3 flex justify-center items-center flex-col h-screen">
        @if(session()->has('status'))
        <span class="p-4 w-full sm:w-2/3 md:w-1/2 lg:w-[400px] bg-teal-300  rounded-sm text-teal-800 mb-4">{{session("status")}}</span>
        @endif
        <form class="p-5 bg-white rounded-sm w-full sm:w-2/3 md:w-1/2 lg:w-[400px]">
            <h1 class="mb-10 text-center font-bold text-xl">Login</h1>
            {{ csrf_field() }}
            <div class="mb-3">
                <input type="text" id="title" name="title" class="w-full px-4 py-2 border rounded bg-slate-200 focus:outline-none focus:border-slate-300" placeholder="Enter email" required>
            </div>
            <div class="mb-4">
                <input type="password" id="title" name="title" class="w-full px-4 py-2 border rounded bg-slate-200 focus:outline-none focus:border-slate-300" placeholder="Enter password" required>
            </div>
            <button class="w-full py-2 mt-5 bg-blue-700 text-white rounded">Submit</button>
            <p class="text-[12px] text-slate-400 text-center mt-3">Belum punya akun? <a href="{{ route('register') }}" class="text-blue-600">register</a></p>
        </form>
    </div>
</body>
</html>