<?php
$d = $_GET['d'];
$date = date('Y-m-d', strtotime($d));
?>
<div class="table-responsive">

    <table class="table table-bordered table-condensed">
        <br>
        <tr>

            <td></td>
            <td></td>
            <td align="center" style="background-color: yellow;"><b>Plant 1</b></td>
            <td align="center" style="background-color: lightgrey"><b>Plant 2</b></td>
            <td align="center" style="background-color: red;"><b>Plant 3</b></td>
            <td align="center" style="background-color: blue; color: white"><b>Plant 4</b></td>
            <td align="center" style="background-color: orange;"><b>Plant 5</b></td>
            <td align="center" style="background-color: indigo; color: white;"><b>Plant 6</b></td>
            <td align="center" style="background-color: #7ea131; color: white"><b>Plant 7</b></td>

        </tr>
        <tr>

            <!-- GENERAL -->  
        <tr>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center;"><div><span>General</span></div></td>

            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;">Interviewed</td>
            <?php
            include '../../model/production.php';
            $obj = new Production();
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResCount($date, 'interviewed', 'Staff', $i);
                $array = mysql_fetch_array($result);
                $value = $array['interviewed'];
                ?>
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $value; ?></td>
                <?php
                $i++;
            }
            ?>



        </tr>
        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">New</td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResCount($date, 'new', 'Staff', $i);
                $array = mysql_fetch_array($result);
                $value = $array['new'];
                ?>
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $value; ?></td>
                <?php
                $i++;
            }
            ?>




        </tr>

        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">Resigned</td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResCount($date, 'resigned', 'Staff', $i);
                $array = mysql_fetch_array($result);
                $value = $array['resigned'];
                ?>
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $value; ?></td>
                <?php
                $i++;
            }
            ?>

        </tr>
        <!-- END OF GENERAL -->

        <!-- GENERAL -->  
        <tr>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center;"><div><span>M/O</span></div></td>

            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;">Interviewed</td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResCount($date, 'interviewed', 'M/O', $i);
                $array = mysql_fetch_array($result);
                $value = $array['interviewed'];
                ?>
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $value; ?></td>
                <?php
                $i++;
            }
            ?>



        </tr>
        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">New</td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResCount($date, 'new', 'M/O', $i);
                $array = mysql_fetch_array($result);
                $value = $array['new'];
                ?>
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $value; ?></td>
                <?php
                $i++;
            }
            ?>




        </tr>

        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">Resigned</td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResCount($date, 'resigned', 'M/O', $i);
                $array = mysql_fetch_array($result);
                $value = $array['resigned'];
                ?>
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $value; ?></td>
                <?php
                $i++;
            }
            ?>

        </tr>
        <!-- END OF GENERAL -->
        <!-- GENERAL -->  
        <tr>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center;"><div><span>Training</span></div></td>

            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;">Interviewed</td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResCount($date, 'interviewed', 'Training Center', $i);
                $array = mysql_fetch_array($result);
                $value = $array['interviewed'];
                ?>
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $value; ?></td>
                <?php
                $i++;
            }
            ?>



        </tr>
        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">New</td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResCount($date, 'new', 'Training Center', $i);
                $array = mysql_fetch_array($result);
                $value = $array['new'];
                ?>
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $value; ?></td>
                <?php
                $i++;
            }
            ?>




        </tr>

        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">Resigned</td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResCount($date, 'resigned', 'Training Center', $i);
                $array = mysql_fetch_array($result);
                $value = $array['resigned'];
                ?>
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $value; ?></td>
                <?php
                $i++;
            }
            ?>

        </tr>
        <!-- END OF GENERAL -->

        <!-- GENERAL -->  
        <tr>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center;"><div><span>Q/C</span></div></td>

            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;">Interviewed</td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResCount($date, 'interviewed', 'Q/C', $i);
                $array = mysql_fetch_array($result);
                $value = $array['interviewed'];
                ?>
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $value; ?></td>
                <?php
                $i++;
            }
            ?>



        </tr>
        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">New</td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResCount($date, 'new', 'Q/C', $i);
                $array = mysql_fetch_array($result);
                $value = $array['new'];
                ?>
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $value; ?></td>
                <?php
                $i++;
            }
            ?>




        </tr>

        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">Resigned</td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResCount($date, 'resigned', 'Q/C', $i);
                $array = mysql_fetch_array($result);
                $value = $array['resigned'];
                ?>
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $value; ?></td>
                <?php
                $i++;
            }
            ?>

        </tr>
        <!-- END OF GENERAL -->

        <!-- GENERAL -->  
        <tr>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center;"><div><span>Helpers</span></div></td>

            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;">Interviewed</td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResCount($date, 'interviewed', 'Helpers', $i);
                $array = mysql_fetch_array($result);
                $value = $array['interviewed'];
                ?>
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $value; ?></td>
                <?php
                $i++;
            }
            ?>


        </tr>
        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">New</td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResCount($date, 'new', 'Helpers', $i);
                $array = mysql_fetch_array($result);
                $value = $array['new'];
                ?>
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $value; ?></td>
                <?php
                $i++;
            }
            ?>

        </tr>

        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">Resigned</td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResCount($date, 'resigned', 'Helpers', $i);
                $array = mysql_fetch_array($result);
                $value = $array['resigned'];
                ?>
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $value; ?></td>
                <?php
                $i++;
            }
            ?>

        </tr>
        <!-- END OF GENERAL -->

        <!-- GENERAL -->  
        <tr>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center;"><div><span>Others</span></div></td>

            <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;">Interviewed</td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResCount($date, 'interviewed', 'Others', $i);
                $array = mysql_fetch_array($result);
                $value = $array['interviewed'];
                ?>
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $value; ?></td>
                <?php
                $i++;
            }
            ?>


        </tr>
        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">New</td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResCount($date, 'new', 'Others', $i);
                $array = mysql_fetch_array($result);
                $value = $array['new'];
                ?>
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $value; ?></td>
                <?php
                $i++;
            }
            ?>
        </tr>

        <tr>

            <td style="margin: 0; padding: 0; background-color: white; vertical-align: middle; text-align: center;">Resigned</td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResCount($date, 'resigned', 'Others', $i);
                $array = mysql_fetch_array($result);
                $value = $array['resigned'];
                ?>
                <td style="margin: 0; width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $value; ?></td>
                <?php
                $i++;
            }
            ?>

        </tr>

        <!-- END OF GENERAL -->
        <!-- GENERAL -->  
        <tr>
            <td rowspan="3"style="margin: 0; width: 10px; padding: 0; vertical-align: middle; text-align: center; background-color: lightslategray; color: white;"><div><span><b>Total</b></span></div></td>

            <td style="margin: 0; background-color: lightslategray; color: white;  width: 60px; padding: 0; vertical-align: middle; text-align: center;"><b>Interviewed</b></td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResTot($date, 'interviewed', $i);
                $array = mysql_fetch_array($result);
                $total = $array['total'];
                ?>
                <td style="margin: 0; background-color: lightslategray; color: white;  width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $total; ?></td>
                <?php
                $i++;
            }
            ?>


        </tr>
        <tr>

            <td style="margin: 0; padding: 0; background-color: lightslategray; color: white; vertical-align: middle; text-align: center;"><b>New</b></td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResTot($date, 'new', $i);
                $array = mysql_fetch_array($result);
                $total = $array['total'];
                ?>
                <td style="margin: 0; background-color: lightslategray; color: white;  width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $total; ?></td>
                <?php
                $i++;
            }
            ?>


        </tr>

        <tr>
            <td style="margin: 0; background-color: lightslategray; color: white; width: 60px; padding: 0; text-align: center;"><b>Resigned</b></td>
            <?php
            $i = 1;
            while ($i < 8) {
                $result = $obj->getResTot($date, 'resigned', $i);
                $array = mysql_fetch_array($result);
                $total = $array['total'];
                ?>
                <td style="margin: 0; background-color: lightslategray; color: white;  width: 60px; padding: 0; vertical-align: middle; text-align: center;"><?php echo $total; ?></td>
                <?php
                $i++;
            }
            ?> 
        </tr>

    </table>
    <br><br>
    <div class="clearfix"></div>


</div>
