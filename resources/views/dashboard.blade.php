@extends('layout.app')

@section('body')
    {{--<div class="container">--}}
    {{--    <div class="row justify-content-center">--}}
    {{--        <div class="col-md-3">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

    {{--                <div class="card-body">--}}
    {{--                    @if (session('status'))--}}
    {{--                        <div class="alert alert-success" role="alert">--}}
    {{--                            {{ session('status') }}--}}
    {{--                        </div>--}}
    {{--                    @endif--}}

    {{--                    {{ __('You are logged in!') }}--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <div class="container">
        <div class="section-title mb-3">
            <h2><strong>TRAINEE</strong> DASHBOARD</h2>
        </div>
        <div class="row" data-masonry='{"percentPosition": true }'>
            <div class="col-3 mb-4">
                <div class="card custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Name of Trainee</h5>
                        <p class="card-text">This is content of trainee.</p>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-9 mb-4">
                <div class="card custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Personal Information</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-3">
                                    <span><strong>Name: </strong></span>
                                </div>
                                <div class="col-9">
                                    <span>Ajeeb Rimal</span>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item"><div class="row">
                                <div class="col-3">
                                    <span><strong>Gender: </strong></span>
                                </div>
                                <div class="col-9">
                                    <span>Male</span>
                                </div>
                            </div></li>
                        <li class="list-group-item"><div class="row">
                                <div class="col-3">
                                    <span><strong>Address: </strong></span>
                                </div>
                                <div class="col-9">
                                    <span>Maitidevi</span>
                                </div>
                            </div></li>
                        <li class="list-group-item"><div class="row">
                                <div class="col-3">
                                    <span><strong>Contact No.: </strong></span>
                                </div>
                                <div class="col-9">
                                    <span>+9779845580590</span>
                                </div>
                            </div></li>
                        <li class="list-group-item"><div class="row">
                                <div class="col-3">
                                    <span><strong>Emergency Contact No.: </strong></span>
                                </div>
                                <div class="col-9">
                                    <span>+9779845404747</span>
                                </div>
                            </div></li>
                        <li class="list-group-item"><div class="row">
                                <div class="col-3">
                                    <span><strong>Health Condition: </strong></span>
                                </div>
                                <div class="col-9">
                                    <span>Cancer</span>
                                </div>
                            </div></li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Name of Trainee</h5>
                        <p class="card-text">This is content of trainee.</p>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

@endsection
