<?php
$i = 1;
while($i < 21){
	if($i< 10){
		$i = '0'.$i;
	}
	?>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-3">
                        <b><span class="col-md-2 control-label">Line <?php echo $i;?> :</span></b>
                        <input type="hidden" name="line_no[]" value="<?php echo $i;?>">
                        <div class="form-group row">
                        <div class="col-md-3">
                                <input type="text"  class="form-control" id="inputKey" placeholder="No. of M/Os" name="mos[]">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="output" placeholder="No. of Helpers" name="helpers[]">
                            </div>
                            <div class="col-md-3">
                                <input type="text"  class="form-control" id="inputKey" placeholder="No. of Others" name="others[]">
                            </div>
                            

                        </div>
                    </div>
                </div>
                <?php
                $i++;
                }
                ?>
                
                <div class="form-group">
                    <div class="pull-right">
                    <input type="submit" class="btn btn-success" value="Submit">
                    <input type="hidden" name="switch" value="6">


                    


                
            </div>