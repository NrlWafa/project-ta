<?php
$servername = "localhost";
$database = "project-ta";
$username = "root";
$password = "";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
//echo "Koneksi berhasil";

//
echo "<table border='1'>
		<thead>
			<tr>
                <th>No</th>
				<th>ID Pelamar</th>
				<th>Formal</th>
				<th>Non-Formal</th>
				<th>Usia</th>
                <th>Lama Kerja</th>
                <th>Satpam</th>
                <th>Tinggi Badan</th>
                <th>Jarak C1</th>
                <th>Jarak C2</th>
                <th>Keputusan</th>
                <th>Iterasi</th>
			</tr>
		</thead>
		<tbody>";

$i = 1;
$j = 0;
$k = 0;
$iterasi = 1;
$nilaiC1 = array("1", "1", "1", "2", "2", "1"); //manual di excel
$nilaiC2 = array("5", "2", "3", "5", "4", "2"); //manual di exel
$thresholdC1 = round(array_sum($nilaiC1) / count($nilaiC1), 1);
$thresholdC2 = round(array_sum($nilaiC2) / count($nilaiC2), 1);
$thresholdC1_New = 0;
$thresholdC2_New = 0;
/* echo $thresholdC1;
echo "<br>";
echo $thresholdC2; */
while (($thresholdC1_New != $thresholdC1) && (($thresholdC2_New != $thresholdC2))) {
    //for ($x = 0; $x < 2; $x++){
    $sql = 'SELECT * FROM `satpam`';
    $query = mysqli_query($conn, $sql);

    $j = 0;
    $k = 0;

    if (!$query) {
        die('SQL Error: ' . mysqli_error($conn));
    }
    if ($iterasi != 1) {
        $thresholdC1 = $thresholdC1_New;
    }

    while ($row = mysqli_fetch_array($query)) {

        $jarakC1 = pow($row['pend_formal'] - $nilaiC1[0], 2) +
            pow($row['pend_nonformal'] - $nilaiC1[1], 2) +
            pow($row['usia'] - $nilaiC1[2], 2) +
            pow($row['lama_kerja'] - $nilaiC1[3], 2) +
            pow($row['satpam'] - $nilaiC1[4], 2) +
            pow($row['tinggi_badan'] - $nilaiC1[5], 2);
        $jarakC2 = pow($row['pend_formal'] - $nilaiC2[0], 2) +
            pow($row['pend_nonformal'] - $nilaiC2[1], 2) +
            pow($row['usia'] - $nilaiC2[2], 2) +
            pow($row['lama_kerja'] - $nilaiC2[3], 2) +
            pow($row['satpam'] - $nilaiC2[4], 2) +
            pow($row['tinggi_badan'] - $nilaiC2[5], 2);

        if (round(sqrt($jarakC1), 3) <= round(sqrt($jarakC2), 3)) {
            $pend_formal_C1[$j] = $row['pend_formal'];
            $pend_nonformal_C1[$j] = $row['pend_nonformal'];
            $usia_C1[$j] = $row['usia'];
            $lama_kerja_C1[$j] = $row['lama_kerja'];
            $satpam_C1[$j] = $row['satpam'];
            $tinggi_badan_C1[$j] = $row['tinggi_badan'];
            $status[$i - 1] = round(sqrt($jarakC1), 3);
            $j++;
        } else {
            $pend_formal_C2[$k] = $row['pend_formal'];
            $pend_nonformal_C2[$k] = $row['pend_nonformal'];
            $usia_C2[$k] = $row['usia'];
            $lama_kerja_C2[$k] = $row['lama_kerja'];
            $satpam_C2[$k] = $row['satpam'];
            $tinggi_badan_C2[$k] = $row['tinggi_badan'];
            $status[$i - 1] = round(sqrt($jarakC2), 3);
            $k++;
        }

        echo '<tr>
                <td>' . $i . '</td>
                <td>' . $row['id_pelamar'] . '</td>
                <td>' . $row['pend_formal'] . '</td>
                <td>' . $row['pend_nonformal'] . '</td>
                <td>' . $row['usia'] . '</td>
                <td>' . $row['lama_kerja'] . '</td>
                <td>' . $row['satpam'] . '</td>
                <td>' . $row['tinggi_badan'] . '</td>
                <td>' . round(sqrt($jarakC1), 3) . '</td>
                <td>' . round(sqrt($jarakC2), 3) . '</td>
                <td>' . $status[$i - 1] . '</td>
                <td>' . $iterasi . '</td>
            </tr>';
        $i = $i + 1;
    }


    // $iterasi = $iterasi + 1;
    $pend_formal_C1_bobot = round(array_sum($pend_formal_C1) / count($pend_formal_C1), 1);
    $pend_nonformal_C1_bobot = round(array_sum($pend_nonformal_C1) / count($pend_nonformal_C1), 1);
    $usia_C1_bobot = round(array_sum($usia_C1) / count($usia_C1), 1);
    $lama_kerja_C1_bobot = round(array_sum($lama_kerja_C1) / count($lama_kerja_C1), 1);
    $satpam_C1_bobot = round(array_sum($satpam_C1) / count($satpam_C1), 1);
    $tinggi_badan_C1_bobot = round(array_sum($tinggi_badan_C1) / count($tinggi_badan_C1), 1);
    $nilaiC1 = array(
        $pend_formal_C1_bobot,
        $pend_nonformal_C1_bobot,
        $usia_C1_bobot,
        $lama_kerja_C1_bobot,
        $satpam_C1_bobot,
        $tinggi_badan_C1_bobot
    );
    $thresholdC1_New = round(($pend_formal_C1_bobot +
        $pend_nonformal_C1_bobot +
        $usia_C1_bobot +
        $lama_kerja_C1_bobot +
        $satpam_C1_bobot +
        $tinggi_badan_C1_bobot) / 6, 1);
    $pend_formal_C2_bobot = round(array_sum($pend_formal_C2) / count($pend_formal_C2), 1);
    $pend_nonformal_C2_bobot = round(array_sum($pend_nonformal_C2) / count($pend_nonformal_C2), 1);
    $usia_C2_bobot = round(array_sum($usia_C2) / count($usia_C2), 1);
    $lama_kerja_C2_bobot = round(array_sum($lama_kerja_C2) / count($lama_kerja_C2), 1);
    $satpam_C2_bobot = round(array_sum($satpam_C2) / count($satpam_C2), 1);
    $tinggi_badan_C2_bobot = round(array_sum($tinggi_badan_C2) / count($tinggi_badan_C2), 1);
    $nilaiC2 = array(
        $pend_formal_C2_bobot,
        $pend_nonformal_C2_bobot,
        $usia_C2_bobot,
        $lama_kerja_C2_bobot,
        $satpam_C2_bobot,
        $tinggi_badan_C2_bobot
    );
    $thresholdC2_New = round(($pend_formal_C2_bobot +
        $pend_nonformal_C2_bobot +
        $usia_C2_bobot +
        $lama_kerja_C2_bobot +
        $satpam_C2_bobot +
        $tinggi_badan_C2_bobot) / 6, 1); // Sesuaikan dengan jumlah kualifikasi yg ad di excel
    if ($iterasi == 6) {
        // coding untuk mengatasi iterasi yang terlalu panjang 
        $thresholdC1 = 1;
        $thresholdC1_New = 1;
        $thresholdC2 = 1;
        $thresholdC2_New = 1;
        //unset($pend_formal_C1);
    }
}

echo '</tbody>
</table>';

// echo $thresholdC1;
// echo "<br>";
// echo $thresholdC1_New;
// echo "<br>";
// echo "Pend_Formal 0 = ".$pend_formal_C1[0];
// echo "<br>";
// echo "Pend_Formal 1 = ".$pend_formal_C1[1];
// echo "<br>";
// echo "Pend_Formal 2 = ".$pend_formal_C1[2];
// echo "<br>";
// echo "Pend_Formal 3 = ".$pend_formal_C1[3];
// echo "<br>";
// echo "Pend_Formal 4 = ".$pend_formal_C1[4];
// echo "<br>";
// echo "Pend_Formal 5 = ".$pend_formal_C1[5];
// echo "<br>";
// echo "Pend_Formal 6 = ".$pend_formal_C1[6];
// echo "<br>";

// echo count($pend_formal_C1);
// echo "<br>";
//mysqli_free_result($query);
//mysqli_close($conn);
