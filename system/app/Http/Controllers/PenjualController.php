<?php

namespace App\Http\Controllers;
use App\Models\Penjual;

class PenjualController extends Controller {
    function index(){
        $data['list_penjual'] = Penjual::all();
        return view('template.penjual.index', $data);
    }
    function create(){
        return view('template.penjual.create');
    }
    function store(){
        $Penjual = new Penjual;
        $Penjual->nama_penjual = request('nama_penjual');
        $Penjual->username = request('username');
        $Penjual->nama_toko = request('nama_toko');
        $Penjual->email = request('email');
        $Penjual->password = bcrypt(request('password'));
        $Penjual->save();
        return redirect('admin/penjual')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(Penjual $Penjual){
        $data['Penjual'] = $Penjual;
        return view('template.penjual.show', $data);
    }

    function edit(Penjual $Penjual){
        $data['Penjual'] = $Penjual;
        return view('template.penjual.edit', $data);
    }
    function update(Penjual $Penjual){
        $Penjual->nama_penjual = request('nama_penjual');
        $Penjual->username = request('username');
        $Penjual->nama_toko = request('nama_toko');
        $Penjual->email = request('email');
        if(request('password')) $Penjual->password = bcrypt(request('password'));
        $Penjual->save();

        return redirect('admin/penjual')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Penjual $Penjual){
        $Penjual->delete();

        return redirect('admin/penjual')->with('danger', 'Data Berhasil Dihapus');

    }
}
