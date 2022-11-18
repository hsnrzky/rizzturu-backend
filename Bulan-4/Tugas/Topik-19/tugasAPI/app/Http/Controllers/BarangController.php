<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\barang;

class BarangController extends Controller
{
    public function show(){
        $barang = barang::all();
        return response()->json($barang, 200);
    }
    public function create(Request $request)
    {
        barang::create([
            'namabarang' => $request->namabarang,
            'hargabarang' => $request->hargabarang,
            'jumlahbarang' => $request->jumlahbarang,
        ]);
        return response()->json([
            "status" => "The data was successfully created",
            "show" => $this->show()
        ], 200);
    }
    public function delete($id)
    {
        barang::destroy($id);
        return response()->json([
            "status" => "The data was successfully deleted",
            "show" => $this->show()
        ], 200);
    }
    public function update(Request $request, $id)
    {
        $show = $request->all();
        barang::findorfail($id)->update($request->all());
        return response()->json([
            "status" => "The data was successfully updated",
            "show" => $show,
        ]);
    }

}
