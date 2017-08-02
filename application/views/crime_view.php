
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/crime/save';?>" method="post">
<table>

	
    <div class="col-xs-4">
		 <label for="type">Crime Type</label>
         <input class="form-control" id="ex3" type="text" name="crime_type" placeholder="Crime Type">
         
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
		 <label for="date">Crime Date</label>
         <input class="form-control" id="ex3" type="text" name="crime_date" placeholder="yyyy-mm-dd">
        
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
	<div class="col-xs-4">
		<label for="location">Crime Location</label>
		<input class="form-control" id="ex3" type="text" name="crime_location" placeholder="Crime Location">
        
</div>
<br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
     <label for="Evidence_id"> Evidence ID</label>
        <div class="form-group">
         <select class="form-control" name="load_evidence_crime" id="load_evidence_crime">
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
