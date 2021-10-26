@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="container-fluid py-4">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Tabel Penerimaan Barang</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal"
                            data-target="#modalTambahData">
                            Tambah Penerimaan Barang
                        </button>
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pemasok</th>
                                    <th>Nama Barang</th>
                                    <th>Tanggal Penerimaan</th>
                                    <th>Harga Satuan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($table as $item)
                                    <tr class="{{ $item['status'] == 'Deactive' ? 'bg-secondary text-white' : '' }}">
                                        <td>{{ $item['id'] }}</td>
                                        <td>{{ $item['nama_pemasok'] }}</td>
                                        <td>{{ $item['nama_barang'] }}</td>
                                        <td>{{ $item['tgl_penerimaan'] }}</td>
                                        <td>{{ $item['satuan'] }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ route('penerimaan.edit', $item['id']) }}">
                                                    <button class="btn btn-info" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </a>
                                                <form action="{{ route('penerimaan.destroy') }}" method="post"
                                                    onsubmit="return confirm('Hapus Penerimaan Barang Ini ?')">
                                                    @csrf
                                                    @method("DELETE")
                                                    <input type="hidden" name="id" value="{{ $item['id'] }}">
                                                    <button type="submit" class="btn btn-danger" title="Deactive">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pemasok</th>
                                    <th>Nama Barang</th>
                                    <th>Tanggal Penerimaan</th>
                                    <th>Harga Satuan</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </section>
    @include('utility.addModal')
@endsection
