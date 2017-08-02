<div class="container">
<h1><?php echo $data; ?></h1>

<table class="table">
<thead>
	<tr>
	
		<th>Biological Material</th>
		<th>Analysis id</th>
		<th>Employee id</th>
		<th>Action</th>

	</tr>
</thead>
	<tbody>
	
		<?php for($i = 0; $i < count($user); ++$i){?>
			<tr>
			<td><?php echo $user[$i]->biological_material; ?></td>
			<td><?php echo $user[$i]->R_Analysis_ID; ?></td>
			<td><?php echo $user[$i]->DNA_Emp_ID; ?></td>
			<td><a href="<?php echo base_url().'index.php/dna_results/edit_dna_results/'.$user[$i]->result_ID; ?>">Edit</a> | <a href="<?php echo base_url().'index.php/dna_results/delete_dna_results/'.$user[$i]->result_ID; ?>">Delete</a></td>
		</tr>

		<?php } ?>
	

	</tbody>
</table>
</div>













