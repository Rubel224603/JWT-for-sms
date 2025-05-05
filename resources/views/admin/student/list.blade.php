@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center fw-bolder">
                    <h1 class="fw-bold">Student Information</h1>

                </div>
                <div class="card-body">

                    <div class="table-responsive-sm">
                        <table class="table table-striped mb-0">
                            <thead>
                            <p class="text-end text-success">{{session('updateMessage')}}</p>
                            <form action="{{route('student.list')}}" method="GET">
                                @csrf
                                <div class="mb-3 d-flex">

                                    <input type="text" id="example-email" name="name" class="form-control mb-2"  style="width:500px !important;" placeholder="search by name or email">
                                    <input type="submit" value="search" class="btn btn-success" style="margin-left:20px !important; " >
                                    <a href="{{route('student.list')}}" class="btn btn-primary" style="margin-left:20px !important;">Clear</a>
                                    <a href="{{route('student.create')}}" class="btn btn-danger" style="margin-left:20px;">Add Student</a>
                                </div>



                            </form>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date of Birth</th>
                                <th>Action</th>
                                <th>Created_at</th>
                                <th>updated_at</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $key=> $student)
                            <tr>
                                <td>{{$students->firstItem()+$key}}</td>
                                <td>
                                   {{$student->name}}
                                </td>
                                <td>  {{$student->email}}</td>
                                <td>  {{$student->phone}}</td>
                                <td>  {{$student->date_of_birth}}</td>
                                <td class="text-muted">
                                    <a href="{{route('student.edit',['id'=>$student->id,'page'=>request('page')])}}" class="link-reset fs-20 p-1"> <i
                                            class="ri-pencil-line"></i></a>
                                    <a href="{{route('student.delete',['id'=>$student->id])}}" class="link-reset fs-20 p-1"> <i
                                            class="ri-delete-bin-line" onclick="return confirm('Are You Sure?')"></i></a>
                                </td>

                               <td>{{ $student->created_at->diffForHumans() }}</td>
                                <td>{{$student->updated_at->diffForHumans() }}</td>


                            </tr>
                            @endforeach
                            </tbody>

                        </table>
                        <p>Total Students: {{ $total }}</p>

                        @if((request('name')))
                                <p> Total search item {{$students->total()}}</p>
                        @endif

                        <div class="d-flex justify-content-around mt-5">
                            <a href="{{$students->previousPageUrl()}}" class="btn btn-primary {{request('page') == '' || request('page') ==1 ?'disabled' :''}}" > Previous</a>
                            <p>current page: {{request('page') ?:1}}</p>
                            <a href="{{$students->nextPageUrl()}}" class="btn btn-primary {{$students->onLastPage() ?'disabled' :''}}">Next</a>
                        </div>



                    </div> <!-- end table-responsive-->
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->


    </div>
@endsection
