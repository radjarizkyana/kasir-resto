@extends('layouts.admin')
@section('content')
    
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Edit</h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('admin.index') }}"> Back</a>
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

<form action="{{ route('admin.update', $user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $user->nama }}">
            </div>
            <div class="form-group">
                <strong>Username</strong>
                <input type="text" name="username" class="form-control" placeholder="Username" value="{{ $user->username }}">
            </div>
            <div class="form-group">
                <strong>Password</strong>
                <input type="password" name="password" class="form-control" placeholder="Password" value="{{ $user->password }}">
            </div>
            <div class="form-group">
                <strong>Role</strong>
                <select name="role" id="role" class="form-control">
                    <option value="admin" @if ($user->role == 'admin') selected @endif>Admin</option>
                    <option value="kasir" @if ($user->role == 'kasir') selected @endif>Kasir</option>
                    <option value="manager" @if ($user->role == 'manajer') selected @endif>Manager</option>
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>

@endsection