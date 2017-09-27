<?php
$d = $_GET['d'];
$date = date('Y-m-d', strtotime($d));
include '../../model/production.php';
$obj = new Production();
?>
<div class="table-responsive">


                        <tbody>

                        <table class="table table-bordered table-condensed">
                            <br>
                            <tr>

                                <td></td>
                                <td></td>
                                <td align="center" style="background-color: brown; color: white;"><b>Plant 7</b></td>

                            </tr>
                            <tr>

<?php
$i = 1;
while($i < 21){
	if($i < 10){
		$i = '0'.$i;
	}
	?>

                                <!-- GENERAL -->  
                            <tr>
                                <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center;"><div><span>Line <?php echo $i;?></span></div></td>

                                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;">Number of M/Os</td>
				<?php
                                $j = 7;
				while ($j < 8){
					$result = $obj ->lineReport($j, $date, $i, 'mos');
					$array = mysql_fetch_array($result);
					$mos = $array['mos'];
					?>	
                                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $mos;?></td>
                                <?php
                                $j++;
                                }
                                ?>
                                


                            </tr>
                            <tr>

                                <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">Helpers</td>
                                <?php
                                $j = 7;
				while ($j < 8){
					$result = $obj ->lineReport($j, $date, $i, 'helpers');
					$array = mysql_fetch_array($result);
					$mos = $array['helpers'];
					?>	
                                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $mos;?></td>
                                <?php
                                $j++;
                                }
                                ?>
                                
                                    
                                

                            </tr>
                            <tr>

                                <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">Others</td>
                                <?php
                                $j = 7;
				while ($j < 8){
					$result = $obj ->lineReport($j, $date, $i, 'others');
					$array = mysql_fetch_array($result);
					$mos = $array['others'];
					?>	
                                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $mos;?></td>
                                <?php
                                $j++;
                                }
                                ?>
                                
                                    
                                

                            </tr>
                            <?php
                            $i++;
                            }
                            ?>


                            
                            <!-- END OF GENERAL -->
                            
                            <tr>
                                <td rowspan="3" style="background-color: lightslategray; margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center;"><div><span>Total</span></div></td>

                                <td style="background-color: lightslategray; margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;">Number of M/Os</td>
                                <?php
                                $j = 7;
				while ($j < 8){
					$result = $obj ->lineRepTot($j, $date, 'mos');
					$array = mysql_fetch_array($result);
					$total = $array['total'];
					?>	
                                <td style="background-color: lightslategray; margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $total;?></td>
                                <?php
                                $j++;
                                }
                                ?>
                                


                            </tr>
                            <tr>

                                <td style="background-color: lightslategray; margin: 0; padding: 0; background-color: lightslategray; vertical-align: middle; text-align: center;">Helpers</td>
                                <?php
                                $j = 7;
				while ($j < 8){
					$result = $obj ->lineRepTot($j, $date, 'helpers');
					$array = mysql_fetch_array($result);
					$total = $array['total'];
					?>	
                                <td style="background-color: lightslategray; margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $total;?></td>
                                <?php
                                $j++;
                                }
                                ?>

                            </tr>
                            <tr>

                                <td style="background-color: lightslategray; margin: 0; padding: 0; background-color: lightslategray; vertical-align: middle; text-align: center;">Others</td>
                                <?php
                                $j = 7;
				while ($j < 8){
					$result = $obj ->lineRepTot($j, $date, 'others');
					$array = mysql_fetch_array($result);
					$total = $array['total'];
					?>	
                                <td style="background-color: lightslategray; margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $total;?></td>
                                <?php
                                $j++;
                                }
                                ?>

                            </tr>

                            
                            
                            <!-- END OF GENERAL -->
                            
                        </table>
<br><br>
                        <div class="clearfix"></div>


                    </div>
