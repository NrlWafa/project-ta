@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Pelamar</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Formasi Pekerjaan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($user as $item) --}}
                            <tr>
                                <td><a href="Detail-Data-Pelamar" class="btn-sm btn-primary">Lihat
                                        Detail</a>
                                    <a href="" class="btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
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
