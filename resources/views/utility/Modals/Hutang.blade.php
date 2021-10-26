<form action="{{ route('hutang.store') }}" method="POST">
    @csrf
    <div class="form-group row">
        <div class="col-md-6">
            <label for="title">Nama Pemasok</label>
            <input type="text" class="form-control" name="nama_pemasok" required>
        </div>
        <div class="col-md-6">
            <label for="title">No Purchase Order</label>
            <input type="number" class="form-control" name="no_po" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="title">No Faktur Pembelian</label>
            <input type="number" class="form-control" name="no_faktur_pembelian" required>
        </div>
        <div class="col-md-6">
            <label for="title">Kode Pemasok</label>
            <input type="number" class="form-control" name="kode_pemasok" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="title">Kode Penerimaan Barang</label>
            <input type="text" class="form-control" name="kode_penerimaan_barang" required>
        </div>
        <div class="col-md-6">
            <label for="title">Nominal</label>
            <input type="number" class="form-control" name="nominal" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="title">Jumlah Purchase Order</label>
            <input type="number" class="form-control" name="jumlah_po" required>
        </div>
        <div class="col-md-6">
            <label for="title">Jumlah Faktur Pembelian</label>
            <input type="number" class="form-control" name="jumlah_faktur_pembelian" required>
        </div>
    </div>
    <div class="form-group mb-3">
        <label for="title">PPN</label>
        <input type="number" class="form-control" name="ppn" required>
    </div>
    @include('utility.btnModal')
</form>
