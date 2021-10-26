<?php

namespace App\Http\Controllers;

use App\Models\hutang;

class HutangController extends Controller
{
    public function __construct()
    {
        $this->page = "pages.hutang.";
        $this->modalPage = "utility.Modals.";
    }
    public function index()
    {
        $data['table'] = hutang::get();
        $data['modalInsert'] = $this->modalPage . "Hutang";
        $data['title'] = "Hutang";
        return view($this->page . "index", $data);
    }

    public function store()
    {
        hutang::create(request()->all());
        return redirect()->to("hutang")->with("success", "Berhasil Input Data");
    }

    public function show()
    {
        $data['table'] = hutang::where("id", request("id"))->findOrFail();
        return view($this->page . "show", $data);
    }

    public function edit()
    {
        $data['table'] = hutang::where("id", request("id"))->firstOrFail();
        return view($this->page . "edit", $data);
    }

    public function update()
    {
        hutang::where("id", request("id"))->update(request()->except("_method", "_token"));
        return redirect()->to("hutang")->with("success", "Berhasil Update Data");
    }

    public function destroy()
    {
        hutang::where("id", request("id"))->delete();
        return redirect()->to("hutang")->with("success", "Berhasil Hapus Data");
    }
}
