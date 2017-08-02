
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/dna_sample/save';?>" method="post">
<table>

	<div class="col-xs-4">
		 <label for="sample_details">Sample Details</label>
         <input class="form-control" id="ex3" type="text" name="sample_details" placeholder="Sample Details">
         
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
		 <label for="sample_comparison_results">Sample Comparison Results</label>
         <input class="form-control" id="ex3" type="text" name="sample_comparison_results" placeholder="Sample Comparison Results">
        
    </div>
   
         <br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
     <label for="DNA_Analysis_ID"> DNA Analysis ID</label>
        <div class="form-group">
         <select class="form-control" name="load_dnaA" id="load_dnaA">
            <?php
            foreach($groups as $row)
            { 
              echo '<option value="'.$row->analysis_id.'">'.$row->analysis_id.'</option>';
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
