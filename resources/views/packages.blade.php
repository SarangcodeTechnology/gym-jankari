@extends('layout.app')

@section('body')
    <!-- ======= Pricing Section ======= -->
    <div class="container">
        <section id="pricing" class="pricing">
            <div class="container" >

                <div class="section-title">
                    <h2>Packages</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    @foreach ($packages as $item)
                    <div class="col-lg-4"  data-aos-delay="{{ $loop->iteration*100 }}">
                        <div class="box">
                            <h3>{{ $item->title }}</h3>
                            <h4><sup>Rs</sup>{{ $item->one_month_price }}<span>per month</span></h4>
                            {!! $item->description !!}
                            <a href="#" class="buy-btn">Get Started</a>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="col-lg-4 mt-4 mt-lg-0"  data-aos-delay="200">
                        <div class="box featured">
                            <h3>Business Plan</h3>
                            <h4><sup>$</sup>29<span>per month</span></h4>
                            <ul>
                                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                            <a href="#" class="buy-btn">Get Started</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0"  data-aos-delay="300">
                        <div class="box">
                            <h3>Developer Plan</h3>
                            <h4><sup>$</sup>49<span>per month</span></h4>
                            <ul>
                                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                            <a href="#" class="buy-btn">Get Started</a>
                        </div>
                    </div> --}}

                </div>

            </div>
        </section><!-- End Pricing Section -->
    </div>
@endsection
