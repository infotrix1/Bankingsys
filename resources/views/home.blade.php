@extends('layouts.app')
@section('content')
        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="row align-items-center mb-30 justify-content-between">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Dashboard</h6>
                </div>
             <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
             <div class="float-right">
            <a href="{{ route('wallet') }}" class="btn  btn--success ">
            <i class="fa fa-keys"></i>Topup Wallet</a>
        </div>
        </div>
</div>

@if ($data->role == 1)
    <div class="row mb-none-30">
        <div class="col-xl-3 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--primary b-radius--10 box-shadow">
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">2470</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">Total Users</span>
                    </div>
                    <a href="#s" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">View All</a>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
        <div class="col-xl-3 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--cyan b-radius--10 box-shadow">
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">2470</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">Total Verified Users</span>
                    </div>
                    <a href="#" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">View All</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--orange b-radius--10 box-shadow ">
                <div class="icon">
                    <i class="la la-envelope"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">0</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">Total Email Unverified Users</span>
                    </div>

                    <a href="#" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">View All</a>
                </div>
            </div>
        </div><!-- dashboard-w1 end -->
        <div class="col-xl-3 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--pink b-radius--10 box-shadow ">
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">0</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">Total SMS Unverified Users</span>
                    </div>

                    <a href="#" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">View All</a>
                </div>
            </div>
            @endif
            <div class="float-right" style="width: 180px; height: 180px;" >
                    <div class="widget-three box--shadow2 b-radius--5 bg--success text-white" style="padding: 15px;">
                        <div class="widget-three__content">
                            <h2>{{ $data->wallent_amount}}</h2>
                            <p class="text--small">Total Deposit</p>
                        </div>
                    </div>
                </div>
        </div><!-- dashboard-w1 end -->


    </div><!-- row end-->



    </div>

            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>
    @endsection
