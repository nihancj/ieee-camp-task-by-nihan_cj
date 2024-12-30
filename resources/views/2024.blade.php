@extends('layouts.app')
@section('content')
    <br> <br> <br> <br> <br>
    <div class="container">

        <h2 style="font-family: roboto-mono, mono;
            font-style: normal;
            font-weight: 400;"><b>Office Bearers 2024</b></h2>
        <hr> <br>
        <div class="row justify-content-center">

            @foreach ($people as $p)
                <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-4">
                    <div class="profile-card text-center">
                        <img src="{{ $p['img'] }}" alt="Profile Image" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p['name'] }}</h5>
                            <p class="card-text">{{ $p['post'] }}</p>
                            <div class="social-icons d-flex justify-content-center">
                                <a href=""><i class="fab fa-github"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
