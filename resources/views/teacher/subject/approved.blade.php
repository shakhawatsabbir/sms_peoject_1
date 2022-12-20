@extends('master.teacher.master')
@section('title')
    Approved Subject
@endsection
@section('content')
    <div class="card radius-10">
        <div class="card-header bg-transparent">
            <div class="row g-3 align-items-center">
                <div class="col">
                    <h5 class="mb-0">Approved Subject</h5>
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
                        <th>Code</th>
                        <th>Fee</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subjects as $subject)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$subject->title}}</td>
                            <td>{{$subject->code}}</td>
                            <td> {{number_format($subject->fee) }}</td>
                            <td>{{$subject->status == 1 ? 'Active' : 'Inactive'}} </td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                   <a href="{{route('enrolled.student',['id'=>$subject->id])}}" class="btn  btn-success btn-sm " data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Enroll Student" aria-label="Delete"><i class="bi bi-list"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
