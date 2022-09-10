@extends('Template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Data User
                        <a href="{{url('Admin/user/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>UserName</th>
                                <th>Nama</th>
                                <th>Produk</th>
                                <th>Email</th>
                            </thead>
                            <tbody>
                                @foreach($list_user as $User)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('Admin/user', $User->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('Admin/user', $User->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            @include('Template.utils.delete', ['url' => url('Admin/user', $User->id)])
                                        </div>
                                    </td>
                                    <td>{{$User->user_name}}</td>
                                    <td>{{$User->nama}}</td>
                                    <td>{{$User->produk_count}}</td>
                                    <td>{{$User->email}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
