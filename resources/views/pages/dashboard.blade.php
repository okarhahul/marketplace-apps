@extends('layouts.dashboard')

@section('title')
    Dashboard
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
                  <p>Look what you have made today!</p>
                </div>
                <div class="dashboard-content">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card mb-2">
                        <div class="card-body">
                          <div class="dashboard-card-title">Dashboard</div>
                          <div class="dashboard-card-subtitle">15,209</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card mb-2">
                        <div class="card-body">
                          <div class="dashboard-card-title">Revenue</div>
                          <div class="dashboard-card-subtitle">$931,290</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card mb-2">
                        <div class="card-body">
                          <div class="dashboard-card-title">Transaction</div>
                          <div class="dashboard-card-subtitle">22,409,399</div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- recent transaction -->
                  <div class="row mt-3">
                    <div class="col-12 mb-2">
                      <h5 class="mb-3">Recent Transaction</h5>
                      <a
                        href="/dashboard-transaction-details"
                        class="card card-list d-block"
                      >
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-1">
                              <img
                                src="/images/dashboard-icon-product-1.png"
                                alt=""
                              />
                            </div>
                            <div class="col-md-4">Sirrup Marzzan</div>
                            <div class="col-md-3">Lutpi Daffa</div>
                            <div class="col-md-3">12 Januari, 2020</div>
                            <div class="col-md-1">
                              <img
                                src="/images/dashboard-arrow-right.svg"
                                alt=""
                              />
                            </div>
                          </div>
                        </div>
                      </a>
                      <a
                        href="/dashboard-transaction-details"
                        class="card card-list d-block"
                      >
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-1">
                              <img
                                src="/images/dashboard-icon-product-2.png"
                                alt=""
                              />
                            </div>
                            <div class="col-md-4">LeBrone X</div>
                            <div class="col-md-3">Ilham Buono</div>
                            <div class="col-md-3">01 Agustus, 2023</div>
                            <div class="col-md-1">
                              <img
                                src="/images/dashboard-arrow-right.svg"
                                alt=""
                              />
                            </div>
                          </div>
                        </div>
                      </a>
                      <a
                        href="/dashboard-transaction-details"
                        class="card card-list d-block"
                      >
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-1">
                              <img
                                src="/images/dashboard-icon-product-3.png"
                                alt=""
                              />
                            </div>
                            <div class="col-md-4">Soffa Lembutte</div>
                            <div class="col-md-3">Jasman Mosa</div>
                            <div class="col-md-3">02 Agustus, 2023</div>
                            <div class="col-md-1">
                              <img
                                src="/images/dashboard-arrow-right.svg"
                                alt=""
                              />
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection