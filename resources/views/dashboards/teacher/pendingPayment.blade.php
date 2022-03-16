@extends('layouts.admin')

<link rel="stylesheet" href="{{ URL::asset('teacher/css/studentView.css') }}">

@section('content')
    <div class="content-header mb-5">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pending Payment</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Payment</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">

                    <div class="card" id="card">
                        <div class="card-body">
                            <table id="example1" class="table">
                                <thead style="border: none">
                                <tr>
                                    <th>User Name</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Mobile Number</th>
                                    <th>Grade</th>
                                    <th>Teacher Name</th>
                                    <th>Subject</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                {{--                                @foreach($students as $student)--}}
                                <tr style="background-color: white; padding-bottom: 50px!important;">
                                    <td>Rusira Pathum</td>
                                    <td>2021.02.07</td>
                                    <td>07.55</td>
                                    <td>0750163874</td>
                                    <td>Grade 10</td>
                                    <td>Saman Sir</td>
                                    <td>Sinhala</td>
                                    <td>
                                        <input type="button" style="border-color: #FF0000; color: #FF0000"
                                               class="btn btn-outline mr-3" id="" value="PDF">
                                        <input type="button" style="background-color: #189AB4; color: white" class="btn"
                                               id="" value="View">
                                    </td>
                                </tr>

                                <tr style="background-color: white; padding-bottom: 50px!important;">
                                    <td>Rusira Pathum</td>
                                    <td>2021.02.07</td>
                                    <td>07.55</td>
                                    <td>0750163874</td>
                                    <td>Grade 10</td>
                                    <td>Saman Sir</td>
                                    <td>Sinhala</td>
                                    <td>
                                        <input type="button" style="border-color: #189AB4; color: #189AB4"
                                               class="btn btn-outline mr-3" id="" value="Jpg">
                                        <input type="button" style="background-color: #189AB4; color: white" class="btn"
                                               id="" value="View">
                                    </td>
                                </tr>

                                <tr style="background-color: white; padding-bottom: 50px!important;">
                                    <td>Rusira Pathum</td>
                                    <td>2021.02.07</td>
                                    <td>07.55</td>
                                    <td>0750163874</td>
                                    <td>Grade 10</td>
                                    <td>Saman Sir</td>
                                    <td>Sinhala</td>
                                    <td>
                                        <input type="button" style="border-color: #FF0000; color: #FF0000"
                                               class="btn btn-outline mr-3" id="" value="PDF">
                                        <input type="button" style="background-color: #189AB4; color: white" class="btn"
                                               id="" value="View">
                                    </td>
                                </tr>
                                {{--                                @endforeach--}}

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection
@section('import_script')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('teacher/studentView.js') }}"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

    </script>
@endsection
