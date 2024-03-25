@extends('components.layout')

@section('content')
    <h1 class="text-center font-bold text-3xl">Tambah catatan</h1>
    @if($purpose == 'create')
    <form action="{{route('create-note')}}" method="POST" class="w-1/2 mx-auto mt-10">
        {{ csrf_field() }}
        <div class="mb-4 ">
            <label for="title" class="block text-gray-700 font-semibold mb-2">Title:</label>
            <input type="text" id="title" name="title" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter title" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-semibold mb-2">Description:</label>
            <textarea id="description" name="description" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter description" rows="4" required></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Create</button>
        </div>
    </form>
    @else
    <form action="{{route('update-note')}}" method="post" class="w-1/2 mx-auto mt-10">
        {{ csrf_field() }}
        @method('put')
        <input type="hidden" name="id" value="{{$note['id']}}">
        <div class="mb-4 ">
            <label for="title" class="block text-gray-700 font-semibold mb-2">Title:</label>
            <input type="text" id="title" name="title" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-teal-500" value="{{$note['title']}}" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-semibold mb-2">Description:</label>
            <textarea id="description" name="catatan" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-teal-500" rows="4" required>{{$note['catatan']}}</textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="px-6 py-2 bg-teal-500 text-white rounded hover:bg-teal-600 focus:outline-none focus:bg-teal-600">Update</button>
        </div>
    </form>

    @endif
@endsection