<?php
//Koneksi Basis Data
$mysqli=new mysqli("localhost","root","","tes_kmeans");
//Cek Koneksi
if (mysqli_connect_errno()){
	echo "Tidak terhubung";
	exit;
}

//Fungsi mencari kueri single data
function caridata($mysqli,$query){
	$row= $mysqli->query($query)->fetch_array();
	return $row[0];
}

//Inisialisasi Cluster Awal
$jumlahmahasiswa=caridata($mysqli,"select count(*) from pelamar_admin");
for ($i=0;$i<$jumlahmahasiswa; $i++) { 
	$clusterawal[$i]="1";
}

//Set Default Nilai Centroid 1,2,3
$centro1[0] = array('1','1','1','2','1');
$centro2[0] = array('4','2','3','5','2');


$status='false';
$loop='0';
$x=0;
while ($status=='false'){

	//Proses K-Means Perhitungan
	$query="select * from pelamar_admin";
	$result=$mysqli->query($query);
	while ($data=mysqli_fetch_assoc($result)) {
		extract($data);
		$hasilc1=0;
		$hasilc2=0;

		//Proses Pencarian Nilai Centro 1
		$hasilc1=sqrt(pow($pend_formal-$centro1[$loop][0],2) +
			pow($pend_nonformal-$centro1[$loop][1],2) + 
			pow($usia-$centro1[$loop][2],2) +
			pow($pengalaman_kerja-$centro1[$loop][3],2) +
			pow($mampu_office-$centro1[$loop][4],2));

		//Proses Pencarian Nilai Centro 2
		$hasilc1=sqrt(pow($pend_formal-$centro2[$loop][0],2) +
			pow($pend_nonformal-$centro2[$loop][1],2) + 
			pow($usia-$centro2[$loop][2],2) +
			pow($pengalaman_kerja-$centro2[$loop][3],2) +
			pow($mampu_office-$centro2[$loop][4],2));

		// //Proses Pencarian Nilai Centro 3
		// $hasilc1=sqrt(pow($pend_formal-$centro3[$loop][0],2) +
		// 	pow($pend_nonformal-$centro3[$loop][1],2) + 
		// 	pow($usia-$centro3[$loop][2],2) +
		// 	pow($pengalaman_kerja-$centro3[$loop][3],2) +
		// 	pow($mampu_office-$centro3[$loop][4],2));

		//Mencari Nilai Terkecil
		if ($hasilc1<$hasilc2){
			$clusterakhir[$x]='C1';
			update_mahasiswa($mysqli,$idlamar,'C1');

		}else{
			$clusterakhir[$x]='C2';
			update_mahasiswa($mysqli,$idlamar,'C2');

		}

		}
		//Penambhan Counter Index
		$x+=1;

	}

	$loop+=1;
	//Proses mencari centroid baru ambil dari basis data.
	//Centroid Baru Pusat 1
	$centro1[$loop][0]=caridata($mysqli,"select avg(tanggungan) from pelamar_admin where set_sementara='C1'");
	$centro1[$loop][1]=caridata($mysqli,"select avg(k_pekerjaan) from pelamar_admin where set_sementara='C1'");
	$centro1[$loop][2]=caridata($mysqli,"select avg(k_penghasilan) from pelamar_admin where set_sementara='C1'");

	//Centroid Baru Pusat 2
	$centro2[$loop][0]=caridata($mysqli,"select avg(tanggungan) from pelamar_admin where set_sementara='C2'");
	$centro2[$loop][1]=caridata($mysqli,"select avg(k_pekerjaan) from pelamar_admin where set_sementara='C2'");
	$centro2[$loop][2]=caridata($mysqli,"select avg(k_penghasilan) from pelamar_admin where set_sementara='C2'");

	//Centroid Baru Pusat 3
	$centro3[$loop][0]=caridata($mysqli,"select avg(tanggungan) from pelamar_admin where set_sementara='C3'");
	$centro3[$loop][1]=caridata($mysqli,"select avg(k_pekerjaan) from pelamar_admin where set_sementara='C3'");
	$centro3[$loop][2]=caridata($mysqli,"select avg(k_penghasilan) from pelamar_admin where set_sementara='C3'");

	$status='true';
	for ($i=0;$i<$jumlahmahasiswa;$i++) { 
		if($clusterawal[$i]!=$clusterakhir[$i]){
			$status='false';
		}
	}

	if($status=='false'){
		$clusterawal=$clusterakhir;
	}
// }

echo "Proses berhasil dilakukan sebanyak $loop kali";

function update_mahasiswa($mysqli,$idlamar,$nilai){

	$stmt=$mysqli->prepare("update pelamar_admin set 
		set_sementara=?
		where idlamar=?");
	$stmt->bind_param("ss",
		mysqli_real_escape_string($mysqli,$nilai),
		mysqli_real_escape_string($mysqli,$idlamar));
	$stmt->execute();
}
?>