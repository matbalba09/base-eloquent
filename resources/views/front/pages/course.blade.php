@extends('front.layouts.app') @section('front-content')
<section id="page-header" class="d-flex flex-column justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 text-center">
                <h1>{{$course->title}}</h1>
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
                        <li class="breadcrumb-item">
                            <a href="#">Course</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{$course->title}}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img
                    src="{{asset($course->image)}}"
                    class="img-fluid"
                    alt="..."
                />

                <div class="row">
                    <div class="col-12 mt-4">
                        <a href="#"
                            ><i class="bx bxs-file-pdf"></i> Sample Course
                            Material.pdf</a
                        >
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h2>Course Details</h2>

                <div class="row">
                    <div class="col-12 mt-4">
                        <h3>Choose No. of Hours:</h3>
                        <p>
                            <button type="button" class="btn btn-primary">
                                <span class="badge">4 hrs</span>
                            </button>

                            <button type="button" class="btn btn-primary">
                                <span class="badge">6 hrs</span>
                            </button>

                            <button type="button" class="btn btn-primary">
                                <span class="badge">10 hrs</span>
                            </button>
                        </p>
                    </div>
                    <div class="col-12 mt-4">
                        <h3>Schedule:</h3>
                        <ul class="list-group">
                            <li class="list-group-item">TBA</li>
                            <li class="list-group-item">TBA</li>
                            <li class="list-group-item">TBA</li>
                        </ul>
                    </div>
                    <div class="col-12 mt-4">
                        <h6>
                            {{$course->description}}
                        </h6>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="row justify-content-end">
                            <div class="col-3">
                                <a href="#" class="btn btn-secondary"
                                    >Trial Course</a
                                >
                            </div>
                            <div class="col-3">
                                <a href="#" class="btn btn-primary"
                                    >Enroll Course</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
