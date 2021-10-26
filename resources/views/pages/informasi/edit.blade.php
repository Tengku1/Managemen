@extends('layouts.app')
@section('content')
    <div class="card card-primary my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Ubah Informasi Pembayaran</h6>
            </div>
        </div>
        <form action="{{ route('informasi.update') }}" method="POST">
            {{ csrf_field() }}
            @method('PATCH')
            <div class="card-body">
                <input type="hidden" name="id" value="{{ $table['id'] }}">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="title">No Faktur</label>
                        <input type="number" class="form-control" value="{{ $table['no_faktur'] }}" name="no_faktur"
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="title">Nominal</label>
                        <input type="number" class="form-control" value="{{ $table['nominal'] }}" name="nominal"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title">Tanggal Pengambilan</label>
                    <input type="date" class="form-control" value="{{ $table['tgl_pengambilan'] }}"
                        name="tgl_pengambilan" required>
                </div>
                <div class="form-group mb-3">
                    <label for="title">Kode Tanda Terima Penagihan</label>
                    <input type="text" class="form-control" value="{{ $table['kode_ttp'] }}" name="kode_ttp" required>
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
