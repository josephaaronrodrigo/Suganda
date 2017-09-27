<?php
$year = $_GET['y'];
$month = $_GET['m'];
$period = date('Y-m', strtotime($month." ".$year));
include '../../model/production.php';
$obj = new Production();
?>
<select class="form-control" name="style" onchange="getReport(this.value)">
	<option selected="" disabled="" value="">Style</option>
	<?php
	$result = $obj ->getStylesForReport($period);
	while($row = mysql_fetch_array($result)){
		?>
		<option value="<?php echo $row['style'];?>"><?php echo $row['style'];?></option>
	<?php
	}
	?>
</select>