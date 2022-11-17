<?php

namespace App\Http\Controllers;
use App\Models\Note;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function note_view()
    {
        return view('/notes');
    }
    public function saveab(Request $request)
    {
        

        // dd($request->all());
        $data = new Note();
        $data->title=$request->title;
        $data->note=$request->note;
        $data->save();
        return redirect('/notes')->with('success','Data has been save successfully.');
       
    

    }
}
