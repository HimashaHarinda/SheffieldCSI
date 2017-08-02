<div class="container">
<h1><?php echo $data; ?></h1>

<table class="table">
<thead>
	<tr>
		<th>forensic_toxicology_evidence_name</th>
		<th>Unit_ID</th>
		
		<th>Action</th>

	</tr>
</thead>
	<tbody>
	
		<?php for($i = 0; $i < count($user); ++$i){?>
			<tr>
			<td><?php echo $user[$i]->forensic_toxicology_evidence_name	; ?></td>
			<td><?php echo $user[$i]->F_T_Unit_ID; ?></td>
					<td><a href="<?php echo base_url().'index.php/fte/edit_fte/'.$user[$i]->forensic_toxicology_evidence_id; ?>">Edit</a> | <a href="<?php echo base_url().'index.php/fte/delete_fte/'.$user[$i]->forensic_toxicology_evidence_id; ?>">Delete</a></td>



			</tr>

		<?php } ?>
	

	</tbody>
</table>
</div>













