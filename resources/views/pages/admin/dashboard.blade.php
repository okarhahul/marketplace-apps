@extends('layouts.dashboard-admin')

@section('title')
    Dashboard Admin
@endsection

@section('content')
    <div
      class="section-content section-dashboard-home"
      data-aos="fade-up"
    >
      <div class="container-fluid">
        <div class="dashboard-heading">
          <div class="dashboard-tittle">
            <h2>Dashboard</h2>
          </div>
          <div class="dashboard-subtitle">
            <p>This Admin Page</p>
          </div>
          <div class="dashboard-content">
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-2">
                  <div class="card-body">
                    <div class="dashboard-card-title">Customers</div>
                    <div class="dashboard-card-subtitle">{{ $customers }}</div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-2">
                  <div class="card-body">
                    <div class="dashboard-card-title">Revenue</div>
                    <div class="dashboard-card-subtitle">$ {{  $revenue }}</div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-2">
                  <div class="card-body">
                    <div class="dashboard-card-title">Transaction</div>
                    <div class="dashboard-card-subtitle">{{ $transaction }}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection