<div class="container">
<h1><?php echo $data; ?></h1>

<table class="table">
<thead>
	<tr>
	
		<th>Test Result</th>
		<th>Test Date</th>
		<th>Employee id</th>
		<th>Imprint Code</th>
		<th>Action</th>

	</tr>
</thead>
	<tbody>
	
		<?php for($i = 0; $i < count($user); ++$i){?>
			<tr>
			<td><?php echo $user[$i]->test_result; ?></td>
			<td><?php echo $user[$i]->test_date; ?></td>
			<td><?php echo $user[$i]->test_emp_id; ?></td>
			<td><?php echo $user[$i]->Screening_t_cs_id; ?></td>
			<td><a href="<?php echo base_url().'index.php/screening_test/edit_screening_test/'.$user[$i]->test_id; ?>">Edit</a> | <a href="<?php echo base_url().'index.php/screening_test/delete_screening_test/'.$user[$i]->test_id; ?>">Delete</a></td>

							</tr>

		<?php } ?>
	

	</tbody>
</table>
</div>













