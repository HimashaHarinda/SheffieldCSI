
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/isolation_method/save';?>" method="post">
<table>

	
    <div class="col-xs-4">
		 <label for="type">Isolation Method Type</label>
         <input class="form-control" id="ex3" type="text" name="isolation_method_type" placeholder="Isolation Method Type">
         <span class="text-danger"><?php echo form_error('isolation_method_type');?></span>
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
	
    <div class="col-xs-4">
     <label for="emp_id"> Employee id</label>
        <div class="form-group">
         <select class="form-control" name="load_emp_im" id="load_emp_im">
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
     <label for="d_evidence">Digital Evidence ID</label>
        <div class="form-group">
         <select class="form-control" name="load_digital_evidence" id="load_digital_evidence">
            <?php
            foreach($groups_st as $row)
            { 
              echo '<option value="'.$row->I_Digital_Evidence_ID.'">'.$row->I_Digital_Evidence_ID.'</option>';
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
