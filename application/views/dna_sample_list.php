<div class="container">
<h1><?php echo $data; ?></h1>

<table class="table">
<thead>
	<tr>
		<th>DNA Sample Details</th>
		<th>Sample Comparison Results</th>
		<th>DNA Analysis Id</th>
		
		<th>Action</th>

	</tr>
</thead>
	<tbody>
	
		<?php for($i = 0; $i < count($user); ++$i){?>
			<tr>
			<td><?php echo $user[$i]->sample_details; ?></td>
			<td><?php echo $user[$i]->sample_comparison_results; ?></td>
			<td><?php echo $user[$i]->DNA_Analysis_ID; ?></td>
			


			<td><a href="<?php echo base_url().'index.php/dna_sample/edit_dna_sample/'.$user[$i]->sample_id; ?>">Edit</a> | <a href="<?php echo base_url().'index.php/dna_sample/delete_dna_sample/'.$user[$i]->sample_id; ?>">Delete</a></td>
		</tr>

		<?php } ?>
	

	</tbody>
</table>
</div>













