@extends('components.layout')

@section('content')
    <h1 class="text-center font-bold text-3xl">My Note</h1>
    <div class="w-1/2 bg-slate-100 rounded-md p-4 mt-10 mx-auto">
        <h2 class="text-lg font-bold">{{ $note['title'] }}</h2>
        <p class="text-slate-500 text-sm italic">{{$note['date']}}</p>
        <p class="text-slate-800 text-sm mt-4">{{$note['note']}}</p>

        <a href="{{route('dashboard')}}" class="py-1 px-3 rounded-sm text-white bg-blue-500 mt-10 inline-block">Back to home</a>
    </div>
@endsection