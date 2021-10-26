<?php

namespace App\Http\Controllers;

use App\Models\rekap_bank_keluar;

class BankController extends Controller
{
    public function __construct()
    {
        $this->page = "pages.bank.";
        $this->modalPage = "utility.Modals.";
    }
    public function index()
    {
        $data['table'] = rekap_bank_keluar::get();
        $data['modalInsert'] = $this->modalPage . "Bank";
        $data['title'] = "Rekap Bank Keluar";
        return view($this->page . "index", $data);
    }

    public function store()
    {
        rekap_bank_keluar::create(request()->all());
        return redirect()->to("rekap-bank")->with("success", "Berhasil Input Data");
    }

    public function show()
    {
        $data['table'] = rekap_bank_keluar::where("id", request("id"))->findOrFail();
        return view($this->page . "show", $data);
    }

    public function edit()
    {
        $data['table'] = rekap_bank_keluar::where("id", request("id"))->firstOrFail();
        return view($this->page . "edit", $data);
    }

    public function update()
    {
        rekap_bank_keluar::where("id", request("id"))->update(request()->except("_method", "_token"));
        return redirect()->to("rekap-bank")->with("success", "Berhasil Update Data");
    }

    public function destroy()
    {
        rekap_bank_keluar::where("id", request("id"))->delete();
        return redirect()->to("rekap-bank")->with("success", "Berhasil Hapus Data");
    }
}
