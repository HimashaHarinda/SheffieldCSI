<div class="container">
<h1><?php echo $data; ?></h1>

<table class="table">
<thead>
	<tr>
		<th>Control Substance Type</th>
		<th>Control Substance Form</th>
		<th>Control Substance Quantity </th>
		<th>Control Substance Received Date</th>
		<th>Control Substance Unit Id</th>
		
		<th>Action</th>

	</tr>
</thead>
	<tbody>
	
		<?php for($i = 0; $i < count($user); ++$i){?>
			<tr>
			<td><?php echo $user[$i]->CSU_Type; ?></td>
			<td><?php echo $user[$i]->CSU_Form; ?></td>
			<td><?php echo $user[$i]->CSU_Quantity; ?></td>
			<td><?php echo $user[$i]->CSU_Received_date; ?></td>
			<td><?php echo $user[$i]->C_S_Unit_ID; ?></td>
	<td><a href="<?php echo base_url().'index.php/ControlSubstances/edit_cs/'.$user[$i]->CSU_Imprint_code; ?>">Edit</a> | <a href="<?php echo base_url().'index.php/ControlSubstances/delete_cs/'.$user[$i]->CSU_Imprint_code; ?>">Delete</a></td>
			
		</tr>

		<?php } ?>
	

	</tbody>
</table>
</div>













