
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/ControlSubstances/update';?>" method="post">
	<?php for($i = 0; $i < count($user); ++$i){?>
<table>
	<tr>
		
			<td><input type="text" name="CSU_code" value="<?php echo $user[$i]->CSU_Imprint_code; ?>" hidden /></td>
		
	</tr>
	<tr>
		
		<td><input type="text" value="<?php echo $user[$i]->CSU_Quantity; ?>" name="quantity" placeholder="Quantity"/></td>
		<td><span class="text-danger"><?php echo form_error('quantity');?></span></td>
	</tr>
</br>
	

</br>
		<select name="cs_type" values="<?php echo $user[$i]->CSU_Type; ?> id="cs_type"">
    		<option value="Phencyclidine (PCP)">Phencyclidine (PCP)</option>
    		<option value="Gamma-Hydroxybutyric Acid (GHB)">Gamma-Hydroxybutyric Acid (GHB)</option>
    		<option value="Gamma Butyrolactone (GBL)">Gamma-Butyrolactone (GBL)</option>
    		<option value="Butanediol">Butanediol</option>
    		<option value="Anabolic Steroids">Anabolic Steroids</option>
    		</select>
</br>
	<tr>
		
		<td><input type="text" value="<?php echo $user[$i]->CSU_Received_date; ?>" name="receivedDate" placeholder="Received Date"/></td>
		<td><span class="text-danger"><?php echo form_error('receivedDate');?></span></td>
	</tr>
</br>



	<select name="cs_form" id="cs_form" values="<?php echo $user[$i]->CSU_Form; ?>">
		
    		<option value="Tablets">Tablets</option>
    		<option value="Liquid">Liquid</option>
    		<option value="Capsules">Capsules</option>
    		<option value="Powders">Powders</option>
    		<option value="Irregular Masses">Irregular Masses</option>
    		<option value="Plant Material">Plant Material</option>
    		<option value="Invisible Deposits">Invisible Deposits</option>
		
  			</select>
	</br>
	
	<div class="col-xs-4">
	 <label for="form"> Unit Type</label>
	   	<div class="form-group">
     	 <select class="form-control" name="load_unit" id="load_unit">
     	 	<?php
            foreach($groups as $row)
            { 
              echo '<option value="'.$row->Unit_Type.'">'.$row->Unit_Type.'</option>';
            }
            ?>
    				 </select>
		 </div>
		 </div>

</br>
	<tr>
		<td><input type="submit" name="submit" value="Submit"/></td>
	</tr>


</table>
<?php } ?>
</form>

</div>
