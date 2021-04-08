@extends('layout.app')

@section('body')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                     >
                    <h1>The best place to train in KTown.</h1>
                    <h2>We are a group of professional trainers ready to tailor your fitness training needs.</h2>\
                    <div class="d-lg-flex">
                        <a href="{{ route('register') }}" class="btn-get-started scrollto"> <strong>TRAIN</strong> WITH
                            US <i class="icofont-dumbbell"
                                  style=" font-size: 1.5em;"></i></a>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="" >
                    <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            Equipped with all the modern machines and professional trainers, GymJankari is the gym of
                            your choice. We provide all kind of fitness trainings in packages tailored to your schedule.
                        </p>
                        <p>
                            But be aware, its <b>GO HARD OR GO HOME</b> here all the time.
                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Here are our key features:
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> We provide you a trainer to monitor your trainings.
                            </li>
                            <li><i class="ri-check-double-line"></i> We custom tailor your diet according to your body
                                parameters.
                            </li>
                            <li><i class="ri-check-double-line"></i> With branches all over Kathmandu, you don't have to
                                worry about being too far away.
                            </li>
                        </ul>
                    </div>
                </div>
                {{--                <div class="container services">--}}
                {{--                    <div class="row">--}}
                {{--                        <div class="col-xl-4 col-md-4 d-flex align-items-stretch" data-aos="" >--}}
                {{--                            <div class="icon-box">--}}
                {{--                                <div class="icon"><i class="icofont-bullseye"></i></div>--}}
                {{--                                <h4><a href="">Mission</a></h4>--}}
                {{--                                <p>Our mission is to make every trainee fit in flexible schedule inexpensively.</p>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos=""--}}
                {{--                             >--}}
                {{--                            <div class="icon-box">--}}
                {{--                                <div class="icon"><i class="icofont-eye-alt"></i></div>--}}
                {{--                                <h4><a href="">Vision</a></h4>--}}
                {{--                                <p>Our vision is to develop a physically fit nation.</p>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4 mt-xl-0" data-aos=""--}}
                {{--                             >--}}
                {{--                            <div class="icon-box">--}}
                {{--                                <div class="icon"><i class="icofont-football-alt"></i></div>--}}
                {{--                                <h4><a href="">Goal</a></h4>--}}
                {{--                                <p>Our goal is to increase fitness consciousness in every individual.</p>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}

                {{--                    </div>--}}
                {{--                </div>--}}

            </div>
        </section><!-- End About Us Section -->


        <!-- ======= Packages Section ======= -->
        <section class="why-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 align-items-stretch order-2 order-lg-1 img"
                         style='background-image: url("assets/img/skills.png");' data-aos=""
                         >&nbsp;
                    </div>
                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-1 order-lg-2">
                        <div class="content">
                            <h3>FIND <strong>THE BEST TRAINING</strong> FOR YOU</h3>
                            <p>
                                We provide variations in the type of trainings we provide. The best training for you
                                might depend upon your fitness goal. Out of all the trainees currently associated with
                                us, they have choosen following packages the most.
                            </p>
                        </div>
                        <div class="d-lg-flex content skills">
                            <div class="skills-content container">
                                <div class="progress">
                                    <span class="skill">Cardio<i class="val">20%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="20"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="progress">
                                    <span class="skill">Gym <i class="val">40%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="progress">
                                    <span class="skill">Cardio + Gym <i class="val">10%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="10"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="progress">
                                    <span class="skill">Zumba<i class="val">30%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="30"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row content">
                            <a href="{{ route('packages') }}" class="custom-button"><i class="icofont-box"
                                                                                       style=" font-size: 1.5em;"></i>
                                BROWSE <strong>PACKAGES</strong></a>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Packages Section -->

        <!-- ======= Trainers Section ======= -->
        <section class="why-us section-bg">
            <div class="container">
                <div class="row">
                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                        <div class="content">
                            <h3>TRAIN WITH <strong>THE BEST</strong></h3>
                            <p>
                                Trainers who have built a name for themselves are proudly associated with GymJankari.
                                Dont forget to check who you train with.
                            </p>
                        </div>
                        <div class="d-lg-flex content">
                            <a href="{{ route('trainers') }}" class="custom-button"><i
                                    class="icofont-gym-alt-2" style=" font-size: 1.5em;"></i>
                                BROWSE <strong>TRAINERS</strong></a>
                        </div>
                    </div>
                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                         style='background-image: url("assets/img/trainers.svg");' data-aos=""
                         >&nbsp;
                    </div>
                </div>

            </div>
        </section><!-- End Trainers Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3 style="font-weight: 400;">START <strong>TRAINING</strong> TODAY</h3>
                        <p>This is the long awaited time to join a gym. Start training with us today by signing up.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="{{ route('register') }}">Sign Up</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->


        <!-- ======= Contact Section ======= -->
        <section class="why-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 align-items-stretch order-2 order-lg-1 img content"
                         data-aos=""
                         >
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.593534839098!2d85.3357853146197!3d27.698954982795332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199940d81663%3A0xaf36b9b58903050f!2sAPEX%20COLLEGE!5e0!3m2!1sne!2snp!4v1617267051794!5m2!1sne!2snp"
                            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>

                    </div>
                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-1 order-lg-2">
                        <div class="content">
                            <h3>KNOW <strong>WHERE</strong> YOU TRAIN</h3>
                            <p>
                                To start training you have to start at our Gym Location. You can also see more about contacting
                                us.
                            </p>
                        </div>
                        <div class="row content">
                            <a href="{{ route('contact') }}" class="custom-button"><i class="icofont-box"
                                                                                       style=" font-size: 1.5em;"></i>
                                <strong>CONTACT</strong> US</a>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </main><!-- End #main -->
@endsection
