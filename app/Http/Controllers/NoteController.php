<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Note;

class NoteController extends Controller
{
    function __construct() {
        $this->Notes = new Note();
    }

    public function index() {
        return view('index', [
            "title" => "Note APP | Dashboard",
            "notes" => $this->Notes::get_all()
        ]);
    }

    public function find_note($slug) {
        return view('note_detail', [
            "title" => "Note APP | Detail",
            "note" => $this->Notes::find($slug)
        ]);
    }

    public function form_create() {
        return view("add_note", [
            "title" => "Note App | Form Add"
        ]);
    }

    public function create(Request $request) {
        $data = [
            "title" =>  $request->input('title'),
            "date" => date("Y-m-d"),
            "note" => $request->input('description'),
            "slug" => strtolower(str_replace(' ', '-', $request->input('title')))
        ];

        var_dump($this->Notes::create($data));

        // return redirect()->route('dashboard');

    }
}
