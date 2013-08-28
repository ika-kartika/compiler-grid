<?php
error_reporting(0);
    //mulai session
    session_start();
    //cek apakah user masih aktif login
    if(isset($_SESSION['name']))
    {
                header('Location:home.php');    }


    include("exoraconn.php");

    //tangkap variable yg dikirim halaman index.php
    $email = $_POST['email'];
    //echo '$email = ',$email,'<br />';
    $password = $_POST['pass'];

    //cek email & password ke db
    $q_cek = "select id_user,name from users where email = '$email' and password = '$password' and status='admin'";
    $s_cek = oci_parse($c, $q_cek);
    oci_execute($s_cek);
	while($data_cek= oci_fetch_array ($s_cek, OCI_BOTH))
{
    $id_user=$data_cek['ID_USER'];
    $status=$data_cek['STATUS'];
	$name=$data_cek['NAME'];
}
    //$status = oci_fetch_array($s_cek,OCI_BOTH);
    //echo '$id_user = ',$id_user[0];

    if($id_user=='')
    {?>
        <script language="javascript">
        alert("Sorry, Your Username or Password isn't valid!!");
			document.location="index.php";
	</script>
<?
    }
    else
    {
$_SESSION['name'] = $name;
?>
<script language="javascript">
        alert("Successfull Login..!");
			document.location="home.php";
	</script> <?
    }
?>
