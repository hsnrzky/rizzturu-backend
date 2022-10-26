@extends('template.main')
@section('content')
<div class="container mt-5">
    <div class="col mx-auto text-center">
        <table class="table table-dark table-striped">
            @if ($message = Session::get('success'))
                <div class="alert alert-success d-flex alert-dismissible fade show">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @elseif ($message = Session::get('danger'))
                <div class="alert alert-danger d-flex alert-dismissible fade show">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @elseif ($message = Session::get('warning'))
                <div class="alert alert-warning d-flex alert-dismissible fade show">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga Barang</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
                @if(count($barangs) > 0)
                <?php $nomer=1; ?>
                @foreach ($barangs as $barang)
                <tr>
                    <th scope="row"><?= $nomer; ?></th>
                    <td>{{ $barang->namabarang }}</td>
                    <td>{{ $barang->hargabarang }}</td>
                    <td>{{ $barang->jumlahbarang }}</td>
                    <td>
                        <a href="edit/{{ $barang->id }}" class="btn btn-success btn-sm me-2">Edit</a>
                        <a href="delete/{{ $barang->id }}" class="btn btn-danger btn-sm" onclick="return confirm('yakin?')">Delete</a>
                    </td>
                </tr>
                <?php $nomer++; ?>
                @endforeach
                @else
                <tr>
					<td colspan="5" class="text-center">Tidak Ada Barang</td>
				</tr>
                @endif
            </tbody>
        </table>
        <form action="{{ url('insert') }}" method="POST">
            @csrf
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-dark btn-lg mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Barang
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="namaBarang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="namaBarang" name="namabarang" placeholder="masukan nama barang" style="text-align: center;">
                        </div>
                        <div class="mb-3">
                            <label for="hargaBarang" class="form-label">Harga Barang</label>
                            <input type="number" class="form-control" id="hargaBarang" name="hargabarang" placeholder="masukan harga barang" style="text-align: center; font-size:5;" >
                        </div>
                        <div class="mb-3">
                            <label for="jumlahBarang" class="form-label">Jumlah Barang</label>
                            <input type="number" class="form-control" id="jumlahBarang" name="jumlahbarang" placeholder="masukan jumlah barang" style="text-align: center;">
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
