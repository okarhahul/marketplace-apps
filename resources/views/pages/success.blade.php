@extends('layouts.success')

@section('title')
    Market Homepage
@endsection

@section('content')
{{-- Page Content --}}
    <div class="page-content page-success">
      <div class="section-success" data-aos="zoom-in">
        <div class="container">
          <div class="row align-items-center justify-content-center row-login">
            <div class="col-lg-6 text-center">
              <img src="images/success.svg" alt="" />
              <h2>Transaction Processed!</h2>
              <p>
                Silahkan tunggu konfirmasi email dari kami dan kami akan
                menginformasikan resi secept mungkin!
              </p>
              <a href="dashboard.html" class="btn btn-success w-50 mt-3"
                >My Dashboard</a
              >
              <a href="index.html" class="btn btn-singup w-50 mt-2"
                >Go to Shooping</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection