<form action="{{ route('kontan.store') }}" method="POST">
    @csrf
    <div class="form-group row">
        <div class="col-md-6">
            <label for="title">Nama Pemasok</label>
            <input type="text" class="form-control" name="nama_pemasok" required>
        </div>
        <div class="col-md-6">
            <label for="title">No Kasbon</label>
            <input type="number" class="form-control" name="no_kasbon" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="title">Jumlah Kasbon</label>
            <input type="number" class="form-control" name="jumlah_kasbon" required>
        </div>
        <div class="col-md-6">
            <label for="title">Kode Penerimaan Barang</label>
            <input type="text" class="form-control" name="kode_penerimaan_barang" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="title">Kode Pemasok</label>
            <input type="text" class="form-control" name="kode_pemasok" required>
        </div>
        <div class="col-md-6">
            <label for="title">No Faktur Pembelian</label>
            <input type="number" class="form-control" name="no_faktur_pembelian" required>
        </div>
    </div>
    <div class="form-group mb-3">
        <label for="title">Tanggal Kasbon</label>
        <input type="date" class="form-control" name="tgl_kasbon" required>
    </div>
    @include('utility.btnModal')
</form>
