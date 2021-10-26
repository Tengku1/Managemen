@extends('layouts.app')
@section('content')
    <div class="card card-primary my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Ubah Order</h6>
            </div>
        </div>
        <form action="{{ route('order.update') }}" method="POST">
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
                        <label for="title">Nama Supplier</label>
                        <input type="text" class="form-control" name="nama_supplier"
                            value="{{ $table['nama_supplier'] }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="title">Volume Barang</label>
                        <input type="text" class="form-control" name="volume" value="{{ $table['volume'] }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="title">Harga Satuan</label>
                        <input type="number" class="form-control" name="harga_satuan"
                            value="{{ $table['harga_satuan'] }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="title">Total Barang</label>
                        <input type="number" class="form-control" name="total" value="{{ $table['total'] }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="title">Total Harga</label>
                        <input type="number" class="form-control" name="total_harga" value="{{ $table['total_harga'] }}"
                            required>
                    </div>
                    <div class="col-md-4">
                        <label for="title">Discount</label>
                        <input type="number" class="form-control" name="discount" value="{{ $table['discount'] }}"
                            required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="title">Tanggal Dibutuhkan</label>
                        <input type="date" class="form-control" name="tgl_dibutuhkan"
                            value="{{ $table['tgl_dibutuhkan'] }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="title">Jatuh Tempo</label>
                        <input type="date" class="form-control" name="jatuh_tempo" value="{{ $table['jatuh_tempo'] }}"
                            required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="title">PPN</label>
                        <input type="number" class="form-control" name="ppn" value="{{ $table['ppn'] }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="title">Validasi</label>
                        <input type="text" class="form-control" name="validasi" value="{{ $table['validasi'] }}"
                            required>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="title">Alamat</label>
                    <textarea class="form-control" name="alamat" required>{{ $table['alamat'] }}</textarea>
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
