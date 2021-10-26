<form action="{{ route('rekap-pembelian.store') }}" method="POST">
    @csrf
    <div class="form-group row">
        <div class="col-md-4">
            <label for="title">No Purchase Order</label>
            <input type="number" class="form-control" name="no_po" required>
        </div>
        <div class="col-md-4">
            <label for="title">Nomor Faktur</label>
            <input type="number" class="form-control" name="no_faktur" required>
        </div>
        <div class="col-md-4">
            <label for="title">Nomor Kasbon</label>
            <input type="number" class="form-control" name="no_kasbon" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-4">
            <label for="title">Jumlah Purchase Order</label>
            <input type="number" class="form-control" name="jumlah_po" required>
        </div>
        <div class="col-md-4">
            <label for="title">Nominal Faktur</label>
            <input type="number" class="form-control" name="nominal_faktur" required>
        </div>
        <div class="col-md-4">
            <label for="title">Jumlah Kasbon</label>
            <input type="number" class="form-control" name="jumlah_kasbon" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-4">
            <label for="title">Kode Penerimaan Barang</label>
            <input type="number" class="form-control" name="kode_penerimaan_barang" required>
        </div>
        <div class="col-md-4">
            <label for="title">No Rekap</label>
            <input type="text" class="form-control" name="no_rekap" required>
        </div>
        <div class="col-md-4">
            <label for="title">Nominal</label>
            <input type="number" class="form-control" name="nominal" required>
        </div>
    </div>
    <div class="form-group">
        <label for="title">Tanggal Rekap</label>
        <input type="date" class="form-control" name="tgl_rekap" required>
    </div>
    <div class="form-group mb-3">
        <label for="title">PPN</label>
        <input type="number" class="form-control" name="ppn" required>
    </div>
    @include('utility.btnModal')
</form>
