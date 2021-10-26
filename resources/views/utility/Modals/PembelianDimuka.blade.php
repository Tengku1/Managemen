<form action="{{ route('pembelian-dimuka.store') }}" method="POST">
    @csrf
    <div class="form-group row">
        <div class="col-md-6">
            <label for="title">No Kasbon</label>
            <input type="number" class="form-control" name="no_kasbon" required>
        </div>
        <div class="col-md-6">
            <label for="title">No Faktur Pembelian</label>
            <input type="number" class="form-control" name="no_faktur_pembelian" required>
        </div>
    </div>
    <div class="form-group">
        <label for="title">Tanggal Kasbon</label>
        <input type="date" class="form-control" name="tgl_kasbon" required>
    </div>
    <div class="form-group mb-3">
        <label for="title">Nominal</label>
        <input type="number" class="form-control" name="nominal" required>

    </div>
    @include('utility.btnModal')
</form>
