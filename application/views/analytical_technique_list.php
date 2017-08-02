<div class="container">
<h1><?php echo $data; ?></h1>

<table class="table">
<thead>
	<tr>
		<th>Technique</th>
		<th>Tech Type</th>
		
		<th>Action</th>

	</tr>
</thead>
	<tbody>
	
		<?php for($i = 0; $i < count($user); ++$i){?>
			<tr>
			<td><?php echo $user[$i]->technique; ?></td>
			<td><?php echo $user[$i]->tech_type; ?></td>
			<td><a href="<?php echo base_url().'index.php/analytical_technique/edit_analytical_technique/'.$user[$i]->technique_ID; ?>">Edit</a> | <a href="<?php echo base_url().'index.php/analytical_technique/delete_analytical_technique/'.$user[$i]->technique_ID; ?>">Delete</a></td>


			</tr>

		<?php } ?>
	

	</tbody>
</table>
</div>













