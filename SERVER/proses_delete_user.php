<?
include('connect.php');
$id=$_GET['id'];

$q_hapus_admin="delete users where id_user='$id'";
$s_hapus_admin=oci_parse($c,$q_hapus_admin);
oci_execute($s_hapus_admin);

?>
 <script language="javascript">
        alert("Successfull delete data..");
			document.location="a_panel_admin.php";
	</script>