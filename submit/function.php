<?php
function generateDate($yr, $mon, $day) {
	$mon = (int)$mon + 1;
	if ($mon < 10) {
		$mon = "0" . $mon;
	}
	if ((int)$day < 10) {
		$day = "0" . (int)$day;
	}
	return $yr . $mon . $day;
}
function generateTime($hr, $min) {
	if ((int)$hr < 10) {
		$hr = '0' . (int)$hr;
	}
	if ((int)$min < 10) {
		$min = '0' . (int)$min;
	}
	return $hr . $min . "00";
}
function generateDay($d) {
	$out = "";
	$list = array('M' => 'MO', 'T' => 'TU', 'W' => 'WE', 'R' => 'TH', 'F' => 'FR', 'S' => 'SA', 'U' => 'SU');
	$days = str_split($d);
	foreach ($days as $day) $out .= $list[$day].",";
	return substr($out, 0, -1);
}
?>

