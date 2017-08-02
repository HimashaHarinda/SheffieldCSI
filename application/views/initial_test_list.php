<div class="container">
<h1><?php echo $data; ?></h1>

<table class="table">
<thead>
	<tr>
	
		<th>Analysis Details</th>
		<th>DNA_Unit_ID</th>
		<th>Analyst_Emp_ID</th>
		<th>Action</th>

	</tr>
</thead>
	<tbody>
	
		<?php for($i = 0; $i < count($user); ++$i){?>
			<tr>
			<td><?php echo $user[$i]->initial_test_details; ?></td>
			<td><?php echo $user[$i]->I_Analysis_ID; ?></td>
			<td><?php echo $user[$i]->Analyst_Emp_ID; ?></td>
		
			<td><a href="<?php echo base_url().'index.php/initial_test/edit_initial_test/'.$user[$i]->initial_test_id; ?>">Edit</a> | <a href="<?php echo base_url().'index.php/initial_test/delete_initial_test/'.$user[$i]->initial_test_id; ?>">Delete</a></td>

							</tr>

		<?php } ?>
	

	</tbody>
</table>
</div>













