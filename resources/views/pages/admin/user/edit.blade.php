@extends('layouts.dashboard-admin')

@section('title')
    Edit Category
@endsection

@section('content')
    <div
      class="section-content section-dashboard-home"
      data-aos="fade-up"
    >
      <div class="container-fluid">
        <div class="dashboard-heading">
          <div class="dashboard-tittle">
            <h2>Edit Category</h2>
          </div>
          <div class="dashboard-subtitle">
            <p>Edit category of the product</p>
          </div>
          <div class="dashboard-content">
            <div class="row">
                <div class="col-12">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>                                  
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('category.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                            @method("PUT")
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama User</label>
                                        <input type="text" name="name" class="form-control" value = "{{ $item->name }}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email User</label>
                                        <input type="email" name="email" class="form-control" value="{{ $item->email }}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Password User</label>
                                        <input type="password" name="password" class="form-control" required>
                                        <small>Konfirmasi password untuk merubahnya</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="string" name="phone_number" class="form-control" value="{{ $item->phone_number }}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Roles</label>
                                        <select name="roles" class="form-control" required disabled>
                                            <option value="{{ $item->roles }}">{{ $item->roles }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-success px-5">
                                        Update User
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection