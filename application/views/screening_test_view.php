
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/screening_test/save';?>" method="post">
<table>

	
    <div class="col-xs-4">
		 <label for="result">Test Result</label>
         <input class="form-control" id="ex3" type="text" name="test_result" placeholder="Test Result">
         <span class="text-danger"><?php echo form_error('test_result');?></span>
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
	<div class="col-xs-4">
		<label for="datetime">Test Date</label>
		<input class="form-control" id="ex3" type="text" name="test_date" placeholder="Test Date">
        <span class="text-danger"><?php echo form_error('test_date');?></span>
     
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
     <br/>
    <br/>
    <br/>
    <br/>
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
</form>

</div>
