@extends('layout.admin')
@section('content')


<!-- <body class="hold-transition sidebar-mini" onload="setFocusToTextBox()"> -->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">


        @include('partials.sidebar')




        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">

                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-12">

                            <div class="card">



                                <!-- /.card-header -->
                                <div class="card-body">
                                    
                                        <form action="" method="get">
                                            <div class="form-group row">
                                                <label for="awal" class="col-sm-2 col-form-label">Filter Tanggal</label>
                                                <div class="col-sm-2">
                                                    <input type="date" name="awal" class="form-control" value="{{ Request::get('awal') }}">
                                                </div>
                                                <label for="awal" class="col-sm-2 col-form-label">Sampai dengan</label>
                                                <div class="col-sm-2">
                                                    <input type="date" name="akhir" class="form-control" value="{{ Request::get('akhir') }}">
                                                </div>
                                                <div class="col-sm-2">
                                                    <button class="btn btn-primary">Cari data</button>
                                                    @if (  Request::get('awal') && Request::get('akhir') )
                                                        <a href="{{ url('/admin/laporan') }}" class="btn btn-warning">Reset</a>
                                                    @endif
                                                    
                                                </div>
                                            </div>

                                        </form>
                                           
                                        
                                       
                                   
                                    
                                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>No. Kendaraan</th>
                                                        <th>Tanggal Parkir</th>
                                                        <th>Tangggal Keluar</th>
                                                        <th>Biaya</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    @foreach ($parking as $p)
                                                    <tr>
                                                        <td>
                                                            {{$p->plat}}
                                                        </td>
                                                        <td>
                                                            {{$p->masuk}}
                                                        </td>
                                                        <td>
                                                            {{$p->keluar}}
                                                        </td>
                                                        <td>
                                                            @php
                                                                $hour = round(abs(strtotime($p->masuk) - strtotime($p->keluar)) / (60 * 60));
                                                                echo $data_biaya = 3000 * $hour; 
                                                            @endphp
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                

                                            </table>


                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->


                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('partials.footer')
    </div>
    <!-- ./wrapper -->

</body>



@endsection