<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notes;

class NotesController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function dashboard() {
        $notes = Notes::orderBy('updated_at', 'desc') -> get();
        return view('dashboard') -> with ('notes', $notes);
    }

    public function add(){
        return view('add');
    }

    public function add_process(Request $request){
        $request -> validate ([
            'title' => ['required'],
            'content' => ['required'],
        ]);

        $note = new notes;
        $note -> title = $request -> title;
        $note -> content = $request -> content;
        $note -> save();

        return redirect() -> back() -> with ('status', 'Note added successfully');
    }

    public function update($id){
        $note = Notes::find($id);
        return view('update') -> with('note', $note);
    }

    public function update_process($id, Request $request){
        $request -> validate ([
            'title' => ['required'],
            'content' => ['required'],
        ]);

        Notes::where('id', $id)->update(['title' => $request -> title,
                                         'content' => $request -> content]);

        return redirect() -> back() -> with ('status', 'Note updated successfully');
    }

    public function delete_process($id, Request $request){
        Notes::where('id', $id) -> delete();
        return redirect('/add') -> with ('status', 'Note deleted successfully');
    }

    public function trash_process($id, Request $request){
        Notes::where('id', $id) -> delete();
        return redirect('/dashboard');
    }
}
