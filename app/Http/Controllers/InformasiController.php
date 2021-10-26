<?php

namespace App\Http\Controllers;

use App\Models\InformasiPembayaran;

class InformasiController extends Controller
{
    public function __construct()
    {
        $this->page = "pages.informasi.";
        $this->modalPage = "utility.Modals.";
    }
    public function index()
    {
        $data['table'] = InformasiPembayaran::get();
        $data['modalInsert'] = $this->modalPage . "Informasi";
        $data['title'] = "Informasi Pembayaran";
        return view($this->page . "index", $data);
    }

    public function store()
    {
        InformasiPembayaran::create(request()->all());
        return redirect()->to("informasi-pembayaran")->with("success", "Berhasil Input Data");
    }

    public function show()
    {
        $data['table'] = InformasiPembayaran::where("id", request("id"))->findOrFail();
        return view($this->page . "show", $data);
    }

    public function edit()
    {
        $data['table'] = InformasiPembayaran::where("id", request("id"))->firstOrFail();
        return view($this->page . "edit", $data);
    }

    public function update()
    {
        InformasiPembayaran::where("id", request("id"))->update(request()->except("_method", "_token"));
        return redirect()->to("informasi-pembayaran")->with("success", "Berhasil Update Data");
    }

    public function destroy()
    {
        InformasiPembayaran::where("id", request("id"))->delete();
        return redirect()->to("informasi-pembayaran")->with("success", "Berhasil Hapus Data");
    }
}
