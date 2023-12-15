<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyData</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
@extends('layouts.main')
@section ('content')
<body>
<center>
    <h2 class="mb-4" style="color: #435334;"><b>CONTACT FORM</b></h2>
</center>
<div class="container">
    <div class="row">
    <div class="col-12 p-2 bg-white border border-right">

    <form action="{{ route('contact.store') }}"method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-md-12 mt-3 mb-3">
                    <div class="form-group">
                        <label for="firstname" style="color: #435334;">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}"placeholder="">
                                <!-- error message untuk nama -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                    </div>
                </div>
                <div class="col-md-6 mt-3 mb-3">
                    <div class="form-group">
                        <label for="email" style="color: #435334;">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"placeholder="">
                                <!-- error message untuk email -->
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                    </div>
                </div>
                <div class="col-md-6 mt-3 mb-3">
                    <div class="form-group">
                        <label for="tentang" style="color: #435334;">Tentang</label>
                        <input type="text" class="form-control @error('tentang') is-invalid @enderror" name="tentang" value="{{ old('tentang') }}"placeholder="">
                                <!-- error message untuk tentang -->
                                @error('tentang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                    </div>
                </div>
                <div class="col-md-12 mt-3 mb-3">
                    <div class="form-group">
                        <label for="pesan" style="color: #435334;">Message</label>
                        <textarea id="pesan" class="form-control @error('pesan') is-invalid @enderror" required name="pesan" value="{{ old('pesan') }}"placeholder=""></textarea>
                    </div>
                </div>
                <br>
                <div class="col-md-12 text-center">
                    <button type="submit" name="kontak" class="btn btn-success mt-3"><i class="fa fa-envelope-o"></i> Kirim </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>


@endsection
</body>
</html>