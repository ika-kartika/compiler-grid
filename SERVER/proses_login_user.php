<?php

    //mulai session
    session_start();
    //cek apakah user masih aktif login
    if(isset($_SESSION['name']))
    {
       $y = $_SESSION['hak_akses'];
        switch($y)
        {
            case 'client':
                header('Location:u_home.php');
                break;

            case 'admin':
                header('Location:a_panel_admin.php');
                break;
        }
    }


    include("connect.php");

    //tangkap variable yg dikirim halaman index.php
    $email = $_POST['email'];
    //echo '$email = ',$email,'<br />';
    $password = $_POST['password'];

    //cek email & password ke db
    $q_cek = "select id_user,name,status from users where email = '$email' and password = '$password'";
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

        switch($status)
        {
            case 'client':
                $_SESSION['name'] = $name;
                $_SESSION['hak_akses'] = $status;
                $_SESSION['id'] = $id_user;
                header('Location:u_home.php');
                break;

            case 'admin':
                $_SESSION['name'] = $name;
                //echo 'nama = ',$_SESSION['username'];
                $_SESSION['hak_akses'] = $status;
                $_SESSION['id'] = $id_user;
                header('Location:a_panel_admin.php');
				//echo $name;
                break;
        }
    }
?>