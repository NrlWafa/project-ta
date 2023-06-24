@extends('admin.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Pengguna</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>E-Mail</th>
                                <th>Level</th>
                                <th>Verifikasi E-mail</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($user as $us)
                                <tr>

                                    <td>{{ $us->id }}</td>
                                    <td>{{ $us->nama }}</td>
                                    <td>{{ $us->email }}</td>
                                    <td>{{ $us->level_name }}</td>
                                    <td>
                                        @if ($us->email_verified_at)
                                            {{ date('d F Y', strtotime($us->email_verified_at)) }}
                                        @else
                                            Akun Belum Terverifikasi
                                        @endif
                                    </td>


                                    <td>{{ date('d F Y', strtotime($us->created_at)) }}</td>
                                    <td>
                                        <a href="#" class="btn-sm btn-danger delete"
                                            data-id="{{ $us->id }}">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function() {
            $('.delete').click(function() {
                var id = $(this).attr('data-id');
                Swal.fire({
                    title: 'Yakin?',
                    text: "Hapus data ini",
                    icon: 'warning',
                    showCancelButton: true,
                    showConfirmButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = "Data_Pengguna/" + id + ""
                        Swal.fire(
                            'Terhapus!',
                            'Data berhasil terhapus',
                            'success'
                        )
                    }
                })
            })
        })
    </script>
@endsection
