@extends('master.front.master')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-center text-success">{{session('massage')}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-img">
                                <img src="{{asset($subject->image)}}" alt="" class="img-fluid h-100 w-100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3>{{$subject->title}}</h3>
                            <p>Course Fee : {{number_format( $subject->fee)}}Tk</p>

                            <a href="{{route('enroll.now',['id'=>$subject->id])}}" class="btn btn-success w-25 mx-auto {{$check == true ? 'disabled btn-danger ' : ''}}">Enroll Now</a>
                            <hr/>
                            <div class="d-flex">
                                <img src="{{asset($subject->teacher->image)}}" alt="" height="50" width="50" class="rounded-5">
                                <h5 class="ms-2 mt-2">Trainer Name:- {{$subject->teacher->name}}</h5>
                            </div>
                            <hr/>
                            <div>{!! $subject->short_description !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body rounded-0">
                        <h1>Course Module Detail</h1>
                        <hr/>
                        <div>{!! $subject->long_description !!}</div>
                        <hr/>
                        <a href="" class="btn btn-outline-success w-25 mx-auto">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
