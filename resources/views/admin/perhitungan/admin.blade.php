@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Admin</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID User</th>
                                <th>Pendidikan Formal</th>
                                <th>Pendidikan Non Formal</th>
                                <th>Usia</th>
                                <th>Pengalaman Kerja</th>
                                <th>Mengoperasikan Komputer</th>
                                <th>Jarak C1</th>
                                <th>Jarak C2</th>
                                <th>Iterasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin as $min)
                                <tr>
                                    <td>{{ $min->id_pelamar }}</td>
                                    <td>{{ $min->pend_formal }}</td>
                                    <td>{{ $min->pend_nonformal }}</td>
                                    <td>{{ $min->usia }}</td>
                                    <td>{{ $min->lama_kerja }}</td>
                                    <td>{{ $min->komp }}</td>
                                    <td>{{ $min->jarak_c1 }}</td>
                                    <td>{{ $min->jarak_c2 }}</td>
                                    <td>{{ $min->iterasi }}</td>
                                    {{-- <td>{{ date('d F Y', strtotime($min->created_at)) }}</td> --}}

                                    <td><a href="{{ url('#' . $min->id_pelamar) }}" class="btn-sm btn-primary">
                                            Detail</a>

                                        <a href="#" class="btn-sm btn-danger delete"
                                            data-id="{{ $min->id }}">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
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
                        window.location = "Data_Admin/" + id + ""
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
