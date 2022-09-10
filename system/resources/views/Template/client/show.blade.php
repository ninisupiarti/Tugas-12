@extends('Template.base')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
              Detail Data Clien
            </div>
            <div class="card-body">
                <h3>{{$Client->nama}}</h3>
                <hr>
                <p>
                    {{"@".$Client->username}} |
                    Email : {{$Client->email}}
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
