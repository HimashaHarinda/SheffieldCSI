<div class="container">
<h1><?php echo $data; ?></h1>

<table class="table">
<thead>
	<tr>
	
		<th>Shipping Date</th>
		<th>Shipping Destination</th>
		<th>Shipping Imprint Code</th>
		<th>Action</th>

	</tr>
</thead>
	<tbody>
	
		<?php for($i = 0; $i < count($user); ++$i){?>
			<tr>
			<td><?php echo $user[$i]->Shipping_Date; ?></td>
			<td><?php echo $user[$i]->Shipping_Destination; ?></td>
			<td><?php echo $user[$i]->S_Imprint_Code; ?></td>
				<td><a href="<?php echo base_url().'index.php/Shipping/edit_shipping/'.$user[$i]->Shipping_id; ?>">Edit</a> | <a href="<?php echo base_url().'index.php/Shipping/delete_shipping/'.$user[$i]->Shipping_id; ?>">Delete</a></td>
				</tr>

		<?php } ?>
	

	</tbody>
</table>
</div>













