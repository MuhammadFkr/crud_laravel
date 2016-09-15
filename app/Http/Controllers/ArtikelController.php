<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ArtikelController extends Controller
{
    public function index()
    {
    	$data['artikel'] = \App\artikel::paginate(10);
    	return view('artikel.all')->with($data);
    }

    public function add()
    {
    	return view('artikel.add');
    }

    public function save()
    {
    	$a = new \App\artikel;
    	$a->title = Input::get('title');
    	$a->contens = Input::get('contens');
    	$a->user_id = 1;
    	$a->save();	

    	return redirect(url('artikel'));

    }

    public function edit($id)
    {
    	$data['artikel'] = \App\artikel::find($id);
    	return view('artikel.edit')->with($data);
    }

    public function update()
    {
    	$a = \App\artikel::find(Input::get('id'));
    	$a->title = Input::get('title');
    	$a->contens = Input::get('contens');
    	$a->user_id = 1;
    	$a->save();
    	
    	return redirect(url('artikel'));
    }

    public function delete($id)
    {
    	$a = \App\artikel::find($id);
    	$a->delete();

    	return redirect(url('artikel'));
    }
}
 