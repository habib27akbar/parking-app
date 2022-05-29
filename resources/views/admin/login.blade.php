
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
                
                @if (session()->has('loginError'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('loginError') }}
                    </div>                          
                @endif

                <form action="{{ url('/admin/authenticate') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" autofocus required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                       
                    </div>
                    
                    
                    <div class="row">
                        
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                            
                           
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
   


   


