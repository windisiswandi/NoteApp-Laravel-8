@extends('components.layout')

@section('content')
{{ csrf_field() }}
    <h1 class="text-center font-bold text-3xl">My Note</h1>
    <div class="w-1/2 bg-slate-100 rounded-md p-4 mt-10 mx-auto">
        <div class="title flex justify-between items-center">
            <h2 class="text-lg font-bold">{{ $note->title }}</h2>
            <div class="relative">
                <!-- Ikon titik tiga untuk menunjukkan dropdown -->
                <button class="text-sm font-medium text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                        <circle cx="10" cy="5" r="2" />
                        <circle cx="10" cy="10" r="2" />
                        <circle cx="10" cy="15" r="2" />
                    </svg>
                </button>

                <div id="menu" class="origin-top-right absolute right-0 mt-2 w-56 rounded-sm shadow-lg bg-white ring-1 ring-black ring-opacity-[0.04] hidden">
                    <!-- Opsi dropdown -->
                    <a href="{{route('form-update', $note->note_id)}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Edit</a>
                    <a href='#' id="delete" data-id="{{$note->note_id}}" class="block px-4 py-2 text-sm text-red-700 hover:bg-gray-100 hover:text-red-900" role="menuitem">Delete</a>
            </div>

        </div>
        </div>
        <p class="text-slate-500 text-[12px] italic">{{$note->created_at}}</p>
        <p class="text-slate-800 text-sm mt-4">{!!$note->catatan!!}</p>

        <a href="{{route('dashboard')}}" class="py-1 px-3 rounded-sm text-white bg-blue-500 mt-10 inline-block">Back to home</a>
    </div>

    <script>
        document.querySelector('button').addEventListener('click', () => {
            document.querySelector('#menu').classList.toggle('hidden')
        })

        document.getElementById("delete").addEventListener("click", function(event) {
            event.preventDefault(); // Mencegah tindakan bawaan hyperlink
            const csrf = document.querySelector("input[name='_token']").value
            if (confirm("Anda yakin ingin menghapus?")) {
                fetch(`{{route('delete-note', $note->note_id)}}`, {
                    method: "DELETE",
                    headers: {
                        "X-CSRF-TOKEN": csrf
                    } 
                })
                .then(response => {
                    window.location.href = `{{route('dashboard')}}`
                })
                .catch(error => {
                    console.log(error)
                });
            }
        });
    </script>
@endsection