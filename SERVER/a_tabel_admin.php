<?php
                $q_lihat_admin="select id_user,name,address,phone_number,email from users where status='admin' order by id_user asc";
                $s_lihat_admin=oci_parse($c,$q_lihat_admin);
                oci_execute($s_lihat_admin);
?>
<p><h4><a href="a_form_tambahadmin.php">Klik here</a> for register new admin.</h4></P>
<table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Email</th>
			<th>Action</th>
          </tr>
        </thead>
        <tbody>
		<?php
			while($data_admin=oci_fetch_array($s_lihat_admin,OCI_BOTH))
			{
			$id=$data_admin['ID_USER'];
		?>
          <tr>
            <td><?php echo $data_admin['NAME'];?></td>
            <td><?php echo $data_admin['ADDRESS'];?></td>
            <td><?php echo $data_admin['PHONE_NUMBER'];?></td>
            <td><?php echo $data_admin['EMAIL'];?></td>
			<td>
            <a href="proses_edit_admin.php?id=<?=$id?>" class="btn btn">Edit</a>
            <a href="proses_delete_user.php?id=<?=$id?>" class="btn btn">Delete</a></form>
            </td>
          </tr>
          <?
		  }
		  ?>
        </tbody>
      </table>