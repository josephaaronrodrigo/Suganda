<?php
$session = $_GET['session'];
$date = date('Y-m-d', strtotime($_GET['d']));
$plant_no = $_GET['p'];
$i = 1;
include '../../model/production.php';
$obj = new Production();
$result2 = $obj->getAllStyles();
$options = "";
while($row2 = mysql_fetch_array($result2)){
    $options = $options.'<option value="'.$row2['style'].'">'.$row2['style'].'</option>';
}
while ($i < 11) {
    if ($session == "1") {
       $styleInput = '<select name="style[]" class="form-control">'
                . '<option selected="" disabled="">Select Style</option>'.$options.'</select>';
        
    } else {

        $result = $obj->getPacked($plant_no, $date, $i);
        if (mysql_num_rows($result) == 0) {
            $styleInput = '<select name="style[]" class="form-control">'
                . '<option selected="" disabled="">Select Style</option>'.$options.'</select>';
        } else {
            $array = mysql_fetch_array($result);
            $styleInput = '<input type="text" class="form-control" readonly placeholder="Style" id="style' . $i . '" name="style[]" value="' . $array['style'] . '">';
        }
    }
    $result1 = $obj->getUpdatedLines($plant_no, $date, $session);
    $lines = array();
    while ($row1 = mysql_fetch_array($result1)) {
        array_push($lines, $row1['line_no']);
    }
    if (in_array($i, $lines)) {
   
    } else {
        ?>

        <div class="form-group">
            <div class="col-md-12">
                <b><span class="col-md-2 control-label">Line <?php echo $i; ?> :</span></b>
                <div class="form-group row">
                    <div class="col-md-2">
                        <?php echo $styleInput; ?>
                        <span class="error-message" id="e_style<?php echo $i; ?>"></span>
                        <input type="hidden" name="line_no[]" value="<?php echo $i; ?>">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" id="output<?php echo $i; ?>" name="output[]" placeholder="Output">
                        <span class="error-message" id="e_output<?php echo $i; ?>"></span>
                    </div>
                    

                </div>
            </div>
        </div>
        <?php
    }
    $i++;
}
?>

<div class="pull-right">
    <input type="submit" class="btn btn-info" value="Reset">
    <input type="submit" class="btn btn-success" value="Submit">
    <input type="hidden" name="switch" value="3">
    <br>
    <br>
    <br>
</div>
