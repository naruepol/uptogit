<?php
$selectedmonth = intval($_GET['selectedmonth']);
$selectedyear = intval($_GET['selectedyear']);

$month = "$selectedmonth";
$year = "$selectedyear";

$start_date = "01-".$month."-".$year;
$start_time = strtotime($start_date);

$end_time = strtotime("+1 month", $start_time);

echo "<table border='1'>";

for($i=$start_time; $i<$end_time; $i+=86400)
{
$list = date('d M Y (D)', $i);
echo "<tr><td>";
echo $list;
echo "</td>";

echo "<td>&nbsp;</td>";
echo "</tr>";

}

echo "</table>";


?>