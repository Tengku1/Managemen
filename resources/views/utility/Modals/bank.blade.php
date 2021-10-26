<form action="{{ route('bank.store') }}" method="POST">
    @csrf
    <div class="form-group row">
        <div class="col-md-4">
            <label for="title">No Cek</label>
            <input type="number" class="form-control" name="no_cek" required>
        </div>
        <div class="col-md-4">
            <label for="title">No Bg</label>
            <input type="number" class="form-control" name="no_bg" required>
        </div>
        <div class="col-md-4">
            <label for="title">No Rekap</label>
            <input type="number" class="form-control" name="no_rekap" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-4">
            <label for="title">No Faktur</label>
            <input type="number" class="form-control" name="no_faktur" required>
        </div>
        <div class="col-md-4">
            <label for="title">Kode Tanda Terima Penagihan</label>
            <input type="text" class="form-control" name="kode_ttp" required>
        </div>
        <div class="col-md-4">
            <label for="title">Nominal</label>
            <input type="number" class="form-control" name="nominal" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-4">
            <label for="title">Saldo</label>
            <input type="number" class="form-control" name="saldo" required>
        </div>
        <div class="col-md-4">
            <label for="title">Debet</label>
            <input type="number" class="form-control" name="debet" required>
        </div>
        <div class="col-md-4">
            <label for="title">Kredit</label>
            <input type="number" class="form-control" name="kredit" required>
        </div>
    </div>
    <div class="form-group">
        <label for="title">Tanggal Bank Keluar</label>
        <input type="date" class="form-control" name="tgl_bank_keluar" required>
    </div>
    <div class="form-group mb-3">
        <label for="title">Uraian</label>
        <textarea name="uraian" class="form-control"></textarea>
    </div>
    <div class="form-group mb-3">
        <label for="title">Validasi</label>
        <input type="text" class="form-control" name="validasi" required>
    </div>
    @include('utility.btnModal')
</form>
