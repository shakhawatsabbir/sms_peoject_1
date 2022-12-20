@extends('master.admin.master')
@section('title')
    add user
@endsection
@section('content')
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header text-center"><h1>Add Teacher</h1></div>
            <p class="text-center text-success">{{session('massage')}}</p>
            <div class="card-body">
                <form action="{{route('new.teacher')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-md-3">Full Name</label>
                        <div class="col-md-9">
                            <input type="text" placeholder="Full Name" name="name" class="form-control"/>
                        </div>
                    </div>
{{--                    <div class="row mb-3">--}}
{{--                        <label class="col-md-3">Teacher Code</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <input type="text" placeholder="Teacher Code" name="code" class="form-control"/>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="row mb-3">
                        <label class="col-md-3">Email</label>
                        <div class="col-md-9">
                            <input type="email" placeholder="Email" name="email" class="form-control"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3">Mobile</label>
                        <div class="col-md-9">
                            <input type="text" placeholder="Mobile" name="mobile" class="form-control"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3">Address</label>
                        <div class="col-md-9">
                            <textarea type="text" class="form-control" name="address"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3">Image</label>
                        <div class="col-md-9">
                            <input type="file" name="image" class="form-control" accept="image/*"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3"></label>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-outline-info" value="Creat New Teacher"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
