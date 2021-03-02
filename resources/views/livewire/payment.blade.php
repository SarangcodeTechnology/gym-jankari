<div>
    <div class="container">
        <div class="section-title mb-3">
            <h2><strong>Payment</strong></h2>
        </div>
        <div class="row" data-masonry='{"percentPosition": true }'>
            <div class="col-12 mb-4">
                <div class="card custom-card">

                    <div class="card-body" style="display: flex;
                    align-items: center;
                    justify-content: space-between;">
                        <h5 class="card-title">Payment Information</h5>
                    </div>
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><div class="row">
                                <div class="col-3">
                                    <span><strong>Select Package: </strong></span>
                                </div>
                                <div class="col-9">
                                    <select class="form-control" wire:model="package">
                                            <option value="-1" selected="selected">Select</option>
                                        @foreach ($packages as $item)
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </li>
                        @if($package!=-1)
                        <li class="list-group-item"><div class="row">
                                <div class="col-3">
                                    <span><strong>Duration: </strong></span>
                                </div>
                                <div class="col-9">
                                    <select class="form-control" wire:model="duration">
                                        <option value="one_month">1 Month</option>
                                        <option value="three_month">3 Months</option>
                                        <option value="six_month">6 Months</option>
                                        <option value="one_year">1 Year</option>
                                    </select>
                                </div>
                            </div>
                        </li>
                        @endif
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-3">
                                    <span><strong>Your Price: </strong></span>
                                </div>
                                <div class="col-9">
                                    <span>Rs. {{ $price }}</span>
                                </div>
                            </div>
                        </li>
                        <button wire:click="submit" class="btn btn-success mt-2">Pay</button>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
