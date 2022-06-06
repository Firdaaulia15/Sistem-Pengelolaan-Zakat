@extends('templates.master')
@section('title', 'Edit Data Amil')
@section('content')
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">{{ $title }}</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/dataamilupdate/{{ $data->id }}" method="post">
              @csrf
              @method('PATCH')
              <div class="card-body">
                <div class="mb-3 row">
                  <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea name="address" class="form-control @error('address') is-invalid @enderror" id="address" cols="30">{{ $data->address }}</textarea>
                    @error('address')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="phone_number" class="col-sm-2 col-form-label">Nomor Telepon</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ $data->phone_number }}">
                    @error('phone_number')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="/dataamil" class="btn btn-danger float-right mx-2">Kembali</a>
                <button type="submit" class="btn btn-success float-right">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection