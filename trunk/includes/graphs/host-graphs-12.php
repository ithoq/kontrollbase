<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">                  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kontrollbase 2.0.1 - MySQL Monitoring</title>

<link rel="stylesheet" type="text/css" media="all" href="http://192.168.0.20/kontrollbase/userguide/css/userguide-nofluff.css" />

<script type="text/javascript" src="http://192.168.0.20/kontrollbase/includes/browser_detect.js"></script>
<script language="JavaScript" SRC="http://192.168.0.20/kontrollbase/includes/CalendarPopup.js"></script>
<script language="JavaScript">
 var cal = new CalendarPopup();</script>
<script language="JavaScript" ID="jscal1x">
 var cal1x = new CalendarPopup("graphform");</script>
<script language="JavaScript">document.write(getCalendarStyles());</script>

</head>
<body><table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder"><tr><td colspan='3'><div id='content'><h1>Date range: start 2009-05-01 -> end 2009-05-08</h1></td></tr><tr><td colspan="3">

<div id="content"><table cellpadding="0" cellspacing="1" border="0" class="tableborder"><form action="http://192.168.0.20/kontrollbase/index.php/main/graphs" method="post" name="graphform"><input type="hidden" name="server_list_id" value="12" /><tr><th>Start date</th><th>End Date</th><th>&nbsp;</th></tr><tr><td class='td'><input type="text" name="sday" value="2009-05-01" id="sday" maxlength="10" size="15" style="width:50%"  />
<a href="#"onClick="cal.select(document.forms['graphform'].sday,'anchor1','yyyy-MM-dd'); return false;" NAME="anchor1" ID="anchor1"><img src='http://192.168.0.20/kontrollbase/includes/images/icon_calendar.gif' height='20' width='20' border='0'></a></td><td class='td'><input type="text" name="eday" value="2009-05-08" id="eday" maxlength="10" size="15" style="width:50%"  /> 
<a href="#"onClick="cal.select(document.forms['graphform'].eday,'anchor1','yyyy-MM-dd'); return false;" NAME="anchor1" ID="anchor1"><img src='http://192.168.0.20/kontrollbase/includes/images/icon_calendar.gif' height='20' width='20' border='0'></a></td><td><input type="submit" name="submit" value="Submit"  /></td></tr></table></td></tr><table><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Query Rate' xAxisName='' yAxisName='Q/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.106314' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.106234' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.106138' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.106047' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.107443' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.109943' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.111345' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.112691' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.113986' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.115232' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.116433' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.117589' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Query Rate' xAxisName='' yAxisName='Q/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.106314' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.106234' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.106138' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.106047' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.107443' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.109943' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.111345' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.112691' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.113986' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.115232' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.116433' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.117589' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Connections' xAxisName='' yAxisName='connections' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='2' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='3' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='2' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Connections' xAxisName='' yAxisName='connections' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='2' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='3' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='2' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 1 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.011' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.011' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.051' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.081' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 1 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.011' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.011' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.051' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.081' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 5 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.021' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.011' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.021' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.041' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 5 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.021' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.011' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.021' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.041' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 15 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.011' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 15 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.011' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Total' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='1051709440' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Total' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='1051709440' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='1051709440' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Used' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='12144640' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='8298496' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='9412608' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='9912320' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='14364672' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='17571840' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='16449536' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='16216064' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='17326080' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='16711680' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='16351232' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='17215488' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Used' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='12144640' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='8298496' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='9412608' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='9912320' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='14364672' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='17571840' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='16449536' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='16216064' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='17326080' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='16711680' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='16351232' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='17215488' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Total' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='2080366592' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Total' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='2080366592' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='2080366592' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Free' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='2080288768' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Free' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='2080288768' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='2080288768' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU User' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU User' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU System' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU System' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU Idle' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='99' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='99' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU Idle' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='99' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='99' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='99' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Schemas' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='5' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='5' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='5' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='5' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='4' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='4' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='4' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='4' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='4' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='4' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='4' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='4' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Schemas' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='5' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='5' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='5' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='5' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='4' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='4' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='4' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='4' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='4' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='4' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='4' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='4' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Tables' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='58' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='58' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='58' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='58' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='49' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='49' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='49' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='49' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='49' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='49' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='49' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='49' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Tables' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='58' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='58' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='58' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='58' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='49' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='49' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='49' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='49' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='49' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='49' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='49' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='49' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Data Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='928599964' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='928649116' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='928747420' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='928845724' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='986972' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='1118044' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='2281308' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='2314076' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='2346844' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='2379612' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='2412380' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='2445148' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Data Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='928599964' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='928649116' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='928747420' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='928845724' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='986972' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='1118044' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='2281308' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='2314076' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='2346844' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='2379612' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='2412380' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='2445148' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Index Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='38131712' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='38131712' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='38131712' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='38131712' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='202752' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='202752' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='202752' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='202752' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='202752' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='202752' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='202752' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='202752' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Index Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='38131712' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='38131712' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='38131712' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='38131712' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='202752' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='202752' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='202752' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='202752' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='202752' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='202752' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='202752' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='202752' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='20' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='20' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='20' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='20' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='11' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='11' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='11' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='11' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='11' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='11' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='11' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='11' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='20' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='20' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='20' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='20' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='11' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='11' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='11' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='11' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='11' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='11' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='11' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='11' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='25' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='25' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='25' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='25' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='25' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='928137216' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='928186368' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='928284672' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='928382976' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='524288' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='655360' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='1818624' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='1851392' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='1884160' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='1916928' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='1949696' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='1982464' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='928137216' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='928186368' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='928284672' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='928382976' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='524288' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='655360' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='1818624' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='1851392' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='1884160' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='1916928' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='1949696' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='1982464' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='38043648' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='38043648' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='38043648' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='38043648' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='114688' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='114688' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='114688' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='114688' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='114688' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='114688' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='114688' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='114688' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='38043648' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='38043648' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='38043648' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='38043648' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='114688' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='114688' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='114688' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='114688' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='114688' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='114688' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='114688' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='114688' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='462748' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='462748' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='462748' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='462748' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='462684' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='462684' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='462684' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='462684' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='462684' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='462684' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='462684' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='462684' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='462748' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='462748' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='462748' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='462748' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='462684' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='462684' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='462684' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='462684' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='462684' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='462684' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='462684' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='462684' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='88064' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='88064' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='88064' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='88064' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='88064' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_free_memory' xAxisName='' yAxisName='free' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_free_memory' xAxisName='' yAxisName='free' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_hits' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_hits' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_inserts' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_inserts' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_queries_in_cache' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_queries_in_cache' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_lowmem_prunes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_lowmem_prunes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_not_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_not_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0013481028395246' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0013448891735593' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001337406309498' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0013302451480501' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010635206615388' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.0011810241440952' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0011774121117031' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0011739395125345' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0011706011558228' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.001167388529701' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0011642955060045' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0011613130885407' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0013481028395246' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0013448891735593' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001337406309498' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0013302451480501' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010635206615388' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.0011810241440952' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0011774121117031' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0011739395125345' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0011706011558228' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.001167388529701' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0011642955060045' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0011613130885407' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0012859416181809' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.001283301821138' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0012771551828019' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.001271272800184' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001237594189125' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0012328533966103' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0012282956102016' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0012239140170175' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0012196974452326' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0012156378516309' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0012117234287097' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0012859416181809' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.001283301821138' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0012771551828019' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.001271272800184' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001237594189125' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0012328533966103' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0012282956102016' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0012239140170175' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0012196974452326' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0012156378516309' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0012117234287097' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Slow_queries' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Slow_queries' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Uptime' xAxisName='' yAxisName='days' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='1.8619444444444' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='1.8792939814815' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='1.9209722222222' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='1.9626273148148' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='2.0043055555556' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='2.0459722222222' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='2.0876273148148' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='2.1293055555556' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='2.1709722222222' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='2.2126388888889' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='2.2542939814815' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='2.2959722222222' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Uptime' xAxisName='' yAxisName='days' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='1.8619444444444' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='1.8792939814815' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='1.9209722222222' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='1.9626273148148' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='2.0043055555556' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='2.0459722222222' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='2.0876273148148' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='2.1293055555556' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='2.1709722222222' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='2.2126388888889' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='2.2542939814815' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='2.2959722222222' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_immediate' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.030327664229947' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.030303262282058' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.030288072686959' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.030273873480725' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.031842168479893' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.033301495711991' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.033749166994694' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.034178962015959' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.034592433838739' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.03499033331241' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.035373700396876' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.035742806444458' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_immediate' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.030327664229947' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.030303262282058' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.030288072686959' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.030273873480725' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.031842168479893' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.033301495711991' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.033749166994694' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.034178962015959' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.034592433838739' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.03499033331241' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.035373700396876' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.035742806444458' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_waited' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_waited' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_created' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.015875180267542' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.015861028139261' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.015857927843251' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.015855134427467' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.015892707828055' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.01643796528862' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.016944913539316' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.017431848324745' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.017900176998699' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.01835086728182' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.018784988524986' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.019203173835017' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_created' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.015875180267542' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.015861028139261' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.015857927843251' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.015855134427467' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.015892707828055' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.01643796528862' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.016944913539316' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.017431848324745' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.017900176998699' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.01835086728182' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.018784988524986' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.019203173835017' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Seconds_Behind_Master' xAxisName='' yAxisName='seconds' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Seconds_Behind_Master' xAxisName='' yAxisName='seconds' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010124322442687' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010123174704843' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010120502253392' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010117944695732' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0017102764881159' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.0017467245943928' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.001737369089266' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0017229360989716' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0017090610538886' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0016957085765698' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0016828531968312' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0016704575242474' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010124322442687' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010123174704843' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010120502253392' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010117944695732' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0017102764881159' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.0017467245943928' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.001737369089266' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0017229360989716' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0017090610538886' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0016957085765698' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0016828531968312' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0016704575242474' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='1.8677582177135' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='1.866540207303' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='1.864157809751' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='1.8620106032281' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='1.846978726353' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='1.8093702622587' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='1.7732673212434' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='1.7385580414411' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='1.7051905401659' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='1.6730797397108' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='1.6421643879222' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='1.6123545661686' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='1.8677582177135' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='1.866540207303' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='1.864157809751' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='1.8620106032281' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='1.846978726353' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='1.8093702622587' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='1.7732673212434' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='1.7385580414411' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='1.7051905401659' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='1.6730797397108' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='1.6421643879222' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='1.6123545661686' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.032832761450097' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.032729803967457' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.032589665726749' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.032467644821343' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0500033030744' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.050815581653203' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.050719744304794' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.050621681560237' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.050516985477577' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.050395308936455' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.050288651801346' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.050195450970903' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.032832761450097' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.032729803967457' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.032589665726749' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.032467644821343' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0500033030744' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.050815581653203' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.050719744304794' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.050621681560237' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.050516985477577' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.050395308936455' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.050288651801346' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.050195450970903' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='1.7825538316177' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='1.7819130263409' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='1.7809088279951' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='1.7800862175726' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='1.7617397731735' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='1.7258615617858' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='1.6914248964634' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='1.658317570065' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='1.6264900944704' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='1.5958613186031' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='1.5663728173085' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='1.5379388220112' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='1.7825538316177' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='1.7819130263409' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='1.7809088279951' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='1.7800862175726' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='1.7617397731735' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='1.7258615617858' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='1.6914248964634' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='1.658317570065' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='1.6264900944704' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='1.5958613186031' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='1.5663728173085' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='1.5379388220112' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_write_requests' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.072205679049182' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.071868566431198' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.071186537488251' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.070569678777621' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='6.5094761277805' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='6.4465809064784' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='6.3218699236574' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='6.2019709521014' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='6.0867027061608' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='5.9756763542778' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='5.8688819177393' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='5.7659195854254' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_write_requests' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.072205679049182' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.071868566431198' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.071186537488251' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.070569678777621' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='6.5094761277805' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='6.4465809064784' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='6.3218699236574' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='6.2019709521014' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='6.0867027061608' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='5.9756763542778' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='5.8688819177393' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='5.7659195854254' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_free' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='1' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_free' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='1' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='2' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_total' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='512' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='512' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_total' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='512' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='512' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='512' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_disk_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.12165493062808' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.12164962339334' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.12163480587087' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.12162204032529' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.12160841244543' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.12159602199443' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.1215847946732' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.12157269584502' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.12156170430555' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.12155112673404' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.12154155906167' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.12153112334402' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_disk_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.12165493062808' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.12164962339334' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.12163480587087' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.12162204032529' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.12160841244543' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.12159602199443' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.1215847946732' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.12157269584502' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.12156170430555' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.12155112673404' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.12154155906167' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.12153112334402' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010310806106718' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010307936762107' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001030125563348' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.001029486173933' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010288730279722' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.0010282850225149' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010277206424536' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010271780488335' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010266564305973' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010261544577658' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010256711728132' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010252051700845' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010310806106718' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010307936762107' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.001030125563348' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.001029486173933' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010288730279722' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.0010282850225149' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010277206424536' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010271780488335' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010266564305973' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010261544577658' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010256711728132' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010252051700845' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.55306002287533' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.55304439216363' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.55299672233871' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.55295758708741' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.5530118725891' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.55301615640486' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.55297897666476' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.55293725132085' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.55290007037298' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.55286428974954' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.55283266502713' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.55279662452362' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.55306002287533' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.55304439216363' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.55299672233871' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.55295758708741' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.5530118725891' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.55301615640486' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.55297897666476' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.55293725132085' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.55290007037298' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.55286428974954' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.55283266502713' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.55279662452362' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_select' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.055888358446467' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.055874331007384' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.055858650856771' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.05584428351546' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.05591072459751' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.056195392935533' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.056435740778728' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.056666079620812' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.056887872390335' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.057101311907602' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.057307150448475' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.057504950295405' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_select' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.055888358446467' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.055874331007384' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.055858650856771' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.05584428351546' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.05591072459751' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.056195392935533' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.056435740778728' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.056666079620812' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.056887872390335' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.057101311907602' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.057307150448475' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.057504950295405' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_insert' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0048912924561142' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0048861619377845' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0048861976718965' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.004886277724375' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0048805349594623' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.0051465843006811' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0054020380216332' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0056474463505316' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0058834580854285' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0061105810474337' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0063293354760206' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0065400963845704' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_insert' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0048912924561142' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0048861619377845' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0048861976718965' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.004886277724375' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0048805349594623' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.0051465843006811' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0054020380216332' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0056474463505316' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0058834580854285' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0061105810474337' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0063293354760206' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0065400963845704' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_delete' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_delete' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_update' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_update' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='0.0010062161221344' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='0.0010061587352421' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='0.0010060251126696' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='0.0010058972347866' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='0.0010057746055944' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='0.001005657004503' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='0.0010055441284907' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='0.0010054356097667' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='0.0010053312861195' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='0.0010052308915532' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='0.0010051342345626' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='0.0010050410340169' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_received' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='57.074922920086' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='57.066859229789' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='57.063583014002' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='57.061166119207' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='57.036316494583' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='57.321346140792' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='57.556303396888' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='57.781629813232' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='57.998720491331' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='58.207645471094' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='58.409203628877' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='58.602912709455' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_received' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='57.074922920086' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='57.066859229789' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='57.063583014002' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='57.061166119207' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='57.036316494583' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='57.321346140792' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='57.556303396888' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='57.781629813232' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='57.998720491331' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='58.207645471094' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='58.409203628877' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='58.602912709455' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_sent' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='283.06590954299' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='281.30675428494' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='277.51061624852' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='273.87894746154' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='271.03090568914' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='268.19724843301' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='265.31304921523' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='262.53908203422' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='259.87311005907' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='257.30755549976' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='254.83822026893' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='252.4560018551' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_sent' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='05-07 12:35' value='283.06590954299' color='ff6600' showName='0'/>
<set name='05-07 13:00' value='281.30675428494' color='ff6600' showName='0'/>
<set name='05-07 14:00' value='277.51061624852' color='ff6600' showName='0'/>
<set name='05-07 15:00' value='273.87894746154' color='ff6600' showName='0'/>
<set name='05-07 16:00' value='271.03090568914' color='ff6600' showName='0'/>
<set name='05-07 17:00' value='268.19724843301' color='ff6600' showName='0'/>
<set name='05-07 18:00' value='265.31304921523' color='ff6600' showName='0'/>
<set name='05-07 19:00' value='262.53908203422' color='ff6600' showName='0'/>
<set name='05-07 20:00' value='259.87311005907' color='ff6600' showName='0'/>
<set name='05-07 21:00' value='257.30755549976' color='ff6600' showName='0'/>
<set name='05-07 22:00' value='254.83822026893' color='ff6600' showName='0'/>
<set name='05-07 23:00' value='252.4560018551' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr></tr></div></table></body></html>