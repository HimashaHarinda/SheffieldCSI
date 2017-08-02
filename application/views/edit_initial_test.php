
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/initial_test/update';?>" method="post">
        <?php for($i = 0; $i < count($user); ++$i){?>
<table>
     <tr>
        <td><input type="text" name="it_id" value="<?php echo $user[$i]->initial_test_id; ?>" hidden /></td>
    </tr>

	
    <div class="col-xs-4">
		 <label for=" initialTestDetails">Initial Test_Details</label>
         <input class="form-control" id="ex3" type="text" name="initialTestDetails" value="<?php echo $user[$i]->initial_test_details; ?>" placeholder="Initial Test_Details">
         
    </div>
	
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
     <label for="emp_id"> Employee id</label>
        <div class="form-group">
         <select class="form-control" name="load_emp_it" value="<?php echo $user[$i]->Analyst_Emp_ID; ?>" id="load_emp_it">
            <?php
            foreach($groups_emp as $row)
            { 
              echo '<option value="'.$row->id.'">'.$row->id.'</option>';
            }
            ?>
                     </select>
         </div>
            </div>
    
    <div class="col-xs-4">
     <label for="Analysis_id">Analysis Id</label>
        <div class="form-group">
         <select class="form-control" name="load_it_dnaA" id="load_it_dnaA">
            <?php
            foreach($groups_st as $row)
            { 
              echo '<option value="'.$row->analysis_id.'">'.$row->analysis_id.'</option>';
            }
            ?>
                     </select>
         </div>

    	<button type="submit" align="center" name="submit" value="Submit" class="btn btn-primary">Submit</button>
    </div>
    <br/>
</br>
	

</table>
<?php } ?>
</form>

</div>
