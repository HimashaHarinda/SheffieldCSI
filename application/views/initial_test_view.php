
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/initial_test/save';?>" method="post">
<table>

	
    <div class="col-xs-4">
		 <label for=" initialTestDetails">Initial Test_Details</label>
         <input class="form-control" id="ex3" type="text" name="initialTestDetails" placeholder="Initial Test_Details">
         
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
     <label for="emp_id"> Employee id</label>
        <div class="form-group">
         <select class="form-control" name="load_emp_it" id="load_emp_it">
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
     <label for="Analysis_id"> Analysis Id</label>
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
</form>

</div>
