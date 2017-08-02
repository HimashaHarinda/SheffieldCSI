<div class="container">
<h1><?php echo $data; ?> </h1>
<form action="<?php echo base_url().'index.php/analytical_technique/update';?>" method="post">
     <?php for($i = 0; $i < count($user); ++$i){?>

<table>
    <tr>
        <td><input type="text" name="at_id" value="<?php echo $user[$i]->technique_ID; ?>" hidden /></td>
    </tr>
	
    <div class="col-xs-4">
		 <label for="technique">Technique</label>
         <input class="form-control" id="ex3" type="text" value="<?php echo $user[$i]->technique; ?>" name="technique" placeholder="Crime Type">
        
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
    <div class="col-xs-4">
		 <label for="tech_type">Tech Type</label>
         <input class="form-control" id="ex3" type="text" value="<?php echo $user[$i]->tech_type; ?>" name="tech_type" placeholder="yyyy-mm-dd">
        
    </div>
	<br/>
    <br/>
    <br/>
    <br/>
	
<br/>
    <br/>
    <br/>
    <br/>

            <button type="submit" align="center" name="submit" value="Submit" class="btn btn-primary">Submit</button>

    <br/>
</br>
	

</table>
<?php } ?>
</form>

</div>
