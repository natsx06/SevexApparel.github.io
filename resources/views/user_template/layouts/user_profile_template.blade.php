@extends('user_template.layouts.template')
@section('main-content')
<div class="container" style="margin: 150px"></div>
    <div class="container" id="addtocart">
        <div class="row">
            <div class="col-lg-2">
                <div class="box_main">
                    <ul>
                        <li><a href="{{ route('userprofile') }}">Dashboard</a></li>
                        <li><a href="{{ route('orders') }}">Orders</a></li>
                        <li><a href="{{ route('history') }}">History</a></li>
                        <li><a href="">Logout</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-10">
                <div class="box_main">
                        <div class="hover-content">
                            @yield('profilecontent')
                    </div>
                </div>
            </div>
        </div>
    @endsection
