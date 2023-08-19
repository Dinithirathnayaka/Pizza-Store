@extends('layouts.user')

@section('content')

<section class="account" style="">
    <div class="midcontainer">
        <div class="accountLeft row">
            <div class="col-md-6 col-xs-12 accountdetails">
                <h3>Account Details</h3>
                <div class="row">
                    <div class="col-3">First Name :</div>
                    <div class="col-3">Dinithi</div>
                </div>
                <div class="row">
                    <div class="col-3">Last Name :</div>
                    <div class="col-3">Rathnayake</div>
                </div>
                <div class="row">
                    <div class="col-3">Email Address :</div>
                    <div class="col-3">dini@gmail.com</div>
                </div>
                <div class="row">
                    <div class="col-3">Mobile Number :</div>
                    <div class="col-3">0570000000</div>
                </div>


            </div>
            <div class="col-md-6 col-xs-12 userorderhistory">


            </div>

        </div>
        <div class="accountRight">

        </div>

    </div>


</section>


    </section>
@endsection

@section('styles')
    <link href="{{ asset('css/account.css') }}" rel="stylesheet">
@endsection

