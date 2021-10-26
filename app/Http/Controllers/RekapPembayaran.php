<?php

namespace App\Http\Controllers;

use App\Models\rekap_pembayaran;

class RekapPembayaran extends Controller
{
    public function __construct()
    {
        $this->page = "pages.rekap.pembayaran.";
        $this->modalPage = "utility.Modals.";
    }
    public function index()
    {
        $data['table'] = rekap_pembayaran::get();
        $data['modalInsert'] = $this->modalPage . "RekapPembayaran";
        $data['title'] = "Rekap Pembayaran";
        return view($this->page . "index", $data);
    }

    public function store()
    {
        rekap_pembayaran::create(request()->all());
        return redirect()->to("rekap-pembayaran")->with("success", "Berhasil Input Data");
    }

    public function show()
    {
        $data['table'] = rekap_pembayaran::where("id", request("id"))->findOrFail();
        return view($this->page . "show", $data);
    }

    public function edit()
    {
        $data['table'] = rekap_pembayaran::where("id", request("id"))->firstOrFail();
        return view($this->page . "edit", $data);
    }

    public function update()
    {
        rekap_pembayaran::where("id", request("id"))->update(request()->except("_method", "_token"));
        return redirect()->to("rekap-pembayaran")->with("success", "Berhasil Update Data");
    }

    public function destroy()
    {
        rekap_pembayaran::where("id", request("id"))->delete();
        return redirect()->to("rekap-pembayaran")->with("success", "Berhasil Hapus Data");
    }
}
