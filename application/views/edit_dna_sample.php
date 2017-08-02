<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/dna_sample/update';?>" method="post">
      <?php for($i = 0; $i < count($user); ++$i){?>
<table>
    <tr>
        <td><input type="text" name="dna_S_id" value="<?php echo $user[$i]->sample_id; ?>" hidden /></td>
    </tr>
    
  
    <div class="col-xs-4">
         <label for="sample">Sample Details</label>
         <input class="form-control" id="ex3" type="text" value="<?php echo $user[$i]->sample_details; ?>" name="sample_details" placeholder="Sample Details">
        
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
        <label for="sample">Sample Comparison Results</label>
        <input class="form-control" id="ex3" type="text" value="<?php echo $user[$i]->sample_comparison_results; ?>" name="sample_comparison_results" placeholder="Sample Comparison Results">
        
         
</div>
<br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
     <label for="Analysis_id"> DNA Analysis ID</label>
        <div class="form-group">
         <select class="form-control" name="load_dnaA" value="<?php echo $user[$i]->DNA_Analysis_ID; ?>" id="load_dnaA">
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
<?php } ?>
</form>

</div>
