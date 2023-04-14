<!-- <table border="2">
    <tr>
        <th>ID</th>
        <th>NAMA BAHAN</th>
        <th>NAMA PENGAMPU</th>
        <th>JENIS PRAKTEK</th>
        <th>VOLUME</th>
        <th>JUMLAH</th>
    </tr>
    @foreach($bahan as $b)
    <tr>
        <th>{{$b->id}}</th>
        <th>{{$b->nama_bhp}}</th>
        <th>{{$b->nama_pengampu}}</th>
        <th>{{$b->jenis_praktek}}</th>
        <th>{{$b->volume}}</th>
        <th>{{$b->jumlah}}</th>
    </tr>
    @endforeach
</table> -->

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
                <h1>Data Bahan Praktikum Program Studi PPA</h1>
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
                                            <button type="button" class="btn btn-secondary waves-effect"> <a href="create"> + Tambah Data Bahan</a></button>
                                        </div>
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                <th>ID</th>
                                                <th>NAMA BAHAN</th>
                                                <th>NAMA PENGAMPU</th>
                                                <th>JENIS PRAKTEK</th>
                                                <th>VOLUME</th>
                                                <th>JUMLAH</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            @foreach($bahan as $b)
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-center">
                                                <td>{{$b->id}}</td>
                                                <td>{{$b->nama_bhp}}</td>
                                                <td>{{$b->nama_pengampu}}</td>
                                                <td>{{$b->jenis_praktek}}</td>
                                                <td>{{$b->volume}}</td>
                                                <td>{{$b->jumlah}}</td>
                                                <td>
                                                    <a href="/bahan/{{$b->id}}/edit" type="button" class="btn btn-primary waves-effect">Edit</a>
                                                </td>
                                                <td>
                                                    <form onsubmit="return confirm('Yakin ingin menghapus?')" class="d-inline" action="{{'/bahan/'.$b->id}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger waves-effect form-control" data-toggle="modal" data-target="#smallModal">Hapus</button>
                                                        {{-- <button type="button" class="btn btn-danger waves-effect">Hapus</button> --}}
                                                    </form>
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