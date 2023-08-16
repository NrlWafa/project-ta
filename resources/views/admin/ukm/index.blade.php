@extends('admin.layout')

@section('content')
    <div class="content-header">

        <div>
            <div class="container-fluid">
                <div class="pagetitle">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="pb-2">
                            <a href="Data_UKM/create" class="btn btn-primary"><i class="bi bi-plus"></i>
                                Tambah Data UKM</a>
                            <a href="#" target="_blank" class="btn btn-success"><i class="bi bi-printer"></i>
                                Cetak Data</a>
                        </div>
                    </div>
                </div><!-- End Page Title -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Masuk</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama UKM</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ukm as $ukm)
                                    <tr>
                                        <td>{{ $ukm->id }}</td>
                                        <td>{{ $ukm->ukm }}</td>
                                        <td>{{ $ukm->deskripsi }}</td>
                                        <td>
                                            <a href="{{ url('Data_UKM/' . $ukm->id . '/edit') }}"
                                                class="btn-ukm btn-success">Edit</a>
                                            <a href="#" class="btn-ukm btn-danger delete"
                                                data-id="{{ $ukm->id }}">Hapus</a>
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
                            window.location = "Data_UKM/" + id + ""
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
