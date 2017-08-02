<div class="container">
<h1><?php echo $data; ?></h1>

<table class="table">
<thead>
	<tr>
	
		<th>Digital Evidence Type</th>
		<th>Digital Evidence Name</th>
		<th>Unit id</th>
		<th>Action</th>

	</tr>
</thead>
	<tbody>
	
		<?php for($i = 0; $i < count($user); ++$i){?>
			<tr>
			<td><?php echo $user[$i]->Digital_Evidence_Type; ?></td>
			<td><?php echo $user[$i]->Digital_Evidence_name; ?></td>
			<td><?php echo $user[$i]->Evi_Unit_id; ?></td>
			<td><a href="<?php echo base_url().'index.php/Evidence/edit_evidence/'.$user[$i]->Digital_Evidence_id; ?>">Edit</a> | <a href="<?php echo base_url().'index.php/Evidence/delete_evidence/'.$user[$i]->Digital_Evidence_id; ?>">Delete</a></td>

							</tr>

		<?php } ?>
	

	</tbody>
</table>
</div>













