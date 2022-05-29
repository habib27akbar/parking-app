<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parking App</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/public/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ url('/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('/public/dist/css/adminlte.min.css') }}">
    <style>
        
        .dataTables_length{
            display: inline-block!important;
            margin: 25px;
        }
        #DataTable_wrapper .row{
            width: 100%;
        }
        .dataTables_filter{
            margin: 20px;
            float: right;
        }
        .dataTables_info{
            color: #868c97!important;
            margin: 20px;
        }
        .pagination>li:first-child>a, .pagination>li:first-child>span {
            margin-left: 0;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
        .pagination>.disabled>a, .pagination>.disabled>a:focus, .pagination>.disabled>a:hover, .pagination>.disabled>span, .pagination>.disabled>span:focus, .pagination>.disabled>span:hover {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd;
        }
        .pagination>li>a {
            background: #fafafa;
            color: #666;
        }
        .pagination>li>a, .pagination>li>span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #337ab7;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        div.dataTables_wrapper div.dataTables_paginate {
            margin: 0;
            white-space: nowrap;
            text-align: right;
        }
        .dataTables_paginate {
            float: right;
            margin: 20px;
        }
        .paging_simple_numbers{
            margin: 20px;
        }


            
        .dt-button{
            float: left;
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
        }
        div#DataTables_Table_0_wrapper {
            display: block;
            padding: 10px;
        }
        a.dt-button{
            padding: 5px 15px;
            border-radius: 10px;
            margin: 5px;
            margin-top: 20px;
        }
        div#DataTables_Table_0_filter {
            float: right;
            margin-right:50px;
        }
        div#DataTables_Table_1_filter {
            float: right;
            margin-right: 40px;
        }
        
    
        div#DataTableLogs_wrapper {
            display: block;
        }
    </style>
</head>


    @yield('content')

        <!-- jQuery -->
        <script src="{{ url('/public/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ url('/public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ url('/public/dist/js/adminlte.min.js') }}"></script> 
        
        
                <!-- DataTables  & Plugins -->
        <script src="{{ url('/public/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('/public/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
        <script src="{{ url('/public/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
        <script src="{{ url('/public/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
        <script src="{{ url('/public/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
        <script src="{{ url('/public/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
        <script src="{{ url('/public/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
        <script src="{{ url('/public/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
        <script src="{{ url('/public/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>
        <script src="{{ url('/public/plugins/jquery/jquery-datatable.js') }}"></script>
       

        <script>
             $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false
                });

                $("div.dataTables_filter input").focus();



            });
        </script>


</html>
