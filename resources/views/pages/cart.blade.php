@extends('layouts.app')

@section('title')
    Cart Page
@endsection

@section('content')
    <div class="page-content page-cart">
      <!-- Breadcrumb -->
      <section
        class="store-breadcrumb"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="breadcrumb">
                <div class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </div>
                <div class="breadcrumb-item">
                  <a href="details.html">Page Details</a>
                </div>
                <div class="breadcrumb-item active">Cart</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Breadcrumb -->

      <!-- Detail Cart -->
      <section class="store-cart">
        <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 table-responsive">
              <table class="table table-borderless table-cart">
                <thead>
                  <tr>
                    <td>Image</td>
                    <td>Detail Product</td>
                    <td>Price</td>
                    <td>Menu</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width: 20%">
                      <img
                        src="/images/product-cart-1.jpg"
                        alt=""
                        class="cart-image"
                      />
                    </td>
                    <td style="width: 30%">
                      <div class="product-title">Sofa Ternyaman</div>
                      <div class="product-subtitle">By Sofaku</div>
                    </td>
                    <td style="width: 30%">
                      <div class="product-title">$1,409</div>
                      <div class="product-subtitle">USD</div>
                    </td>
                    <td style="width: 20%">
                      <a href="#" class="btn btn-remove-cart">Remove</a>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 20%">
                      <img
                        src="/images/product-cart-2.jpg"
                        alt=""
                        class="cart-image"
                      />
                    </td>
                    <td style="width: 30%">
                      <div class="product-title">Sneakers</div>
                      <div class="product-subtitle">By Sneakers Original</div>
                    </td>
                    <td style="width: 30%">
                      <div class="product-price">$800</div>
                      <div class="product-qyt">USD</div>
                    </td>
                    <td style="width: 20%">
                      <a href="#" class="btn btn-remove-cart">Remove</a>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 20%">
                      <img
                        src="/images/product-cart-3.jpg"
                        alt=""
                        class="cart-image"
                      />
                    </td>
                    <td style="width: 30%">
                      <div class="product-title">Tatakan Gelas</div>
                      <div class="product-subtitle">By Furniture</div>
                    </td>
                    <td style="width: 30%">
                      <div class="product-price">$10</div>
                      <div class="product-qyt">USD</div>
                    </td>
                    <td style="width: 20%">
                      <a href="#" class="btn btn-remove-cart">Remove</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2 class="mb-4">Shiping Details</h2>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressOne">Address One</label>
                <input
                  type="text"
                  class="form-control"
                  id="addressOne"
                  name="addressOne"
                  value="Perumahan Setu"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressTwo">Address Two</label>
                <input
                  type="text"
                  class="form-control"
                  id="addressTwo"
                  name="addressTwo"
                  value="Lubang Buaya"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="province">Province</label>
                <select name="province" id="province" class="form-control">
                  <option value="West Java">West Java</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="city">City</label>
                <select name="city" id="city" class="form-control">
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
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2 class="mb-1">Payment Informations</h2>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-4 col-md-2">
              <div class="product-title">$10</div>
              <div class="product-subtitle">Country Tax</div>
            </div>
            <div class="col-4 col-md-3">
              <div class="product-title">$280</div>
              <div class="product-subtitle">Product Insurance</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title">$580</div>
              <div class="product-subtitle">Ship to Jakarta</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title text-success">$392,409</div>
              <div class="product-subtitle">Total</div>
            </div>
            <div class="col-8 col-md-3">
              <a href="success.html" class="btn btn-success mt-4 px-4 btn-block"
                >Checkout Now
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Detail Card -->
    </div>
@endsection