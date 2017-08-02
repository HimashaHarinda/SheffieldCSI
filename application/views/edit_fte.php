
<div class="container" >
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/fte/update';?>" method="post">
     <?php for($i = 0; $i < count($user); ++$i){?>
<table>
     <tr>
        <td><input type="text" name="fte_id" value="<?php echo $user[$i]->forensic_toxicology_evidence_id; ?>" hidden /></td>
    </tr>


	<div class="col-xs-4">
		 <label for="name">Forensic Toxicology Evidence Name</label>
         <input class="form-control" id="ex3" type="text" value="<?php echo $user[$i]->forensic_toxicology_evidence_name; ?>" name="fte_name" placeholder="Forensic Toxicology Evidence Name">
         <span class="text-danger"><?php echo form_error('fte_name');?></span>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    
    <div class="col-xs-4">
     <label for="unit_fte">Unit</label>
        <div class="form-group">
         <select class="form-control" name="load_csu_fte" value="<?php echo $user[$i]->F_T_Unit_ID; ?>" id="load_csu_fte">
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
<?php } ?>
</form>

</div>
