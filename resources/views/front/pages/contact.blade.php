@extends('front.layouts.app') @section('front-content')
<section id="page-header" class="d-flex flex-column justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 text-center">
                <h1>Contact Us</h1>
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
                            Contact
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        @include('front.layouts.contact')
    </div>
</div>
@endsection
