@extends('master.teacher.master')
@section('title')
    add-subject
@endsection
@section('content')
    <div class="col-md-12 mx-auto">
        <div class="card">
            <div class="card-header text-center"><h1>Add Subject</h1></div>
            <p class="text-center text-success">{{session('massage')}}</p>
            <div class="card-body">
                <form action="{{route('new.subject')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-md-2">Course Title</label>
                        <div class="col-md-10">
                            <input type="text" placeholder="Course Title" name="title" class="form-control"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2">Course Code</label>
                        <div class="col-md-10">
                            <input type="text" placeholder="Course Code" name="code" class="form-control"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2">Course Fee</label>
                        <div class="col-md-10">
                            <input type="number" placeholder="Course Fee" name="fee" class="form-control"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2">Short Description</label>
                        <div class="col-md-10">
                            <textarea type="text" class="form-control summernote" name="short_description"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2">Long Description</label>
                        <div class="col-md-10">
                            <textarea type="text" class="form-control summernote" name="long_description"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2">Image</label>
                        <div class="col-md-10">
                            <input type="file" name="image" class="form-control" accept="image/*"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2"></label>
                        <div class="col-md-10">
                            <input type="submit" class="btn btn-outline-info" value="Creat New Course"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
