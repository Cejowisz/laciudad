@extends('pages.layout.master')

@section('content')
    @include('pages.partials._slider')
    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col s8 offset-s2 m6 offset-m3">
                    <div class="intro-inner center-align">
                        <h4>Welcome, let's walk you through</h4>
                        <p>Laciudad helps you connect with qualified tutors in your area to
                            master the subjects, skills and exams that matter to you.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feat">
        <div class="container">
            <div class="row">
                <div class="col s12 m4">
                    <div class="feat-inner">
                        <div class="row">
                            <div class="col s4 offset-s4">
                                <i class="material-icons center-align">local_florist</i>
                            </div>
                        </div>
                        <h5>Trusted Professional</h5>
                        <p>Laciudad helps you connect with qualified tutors in your area to
                            master the subjects, skills and exams that matter to you.
                        </p>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="feat-inner">
                        <div class="row">
                            <div class="col s4 offset-s4">
                                <i class="material-icons center-align">local_library</i>
                            </div>
                        </div>
                        <h5>Trusted Professional</h5>
                        <p>Laciudad helps you connect with qualified tutors in your area to
                            master the subjects, skills and exams that matter to you.
                        </p>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="feat-inner">
                        <div class="row">
                            <div class="col s4 offset-s4">
                                <i class="material-icons center-align">local_taxi</i>
                            </div>
                        </div>
                        <h5>Trusted Professional</h5>
                        <p>Laciudad helps you connect with qualified tutors in your area to
                            master the subjects, skills and exams that matter to you.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cta">
        <div class="container">
            <div class="row">
                <div class="col m5 cta-left">
                    <h4 class="cta-heading">
                        Need home tutors for your kids?
                    </h4>
                    <div class="top-cta">
                        <h5>Put your kids ahead early</h5>
                        <p>
                            Improve performance in class, get help with homework, build confidence in weak areas, be
                            proud of your kids' results.
                        </p>
                    </div>
                    <div class="down-cta">
                        <h5>Put your kids ahead early</h5>
                        <p>
                            Improve performance in class, get help with homework, build confidence in weak areas, be
                            proud of your kids' results.
                        </p>
                    </div>
                    <a href="#" class="snip1535">Get a Trainer Near You</a>
                </div>
                <div class="col m7 cta-right" style="padding-left: 0;">
                    {{--<img src="img/hometutor.jpg" class="responsive-img" alt="Laciudad image"/>--}}
                </div>
            </div>
        </div>
    </div>
    <div class="experts">
        <div class="container">
            <h4 class="experts-heading center-align">
                Be trained by an Expert near you
            </h4>
            <p class="center-align">Look no further for a professional trainer</p>
            <div class="row expert-row">
                <div class="col m3">
                    <div class="card laci-card">
                        <img src="img/1.JPG" class="responsive-img" alt="Laciudad Image"/>
                        <p>Hair Stylists</p>
                    </div>
                </div>
                <div class="col m3">
                    <div class="card laci-card">
                        <img src="img/2.JPG" class="responsive-img" alt="Laciudad Image"/>
                        <p>Instrumentalist</p>
                    </div>
                </div>
                <div class="col m3">
                    <div class="card laci-card">
                        <img src="img/3.JPG" class="responsive-img" alt="Laciudad Image"/>
                        <p>Teacher</p>
                    </div>
                </div>
                <div class="col m3">
                    <div class="card laci-card">
                        <img src="img/4.JPG" class="responsive-img" alt="Laciudad Image"/>
                        <p>Bead Making</p>
                    </div>
                </div>
            </div>
            <div class="row expert-row">
                <div class="col m3">
                    <div class="card laci-card">
                        <img src="img/1.JPG" class="responsive-img" alt="Laciudad Image"/>
                        <p>Hair Stylists</p>
                    </div>
                </div>
                <div class="col m3">
                    <div class="card laci-card">
                        <img src="img/2.JPG" class="responsive-img" alt="Laciudad Image"/>
                        <p>Instrumentalist</p>
                    </div>
                </div>
                <div class="col m3">
                    <div class="card laci-card">
                        <img src="img/3.JPG" class="responsive-img" alt="Laciudad Image"/>
                        <p>Teacher</p>
                    </div>
                </div>
                <div class="col m3">
                    <div class="card laci-card">
                        <img src="img/4.JPG" class="responsive-img" alt="Laciudad Image"/>
                        <p>Bead Making</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="trusted">
        <img src="img/trusted.JPG" class="responsive-img" alt="Lacuidad Image"/>
    </div>
    <div class="testimonial">
        <div class="container">
            <h4 class="center-align">
                What are our Trainers are saying
            </h4>
            <div class="row">
                <div class="col m6">
                    <div class="row">
                        <div class="col m2">
                            <div class="row">
                                <div class="col s10 offset-s1">
                                    <img src="img/pix1.jpg" class="responsive-img" alt="Lacuidad Image"/>
                                </div>
                            </div>
                        </div>
                        <div class="col m10">
                            <div class="card">
                                <p>
                                    I was searching for a Maths teacher for my son to prepare for his NECO exams in three weeks, and
                                    hired one from Lacuidad. He was really good, he took the time to explain any topic perfectly.
                                    Today my son has passed his exams and gained admission into Federal Science and Technology
                                    College. I am happy about my son's performance and the service rendered.
                                </p>
                                <p class="pri-color">Mercy Ben</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m6">
                    <div class="row">
                        <div class="col m2">
                            <div class="row">
                                <div class="col s10 offset-s1">
                                    <img src="img/pix1.jpg" class="responsive-img" alt="Lacuidad Image"/>
                                </div>
                            </div>
                        </div>
                        <div class="col m10">
                            <div class="card">
                                <p>
                                    I was searching for a Maths teacher for my son to prepare for his NECO exams in three weeks, and
                                    hired one from Lacuidad. He was really good, he took the time to explain any topic perfectly.
                                    Today my son has passed his exams and gained admission into Federal Science and Technology
                                    College. I am happy about my son's performance and the service rendered.
                                </p>
                                <p class="pri-color">Moyo Peace</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.partials._cta')
@endsection


@section('scripts')
    {{-- @include('pages.partials._slider_script')--}}

    <script>
        $(document).ready(function(){
            $('.slider').slider({
                indicators: false
            });
        });
    </script>

@endsection
