@extends('layouts.admin')

<link rel="stylesheet" href="{{ URL::asset('teacher/css/signalStudent.css') }}">

<style>

</style>

@section('content')
    <div class="content-header mb-3">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Student/Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Student Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12 col-lg-4 col-sm-12">

                    <div class="card">
                        <div class="card-body box-profile">

                            @foreach ($signalStudent as $item )

                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                 src="{{asset('dist/img/user4-128x128.jpg')}}"
                                                 alt="User profile picture">
                                        </div>
                                    </div>
                                    <div class="col-6 row">
                                        <div class="col-12">
                                            <p class="profile-username text-bold float-left">{{$item->name}}</p>
                                        </div>
                                        <div class="col-12">
                                            <p class="text-muted float-left">Software Engineer</p>
                                        </div>
                                    </div>
                                </div>


                                <ul class="list-group">
                                    <li class="list-group-item" style="border: none">
                                        <b>Personal Information</b>
                                    </li>
                                    <li class="list-group-item" style="border: none">
                                        <b>Name:-</b> <p class="float-right">{{$item->name}}</p>
                                    </li>
                                    <li class="list-group-item" style="border: none">
                                        <b>TP:-</b> <p class="float-right">543</p>
                                    </li>
                                    <li class="list-group-item" style="border: none">
                                        <b>Email:-</b> <p class="float-right">{{$item->email}}</p>
                                    </li>
                                    <li class="list-group-item" style="border: none">
                                        <b>NIC No:-</b> <p class="float-right">13,287</p>
                                    </li>
                                </ul>

                            @endforeach

                        </div>
                    </div>

                </div>

                <div class="col-md-12 col-lg-8 col-sm-12">
                    <div class="row d-flex justify-content-end mb-5 mr-2">
                        <button class="btn float-right" style="background-color: #6676E1; color: white"><i class="fas fa-plus"></i>Give Free Class</button>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12" >
                            <div class="small-box bg-light">
                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <div class="ml-3 mt-3" style="width: 80px; height: 80px; border-radius: 20px; background-color: #1f9bc7">
                                            <div class="d-flex justify-content-center" style="padding-top: 25px">
                                                <i class="text-light fas fa-edit"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6 text-left mt-3" style="padding: 10px">
                                        <h5 class="mr-2 text-bold">Grade 11 - O/L</h5>
                                    </div>
                                </div>
                                <div class="pl-4 pt-2 pb-1 row">
                                    <div class="col-6">
                                        <p>C - 01 Mathematics</p>
                                        <p>Grade 11 - O/L</p>
                                    </div>
                                    <div class="col-6">
                                        <p>Saturday<span class="text-success ml-5">5.30 PM</span></p>
                                        <p>Sunday<span class="text-success ml-5">5.30 PM</span></p>
                                    </div>
                                    <button class="btn mb-2" type="button" style="background-color: #6676E1; color: white">View Class</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12" >
                            <div class="small-box bg-light">

                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <div class="ml-3 mt-3" style="width: 80px; height: 80px; border-radius: 20px; background-color: #1f9bc7">
                                            <div class="d-flex justify-content-center" style="padding-top: 25px">
                                                <i class="text-light fas fa-edit"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6 text-left mt-3" style="padding: 10px">
                                        <h5 class="mr-2 text-bold">Grade 10</h5>
                                    </div>
                                </div>
                                <div class="pl-4 pt-2 pb-1 row">
                                    <div class="col-6">
                                        <p>C - 01 Mathematics</p>
                                        <p>Grade 11 - O/L</p>
                                    </div>
                                    <div class="col-6">
                                        <p>Saturday<span class="text-success ml-5">5.30 PM</span></p>
                                        <p>Sunday<span class="text-success ml-5">5.30 PM</span></p>
                                    </div>
                                    <button class="btn mb-2" type="button" style="background-color: #6676E1; color: white">View Class</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12" >
                            <div class="small-box bg-light">

                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <div class="ml-3 mt-3" style="width: 80px; height: 80px; border-radius: 20px; background-color: #1f9bc7">
                                            <div class="d-flex justify-content-center" style="padding-top: 25px">
                                                <i class="text-light fas fa-edit"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6 text-left mt-3" style="padding: 10px">
                                        <h5 class="mr-2 text-bold">Grade 09</h5>
                                    </div>
                                </div>
                                <div class="pl-4 pt-2 pb-1 row">
                                    <div class="col-6">
                                        <p>C - 01 Mathematics</p>
                                        <p>Grade 11 - O/L</p>
                                    </div>
                                    <div class="col-6">
                                        <p>Saturday<span class="text-success ml-5">5.30 PM</span></p>
                                        <p>Sunday<span class="text-success ml-5">5.30 PM</span></p>
                                    </div>
                                    <button class="btn mb-2" type="button" style="background-color: #6676E1; color: white">View Class</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-sm-6">
                    <h1 class="m-0">Papers</h1>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12">
                    <div class="card" id="card-table">
                        <div class="card-body">
                            <table id="example1" class="table" >
                                <thead style="border: none">
                                <tr>
                                    <th>Date</th>
                                    <th>Paper Name</th>
                                    <th>Grade</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                {{--                                @foreach($students as $student)--}}
                                <tr style="background-color: white; padding-bottom: 50px!important;">
                                    <td>2021.02.07</td>
                                    <td>English 01</td>
                                    <td>Grade 11</td>
                                    <td>
                                        <input type="button" style="background-color: #FF0000; color: white" class="btn" id="" value="PDF">
                                        <input type="button" style="background-color: #6676E1; color: white" class="btn" id="" value="Give Marks">
                                        <input type="button" style="background-color: #6676E1; color: white" class="btn" id="" value="View">
                                    </td>
                                </tr>

                                <tr style="background-color: white; padding-bottom: 50px!important;">
                                    <td>2021.02.07</td>
                                    <td>English 01</td>
                                    <td>Grade 09</td>
                                    <td>
                                        <input type="button" style="background-color: #FF0000; color: white" class="btn" id="" value="PDF">
                                        <input type="button" style="background-color: #6676E1; color: white" class="btn" id="" value="Give Marks">
                                        <input type="button" style="background-color: #6676E1; color: white" class="btn" id="" value="View">
                                    </td>
                                </tr>

                                <tr style="background-color: white; padding-bottom: 50px!important;">
                                    <td>2021.02.07</td>
                                    <td>English 01</td>
                                    <td>Grade 09</td>
                                    <td>
                                        <input type="button" style="background-color: #FF0000; color: white" class="btn" id="" value="PDF">
                                        <input type="button" style="background-color: #6676E1; color: white" class="btn" id="" value="Give Marks">
                                        <input type="button" style="background-color: #6676E1; color: white" class="btn" id="" value="View">
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
