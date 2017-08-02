
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/References/save';?>" method="post">
<table>

	<div class="col-xs-4">
		 <label for="name">Reference Name</label>
         <input class="form-control" id="ex3" type="text" name="reference_name" placeholder="Reference Name">
         <span class="text-danger"><?php echo form_error('reference_name');?></span>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
		 <label for="details">Reference Details</label>
         <input class="form-control" id="ex3" type="text" name="reference_details" placeholder="Reference Details">
         <span class="text-danger"><?php echo form_error('reference_details');?></span>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
		 <label for="Quantity">Reference Location</label>
         <input class="form-control" id="ex3" type="text" name="reference_location" placeholder="Reference Location">
         <span class="text-danger"><?php echo form_error('reference_location');?></span>
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
	<div class="col-xs-4">
		<label for="ReceivedDate">Reference Date</label>
		<input class="form-control" id="ex3" type="text" name="reference_date" placeholder="yyyy-mm-dd">
        <span class="text-danger"><?php echo form_error('reference_date');?></span>
    </div>
         <br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
     <label for="form"> Imprint Code</label>
        <div class="form-group">
         <select class="form-control" name="load_cs" id="load_cs">
            <?php
            foreach($groups as $row)
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
