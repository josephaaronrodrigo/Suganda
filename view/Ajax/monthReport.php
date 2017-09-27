<?php 
$y = $_GET['y'];
$m = $_GET['m'];
$style = $_GET['s'];
include '../../model/production.php';
$obj = new Production();
$today_period = date('Y-m');
$period = date('Y-m',strtotime($m." ".$y));
if($today_period == $period){
	$days = date('d');
}else{
	$days = cal_days_in_month(CAL_GREGORIAN, date('m',strtotime($m." ".$y)), $y);
}
?>

<div class="table-responsive">


                        <tbody>

                        <table class="table table-bordered table-condensed">
                            <h2 style="text-align: center;"><b>Monthly Summary - <?php echo $style;?></b></h2><br>
                            <tr>
                                <th style="color: white; text-align: center; width: 30px; background-color: #5bc0de; vertical-align: middle"><text style="font-size: 16px;">Day</text></th>
                                <th style=" width: 100px; word-wrap: break-word; color: white; background-color: #5bc0de; text-align: center; vertical-align: middle; font-size: 16px;">Planned Qty</th>
                                <th style=" width: 100px; word-wrap: break-word; color: white; background-color: #5bc0de; text-align: center; vertical-align: middle; font-size: 16px;">Achieved Qty</th>
                                <th style=" width: 100px; word-wrap: break-word; color: white; background-color: #5bc0de; text-align: center; vertical-align: middle; font-size: 16px;">Variance</th>
                                <td rowspan=31 style=" width: 100px; word-wrap: break-word; width: 2px"></td>
                                <th style=" width: 100px; word-wrap: break-word; color: white; background-color: #5bc0de; text-align: center; vertical-align: middle; font-size: 16px;">Cum. Plan Qty</th>
                                <th style=" width: 100px; word-wrap: break-word; color: white; background-color: #5bc0de; text-align: center; vertical-align: middle; font-size: 16px;">Cum. Achieved Qty</th>
                                <th style=" width: 100px; word-wrap: break-word; color: white; background-color: #5bc0de; text-align: center; vertical-align: middle; font-size: 16px;">Variance</th>
                                <td rowspan=31 style=" width: 100px; word-wrap: break-word; width: 2px"></td>
                                <th style=" width: 100px; word-wrap: break-word; color: white; background-color: #5bc0de; text-align: center; vertical-align: middle; font-size: 16px;">Planned Income</th>
                                <th style=" width: 100px; word-wrap: break-word; color: white; background-color: #5bc0de; text-align: center; vertical-align: middle; font-size: 16px;">Achieved Income</th>
                                <th style=" width: 100px; word-wrap: break-word; color: white; background-color: #5bc0de; text-align: center; vertical-align: middle; font-size: 16px;">Variance</th>
                                <td rowspan=31 style=" width: 100px; word-wrap: break-word; width: 2px"></td>
                                <th style=" width: 100px; word-wrap: break-word; color: white; background-color: #5bc0de; text-align: center; vertical-align: middle; font-size: 16px;">Cum. Plan Income</th>
                                <th style=" width: 100px; word-wrap: break-word; color: white; background-color: #5bc0de; text-align: center; vertical-align: middle; font-size: 16px;">Cum. Achieved Income</th>
                                <th style=" width: 100px; word-wrap: break-word; color: white; background-color: #5bc0de; text-align: center; vertical-align: middle; font-size: 16px;">Variance</th>
                                

                            </tr>
                            <?php
                            $i = 1;
                            while($i <= $days){
                            	if($i < 10){
                            		$i = '0'.$i;
                            	}
                            	$date = date('Y-m-d', strtotime($i." ".$m." ".$y));
                            	$result1 = $obj ->productionOut($style, $date);
                            	$array1 = mysql_fetch_array($result1);
                            	$achieved_out = $array1['total'];
                            	if($achieved_out == ""){
                            		$achieved_out = 0;
                            	}
                            	$unit_price = $obj -> getUnitPriceForRep($style, $date);
                            	
                           ?>
                            	<tr>
                                <th  style="text-align: center; width: 30px; background-color: #5cb85c; color: white; font-size: 16px;"><?php echo $i;?></th>
                                <td style="width: 100px; word-wrap: break-word;  width: 100px; word-wrap: break-word; background-color: white; text-align: right; vertical-align: middle;"></td>
                                <td style=" width: 100px; word-wrap: break-word; background-color: white; text-align: right; vertical-align: middle;"><?php echo $achieved_out;?></td>
                                <td style="margin: 0; word-wrap: break-word; padding: 0; background-color: white; text-align: center; vertical-align: middle;"></td>
                                
                                <td style=" width: 100px; word-wrap: break-word; background-color: white; text-align: center; vertical-align: middle;"></td>
                                <?php
                                $cum_achieved = $obj -> monthRepCum($style,$date);
                                if($cum_achieved == ""){
                                	$cum_achieved = 0;
                                }
                                ?>
                                <td style=" width: 100px; word-wrap: break-word; background-color: white; text-align: right; vertical-align: middle;"><?php echo $cum_achieved;?></td>
                                <td style=" width: 100px; word-wrap: break-word; background-color: white; text-align: right; vertical-align: middle;"></td>
                                
                                <td style=" width: 100px; word-wrap: break-word; background-color: white; text-align: right; vertical-align: middle;"></td>
                                <td style=" width: 100px; word-wrap: break-word; background-color: white; text-align: right; vertical-align: middle;"><?php echo number_format(($unit_price * $achieved_out),2,'.',',');?></td>
                                <td style=" width: 100px; word-wrap: break-word; background-color: white; text-align: right; vertical-align: middle;"></td>
                                
                                <td style=" width: 100px; word-wrap: break-word; background-color: white; text-align: right; vertical-align: middle;"></td>
                                <td style=" width: 100px; word-wrap: break-word; background-color: white; text-align: right; vertical-align: middle;"><?php echo number_format(($unit_price * $cum_achieved),2,'.',',');?></td>
                                <td style=" width: 100px; word-wrap: break-word; background-color: white; text-align: right; vertical-align: middle;"></td>
			</tr>
	
                            	
                            	
                            <?php	
                            	$i++;
                            }
                            ?>
                            
                        </table>

                        <div class="clearfix"></div>
                        
                    </div>