@extends('website.master')
@section('title')
    Course Enroll
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <h3 class="text-muted">Course Enroll Form</h3>
                        <hr/>
                        <form action="{{ route('enroll.confirm',['id'=>$id]) }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Name</label>
                                <div class="col-md-9">
                                    @if(Session::get('student_id'))
                                        <input type="text" name="name" value="{{ $data['name'] }}" class="form-control" readonly>
                                    @else
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                    @endif
                                    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name'):''}}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    @if(Session::get('student_id'))
                                        <input type="email" name="email" value="{{ $data['email'] }}" class="form-control" readonly>
                                    @else
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                    @endif

                                    <span class="text-danger">{{ $errors->has('email') ? $errors->first('email'):''}}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    @if(Session::get('student_id'))
                                        <input type="number" name="mobile" value="{{ $data['mobile'] }}" class="form-control" readonly>
                                    @else
                                        <input type="number" name="mobile" class="form-control" placeholder="Enter Mobile">
                                    @endif
                                    <span class="text-danger">{{ $errors->has('mobile') ? $errors->first('mobile'):''}}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Payment</label>
                                <div class="col-md-9">
                                    <label><input type="radio" name="payment_type" value="1"> Pay Later</label>
                                    <label><input type="radio" name="payment_type" value="2"> Pay Now</label>
                                    <span class="text-danger">{{ $errors->has('payment_type') ? $errors->first('payment_type'):''}}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-9 offset-3">
                                    <input type="submit" name="btn" class="btn btn-outline-primary px-5" value="Confirm Enroll">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
