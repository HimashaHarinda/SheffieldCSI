
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/Dna_results/save';?>" method="post">
<table>

    
    <div class="col-xs-4">
         <label for="biological material">Biological Material</label>
         <input class="form-control" id="ex3" type="text" name="biologicalMaterial" placeholder="Biological Material">
         
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
   
    <div class="col-xs-4">
     <label for="emp_id"> Employee id</label>
        <div class="form-group">
         <select class="form-control" name="load_emp_dnar" id="load_emp_dnar">
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
     <label for="analysisid"> Analysis Id</label>
        <div class="form-group">
         <select class="form-control" name="load_dnaA_dnaR" id="load_dnaA_dnaR">
            <?php
            foreach($groups_st as $row)
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
