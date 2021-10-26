@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="container-fluid py-4">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Tabel Rekap Pembelian</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal"
                            data-target="#modalTambahData">
                            Tambah Rekap Pembelian
                        </button>
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Purchase Order</th>
                                    <th>Jumlah Purchase Order</th>
                                    <th>Tanggal Rekap</th>
                                    <th>Nominal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($table as $item)
                                    <tr class="{{ $item['status'] == 'Deactive' ? 'bg-secondary text-white' : '' }}">
                                        <td>{{ $item['id'] }}</td>
                                        <td>{{ $item['no_po'] }}</td>
                                        <td>{{ $item['jumlah_po'] }}</td>
                                        <td>{{ $item['tgl_recap'] }}</td>
                                        <td>{{ $item['nominal'] }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ route('rekap-pembelian.edit', $item['id']) }}">
                                                    <button class="btn btn-info" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </a>
                                                <form action="{{ route('rekap-pembelian.destroy') }}" method="post"
                                                    onsubmit="return confirm('Hapus Rekap Pembelian Ini ?')">
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
                                    <th>No Purchase Order</th>
                                    <th>Jumlah Purchase Order</th>
                                    <th>Tanggal Rekap</th>
                                    <th>Nominal</th>
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
