@extends('front.layouts.app') @section('front-content')
<section id="page-header" class="d-flex flex-column justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 text-center">
                <h1>Gallery</h1>
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
                            Gallery
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 portfolio-item">
                <a
                    href="https://s35691.pcdn.co/wp-content/uploads/2017/02/iStock-475976172.170201.jpg"
                    class="glightbox"
                >
                    <img
                        src="https://s35691.pcdn.co/wp-content/uploads/2017/02/iStock-475976172.170201.jpg"
                        class="img-fluid"
                        alt=""
                    />
                </a>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item">
                <a
                    href="https://s35691.pcdn.co/wp-content/uploads/2017/02/iStock-475976172.170201.jpg"
                    class="glightbox"
                >
                    <img
                        src="https://s35691.pcdn.co/wp-content/uploads/2017/02/iStock-475976172.170201.jpg"
                        class="img-fluid"
                        alt=""
                    />
                </a>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item">
                <a
                    href="https://s35691.pcdn.co/wp-content/uploads/2017/02/iStock-475976172.170201.jpg"
                    class="glightbox"
                >
                    <img
                        src="https://s35691.pcdn.co/wp-content/uploads/2017/02/iStock-475976172.170201.jpg"
                        class="img-fluid"
                        alt=""
                    />
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
