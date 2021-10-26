<?php

namespace App\Http\Controllers;

use App\Models\rekap_pembelian;

class RekapPembelianController extends Controller
{
    public function __construct()
    {
        $this->page = "pages.rekap.pembelian.";
        $this->modalPage = "utility.Modals.";
    }
    public function index()
    {
        $data['table'] = rekap_pembelian::get();
        $data['modalInsert'] = $this->modalPage . "RekapPembelian";
        $data['title'] = "Rekap Pembelian";
        return view($this->page . "index", $data);
    }

    public function store()
    {
        rekap_pembelian::create(request()->all());
        return redirect()->to("rekap-pembelian")->with("success", "Berhasil Input Data");
    }

    public function show()
    {
        $data['table'] = rekap_pembelian::where("id", request("id"))->findOrFail();
        return view($this->page . "show", $data);
    }

    public function edit()
    {
        $data['table'] = rekap_pembelian::where("id", request("id"))->firstOrFail();
        return view($this->page . "edit", $data);
    }

    public function update()
    {
        rekap_pembelian::where("id", request("id"))->update(request()->except("_method", "_token"));
        return redirect()->to("rekap-pembelian")->with("success", "Berhasil Update Data");
    }

    public function destroy()
    {
        rekap_pembelian::where("id", request("id"))->delete();
        return redirect()->to("rekap-pembelian")->with("success", "Berhasil Hapus Data");
    }
}
