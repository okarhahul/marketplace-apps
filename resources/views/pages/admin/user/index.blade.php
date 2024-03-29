@extends('layouts.dashboard-admin')

@section('title')
    User
@endsection

@section('content')
    <div
      class="section-content section-dashboard-home"
      data-aos="fade-up"
    >
      <div class="container-fluid">
        <div class="dashboard-heading">
          <div class="dashboard-tittle">
            <h2>User</h2>
          </div>
          <div class="dashboard-subtitle">
            <p>List of Users</p>
          </div>
          <div class="dashboard-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">
                            + Tambah User Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontol-vertical w-100" id="crudTable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Nomer Handphone</th>
                                            <th>Roles</th>
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
            { data: 'email', name: 'email' },
            { data: 'phone_number', name: 'phone_number' },
            { data: 'roles', name: 'roles' },
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