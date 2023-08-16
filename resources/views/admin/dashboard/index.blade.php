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
                        <span class="info-box-text">Total Data Masuk</span>
                        {{-- <span class="info-box-number">{{ $user }}</span> --}}

                        <h6>{{ $surat_masuk_count }}</h6>
                        {{-- <span><a href="{{ route('Masuk.index') }}">Kelola</a></span> --}}

                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->

            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Data keluar</span>
                        {{-- <span class="info-box-number">{{ $admin }}</span> --}}

                        <h6>{{ $surat_keluar_count }}</h6>
                        {{-- <span><a href="{{ route('Data_Keluar.index') }}"></a></span> --}}
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
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
