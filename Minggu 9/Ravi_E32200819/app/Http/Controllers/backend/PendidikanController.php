<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Pendidikan;
use App\Http\Controllers\Controller;

class PendidikanController extends Controller
{
    public function index()
    {
    	return view('backend.pendidikan.index');
    }
    public function create()
    {
    	$pendidikan = null;
    	return view('backend.pendidikan.create', compact('pendidikan'));
    }
    public function store(Request $request)
    {
    	PendidikanController::create($request->all());

    	return redirect()->route('pendidikan.index')
    					->with('succes','Data Pendidikan baru telah berhasil disimpan.');
}
}