
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/packaging/save';?>" method="post">
<table>

	
    <div class="col-xs-4">
		 <label for="type">Package Type</label>
         <input class="form-control" id="ex3" type="text" name="package_type" placeholder="Package Type">
         <span class="text-danger"><?php echo form_error('package_type');?></span>
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
	<div class="col-xs-4">
		<label for="quantity">Package Quantity</label>
		<input class="form-control" id="ex3" type="text" name="package_quantity" placeholder="Package Quantity">
        <span class="text-danger"><?php echo form_error('package_quantity');?></span>
     
	</div>
    <br/>
    <br/>
    <br/>
    <br/>
    
    <div class="col-xs-4">
     <label for="form"> Imprint Code</label>
        <div class="form-group">
         <select class="form-control" name="load_cs_p" id="load_cs_p">
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
