<div class="container">
<h1><?php echo $data; ?></h1>

<table class="table">
<thead>
	<tr>
	
		<th>Storage Media Capacity</th>
		<th>Storage Media Quantit</th>
		<th>Storage Media Make</th>
		<th>Storage Media Model</th>
		<th>Blocking Software Status</th>
		<th>Digital Evidence id</th>
		<th>Action</th>

	</tr>
</thead>
	<tbody>
	
		<?php for($i = 0; $i < count($user); ++$i){?>
			<tr>
			<td><?php echo $user[$i]->storage_media_capacity; ?></td>
			<td><?php echo $user[$i]->storage_media_quantity; ?></td>
			<td><?php echo $user[$i]->storage_media_make; ?></td>
			<td><?php echo $user[$i]->storage_media_model; ?></td>
			<td><?php echo $user[$i]->SM_blocking_software_status; ?></td>
			<td><?php echo $user[$i]->S_Digital_Evidence_ID; ?></td>
			<td><a href="<?php echo base_url().'index.php/crime/edit_crime/'.$user[$i]->Crime_id; ?>">Edit</a> | <a href="<?php echo base_url().'index.php/crime/delete_crime/'.$user[$i]->Crime_id; ?>">Delete</a></td>

							</tr>

		<?php } ?>
	

	</tbody>
</table>
</div>













