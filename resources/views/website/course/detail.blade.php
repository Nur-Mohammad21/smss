@extends('website.master')
@section('title')
     {{ $course->title }}
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{ asset($course->image) }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h3>{{ $course->name }}</h3>
                        <h5>Trainer Name: {{ $course->teacher->name }}</h5>
                        <h5>Course Fee: Tk.{{ $course->fee }}</h5>
                        <h6>Class Start Date: {{ $course->start_date }}</h6>
                        <hr/>
                        <p>{{ $course->short_description }}</p>
                        <hr/>
                        <a href="{{ route('enroll',['id'=>$course->id]) }}" class="btn btn-outline-success  {{ $check == true ? 'disabled':'' }}">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body bg-transparent border-0">
                        <p class="text-light">{!! $course->long_description !!} </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
