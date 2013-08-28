<?
        session_start();
		if (!isset($_SESSION['name'])) {
			header('Location: a_login_admin.php');
			}
			
include ('connect.php');

$idle=$_POST['parameter'];
//echo $idle;
$q_update_idle="update processor set idle_value='$idle' where id=1";
$s_update_idle=oci_parse($c,$q_update_idle);
oci_execute($s_update_idle);
//echo $q_update_idle;
?>
<script language="javascript">
        alert("Successfull update data..");
			document.location="a_panel_admin.php";
</script>
