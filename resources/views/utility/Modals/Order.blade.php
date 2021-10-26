<form action="{{ route('order.store') }}" method="POST">
    @csrf
    <div class="form-group row">
        <div class="col-md-6">
            <label for="title">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" required>
        </div>
        <div class="col-md-6">
            <label for="title">Nama Supplier</label>
            <input type="text" class="form-control" name="nama_supplier" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="title">Volume Barang</label>
            <input type="text" class="form-control" name="volume" required>
        </div>
        <div class="col-md-6">
            <label for="title">Harga Satuan</label>
            <input type="number" class="form-control" name="harga_satuan" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-4">
            <label for="title">Total Barang</label>
            <input type="number" class="form-control" name="total" required>
        </div>
        <div class="col-md-4">
            <label for="title">Total Harga</label>
            <input type="number" class="form-control" name="total_harga" required>
        </div>
        <div class="col-md-4">
            <label for="title">Discount</label>
            <input type="number" class="form-control" name="discount" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="title">Tanggal Dibutuhkan</label>
            <input type="date" class="form-control" name="tgl_dibutuhkan" required>
        </div>
        <div class="col-md-6">
            <label for="title">Jatuh Tempo</label>
            <input type="date" class="form-control" name="jatuh_tempo" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="title">PPN</label>
            <input type="number" class="form-control" name="ppn" required>
        </div>
        <div class="col-md-6">
            <label for="title">Validasi</label>
            <input type="text" class="form-control" name="validasi" required>
        </div>
    </div>
    <div class="form-group mb-3">
        <label for="title">Alamat</label>
        <textarea class="form-control" name="alamat" required></textarea>
    </div>
    @include('utility.btnModal')
</form>
