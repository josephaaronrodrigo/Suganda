<div class="col-md-3">
    <select name="session" class="form-control" id="inputType" required="" onchange="getInput(this.value)">
        <option>Select the Time</option>
        <?php
        include '../../model/general.php';
        $obj = new General();
        $j = 1;
        while ($j < 16) {
            if ($j < 10) {
                $j = '0' . $j;
            }
            $result = $obj->getSessionTime($j);
            $array = mysql_fetch_array($result);
            $time = date('h:i a', strtotime($array['time']));
            ?>
            <option value="<?php echo $j; ?>">Session <?php echo $j; ?> -  &nbsp;&nbsp;<?php echo $time; ?></option>
            <?php
            $j++;
        }
        ?>
    </select>
</div>  