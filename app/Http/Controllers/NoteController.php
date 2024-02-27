<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public static function index(Request $request) {
        // retrieve page number from the url
        $page = $request->query("page",0);
        // get all notes
        $notes = Note::all();
        // generate pages
        $pages = range(0,$notes->count()/10);

        // return view
        return view("notes",compact("notes","page","pages"));

    }

    public static function show(Request $request,$id) {
        $note = Note::find($id);
        // $url = strpos(url()->previous(),"page") ? substr(url()->previous(),strpos(url()->previous(),"?")) : "" ;
        $url = url()->previous() ;
        return view("note",compact("note","url"));
    }
}
