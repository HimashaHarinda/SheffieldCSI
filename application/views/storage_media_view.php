
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/Storage_media/save';?>" method="post">
<table>

	
    <div class="col-xs-4">
		 <label for="capacity">Storage Media Capacity</label>
         <input class="form-control" id="ex3" type="text" name="sm_capacity" placeholder="Storage Media Capacity">
         
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
		 <label for="qantity">Storage Media Quantity</label>
         <input class="form-control" id="ex3" type="text" name="sm_quantity" placeholder="Storage Media Quantity">
        
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
	<div class="col-xs-4">
		<label for="make">Storage Media Make</label>
		<input class="form-control" id="ex3" type="text" name="sm_make" placeholder="Storage Media Make">
        
</div>
<br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
		 <label for="date">Storage Media Model</label>
         <input class="form-control" id="ex3" type="text" name="sm_model" placeholder="Storage Media Model">
        
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
	<div class="col-xs-4">
		<label for="location">Blocking Software Status</label>
		<input class="form-control" id="ex3" type="text" name="sm_status" placeholder="Blocking Software Status">
        
</div>
<br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
     <label for="Evidence_id"> Evidence ID</label>
        <div class="form-group">
         <select class="form-control" name="S_Digital_Evidence_ID" id="S_Digital_Evidence_ID">
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
