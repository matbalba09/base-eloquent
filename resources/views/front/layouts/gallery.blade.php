<!-- ======= Portfolio Section ======= -->
<section id="gallery" class="portfolio">
    <div class="container">

    <div class="section-title text-center">
        <h2>Gallery</h2>
    </div>

    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-filipino">Filipino</li>
            <li data-filter=".filter-foreign">Foreign Students</li>
        </ul>
        </div>
    </div>
    
    <div class="row portfolio-container">
        @foreach($galleries as $gallery)
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{$gallery->client_type}}">
            <img src="{{asset($gallery->path)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>{{$gallery->name}}</h4>
            </div>
            </div>
        @endforeach
    </div>

    </div>
</section><!-- End Portfolio Section -->