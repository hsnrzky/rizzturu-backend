<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <link rel="shortcut icon" href="img/logo.svg" type="image/svg+xml">
    <title>{{ $title }}</title>
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
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #BAD1C2">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><?xml version="1.0" encoding="UTF-8"?>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" width="30px" height="30px" class="me-1">
                <g id="surface58131629">
                <path style=" stroke:none;fill-rule:nonzero;fill:#4FA095;fill-opacity:1;" d="M 24.503906 4.007812 C 23.980469 4.007812 23.453125 4.113281 22.964844 4.316406 L 4.222656 11.648438 C 3.480469 11.960938 3 12.683594 3 13.488281 C 3 14.292969 3.476562 15.019531 4.242188 15.34375 L 23.234375 22.777344 C 23.609375 22.933594 24.015625 23.015625 24.414062 23.015625 C 24.804688 23.015625 25.1875 22.9375 25.539062 22.789062 L 45.769531 15.332031 C 46.519531 15.019531 47 14.292969 47 13.484375 C 47 12.671875 46.515625 11.949219 45.746094 11.632812 L 26.046875 4.316406 C 25.558594 4.109375 25.03125 4.007812 24.503906 4.007812 Z M 1.996094 17.003906 C 0.941406 17.003906 0 17.855469 0 19.003906 L 0 34.972656 C 0 36.128906 0.953125 36.976562 2.003906 36.976562 C 2.296875 36.976562 2.601562 36.90625 2.894531 36.761719 L 20.878906 27.835938 C 22.410156 27.070312 22.332031 24.859375 20.753906 24.199219 L 2.769531 17.15625 C 2.515625 17.050781 2.253906 17.003906 1.996094 17.003906 Z M 48.003906 17.003906 C 47.761719 17.003906 47.515625 17.046875 47.273438 17.140625 L 28.273438 24.503906 C 27.503906 24.808594 27 25.542969 27 26.367188 L 27 42.996094 C 27 44.144531 27.941406 45 29 45 C 29.238281 45 29.484375 44.957031 29.730469 44.859375 L 48.730469 37.425781 C 49.496094 37.125 50 36.386719 50 35.5625 L 50 19.003906 C 50 17.855469 49.058594 17 48.003906 17 Z M 48.003906 17.003906 "/>
                </g>
                </svg>
                Gudang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title) === "Gudang" ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title) === "Daftar Barang" ? 'active' : '' }}" href="/barang">Daftar Barang</a>
                    </li>
                </ul>
                <div class="d-flex me-5">
                    {{-- <a href="https://www.instagram.com/hsnrzky" target="_blank" class="nav-link" style="color: #dc3545; font-weight:650 ">TuruDX</a> --}}
                    <label class="switch">
                        <input type="checkbox" id='input' >
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        @yield('content')
    </div>
    <div style="bottom: 0; position:fixed; right:0;"><a target="_blank" href="https://icons8.com/icon/110899/airtable" style="font-size: 12px">Airtable</a><span style="font-size: 12px; color:blanchedalmond"> icon by </span><a target="_blank" href="https://icons8.com" style="font-size: 12px">Icons8</a>
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
