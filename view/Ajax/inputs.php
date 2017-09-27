<?php
$session = $_GET['session'];
$date = date('Y-m-d', strtotime($_GET['d']));
$plant_no = $_GET['p'];
$i = 1;
include '../../model/production.php';
$obj = new Production();
while ($i < 21) {
    $style = $obj->getStyles('style',$date, $plant_no,$i);
    $planned_output = $obj->getStyles('plan',$date, $plant_no,$i);
    if ($session == "1") {
        $styleInput = '<input type="text" class="form-control" readonly placeholder="Style" id="style' . $i . '" name="style[]" value="' . $style . '">';
        $plannedOut = "<input type='text' readonly name='plannedOut[]' class='form-control' value='".$planned_output."'>";
        $hoursPlanned = "<input type='text' readonly name='planned_hours[]' class='form-control' value='" . (12 - $session) . "'>";
        $start_session = "<input type='text' name='session_start[]' class='form-control' value='Starting Session: " . $session . "' readonly>";
    } else {

        $result = $obj->getDailyStyles($plant_no, $date, $i);
        if (mysql_num_rows($result) == 0) {
            $styleInput = '<input type="text" class="form-control" readonly placeholder="Style" id="style' . $i . '" name="style[]" value="' . $style . '">';
            $plannedOut = "<input type='text' readonly name='plannedOut[]' class='form-control' value='".$planned_output."'>";
            $hoursPlanned = "<input type='text' readonly name='planned_hours[]' class='form-control' value='" . (12 - $session) . "'>";
            $start_session = "<input type='text' name='session_start[]' class='form-control' value='Starting Session: " . $session . "' readonly>";
        } else {
            $array = mysql_fetch_array($result);
            $res = $obj->getPlannedOut($plant_no, $i, $date, $array['style']);
            $hrs = $obj->getPlannedHours($plant_no, $i, $date, $array['style']);
            $styleInput = '<input type="text" class="form-control" readonly placeholder="Style" id="style' . $i . '" name="style[]" value="' . $array['style'] . '">';
            $plannedOut = "<input type='text' readonly name='plannedOut[]' class='form-control' value='" . $res . "' readonly>";
            $hoursPlanned = "<input type='text' readonly name='planned_hours[]' class='form-control' value='" . $hrs . "' readonly>";
            $start_session = "<input type='text' name='session_start[]' class='form-control' value='Starting Session: " . $array['session_start'] . "' readonly>";
        }
    }
    $result1 = $obj->updatedLines($plant_no, $date, $session);
    $lines = array();
    while ($row1 = mysql_fetch_array($result1)) {
        array_push($lines, $row1['line_no']);
    }
    if (in_array($i, $lines)) {
        
    } else {
        ?>

        <div class="form-group">
            <div class="col-md-12">
                <div class="form-group row">
                    <b><span class="control-label col-md-1">Line <?php echo $i; ?> :</span></b>
                    <div class="col-md-2">
                        <?php echo $styleInput; ?>
                        <span class="error-message" id="e_style<?php echo $i; ?>"></span>
                        <input type="hidden" name="line_no[]" value="<?php echo $i; ?>">
                    </div>
                </div>
                <div class="form-group row">

                    <div class="col-md-2">
                        <?php echo $start_session; ?>

                    </div>


                    <div class="col-md-2">
                        <?php echo $plannedOut; ?>
                    </div>
                    <div class="col-md-2">
                        <?php echo $hoursPlanned; ?>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" id="output<?php echo $i; ?>" name="output[]" placeholder="Output">
                        <span class="error-message" id="e_output<?php echo $i; ?>"></span>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control"  name="accepted[]" placeholder="Accepted">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control"  name="rejected[]" placeholder="Rejected">
                        
                    </div>
                     <div class="col-md-2">
                        <input type="text" class="form-control"  name="rej_rep[]" placeholder="Rejected Repair">
                        
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" id="mos<?php echo $i; ?>" name="mos[]" placeholder="No. of M/Os">
                        <span class="error-message" id="e_mos<?php echo $i; ?>"></span>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" id="remarks<?php echo $i; ?>" name="remarks[]" placeholder="Remarks">
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
    <input type="hidden" name="switch" value="1">
    <br>
    <br>
    <br>
</div>
