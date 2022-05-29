
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
                
                <p class="login-box-msg">Masukan Kode Parkir</p>
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>                          
                @endif
                 @if (session()->has('gagal'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('gagal') }}
                    </div>                          
                @endif
                <form action="{{ url('/action/keluar') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <input type="text" name="code" class="form-control @error('code') is-invalid @enderror" placeholder="Kode Parkir" value="{{ old('code') }}">
                        @error('code')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                    
                    
                    <div class="row">
                        
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                            
                           
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
   


   


