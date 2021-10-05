<!-- ======= Services Section ======= -->
<section id="courses" class="services">
    <div class="container">

    <div class="section-title text-center">
        <h2>What We Offer</h2>
        <p>We offer one-on-one and group classes. Our courses are custom-tailored to the students' needs.</p>
    </div>

    <div class="row">
        
        @foreach($courses as $course)
            @if(count($course->location) > 0)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
                <div class="icon"><i class="bx bx-book-open"></i></div>
                <h4><a href="{{ route('coursePage', $course->id) }}">{{$course->title}}</a></h4>
                <p>{{\Illuminate\Support\Str::limit($course->description, 250, $end='...')}}</p>
            </div>
            </div>
            @endif
        @endforeach
        
    </div>

    </div>
</section>
<!-- End Services Section -->