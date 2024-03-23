@extends('components.layout')

@section('content')
    <h1 class="text-center font-bold text-3xl">My Note</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-16 p-4 sm:p-0 gap-3">
        @foreach($notes as $note)
        <a href="/note/detail/{{ $note['slug'] }}" class="bg-slate-100 rounded-md shadow p-4 hover:shadow-lg hover:translate-y-[-6px] transition h-[100px]">
            <h2 class="text-[16px] truncate font-bold">{{ $note['title'] }}</h2>
            <p class="text-slate-500 text-[12px] italic">{{$note['date']}}</p>
            <p class="text-slate-800 text-[12px] mt-4 truncate">{{$note['note']}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, sint. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit, repellat!</p>
        </a>
        @endforeach
    </div>
@endsection