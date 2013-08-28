<?
//header("Refresh:60;");
include("exoraconn.php");
include("ip_address.php");
date_default_timezone_set('Asia/Jakarta');
$h=date("H:i");
$loadavgstats = substr(file_get_contents('/proc/loadavg'), 0, 14);
$cpu = substr($loadavgstats, 0, 4);
$hour = substr($h,0,2);
$sec = substr($h,3,2);
if($sec==0){
$sec='59';
$hour=$hour-1;
}
else{
$sec = $sec-1;
}
$now = $hour.":".$sec;
//echo $loadavgstats;
//echo"<br>";
//echo $cpu;
//echo"<br>";
//echo $now;

$query="insert into cpu_usage values ('','1','$ipad','grid 1','$cpu','$now')";
$statement=oci_parse($c,$query);
oci_execute($statement);
		  ?>
