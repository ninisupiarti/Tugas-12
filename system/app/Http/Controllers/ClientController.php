<?php

namespace App\Http\Controllers;
use App\Models\Client;

class ClientController extends Controller {
    function index(){
        $data['list_client'] = Client::all();
        return view('Template.Client.index', $data);
    }
    function create(){
        return view('Template.Client.create');
    }
    function store(){
        $Client = new Client;
        $Client->nama = request('nama');
        $Client->username = request('username');
        $Client->email = request('email');
        $Client->password = bcrypt(request('password'));
        $Client->save();
        return redirect('admin/client')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(Client $Client){
        $data['Client'] = $Client;
        return view('template.Client.show', $data);
    }
    function edit(Client $Client){
        $data['Client'] = $Client;
        return view('template.Client.edit', $data);
    }
    function update(Client $Client){
        $Client->nama = request('nama');
        $Client->username = request('username');
        $Client->email = request('email');
        if(request('password')) $Client->password = bcrypt(request('password'));
        $Client->save();

        return redirect('admin/client')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Client $Client){
        $Client->delete();

        return redirect('admin/client')->with('danger', 'Data Berhasil Dihapus');

    }
}
