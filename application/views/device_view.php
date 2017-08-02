
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/device/save';?>" method="post">
<table>

	
    <div class="col-xs-4">
		 <label for="name">Device Name</label>
         <input class="form-control" id="ex3" type="text" name="device_name" placeholder="Device Name">
         <span class="text-danger"><?php echo form_error('device_name');?></span>
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
  
	<div class="col-xs-4">
		<label for="model">Device Model</label>
		<input class="form-control" id="ex3" type="text" name="device_model" placeholder="Device Model">
        <span class="text-danger"><?php echo form_error('device_model');?></span>
         <br/>
   
  </div>
     <br/>
     <br/> 
     <br/>
     <br/>
    
  <div class="col-xs-4">
     <label for="digital_evi"> Digital Device Id</label>
        <div class="form-group">
         <select class="form-control" name="load_evidence" id="load_evidence">
            <?php
            foreach($groups as $row)
            { 
              echo '<option value="'.$row->Digital_Evidence_id.'">'.$row->Digital_Evidence_id.'</option>';
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
