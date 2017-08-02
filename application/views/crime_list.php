<div class="container">
<h1><?php echo $data; ?></h1>

<table class="table">
<thead>
	<tr>
	
		<th>Crime Date</th>
		<th>Crime Type</th>
		<th>Crime Location</th>
		<th>Digital Evidence id</th>
		<th>Action</th>

	</tr>
</thead>
	<tbody>
	
		<?php for($i = 0; $i < count($user); ++$i){?>
			<tr>
			<td><?php echo $user[$i]->Crime_Date; ?></td>
			<td><?php echo $user[$i]->Crime_Type; ?></td>
			<td><?php echo $user[$i]->Crime_Location; ?></td>
			<td><?php echo $user[$i]->C_Digital_Evidence_ID; ?></td>
			<td><a href="<?php echo base_url().'index.php/crime/edit_crime/'.$user[$i]->Crime_id; ?>">Edit</a> | <a href="<?php echo base_url().'index.php/crime/delete_crime/'.$user[$i]->Crime_id; ?>">Delete</a></td>

							</tr>

		<?php } ?>
	

	</tbody>
</table>
</div>













