<?php

namespace App\Http\Controllers;

use App\Models\kasbon;

class KasbonController extends Controller
{
    public function __construct()
    {
        $this->page = "pages.kasbon.";
        $this->modalPage = "utility.Modals.";
    }
    public function index()
    {
        $data['table'] = kasbon::get();
        $data['modalInsert'] = $this->modalPage . "Kasbon";
        $data['title'] = "Purchase Order";
        return view($this->page . "index", $data);
    }

    public function store()
    {
        kasbon::create(request()->all());
        return redirect()->to("kasbon")->with("success", "Berhasil Input Data");
    }

    public function show()
    {
        $data['table'] = kasbon::where("id", request("id"))->findOrFail();
        return view($this->page . "show", $data);
    }

    public function edit()
    {
        $data['table'] = kasbon::where("id", request("id"))->firstOrFail();
        return view($this->page . "edit", $data);
    }

    public function update()
    {
        kasbon::where("id", request("id"))->update(request()->except("_method", "_token"));
        return redirect()->to("kasbon")->with("success", "Berhasil Update Data");
    }

    public function destroy()
    {
        kasbon::where("id", request("id"))->delete();
        return redirect()->to("kasbon")->with("success", "Berhasil Hapus Data");
    }
}
