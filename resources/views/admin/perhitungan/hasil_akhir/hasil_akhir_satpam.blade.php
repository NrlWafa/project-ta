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
                                <th>ID User</th>
                                <th>Nama</th>
                                <th>Pendidikan Formal</th>
                                <th>Pendidikan Non Formal</th>
                                <th>Usia</th>
                                <th>Pengalaman Kerja</th>
                                <th>Pendidikan Satpam</th>
                                <th>Tinggi Badan</th>
                                <th>Jarak C1</th>
                                <th>Jarak C2</th>
                                <th>Keputusan</th>
                                <th>Hasil Akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $lastIterationData = []; // Menyimpan data dari setiap iterasi
                                
                                while ($thresholdC1_New != $thresholdC1 && $thresholdC2_New != $thresholdC2) {
                                    $j = 0;
                                    $k = 0;
                                
                                    if ($iterasi != 1) {
                                        $thresholdC1 = $thresholdC1_New;
                                    }
                                
                                    // mendefinisikan variabel-variabel ini dengan menginisialisasi array kosong sebelum penggunaannya
                                    $pend_formal_C2 = [];
                                    $pend_nonformal_C2 = [];
                                    $usia_C2 = [];
                                    $lama_kerja_C2 = [];
                                    $satpam_C2 = [];
                                    $tinggi_badan_C2 = [];
                                
                                    // kondisi untuk memeriksa apakah array tersebut kosong atau tidak.
                                    // Jika array kosong, maka berikan nilai default sebelum melakukan perhitungan
                                    // akan ada nilai default [0] yang diberikan jika array tersebut kosong, sehingga pembagian tidak akan terjadi dengan nol.
                                    if (empty($pend_formal_C1)) {
                                        $pend_formal_C1 = [0];
                                    }
                                    if (empty($pend_nonformal_C1)) {
                                        $pend_nonformal_C1 = [0];
                                    }
                                    if (empty($usia_C1)) {
                                        $usia_C1 = [0];
                                    }
                                    if (empty($lama_kerja_C1)) {
                                        $lama_kerja_C1 = [0];
                                    }
                                    if (empty($satpam_C1)) {
                                        $satpam_C1 = [0];
                                    }
                                    if (empty($tinggi_badan_C1)) {
                                        $tinggi_badan_C1 = [0];
                                    }
                                
                                    if (empty($pend_formal_C2)) {
                                        $pend_formal_C2 = [0];
                                    }
                                    if (empty($pend_nonformal_C2)) {
                                        $pend_nonformal_C2 = [0];
                                    }
                                    if (empty($usia_C2)) {
                                        $usia_C2 = [0];
                                    }
                                    if (empty($lama_kerja_C2)) {
                                        $lama_kerja_C2 = [0];
                                    }
                                    if (empty($satpam_C2)) {
                                        $satpam_C2 = [0];
                                    }
                                    if (empty($tinggi_badan_C2)) {
                                        $tinggi_badan_C2 = [0];
                                    }
                                
                                    $lastIterationData = []; // Reset the data for each iteration
                                
                                    foreach ($satpam as $row) {
                                        $jarakC1 = pow($row['pend_formal'] - $nilaiC1[0], 2) + pow($row['pend_nonformal'] - $nilaiC1[1], 2) + pow($row['usia'] - $nilaiC1[2], 2) + pow($row['lama_kerja'] - $nilaiC1[3], 2) + pow($row['satpam'] - $nilaiC1[4], 2) + pow($row['tinggi_badan'] - $nilaiC1[5], 2);
                                        $jarakC2 = pow($row['pend_formal'] - $nilaiC2[0], 2) + pow($row['pend_nonformal'] - $nilaiC2[1], 2) + pow($row['usia'] - $nilaiC2[2], 2) + pow($row['lama_kerja'] - $nilaiC2[3], 2) + pow($row['satpam'] - $nilaiC2[4], 2) + pow($row['tinggi_badan'] - $nilaiC2[5], 2);
                                
                                        if (round(sqrt($jarakC1), 3) <= round(sqrt($jarakC2), 3)) {
                                            $pend_formal_C1[$j] = $row['pend_formal'];
                                            $pend_nonformal_C1[$j] = $row['pend_nonformal'];
                                            $usia_C1[$j] = $row['usia'];
                                            $lama_kerja_C1[$j] = $row['lama_kerja'];
                                            $satpam_C1[$j] = $row['satpam'];
                                            $tinggi_badan_C1[$j] = $row['tinggi_badan'];
                                            $status[$i - 1] = round(sqrt($jarakC1), 3);
                                            $j++;
                                            $keputusan = 'Tidak Memenuhi Kualifikasi';
                                        } else {
                                            $pend_formal_C2[$k] = $row['pend_formal'];
                                            $pend_nonformal_C2[$k] = $row['pend_nonformal'];
                                            $usia_C2[$k] = $row['usia'];
                                            $lama_kerja_C2[$k] = $row['lama_kerja'];
                                            $satpam_C2[$k] = $row['satpam'];
                                            $tinggi_badan_C2[$k] = $row['tinggi_badan'];
                                            $status[$i - 1] = round(sqrt($jarakC2), 3);
                                            $k++;
                                            $keputusan = 'Memenuhi Kualifikasi';
                                        }
                                
                                        // simpan data dari setiap iterasi
                                        $lastIterationData[] = [
                                            'i' => $i,
                                            'id_user' => $row['id_user'],
                                            'nama_lengkap' => $row['nama_lengkap'],
                                            'pend_formal' => $row['pend_formal'],
                                            'pend_nonformal' => $row['pend_nonformal'],
                                            'usia' => $row['usia'],
                                            'lama_kerja' => $row['lama_kerja'],
                                            'satpam' => $row['satpam'],
                                            'tinggi_badan' => $row['tinggi_badan'],
                                            'jarakC1' => round(sqrt($jarakC1), 3),
                                            'jarakC2' => round(sqrt($jarakC2), 3),
                                            'status' => $status[$i - 1],
                                            'keputusan' => $keputusan,
                                            'iterasi' => $iterasi,
                                        ];
                                
                                        $i = $i + 1;
                                    }
                                
                                    $iterasi = $iterasi + 1;
                                    $pend_formal_C1_bobot = round(array_sum($pend_formal_C1) / count($pend_formal_C1), 1);
                                    $pend_nonformal_C1_bobot = round(array_sum($pend_nonformal_C1) / count($pend_nonformal_C1), 1);
                                    $usia_C1_bobot = round(array_sum($usia_C1) / count($usia_C1), 1);
                                    $lama_kerja_C1_bobot = round(array_sum($lama_kerja_C1) / count($lama_kerja_C1), 1);
                                    $satpam_C1_bobot = round(array_sum($satpam_C1) / count($satpam_C1), 1);
                                    $tinggi_badan_C1_bobot = round(array_sum($tinggi_badan_C1) / count($tinggi_badan_C1), 1);
                                
                                    $nilaiC1 = [$pend_formal_C1_bobot, $pend_nonformal_C1_bobot, $usia_C1_bobot, $lama_kerja_C1_bobot, $satpam_C1_bobot, $tinggi_badan_C1_bobot];
                                    $thresholdC1_New = round(($pend_formal_C1_bobot + $pend_nonformal_C1_bobot + $usia_C1_bobot + $lama_kerja_C1_bobot + $satpam_C1_bobot + $tinggi_badan_C1_bobot) / 6, 1);
                                
                                    $pend_formal_C2_bobot = round(array_sum($pend_formal_C2) / count($pend_formal_C2), 1);
                                    $pend_nonformal_C2_bobot = round(array_sum($pend_nonformal_C2) / count($pend_nonformal_C2), 1);
                                    $usia_C2_bobot = round(array_sum($usia_C2) / count($usia_C2), 1);
                                    $lama_kerja_C2_bobot = round(array_sum($lama_kerja_C2) / count($lama_kerja_C2), 1);
                                    $satpam_C2_bobot = round(array_sum($satpam_C2) / count($satpam_C2), 1);
                                    $tinggi_badan_C2_bobot = round(array_sum($tinggi_badan_C2) / count($tinggi_badan_C2), 1);
                                    $nilaiC2 = [$pend_formal_C2_bobot, $pend_nonformal_C2_bobot, $usia_C2_bobot, $lama_kerja_C2_bobot, $satpam_C2_bobot, $tinggi_badan_C2_bobot];
                                    $thresholdC2_New = round(($pend_formal_C2_bobot + $pend_nonformal_C2_bobot + $usia_C2_bobot + $lama_kerja_C2_bobot + $satpam_C2_bobot + $tinggi_badan_C2_bobot) / 6, 1); // Sesuaikan dengan jumlah kualifikasi yg ad di excel
                                    if ($iterasi == 6) {
                                        // coding untuk mengatasi iterasi yang terlalu panjang
                                        $thresholdC1 = 1;
                                        $thresholdC1_New = 1;
                                        $thresholdC2 = 1;
                                        $thresholdC2_New = 1;
                                        //unset($pend_formal_C1);
                                    }
                                }
                                
                                // Menampilkan data dari iterasi terakhir dalam tabel
                                foreach ($lastIterationData as $data) {
                                    echo '<tr>
                                        <td>' .
                                        $data['i'] .
                                        '</td>
                                        <td>' .
                                        $data['id_user'] .
                                        '</td>
                                        <td>' .
                                        $data['nama_lengkap'] .
                                        '</td>
                                        <td>' .
                                        $data['pend_formal'] .
                                        '</td>
                                        <td>' .
                                        $data['pend_nonformal'] .
                                        '</td>
                                        <td>' .
                                        $data['usia'] .
                                        '</td>
                                        <td>' .
                                        $data['lama_kerja'] .
                                        '</td>
                                        <td>' .
                                        $data['satpam'] .
                                        '</td>
                                        <td>' .
                                        $data['tinggi_badan'] .
                                        '</td>
                                        <td>' .
                                        $data['jarakC1'] .
                                        '</td>
                                        <td>' .
                                        $data['jarakC2'] .
                                        '</td>
                                        <td>' .
                                        $data['status'] .
                                        '</td>
                                        <td>' .
                                        $data['keputusan'] .
                                        '</td>
                                        </tr>';
                                }
                            @endphp
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <a href="{{ url('Data_Satpam') }}" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
