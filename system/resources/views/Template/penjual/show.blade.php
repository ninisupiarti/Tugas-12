@extends('Template.base')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
              Detail Data Penjual
            </div>
            <div class="card-body">
                <h3>{{$Penjual->nama_penjual}}</h3>
                <hr>
                <p>
                    {{"@".$Penjual->username}}
                    Nama Toko : {{$Penjual->nama_toko}} |
                    Email : {{$Penjual->email}}
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
