@extends('layouts.app')
@section('content')
    <div class="card card-primary my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Ubah Order</h6>
            </div>
        </div>
        <form action="{{ route('bank.update') }}" method="POST">
            {{ csrf_field() }}
            @method('PATCH')
            <div class="card-body">
                <input type="hidden" name="id" value="{{ $table['id'] }}">
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="title">No Cek</label>
                        <input type="number" class="form-control" name="no_cek" value="{{ $table['no_cek'] }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="title">No Bg</label>
                        <input type="number" class="form-control" name="no_bg" value="{{ $table['no_bg'] }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="title">No Rekap</label>
                        <input type="number" class="form-control" name="no_rekap" value="{{ $table['no_rekap'] }}"
                            required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="title">No Faktur</label>
                        <input type="number" class="form-control" name="no_faktur" value="{{ $table['no_faktur'] }}"
                            required>
                    </div>
                    <div class="col-md-4">
                        <label for="title">Kode Tanda Terima Penagihan</label>
                        <input type="text" class="form-control" name="kode_ttp" value="{{ $table['kode_ttp'] }}"
                            required>
                    </div>
                    <div class="col-md-4">
                        <label for="title">Nominal</label>
                        <input type="number" class="form-control" name="nominal" value="{{ $table['nominal'] }}"
                            required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="title">Saldo</label>
                        <input type="number" class="form-control" name="saldo" value="{{ $table['saldo'] }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="title">Debet</label>
                        <input type="number" class="form-control" name="debet" value="{{ $table['kredit'] }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="title">Kredit</label>
                        <input type="number" class="form-control" name="kredit" value="{{ $table['debet'] }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title">Tanggal Bank Keluar</label>
                    <input type="date" class="form-control" name="tgl_bank_keluar"
                        value="{{ $table['tgl_bank_keluar'] }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="title">Uraian</label>
                    <textarea name="uraian" class="form-control">{{ $table['uraian'] }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="title">Validasi</label>
                    <input type="text" class="form-control" name="validasi" value="{{ $table['validasi'] }}" required>
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
