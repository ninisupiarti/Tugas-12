@extends('Template.base')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
              Edit Data Penjual
            </div>
            <div class="card-body">
                <form action="{{url('Admin/penjual', $Penjual->id)}}" method="post">
                  @csrf
                  @method("put")
                  <div class="form-group">
                      <label for="" class="control-label">Nama</label>
                      <input type="text" class="form-control" name="nama_penjual" value="{{$Penjual->nama_penjual}}">
                  </div>
                  <div class="form-group">
                      <label for="" class="control-label">UserName</label>
                      <input type="text" class="form-control" name="username" value="{{$Penjual->username}}">
                  </div>
                  <div class="form-group">
                    <label for="" class="control-label">Nama Toko</label>
                    <input type="text" class="form-control" name="nama_toko" value="{{$Penjual->nama_toko}}">
                  </div>
                  <div class="form-group">
                      <label for="" class="control-label">Email</label>
                      <input type="email" class="form-control" name="email" value="{{$Penjual->email}}">
                  </div>
                  <div class="form-group">
                      <label for="" class="control-label">Password</label>
                      <input type="password" class="form-control" name="password">
                  </div>
                  <div class="form-group">
                    <label for="" class="control-label">NO HP</label>
                    <input type="text" class="form-control" name="no_handphone">
                </div>
                  <button class="btn-dark float-right"><i class="fa fa-save"></i> Simpan </button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
