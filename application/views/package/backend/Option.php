 <form enctype="multipart/form-data" id="optionForm" name="optionForm" method="post">
<div class="form-group row">
	<label class="col-md-3">Traveling date</label>
	<div class="col-md-8"><input type="text" id="Traveling_date" name="Traveling_date" class="form-control" ></div>
</div>
     <div class="form-group row" style="display: none">
	<label class="col-md-3">Total day</label>
	<div class="col-md-8"><input type="text" id="duration" name="duration" class="form-control"></div>
</div>
<div class="form-group row">
	<label class="col-md-3">Adult Price</label>
	<div class="col-md-8"><input type="text" id="Adult" name="Adult" class="form-control"></div>
</div>
<div class="form-group row">
	<label class="col-md-3">Adult Price (Alone)</label>
	<div class="col-md-8"><input type="text" id="aloneAdult" name="aloneAdult" class="form-control"></div>
</div>
<div class="form-group row">
	<label class="col-md-3">Child Price</label>
	<div class="col-md-8"><input type="text" id="Child" name="Child" class="form-control"></div>
</div>
<div class="form-group row">
	<label class="col-md-3">Child Price (Extra bed)</label>
	<div class="col-md-8"><input type="text" id="Childadd" name="Childadd" class="form-control"></div>
        <input type="hidden" name="currentID" id="currentID" value="<?php echo $packageID?>" >
        <input type="hidden" name="currentID2" id="currentID2" >
</div>
    
<div align="center">
   <button type="button" class="btn btn-success btn-sm" onClick="addOption()">Add / Edit Data</button>
</div>
      </form>