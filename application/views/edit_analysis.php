
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/analysis/update';?>" method="post">
	  <?php for($i = 0; $i < count($user); ++$i){?>
<table>
	 <tr>
        <td><input type="text" name="analysiss_id" value="<?php echo $user[$i]->analysis_id; ?>" hidden /></td>
    </tr>

	
    <div class="col-xs-4">
		 <label for="analysis_details">Analysis Details</label>
         <input class="form-control" id="ex3" type="text" value="<?php echo $user[$i]->analysis_details; ?>" name="analysis_details" placeholder="Analysis Details">
        
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
	
    <div class="col-xs-4">
     <label for="emp_id"> Employee id</label>
        <div class="form-group">
         <select class="form-control" name="load_emp_analysis" value="<?php echo $user[$i]->Analyst_Emp_ID; ?>" id="load_emp_analysis">
            <?php
            foreach($groups_emp as $row)
            { 
              echo '<option value="'.$row->id.'">'.$row->id.'</option>';
            }
            ?>
                     </select>
         </div>
            </div>
     <br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
     <label for="Unit_id"> Unit id</label>
        <div class="form-group">
         <select class="form-control" name="load_unit_analysis" value="<?php echo $user[$i]->DNA_Unit_ID; ?>" id="load_unit_analysis">
            <?php
            foreach($groups_st as $row)
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
<?php }?>
</form>

</div>
