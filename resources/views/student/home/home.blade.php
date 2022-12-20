@extends('master.front.master')

@section('content')
    <Section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="list-group list-group-flush">
                            <a class="list-group-item">My All Course</a>
                            <a class="list-group-item">My Profile</a>
                            <a class="list-group-item">My Payment</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header"> My Applied Recent Course</div>
                        <div class="card-body">
                            <p class="text-center text-success">{{Session::get('massage')}}</p>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course Title</th>
                                    <th>Trainer Name</th>
                                    <th>Course Fee</th>
                                    <th>Enroll Status</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($enrolles as $enrolle)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$enrolle->subject->title}}</td>
                                        <td>{{\App\Models\Teacher::find($enrolle->subject->teacher_id)->name}}</td>
                                        <td>{{number_format($enrolle->subject->fee)}}</td>
                                        <td>{{$enrolle->status == 1 ? 'Success' : 'Pending'}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Section>
@endsection
