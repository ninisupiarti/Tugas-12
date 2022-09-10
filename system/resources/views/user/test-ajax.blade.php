@extends('Tempalte.base')

@section('content')

    <div class="container">
        <div class="row">
           <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Alamat
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control label">Provinsi</label>
                               <select name=""  class="form-control" onchange="gantiProvinsi(this.value)">
                                    <option value="">Pilih Provinsi Terlebih Dahulu</option>
                                    @foreach ($list_provinsi as $provinsi)
                                        <option value="{{$provinsi->id}}">{{$provinsi->name}}</option>
                                    @endforeach
                               </select>
                            </div>
                            <div class="col-md-3" <label for="" class="control label">Provinsi</label>
                                <select name=""" class="form-control">
                                    <option value="">Pilih Privinsi Terlebih Dahulu</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select name="" class="form-control">
                                    <option value="">Pilih KAbupaten Terlebih Dahulu</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select name=""  class="form-control">
                                    <option value="">Pilih Kecamatan Terlebih Dahulu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>

@endsection

@push('script')
    <script>
        function gantiProvinsi(id){
            alert(id);
        }
    </script>
@endpush
