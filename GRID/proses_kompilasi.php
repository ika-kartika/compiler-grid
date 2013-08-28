<?
//memanggil file yang berisi koneksi db
include('exoraconn.php');

//memanggil file yang berisi ip server
include('ip_address.php');

//mengambil waktu dari sistem operasi
date_default_timezone_set('Asia/Jakarta');
$datetimeakhir=date('d-m-Y H:i:s');
//echo "waktu selesai= $datetimeakhir<br/>\n";

//menangkap variabel-variabel yang dikirimkan dari server
$awal=$_POST['awal'];
$namafile=$_POST['namafile'];
$isi=$_POST['coding'];
$date=$_POST['date'];
$time=$_POST['time'];
$idc=$_POST['grid'];
$idu=$_POST['id'];
$cpu=$_POST['cpu'];
$datetimeawal=$date." ".$time;
//echo "waktu awal= $datetimeawal<br/>\n";

//mencari selisih waktu
$selisih= strtotime($datetimeakhir)-strtotime($datetimeawal);
//echo "diff in seconds: $selisih<br/>\n<br/>\n";

// immediately convert to days
$temp=$selisih/86400; // 60 sec/min*60 min/hr*24 hr/day=86400 sec/day

// days
$days=floor($temp); 
//echo "days: $days<br/>\n"; 
$temp=24*($temp-$days);

// hours
$hours=floor($temp); 
//echo "hours: $hours<br/>\n"; 
$temp=60*($temp-$hours);

// minutes
$minutes=floor($temp); 
//echo "minutes: $minutes<br/>\n"; 
$temp=60*($temp-$minutes);

// seconds
$seconds=floor($temp); 
//echo "seconds: $seconds<br/>\n<br/>\n";

//echo "Result: {$days}d {$hours}h {$minutes}m {$seconds}s<br/>\n";
//echo "Expected: 7d 0h 0m 0s<br/>\n"; 

//echo round(($datetimeakhir-$datetimeawal))." detik/minute";

//output file
$output_file = str_replace('cpp','exe', $namafile);

//proses buat file
$buat_file = 'sudo touch '.$namafile;
shell_exec($buat_file);

//proses permisi root
$permisi = "sudo chmod 777 ".$namafile;
shell_exec($permisi);

//proses memasukkan content ke file 
file_put_contents($namafile,$isi);

//membuat file exe
$buat_exe = "sudo i586-mingw32msvc-g++ $namafile -o $output_file";
shell_exec($buat_exe);

//mengambil pesan error
$pesan=shell_exec("$buat_exe 2>&1");
?>
<html>
	<head>
		<title>Baluran</title>
	<head>
	<body bgcolor="#FOF8FF">
		<center>
			<br>
			<p><h2>Download The Result Of Your Code In Here...</h2></p><br>

<?
//memeriksa file .exe
$filename='/var/www/grid_computer/'.$output_file;

//keadaan jika file .exe terbentuk dan ada (coding benar)
if(file_exists($filename))
{
	$q_simpan_data="insert into file_info (id_file,cpp_name,exe_name,access_date,time,id_user,id_computer,current_cpu_usage) values ('','$namafile','$output_file','$date','$time','$idu','$idc','$cpu')";
	$s_simpan_data=oci_parse($c,$q_simpan_data);
	oci_execute($s_simpan_data);
	?>
	<!--<br><a href="<? echo $namafile;?>"> <? echo $namafile;?> </a><br>-->
	
	<br><h4>Executable file : <a href="<? echo $output_file;?>"> <? echo $output_file;?> </a></h4><br>

	<!--menampilkan link download untuk file .cpp dan file .exe
	<br><h4><a href="download.php?nama=<? echo $output_file;?>"><? echo 	$output_file;?></a></h4>-->
	<br><h4>C/C++ file : <a href="download.php?nama=<? echo $namafile;?>"><? echo $namafile;?></a></h4>
	<?
} 

//keadaan jika file .exe tidak terbentuk dan tidak ada (coding error)
else 
{
	$q_simpan_data="insert into file_info (id_file,cpp_name,exe_name,access_date,time,id_user,id_computer,current_cpu_usage) values ('','$namafile','','$date','$time','$idu','$idc','$cpu')";
	$s_simpan_data=oci_parse($c,$q_simpan_data);
	oci_execute($s_simpan_data);
	//echo $pesan;
	?>
	<!--menampilkan pesan error-->
	<br> <h4>Message Error..</h4>
	<textarea rows="10" cols="50" readonly="readonly"><? echo $pesan;?></textarea>
	<!--menampilkan link download untuk file .cpp-->
	<br><h4>C/C++ file : <a href="download.php?nama=<? echo $namafile;?>"><? echo $namafile;?></a></h4>
	<?
}
$url="http://".$ipserver."/u_home.php";
$akhir=microtime(true);
$bedawaktu=$akhir-$awal;
if ($bedawaktu<0){
$bedawaktu=$bedawaktu*-1;
}
else{
$bedawaktu=$bedawaktu;}
?>
				<br><p><h5>elapsed time : <? echo $bedawaktu;?> seconds</h5></p>
				<!--<br><p><h5>Difference Of Time : <? echo $selisih;?> second</h5></p>-->
				<br><p><h4>Thank You....</h4></p><br>
		<p><h4><a href="<? echo $url; ?>">Clik here</a> For Back To Home</h4></p>
		</center>
	</body>
</html>

