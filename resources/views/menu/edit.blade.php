@extends('layouts.menu')
@section('content')
    
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Edit</h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('menu.index') }}"> Back</a>
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

<form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Menu</strong>
                <input type="text" name="nama_menu" class="form-control" placeholder="Nama Menu" value="{{ $menu->nama_menu }}">
            </div>
            <div class="form-group">
                <strong>Harga</strong>
                <input type="number" name="harga" class="form-control" placeholder="Rp.1000" value="{{ $menu->harga }}">
            </div>
            <div class="form-group">
                <strong>Deskripsi</strong>
                <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" value="{{ $menu->deskripsi }}">
            </div>
            <div class="form-group">
                <strong>Ketersediaan</strong>
                <input type="number" name="ketersediaan" class="form-control" placeholder="Ketersediaan" value="{{ $menu->ketersediaan }}">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>

@endsection