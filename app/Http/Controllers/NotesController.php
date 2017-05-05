<?php

namespace App\Http\Controllers;

use App\Note;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Requests;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
    public function index()
    {
    	$notes = \App\Note::all();
		// dd($notes);
    	return view('notes/list', compact('notes'));
    }

    public function create()
    {
    	return view('notes/create');
    }

    public function store()
    {
    	$this->validate(request(), [
    		'note' => ['required','max:200']
    		]); 
    	//return request()->all();
    	//return request()->get('note');
    	//return request()->only('note');
    	$data = request()->all(); 

    	Note::create($data);
 
    	//return Redirect::to('notes');
    	return redirect()->to('notes'); // hace lo mismo que el comando anterior
    }

    public function show($note)
    {
    	dd($note);
    }
}
