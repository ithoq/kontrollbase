<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">                  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kontrollbase 2.0.1 - MySQL Monitoring</title>

<link rel="stylesheet" type="text/css" media="all" href="http://demo01.kontrollbase.com/userguide/css/userguide-nofluff.css" />

<script type="text/javascript" src="http://demo01.kontrollbase.com/includes/browser_detect.js"></script>
<script language="JavaScript" SRC="http://demo01.kontrollbase.com/includes/CalendarPopup.js"></script>
<script language="JavaScript">
 var cal = new CalendarPopup();</script>
<script language="JavaScript" ID="jscal1x">
 var cal1x = new CalendarPopup("graphform");</script>
<script language="JavaScript">document.write(getCalendarStyles());</script>

</head>
<body><table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder"><tr><td colspan='3'><div id='content'><h1>Date range: start 2009-08-19 -> end 2009-08-26</h1></td></tr><tr><td colspan="3">

<div id="content"><table cellpadding="0" cellspacing="1" border="0" class="tableborder"><form action="http://demo01.kontrollbase.com/index.php/main/graphs" method="post" name="graphform"><input type="hidden" name="server_list_id" value="13" /><tr><th>Start date</th><th>End Date</th><th>&nbsp;</th></tr><tr><td class='td'><input type="text" name="sday" value="2009-08-19" id="sday" maxlength="10" size="15" style="width:50%"  />
<a href="#"onClick="cal.select(document.forms['graphform'].sday,'anchor1','yyyy-MM-dd'); return false;" NAME="anchor1" ID="anchor1"><img src='http://demo01.kontrollbase.com/includes/images/icon_calendar.gif' height='20' width='20' border='0'></a></td><td class='td'><input type="text" name="eday" value="2009-08-26" id="eday" maxlength="10" size="15" style="width:50%"  /> 
<a href="#"onClick="cal.select(document.forms['graphform'].eday,'anchor1','yyyy-MM-dd'); return false;" NAME="anchor1" ID="anchor1"><img src='http://demo01.kontrollbase.com/includes/images/icon_calendar.gif' height='20' width='20' border='0'></a></td><td><input type="submit" name="submit" value="Submit"  /></td></tr></table></td></tr><table><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Query Rate' xAxisName='' yAxisName='Q/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.110096' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.151348' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.174776' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.323983' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.398683' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.43683' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.434295' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.491553' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.466764' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.447265' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.431557' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.418632' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.407806' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.398593' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.390684' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.383166' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.377161' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.372843' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.370799' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.366096' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.362131' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.358512' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.355234' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.354265' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.363244' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.374325' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.371008' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.367863' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.37456' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.372506' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.379654' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.384926' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.39055' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.38874' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.387223' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.385197' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.387301' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Query Rate' xAxisName='' yAxisName='Q/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.110096' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.151348' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.174776' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.323983' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.398683' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.43683' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.434295' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.491553' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.466764' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.447265' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.431557' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.418632' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.407806' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.398593' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.390684' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.383166' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.377161' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.372843' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.370799' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.366096' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.362131' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.358512' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.355234' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.354265' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.363244' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.374325' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.371008' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.367863' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.37456' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.372506' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.379654' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.384926' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.39055' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.38874' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.387223' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.385197' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.387301' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Connections' xAxisName='' yAxisName='connections' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='10' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='7' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='9' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='12' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='12' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='13' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='14' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='18' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='18' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='18' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='18' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='18' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='18' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='18' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='18' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='3' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='5' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='18' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='9' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='9' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='10' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='10' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='13' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='14' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='18' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='18' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='18' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='18' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='18' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Connections' xAxisName='' yAxisName='connections' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='10' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='7' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='9' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='12' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='12' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='13' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='14' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='18' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='18' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='18' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='18' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='18' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='18' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='18' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='18' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='3' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='5' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='18' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='9' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='9' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='10' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='10' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='13' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='14' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='18' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='18' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='18' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='18' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='18' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 1 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.081' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.211' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.101' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.161' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.091' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.081' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 1 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.081' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.211' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.101' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.161' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.091' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.081' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 5 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.021' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.061' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.021' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 5 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.021' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.061' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.021' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 15 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.051' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.051' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.011' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 15 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.051' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.051' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.011' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Total' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='134225920' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Total' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='134225920' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Used' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='27688960' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='35864576' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='28315648' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='2248704' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='2269184' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='2433024' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='32026624' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='24961024' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='24915968' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='16728064' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='10518528' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='643072' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Used' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='27688960' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='35864576' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='28315648' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='2248704' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='2269184' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='2433024' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='32026624' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='24961024' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='24915968' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='16728064' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='10518528' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='643072' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Total' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='2937774080' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Total' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='2937774080' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Free' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2937643008' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2917351424' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2912399360' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2916134912' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2915799040' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='2920677376' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='2920513536' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='2921758720' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='2921238528' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='2921172992' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2921390080' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='2917289984' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='2917109760' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2917261312' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2917232640' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2917289984' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2915495936' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='2913988608' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2901176320' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='2932690944' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='2924023808' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='2923466752' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='2928148480' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='2927554560' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='2926907392' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Free' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2937643008' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2917351424' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2912399360' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2916134912' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2915799040' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='2920677376' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='2920513536' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='2921758720' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='2921238528' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='2921172992' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2921390080' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='2917289984' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='2917109760' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2917261312' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2917232640' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2917289984' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2915495936' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='2913988608' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2901176320' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='2932690944' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='2924023808' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='2923466752' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='2928148480' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='2927554560' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='2926907392' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU User' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU User' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU System' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU System' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU Idle' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='99' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='99' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='100' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='100' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='100' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='99' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU Idle' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='99' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='99' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='100' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='100' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='100' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='99' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Schemas' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='4' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='4' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='4' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Schemas' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='4' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='4' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='4' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='4' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='4' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Tables' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='49' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='49' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='49' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Tables' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='49' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='49' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='49' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='49' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='49' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Data Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='643044' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='675812' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='757732' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='954412' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='1151020' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='2216088' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2216088' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2281624' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='3362968' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='3412120' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='3444888' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='3477656' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='4559000' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='4608152' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='4640920' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='4673688' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='5755032' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='5787800' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='5836952' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='5869720' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='7983256' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='7983256' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='7983256' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='7983256' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='9031832' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='9031832' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='9031832' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='9031832' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='10080408' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='10080408' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='10080408' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='11128984' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='11128984' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='11128984' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='11128984' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='12177560' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='12177560' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Data Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='643044' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='675812' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='757732' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='954412' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='1151020' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='2216088' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2216088' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2281624' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='3362968' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='3412120' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='3444888' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='3477656' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='4559000' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='4608152' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='4640920' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='4673688' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='5755032' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='5787800' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='5836952' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='5869720' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='7983256' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='7983256' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='7983256' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='7983256' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='9031832' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='9031832' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='9031832' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='9031832' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='10080408' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='10080408' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='10080408' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='11128984' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='11128984' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='11128984' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='11128984' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='12177560' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='12177560' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Index Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='202752' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='202752' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='235520' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Index Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='202752' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='202752' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='202752' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='235520' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='11' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='11' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='11' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='11' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='11' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='11' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='11' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='11' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='25' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='25' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='25' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='25' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='25' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='25' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='25' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='25' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='180224' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='212992' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='294912' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='491520' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='688128' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='1753088' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='1753088' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='1818624' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2899968' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2949120' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2981888' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='3014656' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='4096000' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='4145152' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='4177920' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='4210688' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='5292032' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='5324800' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='5373952' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='5406720' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='7520256' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='7520256' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='7520256' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='7520256' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='8568832' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='8568832' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='8568832' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='8568832' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='9617408' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='9617408' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='9617408' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='10665984' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='10665984' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='10665984' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='10665984' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='11714560' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='11714560' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='180224' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='212992' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='294912' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='491520' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='688128' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='1753088' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='1753088' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='1818624' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2899968' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2949120' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2981888' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='3014656' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='4096000' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='4145152' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='4177920' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='4210688' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='5292032' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='5324800' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='5373952' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='5406720' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='7520256' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='7520256' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='7520256' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='7520256' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='8568832' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='8568832' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='8568832' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='8568832' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='9617408' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='9617408' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='9617408' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='10665984' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='10665984' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='10665984' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='10665984' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='11714560' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='11714560' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='114688' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='114688' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='147456' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='114688' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='114688' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='114688' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='147456' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='462820' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='462820' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='462820' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='462892' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='462892' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='463000' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='463000' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='463000' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='463000' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='463000' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='463000' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='463000' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='463000' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='462820' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='462820' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='462820' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='462892' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='462892' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='463000' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='463000' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='463000' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='463000' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='463000' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='463000' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='463000' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='463000' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='463000' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='88064' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='88064' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='88064' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='88064' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='88064' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='88064' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='88064' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='88064' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_free_memory' xAxisName='' yAxisName='free' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='4176176' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='4150248' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='4150248' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='4147872' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='4141008' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='4153064' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='4143424' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='4012696' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='4104376' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='4104376' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='4103248' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='4104376' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='4103352' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='4045528' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='4072856' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='4100296' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='4100296' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='4097816' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='4120040' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='4177328' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='4181408' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_free_memory' xAxisName='' yAxisName='free' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='4176176' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='4150248' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='4150248' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='4147872' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='4141008' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='4153064' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='4143424' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='4012696' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='4104376' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='4104376' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='4103248' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='4104376' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='4103352' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='4045528' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='4072856' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='4100296' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='4100296' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='4097816' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='4120040' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='4177328' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='4181408' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_hits' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0019066183136899' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.015664494149015' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.016390208434319' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.044536955788053' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.063127879886099' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.059789564852239' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.052342044852552' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.054634008837422' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.050075438831569' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.046499387163314' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.043561805030768' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.041144638772046' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.039167766428636' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.03748674064322' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.036042369587188' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.034786238465451' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.033683750191806' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.032709824583949' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.031143351758489' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.029724461146387' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.029089964545318' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.028540051140218' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.028027363804017' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.027606401755474' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.028294973242464' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.030576505732988' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.030053797067151' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.029538859259862' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.029903833881498' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.029448962561165' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.029335106187874' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.030080708731314' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.031330660977876' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.030502069149646' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.029748015422998' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.029027894090609' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.028393380889692' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_hits' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0019066183136899' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.015664494149015' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.016390208434319' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.044536955788053' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.063127879886099' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.059789564852239' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.052342044852552' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.054634008837422' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.050075438831569' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.046499387163314' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.043561805030768' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.041144638772046' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.039167766428636' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.03748674064322' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.036042369587188' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.034786238465451' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.033683750191806' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.032709824583949' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.031143351758489' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.029724461146387' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.029089964545318' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.028540051140218' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.028027363804017' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.027606401755474' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.028294973242464' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.030576505732988' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.030053797067151' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.029538859259862' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.029903833881498' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.029448962561165' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.029335106187874' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.030080708731314' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.031330660977876' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.030502069149646' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.029748015422998' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.029027894090609' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.028393380889692' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_inserts' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.010972801450589' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.020848911272404' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.019177411536597' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.029096523793453' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.03238752265079' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.038058422130072' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.03878915769027' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.051700898979125' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.045787618920005' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.04114827658366' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.037462269243226' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.034429267212752' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.031846063454759' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.029650241364178' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.027762808054109' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.026121703117053' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.024681653112373' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.023408918588961' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.022973516370042' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.02259733920781' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.021615734213084' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.020699420758754' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.019878034192294' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.019938129084578' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.022040113433655' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.023371831480912' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.022584329966615' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.021885071041811' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.023502577193069' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.022801388309373' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.02478681729817' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.025322692894933' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.025687747307573' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.025587838739821' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.025479149791012' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.025186947076787' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.026189051832349' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_inserts' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.010972801450589' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.020848911272404' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.019177411536597' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.029096523793453' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.03238752265079' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.038058422130072' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.03878915769027' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.051700898979125' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.045787618920005' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.04114827658366' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.037462269243226' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.034429267212752' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.031846063454759' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.029650241364178' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.027762808054109' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.026121703117053' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.024681653112373' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.023408918588961' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.022973516370042' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.02259733920781' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.021615734213084' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.020699420758754' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.019878034192294' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.019938129084578' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.022040113433655' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.023371831480912' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.022584329966615' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.021885071041811' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.023502577193069' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.022801388309373' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.02478681729817' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.025322692894933' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.025687747307573' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.025587838739821' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.025479149791012' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.025186947076787' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.026189051832349' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_queries_in_cache' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0025110305228166' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0044069026810843' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0037872031022782' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0029406007424907' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0027473466217965' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0019973229751719' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0021036553063747' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0039712021941185' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0028759212113091' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0026740904606738' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0025113893986829' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0023775121147271' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0022654795263491' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0021702505590036' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0020883930653813' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0020172200828308' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0019547678720611' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001016063740924' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151855676365' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0016623184023728' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0016296970609574' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0016131607785837' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0015731944375218' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0015605113771884' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0017203951882175' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0015601194921583' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0015176858386511' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0014987175833571' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0014908939178244' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094829875204' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091699372776' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0011153996378227' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010344080101848' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083433453478' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081003142922' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078707930611' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001007653920338' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_queries_in_cache' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0025110305228166' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0044069026810843' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0037872031022782' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0029406007424907' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0027473466217965' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0019973229751719' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0021036553063747' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0039712021941185' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0028759212113091' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0026740904606738' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0025113893986829' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0023775121147271' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0022654795263491' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0021702505590036' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0020883930653813' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0020172200828308' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0019547678720611' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001016063740924' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151855676365' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0016623184023728' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0016296970609574' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0016131607785837' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0015731944375218' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0015605113771884' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0017203951882175' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0015601194921583' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0015176858386511' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0014987175833571' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0014908939178244' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094829875204' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091699372776' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0011153996378227' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010344080101848' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083433453478' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081003142922' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078707930611' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001007653920338' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_lowmem_prunes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0013022061045633' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0011481262035254' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011211827435773' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0010843739453257' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001064716541548' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524906829038' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001044146212255' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001038092335822' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010334985930591' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001029894472512' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010269890964051' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010245984306201' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225978486848' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010208973314108' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194355904532' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181646443363' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170494262868' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001016063740924' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151855676365' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010143982261385' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136890665426' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130459740124' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010124607486418' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119257739827' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114348442574' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109827351404' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105650171153' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101779098644' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098178783565' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094829875204' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091699372776' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088768952171' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086020025462' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083433453478' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081003142922' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078707930611' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001007653920338' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_lowmem_prunes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0013022061045633' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0011481262035254' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011211827435773' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0010843739453257' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001064716541548' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524906829038' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001044146212255' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001038092335822' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010334985930591' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001029894472512' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010269890964051' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010245984306201' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225978486848' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010208973314108' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194355904532' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181646443363' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170494262868' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001016063740924' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151855676365' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010143982261385' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136890665426' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130459740124' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010124607486418' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119257739827' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114348442574' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109827351404' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105650171153' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101779098644' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098178783565' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094829875204' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091699372776' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088768952171' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086020025462' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083433453478' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081003142922' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078707930611' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001007653920338' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_not_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0088573587186461' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.010183824618575' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.029599127484246' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.056855551805602' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.071346880662697' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.087347173376726' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.096444110895285' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.099887703793997' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.10162977354951' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.10299994021105' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.1040983482673' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.10500216466189' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.10576362650276' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.10640613963597' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.10696283915105' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.10744481581051' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.1078658039657' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.10830578937223' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.11073091174148' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.11091605834161' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.11108747313521' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.11123848040495' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.11137731146887' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.11150422172399' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.11162068334629' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.1117279356851' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.11182702953979' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.11191886170256' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.11200093269844' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.11266217805257' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.11327671202729' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.11385196889536' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.11439159756391' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.11489500734214' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.11537643780579' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.11582699996852' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.11625273244956' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_not_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0088573587186461' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.010183824618575' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.029599127484246' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.056855551805602' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.071346880662697' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.087347173376726' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.096444110895285' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.099887703793997' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.10162977354951' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.10299994021105' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.1040983482673' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.10500216466189' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.10576362650276' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.10640613963597' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.10696283915105' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.10744481581051' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.1078658039657' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.10830578937223' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.11073091174148' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.11091605834161' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.11108747313521' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.11123848040495' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.11137731146887' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.11150422172399' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.11162068334629' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.1117279356851' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.11182702953979' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.11191886170256' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.11200093269844' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.11266217805257' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.11327671202729' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.11385196889536' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.11439159756391' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.11489500734214' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.11537643780579' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.11582699996852' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.11625273244956' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0085551526140828' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0047031550881351' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0040295685894329' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0031093486331421' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0026179135387005' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0023122670725946' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0021036553063747' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0019523083955508' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0018374648264773' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0017473618128008' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0016747274101263' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0016149607655032' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0015649462171201' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0015224332852695' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0014858897613309' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0014541161084066' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0014262356571701' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0014015935230997' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001379639190913' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0013599556534635' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0013422266635638' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0013261493503105' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0013115187160445' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0012981443495683' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0012858711064355' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001274568378509' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0012641254278832' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0012544477466108' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0012454469589122' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0012370746880097' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0012292484319407' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0012219223804282' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0012150500636548' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0012085836336938' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0012025078573049' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0011967698265277' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0011913480084499' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0085551526140828' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0047031550881351' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0040295685894329' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0031093486331421' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0026179135387005' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0023122670725946' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0021036553063747' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0019523083955508' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0018374648264773' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0017473618128008' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0016747274101263' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0016149607655032' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0015649462171201' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0015224332852695' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0014858897613309' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0014541161084066' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0014262356571701' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0014015935230997' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001379639190913' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0013599556534635' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0013422266635638' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0013261493503105' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0013115187160445' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0012981443495683' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0012858711064355' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001274568378509' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0012641254278832' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0012544477466108' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0012454469589122' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0012370746880097' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0012292484319407' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0012219223804282' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0012150500636548' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0012085836336938' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0012025078573049' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0011967698265277' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0011913480084499' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.012483831973406' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0066287957339653' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.005604944255938' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.004206209922376' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0034592285788247' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0029946459503438' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0026775560656896' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0024475087612372' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0022729465362455' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0021359899554572' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.002025585663392' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0019347403635648' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0018587182500226' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0017940985936096' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.001738552437223' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001690256484778' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0016478781988986' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0016104221551115' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0015770515701877' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0015471325932645' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001520184528617' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001495747012472' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0014735084483876' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0014531794113438' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001434524081782' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0014173439353337' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0014014706503825' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0013867605748483' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0013730793775465' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0013603535257748' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0013484576165499' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0013373220182509' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0013268760967553' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0013170471232145' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0013078119431034' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0012990901363221' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0012908489728439' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.012483831973406' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0066287957339653' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.005604944255938' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.004206209922376' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0034592285788247' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0029946459503438' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0026775560656896' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0024475087612372' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0022729465362455' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0021359899554572' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.002025585663392' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0019347403635648' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0018587182500226' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0017940985936096' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.001738552437223' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001690256484778' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0016478781988986' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0016104221551115' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0015770515701877' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0015471325932645' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001520184528617' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001495747012472' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0014735084483876' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0014531794113438' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001434524081782' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0014173439353337' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0014014706503825' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0013867605748483' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0013730793775465' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0013603535257748' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0013484576165499' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0013373220182509' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0013268760967553' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0013170471232145' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0013078119431034' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0012990901363221' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0012908489728439' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Slow_queries' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0013022061045633' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0011481262035254' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011211827435773' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0010843739453257' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001064716541548' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524906829038' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001044146212255' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001038092335822' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010334985930591' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001029894472512' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010269890964051' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010245984306201' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225978486848' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010208973314108' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194355904532' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181646443363' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170494262868' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001016063740924' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151855676365' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010143982261385' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136890665426' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130459740124' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010124607486418' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119257739827' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114348442574' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109827351404' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105650171153' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101779098644' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098178783565' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094829875204' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091699372776' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088768952171' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086020025462' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083433453478' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081003142922' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078707930611' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001007653920338' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Slow_queries' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0013022061045633' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0011481262035254' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011211827435773' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0010843739453257' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001064716541548' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524906829038' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001044146212255' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001038092335822' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010334985930591' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001029894472512' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010269890964051' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010245984306201' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225978486848' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010208973314108' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194355904532' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181646443363' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170494262868' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001016063740924' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151855676365' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010143982261385' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136890665426' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130459740124' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010124607486418' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119257739827' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114348442574' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109827351404' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105650171153' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101779098644' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098178783565' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094829875204' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091699372776' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088768952171' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086020025462' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083433453478' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081003142922' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078707930611' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001007653920338' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Uptime' xAxisName='' yAxisName='days' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.038298611111111' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.078136574074074' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.095509259259259' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.13717592592593' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.17884259259259' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.22049768518519' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.26217592592593' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.30384259259259' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.34550925925926' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.38716435185185' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.42884259259259' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.47052083333333' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.51217592592593' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.55385416666667' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.59550925925926' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.63717592592593' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.67885416666667' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.72050925925926' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.76217592592593' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.80385416666667' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.84549768518519' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.88717592592593' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.92884259259259' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.97050925925926' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1.0121759259259' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1.0538425925926' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1.0955092592593' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1.1371759259259' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='1.1788773148148' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1.2205092592593' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1.2621759259259' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1.3038425925926' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1.3455092592593' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1.3872222222222' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1.4288425925926' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1.4705092592593' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1.5121759259259' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Uptime' xAxisName='' yAxisName='days' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.038298611111111' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.078136574074074' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.095509259259259' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.13717592592593' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.17884259259259' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.22049768518519' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.26217592592593' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.30384259259259' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.34550925925926' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.38716435185185' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.42884259259259' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.47052083333333' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.51217592592593' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.55385416666667' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.59550925925926' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.63717592592593' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.67885416666667' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.72050925925926' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.76217592592593' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.80385416666667' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.84549768518519' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.88717592592593' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.92884259259259' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.97050925925926' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1.0121759259259' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1.0538425925926' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1.0955092592593' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1.1371759259259' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='1.1788773148148' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1.2205092592593' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1.2621759259259' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1.3038425925926' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1.3455092592593' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1.3872222222222' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1.4288425925926' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1.4705092592593' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1.5121759259259' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_immediate' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.032127228770021' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.035957784031995' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.039172564226854' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.058627404657442' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.066622573129692' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.08241304918377' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.086158043439873' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.10285890598812' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.097911429719952' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.094031598457445' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.091035625607255' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.08857041300765' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.086397270179879' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.084547530980294' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.082959884941305' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.081451209765313' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.080245733381072' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.080515517573733' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.080830529065176' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.080507004737016' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.079588931020794' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.07868877524396' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.077907740617056' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.078267089634117' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.080689429629968' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.08230518824408' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.081526560453028' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.080876236616049' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.082743655196112' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.082231271099647' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.084583978285589' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.085383765934027' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.086082407184393' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.086202242691229' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.08626390823964' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.086075402197525' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.087267336129566' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_immediate' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.032127228770021' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.035957784031995' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.039172564226854' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.058627404657442' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.066622573129692' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.08241304918377' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.086158043439873' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.10285890598812' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.097911429719952' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.094031598457445' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.091035625607255' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.08857041300765' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.086397270179879' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.084547530980294' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.082959884941305' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.081451209765313' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.080245733381072' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.080515517573733' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.080830529065176' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.080507004737016' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.079588931020794' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.07868877524396' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.077907740617056' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.078267089634117' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.080689429629968' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.08230518824408' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.081526560453028' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.080876236616049' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.082743655196112' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.082231271099647' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.084583978285589' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.085383765934027' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.086082407184393' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.086202242691229' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.08626390823964' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.086075402197525' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.087267336129566' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_waited' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0013022061045633' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0011481262035254' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011211827435773' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0010843739453257' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001064716541548' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524906829038' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001044146212255' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001038092335822' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010334985930591' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001029894472512' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010269890964051' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010245984306201' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225978486848' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010208973314108' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194355904532' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181646443363' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170494262868' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001016063740924' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151855676365' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010143982261385' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136890665426' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130459740124' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010124607486418' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119257739827' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114348442574' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109827351404' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105650171153' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101779098644' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098178783565' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094829875204' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091699372776' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088768952171' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086020025462' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083433453478' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081003142922' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078707930611' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001007653920338' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_waited' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0013022061045633' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0011481262035254' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011211827435773' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0010843739453257' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001064716541548' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524906829038' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001044146212255' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001038092335822' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010334985930591' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001029894472512' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010269890964051' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010245984306201' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225978486848' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010208973314108' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194355904532' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181646443363' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170494262868' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001016063740924' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151855676365' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010143982261385' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136890665426' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130459740124' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010124607486418' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119257739827' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114348442574' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109827351404' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105650171153' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101779098644' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098178783565' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094829875204' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091699372776' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088768952171' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086020025462' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083433453478' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081003142922' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078707930611' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001007653920338' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0013022061045633' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0015925048141016' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0012423654871546' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0010843739453257' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001064716541548' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524906829038' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001044146212255' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001038092335822' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010334985930591' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010597889450241' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010539781928101' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010491968612403' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010451956973696' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010417946628216' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010583067713597' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0013269635980528' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0013239390994493' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0013052110775557' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0012885257850938' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0012735662966323' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0012600922643085' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001247873506236' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0012367542241938' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0011908123837237' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010343045327723' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0011647410271054' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0011267802053839' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0011221349183732' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0011079966619214' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0011043128627243' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001073359498221' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010621382665199' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010258060076386' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010250300360433' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010243009428766' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010236123791833' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001022961761014' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0013022061045633' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0015925048141016' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0012423654871546' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0010843739453257' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001064716541548' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524906829038' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001044146212255' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001038092335822' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010334985930591' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010597889450241' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010539781928101' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010491968612403' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010451956973696' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010417946628216' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010583067713597' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0013269635980528' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0013239390994493' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0013052110775557' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0012885257850938' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0012735662966323' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0012600922643085' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001247873506236' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0012367542241938' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0011908123837237' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010343045327723' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0011647410271054' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0011267802053839' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0011221349183732' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0011079966619214' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0011043128627243' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001073359498221' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010621382665199' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010258060076386' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010250300360433' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010243009428766' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010236123791833' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001022961761014' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_created' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0040220610456331' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0026293882387794' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0023330101793505' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0020968612892339' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0018413150401243' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.001734869560653' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0016621931838248' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0016856620447966' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0016364732681227' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0015978894502407' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001539781928101' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0014919686124025' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0014519569736961' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0014179466282156' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.001408147399518' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0013814575310615' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0013580379520229' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0013373385594037' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0013188969203669' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0013023627489093' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0012874703973936' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0012739654542608' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0012616757214773' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0012504412536374' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0012401317294058' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0012306374379475' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0012218653594219' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001213736107153' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0012061754454862' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0011991427379282' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0011925686828302' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0011864147995597' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.00118064205347' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0011752102523028' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0011701066001361' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0011652866542833' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0011607323270979' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_created' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0040220610456331' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0026293882387794' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0023330101793505' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0020968612892339' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0018413150401243' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.001734869560653' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0016621931838248' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0016856620447966' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0016364732681227' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0015978894502407' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001539781928101' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0014919686124025' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0014519569736961' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0014179466282156' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.001408147399518' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0013814575310615' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0013580379520229' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0013373385594037' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0013188969203669' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0013023627489093' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0012874703973936' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0012739654542608' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0012616757214773' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0012504412536374' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0012401317294058' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0012306374379475' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0012218653594219' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001213736107153' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0012061754454862' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0011991427379282' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0011925686828302' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0011864147995597' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.00118064205347' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0011752102523028' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0011701066001361' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0011652866542833' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0011607323270979' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Seconds_Behind_Master' xAxisName='' yAxisName='seconds' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Seconds_Behind_Master' xAxisName='' yAxisName='seconds' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0061375037775763' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0039625240705081' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0046354823073194' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0075811677354033' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0080541030287341' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.01653724213952' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.015700688680911' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.014827517903398' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.013963955513868' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.013286628202445' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.012740256936198' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.012290679654638' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.011914760914761' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.011594947025265' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.011320298530669' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.011081377606626' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.01087161782006' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.010895264409176' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.010946546801919' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.010790793774207' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.010637102845957' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.010497469081042' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.010370482978617' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.010278252158565' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.010239354159996' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.010214514782761' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.010117609770528' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.01002780604975' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0099539050611163' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0098760763190836' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0098581594101896' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0098058800553918' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0098256546123938' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0097771993058337' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0097645400641545' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0097129679186475' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0097101613446407' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0061375037775763' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0039625240705081' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0046354823073194' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0075811677354033' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0080541030287341' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.01653724213952' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.015700688680911' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.014827517903398' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.013963955513868' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.013286628202445' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.012740256936198' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.012290679654638' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.011914760914761' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.011594947025265' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.011320298530669' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.011081377606626' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.01087161782006' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.010895264409176' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.010946546801919' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.010790793774207' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.010637102845957' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.010497469081042' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.010370482978617' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.010278252158565' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.010239354159996' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.010214514782761' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.010117609770528' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.01002780604975' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0099539050611163' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0098760763190836' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0098581594101896' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0098058800553918' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0098256546123938' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0097771993058337' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0097645400641545' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0097129679186475' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0097101613446407' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0073463281958296' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0041106502740335' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0035448376151236' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0036155923050962' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0030062127879886' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0039394782426119' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0034721878862794' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0031331708060338' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0028759212113091' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0026740904606738' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0025113893986829' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0023775121147271' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0022654795263491' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0021702505590036' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0020883930653813' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0020172200828308' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0019547678720611' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0018995694917432' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001850391787645' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0018063006637582' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0017665877263829' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0017305745446955' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0016978019239396' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.001667843343033' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0016403512784156' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0016150331678601' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0015916409584584' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0015699629524081' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0015498011879633' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0015310473011418' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0015135164875472' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0014971061321592' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0014817121425868' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.001467227339474' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0014536176003629' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0014407644114221' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0014286195389278' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0073463281958296' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0041106502740335' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0035448376151236' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0036155923050962' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0030062127879886' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0039394782426119' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0034721878862794' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0031331708060338' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0028759212113091' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0026740904606738' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0025113893986829' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0023775121147271' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0022654795263491' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0021702505590036' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0020883930653813' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0020172200828308' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0019547678720611' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0018995694917432' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001850391787645' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0018063006637582' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0017665877263829' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0017305745446955' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0016978019239396' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.001667843343033' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0016403512784156' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0016150331678601' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0015916409584584' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0015699629524081' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0015498011879633' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0015310473011418' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0015135164875472' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0014971061321592' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0014817121425868' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.001467227339474' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0014536176003629' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0014407644114221' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0014286195389278' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0013022061045633' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0011481262035254' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011211827435773' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0010843739453257' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001064716541548' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524906829038' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001044146212255' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001038092335822' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010334985930591' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001029894472512' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010269890964051' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010245984306201' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225978486848' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010208973314108' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194355904532' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181646443363' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170494262868' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001016063740924' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151855676365' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010143982261385' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136890665426' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130459740124' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010124607486418' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119257739827' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114348442574' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109827351404' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105650171153' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101779098644' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098178783565' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094829875204' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091699372776' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088768952171' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086020025462' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083433453478' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081003142922' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078707930611' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001007653920338' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0013022061045633' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0011481262035254' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011211827435773' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0010843739453257' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001064716541548' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524906829038' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001044146212255' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001038092335822' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010334985930591' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001029894472512' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010269890964051' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010245984306201' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225978486848' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010208973314108' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194355904532' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181646443363' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170494262868' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001016063740924' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151855676365' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010143982261385' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136890665426' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130459740124' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010124607486418' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119257739827' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114348442574' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109827351404' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105650171153' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101779098644' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098178783565' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094829875204' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091699372776' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088768952171' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086020025462' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083433453478' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081003142922' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078707930611' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001007653920338' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.10133242671502' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.053584802251518' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.050684924866699' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.049430644616942' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.04772534299767' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.055957745000262' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.055962034257461' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.056919548986744' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.056976149001742' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.057052135960061' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.057083342329699' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.057281209258849' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.057133056133056' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.057318308152049' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.057343776723937' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.057074257066047' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.057024414778443' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.06011456660027' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.060026301403146' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.060277497012368' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.06036948159505' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.060215676042373' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.060338085032149' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.060438057529934' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.060609843113937' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.060757061898695' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.06062895659891' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.060561128526646' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.060692700407442' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.060524712665478' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.060384513809926' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.060368675212158' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.060835529711317' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.060921906287545' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.060982827333701' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.060959701539527' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.060884272724489' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.10133242671502' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.053584802251518' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.050684924866699' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.049430644616942' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.04772534299767' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.055957745000262' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.055962034257461' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.056919548986744' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.056976149001742' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.057052135960061' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.057083342329699' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.057281209258849' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.057133056133056' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.057318308152049' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.057343776723937' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.057074257066047' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.057024414778443' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.06011456660027' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.060026301403146' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.060277497012368' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.06036948159505' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.060215676042373' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.060338085032149' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.060438057529934' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.060609843113937' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.060757061898695' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.06062895659891' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.060561128526646' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.060692700407442' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.060524712665478' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.060384513809926' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.060368675212158' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.060835529711317' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.060921906287545' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.060982827333701' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.060959701539527' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.060884272724489' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0013022061045633' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0011481262035254' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011211827435773' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0010843739453257' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001064716541548' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524906829038' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001044146212255' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001038092335822' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010334985930591' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001029894472512' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010269890964051' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010245984306201' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225978486848' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010208973314108' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194355904532' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181646443363' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170494262868' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001016063740924' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151855676365' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010143982261385' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136890665426' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130459740124' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010124607486418' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119257739827' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114348442574' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109827351404' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105650171153' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101779098644' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098178783565' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094829875204' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091699372776' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088768952171' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086020025462' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083433453478' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081003142922' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078707930611' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001007653920338' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0013022061045633' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0011481262035254' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011211827435773' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0010843739453257' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001064716541548' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524906829038' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001044146212255' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001038092335822' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010334985930591' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001029894472512' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010269890964051' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010245984306201' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225978486848' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010208973314108' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194355904532' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181646443363' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170494262868' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001016063740924' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151855676365' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010143982261385' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136890665426' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130459740124' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010124607486418' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119257739827' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114348442574' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109827351404' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105650171153' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101779098644' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098178783565' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094829875204' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091699372776' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088768952171' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086020025462' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083433453478' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081003142922' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078707930611' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001007653920338' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_write_requests' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.87981535207011' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.43989794104577' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.37400048473097' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.28871515356058' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.24252213305721' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.53399039420503' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.47115716051563' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.43532881304282' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.41665054267721' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.40245287136408' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.39045266112491' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.38055378446855' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.3728024044111' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.36580471443797' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.35981987094768' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.35339410012352' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.3487230491194' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.5042127481848' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.49071937071008' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.47933786877457' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.46957674775157' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.46058357250952' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.45270213826447' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.44530663550064' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.43864579426428' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.43272033563239' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.42690753497021' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.42149016813907' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.41673805900545' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.41199267913363' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.40780592744746' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.40401104285765' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.40041678422737' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.39679995995194' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.39356553154262' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.39043109907754' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.38737755258243' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_write_requests' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.87981535207011' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.43989794104577' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.37400048473097' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.28871515356058' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.24252213305721' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.53399039420503' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.47115716051563' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.43532881304282' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.41665054267721' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.40245287136408' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.39045266112491' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.38055378446855' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.3728024044111' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.36580471443797' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.35981987094768' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.35339410012352' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.3487230491194' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.5042127481848' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.49071937071008' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.47933786877457' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.46957674775157' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.46058357250952' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.45270213826447' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.44530663550064' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.43864579426428' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.43272033563239' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.42690753497021' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.42149016813907' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.41673805900545' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.41199267913363' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.40780592744746' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.40401104285765' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.40041678422737' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.39679995995194' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.39356553154262' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.39043109907754' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.38737755258243' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_free' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='1813' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='1811' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='1806' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='1794' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='1782' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='1764' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='1744' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='1723' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='1703' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='1683' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='1664' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='1645' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='1625' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='1605' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='1585' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='1569' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='1550' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='1530' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='1513' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='1496' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='1476' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='1456' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='1436' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='1417' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1399' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1379' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1359' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1340' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='1322' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1303' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1282' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1261' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1242' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1223' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1203' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1182' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1162' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_free' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='1813' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='1811' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='1806' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='1794' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='1782' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='1764' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='1744' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='1723' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='1703' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='1683' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='1664' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='1645' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='1625' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='1605' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='1585' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='1569' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='1550' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='1530' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='1513' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='1496' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='1476' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='1456' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='1436' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='1417' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1399' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1379' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1359' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1340' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='1322' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1303' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1282' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1261' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1242' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1223' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1203' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1182' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1162' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_total' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='2048' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='2048' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='2048' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_total' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='2048' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='2048' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='2048' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='2048' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='2048' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_disk_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.012181625868843' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.017590134794845' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.058198254968492' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.11414546068174' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.14389412373803' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.16629316046402' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.18782677026311' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.19565183605059' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.20112059493501' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.20541840303728' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.20887002051171' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.211710156692' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.21409771309771' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.21611712954256' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.21786231827723' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.21937535421056' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.22069890713178' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.22187643770481' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.22398487517463' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.22486362000202' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.22566496009637' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.22638224703856' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.22703798036186' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.22766126031579' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.22824465992773' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.22879290954619' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.22925719477666' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.22968745674388' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.23011982720534' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.23078227060653' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.23143135384954' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.232030074921' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.23257451054606' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.23307849419303' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.2335681236432' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.23401482857413' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.23445987814959' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_disk_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.012181625868843' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.017590134794845' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.058198254968492' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.11414546068174' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.14389412373803' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.16629316046402' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.18782677026311' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.19565183605059' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.20112059493501' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.20541840303728' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.20887002051171' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.211710156692' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.21409771309771' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.21611712954256' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.21786231827723' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.21937535421056' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.22069890713178' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.22187643770481' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.22398487517463' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.22486362000202' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.22566496009637' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.22638224703856' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.22703798036186' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.22766126031579' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.22824465992773' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.22879290954619' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.22925719477666' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.22968745674388' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.23011982720534' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.23078227060653' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.23143135384954' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.232030074921' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.23257451054606' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.23307849419303' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.2335681236432' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.23401482857413' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.23445987814959' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0022088244182532' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0015925048141016' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0014847309743093' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0013374957813027' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0012588661661921' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0012099627316151' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.00117658484902' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0011523693432881' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0011339943722364' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0011195778900481' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0011079563856202' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010983937224805' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010903913947392' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010835893256431' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.001077742361813' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010726585773451' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010681977051472' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0010642549636959' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010607422705461' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010575929045542' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010547562661702' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010521838960497' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010498429945671' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010477030959309' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0011143484425742' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001153758291965' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0011479102396146' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001142490738102' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0011963575671297' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0011896597504078' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0012384183692184' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0012485530660796' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0012408560712934' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.001233613669737' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0012268088001814' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001220382205711' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0012449254508159' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0022088244182532' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0015925048141016' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0014847309743093' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0013374957813027' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0012588661661921' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0012099627316151' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.00117658484902' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0011523693432881' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0011339943722364' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0011195778900481' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0011079563856202' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010983937224805' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010903913947392' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010835893256431' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.001077742361813' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010726585773451' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010681977051472' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0010642549636959' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010607422705461' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010575929045542' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010547562661702' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010521838960497' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010498429945671' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010477030959309' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0011143484425742' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001153758291965' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0011479102396146' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001142490738102' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0011963575671297' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0011896597504078' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0012384183692184' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0012485530660796' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0012408560712934' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.001233613669737' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0012268088001814' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001220382205711' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0012449254508159' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.057210335448776' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.087950081469412' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.27366117304896' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.53618393520081' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.67437561480714' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.76930612566269' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.86992989581494' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.91395901264666' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.93651520836125' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.95424504499118' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.96847813883191' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.98018972769537' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.99004004338787' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.99836693624224' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='1.0045673637565' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='1.0108079633801' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='1.0162651526776' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='1.0211880742787' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='1.0271062382312' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='1.030869796841' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='1.0343048007556' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='1.0373767155456' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='1.0401859143697' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='1.0431235987216' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1.0475689521109' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1.0511905284892' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1.0530469509361' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1.0547673329805' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='1.0580629326003' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1.0599609300914' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1.063318416902' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1.065493732912' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1.0672848639163' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1.0687074489387' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1.0701163205132' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1.0713251267198' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1.0733934421211' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.057210335448776' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.087950081469412' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.27366117304896' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.53618393520081' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.67437561480714' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.76930612566269' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.86992989581494' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.91395901264666' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.93651520836125' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.95424504499118' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.96847813883191' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.98018972769537' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.99004004338787' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.99836693624224' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='1.0045673637565' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='1.0108079633801' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='1.0162651526776' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='1.0211880742787' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='1.0271062382312' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='1.030869796841' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='1.0343048007556' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='1.0373767155456' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='1.0401859143697' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='1.0431235987216' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1.0475689521109' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1.0511905284892' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1.0530469509361' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1.0547673329805' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='1.0580629326003' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1.0599609300914' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1.063318416902' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1.065493732912' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1.0672848639163' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1.0687074489387' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1.0701163205132' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1.0713251267198' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1.0733934421211' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_select' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.017016923541856' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.028551473855725' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.044141056713524' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.078117786027675' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.094385969453792' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.10949824156212' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.11895867914533' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.13558022245924' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.1316110143374' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.12849992526382' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.12604048364461' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.12401675153125' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.12228265389135' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.120804400978' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.1195376661743' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.11843442563395' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.11746463096517' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.1166589346527' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.11707847901355' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.11700650799821' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.11630300748792' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.11563497364713' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.11504077156956' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.11530854362448' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.11760110689292' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.11910833369942' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.11848299032244' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.11793400643244' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.11968833145157' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.11926233736676' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.12150214576532' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.12227614245641' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.12286457007191' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.12297136563877' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.12306363606908' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.12295793848188' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.1241362703977' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_select' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.017016923541856' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.028551473855725' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.044141056713524' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.078117786027675' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.094385969453792' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.10949824156212' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.11895867914533' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.13558022245924' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.1316110143374' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.12849992526382' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.12604048364461' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.12401675153125' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.12228265389135' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.120804400978' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.1195376661743' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.11843442563395' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.11746463096517' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.1166589346527' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.11707847901355' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.11700650799821' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.11630300748792' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.11563497364713' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.11504077156956' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.11530854362448' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.11760110689292' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.11910833369942' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.11848299032244' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.11793400643244' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.11968833145157' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.11926233736676' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.12150214576532' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.12227614245641' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.12286457007191' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.12297136563877' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.12306363606908' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.12295793848188' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.1241362703977' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_insert' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0049286793593231' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0039625240705081' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0047566650508968' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0064843064461694' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0070833549055138' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0077712980945882' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.008681440932368' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.010980191985373' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.012624011791505' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.013914412125198' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.014926373745007' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.015759058372076' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.016479526349092' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0170909451863' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.017617429837518' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.017947613165734' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.018356315959968' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.018686178757309' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.018888598675819' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.019112968482283' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.019384416366648' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.019642696863748' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.019865573443652' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.020045461050422' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.020256277729497' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.020461406668717' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.020619236783164' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.020745145136995' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.020861567915174' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.020990137692979' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.02110967244984' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.021230444199837' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.021412552042115' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.021499599519423' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.021607199559343' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.021700185750716' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.021795701558338' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_insert' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0049286793593231' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0039625240705081' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0047566650508968' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0064843064461694' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0070833549055138' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0077712980945882' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.008681440932368' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.010980191985373' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.012624011791505' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.013914412125198' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.014926373745007' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.015759058372076' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.016479526349092' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0170909451863' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.017617429837518' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.017947613165734' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.018356315959968' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.018686178757309' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.018888598675819' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.019112968482283' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.019384416366648' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.019642696863748' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.019865573443652' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.020045461050422' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.020256277729497' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.020461406668717' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.020619236783164' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.020745145136995' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.020861567915174' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.020990137692979' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.02110967244984' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.021230444199837' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.021412552042115' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.021499599519423' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.021607199559343' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.021700185750716' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.021795701558338' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_delete' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0013022061045633' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0011481262035254' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011211827435773' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0010843739453257' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001064716541548' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524906829038' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001044146212255' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001038092335822' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010334985930591' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001029894472512' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010269890964051' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010245984306201' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225978486848' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010208973314108' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194355904532' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181646443363' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170494262868' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001016063740924' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151855676365' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010143982261385' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136890665426' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130459740124' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010124607486418' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119257739827' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114348442574' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109827351404' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105650171153' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101779098644' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098178783565' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094829875204' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091699372776' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088768952171' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086020025462' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083433453478' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081003142922' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078707930611' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001007653920338' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_delete' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0013022061045633' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0011481262035254' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011211827435773' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0010843739453257' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.001064716541548' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524906829038' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001044146212255' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001038092335822' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010334985930591' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001029894472512' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010269890964051' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010245984306201' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225978486848' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010208973314108' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194355904532' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181646443363' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170494262868' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001016063740924' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151855676365' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010143982261385' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136890665426' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130459740124' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010124607486418' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119257739827' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114348442574' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109827351404' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105650171153' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101779098644' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098178783565' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094829875204' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091699372776' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088768952171' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086020025462' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083433453478' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081003142922' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078707930611' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001007653920338' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_update' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0022088244182532' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0015925048141016' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0014847309743093' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0015906176172798' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0015824488739322' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0014724161461341' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0015739007593149' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0015713850373305' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0015694760820046' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0015679949777286' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0016207492173162' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0016641576267434' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0016553376118594' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0016478172737341' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0016413744849569' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0016357625517692' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0016308287726118' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0016104221551115' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0016226082730972' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0016479201762343' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0016433861275' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0016131607785837' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0016105766834471' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0016559175690502' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0016975254997027' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0016919123138426' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0016867261124963' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0017124536905101' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0017756123901625' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0017681219891515' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0017794446685985' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0017722898838902' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001756976224065' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0017759311173408' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0017614295434663' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0017477253408053' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0017271224321097' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_update' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0022088244182532' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0015925048141016' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0014847309743093' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0015906176172798' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0015824488739322' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0014724161461341' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0015739007593149' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0015713850373305' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0015694760820046' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0015679949777286' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0016207492173162' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0016641576267434' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0016553376118594' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0016478172737341' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0016413744849569' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0016357625517692' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0016308287726118' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0016104221551115' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0016226082730972' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0016479201762343' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0016433861275' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0016131607785837' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0016105766834471' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0016559175690502' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0016975254997027' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0016919123138426' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0016867261124963' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0017124536905101' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0017756123901625' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0017681219891515' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0017794446685985' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0017722898838902' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001756976224065' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0017759311173408' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0017614295434663' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0017477253408053' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0017271224321097' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_received' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='27.867331520097' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='28.731891571619' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='47.903174987882' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='86.464478569018' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='107.33943826042' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='117.87218518713' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='131.72090764612' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='146.64646503124' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='151.47658448345' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='155.27102328779' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='157.92950448019' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='160.1172853172' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='162.28547862244' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='164.12128811151' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='165.6993119801' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='165.19072876553' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='166.51144868975' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='167.25640943263' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='166.66108850149' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='166.63909406361' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='167.6362678129' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='168.72315138548' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='169.52650401236' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='170.18976291561' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='171.77674610072' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='173.87698238369' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='174.3788298187' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='174.54331718438' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='175.50534583477' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='175.94442969313' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='177.11658658255' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='178.21447466534' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='179.41547672298' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='179.61512147911' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='179.93913423841' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='180.28948776879' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='181.02488289502' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_received' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='27.867331520097' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='28.731891571619' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='47.903174987882' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='86.464478569018' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='107.33943826042' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='117.87218518713' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='131.72090764612' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='146.64646503124' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='151.47658448345' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='155.27102328779' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='157.92950448019' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='160.1172853172' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='162.28547862244' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='164.12128811151' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='165.6993119801' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='165.19072876553' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='166.51144868975' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='167.25640943263' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='166.66108850149' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='166.63909406361' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='167.6362678129' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='168.72315138548' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='169.52650401236' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='170.18976291561' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='171.77674610072' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='173.87698238369' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='174.3788298187' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='174.54331718438' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='175.50534583477' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='175.94442969313' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='177.11658658255' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='178.21447466534' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='179.41547672298' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='179.61512147911' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='179.93913423841' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='180.28948776879' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='181.02488289502' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_sent' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='21.224236929586' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='45.577395941342' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='72.027023751818' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='141.3158960513' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='175.69117266373' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='241.5198152328' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='253.74006710224' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='271.85479201585' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='268.56475278038' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='265.99476846731' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='263.91760228868' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='262.21639239417' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='260.8024496068' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='259.59154076024' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='258.56061960662' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='257.59214924072' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='256.47576424053' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='255.71382445544' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='301.65941808905' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='298.41672785913' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='295.514503566' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='292.87227991442' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='290.4720505408' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='288.93781901445' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='291.23568357499' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='292.60886087071' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='290.67182943836' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='288.88613972235' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='289.53301261597' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='331.67938967492' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='375.04480431354' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='416.14709903064' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='456.60693149365' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='494.21232979575' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='531.08945987104' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='567.0789519252' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='603.82317147843' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_sent' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='21.224236929586' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='45.577395941342' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='72.027023751818' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='141.3158960513' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='175.69117266373' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='241.5198152328' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='253.74006710224' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='271.85479201585' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='268.56475278038' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='265.99476846731' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='263.91760228868' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='262.21639239417' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='260.8024496068' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='259.59154076024' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='258.56061960662' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='257.59214924072' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='256.47576424053' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='255.71382445544' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='301.65941808905' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='298.41672785913' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='295.514503566' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='292.87227991442' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='290.4720505408' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='288.93781901445' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='291.23568357499' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='292.60886087071' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='290.67182943836' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='288.88613972235' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='289.53301261597' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='331.67938967492' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='375.04480431354' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='416.14709903064' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='456.60693149365' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='494.21232979575' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='531.08945987104' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='567.0789519252' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='603.82317147843' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr></tr></div></table></body></html>