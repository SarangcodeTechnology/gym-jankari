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
    @php
      $user = Auth::user();  
    @endphp
    <div class="container">
        <div class="section-title mb-3">
            <h2><strong>TRAINEE</strong> DASHBOARD</h2>
        </div>
        <div class="row" data-masonry='{"percentPosition": true }'>
            <div class="col-3 mb-4">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="basic-details">
                            <h5 class="card-title">{{ $user->name }}</h5>
                            <p class="card-text">{{ $user->gender }}</p>
                            <p class="card-text">DOB: {{ $user->dob }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-9 mb-4">
                <div class="card custom-card">

                    <form action="/updateUser" method="post">
                    <div class="card-body" style="display: flex;
                    align-items: center;
                    justify-content: space-between;">
                        <h5 class="card-title">Contact Information</h5>
                        @if(!request('edit'))
                        <a href="?edit=1" class="btn btn-primary">Edit</a>
                        @else
                        <div>
                            <button class="btn btn-primary" onclick="window.history.back();">Back</button>
                            <button class="btn btn-success" type="submit">Save</button>
                        </div>
                        @endif
                    </div>
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><div class="row">
                                <div class="col-3">
                                    <span><strong>Address: </strong></span>
                                </div>
                                <div class="col-9">
                                    @if(request('edit'))
                                    <span><input type="text" class="form-control" name="address" value="{{ $user->address }}" id=""></span>
                                    @else
                                    <span>{{ $user->address }}</span>
                                    @endif
                                </div>
                            </div></li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-3">
                                    <span><strong>Contact No.: </strong></span>
                                </div>
                                <div class="col-9">
                                    @if(request('edit'))
                                    <span><input type="text" class="form-control" name="contact" value="{{ $user->contact }}" id=""></span>
                                    @else
                                    <span>{{ $user->contact }}</span>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-3">
                                    <span><strong>E-mail: </strong></span>
                                </div>
                                <div class="col-9">
                                    @if(request('edit'))
                                    <span><input type="text" class="form-control" name="email" value="{{ $user->email }}" id=""></span>
                                    @else
                                    <span>{{ $user->email }}</span>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item"><div class="row">
                                <div class="col-3">
                                    <span><strong>Emergency Contact No.: </strong></span>
                                </div>
                                <div class="col-9">
                                    @if(request('edit'))
                                    <span><input type="text" class="form-control" name="emergency_contact" value="{{ $user->emergency_contact }}" id=""></span>
                                    @else
                                    <span>{{ $user->emergency_contact }}</span>
                                    @endif
                                </div>
                            </div></li>
                        <li class="list-group-item"><div class="row">
                                <div class="col-3">
                                    <span><strong>Health Condition: </strong></span>
                                </div>
                                <div class="col-9">
                                    @if(request('edit'))
                                    <span><input type="text" class="form-control" name="health_condition" value="{{ $user->health_condition }}" id=""></span>
                                    @else
                                    <span>{{ $user->health_condition }}</span>
                                    @endif
                                </div>
                            </div></li>
                    </ul>
                    </form>
                </div>
            </div>

            <div class="col-3 mb-4">
                <div class="card custom-card">
                    <div class="card-body">
                        <p class="card-text">{{ $user->package->title }}</p>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn-success">Make Payment</a>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Payment Information</h5>
                        <table id="paymentTable" class="table table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Package</th>
                                    <th>Date</th>
                                    <th>Payment Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Package 1</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

@endsection
