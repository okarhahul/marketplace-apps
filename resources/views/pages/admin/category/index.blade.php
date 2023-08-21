@extends('layouts.dashboard-admin')

@section('title')
    Category
@endsection

@section('content')
    <div
      class="section-content section-dashboard-home"
      data-aos="fade-up"
    >
      <div class="container-fluid">
        <div class="dashboard-heading">
          <div class="dashboard-tittle">
            <h2>Category</h2>
          </div>
          <div class="dashboard-subtitle">
            <p>List of Categories</p>
          </div>
          <div class="dashboard-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">
                            + Tambah Kategori Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontol-vertical w-100" id="crudTable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama Kategori</th>
                                            <th>Gambar</th>
                                            <th>Slug</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
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
<script>
    var datatable = $('#crudTable').DataTable({
        processing: true,
        serverSide: true,
        ordering: true,
        ajax: {
            url: '{!! url()->current() !!}',
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'photo', name: 'photo' },
            { data: 'slug', name: 'slug' },
            { 
                data: 'action', 
                name: 'action',
                orderable: false,
                searcable: false,
                width: '15%' 
            },
        ]
    })
</script>    
@endpush