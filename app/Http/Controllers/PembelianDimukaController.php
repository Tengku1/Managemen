<?php

namespace App\Http\Controllers;

use App\Models\pembelian_dibayar_dimuka;

class PembelianDimukaController extends Controller
{
    public function __construct()
    {
        $this->page = "pages.pembelian.dimuka.";
        $this->modalPage = "utility.Modals.";
    }
    public function index()
    {
        $data['table'] = pembelian_dibayar_dimuka::get();
        $data['modalInsert'] = $this->modalPage . "PembelianDimuka";
        $data['title'] = "Pembelian Dimuka";
        return view($this->page . "index", $data);
    }

    public function store()
    {
        pembelian_dibayar_dimuka::create(request()->all());
        return redirect()->to("pembelian-dimuka")->with("success", "Berhasil Input Data");
    }

    public function show()
    {
        $data['table'] = pembelian_dibayar_dimuka::where("id", request("id"))->findOrFail();
        return view($this->page . "show", $data);
    }

    public function edit()
    {
        $data['table'] = pembelian_dibayar_dimuka::where("id", request("id"))->firstOrFail();
        return view($this->page . "edit", $data);
    }

    public function update()
    {
        pembelian_dibayar_dimuka::where("id", request("id"))->update(request()->except("_method", "_token"));
        return redirect()->to("pembelian-dimuka")->with("success", "Berhasil Update Data");
    }

    public function destroy()
    {
        pembelian_dibayar_dimuka::where("id", request("id"))->delete();
        return redirect()->to("pembelian-dimuka")->with("success", "Berhasil Hapus Data");
    }
}
