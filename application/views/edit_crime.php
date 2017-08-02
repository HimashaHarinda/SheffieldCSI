<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/crime/update';?>" method="post">
      <?php for($i = 0; $i < count($user); ++$i){?>
<table>
    <tr>
        <td><input type="text" name="c_id" value="<?php echo $user[$i]->Crime_id; ?>" hidden /></td>
    </tr>
	
    <div class="col-xs-4">
		 <label for="type">Crime Type</label>
         <input class="form-control" id="ex3" type="text" value="<?php echo $user[$i]->Crime_Type; ?>" name="crime_type" placeholder="Crime Type">
        
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
		 <label for="date">Crime Date</label>
         <input class="form-control" id="ex3" type="text" value="<?php echo $user[$i]->Crime_Date; ?>" name="crime_date" placeholder="yyyy-mm-dd">
        
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
	<div class="col-xs-4">
		<label for="location">Crime Location</label>
		<input class="form-control" id="ex3" type="text" value="<?php echo $user[$i]->Crime_Location; ?>" name="crime_location" placeholder="Crime Location">
        
         
</div>
<br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
     <label for="Evidence_id"> Evidence ID</label>
        <div class="form-group">
         <select class="form-control" name="load_evidence_crime" value="<?php echo $user[$i]->C_Digital_Evidence_ID; ?>" id="load_evidence_crime">
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
<?php } ?>
</form>

</div>
