<?php

namespace App\Http\Controllers;

use App\Models\faktur;

class FakturController extends Controller
{
    public function __construct()
    {
        $this->page = "pages.faktur.";
        $this->modalPage = "utility.Modals.";
    }
    public function index()
    {
        $data['table'] = faktur::get();
        $data['modalInsert'] = $this->modalPage . "Faktur";
        $data['title'] = "Purchase Order";
        return view($this->page . "index", $data);
    }

    public function store()
    {
        faktur::create(request()->all());
        return redirect()->to("faktur")->with("success", "Berhasil Input Data");
    }

    public function show()
    {
        $data['table'] = faktur::where("id", request("id"))->findOrFail();
        return view($this->page . "show", $data);
    }

    public function edit()
    {
        $data['table'] = faktur::where("id", request("id"))->firstOrFail();
        return view($this->page . "edit", $data);
    }

    public function update()
    {
        faktur::where("id", request("id"))->update(request()->except("_method", "_token"));
        return redirect()->to("faktur")->with("success", "Berhasil Update Data");
    }

    public function destroy()
    {
        faktur::where("id", request("id"))->delete();
        return redirect()->to("faktur")->with("success", "Berhasil Hapus Data");
    }
}
