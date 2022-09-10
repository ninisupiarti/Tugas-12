@extends('Template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Data Penjual
                        <a href="{{url('Admin/penjual/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>UserName</th>
                                <th>Nama</th>
                                <th>Nama Toko </th>
                                <th>Email</th>
                            </thead>
                            <tbody>
                                @foreach($list_penjual as $Penjual)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('Admin/penjual', $Penjual->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('Admin/penjual', $Penjual->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            @include('Template.utils.delete', ['url' => url('Admin/penjual', $Penjual->id)])
                                        </div>
                                    </td>
                                    <td>{{$Penjual->username}}</td>
                                    <td>{{$Penjual->nama_penjual}}</td>
                                    <td>{{$Penjual->nama_toko}}</td>
                                    <td>{{$Penjual->email}}</td>
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
