@inject('response', 'App\Response')

@extends('front.layouts.app') 
@section('front-content')

<section id="page-header" class="d-flex flex-column justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 text-center">
                <h1>Courses</h1>
            </div>
        </div>
    </div>
</section>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Course
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- placeholder image -->
        <!-- https://www.arch2o.com/wp-content/uploads/2021/01/Arch2O-500-free-online-courses-in-architecture-art-design-engineering.jpg -->
        <div class="row">
        @foreach($courses as $course)
            @if(count($course->location) > 0)
            <div class="col-4">
                <div class="card">
                    <img
                        src="{{asset($course->image)}}"
                        class="card-img-top"
                        alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">
                            <div class="row">
                                <div class="col-12">{{$course->title}}</div>
                            </div>
                        </h5>
                        <p class="card-text">
                            {{\Illuminate\Support\Str::limit($course->description, 250, $end='...')}}
                        </p>
                        <div class="row justify-content-end">
                            <div class="col-6 text-end">
                                <a href="{{ route('coursePage', $course->id) }}" class="btn btn-primary"
                                    >View Course</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
        </div>
    </div>
</div>
@endsection
