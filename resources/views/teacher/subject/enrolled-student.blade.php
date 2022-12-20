@extends('master.teacher.master')
@section('title')
    All Enrolled
@endsection
@section('content')
    <div class="card radius-10">
        <div class="card-header bg-transparent">
            <div class="row g-3 align-items-center">
                <div class="col">
                    <h5 class="mb-0">All Enrolled Student</h5>
                    <p class="text-center text-success">{{session('massage')}}</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle mb-0 table-bordered ">
                    <thead class="table-light">
                    <tr>
                        <th>#ID</th>
                        <th>Subject Title</th>
                        <th>Student Name</th>
                        <th>Student Id</th>
                        <th>Enroll Status</th>
                        <th>Payment Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($enrolls as $enroll)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$enroll->subject->title}}</td>
                            <td>{{\App\Models\Student::find($enroll->student_id)->name}}</td>
                            <td>{{\App\Models\Student::find($enroll->student_id)->id}}</td>
                            <td>{{$enroll->enroll_status}} </td>
                            <td>{{$enroll->payment_status}} </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
