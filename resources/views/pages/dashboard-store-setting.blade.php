@extends('layouts.dashboard')

@section('title')
    Dashboard Trasactions Product
@endsection

@section('content')
    <div
      class="section-content section-dashboard-home"
      data-aos="fade-up"
    >
      <div class="container-fluid">
        <div class="dashboard-heading">
          <div class="dashboard-tittle">
            <h2>Store Settings</h2>
          </div>
          <div class="dashboard-subtitle">
            <p>Make store that profitable</p>
          </div>

          <!-- recent transaction -->
          <div class="dashboard-content">
            <div class="row">
              <div class="col-12">
                <form action="">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <label for="">Store Name</label>
                          <input type="text" class="form-control" />
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Category</label>
                            <select
                              name="category"
                              id=""
                              class="form-control"
                            >
                              <option value="">Category A</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Store status</label>
                            <p class="text-muted">
                              Apakah saat ini toko Anda buka?
                            </p>
                            <div
                              class="custom-control custom-radio custom-control-inline"
                            >
                              <input
                                type="radio"
                                class="custom-control-input"
                                name="is_store_open"
                                id="openStoreTrue"
                                value="true"
                              />
                              <label
                                for="openStoreTrue"
                                class="custom-control-label"
                                >Buka</label
                              >
                            </div>
                            <div
                              class="custom-control custom-radio custom-control-inline"
                            >
                              <input
                                type="radio"
                                class="custom-control-input"
                                name="is_store_open"
                                id="openStoreFalse"
                                value="false"
                              />
                              <label
                                for="openStoreFalse"
                                class="custom-control-label"
                                >Tutup Sementara
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col text-right">
                          <button
                            type="submit"
                            class="btn btn-success px-5"
                          >
                            Save Now
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection


