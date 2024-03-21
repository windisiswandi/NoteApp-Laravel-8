<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Note APP</title>
</head>
<body class="bg-slate-200">
    <header class="bg-gradient-to-r from-cyan-500 to-blue-500 w-full text-white font-bold py-3">
        <nav class="flex justify-between items-center container mx-auto">
            <a href="/" class="brand-logo font-black text-xl">
                Note APP
            </a>
            <div class="hidden sm:block">
                <a href="#" class="hover:bg-white hover:text-slate-900 py-1 px-4 rounded">Home</a>
                <a href="#" class="hover:bg-white hover:text-slate-900 py-1 px-4 rounded">About</a>
                <a href="#" class="hover:bg-white hover:text-slate-900 py-1 px-4 rounded">Contact</a>
            </div>
            <button class="bg-blue-700 bg-opacity-55 hover:bg-blue-800 hover:cursor-pointer text-white font-bold px-4 py-1 rounded focus:outline-none focus:shadow-outline hidden md:block">Add Note</button>
        </nav>
    </header>
    <div class="container mx-auto py-10">
        <h1 class="text-center font-bold text-3xl">My Note</h1>
        <div class="flex mt-16 gap-3 items-center justify-center flex-wrap">
            @foreach($notes as $note)
            <a href="/note/{{ $note['slug'] }}" class="bg-slate-100 rounded-md shadow p-4 hover:shadow-lg hover:translate-y-[-6px] transition w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 h-[100px]">
                <h2 class="text-[16px] whitespace-nowrap truncate">{{ $note['title'] }}</h2>
                <p class="text-slate-500 text-[12px] italic">{{$note['date']}}</p>
                <p class="text-slate-800 text-[12px] mt-4 whitespace-nowrap truncate">{{$note['note']}}</p>
            </a>
            @endforeach
        </div>
    </div>
</body>
</html>