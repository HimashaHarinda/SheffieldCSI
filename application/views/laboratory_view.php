
<div class="container" >
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/laboratory/save';?>" method="post">
<table>

	<div class="col-xs-4">
		 <label for="type">Lab Type</label>
         <input class="form-control" id="ex3" type="text" name="lab_type" placeholder="Lab Type">
         <span class="text-danger"><?php echo form_error('lab_type');?></span>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
         <label for="capacity">Lab Capacity</label>
         <input class="form-control" id="ex3" type="text" name="lab_capacity" placeholder="Lab Capacity">
         <span class="text-danger"><?php echo form_error('lab_capacity');?></span>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
         <label for="info">Lab Information</label>
         <input class="form-control" id="ex3" type="text" name="lab_info" placeholder="Lab Information">
         <span class="text-danger"><?php echo form_error('lab_info');?></span>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    
    <div class="col-xs-4">
     <label for="Employee_l">Employee Id</label>
        <div class="form-group">
         <select class="form-control" name="load_employee_laboratory" id="load_employee_laboratory">
            <?php
            foreach($groups as $row)
            { 
              echo '<option value="'.$row->id.'">'.$row->id.'</option>';
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
