
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/Evidence/update';?>" method="post">
    <?php for($i = 0; $i < count($user); ++$i){?>   
<table>

	  <tr>
        <td><input type="text" name="s_id" value="<?php echo $user[$i]->Digital_Evidence_id; ?>" hidden /></td>
    </tr>
    <div class="col-xs-4">
		 <label for="name">Evidence Name</label>
         <input class="form-control" id="ex3" type="text" value="<?php echo $user[$i]->Digital_Evidence_name; ?>" name="evidence_name" placeholder="Evidence Name">
         
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
	<div class="col-xs-4">
		<label for="type">Evidence Type</label>
		<input class="form-control" id="ex3" type="text" value="<?php echo $user[$i]->Digital_Evidence_Type; ?>" name="evidence_type" placeholder="Evidence Type">
        
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
<?php } ?>
</form>

</div>
