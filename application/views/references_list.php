<div class="container">
<h1><?php echo $data; ?></h1>

<table class="table">
<thead>
	<tr>
		<th>Reference Name</th>
		<th>Reference Details</th>
		<th>Reference Location</th>
		<th>Reference Date</th>
		<th>Reference Imprint Code</th>
		<th>Action</th>

	</tr>
</thead>
	<tbody>
	
		<?php for($i = 0; $i < count($user); ++$i){?>
			<tr>
			<td><?php echo $user[$i]->Reference_name; ?></td>
			<td><?php echo $user[$i]->Reference_Details; ?></td>
			<td><?php echo $user[$i]->Reference_Location; ?></td>
			<td><?php echo $user[$i]->Reference_Date; ?></td>
			<td><?php echo $user[$i]->R_Imprint_Code; ?></td>


			<td><a href="<?php echo base_url().'index.php/References/edit_ref/'.$user[$i]->Reference_id; ?>">Edit</a> | <a href="<?php echo base_url().'index.php/References/delete_ref/'.$user[$i]->Reference_id; ?>">Delete</a></td>
		</tr>

		<?php } ?>
	

	</tbody>
</table>
</div>













