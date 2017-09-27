<?php
$d = $_GET['d'];
$date = date('Y-m-d', strtotime($d));
$plant_no = $_GET['p'];
include '../../model/production.php';
$obj = new Production();
$i = 1;
while($i < 11){
	$rmo = $obj -> lineReport($plant_no, $date, $i, 'mos');
	$amo = mysql_fetch_array($rmo);
	$mos = $amo['mos'];
	$rothers = $obj -> lineReport($plant_no, $date, $i, 'others');
	$aothers = mysql_fetch_array($rothers);
	$others = $aothers['others'];
	if($i< 10){
		$i = '0'.$i;
	}
	if(mysql_num_rows($rmo)>0){
	?>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-3">
                        <b><span class="col-md-2 control-label">Line <?php echo $i;?> :</span></b>
                        <input type="hidden" name="line_no[]" value="<?php echo $i;?>">
                        
                        <div class="form-group row"><div class="col-md-3">
                                <input type="text"  class="form-control" id="inputKey" placeholder="No. of M/Os" name="mos[]" value="<?php echo $mos;?>">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="output" placeholder="No. of Others" name="others[]" value="<?php echo $others;?>">
                            </div>
                            

                        </div>
                    </div>
                </div>
                <?php
                }
                $i++;
                }
                ?>
                
                <div class="form-group">
                    <div class="pull-right">
                    <input type="submit" class="btn btn-success" value="Submit">
                    <input type="hidden" name="switch" value="7">


                    


                
            </div>