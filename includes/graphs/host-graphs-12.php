<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">                  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kontrollbase 2.0.1 - MySQL Monitoring</title>

<link rel="stylesheet" type="text/css" media="all" href="http://testing.kontrollbase.com/userguide/css/userguide-nofluff.css" />

<script type="text/javascript" src="http://testing.kontrollbase.com/includes/browser_detect.js"></script>
<script language="JavaScript" SRC="http://testing.kontrollbase.com/includes/CalendarPopup.js"></script>
<script language="JavaScript">
 var cal = new CalendarPopup();</script>
<script language="JavaScript" ID="jscal1x">
 var cal1x = new CalendarPopup("graphform");</script>
<script language="JavaScript">document.write(getCalendarStyles());</script>

</head>
<body><table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder"><tr><td colspan='3'><div id='content'><h1>Date range: start 2009-09-10 -> end 2009-09-17</h1></td></tr><tr><td colspan="3">

<div id="content"><table cellpadding="0" cellspacing="1" border="0" class="tableborder"><form action="http://testing.kontrollbase.com/index.php/main/graphs" method="post" name="graphform"><input type="hidden" name="server_list_id" value="12" /><tr><th>Start date</th><th>End Date</th><th>&nbsp;</th></tr><tr><td class='td'><input type="text" name="sday" value="2009-09-10" id="sday" maxlength="10" size="15" style="width:50%"  />
<a href="#"onClick="cal.select(document.forms['graphform'].sday,'anchor1','yyyy-MM-dd'); return false;" NAME="anchor1" ID="anchor1"><img src='http://testing.kontrollbase.com/includes/images/icon_calendar.gif' height='20' width='20' border='0'></a></td><td class='td'><input type="text" name="eday" value="2009-09-17" id="eday" maxlength="10" size="15" style="width:50%"  /> 
<a href="#"onClick="cal.select(document.forms['graphform'].eday,'anchor1','yyyy-MM-dd'); return false;" NAME="anchor1" ID="anchor1"><img src='http://testing.kontrollbase.com/includes/images/icon_calendar.gif' height='20' width='20' border='0'></a></td><td><input type="submit" name="submit" value="Submit"  /></td></tr></table></td></tr><table><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Query Rate' xAxisName='' yAxisName='Q/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.592455' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.592309' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.592121' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.591956' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.591959' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.592264' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.593028' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.592832' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.593842' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.593381' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.592992' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.593987' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.592666' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.593557' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.594142' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.593996' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.593894' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.593762' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.593909' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.593743' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.593582' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.593423' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.593261' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.5931' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.593041' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.59328' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.593102' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.592945' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.59366' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.593946' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.593751' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.593916' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.594657' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.59452' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.206277' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.203532' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.501648' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.821226' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.771967' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.735103' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.668052' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.649135' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.611912' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.605499' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.581322' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.561618' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.568023' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.590536' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.625174' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.607919' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.59308' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.579717' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.582491' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.578763' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.573334' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.578395' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.579345' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.57995' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.583037' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.594586' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.593905' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.593953' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.59409' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.594202' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.594154' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.594205' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.594289' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.594351' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.594359' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.605968' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Query Rate' xAxisName='' yAxisName='Q/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.592455' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.592309' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.592121' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.591956' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.591959' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.592264' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.593028' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.592832' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.593842' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.593381' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.592992' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.593987' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.592666' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.593557' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.594142' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.593996' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.593894' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.593762' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.593909' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.593743' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.593582' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.593423' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.593261' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.5931' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.593041' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.59328' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.593102' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.592945' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.59366' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.593946' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.593751' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.593916' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.594657' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.59452' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.206277' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.203532' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.501648' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.821226' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.771967' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.735103' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.668052' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.649135' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.611912' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.605499' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.581322' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.561618' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.568023' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.590536' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.625174' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.607919' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.59308' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.579717' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.582491' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.578763' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.573334' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.578395' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.579345' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.57995' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.583037' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.594586' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.593905' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.593953' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.59409' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.594202' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.594154' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.594205' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.594289' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.594351' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.594359' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.605968' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Connections' xAxisName='' yAxisName='connections' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='10' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='16' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='16' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='14' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='14' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='14' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='14' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='14' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='14' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='12' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='16' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='16' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='16' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='28' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='19' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='25' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='30' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='30' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='25' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='25' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='25' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='27' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='28' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='32' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='16' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='16' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='17' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='17' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='17' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='18' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='18' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='7' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='11' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='13' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='14' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='14' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='14' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='14' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='14' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='14' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='14' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='16' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='16' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='16' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='16' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='9' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='9' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='9' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='11' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='13' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='13' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='13' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='13' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='7' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='8' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='11' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Connections' xAxisName='' yAxisName='connections' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='10' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='16' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='16' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='14' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='14' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='14' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='14' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='14' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='14' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='12' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='16' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='16' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='16' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='28' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='19' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='25' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='30' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='30' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='25' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='25' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='25' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='27' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='28' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='32' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='16' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='16' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='17' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='17' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='17' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='18' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='18' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='7' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='11' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='13' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='14' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='14' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='14' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='14' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='14' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='14' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='14' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='14' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='16' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='16' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='16' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='16' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='9' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='9' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='9' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='11' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='13' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='13' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='13' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='13' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='7' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='8' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='11' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 1 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.341' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.531' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.141' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.321' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.321' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 1 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.341' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.531' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.141' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.321' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.321' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 5 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.031' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.041' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.051' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.411' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.251' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.121' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.141' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.111' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.041' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 5 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.031' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.041' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.051' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.411' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.251' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.121' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.141' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.111' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.041' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 15 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.061' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.211' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.131' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.111' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.101' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.061' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 15 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.061' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.211' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.131' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.111' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.101' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.061' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Total' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='1051652096' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='3959345152' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Total' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='1051652096' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='3959345152' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Used' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='36089856' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='3369828352' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='3221123072' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='3172605952' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='3157114880' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='3142496256' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='3134500864' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='3123384320' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='3114864640' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='3106254848' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='3091525632' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='3081367552' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='3054657536' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='3048730624' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='3037429760' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='3032731648' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='3027779584' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='2989518848' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='2983923712' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='2918539264' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='2840166400' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='2666799104' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='2668974080' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='2662629376' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='2658836480' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='2735337472' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='2743275520' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='2739212288' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='2735149056' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='2728116224' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='2724196352' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='2724134912' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='2720874496' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='2717724672' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='2714906624' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='2663686144' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Used' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='36089856' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='3369828352' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='3221123072' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='3172605952' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='3157114880' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='3142496256' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='3134500864' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='3123384320' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='3114864640' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='3106254848' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='3091525632' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='3081367552' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='3054657536' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='3048730624' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='3037429760' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='3032731648' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='3027779584' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='2989518848' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='2983923712' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='2918539264' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='2840166400' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='2666799104' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='2668974080' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='2662629376' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='2658836480' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='2735337472' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='2743275520' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='2739212288' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='2735149056' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='2728116224' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='2724196352' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='2724134912' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='2720874496' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='2717724672' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='2714906624' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='2663686144' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Total' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='2080366592' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Total' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='2080366592' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Free' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='2897559552' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2897317888' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2897317888' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2897297408' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2897301504' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='2897285120' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='2893217792' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='2893230080' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='2893213696' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='2893221888' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2894331904' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='2894409728' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='2893291520' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='2875002880' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2888818688' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2880262144' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='2877861888' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='2874159104' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='2895790080' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='2895941632' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='2895953920' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='2895941632' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='2895937536' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='2895933440' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='2895056896' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='2891632640' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='2891976704' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='2891948032' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='2890588160' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='2889170944' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='2889195520' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='2879279104' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='2880380928' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='2871808000' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='2080366592' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Free' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='2897559552' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2897317888' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2897317888' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2897297408' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2897301504' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='2897285120' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='2893217792' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='2893230080' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='2893213696' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='2893221888' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2894331904' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='2894409728' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='2893291520' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='2875002880' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2888818688' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2880262144' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='2877861888' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='2874159104' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='2895790080' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='2895941632' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='2895953920' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='2895941632' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='2895937536' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='2895933440' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='2895056896' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='2891632640' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='2891976704' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='2891948032' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='2890588160' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='2889170944' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='2889195520' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='2879279104' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='2880380928' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='2871808000' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='2080366592' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU User' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU User' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU System' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='1' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU System' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='1' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU Idle' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='100' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='99' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='99' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='100' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='93' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='99' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='97' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='96' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='98' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='98' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='98' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='99' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU Idle' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='100' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='99' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='99' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='100' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='93' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='99' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='97' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='96' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='98' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='98' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='98' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='99' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Schemas' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='5' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='5' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='5' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='5' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='6' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Schemas' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='5' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='5' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='5' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='5' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='5' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='5' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='6' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Tables' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='79' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='79' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='79' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='79' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='64' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='79' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Tables' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='79' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='79' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='79' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='79' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='79' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='79' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='64' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='64' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='64' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='79' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='79' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Data Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='191511042' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='193608194' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='193608194' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='193608194' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='194148866' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='194148866' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='195197442' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='188365314' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='188365314' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='188365314' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='189413890' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='189413890' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='189413890' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='190462466' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='190462466' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='191511042' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='192559618' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='192559618' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='193608194' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='193608194' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='193608194' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='194656770' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='194656770' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='194656770' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='196753922' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='196753922' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='196753922' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='197802498' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='198343170' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='198343170' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='199391746' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='191511042' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='191511042' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='192559618' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='248474162' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='249522738' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='249522738' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='250571314' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='251619890' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='251619890' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='252668466' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='252668466' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='252668466' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='253717042' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='253717042' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='253733426' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='254782002' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='254782002' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='255830578' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='256879154' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='256879154' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='257927730' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='257927730' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='257927730' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='258977720' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='386155364' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='386155364' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='388252516' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='388252516' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='388252536' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='390349688' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='390349688' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='393495416' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='393495416' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='393495416' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='395592568' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='395592568' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='395592568' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='397689720' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='397689720' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Data Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='191511042' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='193608194' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='193608194' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='193608194' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='194148866' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='194148866' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='195197442' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='188365314' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='188365314' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='188365314' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='189413890' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='189413890' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='189413890' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='190462466' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='190462466' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='191511042' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='192559618' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='192559618' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='193608194' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='193608194' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='193608194' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='194656770' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='194656770' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='194656770' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='196753922' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='196753922' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='196753922' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='197802498' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='198343170' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='198343170' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='199391746' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='191511042' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='191511042' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='192559618' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='248474162' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='249522738' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='249522738' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='250571314' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='251619890' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='251619890' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='252668466' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='252668466' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='252668466' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='253717042' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='253717042' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='253733426' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='254782002' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='254782002' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='255830578' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='256879154' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='256879154' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='257927730' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='257927730' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='257927730' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='258977720' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='386155364' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='386155364' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='388252516' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='388252516' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='388252536' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='390349688' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='390349688' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='393495416' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='393495416' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='393495416' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='395592568' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='395592568' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='395592568' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='397689720' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='397689720' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Index Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='3676160' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='3676160' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='3692544' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='3692544' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='3692544' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='3692544' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='3725312' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='3463168' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='3479552' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='3479552' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='3479552' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='3495936' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='3528704' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='3528704' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='3545088' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='3577856' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='3594240' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='3594240' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='3594240' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='3594240' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='3610624' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='3643392' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='3659776' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='3659776' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='3676160' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='3676160' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='3676160' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='3676160' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='3774464' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='3774464' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='3840000' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='3495936' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='3512320' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='3512320' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='3840000' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='3856384' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='3856384' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='3905536' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='3905536' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='3905536' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='3921920' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='3921920' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='3921920' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='3938304' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='3938304' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='3954688' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='3954688' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='3954688' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='3954688' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='3954688' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='3954688' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='3971072' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='3971072' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='3971072' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='3987456' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='5986304' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='6002688' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='6019072' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='6051840' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='6084608' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='6084608' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='6117376' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='6133760' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='6166528' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='6166528' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='6166528' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='6199296' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='6232064' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='6248448' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='6264832' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Index Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='3676160' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='3676160' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='3692544' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='3692544' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='3692544' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='3692544' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='3725312' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='3463168' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='3479552' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='3479552' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='3479552' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='3495936' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='3528704' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='3528704' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='3545088' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='3577856' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='3594240' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='3594240' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='3594240' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='3594240' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='3610624' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='3643392' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='3659776' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='3659776' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='3676160' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='3676160' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='3676160' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='3676160' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='3774464' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='3774464' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='3840000' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='3495936' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='3512320' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='3512320' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='3840000' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='3856384' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='3856384' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='3905536' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='3905536' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='3905536' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='3921920' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='3921920' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='3921920' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='3938304' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='3938304' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='3954688' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='3954688' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='3954688' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='3954688' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='3954688' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='3954688' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='3971072' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='3971072' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='3971072' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='3987456' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='5986304' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='6002688' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='6019072' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='6051840' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='6084608' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='6084608' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='6117376' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='6133760' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='6166528' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='6166528' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='6166528' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='6199296' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='6232064' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='6248448' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='6264832' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='33' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='33' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='33' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='33' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='22' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='33' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='33' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='33' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='33' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='33' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='22' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='22' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='22' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='33' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='33' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='33' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='33' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='33' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='29' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='33' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='33' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='33' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='33' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='33' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='33' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='33' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='29' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='29' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='29' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='33' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='33' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='191004672' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='193101824' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='193101824' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='193101824' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='193642496' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='193642496' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='194691072' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='187858944' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='187858944' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='187858944' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='188907520' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='188907520' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='188907520' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='189956096' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='189956096' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='191004672' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='192053248' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='192053248' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='193101824' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='193101824' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='193101824' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='194150400' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='194150400' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='194150400' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='196247552' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='196247552' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='196247552' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='197296128' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='197836800' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='197836800' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='198885376' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='191004672' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='191004672' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='192053248' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='247988224' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='249036800' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='249036800' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='250085376' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='251133952' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='251133952' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='252182528' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='252182528' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='252182528' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='253231104' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='253231104' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='253247488' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='254296064' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='254296064' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='255344640' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='256393216' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='256393216' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='257441792' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='257441792' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='257441792' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='258490368' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='385646592' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='385646592' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='387743744' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='387743744' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='387743744' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='389840896' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='389840896' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='392986624' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='392986624' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='392986624' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='395083776' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='395083776' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='395083776' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='397180928' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='397180928' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='191004672' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='193101824' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='193101824' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='193101824' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='193642496' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='193642496' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='194691072' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='187858944' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='187858944' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='187858944' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='188907520' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='188907520' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='188907520' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='189956096' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='189956096' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='191004672' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='192053248' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='192053248' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='193101824' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='193101824' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='193101824' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='194150400' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='194150400' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='194150400' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='196247552' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='196247552' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='196247552' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='197296128' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='197836800' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='197836800' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='198885376' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='191004672' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='191004672' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='192053248' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='247988224' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='249036800' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='249036800' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='250085376' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='251133952' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='251133952' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='252182528' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='252182528' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='252182528' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='253231104' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='253231104' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='253247488' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='254296064' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='254296064' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='255344640' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='256393216' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='256393216' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='257441792' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='257441792' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='257441792' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='258490368' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='385646592' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='385646592' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='387743744' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='387743744' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='387743744' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='389840896' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='389840896' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='392986624' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='392986624' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='392986624' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='395083776' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='395083776' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='395083776' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='397180928' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='397180928' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='3555328' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='3555328' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='3571712' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='3571712' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='3571712' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='3571712' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='3604480' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='3342336' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='3358720' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='3358720' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='3358720' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='3375104' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='3407872' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='3407872' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='3424256' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='3457024' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='3473408' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='3473408' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='3473408' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='3473408' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='3489792' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='3522560' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='3538944' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='3538944' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='3555328' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='3555328' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='3555328' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='3555328' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='3653632' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='3653632' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='3719168' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='3375104' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='3391488' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='3391488' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='3735552' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='3751936' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='3751936' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='3801088' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='3801088' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='3801088' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='3817472' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='3817472' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='3817472' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='3833856' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='3833856' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='3850240' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='3850240' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='3850240' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='3850240' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='3850240' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='3850240' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='3866624' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='3866624' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='3866624' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='3883008' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='5865472' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='5881856' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='5898240' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='5931008' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='5963776' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='5963776' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='5996544' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='6012928' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='6045696' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='6045696' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='6045696' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='6078464' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='6111232' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='6127616' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='6144000' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='3555328' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='3555328' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='3571712' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='3571712' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='3571712' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='3571712' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='3604480' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='3342336' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='3358720' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='3358720' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='3358720' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='3375104' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='3407872' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='3407872' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='3424256' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='3457024' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='3473408' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='3473408' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='3473408' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='3473408' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='3489792' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='3522560' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='3538944' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='3538944' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='3555328' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='3555328' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='3555328' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='3555328' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='3653632' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='3653632' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='3719168' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='3375104' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='3391488' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='3391488' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='3735552' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='3751936' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='3751936' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='3801088' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='3801088' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='3801088' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='3817472' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='3817472' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='3817472' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='3833856' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='3833856' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='3850240' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='3850240' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='3850240' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='3850240' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='3850240' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='3850240' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='3866624' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='3866624' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='3866624' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='3883008' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='5865472' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='5881856' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='5898240' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='5931008' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='5963776' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='5963776' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='5996544' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='6012928' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='6045696' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='6045696' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='6045696' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='6078464' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='6111232' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='6127616' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='6144000' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='506370' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='506370' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='506370' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='506370' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='485938' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='485938' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='485938' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='485938' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='485938' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='485938' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='485938' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='485938' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='485938' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='485938' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='487352' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='508772' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='508772' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='508772' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='508772' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='508792' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='506370' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='506370' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='506370' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='506370' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='506370' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='506370' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='485938' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='485938' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='485938' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='485938' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='485938' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='485938' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='485938' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='485938' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='485938' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='485938' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='485938' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='487352' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='508772' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='508772' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='508772' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='508772' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='508792' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='508792' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='120832' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='120832' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='120832' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='120832' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='104448' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='120832' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='120832' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='120832' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='120832' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='120832' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='120832' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='120832' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='104448' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='104448' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='104448' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='120832' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='120832' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_free_memory' xAxisName='' yAxisName='free' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='4178640' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='3902544' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='4104168' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='4095824' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='3902552' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='4133440' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='3508664' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='4144088' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='4170064' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='4178640' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='3858880' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='3872656' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='8053232' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='8366016' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='8031712' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='8252160' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='8245616' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='8210600' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='8256648' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='8214760' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='8280024' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='8259672' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='8280024' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='8278568' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='8225832' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='7463928' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='7963544' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='8265184' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='8265184' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='8278136' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='7996712' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='8090056' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='8257352' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='8261256' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='8261256' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='8261256' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='8261304' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='8212408' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='8258536' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='8257232' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='8257232' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='8257232' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='8257232' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='8258536' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='8257232' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='8258536' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='8257232' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='8238344' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_free_memory' xAxisName='' yAxisName='free' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='4178640' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='3902544' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='4104168' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='4095824' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='3902552' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='4133440' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='3508664' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='4144088' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='4170064' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='4178640' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='3858880' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='3872656' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='4181200' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='8053232' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='8366016' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='8031712' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='8252160' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='8245616' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='8210600' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='8256648' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='8214760' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='8280024' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='8259672' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='8280024' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='8278568' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='8225832' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='7463928' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='7963544' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='8265184' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='8265184' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='8278136' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='7996712' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='8090056' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='8257352' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='8261256' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='8261256' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='8261256' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='8261304' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='8212408' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='8258536' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='8257232' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='8257232' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='8257232' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='8257232' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='8258536' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='8257232' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='8258536' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='8257232' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='8238344' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_hits' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.043133641203889' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.043124300251653' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.043113721169474' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.043106921860132' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.043098974770545' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.043087390365502' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.043184985552677' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.043174473489208' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.043310223587238' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.043266965901823' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.043149104441799' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.043285743723759' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.043133389938838' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.043217434479875' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.043242899854845' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.043235903224506' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.043228964378093' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.043219797919796' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.043241471500374' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.043232280944261' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.043224341143879' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.04321758944476' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.043210892158564' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.043204248630148' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.043198768591875' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.043259689558115' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.04324967338405' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.043240740842335' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.043257107696881' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.043247127406528' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.043236186489842' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.043226410814489' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.043297408529204' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.043291759334187' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.020106107130672' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0048948393378773' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.025416594641314' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.054968639844415' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.051050727088265' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.048578920075193' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.04509523308982' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.04492787696659' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.042863657160287' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.042202896607215' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.040846834988632' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.039782510060226' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.041710839814906' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.043597449579452' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.044008279668813' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.043020728411146' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.042179036127063' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.041390257214983' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.042556855434852' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.041955216625144' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.040868640894164' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.040505395190886' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.040175768964752' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.039876701401007' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.040044233430357' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.040998627442009' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.040658127169662' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.040375237773175' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.040123264242375' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.039889489035325' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.039670941305915' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.039421322962909' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.039223177185069' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.039020098427229' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.038845912474547' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.041703892147649' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_hits' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.043133641203889' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.043124300251653' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.043113721169474' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.043106921860132' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.043098974770545' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.043087390365502' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.043184985552677' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.043174473489208' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.043310223587238' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.043266965901823' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.043149104441799' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.043285743723759' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.043133389938838' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.043217434479875' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.043242899854845' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.043235903224506' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.043228964378093' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.043219797919796' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.043241471500374' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.043232280944261' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.043224341143879' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.04321758944476' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.043210892158564' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.043204248630148' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.043198768591875' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.043259689558115' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.04324967338405' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.043240740842335' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.043257107696881' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.043247127406528' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.043236186489842' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.043226410814489' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.043297408529204' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.043291759334187' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.020106107130672' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0048948393378773' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.025416594641314' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.054968639844415' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.051050727088265' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.048578920075193' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.04509523308982' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.04492787696659' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.042863657160287' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.042202896607215' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.040846834988632' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.039782510060226' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.041710839814906' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.043597449579452' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.044008279668813' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.043020728411146' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.042179036127063' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.041390257214983' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.042556855434852' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.041955216625144' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.040868640894164' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.040505395190886' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.040175768964752' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.039876701401007' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.040044233430357' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.040998627442009' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.040658127169662' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.040375237773175' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.040123264242375' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.039889489035325' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.039670941305915' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.039421322962909' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.039223177185069' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.039020098427229' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.038845912474547' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.041703892147649' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_inserts' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.029170155798058' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.029110991276532' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.029053494360204' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.028992896926648' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.028934032911133' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.028879216099073' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.029042761681991' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.028986857185064' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.028980718491157' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.028910522080392' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.029032359597081' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.029023847492196' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.028918254808746' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.028956027619208' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.029113741115783' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.029055909098762' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.028998554706095' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.028943956728106' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.028945583246302' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.028891615066933' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.028836988473192' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.028781680049899' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.028726817365219' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.028672395052369' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.02864727763312' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.02868318780794' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.028632921125277' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.028581893690442' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.028753187452595' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.028708620229807' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.028660093581076' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.028717799296821' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.028898794376987' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.028847952025466' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.01942374616172' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0029474196689387' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.05804407951599' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.13045180503221' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.1165732160974' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.10581623128282' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.086194723287959' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.079751988686583' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.069133292664328' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.067246479817621' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.060291611822424' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.054663542820104' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.054879098158905' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.060125440897169' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.071168102366814' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.066354774729228' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.062150686923021' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.058515180459849' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.058433952561548' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.057298231755484' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.056438727890765' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.053774278358986' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.05134647457229' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.049137807249339' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.047666984778356' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.048067301093471' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.046293755767456' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.044623451832439' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.04306539886794' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.041617910770228' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.040268505520355' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.039054444729794' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.037882480377881' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.036800323502082' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.035766498648062' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.035586965680397' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_inserts' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.029170155798058' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.029110991276532' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.029053494360204' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.028992896926648' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.028934032911133' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.028879216099073' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.029042761681991' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.028986857185064' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.028980718491157' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.028910522080392' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.029032359597081' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.029023847492196' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.028918254808746' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.028956027619208' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.029113741115783' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.029055909098762' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.028998554706095' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.028943956728106' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.028945583246302' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.028891615066933' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.028836988473192' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.028781680049899' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.028726817365219' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.028672395052369' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.02864727763312' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.02868318780794' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.028632921125277' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.028581893690442' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.028753187452595' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.028708620229807' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.028660093581076' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.028717799296821' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.028898794376987' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.028847952025466' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.01942374616172' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0029474196689387' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.05804407951599' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.13045180503221' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.1165732160974' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.10581623128282' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.086194723287959' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.079751988686583' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.069133292664328' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.067246479817621' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.060291611822424' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.054663542820104' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.054879098158905' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.060125440897169' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.071168102366814' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.066354774729228' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.062150686923021' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.058515180459849' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.058433952561548' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.057298231755484' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.056438727890765' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.053774278358986' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.05134647457229' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.049137807249339' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.047666984778356' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.048067301093471' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.046293755767456' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.044623451832439' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.04306539886794' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.041617910770228' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.040268505520355' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.039054444729794' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.037882480377881' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.036800323502082' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.035766498648062' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.035586965680397' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_queries_in_cache' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001001228207002' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010012228018303' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010012174410606' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010012121285584' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010012068622186' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0010012016385543' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0010035893969215' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010011913356541' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0010604770572575' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0010542776704024' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010223477880395' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0010597123969961' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010011663222128' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010371663017788' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0012151296271665' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010011518149724' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0010011470586548' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010011423414573' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010284416048346' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010011330225075' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010011284198173' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001001123854371' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010011193257182' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001001114833416' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010055518851426' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010033178683802' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010011015715019' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010010972190982' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010896180739983' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010010886190323' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0010010843693579' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010010801527336' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010860775020309' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010010718171051' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.012486409644035' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0019737098344693' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.032547104580812' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0071991005226693' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0064108894149476' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0057319634407208' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0046264256057182' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0042260915679689' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0028682324233643' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.002978007241518' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0024658370228551' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0023503659491722' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.002526041153884' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0098857737180067' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0047425775696245' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0021667023159041' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0020903540015992' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.0018528348229515' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0032819309635534' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0024735370966762' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0018930114651149' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0018352960508298' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0017960432734343' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0017603330508052' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0017276804886196' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0019493526101478' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0016591378476952' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0016446294965549' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0016210041943234' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0015990552603926' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.0015785939219183' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0015503173496716' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0015416059949568' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0015162267267784' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0015090629902861' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0015671322552419' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_queries_in_cache' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001001228207002' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010012228018303' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010012174410606' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010012121285584' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010012068622186' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0010012016385543' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0010035893969215' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010011913356541' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0010604770572575' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0010542776704024' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010223477880395' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0010597123969961' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010011663222128' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010371663017788' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0012151296271665' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010011518149724' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0010011470586548' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010011423414573' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010284416048346' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010011330225075' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010011284198173' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001001123854371' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010011193257182' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001001114833416' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010055518851426' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010033178683802' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010011015715019' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010010972190982' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010896180739983' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010010886190323' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0010010843693579' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010010801527336' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010860775020309' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010010718171051' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.012486409644035' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0019737098344693' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.032547104580812' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0071991005226693' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0064108894149476' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0057319634407208' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0046264256057182' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0042260915679689' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0028682324233643' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.002978007241518' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0024658370228551' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0023503659491722' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.002526041153884' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0098857737180067' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0047425775696245' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0021667023159041' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0020903540015992' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.0018528348229515' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0032819309635534' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0024735370966762' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0018930114651149' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0018352960508298' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0017960432734343' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0017603330508052' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0017276804886196' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0019493526101478' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0016591378476952' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0016446294965549' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0016210041943234' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0015990552603926' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.0015785939219183' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0015503173496716' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0015416059949568' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0015162267267784' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0015090629902861' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0015671322552419' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_lowmem_prunes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001001228207002' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010012228018303' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010012174410606' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010012121285584' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010012068622186' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0010012016385543' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0010011964656405' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010011913356541' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0010011858246521' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0010011799493566' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010011761993705' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0010011708313136' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010011663222128' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010011614469306' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010011566108987' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010011518149724' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0010011470586548' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010011423414573' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010011376641934' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010011330225075' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010011284198173' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001001123854371' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010011193257182' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001001114833416' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010011103770285' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010011059561267' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010011015715019' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010010972190982' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010010929033414' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010010886190323' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0010010843693579' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010010801527336' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010010759687754' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010010718171051' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0011137268281588' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0019737098344693' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0012160760587727' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0011215509906406' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0010845451471086' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0010648214169962' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0010525568928365' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0010441930351777' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0010381271923136' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0010335255464664' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0010299150412828' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0010270073189834' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0010246135669981' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0010226101112417' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0010209082545789' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0010194450385984' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0010181725666933' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001017056696459' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0010160699363631' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0010151911040894' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0010144034107277' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0010136933778825' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0010130498897284' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0010124644762427' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.001011929188338' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0010114379832548' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0010109856307949' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0010105676966648' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0010101803966283' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0010098205780392' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001009485146261' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0010091719558279' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0010088787868026' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0010086037787796' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0010083452949227' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0010081018893606' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_lowmem_prunes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001001228207002' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010012228018303' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010012174410606' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010012121285584' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010012068622186' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0010012016385543' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0010011964656405' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010011913356541' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0010011858246521' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0010011799493566' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010011761993705' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0010011708313136' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010011663222128' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010011614469306' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010011566108987' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010011518149724' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0010011470586548' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010011423414573' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010011376641934' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010011330225075' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010011284198173' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001001123854371' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010011193257182' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001001114833416' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010011103770285' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010011059561267' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010011015715019' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010010972190982' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010010929033414' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010010886190323' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0010010843693579' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010010801527336' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010010759687754' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010010718171051' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0011137268281588' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0019737098344693' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0012160760587727' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0011215509906406' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0010845451471086' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0010648214169962' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0010525568928365' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0010441930351777' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0010381271923136' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0010335255464664' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0010299150412828' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0010270073189834' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0010246135669981' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0010226101112417' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0010209082545789' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0010194450385984' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0010181725666933' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001017056696459' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0010160699363631' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0010151911040894' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0010144034107277' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0010136933778825' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0010130498897284' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0010124644762427' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.001011929188338' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0010114379832548' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0010109856307949' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0010105676966648' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0010101803966283' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0010098205780392' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001009485146261' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0010091719558279' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0010088787868026' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0010086037787796' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0010083452949227' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0010081018893606' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_not_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.13453803450033' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.13452384585849' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.13450945647344' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.1344953545173' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.1344874094099' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.13478683172374' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.13477562679844' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.13476435857297' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.13474204756343' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.13471304103628' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.13472093023256' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.13469956936824' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.13469201629119' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.13502052276726' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.13500956517213' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.13499409118919' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.13497874500313' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.13496352503727' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.13494858212912' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.13493345758813' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.13491860707858' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.13490387673565' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.1348892651067' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.13487477076238' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.13486261305026' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.13484834023634' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.1348343280524' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.13482013287323' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.13481836383627' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.13508847206876' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.13507359614832' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.135068557294' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.13505710166291' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.13504573443588' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.022949277834641' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.10226582278481' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.11163094209162' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.11331311535189' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.11369868109571' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.11385408699034' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.11394476270563' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.11400159094927' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.1140471252097' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.11414871932412' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.11416860117267' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.11418767385962' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.1141977946244' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.11420882698743' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.11438546458142' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.11438402006728' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.11437864359962' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.11437586136317' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.11437340104133' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.11444716533998' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.11449887653396' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.12094029687243' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.12605709326756' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.13051837263798' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.13469041370425' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.13863325250492' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.14207747066837' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.14533360104832' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.14839178238384' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.151225382266' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.15376776567895' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.15620783651906' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.15853631423802' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.16070334170768' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.16269843442267' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.16457714619049' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_not_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.13453803450033' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.13452384585849' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.13450945647344' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.1344953545173' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.1344874094099' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.13478683172374' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.13477562679844' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.13476435857297' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.13474204756343' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.13471304103628' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.13472093023256' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.13469956936824' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.13469201629119' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.13502052276726' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.13500956517213' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.13499409118919' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.13497874500313' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.13496352503727' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.13494858212912' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.13493345758813' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.13491860707858' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.13490387673565' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.1348892651067' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.13487477076238' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.13486261305026' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.13484834023634' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.1348343280524' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.13482013287323' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.13481836383627' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.13508847206876' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.13507359614832' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.135068557294' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.13505710166291' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.13504573443588' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.022949277834641' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.10226582278481' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.11163094209162' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.11331311535189' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.11369868109571' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.11385408699034' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.11394476270563' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.11400159094927' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.1140471252097' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.11414871932412' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.11416860117267' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.11418767385962' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.1141977946244' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.11420882698743' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.11438546458142' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.11438402006728' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.11437864359962' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.11437586136317' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.11437340104133' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.11444716533998' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.11449887653396' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.12094029687243' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.12605709326756' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.13051837263798' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.13469041370425' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.13863325250492' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.14207747066837' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.14533360104832' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.14839178238384' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.151225382266' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.15376776567895' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.15620783651906' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.15853631423802' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.16070334170768' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.16269843442267' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.16457714619049' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0010307051750502' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010305700457572' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010304360265159' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010303032139589' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010301715554644' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0010300409638583' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0010299116410124' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010297833913514' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0010296456163027' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0010294987339143' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010294049842625' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0010292707828412' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001029158055321' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010290361732647' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010289152724686' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010287953743111' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0010286764663711' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010285585364321' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010284416048346' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010283255626873' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010282104954327' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0010280963592738' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010279831429547' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0010278708354004' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001027759425713' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001027648903168' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010275392875476' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010274304774549' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010273225835361' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010272154758082' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0010271092339473' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010270038183399' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010268992193847' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010267954276282' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0046392585010804' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.032158714703019' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.007914433880726' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0048896317004984' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0037054447074738' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0030742853438776' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0026818205707679' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.002414177125685' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0022200701540339' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.002072817486925' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0019572813210482' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0018642342074702' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0017876341439401' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0017235235597359' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001669064146525' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0016222412351489' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0015815221341862' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001545814286689' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0015142379636177' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0014861153308622' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0014609091432851' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0014381880922386' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0014306463610382' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0013988632397667' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0013817340268168' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0013774534474082' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0013515401854374' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0013381662932747' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0013257726921041' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0013142584972551' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.0013035246803506' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0012935025864915' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0012841211776823' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0012753209209485' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0012670494375271' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0012592604595392' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0010307051750502' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010305700457572' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010304360265159' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010303032139589' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010301715554644' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0010300409638583' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0010299116410124' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010297833913514' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0010296456163027' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0010294987339143' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010294049842625' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0010292707828412' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001029158055321' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010290361732647' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010289152724686' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010287953743111' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0010286764663711' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010285585364321' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010284416048346' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010283255626873' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010282104954327' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0010280963592738' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010279831429547' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0010278708354004' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001027759425713' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001027648903168' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010275392875476' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010274304774549' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010273225835361' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010272154758082' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0010271092339473' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010270038183399' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010268992193847' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010267954276282' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0046392585010804' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.032158714703019' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.007914433880726' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0048896317004984' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0037054447074738' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0030742853438776' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0026818205707679' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.002414177125685' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0022200701540339' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.002072817486925' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0019572813210482' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0018642342074702' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0017876341439401' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0017235235597359' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001669064146525' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0016222412351489' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0015815221341862' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001545814286689' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0015142379636177' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0014861153308622' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0014609091432851' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0014381880922386' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0014306463610382' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0013988632397667' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0013817340268168' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0013774534474082' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0013515401854374' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0013381662932747' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0013257726921041' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0013142584972551' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.0013035246803506' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0012935025864915' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0012841211776823' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0012753209209485' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0012670494375271' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0012592604595392' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0010466718660763' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001046466469551' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010462627603041' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010460608852175' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010458607643058' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0010456622650646' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0010454656943389' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010452707548541' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0010474329860843' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0010448380755498' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010446955760789' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.001046833252546' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010443202440879' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010464578772234' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010462644359498' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010437689689528' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0010435882288841' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010434089753768' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010432312393486' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010430548552847' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010428799530577' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0010427064660961' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010425343772911' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0010423636698086' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010421943270838' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010420263328154' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010418597170724' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010416943257314' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010437161336577' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010413675232284' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0010412060355998' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010410458038767' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010430387510154' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010407290499949' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0058902536108268' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.04481694255112' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.010723422644771' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0064697945788258' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.004804531619885' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0039169637648279' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0033650601776423' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0029886865829945' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0027157236541101' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0025086495909883' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0023461768577241' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.002215329354255' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0021076105149158' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0020174550058786' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0019408714560508' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0018750267369281' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0018177655011994' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.0017675513406563' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0017231471363373' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.001683599684025' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0016481534827447' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0016162020047105' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0012479479048402' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0015609014309219' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0015368134752111' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0015147092464657' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0014943533857714' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0014755463499176' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0014581178482714' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0014419260117651' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001426831581743' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0014127380122537' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0013995454061157' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0013871700450838' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0013755382715225' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.001364585021227' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0010466718660763' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001046466469551' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010462627603041' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010460608852175' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010458607643058' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0010456622650646' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0010454656943389' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010452707548541' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0010474329860843' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0010448380755498' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010446955760789' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.001046833252546' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010443202440879' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010464578772234' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010462644359498' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010437689689528' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0010435882288841' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010434089753768' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010432312393486' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010430548552847' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010428799530577' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0010427064660961' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010425343772911' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0010423636698086' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010421943270838' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010420263328154' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010418597170724' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010416943257314' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010437161336577' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010413675232284' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0010412060355998' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010410458038767' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010430387510154' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010407290499949' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0058902536108268' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.04481694255112' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.010723422644771' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0064697945788258' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.004804531619885' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0039169637648279' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0033650601776423' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0029886865829945' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0027157236541101' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0025086495909883' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0023461768577241' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.002215329354255' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0021076105149158' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0020174550058786' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0019408714560508' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0018750267369281' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0018177655011994' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.0017675513406563' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0017231471363373' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.001683599684025' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0016481534827447' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0016162020047105' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0012479479048402' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0015609014309219' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0015368134752111' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0015147092464657' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0014943533857714' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0014755463499176' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0014581178482714' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0014419260117651' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001426831581743' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0014127380122537' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0013995454061157' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0013871700450838' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0013755382715225' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.001364585021227' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Slow_queries' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0010331615890542' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010330156494178' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010328709086371' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010327274710756' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010325852799015' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.001032444240967' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0010323045722934' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010321660626595' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0010320172656069' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0010389383287669' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010388145792264' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0010386374333504' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010384886330237' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010383277487093' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010381681596586' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010380098940906' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0010378529356099' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010376972680904' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010375429183817' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010373897427472' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010372378539712' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0010370871942414' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010369377487002' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0010367895027286' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010366424419412' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010364965521818' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010363518595629' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010362082302405' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010360658102676' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010359244280668' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0010357841888104' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010356450402087' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010355069695877' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010353699644693' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.02397281928807' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.089607594936709' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.10558081244598' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.11148985049228' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.11183868785932' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.11054819472354' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.10874163031482' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.10799133816511' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.10706984901632' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.10717540565911' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.10657018068685' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.1060584708456' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.106247612484' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.10613701727412' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.10700485071506' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.10660600462792' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.10623733372101' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.10596691000887' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.10622594330526' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.1065022179012' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.10638975629429' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.11125907870954' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.11553888214645' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.11931280849579' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.12305945507468' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.12662337008739' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.12956483719295' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.13229306336391' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.13482131367838' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.13719177624795' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.13933137306977' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.14141347176872' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.14334471001882' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.14519072856799' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.14685071936442' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.14851920147778' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Slow_queries' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0010331615890542' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010330156494178' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010328709086371' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010327274710756' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010325852799015' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.001032444240967' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0010323045722934' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010321660626595' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0010320172656069' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0010389383287669' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010388145792264' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0010386374333504' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010384886330237' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010383277487093' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010381681596586' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010380098940906' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0010378529356099' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010376972680904' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010375429183817' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010373897427472' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010372378539712' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0010370871942414' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010369377487002' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0010367895027286' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010366424419412' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010364965521818' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010363518595629' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010362082302405' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010360658102676' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010359244280668' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0010357841888104' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010356450402087' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010355069695877' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010353699644693' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.02397281928807' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.089607594936709' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.10558081244598' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.11148985049228' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.11183868785932' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.11054819472354' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.10874163031482' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.10799133816511' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.10706984901632' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.10717540565911' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.10657018068685' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.1060584708456' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.106247612484' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.10613701727412' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.10700485071506' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.10660600462792' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.10623733372101' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.10596691000887' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.10622594330526' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.1065022179012' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.10638975629429' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.11125907870954' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.11553888214645' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.11931280849579' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.12305945507468' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.12662337008739' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.12956483719295' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.13229306336391' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.13482131367838' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.13719177624795' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.13933137306977' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.14141347176872' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.14334471001882' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.14519072856799' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.14685071936442' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.14851920147778' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Uptime' xAxisName='' yAxisName='days' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='9.4235532407407' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='9.4652083333333' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='9.5068865740741' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='9.5485532407407' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='9.5902199074074' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='9.6319097222222' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='9.6735532407407' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='9.7152083333333' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='9.7603587962963' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='9.8089583333333' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='9.8402314814815' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='9.8853472222222' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='9.9235648148148' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='9.9652199074074' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='10.006886574074' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='10.048553240741' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='10.090219907407' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='10.131886574074' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='10.173541666667' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='10.215219907407' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='10.256886574074' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='10.298553240741' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='10.340219907407' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='10.381886574074' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='10.423553240741' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='10.465219907407' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='10.506875' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='10.548553240741' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='10.590208333333' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='10.631886574074' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='10.673553240741' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='10.715219907407' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='10.756886574074' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='10.798553240741' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.10177083333333' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.011886574074074' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.053564814814815' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.095219907407407' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.13689814814815' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.17855324074074' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.22021990740741' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.26189814814815' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.30356481481481' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.34523148148148' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.38689814814815' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.42855324074074' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.47023148148148' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.51189814814815' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.55356481481481' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.59521990740741' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.63689814814815' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.67856481481481' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.72023148148148' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.76189814814815' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.80356481481481' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.84523148148148' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.88690972222222' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.92856481481481' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.97023148148148' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1.0118981481481' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1.0535648148148' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1.0952314814815' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1.1368981481481' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1.1785532407407' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='1.2202314814815' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='1.2618981481481' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='1.3035648148148' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='1.3452314814815' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='1.3868981481481' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='1.4285648148148' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Uptime' xAxisName='' yAxisName='days' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='9.4235532407407' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='9.4652083333333' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='9.5068865740741' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='9.5485532407407' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='9.5902199074074' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='9.6319097222222' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='9.6735532407407' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='9.7152083333333' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='9.7603587962963' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='9.8089583333333' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='9.8402314814815' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='9.8853472222222' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='9.9235648148148' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='9.9652199074074' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='10.006886574074' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='10.048553240741' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='10.090219907407' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='10.131886574074' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='10.173541666667' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='10.215219907407' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='10.256886574074' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='10.298553240741' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='10.340219907407' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='10.381886574074' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='10.423553240741' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='10.465219907407' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='10.506875' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='10.548553240741' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='10.590208333333' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='10.631886574074' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='10.673553240741' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='10.715219907407' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='10.756886574074' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='10.798553240741' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.10177083333333' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.011886574074074' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.053564814814815' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.095219907407407' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.13689814814815' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.17855324074074' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.22021990740741' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.26189814814815' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.30356481481481' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.34523148148148' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.38689814814815' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.42855324074074' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.47023148148148' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.51189814814815' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.55356481481481' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.59521990740741' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.63689814814815' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.67856481481481' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.72023148148148' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.76189814814815' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.80356481481481' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.84523148148148' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.88690972222222' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.92856481481481' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.97023148148148' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1.0118981481481' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1.0535648148148' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1.0952314814815' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1.1368981481481' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1.1785532407407' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='1.2202314814815' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='1.2618981481481' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='1.3035648148148' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='1.3452314814815' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='1.3868981481481' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='1.4285648148148' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_immediate' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.13389568223828' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.13384029963536' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.13378507904236' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.13372444075419' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.1338960469228' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.1339432814586' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.13413192828385' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.13407457522927' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.1342748326505' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.1341690843829' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.13415400213598' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.13434597831152' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.13404004217421' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.13413085441843' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.13430750235659' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.13424771508705' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.13418842158994' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.13413532748074' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.13415335485794' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.13410068604513' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.1340463385598' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.1339890592777' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.13393224161765' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.13387588002163' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.13385994259351' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.13392707878278' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.13387596084574' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.13382605237027' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.13423475345194' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.13427962812774' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.13422670367981' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.13430596946408' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.13451588936889' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.13446159411358' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.042169111793472' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.057475170399221' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.13323854796889' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.21176941777075' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.19807473791004' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.18677818111104' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.16592352972092' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.15921106593601' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.14790407198414' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.14626619283894' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.13896817039608' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.13295776055311' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.13349483115093' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.13883123812969' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.15110035962198' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.14592387267389' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.1413830777059' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.13753885515453' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.13773908851321' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.13893522513216' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.1381060667166' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.13798855233609' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.13729304832374' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.13666335942564' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.13681380922842' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.13882769822025' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.13825447115173' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.1377037240563' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.13717298529951' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.13668110618991' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.13622024509618' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.13593781413949' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.13554913520617' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.13524476029872' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.13490025703508' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.13544275204978' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_immediate' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.13389568223828' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.13384029963536' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.13378507904236' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.13372444075419' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.1338960469228' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.1339432814586' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.13413192828385' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.13407457522927' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.1342748326505' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.1341690843829' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.13415400213598' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.13434597831152' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.13404004217421' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.13413085441843' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.13430750235659' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.13424771508705' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.13418842158994' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.13413532748074' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.13415335485794' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.13410068604513' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.1340463385598' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.1339890592777' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.13393224161765' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.13387588002163' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.13385994259351' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.13392707878278' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.13387596084574' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.13382605237027' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.13423475345194' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.13427962812774' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.13422670367981' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.13430596946408' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.13451588936889' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.13446159411358' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.042169111793472' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.057475170399221' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.13323854796889' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.21176941777075' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.19807473791004' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.18677818111104' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.16592352972092' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.15921106593601' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.14790407198414' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.14626619283894' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.13896817039608' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.13295776055311' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.13349483115093' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.13883123812969' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.15110035962198' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.14592387267389' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.1413830777059' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.13753885515453' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.13773908851321' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.13893522513216' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.1381060667166' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.13798855233609' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.13729304832374' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.13666335942564' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.13681380922842' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.13882769822025' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.13825447115173' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.1377037240563' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.13717298529951' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.13668110618991' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.13622024509618' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.13593781413949' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.13554913520617' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.13524476029872' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.13490025703508' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.13544275204978' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_waited' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001001228207002' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010012228018303' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010012174410606' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010012121285584' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010012068622186' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0010012016385543' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0010011964656405' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010011913356541' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0010011858246521' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0010011799493566' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010011761993705' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0010011708313136' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010011663222128' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010011614469306' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010011566108987' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010011518149724' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0010011470586548' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010011423414573' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010011376641934' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010011330225075' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010011284198173' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001001123854371' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010011193257182' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001001114833416' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010011103770285' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010011059561267' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010011015715019' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010010972190982' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010010929033414' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010010886190323' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0010010843693579' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010010801527336' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010010759687754' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010010718171051' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0011137268281588' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0019737098344693' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0012160760587727' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0011215509906406' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0010845451471086' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0010648214169962' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0010525568928365' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0010441930351777' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0010381271923136' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0010335255464664' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0010299150412828' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0010270073189834' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0010246135669981' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0010226101112417' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0010209082545789' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0010194450385984' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0010181725666933' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001017056696459' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0010160699363631' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0010151911040894' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0010144034107277' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0010136933778825' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0010130498897284' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0010124644762427' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.001011929188338' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0010114379832548' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0010109856307949' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0010105676966648' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0010101803966283' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0010098205780392' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001009485146261' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0010091719558279' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0010088787868026' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0010086037787796' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0010083452949227' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0010081018893606' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_waited' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001001228207002' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010012228018303' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010012174410606' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010012121285584' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010012068622186' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0010012016385543' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0010011964656405' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010011913356541' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0010011858246521' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0010011799493566' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010011761993705' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0010011708313136' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010011663222128' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010011614469306' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010011566108987' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010011518149724' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0010011470586548' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010011423414573' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010011376641934' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010011330225075' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010011284198173' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001001123854371' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010011193257182' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001001114833416' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010011103770285' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010011059561267' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010011015715019' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010010972190982' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010010929033414' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010010886190323' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0010010843693579' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010010801527336' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010010759687754' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010010718171051' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0011137268281588' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0019737098344693' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0012160760587727' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0011215509906406' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0010845451471086' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0010648214169962' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0010525568928365' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0010441930351777' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0010381271923136' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0010335255464664' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0010299150412828' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0010270073189834' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0010246135669981' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0010226101112417' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0010209082545789' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0010194450385984' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0010181725666933' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001017056696459' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0010160699363631' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0010151911040894' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0010144034107277' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0010136933778825' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0010130498897284' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0010124644762427' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.001011929188338' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0010114379832548' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0010109856307949' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0010105676966648' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0010101803966283' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0010098205780392' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001009485146261' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0010091719558279' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0010088787868026' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0010086037787796' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0010083452949227' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0010081018893606' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0010184231050301' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010110052164726' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010109569695457' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010133334141419' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010132754844043' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0010132180240977' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0010131611220455' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010131046921946' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0010130440711732' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0010153393416355' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010105857943345' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0010105374818228' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010104968999156' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010011614469306' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010115661089874' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010046072598898' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0010011470586548' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010022846829146' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010079636493537' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010079311575524' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010078989387212' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0010056192718548' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010089546057455' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0010089186673281' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010044415081141' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010011059561267' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010198282870343' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010197499437675' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010185793568045' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010185065235496' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0010184342790841' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010172824437375' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010172155004062' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010171490736821' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0014549073126351' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0019737098344693' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0012160760587727' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0011215509906406' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0010845451471086' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0011296428339924' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.001105113785673' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0010883860703553' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0010762543846271' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0010670510929328' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0010598300825655' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0010540146379669' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0010492271339963' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0010452202224835' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0010418165091578' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0010388900771968' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0010363451333866' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.0010341133929181' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0010321398727261' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0010303822081789' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0010288068214553' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0010273867557649' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0010130498897284' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0010249289524854' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0010238583766761' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0010915038660383' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0010988706771543' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0010951092699835' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0010610823797695' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0010392823121569' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.0010474257313048' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0010458597791393' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0010355151472103' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0010774340090168' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0010751076543045' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0010486113361636' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0010184231050301' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010110052164726' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010109569695457' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010133334141419' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010132754844043' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0010132180240977' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0010131611220455' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010131046921946' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0010130440711732' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0010153393416355' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010105857943345' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0010105374818228' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010104968999156' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010011614469306' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010115661089874' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010046072598898' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0010011470586548' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010022846829146' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010079636493537' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010079311575524' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010078989387212' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0010056192718548' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010089546057455' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0010089186673281' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010044415081141' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010011059561267' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010198282870343' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010197499437675' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010185793568045' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010185065235496' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0010184342790841' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010172824437375' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010172155004062' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010171490736821' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0014549073126351' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0019737098344693' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0012160760587727' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0011215509906406' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0010845451471086' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0011296428339924' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.001105113785673' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0010883860703553' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0010762543846271' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0010670510929328' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0010598300825655' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0010540146379669' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0010492271339963' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0010452202224835' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0010418165091578' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0010388900771968' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0010363451333866' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.0010341133929181' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0010321398727261' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0010303822081789' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0010288068214553' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0010273867557649' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0010130498897284' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0010249289524854' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0010238583766761' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0010915038660383' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0010988706771543' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0010951092699835' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0010610823797695' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0010392823121569' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.0010474257313048' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0010458597791393' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0010355151472103' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0010774340090168' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0010751076543045' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0010486113361636' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_created' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0010466718660763' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001046466469551' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010462627603041' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010460608852175' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010458607643058' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0010456622650646' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0010454656943389' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010452707548541' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0010450613367801' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0010448380755498' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010446955760789' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0010444915899187' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010443202440879' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010487807710846' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010485776577473' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010483762288426' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0010504705808131' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010514053655778' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010511948887023' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010509860128371' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010507788917789' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0010505734466928' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010503696573184' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0010501675037208' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010499669662834' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010508739818291' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010517738605895' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010515692976152' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010513664570478' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010511650945193' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0010509653598209' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001050767178479' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010505705324431' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010503754039411' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0022509951097464' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.003921129503408' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0033768366464996' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.002701713868968' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0022681772066283' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0020371426719388' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0018409102853839' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0017070885628425' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0016100350770169' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0015364087434625' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0014786406605241' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0014321171037351' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0013938170719701' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.001361761779868' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0013345320732625' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0013111206175744' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0012907610670931' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.0012729071433445' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0012571189818088' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0012430576654311' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0012304545716426' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0012327874240018' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0012218481253833' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.001211896096126' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0012027962017464' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0011944457153315' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0011867557235136' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0011796508433022' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0011730667426803' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0011669498266668' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.0011612474864362' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0011559232490736' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0011509393756437' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0011462642392539' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0011418700136863' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0011377321191302' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_created' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0010466718660763' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001046466469551' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010462627603041' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010460608852175' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010458607643058' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0010456622650646' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0010454656943389' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010452707548541' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0010450613367801' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0010448380755498' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010446955760789' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0010444915899187' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010443202440879' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010487807710846' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010485776577473' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010483762288426' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0010504705808131' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010514053655778' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010511948887023' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010509860128371' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010507788917789' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0010505734466928' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010503696573184' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0010501675037208' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010499669662834' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010508739818291' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010517738605895' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010515692976152' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010513664570478' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010511650945193' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0010509653598209' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001050767178479' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010505705324431' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010503754039411' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0022509951097464' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.003921129503408' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0033768366464996' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.002701713868968' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0022681772066283' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0020371426719388' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0018409102853839' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0017070885628425' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0016100350770169' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0015364087434625' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0014786406605241' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0014321171037351' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0013938170719701' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.001361761779868' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0013345320732625' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0013111206175744' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0012907610670931' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.0012729071433445' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0012571189818088' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0012430576654311' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0012304545716426' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0012327874240018' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0012218481253833' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.001211896096126' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0012027962017464' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0011944457153315' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0011867557235136' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0011796508433022' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0011730667426803' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0011669498266668' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.0011612474864362' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0011559232490736' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0011509393756437' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0011462642392539' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0011418700136863' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0011377321191302' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Seconds_Behind_Master' xAxisName='' yAxisName='seconds' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Seconds_Behind_Master' xAxisName='' yAxisName='seconds' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0090766892452054' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0090717148817428' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0090667644677652' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0090618670416184' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0090799425533584' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0090918340248763' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0090952865236093' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0090903604266888' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0090861383027292' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0090802931938161' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0090840182734334' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0090799068954939' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.00907444867949' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0090720561675736' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0090743006841353' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0090696156969344' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0090649694022104' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0090603613226029' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0090569378175505' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0090523909607464' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0090478901370466' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0090434257328935' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0090389973080216' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0090346044292332' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.009036908932428' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0090458308218913' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0090414719639037' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0090371298942829' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0090787414999443' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0090895280292185' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0090850579324329' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0090881836691708' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0090977410035561' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0090932909608304' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0054353462981917' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.006842259006816' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.011371650821089' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.01364130302662' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.013597226919175' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.012991962144292' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.011984390602828' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.011606328442637' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.011065578770779' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.011024138393456' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.01066255833433' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.010371539687255' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.010402382593285' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.010337975942842' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.010722338379192' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.010508623874618' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.010322526713673' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.010159445998499' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.010127723854214' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.010965364282676' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.010938353402086' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.011242646656077' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.011374662334103' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.011482624520118' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.011724340315885' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.011957587958091' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.01200760205651' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.012085513801412' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.012137353911308' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.012195458964715' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.012258868611754' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.012290677624097' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.012311574386476' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.012356987989125' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.012391327569516' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.012472275334608' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0090766892452054' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0090717148817428' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0090667644677652' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0090618670416184' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0090799425533584' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0090918340248763' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0090952865236093' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0090903604266888' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0090861383027292' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0090802931938161' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0090840182734334' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0090799068954939' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.00907444867949' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0090720561675736' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0090743006841353' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0090696156969344' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0090649694022104' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0090603613226029' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0090569378175505' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0090523909607464' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0090478901370466' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0090434257328935' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0090389973080216' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0090346044292332' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.009036908932428' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0090458308218913' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0090414719639037' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0090371298942829' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0090787414999443' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0090895280292185' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0090850579324329' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0090881836691708' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0090977410035561' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0090932909608304' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0054353462981917' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.006842259006816' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.011371650821089' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.01364130302662' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.013597226919175' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.012991962144292' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.011984390602828' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.011606328442637' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.011065578770779' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.011024138393456' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.01066255833433' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.010371539687255' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.010402382593285' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.010337975942842' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.010722338379192' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.010508623874618' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.010322526713673' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.010159445998499' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.010127723854214' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.010965364282676' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.010938353402086' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.011242646656077' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.011374662334103' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.011482624520118' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.011724340315885' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.011957587958091' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.01200760205651' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.012085513801412' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.012137353911308' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.012195458964715' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.012258868611754' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.012290677624097' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.012311574386476' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.012356987989125' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.012391327569516' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.012472275334608' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0012468696074036' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0012457831678882' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0012447056531876' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0012436378402293' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0012425793059335' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0012415293494209' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0012404895937401' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0012394584664651' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0012383507550738' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0012371698206713' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0012364160734701' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0012353370940435' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0012344307647808' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0012334508330478' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0012324787906476' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001231514809461' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0012305587896237' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0012296106329143' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0012286705028703' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0012277375240059' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0012268123832791' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0012258947285611' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0012249844693557' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0012240815166194' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0012231857827325' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0012222971814708' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0012214158718828' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0012205410387373' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.00121967357163' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0012188124254976' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.001217958240936' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0012171106994529' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0012162697238526' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001215435238131' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0046392585010804' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0019737098344693' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0012160760587727' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0011215509906406' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0010845451471086' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0010648214169962' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0010525568928365' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0010441930351777' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0010381271923136' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0010335255464664' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0010299150412828' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0010270073189834' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0010246135669981' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0010226101112417' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0010209082545789' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0010194450385984' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0010181725666933' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001017056696459' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0010160699363631' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0010151911040894' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0011440341072766' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0012875609355316' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0012740476842971' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0012617540010969' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0012505129550985' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0012516356316054' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0012416838774882' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0012324893266264' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0012239687258216' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0012160527168629' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001208673217741' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0012017830282129' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0011953333096566' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0011892831331521' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0011835964882999' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0011782415659332' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0012468696074036' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0012457831678882' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0012447056531876' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0012436378402293' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0012425793059335' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0012415293494209' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0012404895937401' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0012394584664651' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0012383507550738' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0012371698206713' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0012364160734701' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0012353370940435' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0012344307647808' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0012334508330478' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0012324787906476' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001231514809461' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0012305587896237' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0012296106329143' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0012286705028703' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0012277375240059' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0012268123832791' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0012258947285611' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0012249844693557' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0012240815166194' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0012231857827325' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0012222971814708' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0012214158718828' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0012205410387373' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.00121967357163' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0012188124254976' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.001217958240936' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0012171106994529' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0012162697238526' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001215435238131' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0046392585010804' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0019737098344693' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0012160760587727' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0011215509906406' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0010845451471086' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0010648214169962' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0010525568928365' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0010441930351777' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0010381271923136' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0010335255464664' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0010299150412828' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0010270073189834' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0010246135669981' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0010226101112417' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0010209082545789' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0010194450385984' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0010181725666933' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001017056696459' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0010160699363631' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0010151911040894' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0011440341072766' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0012875609355316' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0012740476842971' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0012617540010969' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0012505129550985' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0012516356316054' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0012416838774882' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0012324893266264' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0012239687258216' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0012160527168629' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001208673217741' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0012017830282129' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0011953333096566' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0011892831331521' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0011835964882999' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0011782415659332' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='5.8172943827953' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='5.8012922569742' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='5.785764461678' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='5.77020224365' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='5.7575305185284' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='5.7442324353488' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='5.9193103572048' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='5.9041880213583' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='5.8906468080565' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='5.8712934840837' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='6.0164856103769' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='6.0026472496002' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='5.983883759663' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='5.9678279200228' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='6.0752167199672' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='6.0592470585525' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='6.0432131407039' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='6.0272836833658' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='6.0114813070396' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='5.9960298891337' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='5.9806927369258' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='5.9655190240449' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='5.9504093933814' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='5.9355615137208' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='5.9354981984133' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='5.9635775468787' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='5.9488936917406' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='5.9342370761305' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='6.1018356404523' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='6.0901583396383' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='6.0749906473143' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='6.1362288627612' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='6.2641976769834' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='6.2507944844292' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.013055043784829' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='2.0827653359299' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.81387813310285' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.51491758842835' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.35845688197497' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.27506495105983' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.22347332737689' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.18806911790702' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.16239240506329' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.14318184256403' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.14040409237765' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.13276870932023' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.15736999113912' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.14604386361581' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.13656912268964' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.12826777762654' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.12035741804172' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.11483639216756' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.10844359452337' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.16457780883515' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.16437788788385' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.23725184860601' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.27114576726827' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.30662895747121' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.35077573125925' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.37730964908267' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.41734442149668' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.45163828887856' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.48595337378344' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.51736599330237' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.549488067686' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.57690710643138' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.60264435131584' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.62886936022301' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.65105674800547' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.67714317658878' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='5.8172943827953' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='5.8012922569742' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='5.785764461678' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='5.77020224365' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='5.7575305185284' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='5.7442324353488' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='5.9193103572048' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='5.9041880213583' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='5.8906468080565' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='5.8712934840837' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='6.0164856103769' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='6.0026472496002' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='5.983883759663' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='5.9678279200228' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='6.0752167199672' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='6.0592470585525' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='6.0432131407039' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='6.0272836833658' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='6.0114813070396' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='5.9960298891337' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='5.9806927369258' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='5.9655190240449' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='5.9504093933814' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='5.9355615137208' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='5.9354981984133' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='5.9635775468787' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='5.9488936917406' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='5.9342370761305' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='6.1018356404523' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='6.0901583396383' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='6.0749906473143' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='6.1362288627612' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='6.2641976769834' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='6.2507944844292' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.013055043784829' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='2.0827653359299' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.81387813310285' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.51491758842835' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.35845688197497' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.27506495105983' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.22347332737689' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.18806911790702' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.16239240506329' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.14318184256403' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.14040409237765' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.13276870932023' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.15736999113912' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.14604386361581' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.13656912268964' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.12826777762654' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.12035741804172' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.11483639216756' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.10844359452337' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.16457780883515' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.16437788788385' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.23725184860601' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.27114576726827' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.30662895747121' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.35077573125925' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.37730964908267' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.41734442149668' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.45163828887856' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.48595337378344' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.51736599330237' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.549488067686' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.57690710643138' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.60264435131584' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.62886936022301' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.65105674800547' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.67714317658878' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.19809651864725' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.19810464982624' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.19805866239751' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.19806058824599' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.20001278670521' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.1999649085493' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.19986814350409' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.19988038275232' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.2001011449137' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.19999609908743' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.19984356077893' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.20004600664564' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.19983810981157' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.19984900609179' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.19985032876665' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.19986776588209' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.19986555899036' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.19985423151834' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.19986142567526' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.19987037656003' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.19985465388543' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.19985029697852' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.19984485585883' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.19984614741442' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.19986075316874' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.19987856048751' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.19978188223319' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.19976562851453' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.20160022251512' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.20156717051584' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.20147495377876' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.20154763743593' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.2015465921379' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.20154448308941' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.19717877857387' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.12563485881207' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.14987640449438' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.1525740853288' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.15233581332432' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.15106158034615' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.15099737215536' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.15094696835779' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.14946728686899' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.14968579857852' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.15036580112481' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.15145777405677' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.15222575563651' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.15284950709957' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.15260575395166' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.15261296595174' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.15226844515519' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.15237818107389' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.15252342996722' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.17352536914383' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.1728903036239' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.18740795311387' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.19156753970429' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.19532118462382' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.19815369566255' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.20094738527703' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.20252041130202' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.20468178551803' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.2067152746671' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.20872486668565' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.21064070265964' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.2122851744506' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.21374461057641' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.21519967649792' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.21665076609807' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.21815494053213' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.19809651864725' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.19810464982624' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.19805866239751' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.19806058824599' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.20001278670521' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.1999649085493' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.19986814350409' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.19988038275232' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.2001011449137' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.19999609908743' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.19984356077893' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.20004600664564' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.19983810981157' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.19984900609179' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.19985032876665' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.19986776588209' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.19986555899036' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.19985423151834' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.19986142567526' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.19987037656003' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.19985465388543' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.19985029697852' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.19984485585883' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.19984614741442' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.19986075316874' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.19987856048751' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.19978188223319' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.19976562851453' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.20160022251512' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.20156717051584' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.20147495377876' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.20154763743593' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.2015465921379' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.20154448308941' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.19717877857387' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.12563485881207' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.14987640449438' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.1525740853288' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.15233581332432' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.15106158034615' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.15099737215536' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.15094696835779' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.14946728686899' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.14968579857852' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.15036580112481' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.15145777405677' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.15222575563651' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.15284950709957' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.15260575395166' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.15261296595174' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.15226844515519' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.15237818107389' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.15252342996722' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.17352536914383' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.1728903036239' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.18740795311387' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.19156753970429' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.19532118462382' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.19815369566255' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.20094738527703' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.20252041130202' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.20468178551803' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.2067152746671' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.20872486668565' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.21064070265964' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.2122851744506' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.21374461057641' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.21519967649792' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.21665076609807' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.21815494053213' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='2.977973335626' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2.9715380645982' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2.9653723239124' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2.959111267341' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2.955308685184' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='2.9508313536338' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='3.0394845626021' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='3.0337147990098' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='3.0282475290379' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='3.0201983730858' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='3.093994796494' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='3.0884563057462' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='3.0804797316526' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='3.0736810318295' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='3.1287504554155' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='3.1223365718531' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='3.1155971300592' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='3.1089039804888' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='3.1023135539037' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='3.0959658733621' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='3.0896461839663' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='3.0833686410915' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='3.0771640763604' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='3.0710461039359' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='3.0716048834382' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='3.0866527684847' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='3.0806130025094' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='3.074562621037' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='3.159974819507' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='3.1561645774253' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='3.1497817706667' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='3.1821807203539' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='3.2480118786953' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='3.2428062315446' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0094157852837484' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='1.6923076923077' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.61724891961971' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.40430618694542' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.28152079810619' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.21607746159331' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.17564655489567' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.14785345589535' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.12769666005795' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.1126735952796' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.10567272944837' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.099603721608556' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.12104036624988' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.11262611920051' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.10539491511249' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.098886324304354' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.092789634367958' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.088245002387938' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.083310214051552' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.1278001458346' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.12296808204183' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.16679941940078' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.176012071148' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.18953766764721' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.20885417760176' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.22758644827744' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.24851724744035' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.262539924758' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.27840562772326' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.29322112013513' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.30815749136852' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.32150482444877' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.33347505060908' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.34726768076539' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.35778639383116' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.37174245714101' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='2.977973335626' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2.9715380645982' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2.9653723239124' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2.959111267341' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2.955308685184' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='2.9508313536338' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='3.0394845626021' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='3.0337147990098' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='3.0282475290379' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='3.0201983730858' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='3.093994796494' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='3.0884563057462' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='3.0804797316526' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='3.0736810318295' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='3.1287504554155' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='3.1223365718531' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='3.1155971300592' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='3.1089039804888' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='3.1023135539037' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='3.0959658733621' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='3.0896461839663' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='3.0833686410915' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='3.0771640763604' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='3.0710461039359' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='3.0716048834382' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='3.0866527684847' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='3.0806130025094' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='3.074562621037' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='3.159974819507' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='3.1561645774253' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='3.1497817706667' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='3.1821807203539' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='3.2480118786953' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='3.2428062315446' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0094157852837484' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='1.6923076923077' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.61724891961971' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.40430618694542' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.28152079810619' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.21607746159331' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.17564655489567' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.14785345589535' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.12769666005795' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.1126735952796' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.10567272944837' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.099603721608556' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.12104036624988' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.11262611920051' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.10539491511249' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.098886324304354' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.092789634367958' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.088245002387938' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.083310214051552' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.1278001458346' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.12296808204183' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.16679941940078' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.176012071148' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.18953766764721' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.20885417760176' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.22758644827744' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.24851724744035' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.262539924758' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.27840562772326' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.29322112013513' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.30815749136852' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.32150482444877' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.33347505060908' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.34726768076539' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.35778639383116' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.37174245714101' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_write_requests' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='4.6625231056442' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='4.6458227866675' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='4.6292453691586' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='4.6128267444045' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='4.9155546437041' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='4.8980373637492' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='4.8807375014208' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='4.908972425345' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='4.8927682483591' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='4.8722457032144' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='4.8575575514352' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='4.8417949312371' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='4.824070791093' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='4.8075424363672' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='4.7911345774611' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='4.7748881299708' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='4.7587414472439' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='4.7427252840146' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='4.7268354505264' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='4.7110724624545' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='4.6954519039263' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='4.6799779724543' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='4.6646332249453' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='4.649374857162' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='4.634261793592' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='4.619218199614' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='4.6042406096537' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='4.5894601133427' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='4.8668526788154' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='4.8511324359484' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='4.8355347838581' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='4.8611830912891' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='4.845795383018' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='4.8304417494199' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='33.159103832594' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.24832229795521' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.48976404494382' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.52269685182934' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.53329624619547' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.53772133272833' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.54207321175172' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.54488368393141' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.54377870977581' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.54625948772965' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.54739822902956' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.54892448753612' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.54941488628532' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.54965695939224' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.54818993058459' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.54880562739417' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.54904826633714' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.54908282731801' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.54821347303465' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='5.2815063498815' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='5.0366998905341' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='6.9429807744975' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='6.6536820263869' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='6.3905369696365' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='6.1498663930906' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='5.9291988836528' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='5.723217032122' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='5.5356131377605' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='5.361841837358' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='5.2004772800927' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='5.0497021664074' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='4.9089775103643' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='4.7774709663672' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='4.654222734625' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='4.5380962713222' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='4.4287276792948' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_write_requests' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='4.6625231056442' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='4.6458227866675' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='4.6292453691586' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='4.6128267444045' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='4.9155546437041' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='4.8980373637492' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='4.8807375014208' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='4.908972425345' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='4.8927682483591' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='4.8722457032144' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='4.8575575514352' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='4.8417949312371' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='4.824070791093' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='4.8075424363672' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='4.7911345774611' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='4.7748881299708' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='4.7587414472439' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='4.7427252840146' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='4.7268354505264' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='4.7110724624545' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='4.6954519039263' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='4.6799779724543' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='4.6646332249453' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='4.649374857162' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='4.634261793592' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='4.619218199614' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='4.6042406096537' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='4.5894601133427' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='4.8668526788154' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='4.8511324359484' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='4.8355347838581' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='4.8611830912891' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='4.845795383018' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='4.8304417494199' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='33.159103832594' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.24832229795521' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.48976404494382' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.52269685182934' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.53329624619547' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.53772133272833' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.54207321175172' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.54488368393141' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.54377870977581' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.54625948772965' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.54739822902956' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.54892448753612' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.54941488628532' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.54965695939224' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.54818993058459' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.54880562739417' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.54904826633714' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.54908282731801' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.54821347303465' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='5.2815063498815' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='5.0366998905341' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='6.9429807744975' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='6.6536820263869' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='6.3905369696365' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='6.1498663930906' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='5.9291988836528' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='5.723217032122' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='5.5356131377605' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='5.361841837358' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='5.2004772800927' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='5.0497021664074' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='4.9089775103643' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='4.7774709663672' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='4.654222734625' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='4.5380962713222' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='4.4287276792948' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_free' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='3675' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='1602' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='1128' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='1101' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='1073' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='1039' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='1009' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='983' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='946' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='403' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='137' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='773' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_free' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='3675' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='1602' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='1128' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='1101' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='1073' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='1039' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='1009' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='983' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='946' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='403' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='137' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='773' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_total' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='2048' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='2048' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='2048' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='2048' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='8192' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='8192' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_total' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='2048' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='2048' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='2048' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='2048' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='2048' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='2048' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='8192' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='8192' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='8192' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='8192' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_disk_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.24673597234078' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.24674770663517' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.24675873970501' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.24676997436348' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.24678111139942' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.24695017766226' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.24696462051101' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.24697507249277' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.24698272253482' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.24698876216233' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.24700797933653' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.24701624645531' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.24702750654307' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.24705950092625' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.24707359515149' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.24708296523247' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.24709225792761' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.24710147419165' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.2471131702833' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.24712194721248' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.2471309305514' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.24713984119938' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.24714868003515' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.24715744792334' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.24716725609181' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.24717809211509' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.24718691024616' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.24719511847223' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.24720707895352' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.24735884149163' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.24736654937405' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.24737635761697' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.24738824181322' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.24739574702973' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.042055384965313' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.21132132424537' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.23479429559205' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.23814598273976' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.2391636794048' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.23980210021391' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.24002874862038' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.24026109245183' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.24036251334452' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.24047297840955' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.24052973555104' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.24058192670214' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.24066230186079' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.24078022971873' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.2409849460567' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.24099066638147' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.24098691575198' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.24098771917855' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.24102056951854' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.24103463571732' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.24104724318719' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.25328679410637' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.26424237560193' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.27372274019046' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.28262427828411' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.29103294139177' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.2983700399877' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.30531796085725' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.31179732866392' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.3179002327477' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.32331475509352' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.32852137065708' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.33346617182228' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.33813907148019' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.34236428881397' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.34635113588489' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_disk_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.24673597234078' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.24674770663517' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.24675873970501' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.24676997436348' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.24678111139942' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.24695017766226' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.24696462051101' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.24697507249277' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.24698272253482' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.24698876216233' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.24700797933653' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.24701624645531' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.24702750654307' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.24705950092625' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.24707359515149' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.24708296523247' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.24709225792761' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.24710147419165' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.2471131702833' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.24712194721248' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.2471309305514' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.24713984119938' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.24714868003515' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.24715744792334' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.24716725609181' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.24717809211509' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.24718691024616' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.24719511847223' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.24720707895352' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.24735884149163' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.24736654937405' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.24737635761697' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.24738824181322' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.24739574702973' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.042055384965313' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.21132132424537' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.23479429559205' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.23814598273976' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.2391636794048' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.23980210021391' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.24002874862038' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.24026109245183' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.24036251334452' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.24047297840955' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.24052973555104' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.24058192670214' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.24066230186079' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.24078022971873' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.2409849460567' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.24099066638147' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.24098691575198' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.24098771917855' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.24102056951854' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.24103463571732' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.24104724318719' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.25328679410637' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.26424237560193' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.27372274019046' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.28262427828411' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.29103294139177' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.2983700399877' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.30531796085725' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.31179732866392' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.3179002327477' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.32331475509352' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.32852137065708' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.33346617182228' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.33813907148019' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.34236428881397' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.34635113588489' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0035387038731508' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.003527531383209' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0035164506723318' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0035054697301196' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0034945842057941' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0034837868918057' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0035472753486202' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0035363536074835' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0035246206843394' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0035121121801452' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0035347096434234' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0035231414809143' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0035134243686698' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0035029181354131' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0035457005881366' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0035351447543467' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0035246760993123' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0035142935474843' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0035039988896397' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0034937825389901' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0034836520178967' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0034736034704623' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0034636359057304' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.003453748348653' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.003466147380343' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0035226859250494' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0035126845958444' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0035027567629842' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0035890880158777' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0035789384875816' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.003568871008843' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0036010077825004' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0036382754372468' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0036280955417768' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0019098146252701' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0048948393378773' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0027286084701815' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0044034277379361' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0038745350016909' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.003592856679847' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0031022757134598' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0029444935478169' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0026775964617966' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0026092262303876' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0024359219815723' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0022963513112053' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0022799054839027' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0024018268969883' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0026726603663126' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0025556030878721' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0024538053354656' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.0023645357167224' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0023498746544964' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0023064349516923' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0022675001440341' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0022187106315386' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0021614401858304' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.002109338385601' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0020616977620843' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0020637324426957' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0020216636639276' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0019827957898296' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0019467768864275' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0019133137576478' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.0018821186022688' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.001852991891991' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0018257271726391' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0018001514265065' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0017761124278132' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0017696794892569' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0035387038731508' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.003527531383209' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0035164506723318' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0035054697301196' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0034945842057941' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0034837868918057' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0035472753486202' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0035363536074835' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0035246206843394' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0035121121801452' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0035347096434234' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0035231414809143' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0035134243686698' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0035029181354131' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0035457005881366' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0035351447543467' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0035246760993123' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0035142935474843' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0035039988896397' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0034937825389901' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0034836520178967' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0034736034704623' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0034636359057304' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.003453748348653' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.003466147380343' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0035226859250494' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0035126845958444' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0035027567629842' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0035890880158777' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0035789384875816' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.003568871008843' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0036010077825004' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0036382754372468' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0036280955417768' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0019098146252701' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0048948393378773' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0027286084701815' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0044034277379361' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0038745350016909' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.003592856679847' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0031022757134598' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0029444935478169' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0026775964617966' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0026092262303876' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0024359219815723' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0022963513112053' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0022799054839027' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0024018268969883' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0026726603663126' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0025556030878721' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0024538053354656' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.0023645357167224' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0023498746544964' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0023064349516923' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0022675001440341' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0022187106315386' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0021614401858304' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.002109338385601' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0020616977620843' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0020637324426957' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0020216636639276' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0019827957898296' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0019467768864275' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0019133137576478' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.0018821186022688' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.001852991891991' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0018257271726391' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0018001514265065' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0017761124278132' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0017696794892569' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='1.1054735045044' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='1.1055070103229' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='1.1055375306643' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='1.1055691246614' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='1.1056064784364' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='1.1058739697451' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='1.1060618931676' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='1.1060920140006' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='1.1061170764679' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='1.1061423443706' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='1.1063178372987' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='1.1063454373875' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='1.1063720847776' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='1.1067021295129' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='1.1068847263748' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='1.1069091621122' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='1.1069333960392' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='1.1069574306456' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='1.1070075563656' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='1.1070298381477' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='1.1070531880681' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='1.1070763490467' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='1.1070993233676' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='1.1071221132782' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='1.1071569351373' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='1.1072135988365' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='1.1072368841389' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='1.107257555725' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='1.1074378629805' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='1.1076742198684' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='1.1076941427789' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='1.1077852008274' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='1.1079573270784' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='1.107978070622' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.20070431024679' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.96789386562804' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='1.1002592912705' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='1.173817916616' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='1.1683293878931' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='1.1643222920853' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='1.1521522047617' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='1.1490631076542' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='1.1423669360988' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='1.1415783827276' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='1.1371604642814' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='1.1335781996921' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='1.1338239637688' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='1.1386904223569' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='1.1471313874718' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='1.143854395551' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='1.1409645998401' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='1.1385003752473' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='1.1384907115768' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='1.1377073585708' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='1.1367027712162' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='1.1897628306951' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='1.2384214853384' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='1.2804257865085' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='1.3201555566159' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1.3587866587363' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1.3912752120227' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1.4220421017035' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1.4507676019058' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1.4778005833423' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='1.5017357817658' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='1.524828484426' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='1.5467556913023' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='1.5674708331899' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='1.586173515372' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='1.6043118255177' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='1.1054735045044' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='1.1055070103229' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='1.1055375306643' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='1.1055691246614' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='1.1056064784364' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='1.1058739697451' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='1.1060618931676' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='1.1060920140006' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='1.1061170764679' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='1.1061423443706' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='1.1063178372987' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='1.1063454373875' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='1.1063720847776' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='1.1067021295129' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='1.1068847263748' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='1.1069091621122' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='1.1069333960392' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='1.1069574306456' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='1.1070075563656' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='1.1070298381477' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='1.1070531880681' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='1.1070763490467' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='1.1070993233676' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='1.1071221132782' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='1.1071569351373' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='1.1072135988365' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='1.1072368841389' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='1.107257555725' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='1.1074378629805' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='1.1076742198684' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='1.1076941427789' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='1.1077852008274' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='1.1079573270784' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='1.107978070622' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.20070431024679' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.96789386562804' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='1.1002592912705' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='1.173817916616' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='1.1683293878931' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='1.1643222920853' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='1.1521522047617' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='1.1490631076542' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='1.1423669360988' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='1.1415783827276' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='1.1371604642814' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='1.1335781996921' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='1.1338239637688' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='1.1386904223569' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='1.1471313874718' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='1.143854395551' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='1.1409645998401' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='1.1385003752473' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='1.1384907115768' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='1.1377073585708' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='1.1367027712162' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='1.1897628306951' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='1.2384214853384' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='1.2804257865085' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='1.3201555566159' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1.3587866587363' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1.3912752120227' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1.4220421017035' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1.4507676019058' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1.4778005833423' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='1.5017357817658' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='1.524828484426' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='1.5467556913023' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='1.5674708331899' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='1.586173515372' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='1.6043118255177' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_select' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.13294996284674' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.13289262821689' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.13283669245613' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.13277776835011' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.13272539057079' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.13274644945848' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.13291512272746' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.13286417820475' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.13285777219123' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.13278618373699' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.13291428799947' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.13290585579573' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.13280257430639' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.13292294961062' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.13308612124752' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.1330290948462' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.1329725394158' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.13291873382873' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.1329212645365' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.13286795755698' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.1328141041193' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.13275956259588' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.13270546063052' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.13265179293084' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.13262964484591' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.13266628879832' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.13261686461907' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.13256644484554' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.13274949781091' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.132772979387' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.13272485211913' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.13279267548431' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.13297725402009' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.13292782383614' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.037847492323439' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.090581304771178' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.1552783059637' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.22915120943236' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.21574467365573' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.20518746353795' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.18568492142745' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.17931889694184' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.16875964617966' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.16698498055518' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.16005827450042' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.15445558646393' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.15468711233632' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.15994908202948' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.17117228401773' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.16636060824081' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.16215432143636' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.15851859179914' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.15843716654882' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.15736203439266' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.15652802903728' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.15902158076354' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.16112214696786' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.1628886174403' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.16512177315455' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.16900109804639' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.17029955618052' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.17152035338378' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.1726618479456' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.1737341471319' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.17465405774557' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.17560652309498' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.17648922115282' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.17733444608872' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.17807046767033' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.17955753961824' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_select' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.13294996284674' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.13289262821689' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.13283669245613' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.13277776835011' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.13272539057079' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.13274644945848' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.13291512272746' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.13286417820475' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.13285777219123' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.13278618373699' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.13291428799947' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.13290585579573' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.13280257430639' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.13292294961062' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.13308612124752' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.1330290948462' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.1329725394158' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.13291873382873' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.1329212645365' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.13286795755698' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.1328141041193' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.13275956259588' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.13270546063052' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.13265179293084' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.13262964484591' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.13266628879832' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.13261686461907' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.13256644484554' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.13274949781091' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.132772979387' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.13272485211913' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.13279267548431' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.13297725402009' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.13292782383614' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.037847492323439' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.090581304771178' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.1552783059637' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.22915120943236' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.21574467365573' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.20518746353795' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.18568492142745' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.17931889694184' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.16875964617966' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.16698498055518' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.16005827450042' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.15445558646393' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.15468711233632' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.15994908202948' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.17117228401773' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.16636060824081' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.16215432143636' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.15851859179914' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.15843716654882' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.15736203439266' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.15652802903728' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.15902158076354' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.16112214696786' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.1628886174403' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.16512177315455' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.16900109804639' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.17029955618052' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.17152035338378' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.1726618479456' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.1737341471319' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.17465405774557' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.17560652309498' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.17648922115282' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.17733444608872' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.17807046767033' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.17955753961824' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_insert' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0600214874815' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.060044209177372' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.060061718174569' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.06008520657701' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.060108490879139' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.06012662506594' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.060138903678534' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.060152197895148' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.060374240331082' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.060351452635653' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.060203995314022' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.060424372492957' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.060246835767837' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.060270959761671' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.060292501113238' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.060313863820916' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.060335050097787' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.060354919779071' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.060374694252748' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.060394172865244' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.060413560220945' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.060433914553352' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.06045410484724' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.060474133077665' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.060494001188103' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.060509287266574' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.060522314533914' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.060540594363585' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.060559953398602' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.060573587925038' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.060582843108019' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.060592026312521' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.060610822093943' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.060629472826757' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.020788468099625' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.012684518013632' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.034707865168539' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.037343746201532' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.03845350016909' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.039050171776755' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.039419088663478' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.039668905780449' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.039699100198261' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.039856108354566' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.03994938375015' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.040052583250061' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.040086344393029' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.040160712670706' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.040035711298821' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.040103972621386' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.040161881224104' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.040145118373473' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.040082085234942' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.040010755301695' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.040062049893415' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.041833652845484' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.042420349998043' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.042955427032956' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.043432122918357' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.043880999222217' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.044118600870062' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.044507207169125' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.044867329071141' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.045202421754544' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.045513791402663' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.045786660307444' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.046059843023049' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.046307499053584' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.04654861968822' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.046775674887384' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_insert' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0600214874815' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.060044209177372' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.060061718174569' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.06008520657701' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.060108490879139' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.06012662506594' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.060138903678534' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.060152197895148' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.060374240331082' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.060351452635653' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.060203995314022' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.060424372492957' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.060246835767837' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.060270959761671' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.060292501113238' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.060313863820916' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.060335050097787' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.060354919779071' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.060374694252748' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.060394172865244' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.060413560220945' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.060433914553352' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.06045410484724' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.060474133077665' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.060494001188103' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.060509287266574' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.060522314533914' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.060540594363585' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.060559953398602' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.060573587925038' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.060582843108019' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.060592026312521' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.060610822093943' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.060629472826757' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.020788468099625' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.012684518013632' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.034707865168539' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.037343746201532' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.03845350016909' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.039050171776755' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.039419088663478' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.039668905780449' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.039699100198261' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.039856108354566' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.03994938375015' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.040052583250061' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.040086344393029' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.040160712670706' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.040035711298821' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.040103972621386' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.040161881224104' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.040145118373473' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.040082085234942' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.040010755301695' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.040062049893415' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.041833652845484' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.042420349998043' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.042955427032956' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.043432122918357' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.043880999222217' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.044118600870062' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.044507207169125' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.044867329071141' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.045202421754544' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.045513791402663' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.045786660307444' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.046059843023049' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.046307499053584' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.04654861968822' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.046775674887384' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_delete' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0010601821430984' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010599172896842' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010596546119711' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010593942993594' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010591362487102' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0010588802891623' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0010586268163844' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010595667827028' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0010592912326054' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0010589974678287' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010588099685249' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0010585415656825' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001058316110642' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010580723465293' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010578305449372' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010575907486221' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0010573529327422' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010571170728642' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010568832096692' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010566511253746' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010564209908654' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0010561927185475' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010559662859094' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0010557416708008' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001055518851426' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001055297806336' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010550785750952' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010548609549098' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010546451670721' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010544309516163' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0010542184678945' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001056167942147' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010559503763201' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010557344894667' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0011137268281588' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0019737098344693' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0012160760587727' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0011215509906406' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0010845451471086' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0010648214169962' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0010525568928365' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0010441930351777' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0010381271923136' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0010335255464664' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0010299150412828' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0010270073189834' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0010246135669981' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0010226101112417' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0010209082545789' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0010194450385984' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0010181725666933' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001017056696459' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0010160699363631' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0010151911040894' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0010144034107277' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0010136933778825' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0010130498897284' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0010124644762427' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.001011929188338' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0010114379832548' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0010109856307949' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0010105676966648' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0010101803966283' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0010098205780392' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001009485146261' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0010091719558279' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0010088787868026' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0010086037787796' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0010083452949227' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0010081018893606' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_delete' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0010601821430984' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010599172896842' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010596546119711' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010593942993594' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010591362487102' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0010588802891623' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0010586268163844' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010595667827028' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0010592912326054' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0010589974678287' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010588099685249' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0010585415656825' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001058316110642' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010580723465293' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010578305449372' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010575907486221' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.0010573529327422' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010571170728642' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010568832096692' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010566511253746' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010564209908654' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0010561927185475' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010559662859094' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0010557416708008' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001055518851426' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001055297806336' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010550785750952' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010548609549098' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010546451670721' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010544309516163' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0010542184678945' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001056167942147' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010559503763201' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010557344894667' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0011137268281588' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0019737098344693' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0012160760587727' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0011215509906406' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0010845451471086' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0010648214169962' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0010525568928365' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0010441930351777' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0010381271923136' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0010335255464664' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0010299150412828' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0010270073189834' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0010246135669981' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0010226101112417' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0010209082545789' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0010194450385984' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0010181725666933' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.001017056696459' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.0010160699363631' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0010151911040894' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0010144034107277' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0010136933778825' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0010130498897284' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0010124644762427' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.001011929188338' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0010114379832548' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0010109856307949' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0010105676966648' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0010101803966283' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0010098205780392' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.001009485146261' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0010091719558279' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0010088787868026' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0010086037787796' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0010083452949227' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0010081018893606' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_update' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0019690553245844' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0019672362477592' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0019678656432045' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0019636422038921' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001959455463767' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0019601092049118' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0019643513062414' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0019649818797847' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0019640754421644' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0019710983204601' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0019727168794019' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0019694483277016' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0019668811144442' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0019686467401088' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0019657701004517' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0019617655019898' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.001957793976795' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0019561397997475' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0019556379224432' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0019540049513084' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0019523863258087' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0019485330890823' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0019447109061501' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0019409194031182' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0019382685890994' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001945592488346' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0019462499201361' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0019447056435464' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.001943175583665' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0019427440819948' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0019434013413649' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0019505344055649' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.001950080428666' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0019464145038291' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0022509951097464' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0019737098344693' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0018643042350908' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0023370608970463' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0021836320595198' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0020371426719388' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0018409102853839' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0017954746331978' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0017625438462712' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0018046131151938' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0017777910733517' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0017021902935696' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0018122477109383' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0017687437822194' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0019617797106298' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0018944717755265' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0018359380678927' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.0018357781264925' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.001932056309057' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0020633772862612' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0020370455723915' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0019859232075368' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0019395920604471' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.001897442289475' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0019066183136899' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0018921626938738' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0019447642483631' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0019088219131758' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0018755141100297' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0018445697113732' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.0018157225784422' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0018254760245075' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0017990908122314' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0017915476477269' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0017677671328905' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0017534757105357' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_update' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0019690553245844' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0019672362477592' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0019678656432045' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0019636422038921' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001959455463767' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='0.0019601092049118' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='0.0019643513062414' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0019649818797847' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='0.0019640754421644' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='0.0019710983204601' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0019727168794019' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='0.0019694483277016' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0019668811144442' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0019686467401088' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0019657701004517' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0019617655019898' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='0.001957793976795' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0019561397997475' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0019556379224432' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0019540049513084' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0019523863258087' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0019485330890823' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0019447109061501' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0019409194031182' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0019382685890994' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001945592488346' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0019462499201361' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0019447056435464' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.001943175583665' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0019427440819948' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='0.0019434013413649' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0019505344055649' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.001950080428666' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0019464145038291' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0022509951097464' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0019737098344693' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0018643042350908' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0023370608970463' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0021836320595198' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0020371426719388' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0018409102853839' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0017954746331978' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0017625438462712' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0018046131151938' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0017777910733517' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0017021902935696' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0018122477109383' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='0.0017687437822194' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0019617797106298' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0018944717755265' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0018359380678927' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='0.0018357781264925' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='0.001932056309057' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0020633772862612' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0020370455723915' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0019859232075368' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0019395920604471' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.001897442289475' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0019066183136899' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0018921626938738' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0019447642483631' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0019088219131758' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0018755141100297' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0018445697113732' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='0.0018157225784422' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0018254760245075' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0017990908122314' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0017915476477269' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0017677671328905' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0017534757105357' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_received' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='453.62253882669' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='452.8238236035' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='451.95769148826' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='451.18948599688' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='450.43557950507' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='449.62929330435' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='448.82405972756' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='447.94304224238' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='447.2952620376' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='446.21761687988' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='445.57203397805' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='444.96135202917' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='444.12686203341' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='443.47951381831' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='442.85565380323' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='442.16430295037' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='441.48019087056' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='440.78357084516' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='440.11945587797' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='439.43213818343' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='438.75078622651' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='438.09185261774' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='437.43750188886' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='436.78883159884' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='436.15583475369' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='435.49673245262' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='434.7664668416' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='434.12257363712' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='433.58454481669' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='432.90574627556' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='432.14771279393' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='431.43286472707' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='430.92789395252' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='430.33082492403' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='15417.779938588' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='198.95423563778' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='258.49178910977' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='292.80503221101' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='289.67196482922' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='286.88461787775' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='280.60009460241' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='279.11423899593' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='273.39404453256' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='273.20816011801' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='270.67682780902' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='269.01328760094' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='269.28682189623' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='271.81398661481' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='272.90390566196' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='271.56295331246' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='270.39481718398' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='268.36202838234' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='267.39485440638' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='265.53290393146' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='265.40515354036' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='1208.0780111738' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='1173.9286823526' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='1142.8587774842' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='1114.5787684306' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1089.5814613167' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1062.9404029529' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1040.8168301137' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1020.321252596' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1001.2869081874' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='983.52532534052' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='966.68408115347' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='951.18293852328' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='936.51639880235' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='922.84860800481' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='911.15781670286' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_received' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='453.62253882669' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='452.8238236035' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='451.95769148826' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='451.18948599688' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='450.43557950507' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='449.62929330435' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='448.82405972756' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='447.94304224238' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='447.2952620376' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='446.21761687988' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='445.57203397805' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='444.96135202917' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='444.12686203341' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='443.47951381831' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='442.85565380323' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='442.16430295037' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='441.48019087056' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='440.78357084516' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='440.11945587797' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='439.43213818343' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='438.75078622651' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='438.09185261774' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='437.43750188886' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='436.78883159884' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='436.15583475369' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='435.49673245262' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='434.7664668416' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='434.12257363712' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='433.58454481669' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='432.90574627556' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='432.14771279393' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='431.43286472707' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='430.92789395252' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='430.33082492403' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='15417.779938588' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='198.95423563778' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='258.49178910977' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='292.80503221101' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='289.67196482922' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='286.88461787775' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='280.60009460241' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='279.11423899593' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='273.39404453256' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='273.20816011801' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='270.67682780902' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='269.01328760094' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='269.28682189623' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='271.81398661481' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='272.90390566196' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='271.56295331246' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='270.39481718398' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='268.36202838234' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='267.39485440638' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='265.53290393146' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='265.40515354036' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='1208.0780111738' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='1173.9286823526' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='1142.8587774842' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='1114.5787684306' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1089.5814613167' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1062.9404029529' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1040.8168301137' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1020.321252596' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1001.2869081874' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='983.52532534052' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='966.68408115347' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='951.18293852328' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='936.51639880235' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='922.84860800481' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='911.15781670286' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_sent' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='2556.304046328' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2619.2162940789' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2681.8858405517' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2744.3345123304' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2806.5984129762' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='2986.491542267' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='3048.863322944' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='3109.8918624627' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='3165.4522498058' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='3219.2191342948' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='3278.6334398186' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='3333.617217777' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='3389.6147999291' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='3445.4629492622' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='3501.2435799421' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='3556.2153375682' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='3611.0521200512' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='3665.7462219912' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='3720.3526303934' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='3774.7449487024' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='3829.0005608246' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='3883.1232182694' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='3937.1113896988' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='3990.9625282192' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='4044.7491280764' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='4098.6553774352' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='4152.0935454519' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='4205.3724927172' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='4259.3249857376' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='4421.8399425209' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='4474.291817891' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='4522.4659519656' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='4571.051549664' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='15.424046216754' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='455.56556351643' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='289.16747809153' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='399.88634399309' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='662.18767472955' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='615.5759215421' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='586.66623452389' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='529.12282545856' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='506.71504330917' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='475.9380051853' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='476.79519243664' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='455.88731003949' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='439.05144894266' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='441.8887220636' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='457.25327846613' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='481.76555574141' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='467.83833394909' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='455.71974267646' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='445.09065634168' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='447.48634055409' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='443.51964209759' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='439.40356916518' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='1324.0125294408' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='1284.2217437263' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='1247.6950939822' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='1215.6143651286' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1191.1607036647' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1162.4178604385' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1136.0240098068' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1111.7022539398' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1089.0526284777' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='1067.8556265888' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='1048.2001871079' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='1029.9124018894' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='1012.6211928279' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='996.25302934206' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='988.06138801569' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_sent' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='2556.304046328' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2619.2162940789' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2681.8858405517' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2744.3345123304' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2806.5984129762' color='ff6600' showName='0'/>
<set name='09-10 05:00' value='2986.491542267' color='ff6600' showName='0'/>
<set name='09-10 06:00' value='3048.863322944' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='3109.8918624627' color='ff6600' showName='0'/>
<set name='09-10 08:05' value='3165.4522498058' color='ff6600' showName='0'/>
<set name='09-10 09:15' value='3219.2191342948' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='3278.6334398186' color='ff6600' showName='0'/>
<set name='09-10 11:05' value='3333.617217777' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='3389.6147999291' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='3445.4629492622' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='3501.2435799421' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='3556.2153375682' color='ff6600' showName='0'/>
<set name='09-10 16:00' value='3611.0521200512' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='3665.7462219912' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='3720.3526303934' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='3774.7449487024' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='3829.0005608246' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='3883.1232182694' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='3937.1113896988' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='3990.9625282192' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='4044.7491280764' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='4098.6553774352' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='4152.0935454519' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='4205.3724927172' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='4259.3249857376' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='4421.8399425209' color='ff6600' showName='0'/>
<set name='09-11 06:00' value='4474.291817891' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='4522.4659519656' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='4571.051549664' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='15.424046216754' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='455.56556351643' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='289.16747809153' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='399.88634399309' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='662.18767472955' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='615.5759215421' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='586.66623452389' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='529.12282545856' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='506.71504330917' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='475.9380051853' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='476.79519243664' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='455.88731003949' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='439.05144894266' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='441.8887220636' color='ff6600' showName='0'/>
<set name='09-16 01:00' value='457.25327846613' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='481.76555574141' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='467.83833394909' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='455.71974267646' color='ff6600' showName='0'/>
<set name='09-16 05:00' value='445.09065634168' color='ff6600' showName='0'/>
<set name='09-16 06:00' value='447.48634055409' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='443.51964209759' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='439.40356916518' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='1324.0125294408' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='1284.2217437263' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='1247.6950939822' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='1215.6143651286' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1191.1607036647' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1162.4178604385' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1136.0240098068' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1111.7022539398' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1089.0526284777' color='ff6600' showName='0'/>
<set name='09-16 18:00' value='1067.8556265888' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='1048.2001871079' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='1029.9124018894' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='1012.6211928279' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='996.25302934206' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='988.06138801569' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr></tr></div></table></body></html>