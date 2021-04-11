@extends('layout.app')

@section('body')
<div class="container"><!-- ======= Team Section ======= -->
    <section class="blogs">
        <div class="container" >
            <div class="section-title">
                <h2>{{ $blog->title }}</h2>
                    <img class="img-fluid" style="height: 300px" src="/storage/{{ $blog->image }}" alt="">
                {!! $blog->body !!}
            </div>
        </div>
    </section><!-- End Team Section -->
</div>
@endsection
