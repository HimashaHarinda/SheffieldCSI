<div class="container" >
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/analytical_technique/save';?>" method="post">
<table>

	<div class="col-xs-4">
		 <label for="technique">Technique</label>
         <input class="form-control" id="ex3" type="text" name="technique" placeholder="Technique">
         <span class="text-danger"><?php echo form_error('technique');?></span>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
         <label for="tech_type">Tech Type</label>
         <input class="form-control" id="ex3" type="text" name="tech_type" placeholder="Tech Type">
         <span class="text-danger"><?php echo form_error('tech_type');?></span>
   
    </div>
  <br/>
    <br/>
    <br/>
    <br/>
    
     <button type="submit" align="center" name="submit" value="Submit" class="btn btn-primary">Submit</button>

</br>
</table>
</form>

</div>
