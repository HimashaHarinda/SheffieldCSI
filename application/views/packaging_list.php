<div class="container">
<h1><?php echo $data; ?></h1>

<table class="table">
<thead>
	<tr>
	
		<th>Package Type</th>
		<th>Package Quantity</th>
		<th>imprint Code</th>
		<th>Action</th>

	</tr>
</thead>
	<tbody>
	
		<?php for($i = 0; $i < count($user); ++$i){?>
			<tr>
			<td><?php echo $user[$i]->Package_Type; ?></td>
			<td><?php echo $user[$i]->Package_Quantity; ?></td>
			<td><?php echo $user[$i]->P_Imprint_Code; ?></td>
			<td><a href="<?php echo base_url().'index.php/Packaging/edit_packaging/'.$user[$i]->Package_id; ?>">Edit</a> | <a href="<?php echo base_url().'index.php/Packaging/delete_packaging/'.$user[$i]->Package_id; ?>">Delete</a></td>

							</tr>

		<?php } ?>
	

	</tbody>
</table>
</div>













