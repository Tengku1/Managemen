<?php

namespace App\Http\Controllers;

use App\Models\tanda_terima_penagihan;

class PenagihanController extends Controller
{
    public function __construct()
    {
        $this->page = "pages.penagihan.";
        $this->modalPage = "utility.Modals.";
    }
    public function index()
    {
        $data['table'] = tanda_terima_penagihan::get();
        $data['modalInsert'] = $this->modalPage . "Penagihan";
        $data['title'] = "Tanda Terima Penagihan";
        return view($this->page . "index", $data);
    }

    public function store()
    {
        tanda_terima_penagihan::create(request()->all());
        return redirect()->to("penagihan")->with("success", "Berhasil Input Data");
    }

    public function show()
    {
        $data['table'] = tanda_terima_penagihan::where("id", request("id"))->findOrFail();
        return view($this->page . "show", $data);
    }

    public function edit()
    {
        $data['table'] = tanda_terima_penagihan::where("id", request("id"))->firstOrFail();
        return view($this->page . "edit", $data);
    }

    public function update()
    {
        tanda_terima_penagihan::where("id", request("id"))->update(request()->except("_method", "_token"));
        return redirect()->to("penagihan")->with("success", "Berhasil Update Data");
    }

    public function destroy()
    {
        tanda_terima_penagihan::where("id", request("id"))->delete();
        return redirect()->to("penagihan")->with("success", "Berhasil Hapus Data");
    }
}
