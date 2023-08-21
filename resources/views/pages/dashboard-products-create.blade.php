@extends('layouts.dashboard')

@section('title')
    Dashboard Create Product
@endsection

@section('content')
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <div class="dashboard-tittle">
                  <h2>Create New Product</h2>
                </div>
                <div class="dashboard-subtitle">
                  <p>Create your own product</p>
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
                                <input type="text" class="form-control" />
                              </div>
                              <div class="col-md-6">
                                <label for="">Price</label>
                                <input type="number" class="form-control" />
                              </div>
                              <div class="col-md-12">
                                <div class="form-group mt-2">
                                  <label for="">Category</label>
                                  <select name="category" class="form-control">
                                    <option value="">Category A</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <label for="">Description</label>
                                <textarea id="editor"></textarea>
                              </div>
                              <div class="col-md-12 mt-2">
                                <label for="">Thumbnails</label>
                                <input type="file" class="form-control" />
                              </div>
                            </div>
                            <div class="row mt-3">
                              <div class="col text-right">
                                <button
                                  type="submit"
                                  class="btn btn-success px-5 btn-block"
                                >
                                  Create Product
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

@push('addon-script')
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
    <script>
      ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
        console.error(error);
      });
    </script>
@endpush

