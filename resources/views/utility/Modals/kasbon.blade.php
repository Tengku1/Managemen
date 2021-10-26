<form action="{{ route('kasbon.store') }}" method="POST">
    @csrf
    <div class="form-group row">
        <div class="col-md-6">
            <label for="title">Nama Penerima</label>
            <input type="text" class="form-control" name="nama_penerima" required>
        </div>
        <div class="col-md-6">
            <label for="title">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="title">Nominal</label>
            <input type="number" class="form-control" name="nominal" required>
        </div>
        <div class="col-md-6">
            <label for="title">Tanggal Kasbon</label>
            <input type="date" class="form-control" name="tgl_kasbon" required>
        </div>
    </div>
    <div class="form-group">
        <label for="title">Validasi</label>
        <input type="text" class="form-control" name="validasi" required>
    </div>
    <div class="form-group mb-3">
        <label for="title">Keperluan</label>
        <textarea class="form-control" name="keperluan" required></textarea>
    </div>
    @include('utility.btnModal')
</form>
