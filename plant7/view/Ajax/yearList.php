<select class="form-control" onchange="getMonth(this.value)" name="year">
    <option selected="" disabled="" value="">Year</option>
    <?php
    $y = date('Y');
    while ($y >= 2017) {
        ?>
        <option value="<?php echo $y; ?>"><?php echo $y; ?></option>
        <?php
        $y--;
    }
    ?>
</select>