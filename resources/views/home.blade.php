<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/mystyle.css">
    <title>JD RESTO | Home</title>
</head>

<body style="font-family: 'Poppins', sans-serif;">
    <!-- Container Hero -->
    <div id="containerHero" class="container d-flex">
        <div class="mx-auto">
            <div class="text-center">
                <div class="col-12 mb-4 colhero">
                    <img src="/img/hero.jpg" class="herologo" alt="" width="650" height="170">
                </div>
                <div class="col-12">
                    <button id="orderNow" class="btn btn-primary text-white"
                        style="padding-left: 120px; padding-right: 120px;">Pesan Sekarang!</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Container Pesanan -->
    <div id="containerOrder" class="container d-none">
        <div class="mx-auto">
            <div class="text-center">
                <div class="row">
                    <div class="col-12 mt-1 mb-5">
                        <img src="/img/hero.jpg" alt="" width="350" height="90">
                    </div>
                    <div class="col-6 mx-auto mt-5">
                        <div class="card border border-2 border-primary"
                            style="padding-top: 175px; padding-bottom: 175px;">
                            <button id="newOrder" class="btn mx-auto text-center mb-5">
                                <i class="fa-sharp fa-solid fa-cart-shopping text-primary" style="font-size: 85px;"></i>
                                <h4 class="text-primary mt-5">Pesanan Baru</h4>
                            </button>
                        </div>
                    </div>
                    <div class="col-6 mx-auto mt-5">
                        <div class="card">
                            <div class="card border border-2 border-primary"
                                style="padding-top: 175px; padding-bottom: 175px;">
                                <button class="btn mx-auto text-center mb-5">
                                    <i class="fa-sharp fa-solid fa-cart-plus text-primary" style="font-size: 85px;"></i>
                                    <h4 class="text-primary mt-5">Tambah Pesanan</h4>
                                </button>
                            </div>
                        </div>
                    </div>
                    <button id="backToHome" class="btn btn-primary" style="margin-top: 250px; margin-bottom: 80px;">
                        <h4 class="text-center text-white">
                            <i class="fa-solid fa-arrow-left"></i>
                            Kembali
                        </h4>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Container Pesanan Baru --}}
    <div id="containerNewOrder" class="container d-none">
        <div class="mx-auto">
            <div class="text-center">
                <div class="row">
                    <div class="col-12 mt-1 mb-5">
                        <img src="/img/hero.jpg" alt="" width="350" height="90">
                    </div>
                    <div class="col-6 mx-auto mt-5">
                        <div class="card border border-2 border-primary"
                            style="padding-top: 175px; padding-bottom: 175px;">
                            <button id="eatInHere" class="btn mx-auto text-center mb-5">
                                <i class="fa-solid fa-arrow-down text-primary" style="font-size: 85px;"></i>
                                <h4 class="text-primary mt-5">Makan Disini</h4>
                            </button>
                        </div>
                    </div>
                    <div class="col-6 mx-auto mt-5">
                        <div class="card">
                            <div class="card border border-2 border-primary"
                                style="padding-top: 175px; padding-bottom: 175px;">
                                <button class="btn mx-auto text-center mb-5">
                                    <i class="fa-sharp fa-solid fa-house text-primary" style="font-size: 85px;"></i>
                                    <h4 class="text-primary mt-5">Bawa Pulang</h4>
                                </button>
                            </div>
                        </div>
                    </div>
                    <button id="backToOrder" class="btn btn-primary" style="margin-top: 250px; margin-bottom: 80px;">
                        <h4 class="text-center text-white">
                            <i class="fa-solid fa-arrow-left"></i>
                            Kembali
                        </h4>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Makan Disini --}}
    <div id="containerEatInHere" class="container d-none">
        <div class="mx-auto">
            <div class="">
                <div class="row">
                    <div class="col-12 mt-1 mb-5 text-center">
                        <img src="/img/hero.jpg" alt="" width="350" height="90">
                    </div>
                    <div class="col-12">
                        <div class="card p-3 border-primary" style="margin-top: 180px">
                            <div class="mb-3">
                                <label for="name" class="form-label text-primary text-start">Nama :</label>
                                <input id="name" name="name" type="text"
                                    class="form-control border-primary text-primary" placeholder="Masukkan Nama Anda">
                            </div>
                            <div class="mb-3">
                                <label for="tableNumber" class="form-label text-primary text-start">Nomor Meja :</label>
                                <select name="table" id="tableNumber" class="form-control text-primary">
                                    <option value="">Masukkan Nomor Meja Anda</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#modalMenu" style="padding-left: 280px; padding-right: 295px;">
                                    <h6 class="text-center">Pilih Menu</h6>
                                </button>
                                {{-- Modal Menu --}}
                                <div class="modal fade" id="modalMenu" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary text-white">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="backToOrder2" class="btn btn-primary" style="margin-top: 442px;">
                        <h4 class="text-center text-white">
                            <i class="fa-solid fa-arrow-left"></i>
                            Kembali
                        </h4>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Container Tambah Pesanan --}}
    
    {{-- <script src="https://kit.fontawesome.com/0661b15b8c.js" crossorigin="anonymous"></script> --}}
    <script src="/js/jquery.min.js"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
    <script src="/js/myscript.js"></script>
    <script src="/js/bootstrap.js"></script>
</body>

</html>
