@extends('layouts.success')
@section('title','Success Checkout')

@section('content')
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{url('frontend/images/ic_mail.png')}}">
            <h1>Yey! Success</h1>
            <p>
                We've Sent you email for trip instruction
                <br>
                plase road it as well
            </p>
            <a href="{{url('/')}}" class="btn btn-home-page mt-5 px-5">Home Page</a>
        </div>
    </div>
</main>
@endsection