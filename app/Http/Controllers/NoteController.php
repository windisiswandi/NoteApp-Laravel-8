<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Note;

class NoteController extends Controller
{
    public function index() {
        return view('index', [
            "title" => "Note APP | Dashboard",
            "notes" => Note::get_all()
        ]);
    }

    public function find_note($slug) {
        return view('note_detail', [
            "title" => "Note APP | Detail",
            "note" => Note::find($slug)
        ]);
    }

    public function form_create() {
        return view("add_note", [
            "title" => "Note App | Form Add"
        ]);
    }

    public function create(Request $request) {
        var_dump($request);
        return "ok";
    }
}
