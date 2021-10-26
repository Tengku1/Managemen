@extends('layouts.app')
@section('content')
    <div class="card card-primary my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Ubah Pembelian Kontan</h6>
            </div>
        </div>
        <form action="{{ route('kontan.update') }}" method="POST">
            {{ csrf_field() }}
            @method('PATCH')
            <div class="card-body">
                <input type="hidden" name="id" value="{{ $table['id'] }}">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="title">Nama Pemasok</label>
                        <input type="text" class="form-control" name="nama_pemasok" value="{{ $table['nama_pemasok'] }}"
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="title">No Kasbon</label>
                        <input type="number" class="form-control" name="no_kasbon" value="{{ $table['no_kasbon'] }}"
                            required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="title">Jumlah Kasbon</label>
                        <input type="number" class="form-control" name="jumlah_kasbon"
                            value="{{ $table['jumlah_kasbon'] }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="title">Kode Penerimaan Barang</label>
                        <input type="text" class="form-control" name="kode_penerimaan_barang"
                            value="{{ $table['kode_penerimaan_barang'] }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="title">Kode Pemasok</label>
                        <input type="text" class="form-control" name="kode_pemasok" value="{{ $table['kode_pemasok'] }}"
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="title">No Faktur Pembelian</label>
                        <input type="number" class="form-control" name="no_faktur_pembelian"
                            value="{{ $table['no_faktur_pembelian'] }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title">Tanggal Kasbon</label>
                    <input type="date" class="form-control" name="tgl_kasbon" value="{{ $table['tgl_kasbon'] }}"
                        required>
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
