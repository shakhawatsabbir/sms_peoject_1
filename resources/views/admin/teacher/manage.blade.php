@extends('master.admin.master')
@section('title')
    Manage User
@endsection
@section('content')
    <div class="card radius-10">
        <div class="card-header bg-transparent">
            <div class="row g-3 align-items-center">
                <div class="col">
                    <h5 class="mb-0">Manage User</h5>
                    <p class="text-center text-success">{{session('massage')}}</p>
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
            <div class="table-responsive">
                <table class="table align-middle mb-0 ">
                    <thead class="table-light">
                    <tr>
                        <th>#ID</th>
                        <th>Teacher</th>
                        <th>Code</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $teacher)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{asset($teacher->image)}}" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">{{$teacher->name}}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>{{$teacher->code}}</td>
                            <td>{{$teacher->email}}</td>
                            <td>{{$teacher->mobile}}</td>
                            <td>{{$teacher->address}}</td>
                            <td>{{$teacher->status == 1 ? 'Active' : 'Inactive'}} </td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
{{--                                    <a href="" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>--}}
                                    <a href="{{route('edit.teacher',['id'=>$teacher->id])}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="{{route('delete.teacher',['id'=>$teacher->id])}}" class="btn  btn-danger btn-sm " data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
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
