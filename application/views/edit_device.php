
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/Device/update';?>" method="post">
     <?php for($i = 0; $i < count($user); ++$i){?>
<table>
 <tr>
        <td><input type="text" name="d_id" value="<?php echo $user[$i]->Device_id; ?>" hidden /></td>
    </tr>
	
    <div class="col-xs-4">
		 <label for="name">Device Name</label>
         <input class="form-control" id="ex3" type="text" value="<?php echo $user[$i]->Device_Name; ?>" name="device_name" placeholder="Device Name">
         <span class="text-danger"><?php echo form_error('device_name');?></span>
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
	<div class="col-xs-4">
		<label for="model">Device Model</label>
		<input class="form-control" id="ex3" type="text" value="<?php echo $user[$i]->Device_Model; ?>" name="device_model" placeholder="Device Model">
        <span class="text-danger"><?php echo form_error('device_model');?></span>
         <br/>
   

	</div>
     <br/>'
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
                      <br/>
                        <button type="submit" align="center" name="submit" value="Submit" class="btn btn-primary">Submit</button>
         </div>
            </div>
    
    
    <br/>
</br>
	

</table>
<?php }?>
</form>

</div>
