<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use Illuminate\Support\Facades\Redis;

class BarangController extends Controller
{
    public function all_barang()
    {
        $barang = barang::all();
        if(count($barang) > 5){
        return view('barang', [
            "barangs" => $barang,
            "title" => "Daftar Barang",
            "posisi" => "relative"
        ]);
        }else{
            return view('barang', [
                "barangs" => $barang,
                "title" => "Daftar Barang",
                "posisi" => "absolute"
            ]);
        }
    }
    public function insert_barang(Request $request)
    {
        $request->validate([
            "jumlahbarang" => "required",
            "namabarang" => "required",
            "hargabarang" => "required"
        ]);
        barang::create([
            "jumlahbarang" => $request->jumlahbarang,
            "namabarang" => $request->namabarang,
            "hargabarang" => $request->hargabarang
        ]);
        return redirect('barang')->with('success', 'Barang Berhasil Ditambahkan.');
    }
    public function delete($id)
    {
        barang::destroy($id);
        return redirect('barang')->with('danger', 'Barang Berhasil Dihapus.');
    }
    public function edit($id)
    {
        $barang = barang::where('id', $id)->get();
        return view('update',[
            "barangs"=>$barang,
            "title" => "Update",
            "posisi" => "absolute"
        ]);
    }
    public function update(Request $request)
    {
        $barang = $request->all();
        barang::findorfail($request->id)->update($barang);
        return redirect('barang')->with('warning', 'Barang Berhasil Diedit.');
    }
    public function src(Request $request)
    {
        $barang = barang::where('namabarang', 'LIKE', "%$request->src%")->get();
        return view('barang', [
            "barangs" => $barang,
            "title" => "Update",
            "posisi" => "absolute"
        ]);
    }
}
