@extends('components.layout')

@section('content')
    <div class="sm:w-1/2 w-full bg-white rounded-md">
        <div id="header" class="flex justify-between w-full border border-b-slate-500 p-3">
            <span class="font-black">List of Categories</span>
            <a href="#" class="py-1 px-4 rounded-sm bg-teal-500 text-white">Add</a>
        </div>
        <div id="body" class="p-2">
            @foreach($categories as $category)
                <a href="/categories/{{$category->slug}}" class="px-3 py-2 font-semibold bg-slate-300 my-2 rounded-md block text-slate-700 hover:bg-slate-400 ">{{$category->name}}</a>
            @endforeach
        </div>
    </div>
@endsection 