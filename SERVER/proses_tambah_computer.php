<?
        session_start();
		if (!isset($_SESSION['name'])) {
			header('Location: a_login_admin.php');
			}
			
include ('connect.php');

$name=$_POST['name'];
$ip=$_POST['ip'];


$q_tambah_com="insert into grid_computer(id_computer,ip_address,computer_name,cpu_usage,time) values ('','$ip','$name','','')";
$s_tambah_com=oci_parse($c,$q_tambah_com);
oci_execute($s_tambah_com);
//echo $q_tambah_com;
?>
<script language="javascript">
        alert("Successfull input data..");
			document.location="a_panel_admin.php";
</script>