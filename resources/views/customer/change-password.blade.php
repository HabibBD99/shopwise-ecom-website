@extends('website.master')
@section('title')
    My Dashboard
@endsection

@section('body')
    <!-- breadcrumb area start -->
    <section class="breadcrumb__area include-bg text-center pt-95 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">Dashboard</h3>
                        <div class="breadcrumb__list">
                            <span><a href="#">Home</a></span>
                            <span>Dashboard</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- login area start -->
    <section class="tp-login-area pb-140 p-relative z-index-1 fix">
        <div class="tp-login-shape">
            <img class="tp-login-shape-1" src="{{asset('/')}}website/assets/img/login/login-shape-1.png" alt="">
            <img class="tp-login-shape-2" src="{{asset('/')}}website/assets/img/login/login-shape-2.png" alt="">
            <img class="tp-login-shape-3" src="{{asset('/')}}website/assets/img/login/login-shape-3.png" alt="">
            <img class="tp-login-shape-4" src="{{asset('/')}}website/assets/img/login/login-shape-4.png" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    @include('customer.includes.sidebar-menu')
                </div>
                <div class="col-md-9">
                    <div class="card card-body">

                        <h3>Change Password Form</h3>
                        <p>{{session('message')}}</p>
                        <form action="{{route('customer.update-password')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Previous Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="previous_password"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Current Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="current_password"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Update Password"/>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login area end -->
@endsection