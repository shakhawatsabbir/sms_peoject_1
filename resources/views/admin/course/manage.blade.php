@extends('master.admin.master')

@section('title')
    Manage Course
@endsection

@section('content')
    <div class="card radius-10">
        <div class="card-header bg-transparent">
            <div class="row g-3 align-items-center">
                <div class="col">
                    <h5 class="mb-0">Manage Teacher Course</h5>
                    <p class="text-center text-success">{{session('massage')}}</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle mb-0 table-bordered ">
                    <thead class="table-light">
                    <tr>
                        <th>#ID</th><th>Course Title</th>
                        <th>Course Fee</th>
                        <th>Trainer Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subjects as $subject)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$subject->title}}</td>
                            <td> {{number_format($subject->fee) }}</td>
                            <td>{{$subject->teacher->name}}</td>
                            <td>{{$subject->status == 1 ? 'Active' : 'Inactive'}} </td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                    {{--                                    <a href="" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>--}}
                                    <a href="{{route('view.detail',['id'=>$subject->id])}}" class="btn  btn-warning btn-sm " data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View Detail" aria-label="Edit">
                                        <i class="bi bi-book"></i>
                                    </a>

                                    <a href="{{route('update.status',['id'=>$subject->id])}}" class="btn btn-sm {{$subject->status == 1 ? 'btn-info' : 'btn-danger'}}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Update Status" aria-label="Delete">
                                        <i class=" {{$subject->status == 1 ? 'bi bi-arrow-up' : 'bi bi-arrow-down'}}"></i>
                                    </a>
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
