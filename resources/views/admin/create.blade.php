@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah User</h2>
        </div>
    </div>
    <div class="pull-right">
        <a href="{{ route('admin.index') }}" class="btn btn-primary">Back</a>
    </div>
</div>
<br>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="form-group">
                <strong>Username</strong>
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <strong>Password</strong>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <strong>Role</strong>
                <select name="role" id="role" class="form-control">
                    <option value="Admin">Admin</option>
                    <option value="Kasir">Kasir</option>
                    <option value="Manager">Manager</option>
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>

@endsection