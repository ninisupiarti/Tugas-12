@extends('Template.base')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
              Edit Data User
            </div>
            <div class="card-body">
                <form action="{{url('Admin/user', $User->id)}}" method="post">
                  @csrf
                  @method("put")
                  <div class="form-group">
                      <label for="" class="control-label">Nama</label>
                      <input type="text" class="form-control" name="nama" value="{{$User->nama}}">
                  </div>
                  <div class="form-group">
                      <label for="" class="control-label">UserName</label>
                      <input type="text" class="form-control" name="user_name" value="{{$User->user_name}}">
                  </div>
                  <div class="form-group">
                      <label for="" class="control-label">Email</label>
                      <input type="email" class="form-control" name="email" value="{{$User->email}}">
                  </div>
                  <div class="form-group">
                      <label for="" class="control-label">Password</label>
                      <input type="password" class="form-control" name="password">
                  </div>
                  <div class="form-group">
                    <label for="" class="control-label">No HP</label>
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
