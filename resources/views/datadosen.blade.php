<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
</head>

<body>
    @include('layout.sidebar')
    <!-- Main Content -->

    <div class="main-content">
        <section class="section">
            @if(isset($alert_sukses))
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{$alert_sukses}}
                </div>
            </div>
            @endif
            <div class="section-header">
                <h1>Data Dosen Praktikum PPA</h1>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- <div class="card-header">
                                        <h4>Basic DataTables</h4>
                                    </div> -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <div class="card-header">
                                            <button type="button" class="btn btn-secondary"> <a href="#"> + Tambah Data Bahan</a></button>
                                        </div>
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                <th>ID</th>
                                                <th>NAMA DOSEN</th>
                                                <th>PENGAMPU PRAKTIKUM</th>
                                                <th>PENGAMPU KELAS</th>
                                                <th>JUMLAH SKS</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            @foreach($datadosen as $dtdosen)
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-center">
                                                <td>{{$dtdosen->id}}</td>
                                                <td>{{$dtdosen->nama}}</td>
                                                <td>{{$dtdosen->pengampu_praktek}}</td>
                                                <td>{{$dtdosen->pengampu_kelas}}</td>
                                                <td>{{$dtdosen->jumlahsks}}</td>
                                                <td>
                                                    <a href="#" type="button" class="btn btn-primary waves-effect">Edit</a>
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-danger waves-effect form-control" data-toggle="modal" data-target="#smallModal">Hapus</button>

                                                    <!-- <form onsubmit="return confirm('Yakin ingin menghapus?')" class="d-inline" action="#" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        
                                                        {{-- <button type="button" class="btn btn-danger waves-effect">Hapus</button> --}}
                                                    </form> -->
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/modules/popper.js')}}"></script>
    <script src="{{ asset('assets/modules/tooltip.js')}}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('assets/modules/moment.min.js')}}"></script>
    <script src="{{ asset('assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('assets/modules/simple-weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{ asset('assets/modules/chart.min.js')}}"></script>
    <script src="{{ asset('assets/modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('assets/modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{ asset('assets/modules/summernote/summernote-bs4.js')}}"></script>
    <script src="{{ asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/index-0.js')}}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
</body>

</html>