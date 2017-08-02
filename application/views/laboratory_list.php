<div class="container">
<h1><?php echo $data; ?></h1>

<table class="table">
<thead>
	<tr>
		<th>Lab Type</th>
		<th>Lab Capacity</th>
		<th>Lab Information</th>
		<th>Employee Id</th>
		<th>Action</th>

	</tr>
</thead>
	<tbody>
	
		<?php for($i = 0; $i < count($user); ++$i){?>
			<tr>
			<td><?php echo $user[$i]->lab_type;?></td>
			<td><?php echo $user[$i]->lab_capacity;?></td>
			<td><?php echo $user[$i]->lab_info;?></td>
			<td><?php echo $user[$i]->lab_emp_id;?></td>
				<td><a href="<?php echo base_url().'index.php/laboratory/edit_laboratory/'.$user[$i]->lab_id; ?>">Edit</a> | <a href="<?php echo base_url().'index.php/laboratory/delete_laboratory/'.$user[$i]->lab_id; ?>">Delete</a></td>	


			</tr>

		<?php } ?>
	

	</tbody>
</table>
</div>













