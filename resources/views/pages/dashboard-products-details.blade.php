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
                  <h2>Shirup Marzan</h2>
                </div>
                <div class="dashboard-subtitle">
                  <p>Product Detailst</p>
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
                                <label for="">Product Name</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  value="Papel La Casa"
                                />
                              </div>
                              <div class="col-md-6">
                                <label for="">Price</label>
                                <input
                                  type="number"
                                  class="form-control"
                                  value="100.00"
                                />
                              </div>
                              <div class="col-md-12">
                                <div class="form-group mt-2">
                                  <label for="">Category</label>
                                  <select name="category" class="form-control">
                                    <option value="">Category A</option>
                                    <option value="Shipping">Shipping</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <label for="">Description</label>
                                <textarea id="editor">
                                The Nike Air Max 720 SE goes bigger than ever before with Nike's tallest Air unit yet for unimaginable, all-day comfort. There's super breathable fabrics on the upper, while colours add a modern edge. Bring the past into the future with the Nike Air Max 2090, a bold look inspired by the DNA of the iconic Air Max 90. Brand-new Nike Air cushioning</textarea
                                >
                              </div>
                            </div>
                            <div class="row mt-3">
                              <div class="col text-right">
                                <button
                                  type="submit"
                                  class="btn btn-success px-5 btn-block"
                                >
                                  Update Product
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="gallery-container">
                                <img
                                  src="/images/product-card-1.png"
                                  alt=""
                                  class="w-100"
                                />
                                <a href="" class="delete-gallery">
                                  <img src="/images/icon-delete.svg" alt="" />
                                </a>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="gallery-container">
                                <img
                                  src="/images/product-card-2.png"
                                  alt=""
                                  class="w-100"
                                />
                                <a href="" class="delete-gallery">
                                  <img src="/images/icon-delete.svg" alt="" />
                                </a>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="gallery-container">
                                <img
                                  src="/images/product-card-3.png"
                                  alt=""
                                  class="w-100"
                                />
                                <a href="" class="delete-gallery">
                                  <img src="/images/icon-delete.svg" alt="" />
                                </a>
                              </div>
                            </div>
                            <div class="col-12 mt-3">
                              <input
                                type="file"
                                id="file"
                                style="display: none"
                                multiple
                              />
                              <button
                                class="btn btn-secondary btn-block"
                                onclick="thisFileUpload()"
                              >
                                Add Photo
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
    <script>
      ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
        console.error(error);
      });
    </script>
    <script>
      function thisFileUpload() {
        document.getElementById("file").click();
      }
    </script>
@endpush