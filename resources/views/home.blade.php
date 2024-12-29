@extends('components.layout')
@section('page-content')
    <section class="hero">
        <div>
            <h1>Innovating the Future of Technology</h1>
            <p>At TechOrg, we provide cutting-edge solutions to shape tomorrow's tech landscape.</p>
            <a href="#contact" class="cta-button">Get in Touch</a>
        </div>
    </section>

    <section id="whorwe">
<div class="container padding-4">
  <div class="row align-items-start">
            <div class="col-lg-5">

                <img src="https://ieee-link.org/assets/images/bg3.webp" class="img-fluid" alt="">
            </div>
            <div class="col-lg-7 text-left">
                <h5>About Us</h5>
                <h2>WHO ARE WE</h2>

            </div>
        </div>

</div>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>TechOrg is a leading innovator in the tech industry. Our team is committed to delivering high-quality solutions
            that push the boundaries of what's possible in technology.</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <div class="service-cards">
            <div class="service-card">
                <h3>Software Development</h3>
                <p>Custom software solutions designed to meet your unique business needs.</p>
            </div>
            <div class="service-card">
                <h3>Consulting</h3>
                <p>Strategic consulting to optimize and transform your technology infrastructure.</p>
            </div>
            <div class="service-card">
                <h3>Cloud Solutions</h3>
                <p>Empowering businesses to scale efficiently with cloud-first technologies.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>Get in touch with us for a consultation or partnership opportunities.</p>
        <a href="mailto:info@techorg.com" class="cta-button">Email Us</a>
    </section>
@endsection
