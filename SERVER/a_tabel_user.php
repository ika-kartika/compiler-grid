<?php
                $q_lihat_user="select id_user,name,address,phone_number,email from users where status='client' order by id_user asc";
                $s_lihat_user=oci_parse($c,$q_lihat_user);
                oci_execute($s_lihat_user);
?>
<p><h4><a href="a_form_tambahuser.php">Klik here</a> for register new user.</h4></P>
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
			while($data_user=oci_fetch_array($s_lihat_user,OCI_BOTH))
			{
			$id=$data_user['ID_USER'];
		?>
          <tr>
            <td><?php echo $data_user['NAME'];?></td>
            <td><?php echo $data_user['ADDRESS'];?></td>
            <td><?php echo $data_user['PHONE_NUMBER'];?></td>
            <td><?php echo $data_user['EMAIL'];?></td>
			<td>
            <a href="proses_edit_user.php?id=<?=$id?>" class="btn btn">Edit</a>
            <a href="proses_delete_user.php?id=<?=$id?>" class="btn btn">Delete</a></form>
            </td>
          </tr>
          <?
		  }
		  ?>
        </tbody>
      </table>