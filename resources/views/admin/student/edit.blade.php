@extends('admin.master')
@section('body')




    <div class="page-container">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h1 class="fw-bolder">Add Students Form</h1>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <form action="{{route('student.update',['id'=>$student->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <p class="text-primary text-end">{{session('message')}}</p>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Name</label>
                                        <input type="text" id="simpleinput" class="form-control" name="name" placeholder="Name" value="{{$student->name}}">
                                        @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-email" class="form-label">Email</label>
                                        <input type="email" id="example-email" name="email" class="form-control" placeholder="Email" value="{{$student->email}}">
                                        @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-password" class="form-label">Phone</label>
                                        <input type="number" id="example-number" class="form-control" placeholder="phone number" name="phone" value="{{$student->phone}}">
                                        @error('phone')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-date" class="form-label">Date of birth</label>
                                        <input class="form-control" id="example-date" type="date" name="date_of_birth" value="{{$student->date_of_birth}}" >

                                        @error('date_of_birth')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" class="btn btn-primary btn-lg" value="Update">
                                    </div>
                                    <input type="hidden" name="page" value="{{request('page')}}">


                                </form>
                            </div> <!-- end col -->


                        </div>
                        <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->



    </div> <!-- container -->




@endsection
