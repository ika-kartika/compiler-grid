<?
session_start();
if(isset($_SESSION['name'])){
header('Location: home.php');
}
$ip=$_POST['ipadd'];
$ips=$_POST['ipadds'];
$ipadd="<?php "."$"."ipad="."'".$ip."'; "."$"."ipserver="."'".$ips."';"." ?>";
$subnet=$_POST['subnet'];
$interface=$_POST['int'];
//echo $ips;
//membuat file
$buatfile="sudo touch ip_address.php";
shell_exec($buatfile);

//mengatur permisi file tsb
$permision = "sudo chmod 777 ip_address.php";
shell_exec($permision);

//mengisi filw tsb dgn IP Address
file_put_contents("ip_address.php",$ipadd);

//mengatur ip computer
$addip="sudo ifconfig ".$interface." ".$ip." ".$subnet;
shell_exec($addip);

session_destroy();
?>
<script language="javascript">
alert("Success setting IP Address..");
document.location="index.php";
</script>
