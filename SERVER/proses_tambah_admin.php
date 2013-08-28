<?
        session_start();
		if (!isset($_SESSION['name'])) {
			header('Location: a_login_admin.php');
			}
			
include ('connect.php');

$name=$_POST['name'];
$pass=$_POST['password'];
$repass=$_POST['repassword'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$add=$_POST['address'];
$status='admin';

$q_tambah_user="insert into users(id_user,name,email,password,address,phone_number,status) values ('','$name','$email','$pass','$add','$phone','$status')";
$s_tambah_user=oci_parse($c,$q_tambah_user);
oci_execute($s_tambah_user);
?>
<script language="javascript">
        alert("Successfull input data..");
			document.location="a_panel_admin.php";
</script>