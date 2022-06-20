<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        return view('Admin.Petugas.index');
    }

    public function create()
    {
        return view('Admin.Petugas.create');
    }

    public function store(Request $request)
    {
        // code
    }

    public function edit($id_petugas)
    {
        return view('Admin.Petugas.edit');
    }

    public function update(Request $request, $id_petugas)
    {
        // code
    }

    public function destroy($id_petugas)
    {
        // code
    }
}
