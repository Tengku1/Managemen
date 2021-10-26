<?php

namespace App\Http\Controllers;

use App\Models\penerimaan_barang;

class PenerimaanBarang extends Controller
{
    public function __construct()
    {
        $this->page = "pages.penerimaan_barang.";
        $this->modalPage = "utility.Modals.";
    }
    public function index()
    {
        $data['table'] = penerimaan_barang::get();
        $data['modalInsert'] = $this->modalPage . "Penerimaan_Barang";
        $data['title'] = "Penerimaan Barang";
        return view($this->page . "index", $data);
    }

    public function store()
    {
        penerimaan_barang::create(request()->all());
        return redirect()->to("penerimaan-barang")->with("success", "Berhasil Input Data");
    }

    public function show()
    {
        $data['table'] = penerimaan_barang::where("id", request("id"))->findOrFail();
        return view($this->page . "show", $data);
    }

    public function edit()
    {
        $data['table'] = penerimaan_barang::where("id", request("id"))->firstOrFail();
        return view($this->page . "edit", $data);
    }

    public function update()
    {
        penerimaan_barang::where("id", request("id"))->update(request()->except("_method", "_token"));
        return redirect()->to("penerimaan-barang")->with("success", "Berhasil Update Data");
    }

    public function destroy()
    {
        penerimaan_barang::where("id", request("id"))->delete();
        return redirect()->to("penerimaan-barang")->with("success", "Berhasil Hapus Data");
    }
}
