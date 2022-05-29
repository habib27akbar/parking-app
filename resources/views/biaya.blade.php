
@extends('layout.app')
@section('content')
<body class="hold-transition login-page">
    <div style="width: 530px;" class="login-box bg-class">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            
            <div class="card-body">
                
                <p class="login-box-msg">No. Kendaraan : {{ $arr['plat'] }}</p>
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Waktu Masuk</label>
                    <div class="col-sm-5 mt-2">
                       {{ $arr['tgl_masuk'] }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Waktu Keluar</label>
                    <div class="col-sm-5 mt-2">
                       {{ $arr['tgl_keluar'] }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Biaya</label>
                    <div class="col-sm-5 mt-2">
                       {{ $arr['biaya'] }}
                    </div>
                </div>

                
                 <a href="{{ url('/') }}" class="btn btn-warning"> << Kembali</a>


               
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

</body>

@endsection
   


   


