@extends('admin.master')
@section('body')

    <div class="page-title-head d-flex align-items-center gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-bold mb-0">Dashboard</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0 fs-13">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Abstack</a></li>

                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>




    <div class="page-container">

        <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1">
            <div class="col-md-12">
                <div class="card card-body">

                    <p>  DateTime: {{ now()->timezone('Asia/Dhaka')->format('h:i A, d M Y') }}</p>



                </div>
            </div><!-- end col -->



        </div><!-- end row -->



        <div class="row">
            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-header d-flex flex-wrap align-items-center gap-2">
                        <h4 class="header-title me-auto">Recent New Users</h4>

                        <div class="d-flex gap-2 justify-content-end text-end">
                            <a href="javascript:void(0);" class="btn btn-sm btn-light">Import <i
                                    class="ri-download-line ms-1"></i></a>
                            <a href="javascript:void(0);" class="btn btn-sm btn-primary">Export <i
                                    class="ri-reset-right-line ms-1"></i></a>
                        </div>
                    </div>

                    <div class="card-body p-0">


                        <div class="table-responsive">
                            <table
                                class="table table-custom table-centered table-sm table-nowrap table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>Profile</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-md flex-shrink-0 me-2">
                                                            <span class="avatar-title bg-primary-subtle rounded-circle">
                                                                <img src="{{asset('/')}}admin/assets/images/users/avatar-1.jpg" alt=""
                                                                     height="26" class="rounded-circle">
                                                            </span>
                                            </div>
                                            <div>
                                                <h5 class="fs-14 mt-1"></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$user->name}}</td>
                                    <td>
                                        <h5 class="fs-14 mt-1 fw-normal">Administrator</h5>
                                    </td>
                                    <td>
                                        <h5 class="fs-14 mt-1 fw-normal"><i
                                                class="ri-circle-fill fs-12 text-success"></i> Active</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a href="#"
                                               class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                               data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="javascript:void(0);" class="dropdown-item">View
                                                    Profile</a>
                                                <a href="javascript:void(0);"
                                                   class="dropdown-item">Deactivate</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card-body-->

                    <div class="card-footer">
                        <div class="align-items-center justify-content-between row text-center text-sm-start">
                            <div class="col-sm">
                                <div class="text-muted">
                                    Showing <span class="fw-semibold">5</span> of <span
                                        class="fw-semibold">2596</span> Users
                                </div>
                            </div>
                            <div class="col-sm-auto mt-3 mt-sm-0">
                                <ul
                                    class="pagination pagination-boxed pagination-sm mb-0 justify-content-center">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link"><i class="ri-arrow-left-s-line"></i></a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link"><i class="ri-arrow-right-s-line"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- -->
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col-->



        </div> <!-- end row-->

    </div> <!-- container -->


@endsection
