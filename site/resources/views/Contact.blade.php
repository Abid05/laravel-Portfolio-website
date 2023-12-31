
@extends('layouts.app')

@section('title','Contact')
@section('content')

<div class="container-fluid jumbotron mt-5 ">

    <div class="row d-flex justify-content-center">
        <div class="col-md-6  text-center">
            <img class=" page-top-img fadeIn" src="images/code.svg">
            <h1 class="page-top-title mt-3">- Contact Us -</h1>
        </div>
    </div>

</div>

<div id="contact" class="container-fluid parallax text-center">
    <div class="row ">
        <div class="col-md-6 contact-form ">
            <h5 class="help-line-title"><i class="fas icon-custom-color fa-headphones-alt"></i> হেলপ লাইন </h5>
            <h5 class="help-line-title m-0">  ০১৭৭৪৬৮৮১৫৯ </h5>
        </div>
        <div class="col-md-4 contact-form">

                <h5 class="service-card-title">যোগাযোগ করুন </h5>

                <div class="form-group ">
                    <input id="contactNameId" type="text" class="form-control w-100" placeholder="আপনার নাম">
                </div>
                <div class="form-group">
                    <input id="contactMobileId"  type="text" class="form-control  w-100" placeholder="মোবাইল নং ">
                </div>
                <div class="form-group">
                    <input id="contactEmailId"  type="text" class="form-control  w-100" placeholder="ইমেইল ">
                </div>
                <div class="form-group">
                    <input id="contactMgzId"  type="text" class="form-control  w-100" placeholder="মেসেজ ">
                </div>
                <button id="contactSendBtnId"  type="submit" class="btn btn-block normal-btn w-100">পাঠিয়ে দিন</button>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</div>

@endsection