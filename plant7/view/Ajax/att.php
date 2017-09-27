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
            <td></td>
            <td align="center" style="background-color: brown; color: white;"><b>Plant 7</b></td>
            <td align="center" style="background-color: #333333; color: white;"><b>Total</b></td>


        </tr>
        <tr>

            <!-- STAFF -->  
        <tr>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><div><span>01</span></div></td>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><div><span>Staff</span></div></td>

            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;">On Roll</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Staff', $i, $date, 'on_roll');
                $array = mysql_fetch_array($result);
                $count = $array['on_roll'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>


        </tr>
        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center; background-color: #c5c5c5;">Present</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Staff', $i, $date, 'present');
                $array = mysql_fetch_array($result);
                $count = $array['present'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>

            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>
        </tr>

        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center; background-color: #c5c5c5;">Absent</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Staff', $i, $date, 'absent');
                $array = mysql_fetch_array($result);
                $count = $array['absent'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>


        </tr>
        <!-- END OF STAFF-->



        <!-- LINE LEADERS-->  
        <tr><td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><div><span>02</span></div></td>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center; "><div><span>Line Leaders</span></div></td>

            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; ">On Roll</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Line Leaders', $i, $date, 'on_roll');
                $array = mysql_fetch_array($result);
                $count = $array['on_roll'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; "><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; "><?php echo $rowtot; ?></td>



        </tr>
        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center; ">Present</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Line Leaders', $i, $date, 'present');
                $array = mysql_fetch_array($result);
                $count = $array['present'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; "><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; "><?php echo $rowtot; ?></td>

        </tr>

        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">Absent</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Line Leaders', $i, $date, 'absent');
                $array = mysql_fetch_array($result);
                $count = $array['absent'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; "><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>

        </tr>

        <!-- END OF LINE LEADERS-->






        <!-- MACHINE OPERATORS-->  
        <tr>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><div><span>03</span></div></td>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><div><span>M/O</span></div></td>

            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;">On Roll</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('M/O', $i, $date, 'on_roll');
                $array = mysql_fetch_array($result);
                $count = $array['on_roll'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>


        </tr>
        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center; background-color: #c5c5c5;">Present</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('M/O', $i, $date, 'present');
                $array = mysql_fetch_array($result);
                $count = $array['present'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>
        </tr>

        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center; background-color: #c5c5c5;">Absent</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('M/O', $i, $date, 'absent');
                $array = mysql_fetch_array($result);
                $count = $array['absent'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>

        </tr>
        <!-- END OF MACHINE OPERATORS-->





        <!-- QUALITY -->  
        <tr><td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><div><span>04</span></div></td>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center;"><div><span>Q/C</span></div></td>

            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;">On Roll</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Q/C', $i, $date, 'on_roll');
                $array = mysql_fetch_array($result);
                $count = $array['on_roll'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>


        </tr>
        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">Present</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Q/C', $i, $date, 'present');
                $array = mysql_fetch_array($result);
                $count = $array['present'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>

        </tr>

        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">Absent</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Q/C', $i, $date, 'absent');
                $array = mysql_fetch_array($result);
                $count = $array['absent'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>

        </tr>
        <!-- END OF QUALITY -->

        <!-- HELPERS -->  
        <tr><td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><div><span>05</span></div></td>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><div><span>Helpers</span></div></td>

            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;">On Roll</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Helpers', $i, $date, 'on_roll');
                $array = mysql_fetch_array($result);
                $count = $array['on_roll'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>


        </tr>
        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center; background-color: #c5c5c5;">Present</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Helpers', $i, $date, 'present');
                $array = mysql_fetch_array($result);
                $count = $array['present'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>

        </tr>

        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center; background-color: #c5c5c5;">Absent</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Helpers', $i, $date, 'absent');
                $array = mysql_fetch_array($result);
                $count = $array['absent'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>

        </tr>
        <!-- END OF HELPERS-->


        <!-- PACKING -->  
        <tr><td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><div><span>06</span></div></td>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center;"><div><span>Packing</span></div></td>
            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">On Roll</td>

            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Packing', $i, $date, 'on_roll');
                $array = mysql_fetch_array($result);
                $count = $array['on_roll'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>


        </tr>
        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">Present</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Packing', $i, $date, 'present');
                $array = mysql_fetch_array($result);
                $count = $array['present'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>

        </tr>

        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">Absent</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Packing', $i, $date, 'absent');
                $array = mysql_fetch_array($result);
                $count = $array['absent'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>

        </tr>

        <!-- END OF PACKING -->

        <!-- CUTTING -->  
        <tr><td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><div><span>07</span></div></td>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><div><span>Cutting</span></div></td>

            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;">On Roll</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Cutting', $i, $date, 'on_roll');
                $array = mysql_fetch_array($result);
                $count = $array['on_roll'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>


        </tr>
        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center; background-color: #c5c5c5;">Present</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Cutting', $i, $date, 'present');
                $array = mysql_fetch_array($result);
                $count = $array['present'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>

        </tr>

        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center; background-color: #c5c5c5;">Absent</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Cutting', $i, $date, 'absent');
                $array = mysql_fetch_array($result);
                $count = $array['absent'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>

        </tr>

        <!-- END OF CUTTING -->

        <!-- STORES -->  
        <tr><td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><div><span>08</span></div></td>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center;"><div><span>Stores</span></div></td>

            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;">On Roll</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Stores', $i, $date, 'on_roll');
                $array = mysql_fetch_array($result);
                $count = $array['on_roll'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>

            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>

        </tr>
        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">Present</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Stores', $i, $date, 'present');
                $array = mysql_fetch_array($result);
                $count = $array['present'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>

        </tr>

        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">Absent</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Stores', $i, $date, 'absent');
                $array = mysql_fetch_array($result);
                $count = $array['absent'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>
        </tr>

        <!-- END OF STORES -->


        <!-- OTHERS -->  
        <tr><td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><div><span>09</span></div></td>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><div><span>Others</span></div></td>

            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;">On Roll</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Others', $i, $date, 'on_roll');
                $array = mysql_fetch_array($result);
                $count = $array['on_roll'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; border: 5px; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>


        </tr>
        <tr>

            <td style="margin: 0; padding: 0; background-color: #C5C5C5; vertical-align: middle; text-align: center;">Present</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Others', $i, $date, 'present');
                $array = mysql_fetch_array($result);
                $count = $array['present'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>

        </tr>

        <tr>

            <td style="margin: 0; padding: 0; background-color: #C5C5C5; vertical-align: middle; text-align: center;">Absent</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Others', $i, $date, 'absent');
                $array = mysql_fetch_array($result);
                $count = $array['absent'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>

        </tr>

        <!-- END OF OTHERS-->



        <!-- TOTAL -->

        <tr>
            <td rowspan="3" colspan="2" style="background-color: lightslategray; color: white; margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center;"><div><span>Total</span></div></td>

            <td style="background-color: lightslategray; color: white; margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;">On Roll</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttTotal($date, 'on_roll', $i);
                $array = mysql_fetch_array($result);
                $count = $array['total'];

                $rowtot += $count;
                ?>
                <td style="background-color: lightslategray; margin: 0; color: white; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="background-color: lightslategray; margin: 0; color: white; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>



        </tr>
        <tr>

            <td style="background-color: lightslategray; color: white; margin: 0; padding: 0; background-color: lightslategray; vertical-align: middle; text-align: center;">Present</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttTotal($date, 'present', $i);
                $array = mysql_fetch_array($result);
                $count = $array['total'];
                $rowtot += $count;
                ?>
                <td style="background-color: lightslategray; margin: 0; color: white; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="background-color: lightslategray; margin: 0; color: white; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>


        </tr>

        <tr>

            <td style="background-color: lightslategray; color: white; margin: 0; padding: 0; background-color: lightslategray; vertical-align: middle; text-align: center;">Absent</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttTotal($date, 'absent', $i);
                $array = mysql_fetch_array($result);
                $count = $array['total'];
                $rowtot += $count;
                ?>
                <td style="background-color: lightslategray; color: white; margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="background-color: lightslategray; margin: 0; color: white; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>               

        </tr>
    </table>
    <table class="table table-bordered table-condensed">
        <tr>
            <td style="background-color: #ffe877; color: black; margin: 0; width: 130px; padding: 0; vertical-align: middle; text-align: center;"><div><span>M/O</span></div></td>


            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('M/O', $i, $date, 'on_roll');
                $array = mysql_fetch_array($result);
                $count = $array['on_roll'];
                $rowtot += $count;
                ?>
                <td style="background-color: #ffe877; margin: 0; color: black; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="background-color: #ffe877; margin: 0; color: black; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>



        </tr>
        <tr>
            <td style="background-color: #ffe877; color: black; margin: 0; width: 130px; padding: 0; vertical-align: middle; text-align: center;"><div><span>Others</span></div></td>


            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result1 = $obj->getAttendance('M/O', $i, $date, 'on_roll');
                $array1 = mysql_fetch_array($result1);
                $count1 = $array1['on_roll'];
                $rowtot1 += $count1;

                $result = $obj->getAttTotal($date, 'on_roll', $i);
                $array = mysql_fetch_array($result);
                $count = $array['total'] - $count1;
                $rowtot += $count;
                ?>
                <td style="background-color: #ffe877; margin: 0; color: black; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="background-color: #ffe877; margin: 0; color: black; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>



        </tr>

        <tr>
            <td style="background-color: #ffe877; color: black; margin: 0; width: 130px; padding: 0; vertical-align: middle; text-align: center;"><div><span>+/-</span></div></td>


            <?php
            $i = 7;
            $rowtot = 0;
            $rowtot1 = 0;
            while ($i < 8) {
                $result1 = $obj->getAttendance('M/O', $i, $date, 'on_roll');
                $array1 = mysql_fetch_array($result1);
                $count1 = $array1['on_roll'];
                $rowtot1 += $count1;

                $result = $obj->getAttTotal($date, 'on_roll', $i);
                $array = mysql_fetch_array($result);
                $count = $array['total'] - $count1;
                $rowtot += $count;
                ?>
                <td style="background-color: #ffe877; margin: 0; color: black; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo ($count - $count1); ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="background-color: #ffe877; margin: 0; color: black; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo ($rowtot - $rowtot1); ?></td>



        </tr>
    </table>
    <!-- END OF GENERAL -->
    <table class="table table-bordered table-condensed">
        <tr>
            <td style="background-color: lightslategray; color: white; margin: 0; width: 130px; padding: 0; vertical-align: middle; text-align: center;"><div><span>Resigned</span></div></td>


            <?php
            $i = 7;
            $rowtot = 0;
            $rowtot1 = 0;
            while ($i < 8) {
                $result = $obj->getResTot($date, 'resigned', $i);
                $array = mysql_fetch_array($result);
                $total = $array['total'];
                $rowtot +=$total;
                ?>
                <td style="background-color: lightslategray; margin: 0; color: white; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $total; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="background-color: lightslategray; margin: 0; color: white; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>



        </tr>
        <tr>
            <td style="background-color: lightslategray; color: white; margin: 0; width: 130px; padding: 0; vertical-align: middle; text-align: center;"><div><span>Interviewed</span></div></td>


            <?php
            $i = 7;
            $rowtot = 0;
            $rowtot1 = 0;
            while ($i < 8) {
                $result = $obj->getResTot($date, 'interviewed', $i);
                $array = mysql_fetch_array($result);
                $total = $array['total'];
                $rowtot +=$total;
                ?>
                <td style="background-color: lightslategray; margin: 0; color: white; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $total; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="background-color: lightslategray; margin: 0; color: white; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>



        </tr>
        <tr>
            <td style="background-color: lightslategray; color: white; margin: 0; width: 130px; padding: 0; vertical-align: middle; text-align: center;"><div><span>New</span></div></td>


            <?php
            $i = 7;
            $rowtot = 0;
            $rowtot1 = 0;
            while ($i < 8) {
                $result = $obj->getResTot($date, 'new', $i);
                $array = mysql_fetch_array($result);
                $total = $array['total'];
                $rowtot +=$total;
                ?>
                <td style="background-color: lightslategray; margin: 0; color: white; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $total; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="background-color: lightslategray; margin: 0; color: white; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>



        </tr>
    </table>

    <table class="table table-bordered table-condensed">
        <!-- TRAINING-->  
        <tr>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><div><span>10</span></div></td>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><div><span>Training Center</span></div></td>

            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;">On Roll</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Training Center', $i, $date, 'on_roll');
                $array = mysql_fetch_array($result);
                $count = $array['on_roll'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>


        </tr>
        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center; background-color: #c5c5c5;">Present</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Training Center', $i, $date, 'present');
                $array = mysql_fetch_array($result);
                $count = $array['present'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>

        </tr>

        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center; background-color: #c5c5c5;">Absent</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Training Center', $i, $date, 'absent');
                $array = mysql_fetch_array($result);
                $count = $array['absent'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>

        </tr>
        <!-- END OF TRAINING-->
    </table>
    <br>
    <table class="table table-bordered table-condensed">
        <tr>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center;"><div><span>Pregnant Women</span></div></td>

            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;">On Roll</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Pregnant Women', $i, $date, 'on_roll');
                $array = mysql_fetch_array($result);
                $count = $array['on_roll'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>


        </tr>
        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">Present</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Pregnant Women', $i, $date, 'present');
                $array = mysql_fetch_array($result);
                $count = $array['present'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>

        </tr>

        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">Absent</td>
            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Pregnant Women', $i, $date, 'absent');
                $array = mysql_fetch_array($result);
                $count = $array['absent'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $rowtot; ?></td>

        </tr>

    </table>
    <br>
    <table class="table table-bordered table-condensed" style="table-layout:fixed;">
        <tr>
            <td rowspan="3" colspan="2" style="margin: 0;  padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><div><span>Maternity Leave</span></div></td>


            <?php
            $i = 7;
            $rowtot = 0;
            while ($i < 8) {
                $result = $obj->getAttendance('Maternity Leave', $i, $date, 'on_roll');
                $array = mysql_fetch_array($result);
                $count = $array['on_roll'];
                $rowtot += $count;
                ?>	
                <td style="margin: 0;  padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $count; ?></td>
                <?php
                $i++;
            }
            ?>
            <td style="margin: 0;  padding: 0; vertical-align: middle; text-align: center; background-color: #c5c5c5;"><?php echo $rowtot; ?></td>


        </tr>
    </table>
    <div class="clearfix"></div>


</div>
