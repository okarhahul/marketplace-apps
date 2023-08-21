@extends('layouts.dashboard')

@section('title')
    Dashboard Account
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
            <h2>My Account</h2>
          </div>
          <div class="dashboard-subtitle">
            <p>Update your current profile</p>
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
                          <label for="">Your Email</label>
                          <input type="email" class="form-control" />
                        </div>
                        <div class="col-md-6">
                          <label for="">Address 1</label>
                          <input type="text" class="form-control" />
                        </div>
                        <div class="col-md-6">
                          <label for="">Address 2</label>
                          <input type="text" class="form-control" />
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="province">Province</label>
                            <select
                              name="province"
                              id="province"
                              class="form-control"
                            >
                              <option value="West Java">West Java</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="city">City</label>
                            <select
                              name="city"
                              id="city"
                              class="form-control"
                            >
                              <option value="Bekasi">Bekasi</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="postalCode">Postal Code</label>
                            <input
                              type="text"
                              class="form-control"
                              id="postalCode"
                              name="postalCode"
                              value="17525"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="country">Country</label>
                            <input
                              type="text"
                              class="form-control"
                              id="country"
                              name="country"
                              value="Indonesia"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="mobile">Mobile Phone</label>
                            <input
                              type="text"
                              class="form-control"
                              id="mobile"
                              name="mobile"
                              value="+62 812 8756 9023"
                            />
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