<?
include('connect.php');
$id=$_GET['id'];

$q_hapus_grid="delete grid_computer where id_computer='$id'";
$s_hapus_grid=oci_parse($c,$q_hapus_grid);
oci_execute($s_hapus_grid);

?>
 <script language="javascript">
        alert("Successfull delete data..");
			document.location="a_panel_admin.php";
	</script>