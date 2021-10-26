<?php

namespace App\Http\Controllers;

use App\Models\pembelian_kontan;

class PembelianKontanController extends Controller
{
    public function __construct()
    {
        $this->page = "pages.pembelian.kontan.";
        $this->modalPage = "utility.Modals.";
    }
    public function index()
    {
        $data['table'] = pembelian_kontan::get();
        $data['modalInsert'] = $this->modalPage . "PembelianKontan";
        $data['title'] = "Pembelian Kontan";
        return view($this->page . "index", $data);
    }

    public function store()
    {
        pembelian_kontan::create(request()->all());
        return redirect()->to("pembelian-kontan")->with("success", "Berhasil Input Data");
    }

    public function show()
    {
        $data['table'] = pembelian_kontan::where("id", request("id"))->findOrFail();
        return view($this->page . "show", $data);
    }

    public function edit()
    {
        $data['table'] = pembelian_kontan::where("id", request("id"))->firstOrFail();
        return view($this->page . "edit", $data);
    }

    public function update()
    {
        pembelian_kontan::where("id", request("id"))->update(request()->except("_method", "_token"));
        return redirect()->to("pembelian-kontan")->with("success", "Berhasil Update Data");
    }

    public function destroy()
    {
        pembelian_kontan::where("id", request("id"))->delete();
        return redirect()->to("pembelian-kontan")->with("success", "Berhasil Hapus Data");
    }
}
