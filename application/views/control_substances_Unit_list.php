<div class="container">
<h1><?php echo $data; ?></h1>

<table class="table">
<thead>
	<tr>
		<th>Unit id</th>
		<th>Unit Details</th>
		<th>Unit Type</th>
	

	</tr>
</thead>
	<tbody>
	
		<?php for($i = 0; $i < count($user); ++$i){?>
			<tr>
			<td><?php echo $user[$i]->Unit_id; ?></td>
			<td><?php echo $user[$i]->Unit_Details; ?></td>
			<td><?php echo $user[$i]->Unit_Type; ?></td>
		
		
		</tr>

		<?php } ?>
	

	</tbody>
</table>
</div>
