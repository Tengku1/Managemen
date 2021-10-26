<?php

namespace App\Http\Controllers;

use App\Models\purchase_order;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->page = "pages.order.";
        $this->modalPage = "utility.Modals.";
    }
    public function index()
    {
        $data['table'] = purchase_order::get();
        $data['modalInsert'] = $this->modalPage . "Order";
        $data['title'] = "Purchase Order";
        return view($this->page . "index", $data);
    }

    public function store()
    {
        purchase_order::create(request()->all());
        return redirect()->to("purchase-order")->with("success", "Berhasil Input Data");
    }

    public function show()
    {
        $data['table'] = purchase_order::where("id", request("id"))->findOrFail();
        return view($this->page . "show", $data);
    }

    public function edit()
    {
        $data['table'] = purchase_order::where("id", request("id"))->firstOrFail();
        return view($this->page . "edit", $data);
    }

    public function update()
    {
        purchase_order::where("id", request("id"))->update(request()->except("_method", "_token"));
        return redirect()->to("purchase-order")->with("success", "Berhasil Update Data");
    }

    public function destroy()
    {
        purchase_order::where("id", request("id"))->delete();
        return redirect()->to("purchase-order")->with("success", "Berhasil Hapus Data");
    }
}
