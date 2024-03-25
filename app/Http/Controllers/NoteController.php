<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Note;

class NoteController extends Controller
{
    function __construct() {
        $this->Note = new Note();
        date_default_timezone_set("Asia/Makassar");
    }

    public function index() {
        return view('index', [
            "title" => "Note APP | Dashboard",
            "notes" => $this->Note::all()->toArray()
        ]);
    }

    public function find_note($id) {
        return view('note_detail', [
            "title" => "Note APP | Detail",
            "note" => $this->Note->firstWhere('id',$id)->toArray()
        ]);
    }

    public function form_create() {
        return view("form", [
            "title" => "Note App | Form Add",
            "purpose" => "create"
        ]);
    }
    
    public function form_update($id) {
        return view("form", [
            "title" => "Note App | Form Update",
            "purpose" => "update",
            "note" => $this->Note->firstWhere('id', $id)->toArray()
        ]);
    }

    public function create(Request $request) {
        $this->Note->title = $request->input('title');
        $this->Note->catatan = $request->input('description');
        $this->Note->created_at = time();
        $this->Note->updated_at = time();

        if ($this->Note->save()) return redirect()->route('dashboard');
    }

    public function update(Request $request) {
        $note = $this->Note::find($request->input('id'));
        $note->title = $request->input('title');
        $note->catatan = $request->input('catatan');
        $note->updated_at = time();

        if ($note->save()) return redirect()->route('dashboard');
    }

    public function delete($id) {
        $this->Note::where('id', $id)->delete();
    }
}
