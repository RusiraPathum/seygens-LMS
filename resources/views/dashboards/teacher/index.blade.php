@extends('layouts.admin')

@section('content')
    <div class="content-header mb-5">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-12" >
                    <!-- small box -->
                    <div class="small-box bg-light">

                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="ml-3" style="width: 80px; height: 80px; border-radius: 20px; margin-top: -20px; background-color: #AA1945">
                                    <div class="d-flex justify-content-center" style="padding-top: 25px">
                                        <i class="text-light fas fa-edit"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 text-right" style="padding: 10px">
                                <p class="mr-2">This Month total Revenue</p>
                                <h5 class="mr-2 text-bold">LKR.281000.00</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="pl-2 pb-1">
                            <p><span class="text-success">+10%</span> than last Month</p>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-12" >
                    <!-- small box -->
                    <div class="small-box bg-light">

                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="ml-3" style="width: 80px; height: 80px; border-radius: 20px; margin-top: -20px; background-color: #FF2768">
                                    <div class="d-flex justify-content-center" style="padding-top: 25px">
                                        <i class="text-light far fa-calendar-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 text-right" style="padding: 10px">
                                <p class="mr-2">This Month total Revenue</p>
                                <h5 class="mr-2 text-bold">LKR.281000.00</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="pl-2 pb-1">
                            <p><span class="text-success">+10%</span> than last Month</p>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-12" >
                    <!-- small box -->
                    <div class="small-box bg-light">

                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="ml-3" style="width: 80px; height: 80px; border-radius: 20px; margin-top: -20px; background-color: #153749">
                                    <div class="d-flex justify-content-center" style="padding-top: 25px">
                                        <i class="text-light fas fa-table"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 text-right" style="padding: 10px">
                                <p class="mr-2">This Month total Revenue</p>
                                <h5 class="mr-2 text-bold">LKR.281000.00</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="pl-2 pb-1">
                            <p><span class="text-success">+10%</span> than last Month</p>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
@endsection
