@extends('master.front.master')
@section('title')
    Log-In
@endsection
@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Login Form</h3>

                    </div>
                    <div class="card-body">
                        <form action="{{route('new.login')}}" method="post">
                            @csrf
                            <p class="text-danger text-center">{{session('massage')}}</p>
                            <div class="row">
                                <label class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email"/>
                                </div>
                            </div>
                            <div class="row py-3">
                                <label class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password"/>
                                </div>
                            </div>
                            <div class="row py-3">
                                <label class="col-md-3">Login As</label>
                                <div class="col-md-9">
                                    <label><input type="radio" name="check" value="1">Teacher</label>
                                    <label><input type="radio" name="check" value="0">Student</label>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" value="login" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
