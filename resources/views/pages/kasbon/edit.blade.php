@extends('layouts.app')
@section('content')
    <div class="card card-primary my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Ubah Faktur</h6>
            </div>
        </div>
        <form action="{{ route('kasbon.update') }}" method="POST">
            {{ csrf_field() }}
            @method('PATCH')
            <div class="card-body">
                <input type="hidden" name="id" value="{{ $table['id'] }}">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="title">Nama Penerima</label>
                        <input type="text" class="form-control" name="nama_penerima"
                            value="{{ $table['nama_penerima'] }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="title">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" value="{{ $table['jabatan'] }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="title">Nominal</label>
                        <input type="number" class="form-control" name="nominal" value="{{ $table['nominal'] }}"
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="title">Tanggal Kasbon</label>
                        <input type="date" class="form-control" name="tgl_kasbon" value="{{ $table['tgl_kasbon'] }}"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title">Validasi</label>
                    <input type="text" class="form-control" name="validasi" value="{{ $table['validasi'] }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="title">Keperluan</label>
                    <textarea class="form-control" name="keperluan" required>{{ $table['keperluan'] }}</textarea>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Hapus</button>
            </div>
        </form>
    </div>
@endsection
