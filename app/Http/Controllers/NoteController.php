<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index(Request $request){
        $page = $request->query("page",0);
        $notes = \App\Models\Note::all();
        $count = $notes->count()/10 ;
        $pages = range(0,$count);
            return view("notes",compact("notes","pages","page"));
    }

    public function show(Request $request,$id) {
        $note = \App\Models\Note::find($id);
        // $url = $request->path(); 
        $url = isset(parse_url(url()->previous())["query"])?"?".parse_url(url()->previous())["query"]:""  ; 
        return view("note",["note" => $note,"url" => $url]);
    }
}
