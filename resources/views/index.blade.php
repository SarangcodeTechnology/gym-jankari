@extends('layout.app')

@section('body')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-7 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                     data-aos="fade-up" data-aos-delay="200">
                    <h1>The best training in KTown.</h1>
                    <h2>We are a group of professional trainers ready to tailor your training needs.</h2>\
                    <div class="d-lg-flex">
                        <a href="{{ route('register') }}" class="btn-get-started scrollto"><i class="icofont-gym-alt-2"
                                                                                              style=" font-size: 1.5em;"></i>
                            TRAIN WITH US</a>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
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
                {{--                <div class="container services" data-aos="fade-up">--}}
                {{--                    <div class="row">--}}
                {{--                        <div class="col-xl-4 col-md-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">--}}
                {{--                            <div class="icon-box">--}}
                {{--                                <div class="icon"><i class="icofont-bullseye"></i></div>--}}
                {{--                                <h4><a href="">Mission</a></h4>--}}
                {{--                                <p>Our mission is to make every trainee fit in flexible schedule inexpensively.</p>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"--}}
                {{--                             data-aos-delay="200">--}}
                {{--                            <div class="icon-box">--}}
                {{--                                <div class="icon"><i class="icofont-eye-alt"></i></div>--}}
                {{--                                <h4><a href="">Vision</a></h4>--}}
                {{--                                <p>Our vision is to develop a physically fit nation.</p>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"--}}
                {{--                             data-aos-delay="300">--}}
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

        <!-- ======= Schedules Section ======= -->
        <section class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3>TIME TO <strong>TRAIN</strong></h3>
                            <p>
                                The best way to train is to train in schedule. So that you dont ever remain behind on
                                training schedule, we have developed some training schedules you can choose.
                            </p>
                        </div>
                        <div class="d-lg-flex content">
                            <a href="{{ route('schedules') }}" class="custom-button"><i
                                    class="icofont-clock-time"></i>
                                BROWSE SCHEDULES</a>
                        </div>
                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                         style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in"
                         data-aos-delay="150">&nbsp;
                    </div>
                </div>

            </div>
        </section><!-- End Schedules Section -->
        <!-- ======= Skills Section ======= -->

        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/skills.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
                        <p class="font-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>

                        <div class="skills-content">

                            <div class="progress">
                                <span class="skill">HTML <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">CSS <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">JavaScript <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Photoshop <i class="val">55%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Skills Section -->
        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3>Call To Action</h3>
                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->





        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse"
                                                                           href="#faq-list-1">Non consectetur a erat nam
                                at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet
                                    non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor
                                    purus non.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2"
                                                                           class="collapsed">Feugiat scelerisque varius
                                morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                    velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                    donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                    cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3"
                                                                           class="collapsed">Dolor sit amet consectetur
                                adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                    pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                                    Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis
                                    tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4"
                                                                           class="collapsed">Tempus quam pellentesque
                                nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in
                                    est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                    suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="500">
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5"
                                                                           class="collapsed">Tortor vitae purus faucibus
                                ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                    class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                    integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                    eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->
    </main><!-- End #main -->
@endsection
