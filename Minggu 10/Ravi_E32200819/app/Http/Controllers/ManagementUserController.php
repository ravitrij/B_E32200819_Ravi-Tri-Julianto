<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
           return "Halo ini adalah Controller Management User";
    }
    public function create()
    {
        return "menampilkan form untuk menambahkan data user";
    }
    public function store(Requset $request)
    {
        return "menciptakan data user baru";
    }
    public function show($id)
    {
        return "mengambil satu data user dengan id-" . $id;
    }
    public function edit($id)
    {
        return "menampilkan form untuk mengubah data edit dengan id=" . $id;
    }
    public function update(Request $request, $id)
    {
        return "untuk mengubah data user dengan id=" . $id;
    }
    public function destroy($id)
    {
        return "untuk menghapus data user dengan id=" . $id;
    }
}