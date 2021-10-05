@extends('front.layouts.app')

@section('front-content')
@include('front.layouts.hero')
<main id="main"> 
    @include('front.layouts.courses', ['courses' => $courses])

    @include('front.layouts.cta')

    @include('front.layouts.about')

    @include('front.layouts.gallery', ['galleries' => $galleries])

</main>
@endsection
