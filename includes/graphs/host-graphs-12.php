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
<body><table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder"><tr><td colspan='3'><div id='content'><h1>Date range: start 2009-09-11 -> end 2009-09-18</h1></td></tr><tr><td colspan="3">

<div id="content"><table cellpadding="0" cellspacing="1" border="0" class="tableborder"><form action="http://testing.kontrollbase.com/index.php/main/graphs" method="post" name="graphform"><input type="hidden" name="server_list_id" value="12" /><tr><th>Start date</th><th>End Date</th><th>&nbsp;</th></tr><tr><td class='td'><input type="text" name="sday" value="2009-09-11" id="sday" maxlength="10" size="15" style="width:50%"  />
<a href="#"onClick="cal.select(document.forms['graphform'].sday,'anchor1','yyyy-MM-dd'); return false;" NAME="anchor1" ID="anchor1"><img src='http://testing.kontrollbase.com/includes/images/icon_calendar.gif' height='20' width='20' border='0'></a></td><td class='td'><input type="text" name="eday" value="2009-09-18" id="eday" maxlength="10" size="15" style="width:50%"  /> 
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
<set name='09-17 00:00' value='0.612708' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.616932' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.616088' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.615549' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.620446' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.619812' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.619067' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.618514' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.619971' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.621305' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.637946' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.63839' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.637529' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.636692' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.638795' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.640873' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.642858' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.644757' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.646625' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.64973' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.652707' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.654291' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.655829' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.657304' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Query Rate' xAxisName='' yAxisName='Q/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.612708' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.616932' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.616088' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.615549' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.620446' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.619812' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.619067' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.618514' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.619971' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.621305' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.637946' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.63839' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.637529' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.636692' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.638795' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.640873' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.642858' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.644757' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.646625' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.64973' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.652707' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.654291' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.655829' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.657304' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='12' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='15' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='15' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='15' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='15' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='15' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='15' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='15' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='15' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='19' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='26' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='26' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='26' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='26' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='26' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='26' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='26' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='26' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='9' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='14' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='16' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='16' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='16' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='16' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Connections' xAxisName='' yAxisName='connections' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='12' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='15' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='15' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='15' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='15' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='15' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='15' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='15' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='15' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='19' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='26' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='26' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='26' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='26' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='26' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='26' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='26' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='26' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='9' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='14' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='16' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='16' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='16' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='16' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.161' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.321' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.241' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.131' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.161' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.321' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 1 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.161' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.321' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.241' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.131' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.161' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.321' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.121' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.131' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.101' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.131' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.111' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.041' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 5 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.121' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.131' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.101' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.131' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.111' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.041' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.101' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.101' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.101' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.071' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 15 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.101' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.101' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.101' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.071' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='3959345152' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Total' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='3959345152' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='2647822336' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='2627600384' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='2624180224' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='2622267392' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='2617577472' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='2616254464' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='2612318208' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='2610032640' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='2606223360' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='2590928896' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='2550779904' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='2546978816' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='2544693248' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='2541899776' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='2539859968' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='2536550400' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='2534240256' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='2536361984' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='2534957056' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='2519588864' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='2525691904' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='2523295744' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='2521493504' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='2518962176' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Used' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='2647822336' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='2627600384' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='2624180224' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='2622267392' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='2617577472' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='2616254464' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='2612318208' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='2610032640' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='2606223360' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='2590928896' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='2550779904' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='2546978816' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='2544693248' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='2541899776' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='2539859968' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='2536550400' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='2534240256' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='2536361984' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='2534957056' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='2519588864' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='2525691904' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='2523295744' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='2521493504' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='2518962176' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='2080366592' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Total' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='2080366592' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='2080366592' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Free' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='2080366592' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='1' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='4' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU User' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='1' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='4' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU System' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='97' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='98' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='98' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='92' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='98' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU Idle' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='97' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='98' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='98' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='92' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='99' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='98' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='6' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Schemas' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='6' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='6' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='79' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Tables' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='79' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='79' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='398738296' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='399786872' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='400835448' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='402932600' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='402932600' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='402932600' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='405029752' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='405029752' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='405029752' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='407126904' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='407126904' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='408175480' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='409224056' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='409224056' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='411321208' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='411353976' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='411353976' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='414499704' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='414499704' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='414499704' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='416596856' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='416596856' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='419742584' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='419742584' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Data Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='398738296' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='399786872' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='400835448' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='402932600' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='402932600' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='402932600' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='405029752' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='405029752' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='405029752' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='407126904' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='407126904' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='408175480' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='409224056' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='409224056' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='411321208' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='411353976' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='411353976' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='414499704' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='414499704' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='414499704' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='416596856' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='416596856' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='419742584' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='419742584' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='6264832' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='6264832' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='6264832' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='6297600' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='6330368' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='6330368' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='6330368' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='6363136' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='6363136' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='6379520' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='6412288' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='6412288' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='6461440' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='6494208' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='6494208' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='6526976' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='6526976' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='6543360' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='6543360' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='6559744' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='6592512' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='6592512' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='6641664' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='6641664' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Index Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='6264832' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='6264832' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='6264832' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='6297600' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='6330368' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='6330368' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='6330368' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='6363136' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='6363136' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='6379520' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='6412288' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='6412288' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='6461440' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='6494208' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='6494208' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='6526976' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='6526976' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='6543360' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='6543360' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='6559744' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='6592512' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='6592512' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='6641664' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='6641664' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='33' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='33' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='33' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='33' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='33' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='398229504' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='399278080' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='400326656' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='402423808' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='402423808' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='402423808' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='404520960' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='404520960' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='404520960' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='406618112' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='406618112' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='407666688' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='408715264' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='408715264' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='410812416' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='410845184' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='410845184' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='413990912' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='413990912' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='413990912' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='416088064' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='416088064' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='419233792' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='419233792' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='398229504' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='399278080' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='400326656' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='402423808' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='402423808' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='402423808' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='404520960' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='404520960' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='404520960' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='406618112' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='406618112' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='407666688' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='408715264' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='408715264' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='410812416' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='410845184' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='410845184' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='413990912' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='413990912' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='413990912' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='416088064' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='416088064' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='419233792' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='419233792' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='6144000' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='6144000' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='6144000' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='6176768' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='6209536' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='6209536' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='6209536' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='6242304' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='6242304' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='6258688' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='6291456' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='6291456' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='6340608' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='6373376' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='6373376' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='6406144' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='6406144' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='6422528' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='6422528' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='6438912' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='6471680' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='6471680' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='6520832' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='6520832' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='6144000' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='6144000' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='6144000' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='6176768' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='6209536' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='6209536' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='6209536' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='6242304' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='6242304' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='6258688' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='6291456' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='6291456' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='6340608' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='6373376' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='6373376' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='6406144' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='6406144' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='6422528' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='6422528' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='6438912' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='6471680' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='6471680' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='6520832' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='6520832' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='508792' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='508792' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='508792' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='120832' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='120832' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='120832' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='8252800' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='8251496' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='8258536' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='8257232' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='8190360' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='8258536' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='8258536' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='8258536' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='8234208' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='8251720' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='7922552' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='8206072' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='8273160' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='8272320' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='8271056' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='8272320' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='8273160' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='8273160' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='8208592' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='8041384' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='8257384' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='8255744' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='8273160' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='8271592' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_free_memory' xAxisName='' yAxisName='free' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='8252800' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='8251496' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='8258536' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='8257232' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='8190360' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='8258536' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='8258536' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='8258536' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='8234208' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='8251720' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='7922552' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='8206072' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='8273160' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='8272320' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='8271056' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='8272320' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='8273160' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='8273160' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='8208592' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='8041384' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='8257384' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='8255744' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='8273160' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='8271592' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.041739049658343' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.042721529840463' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.042399707959591' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.042159996517398' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.042038549650706' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.041771437239705' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.041523992787362' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.041261975457866' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.04109548989912' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.040980430037384' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.042422332360085' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.042247569436109' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.042039077002608' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.041810456313137' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.042132409385268' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.042435579026449' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.042710899755183' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.042975689057951' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.04324617886857' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.043542522054158' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.043863315714372' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.044108553605622' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.044330682545532' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.044559486817775' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_hits' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.041739049658343' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.042721529840463' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.042399707959591' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.042159996517398' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.042038549650706' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.041771437239705' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.041523992787362' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.041261975457866' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.04109548989912' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.040980430037384' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.042422332360085' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.042247569436109' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.042039077002608' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.041810456313137' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.042132409385268' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.042435579026449' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.042710899755183' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.042975689057951' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.04324617886857' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.043542522054158' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.043863315714372' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.044108553605622' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.044330682545532' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.044559486817775' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.03677164089807' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.036497749333987' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.035649998509998' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.034781234582233' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.035646604632746' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.034869321786138' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.034122964717281' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.033438184828021' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.033381856919167' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.033265348621321' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.036454032436146' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.036138152051276' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.035442042437202' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.034803529926134' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.034146026253051' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.033519831186336' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.032934484476894' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.032371528146716' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.031824488604375' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.031676259287308' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.03148817251844' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.030971178711728' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.030486781620343' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.030004708618488' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_inserts' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.03677164089807' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.036497749333987' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.035649998509998' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.034781234582233' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.035646604632746' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.034869321786138' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.034122964717281' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.033438184828021' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.033381856919167' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.033265348621321' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.036454032436146' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.036138152051276' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.035442042437202' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.034803529926134' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.034146026253051' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.033519831186336' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.032934484476894' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.032371528146716' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.031824488604375' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.031676259287308' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.03148817251844' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.030971178711728' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.030486781620343' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.030004708618488' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.0014959536480146' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0014899409008788' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.0014470006258009' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.001442580607714' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0015727295867862' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0014137132140001' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.0014036924401862' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0013941456236698' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0013914572477347' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0013763454349299' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0020120960816547' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.0014921141704876' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.0012995981859624' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0012933934694065' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0012930782800814' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.00128172437413' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0012762311242065' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.001270947999235' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0012762891757199' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0016293878052275' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0012863918644613' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0012862388218805' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.001247299105844' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0012478220256591' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_queries_in_cache' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.0014959536480146' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0014899409008788' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.0014470006258009' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.001442580607714' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0015727295867862' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0014137132140001' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.0014036924401862' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0013941456236698' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0013914572477347' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0013763454349299' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0020120960816547' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.0014921141704876' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.0012995981859624' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0012933934694065' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0012930782800814' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.00128172437413' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0012762311242065' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.001270947999235' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0012762891757199' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0016293878052275' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0012863918644613' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0012862388218805' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.001247299105844' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0012478220256591' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.0010078722801272' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0010076553265762' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.00100745001043' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.0010072554197986' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0010070707356393' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0010068952202333' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.0010067282073364' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0010065690937278' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0010064173319301' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0010062724239155' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0010061339156464' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.001006001392323' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.0010058744742346' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0010057528131256' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0010056361207708' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.0010055240073359' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0010054162965531' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0010053127058674' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0010052130033155' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0010051169740262' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0010050244186748' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0010049351521014' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0010048490020754' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0010047658081858' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_lowmem_prunes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.0010078722801272' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0010076553265762' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.00100745001043' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.0010072554197986' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0010070707356393' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0010068952202333' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.0010067282073364' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0010065690937278' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0010064173319301' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0010062724239155' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0010061339156464' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.001006001392323' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.0010058744742346' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0010057528131256' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0010056361207708' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.0010055240073359' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0010054162965531' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0010053127058674' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0010052130033155' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0010051169740262' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0010050244186748' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0010049351521014' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0010048490020754' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0010047658081858' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.16633362723179' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.16805453654653' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.16965333611467' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.17117587137592' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.17258554175976' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.17398728521389' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.17525384180639' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.1765261844076' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.17767556536694' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.17880440073262' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.17988338199573' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.18091574045178' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.18191618300162' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.18288093977955' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.1837624882346' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.18465667189606' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.18550072578374' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.18630186794738' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.18707815334571' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.18780537077594' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.18854647587274' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.18924150660323' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.18991227185445' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.19056478639648' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_not_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.16633362723179' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.16805453654653' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.16965333611467' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.17117587137592' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.17258554175976' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.17398728521389' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.17525384180639' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.1765261844076' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.17767556536694' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.17880440073262' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.17988338199573' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.18091574045178' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.18191618300162' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.18288093977955' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.1837624882346' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.18465667189606' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.18550072578374' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.18630186794738' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.18707815334571' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.18780537077594' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.18854647587274' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.18924150660323' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.18991227185445' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.19056478639648' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.0012519129640709' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0012449704504394' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.0012384003337605' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.0012394288533535' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0012262635404587' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0012206470474667' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.001215302634766' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0012102109992905' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0012053546217625' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0012007175652959' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0011962853006845' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.0011920445543366' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.0011879831755058' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0011840900200198' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0011803558646655' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.0011767682347482' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0011733214896982' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0011700065877553' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.001166816106095' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0011637431688397' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0011607813975923' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0011579248672444' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0011551680664119' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0011525058619441' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.0012519129640709' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0012449704504394' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.0012384003337605' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.0012394288533535' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0012262635404587' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0012206470474667' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.001215302634766' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0012102109992905' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0012053546217625' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0012007175652959' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0011962853006845' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.0011920445543366' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.0011879831755058' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0011840900200198' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0011803558646655' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.0011767682347482' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0011733214896982' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0011700065877553' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.001166816106095' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0011637431688397' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0011607813975923' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0011579248672444' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0011551680664119' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0011525058619441' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.0013542526057247' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0011454512049484' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.0013352504693507' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.0013264938909365' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0013181831037701' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0013240753509667' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.0013027693301397' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0012956092177523' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0012887799368535' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0012822590761974' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0012637583727949' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.0012700626545359' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.0012584768663205' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0011093034493868' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0012536254346858' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.0011049561393818' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0011679051931451' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0011115668232144' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0011511770961486' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0012302638311808' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.001145708141568' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0012220818445624' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0010921310394321' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0012144613683588' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.0013542526057247' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0011454512049484' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.0013352504693507' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.0013264938909365' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0013181831037701' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0013240753509667' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.0013027693301397' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0012956092177523' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0012887799368535' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0012822590761974' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0012637583727949' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.0012700626545359' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.0012584768663205' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0011093034493868' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0012536254346858' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.0011049561393818' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0011679051931451' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0011115668232144' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0011511770961486' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0012302638311808' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.001145708141568' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0012220818445624' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0010921310394321' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0012144613683588' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.15026630349214' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.15195538475671' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.15334526328337' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.15460449255594' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.15587032270837' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.15705951954105' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.1581574669645' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.15925603699714' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.16032309982802' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.16132315528013' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.16227904409059' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.16311561082171' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.16394029184388' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.16477108406011' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.16550145693722' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.16622305941622' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.16693366119982' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.16760645600017' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.16824878537023' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.16887256687885' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.16947378258336' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.17003882977673' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.17059869658824' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.17112982061498' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Slow_queries' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.15026630349214' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.15195538475671' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.15334526328337' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.15460449255594' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.15587032270837' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.15705951954105' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.1581574669645' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.15925603699714' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.16032309982802' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.16132315528013' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.16227904409059' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.16311561082171' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.16394029184388' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.16477108406011' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.16550145693722' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.16622305941622' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.16693366119982' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.16760645600017' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.16824878537023' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.16887256687885' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.16947378258336' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.17003882977673' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.17059869658824' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.17112982061498' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='1.4702314814815' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='1.5118981481481' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='1.5535648148148' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='1.5952314814815' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='1.6368981481481' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='1.6785648148148' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='1.7202314814815' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='1.7618981481481' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='1.8035648148148' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='1.8452314814815' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='1.8868981481481' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='1.9285648148148' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='1.9702314814815' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='2.0118981481481' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='2.0535532407407' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='2.0952314814815' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='2.1368981481481' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='2.1785648148148' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='2.2202314814815' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='2.2618981481481' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='2.3035648148148' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='2.3452314814815' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='2.3868981481481' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='2.4285648148148' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Uptime' xAxisName='' yAxisName='days' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='1.4702314814815' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='1.5118981481481' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='1.5535648148148' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='1.5952314814815' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='1.6368981481481' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='1.6785648148148' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='1.7202314814815' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='1.7618981481481' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='1.8035648148148' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='1.8452314814815' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='1.8868981481481' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='1.9285648148148' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='1.9702314814815' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='2.0118981481481' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='2.0535532407407' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='2.0952314814815' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='2.1368981481481' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='2.1785648148148' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='2.2202314814815' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='2.2618981481481' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='2.3035648148148' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='2.3452314814815' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='2.3868981481481' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='2.4285648148148' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.13748172056554' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.13792317114248' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.13773004142206' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.13736561511449' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.13882984981758' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.13862170063712' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.13837653739538' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.13825464434927' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.13870952588752' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.13900587098878' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.14266278185342' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.14268687135415' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.14235747350612' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.1421337644108' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.14225809487846' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.1424035397839' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.14259282449033' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.14277486877617' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.14291880226036' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.14347702478662' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.14393466245955' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.14401083759401' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.14414254126501' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.14421253598185' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_immediate' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.13748172056554' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.13792317114248' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.13773004142206' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.13736561511449' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.13882984981758' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.13862170063712' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.13837653739538' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.13825464434927' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.13870952588752' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.13900587098878' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.14266278185342' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.14268687135415' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.14235747350612' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.1421337644108' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.14225809487846' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.1424035397839' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.14259282449033' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.14277486877617' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.14291880226036' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.14347702478662' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.14393466245955' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.14401083759401' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.14414254126501' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.14421253598185' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.0010078722801272' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0010076553265762' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.00100745001043' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.0010072554197986' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0010070707356393' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0010068952202333' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.0010067282073364' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0010065690937278' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0010064173319301' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0010062724239155' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0010061339156464' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.001006001392323' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.0010058744742346' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0010057528131256' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0010056361207708' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.0010055240073359' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0010054162965531' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0010053127058674' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0010052130033155' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0010051169740262' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0010050244186748' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0010049351521014' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0010048490020754' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0010047658081858' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_waited' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.0010078722801272' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0010076553265762' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.00100745001043' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.0010072554197986' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0010070707356393' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0010068952202333' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.0010067282073364' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0010065690937278' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0010064173319301' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0010062724239155' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0010061339156464' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.001006001392323' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.0010058744742346' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0010057528131256' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0010056361207708' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.0010055240073359' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0010054162965531' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0010053127058674' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0010052130033155' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0010051169740262' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0010050244186748' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0010049351521014' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0010048490020754' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0010047658081858' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.0010472336807633' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0010153106531525' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.00101490002086' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.0010145108395972' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.001021212206918' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0010137904404667' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.0010201846220093' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0010131381874557' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0010192519957902' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0010062724239155' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0010061339156464' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.001012002784646' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.0010058744742346' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0010057528131256' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0010112722415416' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.0010055240073359' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0010054162965531' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0010053127058674' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0010938340596785' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0010716376363674' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0010552686054224' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0010542866731153' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0010533390228291' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0010524238900433' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.0010472336807633' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0010153106531525' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.00101490002086' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.0010145108395972' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.001021212206918' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0010137904404667' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.0010201846220093' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0010131381874557' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0010192519957902' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0010062724239155' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0010061339156464' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.001012002784646' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.0010058744742346' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0010057528131256' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0010112722415416' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.0010055240073359' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0010054162965531' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0010053127058674' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0010938340596785' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0010716376363674' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0010552686054224' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0010542866731153' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0010533390228291' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0010524238900433' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.0011338287621627' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0011301405517959' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.0011266501773102' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.001123342136576' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0011202025058687' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0011172187439667' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.0011143795247194' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0011116745933731' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0011090946428113' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0011191760543945' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0011533478911598' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.0011620375927215' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.001158610804333' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0011553259543917' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0011521752608115' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.0011491481980688' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0011462400069329' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0011434430584185' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0011407510895177' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0011381582987085' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0011356593042185' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0011332491067375' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0011309230560351' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0011286768210153' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_created' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.0011338287621627' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0011301405517959' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.0011266501773102' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.001123342136576' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0011202025058687' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0011172187439667' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.0011143795247194' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0011116745933731' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0011090946428113' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0011191760543945' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0011533478911598' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.0011620375927215' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.001158610804333' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0011553259543917' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0011521752608115' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.0011491481980688' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0011462400069329' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0011434430584185' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0011407510895177' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0011381582987085' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0011356593042185' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0011332491067375' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0011309230560351' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0011286768210153' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Seconds_Behind_Master' xAxisName='' yAxisName='seconds' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.012627357747898' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.012758581621092' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.012771016479423' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.012790057172708' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.012857623667166' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.012852883581102' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.012861829534139' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.012857214178732' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.012897733398362' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.012948967559024' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.013004072919989' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.01302679021533' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.013019174283902' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.013029132245668' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.013027481724878' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.013009191948207' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.012980847975388' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.012969526319145' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.012958629605688' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.012963485273349' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.012953092027252' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.012918392324851' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.012928545105417' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.012909754656195' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.012627357747898' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.012758581621092' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.012771016479423' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.012790057172708' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.012857623667166' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.012852883581102' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.012861829534139' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.012857214178732' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.012897733398362' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.012948967559024' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.013004072919989' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.01302679021533' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.013019174283902' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.013029132245668' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.013027481724878' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.013009191948207' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.012980847975388' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.012969526319145' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.012958629605688' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.012963485273349' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.012953092027252' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.012918392324851' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.012928545105417' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.012909754656195' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.0011731901627988' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0011684171846771' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.0011639002294603' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.001159619235569' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0011555561840654' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0011516948451334' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.0011480205614016' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0011445200620122' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0011411813024617' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.001137993326141' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0011349461442206' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.0011320306311064' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.0011292384331602' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0011265618887636' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0011239946569575' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.0011215281613894' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0011191585241675' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0011168795290818' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0011146860729403' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0011125734285773' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0011105372108447' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0011085733462305' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0011066780456582' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0011048477800865' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.0011731901627988' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0011684171846771' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.0011639002294603' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.001159619235569' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0011555561840654' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0011516948451334' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.0011480205614016' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0011445200620122' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0011411813024617' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.001137993326141' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0011349461442206' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.0011320306311064' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.0011292384331602' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0011265618887636' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0011239946569575' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.0011215281613894' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0011191585241675' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0011168795290818' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0011146860729403' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0011125734285773' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0011105372108447' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0011085733462305' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0011066780456582' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0011048477800865' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.67975586484869' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.68932868910188' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.69247271806181' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.71306866529297' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.74405653760217' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.7482074358055' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.76603754339694' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.78332651023465' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.8097827604795' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.83023325890057' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.87151917462031' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.89250082819214' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.90122205512607' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.91582384886209' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.92634394427004' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.94705254435778' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.96826390363325' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.98997613532524' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='1.016921408762' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='1.0616390691201' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='1.0843197941998' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='1.1027005152299' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='1.1214238609694' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='1.1391520674076' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.67975586484869' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.68932868910188' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.69247271806181' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.71306866529297' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.74405653760217' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.7482074358055' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.76603754339694' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.78332651023465' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.8097827604795' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.83023325890057' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.87151917462031' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.89250082819214' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.90122205512607' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.91582384886209' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.92634394427004' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.94705254435778' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.96826390363325' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.98997613532524' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='1.016921408762' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='1.0616390691201' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='1.0843197941998' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='1.1027005152299' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='1.1214238609694' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='1.1391520674076' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.21928258336745' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.21981219952843' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.22070080758113' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.22157927271672' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.22246251095964' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.22317089113826' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.22374403208009' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.22420466668418' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.22468252175476' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.22507607195725' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.22571599970557' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.22620224692129' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.22662680640083' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.22702227489242' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.2278989499907' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.22895921072983' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.22931314860151' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.2295526064135' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.23006979168839' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.23066514521972' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.23149018228591' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.23228590323154' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.23289382625056' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.23333314905542' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.21928258336745' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.21981219952843' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.22070080758113' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.22157927271672' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.22246251095964' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.22317089113826' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.22374403208009' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.22420466668418' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.22468252175476' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.22507607195725' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.22571599970557' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.22620224692129' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.22662680640083' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.22702227489242' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.2278989499907' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.22895921072983' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.22931314860151' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.2295526064135' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.23006979168839' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.23066514521972' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.23149018228591' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.23228590323154' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.23289382625056' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.23333314905542' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.37736584060207' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.38433282297823' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.3890561432786' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.39579641292045' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.40584203976582' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.41168621231762' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.41758368544285' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.42398394513493' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.43424691326334' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.44567722106531' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.46374873027946' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.47672436805339' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.48250128063538' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.48880978898681' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.49310097673973' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.50559045009612' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.52079656390147' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.53580884884289' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.55188933836562' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.57541103628958' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.5911933396306' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.60487014627791' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.61755061388366' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.63073006462436' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.37736584060207' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.38433282297823' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.3890561432786' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.39579641292045' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.40584203976582' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.41168621231762' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.41758368544285' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.42398394513493' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.43424691326334' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.44567722106531' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.46374873027946' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.47672436805339' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.48250128063538' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.48880978898681' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.49310097673973' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.50559045009612' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.52079656390147' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.53580884884289' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.55188933836562' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.57541103628958' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.5911933396306' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.60487014627791' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.61755061388366' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.63073006462436' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='4.3251960197752' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='4.2275698931316' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='4.1343609381053' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='4.047116696172' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='3.964299855757' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='3.8851256309127' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='3.8093764297441' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='3.7375318601046' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='3.6693341376389' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='3.6042100509321' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='3.5422442770567' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='3.4831240847877' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='3.4261578588716' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='3.3714821547737' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='3.3252041684749' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='3.2809896811543' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='3.238208722404' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='3.1972820196783' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='3.1577350543195' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='3.1197167243179' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='3.0832144220914' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='3.0477772074935' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='3.0137760148961' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='2.980808090436' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_write_requests' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='4.3251960197752' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='4.2275698931316' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='4.1343609381053' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='4.047116696172' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='3.964299855757' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='3.8851256309127' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='3.8093764297441' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='3.7375318601046' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='3.6693341376389' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='3.6042100509321' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='3.5422442770567' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='3.4831240847877' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='3.4261578588716' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='3.3714821547737' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='3.3252041684749' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='3.2809896811543' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='3.238208722404' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='3.1972820196783' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='3.1577350543195' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='3.1197167243179' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='3.0832144220914' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='3.0477772074935' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='3.0137760148961' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='2.980808090436' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='1' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_free' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='1' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='8192' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_total' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='8192' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='8192' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.35015924048241' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.35379572526564' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.35720734869029' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.36046977392112' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.36350247475747' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.36646046280718' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.36919441827919' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.37189103187324' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.3743667890238' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.37678091677748' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.37910069435925' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.38130823150971' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.38341652372113' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.38548351243758' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.38737862332114' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.38926037960978' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.39107084515891' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.3927695560703' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.39442536021853' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.39600480995558' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.39756229274273' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.39904469273743' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.40047533797544' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.40186642392817' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_disk_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.35015924048241' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.35379572526564' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.35720734869029' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.36046977392112' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.36350247475747' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.36646046280718' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.36919441827919' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.37189103187324' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.3743667890238' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.37678091677748' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.37910069435925' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.38130823150971' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.38341652372113' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.38548351243758' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.38737862332114' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.38926037960978' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.39107084515891' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.3927695560703' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.39442536021853' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.39600480995558' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.39756229274273' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.39904469273743' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.40047533797544' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.40186642392817' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.0017951002928488' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0017731879841994' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.0017524510534315' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.0017327973996575' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0017565687134089' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0017377885649668' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.0017199181849988' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0017028930288777' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0016994891803784' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0016962390546203' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0017912751183846' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.0017861823943155' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.0017695561247268' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.001753618519456' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0017383318209743' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.0017236449610005' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.001709534848452' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0016959644686232' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0016829034343266' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0016805575454899' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0016782965210925' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0016662455336873' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0016546152801753' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0016433841050765' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.0017951002928488' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0017731879841994' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.0017524510534315' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.0017327973996575' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0017565687134089' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0017377885649668' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.0017199181849988' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0017028930288777' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0016994891803784' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0016962390546203' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0017912751183846' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.0017861823943155' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.0017695561247268' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.001753618519456' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0017383318209743' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.0017236449610005' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.001709534848452' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0016959644686232' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0016829034343266' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0016805575454899' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0016782965210925' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0016662455336873' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0016546152801753' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0016433841050765' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='1.6225792738609' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='1.6389288667055' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='1.6540513156718' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='1.6684418260441' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='1.6829340724609' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='1.6960724825551' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='1.7080765400867' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='1.7200317944136' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='1.7313127294196' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='1.7423037358557' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='1.7554714527566' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='1.7654055740932' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='1.7746316704655' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='1.7836999792899' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='1.7919369656253' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='1.8001690346245' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='1.8080843642351' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='1.8155056633445' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='1.8227318222574' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='1.8298810815236' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='1.8369626384227' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='1.8434125589751' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='1.8496566906531' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='1.8557294546009' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='1.6225792738609' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='1.6389288667055' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='1.6540513156718' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='1.6684418260441' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='1.6829340724609' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='1.6960724825551' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='1.7080765400867' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='1.7200317944136' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='1.7313127294196' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='1.7423037358557' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='1.7554714527566' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='1.7654055740932' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='1.7746316704655' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='1.7836999792899' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='1.7919369656253' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='1.8001690346245' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='1.8080843642351' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='1.8155056633445' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='1.8227318222574' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='1.8298810815236' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='1.8369626384227' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='1.8434125589751' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='1.8496566906531' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='1.8557294546009' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.18231435589004' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.1835565728634' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.18412870638019' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.18461290884291' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.18674115450972' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.18719852718096' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.18758664585408' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.1880220984313' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.1889957388916' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.18988150136739' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.19402819147631' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.19462892190988' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.19481065394647' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.19503088110086' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.19516436055392' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.19532353006165' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.1954883766276' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.19563629215632' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.19577865587923' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.19628419673742' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.19674632714995' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.19684657599147' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.19695787186997' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.19705581714547' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_select' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.18231435589004' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.1835565728634' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.18412870638019' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.18461290884291' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.18674115450972' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.18719852718096' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.18758664585408' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.1880220984313' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.1889957388916' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.18988150136739' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.19402819147631' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.19462892190988' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.19481065394647' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.19503088110086' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.19516436055392' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.19532353006165' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.1954883766276' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.19563629215632' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.19577865587923' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.19628419673742' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.19674632714995' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.19684657599147' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.19695787186997' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.19705581714547' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.046974115942942' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.04717692990783' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.047272014780821' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.047456452970369' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.04763150154142' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.04775648840224' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.047868692305622' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.04796902015398' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.048103216366763' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.04824389693153' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.048378364452732' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.048507021629018' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.048618488145311' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.048713832063879' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.049324099488804' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.049904036944561' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.050456203826072' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.050987249505918' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.051503576120274' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.051995763145506' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.052475169322909' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.052942475867106' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.053383769420253' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.053819452122691' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_insert' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.046974115942942' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.04717692990783' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.047272014780821' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.047456452970369' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.04763150154142' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.04775648840224' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.047868692305622' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.04796902015398' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.048103216366763' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.04824389693153' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.048378364452732' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.048507021629018' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.048618488145311' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.048713832063879' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.049324099488804' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.049904036944561' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.050456203826072' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.050987249505918' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.051503576120274' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.051995763145506' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.052475169322909' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.052942475867106' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.053383769420253' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.053819452122691' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.0010078722801272' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0010076553265762' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.00100745001043' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.0010072554197986' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0010070707356393' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0010068952202333' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.0010067282073364' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0010065690937278' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0010064173319301' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0010062724239155' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0010061339156464' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.001006001392323' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.0010058744742346' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0010057528131256' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0010056361207708' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.0010055240073359' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0010054162965531' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0010053127058674' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0010052130033155' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0010051169740262' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0010050244186748' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0010049351521014' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0010048490020754' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0010047658081858' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_delete' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.0010078722801272' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0010076553265762' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.00100745001043' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.0010072554197986' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0010070707356393' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0010068952202333' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.0010067282073364' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0010065690937278' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0010064173319301' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0010062724239155' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0010061339156464' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.001006001392323' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.0010058744742346' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0010057528131256' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0010056361207708' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.0010055240073359' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0010054162965531' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0010053127058674' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0010052130033155' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.0010051169740262' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0010050244186748' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0010049351521014' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0010048490020754' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0010047658081858' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='0.0017872280127216' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0017884986373519' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.0018418511785916' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.0018198624372406' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0018060638628843' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0018412168684668' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.001861210539064' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0019196731218961' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0019305131298611' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0019157738916627' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0019016856000196' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.0018822046714838' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.001887045609418' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0019146972869733' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0018961432025565' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.001889365181077' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0018936889312564' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0018978472915825' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0018914235669454' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.001895470454592' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0018893221054324' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0018735219219456' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0018776693756425' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0018626112816211' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_update' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='0.0017872280127216' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='0.0017884986373519' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='0.0018418511785916' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='0.0018198624372406' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='0.0018060638628843' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='0.0018412168684668' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='0.001861210539064' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='0.0019196731218961' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='0.0019305131298611' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='0.0019157738916627' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='0.0019016856000196' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='0.0018822046714838' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='0.001887045609418' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='0.0019146972869733' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='0.0018961432025565' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='0.001889365181077' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='0.0018936889312564' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='0.0018978472915825' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='0.0018914235669454' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='0.001895470454592' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='0.0018893221054324' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='0.0018735219219456' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='0.0018776693756425' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='0.0018626112816211' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='899.49945681267' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='888.56508558655' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='876.22691241768' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='865.92530545317' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='856.6982775688' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='846.78862702375' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='837.25637161235' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='828.08763171033' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='820.10718869523' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='812.66907318664' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='806.99313001448' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='800.10402813453' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='793.20322743614' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='786.42011068412' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='780.68446741477' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='775.09110192898' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='769.64255150898' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='764.40002018828' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='759.43314844548' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='754.67530241316' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='750.18699881424' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='745.80814596206' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='741.44110402079' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='737.36270183198' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_received' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='899.49945681267' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='888.56508558655' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='876.22691241768' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='865.92530545317' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='856.6982775688' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='846.78862702375' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='837.25637161235' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='828.08763171033' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='820.10718869523' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='812.66907318664' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='806.99313001448' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='800.10402813453' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='793.20322743614' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='786.42011068412' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='780.68446741477' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='775.09110192898' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='769.64255150898' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='764.40002018828' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='759.43314844548' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='754.67530241316' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='750.18699881424' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='745.80814596206' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='741.44110402079' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='737.36270183198' color='ff6600' showName='0'/>
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
<set name='09-17 00:00' value='977.97690273011' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='966.34389258046' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='953.12688857764' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='940.60701018661' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='933.36667420878' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='922.05505143834' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='911.10654789138' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='900.8594476706' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='892.86559540006' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='885.19244423815' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='922.5819736487' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='913.84661041362' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='904.83506238692' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='896.1249108314' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='888.38424816967' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='881.09075391652' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='874.01639512967' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='867.21206728011' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='861.28472381508' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='858.42726733119' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='855.27365496312' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='849.13133920287' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='843.20512248579' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='837.48281449568' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_sent' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
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
<set name='09-17 00:00' value='977.97690273011' color='ff6600' showName='0'/>
<set name='09-17 01:00' value='966.34389258046' color='ff6600' showName='0'/>
<set name='09-17 02:00' value='953.12688857764' color='ff6600' showName='0'/>
<set name='09-17 03:00' value='940.60701018661' color='ff6600' showName='0'/>
<set name='09-17 04:00' value='933.36667420878' color='ff6600' showName='0'/>
<set name='09-17 05:00' value='922.05505143834' color='ff6600' showName='0'/>
<set name='09-17 06:00' value='911.10654789138' color='ff6600' showName='0'/>
<set name='09-17 07:00' value='900.8594476706' color='ff6600' showName='0'/>
<set name='09-17 08:00' value='892.86559540006' color='ff6600' showName='0'/>
<set name='09-17 09:00' value='885.19244423815' color='ff6600' showName='0'/>
<set name='09-17 10:00' value='922.5819736487' color='ff6600' showName='0'/>
<set name='09-17 11:00' value='913.84661041362' color='ff6600' showName='0'/>
<set name='09-17 12:00' value='904.83506238692' color='ff6600' showName='0'/>
<set name='09-17 13:00' value='896.1249108314' color='ff6600' showName='0'/>
<set name='09-17 14:00' value='888.38424816967' color='ff6600' showName='0'/>
<set name='09-17 15:00' value='881.09075391652' color='ff6600' showName='0'/>
<set name='09-17 16:00' value='874.01639512967' color='ff6600' showName='0'/>
<set name='09-17 17:00' value='867.21206728011' color='ff6600' showName='0'/>
<set name='09-17 18:00' value='861.28472381508' color='ff6600' showName='0'/>
<set name='09-17 19:00' value='858.42726733119' color='ff6600' showName='0'/>
<set name='09-17 20:00' value='855.27365496312' color='ff6600' showName='0'/>
<set name='09-17 21:00' value='849.13133920287' color='ff6600' showName='0'/>
<set name='09-17 22:00' value='843.20512248579' color='ff6600' showName='0'/>
<set name='09-17 23:00' value='837.48281449568' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr></tr></div></table></body></html>