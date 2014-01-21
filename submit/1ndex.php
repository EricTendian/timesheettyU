<?php 
	date_default_timezone_set('America/Chicago');
	$json_got = $_POST["string"];
	$obj = json_decode($json_got, true);
	$userName = $obj["name"];
	$semester = $obj['semester'];
	$_time = date(DATE_RFC2822);
	$_forHASH = $userName . $semester . $_time;
	$did = hash( "sha256", $_forHASH);
	$EID = $obj['EID'];
	require('template.php');
	require('function.php');

	foreach ($obj["course"] as $course) {
		$SUMMARY = $course["name"];
		$location = $course["timeCollection"]['time'][0]['location'];
		$_remind = $course["reminder"];
		if ($_remind != 0 && $_remind != '0') {
			$remindText = $_remind . 'H0M0S';
			$remindText = str_replace(array('%DESCRIPTION%', '%REMINDTIME%'), 
			array($location, $remindText), $remind_template);
		}
		else {
			$remindText = "";
		}
		$DESCRIPTION = $course[""];
		foreach ($course["timeCollection"]['time'] as $time) {
			$UID = hash("sha256", $userName . $_time . $SUMMARY . rand() . rand() . rand());
			$startDate = generateDate($time['startYr'], $time['startMon'], $time['startDay']);
			$endDate = generateDate($time['endYr'], $time['endMon'], $time['endDay']);
			$startTime = generateTime($time['startHr'], $time['startMin']);
			$endTime = generateTime($time['endHr'], $time['endMin']);
			$day = generateDay($time['days']);
			$DTSTART = $startDate . "T" . $startTime;
			$DTEND = $startDate . "T" . $endTime;
			$UNTIL = $endDate . "T" . $endTime;
			$BYDAY = $day; 
			$LOCATION = $location;
			$DESCRIPTION = $time['instructor'];
			$vevent = str_replace(array('%UID%', '%DTSTART%', '%DTEND%', '%UNTIL%', '%BYDAY%', '%DESCRIPTION%', '%LOCATION%', '%SUMMARY%', '%REMIND%'), 
		array($UID, $DTSTART, $DTEND, $UNTIL, $BYDAY, $DESCRIPTION, $LOCATION, $SUMMARY, $remindText), $str_template);
			$ics .= $vevent;
		}
	}
	$ics .= $ics_end;

	file_put_contents('../icsfiles/'.$did.'.ics', $ics);
	echo json_encode($did);
?>