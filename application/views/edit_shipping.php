
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/Shipping/update';?>" method="post">
    <?php for($i = 0; $i < count($user); ++$i){?>
<table>
     <tr>
        <td><input type="text" name="s_id" value="<?php echo $user[$i]->Shipping_id; ?>" hidden /></td>
    </tr>
	
    <div class="col-xs-4">
		 <label for="destination">Shipping Destination</label>
         <input class="form-control" id="ex3" type="text" value="<?php echo $user[$i]->Shipping_Destination; ?>" name="shipping_destination" placeholder="Shipping Destination">
         <span class="text-danger"><?php echo form_error('shipping_destination');?></span>
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
     <div class="col-xs-4">
     <label for="form"> Imprint Code</label>
        <div class="form-group">
         <select class="form-control" name="load_cs_s" id="load_cs_s">
            <?php
            foreach($groups as $row)
            { 
              echo '<option value="'.$row->CSU_Imprint_code.'">'.$row->CSU_Imprint_code.'</option>';
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
		<label for="shipping">Shipping Date</label>
		<input class="form-control" id="ex3" type="text" value="<?php echo $user[$i]->Shipping_Date; ?>" name="shipping_date" placeholder="yyyy-mm-dd">
        <span class="text-danger"><?php echo form_error('shipping_date');?></span>
         <br/>
    <br/>
		<button type="submit" align="center" name="submit" value="Submit" class="btn btn-primary">Submit</button>
    </div>
    <br/>
</br>
	

</table>
<?php } ?>
</form>

</div>
