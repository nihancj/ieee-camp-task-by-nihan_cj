@extends('layouts.app')
@section('content')
    <section class="bsb-hero-5 bsb-overlay img-fluid  position-relative home" id="top"
        style="background-image: url('https://ieee-link.org/assets/images/bg1.jpeg'); height :104vh; background-attachment: fixed; background-size: cover">
        {{-- @extends('layouts.navigation') --}}
        <div class="container">
            <div class="row justify-content-md-center align-items-center">
                <div class="col-12 col-md-11 col-lg-9 col-xl-8 col-xxl-7">
                    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                    <h2 class="display-1 text-white text-center fw-bold mb-4">Belong Where The Leaders Thrive</h2>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" onclick="$('.about_us')[0].focus()"
                            class="btn bsb-btn-2xl btn-outline-light">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

<br>
<br>


<div class="wrap animate pop">
	<div class="overlay">
		<div class="overlay-content animate slide-left delay-2">
			<h1 class="animate slide-left pop delay-4">About Us</h1>
			<p class="animate slide-left pop delay-5" style="color: black; margin-bottom: 2.5rem;">Link 2024</p>
		</div>
		<div class="image-content animate slide delay-5" style="background-image: {{asset('assets/images/home/bg3.webp')}}"></div>
		<div class="dots animate">
			<div class="dot animate slide-up delay-6"></div>
			<div class="dot animate slide-up delay-7"></div>
			<div class="dot animate slide-up delay-8"></div>
		</div>
	</div>
	<div class="text">
<p style="color: #3e1c14;">LINK (Local Integrated Network of Kerala IEEE Students) is an innovative concept that originated in IEEE Kerala Section in India, aimed at networking student branches in an effective way, thereby increasing the value in IEEE Student membership. LINK was formally inaugurated by past IEEE President Mr. Cleon Anderson in January 2005. Since its inception LINK has achieved tremendous results, causing an exponential increase in student branches and student activities in IEEE Kerala Section over the years. The model of link was adopted by IEEE Region 10 as R10 GINI (Global Integrated Network of IEEE Students).</p>
	</div>
</div>

@endsection
