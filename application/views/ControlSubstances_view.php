
<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/ControlSubstances/save';?>" method="post">
<table>

	<div class="col-xs-4">
		 <label for="Quantity">Quantity</label>
        <input class="form-control" id="ex3" type="text" name="quantity" placeholder="Quantity">
        <span class="text-danger"><?php echo form_error('quantity');?></span>
    </div>
	<br/>
	<br/>	
	<br/>
	<br/>
	<div class="col-xs-4">
	 <label for="form">Form</label>
	   	<div class="form-group">
     	 <select class="form-control" name="cs_form" id="cs_form">
    		<option value="tablets">Tablets</option>
    		<option value="liquid">Liquid</option>
    		<option value="capsules">Capsules</option>
    		<option value="powders">Powders</option>
    		<option value="irregularMasses">Irregular Masses</option>
    		<option value="plantMaterial">Plant Material</option>
    		<option value="invisibleDeposits">Invisible Deposits</option>
		 </select>
		 </div>
		 </div>
	<br/>
	<br/>
	<br/>
	<br/>



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
	<br/>
	<br/>
	<br/>
	<br/>


	<div class="col-xs-4">
		 <label for="type">Type</label>
   	<div class="form-group">
    <select class="form-control" name="cs_type" id="cs_type">
      <option value="phencyclidine">Phencyclidine (PCP)</option>
    		<option value="gammaHydroxybutyricAcid">Gamma-hydroxybutyric acid (GHB)</option>
    		<option value="gammaButyrolactone">Gamma-butyrolactone (GBL)</option>
    		<option value="butanediol">Butanediol</option>
    		<option value="anabolicSteroids">Anabolic Steroids</option>
    </select>
    </div>
	</div>
	<br/>
	<br/>
	<br/>
	<br/>
		<div class="col-xs-4">
			 <label for="ReceivedDate">Received Date</label>
		<input class="form-control" id="ex3" type="text" name="receivedDate" placeholder="yyyy-mm-dd">
        <span class="text-danger"><?php echo form_error('receivedDate');?></span>
        <br/>
         <button type="submit" align="center" name="submit" value="Submit" class="btn btn-primary">Submit</button>
        </div>
    <br/>
</br>
	

</table>
</form>

</div>
