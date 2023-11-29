@extends('user_template.layouts.template')
@section('main-content')
<div class="container" style="margin-bottom: 170px"></div>
    <div class="container" id="addtocart">
        <div class="row">
            <div class="col-12">
                <div class="box_main">
                    <form action="{{ route('addshippingaddress') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" name="phone_number" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="complete_address">Complete Address</label>
                            <input type="text" class="form-control" name="complete_address" placeholder="Complete Address">
                        </div>
                        <div class="form-group">
                            <label for="postal_code">Postal Code</label>
                            <input type="text" class="form-control" name="postal_code" placeholder="Postal Code">
                        </div>
                        <div class="main-border-button"><input type="submit" value="Next" class="btn btn-dark"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
