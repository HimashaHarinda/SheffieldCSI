<div class="container">
<h1><?php echo $data; ?></h1>

<table class="table">
<thead>
	<tr>
	
		<th>Analysis Details</th>
		<th>DNA Unit id</th>
		<th>Employee id</th>
		<th>Action</th>

	</tr>
</thead>
	<tbody>
	
		<?php for($i = 0; $i < count($user); ++$i){?>
			<tr>
			<td><?php echo $user[$i]->analysis_details; ?></td>
			<td><?php echo $user[$i]->DNA_Unit_ID; ?></td>
			<td><?php echo $user[$i]->Analyst_Emp_ID; ?></td>
			<td><a href="<?php echo base_url().'index.php/analysis/edit_analysis/'.$user[$i]->analysis_id; ?>">Edit</a> | <a href="<?php echo base_url().'index.php/analysis/delete_analysis/'.$user[$i]->analysis_id; ?>">Delete</a></td>

							</tr>

		<?php } ?>
	

	</tbody>
</table>
</div>