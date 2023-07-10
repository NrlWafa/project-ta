@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Satpam</h3>

                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                {{-- <th>ID User</th> --}}
                                <th>Nama</th>
                                <th>Formal</th>
                                <th>Non Formal</th>
                                <th>Usia</th>
                                <th>Pengalaman Kerja</th>
                                <th>Pendidikan Satpam</th>
                                <th>Tinggi Badan</th>
                                {{-- <th>Jarak C1</th>
                                <th>Jarak C2</th>
                                <th>Keputusan</th> --}}
                                <th>Hasil Akhir</th>
                                {{-- <th>Iterasi</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($satpam as $i => $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- <td>{{ $row->id_pelamar }}</td> --}}
                                    <td>{{ $row->nama_lengkap }}</td>
                                    <td>{{ $row->pend_formal }}</td>
                                    <td>{{ $row->pend_nonformal }}</td>
                                    <td>{{ $row->usia }}</td>
                                    <td>{{ $row->lama_kerja }}</td>
                                    <td>{{ $row->satpam }}</td>
                                    <td>{{ $row->tinggi_badan }}</td>
                                    {{-- <td>
                                        {{ round(
                                            sqrt(
                                                pow($row->pend_formal - $nilaiC1[0], 2) +
                                                    pow($row->pend_nonformal - $nilaiC1[1], 2) +
                                                    pow($row->usia - $nilaiC1[2], 2) +
                                                    pow($row->lama_kerja - $nilaiC1[3], 2) +
                                                    pow($row->satpam - $nilaiC1[4], 2) +
                                                    pow($row->tinggi_badan - $nilaiC1[5], 2),
                                            ),
                                            3,
                                        ) }}
                                    </td>
                                    <td>
                                        {{ round(
                                            sqrt(
                                                pow($row->pend_formal - $nilaiC2[0], 2) +
                                                    pow($row->pend_nonformal - $nilaiC2[1], 2) +
                                                    pow($row->usia - $nilaiC2[2], 2) +
                                                    pow($row->lama_kerja - $nilaiC2[3], 2) +
                                                    pow($row->satpam - $nilaiC2[4], 2) +
                                                    pow($row->tinggi_badan - $nilaiC2[5], 2),
                                            ),
                                            3,
                                        ) }}
                                    </td> --}}

                                    {{-- Untuk hasil keputusan "Status" --}}
                                    @php
                                        $jarakC1 = pow($row->pend_formal - $nilaiC1[0], 2) + pow($row->pend_nonformal - $nilaiC1[1], 2) + pow($row->usia - $nilaiC1[2], 2) + pow($row->lama_kerja - $nilaiC1[3], 2) + pow($row->satpam - $nilaiC1[4], 2) + pow($row->tinggi_badan - $nilaiC1[5], 2);
                                        $jarakC2 = pow($row->pend_formal - $nilaiC2[0], 2) + pow($row->pend_nonformal - $nilaiC2[1], 2) + pow($row->usia - $nilaiC2[2], 2) + pow($row->lama_kerja - $nilaiC2[3], 2) + pow($row->satpam - $nilaiC2[4], 2) + pow($row->tinggi_badan - $nilaiC2[5], 2);
                                        $statusValue = $jarakC1 <= $jarakC2 ? round(sqrt($jarakC1), 3) : round(sqrt($jarakC2), 3);
                                        if (round(sqrt($jarakC1), 3) <= round(sqrt($jarakC2), 3)) {
                                            $keputusan = 'Tidak Memenuhi Kualifikasi';
                                        } else {
                                            $keputusan = 'Memenuhi Kualifikasi';
                                        }
                                    @endphp
                                    {{-- <td>{{ $statusValue }}</td> --}}

                                    <td>{{ $keputusan }}</td>
                                    {{-- <td>{{ $iterasi }}</td> --}}
                                </tr>
                            @endforeach @php $iterasi++; // Increment penghitung iterasi @endphp
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
                        window.location = "Data_Satpam/" + id + ""
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
