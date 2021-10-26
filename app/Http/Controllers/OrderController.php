<?php

namespace App\Http\Controllers;

use App\Models\purchase_order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->page = "pages.order.";
    }
    public function index()
    {
        $data['table'] = purchase_order::get();
        return view($this->page . "index", $data);
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
