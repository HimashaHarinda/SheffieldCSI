<div class="container">
<h1><?php echo $data; ?></h1>

<table class="table">
<thead>
	<tr>
	
		<th>Device Name</th>
		<th>Device Model</th>
		<th>Digital Evidence Id</th>
		<th>Action</th>

	</tr>
</thead>
	<tbody>
	
		<?php for($i = 0; $i < count($user); ++$i){?>
			<tr>
			<td><?php echo $user[$i]->Device_Name; ?></td>
			<td><?php echo $user[$i]->Device_Model; ?></td>
			<td><?php echo $user[$i]->D_Digital_Evidence_ID; ?></td>
			<td><a href="<?php echo base_url().'index.php/Device/edit_device/'.$user[$i]->Device_id; ?>">Edit</a> | <a href="<?php echo base_url().'index.php/Device/delete_device/'.$user[$i]->Device_id; ?>">Delete</a></td>	
			</tr>

		<?php } ?>
	

	</tbody>
</table>
</div>













