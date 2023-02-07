@extends('template.main')
@section('content')
<div class="container-xl mt-3">
    <input class="form-control mb-3" role="search" type="search" placeholder="Search Barang" aria-label="Search" name="search" id="search">
    <button type="button" class="btn btn-dark btn-md mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Barang
    </button>
    <div class="col mx-auto text-center">
        <table class="table table-dark table-striped">
            @if ($message = Session::get('success'))
                <div class="alert alert-success d-flex alert-dismissible fade show" id="alert-success">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @elseif ($message = Session::get('danger'))
                <div class="alert alert-danger d-flex alert-dismissible fade show" id="alert-danger">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @elseif ($message = Session::get('warning'))
                <div class="alert alert-warning d-flex alert-dismissible fade show" id="alert-warning">
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
            <tbody class="alldata">
                @if(count($barangs) > 0)
                <?php $nomer=1; ?>
                @foreach ($barangs as $barang)
                <tr>
                    <th scope="row"><?= $nomer; ?></th>
                    <td>{{ $barang->namabarang }}</td>
                    <td>{{ $barang->hargabarang }}</td>
                    <td>{{ $barang->jumlahbarang }}</td>
                    <td>
                        <div class="btn-group">
                        <a href="edit/{{ $barang->id }}" class="btn btn-warning btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .80rem;">Ubah</a>
                        <a href="delete/{{ $barang->id }}" class="btn btn-danger btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .80rem;" id="delete-btn">Hapus</a>
                        </div>
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
            <tbody id="Content" class="searchdata">

            </tbody>
        </table>
        <form action="{{ url('insert') }}" method="POST" class="tambahForm">
            @csrf
            <!-- Modal -->
            <div class="modal fade mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                <div class="modal-content bg-dark">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5 " id="tambahModalLabel" style="color: #F6F6C9">Tambah Barang</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="namaBarang" class="form-label" style="color: #F6F6C9">Nama Barang</label>
                            <input type="text" class="form-control" id="namaBarang" name="namabarang" style="text-align: center">
                        </div>
                        <div class="mb-3">
                            <label for="hargaBarang" class="form-label" style="color: #F6F6C9">Harga Barang</label>
                            <input type="number" class="form-control" id="hargaBarang" name="hargabarang">
                        </div>
                        <div class="mb-3">
                            <label for="jumlahBarang" class="form-label" style="color: #F6F6C9">Jumlah Barang</label>
                            <input type="number" class="form-control" id="jumlahBarang" name="jumlahbarang">
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" id="success-btn">Tambah Barang</button>
                    </div>
                </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $('#search').on('keyup', function() {
        $value = $(this).val();
        if($value)
        {
            $('.alldata').hide();
            $('.searchdata').show();
        }else
        {
            $('.alldata').show();
            $('.searchdata').hide();

        }
        $.ajax({
            type:'get',
            url:'{{ URL::to('search') }}',
            data:{'search':$value},

            success:function(data)
            {
                console.log(data);
                $('#Content').html(data);
            }
        });
    })
</script>
{{-- <script type="text/javascript">
    $(function() {

$('.tambahBarang').on('click', function(){
  $('#tambahModalLabel').html('Tambah Barang');
  $('.modal-footer button[type=submit]').html('Tambah Barang')
})

    $('.ubahBarang').on('click', function() {
  $('#tambahModalLabel').html('Ubah Barang');
  $('.modal-footer button[type=submit]').html('Ubah Barang')
  $('.tambahForm').attr('action', '{{ URL::to('update') }}')
  const id = $(this).data('id');
  $.ajax({
    url: '{{ URL::to('update') }} ',
    data: {id : id},
    method: 'post',
    dataType: 'json',
    success: function(data){
        console.log(data);
      $('#namaBarang').val(data.namabarang);
      $('#hargaBarang').val(data.hargabarang);
      $('#jumlahBarang').val(data.jumlahbarang);

    }
  })
});
}
);
</script> --}}
@endsection
