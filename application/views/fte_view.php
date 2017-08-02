
<div class="container" >
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/fte/save';?>" method="post">
<table>

	<div class="col-xs-4">
		 <label for="name">Forensic Toxicology Evidence Name</label>
         <input class="form-control" id="ex3" type="text" name="fte_name" placeholder="Forensic Toxicology Evidence Name">
         <span class="text-danger"><?php echo form_error('fte_name');?></span>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    
    <div class="col-xs-4">
     <label for="unit_fte">Unit</label>
        <div class="form-group">
         <select class="form-control" name="load_csu_fte" id="load_csu_fte">
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
