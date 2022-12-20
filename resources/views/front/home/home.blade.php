@extends('master.front.master')
@section('title')
    Home
@endsection
@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($subjects as $subject)
                    <div class="col-md-6">
                        <div class="card mb-3" >
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="{{asset($subject->image)}}" class="img-fluid rounded-start h-100" alt="..." >
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <figure>
                                            <blockquote class="blockquote">
                                                <p>{{$subject->title}}</p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer">
                                                {{$subject->teacher->name}}
                                            </figcaption>
                                        </figure>
                                        <div>{!! $subject->short_description !!}</div>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <a href="{{route('course.detail',['id'=>$subject->id])}}" class="btn btn-outline-success">Read More</a>
                                        <a href="" class="btn btn-outline-info float-end">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <input type="text" class="form-control" placeholder="Enter Your Email Here">
                                </div>
                                <div class="col-3">
                                    <input type="submit" class="btn btn-outline-success w-100" value="Subscribe Now">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
