<?php
                $q_lihat_grid="select id_computer,computer_name,ip_address,cpu_usage,time from grid_computer order by id_computer asc";
                $s_lihat_grid=oci_parse($c,$q_lihat_grid);
                oci_execute($s_lihat_grid);
?>
<p><h4><a href="a_form_komputergrid.php">Klik here</a> for register your grid computer.<br><br>
<a href="index.php" target="blank">Klik here</a> for start monitoring CPU usage grid computer..</h4></P>
<table class="table">
        <thead>
          <tr>
            <th>Computer Name</th>
            <th>IP Address</th>
            <th>CPU Usage</th>
            <th>Time</th>
			<th>Action</th>
          </tr>
        </thead>
        <tbody>
		<?php
			while($data_grid=oci_fetch_array($s_lihat_grid,OCI_BOTH))
			{
			$id=$data_grid['ID_COMPUTER'];
		?>
          <tr>
            <td><?php echo $data_grid['COMPUTER_NAME'];?></td>
            <td><?php echo $data_grid['IP_ADDRESS'];?></td>
            <td><?php echo $data_grid['CPU_USAGE'];?></td>
            <td><?php echo $data_grid['TIME'];?></td>
			<td>
            <a href="a_form_updategrid.php?id=<?=$id?>" class="btn btn">Edit</a>
            <a href="proses_delete_grid.php?id=<?=$id?>" class="btn btn">Delete</a></form>
            </td>
          </tr>
          <?
		  }
		  ?>
        </tbody>
      </table>