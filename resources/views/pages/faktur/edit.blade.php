@extends('layouts.app')
@section('content')
    <div class="card card-primary my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Ubah Faktur</h6>
            </div>
        </div>
        <form action="{{ route('faktur.update') }}" method="POST">
            {{ csrf_field() }}
            @method('PATCH')
            <div class="card-body">
                <input type="hidden" name="id" value="{{ $table['id'] }}">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="title">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" value="{{ $table['nama_barang'] }}"
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="title">Nama Pemasok</label>
                        <input type="text" class="form-control" name="nama_pemasok" value="{{ $table['nama_pemasok'] }}"
                            required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="title">Kode Pemasok</label>
                        <input type="text" class="form-control" name="kode_pemasok" value="{{ $table['kode_pemasok'] }}"
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="title">Harga Satuan</label>
                        <input type="number" class="form-control" name="harga_satuan"
                            value="{{ $table['harga_satuan'] }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="title">No Purchase Order</label>
                        <input type="number" class="form-control" name="no_po" value="{{ $table['no_po'] }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="title">Total Harga</label>
                        <input type="number" class="form-control" name="total_harga" value="{{ $table['total_harga'] }}"
                            required>
                    </div>
                    <div class="col-md-4">
                        <label for="title">Validasi</label>
                        <input type="text" class="form-control" name="validasi" value="{{ $table['validasi'] }}"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title">Tanggal Faktur</label>
                    <input type="date" class="form-control" name="tgl_faktur" value="{{ $table['tgl_faktur'] }}"
                        required>
                </div>
                <div class="form-group mb-3">
                    <label for="title">Alamat Pemasok</label>
                    <textarea class="form-control" name="alamat_pemasok"
                        required>{{ $table['alamat_pemasok'] }}</textarea>
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
