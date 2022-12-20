@extends('master.admin.master')
@section('title')
    Manage Student
@endsection
@section('content')
    <div class="card radius-10">
        <div class="card-header bg-transparent">
            <div class="row g-3 align-items-center">
                <div class="col">
                    <h5 class="mb-0">Manage Student</h5>
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
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->mobile}}</td>
                            <td>{{$student->status == 1 ? 'Active' : 'Inactive'}} </td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                    <a href="{{route('student.status',['id'=>$student->id])}}" class="btn  btn-sm {{$student->status == 1 ? 'btn-info' : 'btn-warning'}} " data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Status" aria-label="Status">
                                        @if($student->status == 1)
                                            <i class="bi bi-eye-fill"></i>
                                        @else
                                            <i class="bi bi-eye-slash-fill"></i>
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
