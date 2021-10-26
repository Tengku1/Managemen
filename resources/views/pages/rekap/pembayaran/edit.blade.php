@extends('layouts.app')
@section('content')
    <div class="card card-primary my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Ubah Rekap Pembayaran</h6>
            </div>
        </div>
        <form action="{{ route('rekap-pembayaran.update') }}" method="POST">
            {{ csrf_field() }}
            @method('PATCH')
            <div class="card-body">
                <input type="hidden" name="id" value="{{ $table['id'] }}">
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="title">No Purchase Order</label>
                        <input type="number" class="form-control" name="no_po" value="{{ $table['no_po'] }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="title">Nomor Rekap</label>
                        <input type="number" class="form-control" name="no_rekap" value="{{ $table['no_rekap'] }}"
                            required>
                    </div>
                    <div class="col-md-4">
                        <label for="title">Nomor Kasbon</label>
                        <input type="number" class="form-control" name="no_kasbon" value="{{ $table['no_kasbon'] }}"
                            required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="title">No Faktur Pembelian</label>
                        <input type="number" class="form-control" name="no_faktur_pembelian"
                            value="{{ $table['no_faktur_pembelian'] }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="title">Jumlah Faktur Pembelian</label>
                        <input type="number" class="form-control" name="jumlah_faktur_pembelian"
                            value="{{ $table['jumlah_faktur_pembelian'] }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="title">Jumlah Kasbon</label>
                        <input type="number" class="form-control" name="jumlah_kasbon"
                            value="{{ $table['jumlah_kasbon'] }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="title">Kode Penerimaan Barang</label>
                        <input type="text" class="form-control" name="kode_penerimaan_barang"
                            value="{{ $table['kode_penerimaan_barang'] }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="title">Kode Pemasok</label>
                        <input type="text" class="form-control" name="kode_pemasok"
                            value="{{ $table['kode_pemasok'] }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="title">Nama Pemasok</label>
                        <input type="text" class="form-control" name="nama_pemasok"
                            value="{{ $table['nama_pemasok'] }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title">Kode Hutang</label>
                    <input type="text" class="form-control" name="kode_hutang" value="{{ $table['kode_hutang'] }}"
                        required>
                </div>
                <div class="form-group mb-3">
                    <label for="title">Nominal</label>
                    <input type="number" class="form-control" name="nominal" value="{{ $table['nominal'] }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="title">Jumlah Purchase Order</label>
                    <input type="number" class="form-control" name="jumlah_po" value="{{ $table['jumlah_po'] }}"
                        required>
                </div>
                <div class="form-group mb-3">
                    <label for="title">PPN</label>
                    <input type="number" class="form-control" name="ppn" value="{{ $table['ppn'] }}" required>
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
