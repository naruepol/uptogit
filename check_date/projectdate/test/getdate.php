<?php
$selectedmonth = intval($_GET['selectedmonth']);
$selectedyear = intval($_GET['selectedyear']);

$month = "$selectedmonth";
$year = "$selectedyear";

$start_date = "01-".$month."-".$year;
$start_time = strtotime($start_date);

$end_time = strtotime("+1 month", $start_time);


echo "<select name=\"date\" id=\"date\">";

for($i=$start_time; $i<$end_time; $i+=86400)
{
//$list = date('d M Y (D)', $i);
$list = date('d',$i);
echo $list;
echo "<option value=\"$list\"> $list</option>";


}
echo "</select>";


?>