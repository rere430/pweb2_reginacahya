<!doctype html>
<html lang="en">

<head>
    @include('layout.head')

</head>

<body>
    @include('layout.sidebar')
    <!-- <section class="content"> -->
    <!-- <div class="container col-md-6 bg-secondary mt-5" style="border-radius: 10px 10px"> -->
    <div class="main-content">
        <section class="section">
            <div class="row ">
                <div class="col-md-12">
                    <div class="card mt-3 mb-3">
                        <div class="card-header">
                            <center>
                                <h3 class="card-title">TAMBAH DATA BAHAN PRAKTIKUM</h3>
                            </center>

                        </div>

                        <div class="card card-success m-2">
                            <div class="card-body">
                                <form action="store" method="post">
                                    @csrf
                                    <div class="mb-2">
                                        <label for="exampleInputNama" class="form-label">ID Bahan</label>
                                        <input type="text" class="form-control" name="id" id="exampleInputNama" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="exampleInputNama" class="form-label">Nama Bahan</label>
                                        <input type="text" class="form-control" name="nama_bhp" id="exampleInputNama" required>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleInputNama" class="form-label">Nama Pengampu</label>
                                            <input type="text" class="form-control" name="nama_pengampu" id="exampleInputNama" required>
                                        </div>
                                        <div class="col">
                                            <label for="exampleInputNama" class="form-label">Jenis Praktek</label>
                                            <input type="text" class="form-control" name="jenis_praktek" id="exampleInputNama" required>
                                        </div>
                                    </div>

                                    <div class=" mb-2">
                                        <label for="exampleInputNama" class="form-label">Volume</label>
                                        <input type="text" class="form-control" name="volume" id="exampleInputNama" required>
                                    </div>

                                    <div class=" mb-2">
                                        <label for="exampleInputNama" class="form-label">Jumlah</label>
                                        <input type="text" class="form-control" name="jumlah" id="exampleInputNama" required>
                                    </div>

                                    <br>
                                    <a href="bahan" type="button" name="submit" class="btn btn-secondary"><i class="fas fa-angle-double-left"></i> Kembali</a>
                                    <button type="submit" name="submit" class="btn btn-primary float-end"><i class="fas fa-save"></i> Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
</body>