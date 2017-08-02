
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/screening_test/update';?>" method="post">
        <?php for($i = 0; $i < count($user); ++$i){?>
<table>
     <tr>
        <td><input type="text" name="st_id" value="<?php echo $user[$i]->test_id; ?>" hidden /></td>
    </tr>

	
    <div class="col-xs-4">
		 <label for="result">Test Result</label>
         <input class="form-control" id="ex3" type="text" value="<?php echo $user[$i]->test_result; ?>" name="test_result"  placeholder="Test Result">
        
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
	<div class="col-xs-4">
		<label for="datetime">Test Date</label>
		<input class="form-control" id="ex3" type="text" name="test_date" value="<?php echo $user[$i]->test_date; ?>" placeholder="Test Date">
     
     
	</div>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
     <label for="emp_id"> Employee id</label>
        <div class="form-group">
         <select class="form-control" name="load_emp" id="load_emp">
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
     <label for="imprint_code"> Imprint Code</label>
        <div class="form-group">
         <select class="form-control" name="load_cs_st" id="load_cs_st">
            <?php
            foreach($groups_st as $row)
            { 
              echo '<option value="'.$row->CSU_Imprint_code.'">'.$row->CSU_Imprint_code.'</option>';
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
