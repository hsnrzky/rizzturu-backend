<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('img/logo.svg') }}" type="image/svg+xml">
    <title>Ubah Barang</title>
    <style>
        .custom-shape-divider-bottom-1666701368 {
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
            position:fixed;
            z-index: -10;
        }

        .custom-shape-divider-bottom-1666701368 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 115px;
        }

        .custom-shape-divider-bottom-1666701368 .shape-fill {
            fill: #BAD1C2;
        }
        .body {
            background-color: #F6F6C9;
        }
        .dark {
            background-color: #153462;
            color: #F6F6C9
        }
        .switch {
            position: relative;
            display:inline-block;
            width: 50px;
            height: 24px;
        }
        .switch input {
            opacity: 0;
            height: 0;
            width: 0;
        }
        .slider {
            position: absolute;
            top: 0;
            left: 0;
            cursor: pointer;
            right: 0;
            bottom: 0;
            background-color: #4FA095;
            border-radius: 34px;
            -webkit-transition: .4s;
            transition:.4s;
        }
        .slider:before {
            position: absolute;
            content: "";
            left: 3px;
            bottom: 3px;
            height: 18px;
            width: 18px;
            border-radius: 50%;
            background-color: #6d7889;
            -webkit-transition:.4s;
            transition: .4s;
        }
        input:checked+.slider {
            background-color: #F6F6C9;
        }
        input:focus+.slider {
            box-shadow: 0 0 1px #F6F6C9;
        }
        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

    </style>
</head>
<body>
<div class="container-sm">
<div class="container-xl mt-5">
    <div class="col-10 mx-auto text-center">
        <div class="alert " style="background-color: #BAD1C2">
        <h3 style="color: black">Ubah Barang</h3>
        <label class="switch">
            <input type="checkbox" id='input' >
            <span class="slider"></span>
        </label>
        </div>
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
                <div class="modal-footer">
                <a href="/barang" class="btn btn-danger me-3">Back</a>
                <button type="submit" class="btn btn-success " id="update-btn">Ubah</button>
                </div>
                @endforeach
              </form>
        </div>
    </div>
</div>
</div>
</div>
<div class="custom-shape-divider-bottom-1666701368">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
