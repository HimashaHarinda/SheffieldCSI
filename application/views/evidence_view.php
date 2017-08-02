
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/Evidence/save';?>" method="post">
<table>

	
    <div class="col-xs-4">
		 <label for="name">Evidence Name</label>
         <input class="form-control" id="ex3" type="text" name="evidence_name" placeholder="Evidence Name">
         <span class="text-danger"><?php echo form_error('evidence_name');?></span>
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
	<div class="col-xs-4">
		<label for="type">Evidence Type</label>
		<input class="form-control" id="ex3" type="text" name="evidence_type" placeholder="Evidence Type">
        <span class="text-danger"><?php echo form_error('evidence_type');?></span>
    </div>
         <br/>
    <br/>
    <br/>
    <br/>
 <div class="col-xs-4">
     <label for="unit_id"> Unit_id</label>
        <div class="form-group">
         <select class="form-control" name="load_unit_e" id="load_unit_e">
            <?php
            foreach($groups as $row)
            { 
              echo '<option value="'.$row->Unit_id.'">'.$row->Unit_id.'</option>';
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
