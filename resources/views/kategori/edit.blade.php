@extends('layouts.app')
@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')
@section('content')
<div class="container">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Buat kategori baru</h3>
</div>
<form method="post" action="/kategori/simpanedit">
{{ csrf_field() }}
<div class="card-body">
<div class="form-group">
<label for="kodeKategori">Kode Kategori</label>
<input type="hidden" name="id" value="{{ $kategori->kategori_id }}">
<input type="text" class="form-control" id="kodeKategori" name="kodeKategori" value="{{ $kategori->kategori_kode }}" placeholder="untuk makanan, contoh:MKN">
</div>
<div class="form-group">
<label for="namaKategori">Nama Kategori</label>
<input type="text" class="form-control" id="namakategori" name="namakategori" value="{{ $kategori->kategori_nama }}" placeholder="Nama">
</div>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>

</div>
@endsection