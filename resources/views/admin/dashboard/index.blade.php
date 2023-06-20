@extends('admin.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0">Dashboard</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-calendar"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Date</span>
                        <span class="info-box-number">
                            <?php
                            setlocale(LC_ALL, 'IND');
                            $date = strftime('%A, %d %b %Y');
                            echo $date;
                            ?>
                            {{-- <small>%</small> --}}
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-clock"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Time</span>
                        <span class="info-box-number time_interval"></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total User</span>
                        {{-- <span class="info-box-number"> {{ $user }} </span> --}}
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Admin</span>
                        {{-- <span class="info-box-number"> {{ $admin }} </span> --}}
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Pelamar</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID User</th>
                            <th>Nama</th>
                            <th>Formasi Pekerjaan</th>
                            <th>No Telp</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pelamar as $pel)
                            <tr>
                                <td>{{ $pel->id_user }}</td>
                                <td>{{ $pel->nama_lengkap }}</td>
                                <td>{{ $pel->jabatan_lamaran }}</td>
                                <td>{{ $pel->no_hp }}</td>
                                <td>{{ date('d F Y', strtotime($pel->created_at)) }}</td>
                                <td><a href="{{ url('Dashboard_Detail_Pelamar/' . $pel->id) }}"
                                        class="btn-sm btn-primary">Lihat
                                        Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
    @endsection
    @section('script')
        <script>
            $(function() {
                function time() {
                    var d = new Date();
                    var s = d.getSeconds();
                    var m = d.getMinutes();
                    var h = d.getHours();
                    $('.time_interval').text(("0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(
                        -2));
                }
                time()
                setInterval(time, 1000);
            });
        </script>
    @endsection
