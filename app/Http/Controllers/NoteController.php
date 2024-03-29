<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Note;

class NoteController extends Controller
{
    function __construct() {
        date_default_timezone_set("Asia/Makassar");
    }

    public function index() {
        return view('index', [
            "title" => "Note APP | Dashboard",
            "notes" => Note::all()
        ]);
    }

    public function find_note(Note $note) {
        return view('note_detail', [
            "title" => "Note APP | Detail",
            "note" =>$note
        ]);
    }

    public function form_create() {
        return view("form", [
            "title" => "Note App | Form Add",
            "purpose" => "create"
        ]);
    }
    
    public function form_update(Note $note) {
        return view("form", [
            "title" => "Note App | Form Update",
            "purpose" => "update",
            "note" => $note
        ]);
    }

    public function create(Request $request) {
        $note = new Note;
        $note->title = $request->input('title');
        $note->catatan = $request->input('description');

        if ($note->save()) return redirect()->route('dashboard');
    }

    public function update(Request $request) {
        $note = Note::find($request->input('id'));
        $note->title = $request->input('title');
        $note->catatan = $request->input('catatan');

        if ($note->save()) return redirect()->route('dashboard');
    }

    public function delete($id) {
        Note::where('note_id', $id)->delete();
    }
}
