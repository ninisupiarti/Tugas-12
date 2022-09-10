<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;

class UserController extends Controller {
    function index(){
        $data['list_user'] = User::withCount('produk')->get();
        return view('user.index', $data);
    }
    function create(){
        return view('user.create');
    }
    function store(){
        $User = new User;
        $User->nama = request('nama');
        $User->user_name = request('user_name');
        $User->email = request('email');
        $User->password = (request('password'));
        $User->save();

        $UserDetail = new UserDetail;
        $UserDetail->id_user = $User->id;
        $UserDetail->no_handphone = request('no_handphone');
        $UserDetail->save();

        return redirect('Admin/user')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(User $User){
        $data['User'] = $User;
        return view('User.show', $data);
    }
    function edit(User $User){
        $data['User'] = $User; return view('user.edit', $data);
    }
    function update(User $User){
        $User->nama = request('nama');
        $User->user_name = request('user_name');
        $User->email = request('email');
        if(request('password')) $User->password = request('password');
        $User->save();

        return redirect('Admin/user')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(User $User){
        $User->delete();

        return redirect('Admin/user')->with('danger', 'Data Berhasil Dihapus');

    }
}
