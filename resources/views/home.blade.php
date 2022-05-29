
@extends('layout.app')
@section('content')
<body class="hold-transition login-page">
    <div class="login-box bg-class">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <!-- <div class="card-header text-center">
                <b>PBF</b>
            </div> -->
            <div class="card-body">
                
                <p class="login-box-msg">Masukan Plat Nomor Kendaraan Anda</p>

                <form action="{{ url('/action/save_plat_nomor') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <input type="text" name="plat" class="form-control @error('plat') is-invalid @enderror" placeholder="Plat Nomor Kendaraan" value="{{ old('plat') }}">
                        @error('plat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                    
                    
                    <div class="row">
                        
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                            <div class="row mt-3">
                                <div class="col-7">
                                     <a href="{{ url('/admin/login') }}" class="btn btn-success">Masuk sebagai admin</a>
                                </div>
                                <div class="col-5">
                                     <a href="{{ url('/home/keluar') }}" class="btn btn-warning">Keluar parkir</a>
                                </div>
                            </div>
                           
                        </div>
                        <!-- /.col -->
                    </div>
                </form>



               
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</body>

@endsection
   


   


