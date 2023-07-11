@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Operator</h3>

                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <td><a href="{{ url('Data_Akhir_Operator') }}" class="btn-sm btn-primary">
                            Hasil Akhir</a>
                    </td>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID User</th>
                                <th>Nama</th>
                                <th>Formal</th>
                                <th>Non Formal</th>
                                <th>Usia</th>
                                <th>Pengalaman Kerja</th>
                                <th>Jarak C1</th>
                                <th>Jarak C2</th>
                                <th>Keputusan</th>
                                <th>Iterasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                while ($thresholdC1_New != $thresholdC1 && $thresholdC2_New != $thresholdC2) {
                                    $j = 0;
                                    $k = 0;
                                
                                    if ($iterasi != 1) {
                                        $thresholdC1 = $thresholdC1_New;
                                    }
                                
                                    foreach ($operator as $row) {
                                        $jarakC1 = pow($row['pend_formal'] - $nilaiC1[0], 2) + pow($row['pend_nonformal'] - $nilaiC1[1], 2) + pow($row['usia'] - $nilaiC1[2], 2) + pow($row['lama_kerja'] - $nilaiC1[3], 2) + pow($row['komp'] - $nilaiC1[4], 2);
                                        $jarakC2 = pow($row['pend_formal'] - $nilaiC2[0], 2) + pow($row['pend_nonformal'] - $nilaiC2[1], 2) + pow($row['usia'] - $nilaiC2[2], 2) + pow($row['lama_kerja'] - $nilaiC2[3], 2) + pow($row['komp'] - $nilaiC2[4], 2);
                                
                                        if (round(sqrt($jarakC1), 3) <= round(sqrt($jarakC2), 3)) {
                                            $pend_formal_C1[$j] = $row['pend_formal'];
                                            $pend_nonformal_C1[$j] = $row['pend_nonformal'];
                                            $usia_C1[$j] = $row['usia'];
                                            $lama_kerja_C1[$j] = $row['lama_kerja'];
                                            $komp_C1[$j] = $row['komp'];
                                            $status[$i - 1] = round(sqrt($jarakC1), 3);
                                            $j++;
                                            $keputusan = 'Tidak Memenuhi Kualifikasi';
                                        } else {
                                            $pend_formal_C2[$k] = $row['pend_formal'];
                                            $pend_nonformal_C2[$k] = $row['pend_nonformal'];
                                            $usia_C2[$k] = $row['usia'];
                                            $lama_kerja_C2[$k] = $row['lama_kerja'];
                                            $komp_C2[$k] = $row['komp'];
                                            $status[$i - 1] = round(sqrt($jarakC2), 3);
                                            $k++;
                                            $keputusan = 'Memenuhi Kualifikasi';
                                        }
                                
                                        echo '
                                        <tr>
                                            <td>' .
                                            $i .
                                            '</td>
                                            <td>' .
                                            $row['id_user'] .
                                            '</td>
                                            <td>' .
                                            $row['nama_lengkap'] .
                                            '</td>                            
                                             <td>' .
                                            $row['pend_formal'] .
                                            '</td>
                                             <td>' .
                                            $row['pend_nonformal'] .
                                            '</td>
                                            <td>' .
                                            $row['usia'] .
                                            '</td>
                                            <td>' .
                                            $row['lama_kerja'] .
                                            '</td>
                                            <td>' .
                                            $row['komp'] .
                                            '</td>
                                            <td>' .
                                            round(sqrt($jarakC1), 3) .
                                            '</td>
                                            <td>' .
                                            round(sqrt($jarakC2), 3) .
                                            '</td>
                                            <td>' .
                                            $status[$i - 1] .
                                            '</td>
                                            <td>' .
                                            $iterasi .
                                            '</td>
                                        </tr>';
                                        $i = $i + 1;
                                    }
                                
                                    $iterasi = $iterasi + 1;
                                    $pend_formal_C1_bobot = round(array_sum($pend_formal_C1) / count($pend_formal_C1), 1);
                                    $pend_nonformal_C1_bobot = round(array_sum($pend_nonformal_C1) / count($pend_nonformal_C1), 1);
                                    $usia_C1_bobot = round(array_sum($usia_C1) / count($usia_C1), 1);
                                    $lama_kerja_C1_bobot = round(array_sum($lama_kerja_C1) / count($lama_kerja_C1), 1);
                                    $komp_C1_bobot = round(array_sum($komp_C1) / count($komp_C1), 1);
                                    $nilaiC1 = [$pend_formal_C1_bobot, $pend_nonformal_C1_bobot, $usia_C1_bobot, $lama_kerja_C1_bobot, $komp_C1_bobot];
                                    $thresholdC1_New = round(($pend_formal_C1_bobot + $pend_nonformal_C1_bobot + $usia_C1_bobot + $lama_kerja_C1_bobot + $komp_C1_bobot) / 5, 1);
                                
                                    $pend_formal_C2_bobot = round(array_sum($pend_formal_C2) / count($pend_formal_C2), 1);
                                    $pend_nonformal_C2_bobot = round(array_sum($pend_nonformal_C2) / count($pend_nonformal_C2), 1);
                                    $usia_C2_bobot = round(array_sum($usia_C2) / count($usia_C2), 1);
                                    $lama_kerja_C2_bobot = round(array_sum($lama_kerja_C2) / count($lama_kerja_C2), 1);
                                    $komp_C2_bobot = round(array_sum($komp_C2) / count($komp_C2), 1);
                                    $nilaiC2 = [$pend_formal_C2_bobot, $pend_nonformal_C2_bobot, $usia_C2_bobot, $lama_kerja_C2_bobot, $komp_C2_bobot];
                                    $thresholdC2_New = round(($pend_formal_C2_bobot + $pend_nonformal_C2_bobot + $usia_C2_bobot + $lama_kerja_C2_bobot + $komp_C2_bobot) / 5, 1); // Sesuaikan dengan jumlah kualifikasi yg ad di excel
                                    if ($iterasi == 6) {
                                        // coding untuk mengatasi iterasi yang terlalu panjang
                                        $thresholdC1 = 1;
                                        $thresholdC1_New = 1;
                                        $thresholdC2 = 1;
                                        $thresholdC2_New = 1;
                                        //unset($pend_formal_C1);
                                    }
                                }
                            @endphp
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
                        window.location = "Data_Operator/" + id + ""
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
