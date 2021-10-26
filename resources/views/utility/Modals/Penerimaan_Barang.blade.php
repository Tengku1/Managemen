<form action="{{ route('penerimaan.store') }}" method="POST">
    @csrf
    <div class="form-group row">
        <div class="col-md-4">
            <label for="title">Nama Pemasok</label>
            <input type="text" class="form-control" name="nama_pemasok" required>
        </div>
        <div class="col-md-4">
            <label for="title">Divisi</label>
            <input type="number" class="form-control" name="divisi" required>
        </div>
        <div class="col-md-4">
            <label for="title">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="title">Volume Barang</label>
            <input type="text" class="form-control" name="volume" required>
        </div>
        <div class="col-md-6">
            <label for="title">Harga Satuan</label>
            <input type="number" class="form-control" name="satuan" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="title">No Purchase Order</label>
            <input type="number" class="form-control" name="no_po" required>
        </div>
        <div class="col-md-6">
            <label for="title">Validasi</label>
            <input type="text" class="form-control" name="validasi" required>
        </div>
    </div>
    <div class="form-group">
        <label for="title">Tanggal Penerimaan</label>
        <input type="date" class="form-control" name="tgl_penerimaan" required>
    </div>
    <div class="form-group mb-3">
        <label for="title">Keterangan</label>
        <textarea class="form-control" name="keterangan" required></textarea>
    </div>
    @include('utility.btnModal')
</form>
