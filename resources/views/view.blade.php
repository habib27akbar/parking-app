
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
                
                <p class="login-box-msg">Kode Parkir</p>

                 @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>                          
                @endif
                <div class="row mt-3">
                    <div class="col-7">
                            <a href="{{ url('/') }}" class="btn btn-success">Kembali</a>
                    </div>
                    <div class="col-5">
                            <a href="{{ url('/home/keluar') }}" class="btn btn-warning">Keluar parkir</a>
                    </div>
                </div>



               
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</body>

@endsection
   


   


