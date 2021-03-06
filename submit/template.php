<?php
$ics = "BEGIN:VCALENDAR
PRODID:-//IIT.io//Schedule Export//EN
VERSION:2.0
CALSCALE:GREGORIAN
METHOD:PUBLISH
X-WR-CALNAME:Class Schedule
X-WR-TIMEZONE:America/Chicago
BEGIN:VTIMEZONE
TZID:America/Chicago
X-LIC-LOCATION:America/Chicago
BEGIN:STANDARD
TZOFFSETFROM:-0600
TZOFFSETTO:-0600
TZNAME:CST
DTSTART:19700101T000000
END:STANDARD
END:VTIMEZONE
";
$ics_end = "END:VCALENDAR";

$str_template = "BEGIN:VEVENT
DTSTART:%DTSTART%
DTEND:%DTEND%
RRULE:FREQ=WEEKLY;UNTIL=%UNTIL%;WKST=MO;BYDAY=%BYDAY%
DTSTAMP:20131003T083657Z
UID:%UID%
CREATED:20121110T145627Z
DESCRIPTION:%DESCRIPTION%
LAST-MODIFIED:20121110T145627Z
LOCATION:%LOCATION%
SEQUENCE:0
STATUS:CONFIRMED
SUMMARY:%SUMMARY%
TRANSP:OPAQUE
%REMIND%END:VEVENT
";

$remind_template = "BEGIN:VALARM
ACTION:DISPLAY
DESCRIPTION:%DESCRIPTION%
TRIGGER:-P0DT%REMINDTIME%
END:VALARM
";

$UID = "D9DA128666614D4C9CDD90BD62AEE43400000000000000000000000000077777";
?>