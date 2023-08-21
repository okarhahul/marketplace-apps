@extends('layouts.dashboard')

@section('title')
    Dashboard
@endsection

@section('content')
          <!-- section menu -->
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <div class="dashboard-tittle">
                  <h2>My Product</h2>
                </div>
                <div class="dashboard-subtitle">
                  <p>Manage it well and get money</p>
                </div>
                <div class="dashboard-content">
                  <div class="row">
                    <div class="col-12">
                      <a
                        href="dashboard-products-create.html"
                        class="btn btn-success"
                        >Add New Product</a
                      >
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2">
                      <a
                        href="dashboard-products-details"
                        class="card card-dashboard-products d-block"
                      >
                        <div class="card-body">
                          <img
                            src="/images/product-card-1.png"
                            alt=""
                            class="w-100 mb-2"
                          />
                          <div class="card-title">Shirup Marzzan</div>
                          <div class="card-subtitle">Foods</div>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2">
                      <a
                        href="dashboard-products-details"
                        class="card card-dashboard-products d-block"
                      >
                        <div class="card-body">
                          <img
                            src="/images/product-card-2.png"
                            alt=""
                            class="w-100 mb-2"
                          />
                          <div class="card-title">Shirup Marzzan</div>
                          <div class="card-subtitle">Foods</div>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2">
                      <a
                        href="dashboard-products-details"
                        class="card card-dashboard-products d-block"
                      >
                        <div class="card-body">
                          <img
                            src="/images/product-card-3.png"
                            alt=""
                            class="w-100 mb-2"
                          />
                          <div class="card-title">Shirup Marzzan</div>
                          <div class="card-subtitle">Foods</div>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2">
                      <a
                        href="dashboard-products-details"
                        class="card card-dashboard-products d-block"
                      >
                        <div class="card-body">
                          <img
                            src="/images/product-card-4.png"
                            alt=""
                            class="w-100 mb-2"
                          />
                          <div class="card-title">Shirup Marzzan</div>
                          <div class="card-subtitle">Foods</div>
                        </div>
                      </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2">
                      <a
                        href="dashboard-products-details"
                        class="card card-dashboard-products d-block"
                      >
                        <div class="card-body">
                          <img
                            src="/images/product-card-5.png"
                            alt=""
                            class="w-100 mb-2"
                          />
                          <div class="card-title">Shirup Marzzan</div>
                          <div class="card-subtitle">Foods</div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection