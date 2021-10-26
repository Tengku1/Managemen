<form action="{{ route('informasi.store') }}" method="POST">
    @csrf
    <div class="form-group row">
        <div class="col-md-6">
            <label for="title">No Faktur</label>
            <input type="number" class="form-control" name="no_faktur" required>
        </div>
        <div class="col-md-6">
            <label for="title">Nominal</label>
            <input type="number" class="form-control" name="nominal" required>
        </div>
    </div>
    <div class="form-group">
        <label for="title">Tanggal Pengambilan</label>
        <input type="date" class="form-control" name="tgl_pengambilan" required>
    </div>
    <div class="form-group mb-3">
        <label for="title">Kode Tanda Terima Penagihan</label>
        <input type="text" class="form-control" name="kode_ttp" required>
    </div>
    @include('utility.btnModal')
</form>
