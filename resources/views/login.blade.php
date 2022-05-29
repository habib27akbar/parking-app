
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
                    
                    
                    
                    <div class="row">
                        
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                            <a href="{{ url('/login') }}">Masuk sebagai admin</a>
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
   


   


