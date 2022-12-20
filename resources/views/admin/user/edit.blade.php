@extends('master.admin.master')
@section('title')
    update user
@endsection
@section('content')
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header text-center"><h1>Update User</h1></div>
            <p class="text-center text-success">{{session('massage')}}</p>
            <div class="card-body">
                <form action="{{route('update.user',['id'=>$user->id])}}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-md-3">Full Name</label>
                        <div class="col-md-9">
                            <input type="text" value="{{$user->name}}" name="full_name" class="form-control"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3">Email</label>
                        <div class="col-md-9">
                            <input type="email" value="{{$user->email}}" name="email" class="form-control"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3">Password</label>
                        <div class="col-md-9">
                            <input type="password" placeholder="Password" name="password" class="form-control"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3"></label>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-outline-info" value="Update User Info"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
