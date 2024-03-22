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
        <nav class="flex justify-between items-center container">
            <a href="/" class="brand-logo font-black text-xl">
                Note APP
            </a>
            <div class="hidden sm:block">
                <a href="#" class="hover:bg-white hover:text-slate-900 py-1 px-4 rounded">Home</a>
                <a href="#" class="hover:bg-white hover:text-slate-900 py-1 px-4 rounded">About</a>
                <a href="#" class="hover:bg-white hover:text-slate-900 py-1 px-4 rounded">Contact</a>
            </div>
            <a href="/note/add" class="bg-blue-700 bg-opacity-55 hover:bg-blue-800 text-white font-bold px-4 py-1 rounded focus:outline-none focus:shadow-outline hidden md:block">Add Note</a>
        </nav>
    </header>
    <div class="container py-10">

        @yield('content')

    </div>
</body>
</html>