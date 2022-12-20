@extends('master.admin.master')
@section('title')
    update teacher
@endsection
@section('content')
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header text-center"><h1>Update Teacher</h1></div>
            <p class="text-center text-success">{{session('massage')}}</p>
            <div class="card-body">
                <form action="{{route('update.teacher',['id'=>$teacher->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-md-3">Full Name</label>
                        <div class="col-md-9">
                            <input type="text" value="{{$teacher->name}}" name="name" class="form-control"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3">Email</label>
                        <div class="col-md-9">
                            <input type="email" value="{{$teacher->email}}" name="email" class="form-control"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3">Mobile</label>
                        <div class="col-md-9">
                            <input type="text" value="{{$teacher->mobile}}" name="mobile" class="form-control"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3">Address</label>
                        <div class="col-md-9">
                            <textarea type="text" class="form-control" name="address"> {{$teacher->address}}"</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3">Image</label>
                        <div class="col-md-9">
                            <input type="file" name="image" class="form-control" accept="image/*"/>
                            <img src="{{asset($teacher->image)}}" alt="" class="img-fluid mt-3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3">Status</label>
                        <div class="col-md-9">
                            <label><input type="radio" {{$teacher->status == 1 ? 'checked' : ''}} name="status" value="1" />Active</label>
                            <label><input type="radio" {{$teacher->status == 0 ? 'checked' : ''}} name="status" value="0" />Inactive</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3"></label>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-outline-info" value="Update Teacher"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
