@extends('layouts.master')

@section('content')
<section id="section" class="spacetop">
    <!--Section box starts Here -->
    <div class="section">
        <div class="error-box ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center">
                        <img src="assets/images/error-image.png" alt="" />
                        <h1>Sorry the page not found</h1>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc</span>
                        <a href="index.html" class="button home-link">back to home page</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="query ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10">
                        <h5>DO YOU STILL HAVE A QUESTION REGARING OUR SERVICES?</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat elementum tempor. Duis porta lectus ut dui consequat.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-2">
                        <a href="contact-us.html" class="contact-us button">contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Section box ends Here -->

</section>
    @endsection