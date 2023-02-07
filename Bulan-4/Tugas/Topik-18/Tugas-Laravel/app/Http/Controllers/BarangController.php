<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use Illuminate\Support\Facades\Redis;
use PHPUnit\Framework\MockObject\Stub\ReturnArgument;

class BarangController extends Controller
{
    public function all_barang()
    {
        $barang = barang::all();
        if(count($barang) > 5){
        return view('barang', [
            "barangs" => $barang,
            "title" => "Daftar Barang"
        ]);
        }else{
            return view('barang', [
                "barangs" => $barang,
                "title" => "Daftar Barang"
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
            "title" => "Update"
        ]);
    }
    public function update(Request $request)
    {
        $barang = $request->all();
        barang::findorfail($request->id)->update($barang);
        return redirect('barang')->with('warning', 'Barang Berhasil Diubah.');
    }
    public function search(Request $request)
    {
        $nomer = 1;
        $output = "";
        $barangs = barang::where('namabarang', 'LIKE', "%$request->search%")->orWhere('jumlahbarang', 'LIKE', "%$request->search%")->get();
        if(count($barangs)>0){
        foreach($barangs as $barang){
            $output .=
            '<tr>
            <th>'.$nomer.'</th>
            <td>'.$barang->namabarang.'</td>
            <td>'.$barang->hargabarang.'</td>
            <td>'.$barang->jumlahbarang.'</td>
            <td>'.'
            <div class="btn-group">
            <a href="edit/'.$barang->id.'" class="btn btn-warning btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .80rem;">'.'Ubah</a>
            <a href="delete/'.$barang->id.'" class="btn btn-danger btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .80rem;">'.'Hapus</a>
            </div>
            '.'</td>
            </tr>';
            $nomer++;
        }
        }else{
            $output .=
            '<tr>
                <td colspan="5" class="text-center">'.'Barang Tidak Ditemukan'.'</td>
            </tr>';

        }
        return response($output);
    }
}
