@extends('master.admin.master')
@section('title')
    Manage Course
@endsection
@section('content')
    <div class="card radius-10">
        <div class="card-header bg-transparent">
            <div class="row g-3 align-items-center">
                <div class="col">
                    <h5 class="mb-0">Manage Course</h5>
                </div>
                <div class="col">
                    <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                        <div class="dropdown">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <p class="text-center text-success">{{session('massage')}}</p>
            <div class="table-responsive">
                <table class="table align-middle mb-0 ">
                    <thead class="table-light">
                    <tr>
                        <th>#ID</th>
                        <th>Course Title</th>
                        <th>Teacher Name</th>
                        <th>Student Name</th>
                        <th>Enroll Status</th>
                        <th>Payment Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($enrolls as $enroll)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$enroll['course_title']}}</td>
                            <td>{{$enroll['teacher_name']}}</td>
                            <td>{{$enroll['student_name'].'('.$enroll['student_mobile']}}</td>
                            <td>{{$enroll['enroll_status']}} </td>
                            <td>{{$enroll['payment_status']}} </td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6 me-3">
                                    <a href="{{route('update.enroll.status',['id'=>$enroll['enroll_id']])}}" class="btn  btn-sm {{$enroll['enroll_status'] == 'Pending' ? 'btn-warning' : 'btn-info disabled'}} " data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Status" aria-label="Status">
                                        @if($enroll['enroll_status'] == 'Pending')
                                            <i class="bi bi-eye-slash-fill"></i>
                                        @else
                                            <i class="bi bi-eye-fill"></i>
                                        @endif
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
