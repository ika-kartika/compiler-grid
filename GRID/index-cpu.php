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

$query="update grid_computer set cpu_usage='$cpu',time='$now' where ip_address='$ipad'";
$statement=oci_parse($c,$query);
oci_execute($statement);

$q_lihat_grid="select id_computer,computer_name,ip_address,cpu_usage,time from grid_computer where ip_address='$ipad' order by id_computer asc";
                $s_lihat_grid=oci_parse($c,$q_lihat_grid);
                oci_execute($s_lihat_grid);
//echo $ipad;
			while($data_grid=oci_fetch_array($s_lihat_grid,OCI_BOTH))
			{
			$id=$data_grid['ID_COMPUTER'];
			//$ip=$data_grid['IP_ADDRESS'];
			//$ip='192.168.1.50';
			
				set_time_limit(30);
				$exec = exec("ping -c 3 -s 64 -t 64 ".$ipserver);
				$array = explode("/", end(explode("=", $exec )) );
				$ping = ceil($array[1]);
		?>
          <tr>
            <td><?php echo $data_grid['COMPUTER_NAME'];?></td>
 <td><?php echo $data_grid['IP_ADDRESS'];?></td>
            <td><?php echo $data_grid['CPU_USAGE'];?></td>
            <td><?php echo $data_grid['TIME'];?></td>
			<?
			if ($ping > 0) {
			?>
			<td><span class="label label-success">Connected</span></td>
			<?
			}
			else {
			?>
			<td><span class="label label-important">Disconnected</span></td>
			<?
			}
			?>
          </tr>
          <?
		  }
		  ?>
