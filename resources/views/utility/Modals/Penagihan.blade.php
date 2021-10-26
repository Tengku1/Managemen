<form action="{{ route('penagihan.store') }}" method="POST">
    @csrf
    <div class="form-group row">
        <div class="col-md-6">
            <label for="title">Nama Pemasok</label>
            <input type="text" class="form-control" name="nama_pemasok" required>
        </div>
        <div class="col-md-6">
            <label for="title">No Faktur</label>
            <input type="number" class="form-control" name="no_faktur" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <div class="col-md-6">
            <label for="title">Tanggal Pengambilan</label>
            <input type="date" class="form-control" name="tgl_pengambilan" required>
        </div>
        <div class="col-md-6">
            <label for="title">Nominal</label>
            <input type="number" class="form-control" name="nominal" required>
        </div>
    </div>
    @include('utility.btnModal')
</form>
