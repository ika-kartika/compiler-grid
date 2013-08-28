<?php
                $q_lihat_file="select file_info.id_file,file_info.cpp_name,file_info.exe_name,file_info.access_date,grid_computer.computer_name,users.name time from file_info,grid_computer,users where grid_computer.id_computer=file_info.id_computer and users.id_user=file_info.id_user order by id_file asc";
                $s_lihat_file=oci_parse($c,$q_lihat_file);
                oci_execute($s_lihat_file);
?>

<p><h4>File Information</h4></P>
<table class="table">
        <thead>
          <tr>
			<th>Name</th>
            <th>CPP File Name</th>
            <th>Exe File Name</th>
            <th>Access Of Date</th>
            <th>Computer Name</th>
          </tr>
        </thead>
        <tbody>
		<?php
			while($data_file=oci_fetch_array($s_lihat_file,OCI_BOTH))
			{
			$id=$data_file['FILE_INFO.ID_FILE'];
		?>
          <tr>
            <td><?php echo $data_file['USER.NAME'];?></td>
            <td><?php echo $data_file['FILE_INFO.CPP_NAME'];?></td>
            <td><?php echo $data_file['FILE_INFO.EXE_NAME'];?></td>
            <td><?php echo $data_file['FILE_INFO.ACCESS_DATE'];?></td>
			<td><?php echo $data_file['GRID_COMPUTER.COMPUTER_NAME'];?></td>
          </tr>
		  		<?
		}
		?>
        </tbody>

      </table>