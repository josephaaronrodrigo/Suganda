<?php
$date = date('Y-m-d', strtotime($_GET['d']));
$plant_no = $_GET['p'];
include '../../model/production.php';
include '../../model/general.php';
$obj = new Production();
$obj1 = new General();
$result2 = $obj1->getPlant($plant_no);
$array2 = mysql_fetch_array($result2);
$location = $array2['location'];
?>
<div class="row">


    <div class="col-md-12">

        <div class="table-responsive">


            <tbody>

            <table class="table table-bordered table-condensed">
                <h2 style="text-align: center;"><?php echo $location; ?> - Plant <?php echo $plant_no; ?></h2><br>
                <tr>
                    <th class="btn-info" style="text-align: center; width: 200px; background-color: #5bc0de;"><text style="font-size: 16px;">Style</text></th>
                    <?php
                    $i = 1;
                    while ($i < 11) {
                        $result = $obj->getPackedStyle($date, $plant_no, $i);
                        $array5 = mysql_fetch_array($result);
                        $style = $array5['style'];
                        ?>
                        <td style="margin: 0; padding: 0; background-color: #337ab7;"><input style="color: white; background-color: #337ab7;display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center;" type="text" class="form-control" readonly value="<?php echo $style; ?>"/></td>
                        <?php
                        $i++;
                    }
                    ?>


                </tr>
                <tr>
                    <th class="btn-info" style="text-align: center; width: 150px; background-color: #5bc0de;"><text style="font-size: 16px;">Line Number</text></th>
                    <td style="margin: 0; padding: 0; color: white; background-color: #337ab7;"><input readonly value="1" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" /></td>
                    <td style="margin: 0; padding: 0; color: white; background-color: #337ab7;"><input readonly value="2" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" /></td>
                    <td style="margin: 0; padding: 0; color: white; background-color: #337ab7;"><input readonly value="3" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" /></td>
                    <td style="margin: 0; padding: 0; color: white; background-color: #337ab7;"><input readonly value="4" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" /></td>
                    <td style="margin: 0; padding: 0; color: white; background-color: #337ab7;"><input readonly value="5" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" /></td>
                    <td style="margin: 0; padding: 0; color: white; background-color: #337ab7;"><input readonly value="6" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" /></td>
                    <td style="margin: 0; padding: 0; color: white; background-color: #337ab7;"><input readonly value="7" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" /></td>
                    <td style="margin: 0; padding: 0; color: white; background-color: #337ab7;"><input readonly value="8" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" /></td>
                    <td style="margin: 0; padding: 0; color: white; background-color: #337ab7;"><input readonly value="9" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" /></td>
                    <td style="margin: 0; padding: 0; color: white; background-color: #337ab7;"><input readonly value="10" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" /></td>

                </tr>
                <?php
                $j = 1;
                while ($j < 13) {
                    $result3 = $obj1->getSessionTime($j);
                    $array6 = mysql_fetch_array($result3);
                    $time = date('h:i a', strtotime($array6['time']));
                    if ($j < 10) {
                        $j = '0' . $j;
                    }
                    ?>
                    <tr>
                        <th class="btn-info" style="text-align: center; width: 150px; background-color: #5bc0de;"><text style="font-size: 16px;">Session <?php echo $j; ?> - <?php echo $time; ?></text></th>
                        <?php
                        $i = 1;
                        while ($i < 11) {
                            $result1 = $obj->packingReport($date, $plant_no, $i, $j);
                            $array1 = mysql_fetch_array($result1);
                            $modal = false;
                            ?>
                            <td style="margin: 0; padding: 0;">
				<input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: white" readonly type="text" class="form-control" name="one_one" value="<?php echo $array1['output']; ?>"/></a> 
                            </td>
                            <?php
                            $i++;
                        }
                        ?>
                    </tr>
                    <?php
                    $j++;
                }
                ?>
                <tr>
                	<th class="btn-success" style="text-align: center; width: 150px; background-color: #5bc0de;"><text style="font-size: 16px;">Total Output</text></th>
                	<?php
                	$i =1;
                	while($i<11){
                	$result6 = $obj -> totalPacked($plant_no, $date, $i);
                	$array6 = mysql_fetch_array($result6);
                	?>
                	<td style="margin: 0; padding: 0;" >
                               <input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: " readonly type="text" class="form-control" name="one_one" value="<?php echo $array6['total']; ?>"/>
                            </td>
                	<?php
                	$i++;
                	}
                	?>
                </tr>

            </table>

            <div class="clearfix"></div>
            <ul class="pagination pull-right">
                <li <?php
                if ($plant_no == 1) {
                    echo 'class="disabled"';
                }
                ?>><a href="#" onclick="prev()"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                <li <?php
                if ($plant_no == 1) {
                    echo 'class="active"';
                }
                ?>><a href="#" onclick="getPlantData(1)">1</a></li>;
                <li <?php
                if ($plant_no == 2) {
                    echo 'class="active"';
                }
                ?>><a href="#" onclick="getPlantData(2)">2</a></li>
                <li <?php
                if ($plant_no == 3) {
                    echo 'class="active"';
                }
                ?>><a href="#" onclick="getPlantData(3)">3</a></li>
                <li <?php
                if ($plant_no == 4) {
                    echo 'class="active"';
                }
                ?>><a href="#" onclick="getPlantData(4)">4</a></li>
                <li <?php
                if ($plant_no == 5) {
                    echo 'class="active"';
                }
                ?>><a href="#" onclick="getPlantData(5)">5</a></li>
                <li <?php
                if ($plant_no == 6) {
                    echo 'class="active"';
                }
                ?>><a href="#" onclick="getPlantData(6)">6</a></li>
                <li <?php
                if ($plant_no == 6) {
                    echo 'class="disabled"';
                }
                ?>><a href="#" onclick="next()"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
            </ul>


        </div>

    </div>
</div>