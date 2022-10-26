@extends('template.main')

@section('content')
<div class="container col-4">
    <div class="col mx-auto text-center">
            <form action="{{ url('update') }}" method="POST">
                @csrf
                @foreach ($barangs as $barang)
                <div class="mb-3">
                    <input type="hidden" value="{{ $barang->id }}" name="id">
                  <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $barang->namabarang }}" name="namabarang">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Harga Barang</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" value="{{ $barang->hargabarang }}" name="hargabarang">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label">Jumlah Barang</label>
                    <input type="number" class="form-control" id="exampleInputPassword2" value="{{ $barang->jumlahbarang }}" name="jumlahbarang">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
                @endforeach
              </form>
        </div>
    </div>
</div>
@endsection
