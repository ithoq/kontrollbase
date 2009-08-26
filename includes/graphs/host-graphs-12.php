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
<body><table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder"><tr><td colspan='3'><div id='content'><h1>Date range: start 2009-08-18 -> end 2009-08-25</h1></td></tr><tr><td colspan="3">

<div id="content"><table cellpadding="0" cellspacing="1" border="0" class="tableborder"><form action="http://demo01.kontrollbase.com/index.php/main/graphs" method="post" name="graphform"><input type="hidden" name="server_list_id" value="12" /><tr><th>Start date</th><th>End Date</th><th>&nbsp;</th></tr><tr><td class='td'><input type="text" name="sday" value="2009-08-18" id="sday" maxlength="10" size="15" style="width:50%"  />
<a href="#"onClick="cal.select(document.forms['graphform'].sday,'anchor1','yyyy-MM-dd'); return false;" NAME="anchor1" ID="anchor1"><img src='http://demo01.kontrollbase.com/includes/images/icon_calendar.gif' height='20' width='20' border='0'></a></td><td class='td'><input type="text" name="eday" value="2009-08-25" id="eday" maxlength="10" size="15" style="width:50%"  /> 
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
<set name='08-24 11:37' value='0.102331' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.14754' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.171667' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.321844' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.397052' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.435511' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.433185' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.490619' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.465925' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.446514' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.43089' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.418023' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.407237' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Query Rate' xAxisName='' yAxisName='Q/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.102331' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.14754' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.171667' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.321844' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.397052' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.435511' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.433185' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.490619' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.465925' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.446514' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.43089' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.418023' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.407237' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.001' color='ff6600' showName='0'/>
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
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 1 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.011' color='ff6600' showName='0'/>
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
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 5 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.011' color='ff6600' showName='0'/>
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
<set name='08-24 22:00' value='100' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='100' color='ff6600' showName='0'/>
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
<set name='08-24 22:00' value='100' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='100' color='ff6600' showName='0'/>
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
<set name='08-24 12:35' value='643044' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='757732' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='954412' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='1151020' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='2216088' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2216088' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2281624' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2314392' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='3412120' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='3444888' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='3477656' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='4559000' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Data Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='643044' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='643044' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='757732' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='954412' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='1151020' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='2216088' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2216088' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2281624' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2314392' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='3412120' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='3444888' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='3477656' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='4559000' color='ff6600' showName='0'/>
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
<set name='08-24 12:35' value='180224' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='294912' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='491520' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='688128' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='1753088' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='1753088' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='1818624' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='1851392' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2949120' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2981888' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='3014656' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='4096000' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='180224' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='180224' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='294912' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='491520' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='688128' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='1753088' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='1753088' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='1818624' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='1851392' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2949120' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2981888' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='3014656' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='4096000' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='4163376' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='3962776' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='4129304' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='4128080' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='4119624' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='4153064' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='4143424' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='3984448' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='4088840' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_free_memory' xAxisName='' yAxisName='free' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='4163376' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='3962776' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='4129304' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='4128080' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='4119624' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='4153064' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='4143424' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='3984448' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='4088840' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='4088840' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.0019074410163339' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.015668839828123' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.016393939393939' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.044544303797468' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.063135922330097' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.059795737309045' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.052346578366446' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.054640138671949' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.050078726968174' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.046502107686328' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.04356525142379' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.041147601476015' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.039169491525424' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_hits' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0019074410163339' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.015668839828123' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.016393939393939' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.044544303797468' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.063135922330097' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.059795737309045' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.052346578366446' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.054640138671949' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.050078726968174' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.046502107686328' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.04356525142379' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.041147601476015' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.039169491525424' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.010981851179673' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.020854793302712' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.019181818181818' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.029101265822785' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.032391585760518' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.038062312982309' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.038792494481236' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.051706693588327' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.045790619765494' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.041150677150289' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.03746522173338' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.034431734317343' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.031847457627119' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_inserts' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.010981851179673' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.020854793302712' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.019181818181818' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.029101265822785' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.032391585760518' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.038062312982309' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.038792494481236' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.051706693588327' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.045790619765494' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.041150677150289' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.03746522173338' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.034431734317343' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.031847457627119' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.0061421657592257' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.016409690324493' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0057272727272727' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0042067510548523' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0037184466019417' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0019974276864927' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0021037527593819' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0046953788715761' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0028760469011725' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0026741905587611' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0025115117816945' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0023776137761378' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0022655367231638' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_queries_in_cache' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0061421657592257' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.016409690324493' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0057272727272727' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0042067510548523' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0037184466019417' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0019974276864927' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0021037527593819' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0046953788715761' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0028760469011725' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0026741905587611' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0025115117816945' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0023776137761378' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0022655367231638' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.001302480338778' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001148170099274' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011212121212121' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001084388185654' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0010647249190939' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524961940259' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010441501103753' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010380966893977' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010335008375209' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010298962599779' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001026991281816' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010246002460025' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225988700565' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_lowmem_prunes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.001302480338778' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001148170099274' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011212121212121' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001084388185654' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0010647249190939' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524961940259' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010441501103753' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010380966893977' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010335008375209' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010298962599779' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001026991281816' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010246002460025' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225988700565' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.0037223230490018' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0076676544673285' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.027545454545455' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.055430379746835' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.070255663430421' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.086463803874219' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.095701986754967' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.099251361956646' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.10106700167504' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.10249780262489' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.10364784474615' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.10459163591636' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.10538418079096' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_not_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0037223230490018' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0076676544673285' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.027545454545455' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.055430379746835' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.070255663430421' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.086463803874219' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.095701986754967' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.099251361956646' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.10106700167504' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.10249780262489' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.10364784474615' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.10459163591636' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.10538418079096' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.0085620084694495' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0047042524818492' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.004030303030303' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0031097046413502' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0026181229773463' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0023124048506483' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0021037527593819' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0019524172349423' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0018375209380235' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0017474064994469' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0016747820453993' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0016150061500615' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0015649717514124' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0085620084694495' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0047042524818492' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.004030303030303' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0031097046413502' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0026181229773463' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0023124048506483' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0021037527593819' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0019524172349423' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0018375209380235' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0017474064994469' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0016747820453993' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0016150061500615' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0015649717514124' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.012494252873563' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0069268039709587' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0056060606060606' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0042067510548523' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0034595469255663' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0029948553729855' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0026777041942605' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0024476741971123' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0022730318257956' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0021360578791593' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.002025668709007' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0019348093480935' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0018587570621469' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.012494252873563' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0069268039709587' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0056060606060606' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0042067510548523' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0034595469255663' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0029948553729855' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0026777041942605' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0024476741971123' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0022730318257956' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0021360578791593' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.002025668709007' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0019348093480935' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0018587570621469' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.001302480338778' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001148170099274' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011212121212121' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001084388185654' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0010647249190939' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524961940259' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010441501103753' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010380966893977' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010335008375209' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010298962599779' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001026991281816' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010246002460025' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225988700565' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Slow_queries' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.001302480338778' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001148170099274' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011212121212121' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001084388185654' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0010647249190939' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524961940259' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010441501103753' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010380966893977' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010335008375209' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010298962599779' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001026991281816' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010246002460025' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225988700565' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.038263888888889' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.078113425925926' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.095486111111111' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.13715277777778' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.17881944444444' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.22047453703704' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.26215277777778' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.30380787037037' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.34548611111111' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.3871412037037' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.42880787037037' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.47048611111111' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.51215277777778' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Uptime' xAxisName='' yAxisName='days' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.038263888888889' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.078113425925926' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.095486111111111' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.13715277777778' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.17881944444444' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.22047453703704' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.26215277777778' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.30380787037037' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.34548611111111' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.3871412037037' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.42880787037037' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.47048611111111' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.51215277777778' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.030340592861464' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.035079122833012' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.038454545454545' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.058130801687764' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.066242718446602' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.082106619770067' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.085900662251656' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.10264196731304' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.097716917922948' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.093857783491285' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.090880968447192' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.088429274292743' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.086265536723164' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_immediate' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.030340592861464' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.035079122833012' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.038454545454545' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.058130801687764' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.066242718446602' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.082106619770067' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.085900662251656' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.10264196731304' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.097716917922948' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.093857783491285' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.090880968447192' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.088429274292743' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.086265536723164' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.001302480338778' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001148170099274' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011212121212121' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001084388185654' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0010647249190939' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524961940259' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010441501103753' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010380966893977' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010335008375209' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010298962599779' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001026991281816' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010246002460025' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225988700565' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_waited' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.001302480338778' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001148170099274' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011212121212121' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001084388185654' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0010647249190939' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524961940259' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010441501103753' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010380966893977' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010335008375209' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010298962599779' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001026991281816' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010246002460025' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225988700565' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.001302480338778' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0015926803970959' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0012424242424242' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001084388185654' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0010647249190939' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524961940259' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010441501103753' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010380966893977' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010335008375209' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010597925199558' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010539825636319' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010492004920049' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001045197740113' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.001302480338778' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0015926803970959' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0012424242424242' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001084388185654' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0010647249190939' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524961940259' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010441501103753' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010380966893977' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010335008375209' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010597925199558' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010539825636319' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010492004920049' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001045197740113' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.0040248033877798' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0026298710920136' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0023333333333333' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0020970464135021' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0018414239482201' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0017349467163631' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0016622516556291' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0016857404091584' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0016365159128978' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0015979251995575' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0015398256363195' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0014920049200492' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0014519774011299' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_created' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0040248033877798' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0026298710920136' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0023333333333333' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0020970464135021' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0018414239482201' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0017349467163631' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0016622516556291' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0016857404091584' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0016365159128978' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0015979251995575' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0015398256363195' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0014920049200492' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0014519774011299' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.0058396854204477' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0038152318862054' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0045151515151515' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0074978902953586' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0079902912621359' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.01648637723765' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.015657836644592' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.014791001561964' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.013931323283082' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.013257466590929' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.012714216308132' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.012266912669127' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.011892655367232' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0058396854204477' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0038152318862054' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0045151515151515' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0074978902953586' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0079902912621359' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.01648637723765' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.015657836644592' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.014791001561964' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.013931323283082' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.013257466590929' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.012714216308132' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.012266912669127' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.011892655367232' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.0073520871143376' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0041115720847533' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0035454545454545' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0036160337552743' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0030064724919094' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0039397868654523' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0034724061810155' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0031334146062707' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0028760469011725' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0026741905587611' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0025115117816945' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0023776137761378' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0022655367231638' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0073520871143376' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0041115720847533' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0035454545454545' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0036160337552743' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0030064724919094' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0039397868654523' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0034724061810155' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0031334146062707' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0028760469011725' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0026741905587611' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0025115117816945' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0023776137761378' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0022655367231638' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.001302480338778' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001148170099274' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011212121212121' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001084388185654' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0010647249190939' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524961940259' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010441501103753' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010380966893977' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010335008375209' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010298962599779' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001026991281816' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010246002460025' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225988700565' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.001302480338778' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001148170099274' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011212121212121' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001084388185654' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0010647249190939' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524961940259' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010441501103753' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010380966893977' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010335008375209' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010298962599779' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001026991281816' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010246002460025' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225988700565' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.10112099213551' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.053452215142984' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.050575757575758' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.049354430379747' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.047666666666667' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.055911018951126' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.055922737306843' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.056887843346413' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.056946398659967' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.057025591198541' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.057060892331777' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.057260762607626' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.057112994350282' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.10112099213551' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.053452215142984' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.050575757575758' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.049354430379747' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.047666666666667' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.055911018951126' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.055922737306843' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.056887843346413' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.056946398659967' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.057025591198541' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.057060892331777' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.057260762607626' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.057112994350282' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.001302480338778' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001148170099274' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011212121212121' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001084388185654' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0010647249190939' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524961940259' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010441501103753' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010380966893977' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010335008375209' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010298962599779' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001026991281816' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010246002460025' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225988700565' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.001302480338778' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001148170099274' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011212121212121' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001084388185654' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0010647249190939' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524961940259' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010441501103753' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010380966893977' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010335008375209' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010298962599779' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001026991281816' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010246002460025' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225988700565' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.8787979431337' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.43706460216328' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.37336363636364' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.28825738396624' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.24216504854369' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.53373137697517' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.47049227373068' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.43514987237609' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.41610887772194' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.40229749768304' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.3903222489136' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.38043419434194' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.37245762711864' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_write_requests' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.8787979431337' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.43706460216328' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.37336363636364' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.28825738396624' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.24216504854369' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.53373137697517' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.47049227373068' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.43514987237609' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.41610887772194' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.40229749768304' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.3903222489136' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.38043419434194' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.37245762711864' color='ff6600' showName='0'/>
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
<set name='08-24 12:35' value='1813' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='1806' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='1794' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='1782' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='1764' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='1745' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='1723' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='1704' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='1683' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='1664' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='1645' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='1626' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_free' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='1813' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='1813' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='1806' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='1794' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='1782' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='1764' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='1745' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='1723' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='1704' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='1683' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='1664' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='1645' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='1626' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.001302480338778' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.012260927544821' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.053848484848485' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.11112658227848' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.14158252427184' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.16442065200273' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.18625386313466' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.19430260200389' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.19992797319933' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.20435436036952' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.20791516640125' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.21084009840098' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.21329378531073' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_disk_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.001302480338778' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.012260927544821' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.053848484848485' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.11112658227848' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.14158252427184' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.16442065200273' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.18625386313466' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.19430260200389' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.19992797319933' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.20435436036952' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.20791516640125' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.21084009840098' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.21329378531073' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.0022099213551119' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0015926803970959' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0014848484848485' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001337552742616' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0012588996763754' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0012099847761037' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0011766004415011' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0011523867575908' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0011340033500838' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0011195850399115' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0011079651272639' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010984009840098' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001090395480226' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0022099213551119' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0015926803970959' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0014848484848485' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001337552742616' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0012588996763754' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0012099847761037' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0011766004415011' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0011523867575908' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0011340033500838' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0011195850399115' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0011079651272639' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010984009840098' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001090395480226' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.0073520871143376' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.063527781893614' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.25372727272727' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.52235021097046' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.66378317152104' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.7607249199433' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.86272185430464' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.90777740104385' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.93105025125628' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.94936915901821' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.96410291775756' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.97620295202952' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.98635593220339' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0073520871143376' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.063527781893614' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.25372727272727' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.52235021097046' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.66378317152104' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.7607249199433' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.86272185430464' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.90777740104385' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.93105025125628' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.94936915901821' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.96410291775756' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.97620295202952' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.98635593220339' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.012494252873563' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.026337086975848' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.042333333333333' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.076864978902954' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.093427184466019' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.10872219014121' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.11830684326711' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.13502415330108' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.13111725293132' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.12805910490598' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.12564573942617' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.12365682656827' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.12194915254237' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_select' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.012494252873563' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.026337086975848' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.042333333333333' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.076864978902954' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.093427184466019' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.10872219014121' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.11830684326711' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.13502415330108' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.13111725293132' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.12805910490598' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.12564573942617' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.12365682656827' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.12194915254237' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.0046297640653358' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0038152318862054' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0046363636363636' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0064008438818565' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0070194174757282' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0077195128353194' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0086379690949227' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.010943235932797' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.012591289782245' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.013885288050465' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.014900510135226' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.015735547355474' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.016457627118644' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_insert' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0046297640653358' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0038152318862054' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0046363636363636' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0064008438818565' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0070194174757282' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0077195128353194' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0086379690949227' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.010943235932797' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.012591289782245' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.013885288050465' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.014900510135226' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.015735547355474' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.016457627118644' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.001302480338778' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001148170099274' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011212121212121' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001084388185654' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0010647249190939' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524961940259' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010441501103753' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010380966893977' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010335008375209' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010298962599779' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001026991281816' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010246002460025' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225988700565' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_delete' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.001302480338778' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.001148170099274' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0011212121212121' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.001084388185654' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0010647249190939' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0010524961940259' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010441501103753' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010380966893977' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010335008375209' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010298962599779' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001026991281816' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0010246002460025' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010225988700565' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='0.0022099213551119' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0015926803970959' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0014848484848485' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0015907172995781' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0015825242718447' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0014724657462334' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0015739514348786' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0015714503409654' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0015695142378559' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0015680289395797' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0016207994817674' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0016642066420664' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0016553672316384' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_update' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='0.0022099213551119' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='0.0015926803970959' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='0.0014848484848485' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='0.0015907172995781' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='0.0015825242718447' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='0.0014724657462334' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0015739514348786' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0015714503409654' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0015695142378559' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0015680289395797' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0016207994817674' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='0.0016642066420664' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0016553672316384' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='22.185420447671' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='25.941176470588' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='45.623272727273' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='84.881856540084' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='106.12731391586' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='116.88960050396' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='130.89554083885' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='145.94075964799' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='150.85139028476' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='154.71329486681' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='157.43029501471' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='159.66243542435' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='161.86406779661' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_received' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='22.185420447671' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='25.941176470588' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='45.623272727273' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='84.881856540084' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='106.12731391586' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='116.88960050396' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='130.89554083885' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='145.94075964799' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='150.85139028476' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='154.71329486681' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='157.43029501471' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='159.66243542435' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='161.86406779661' color='ff6600' showName='0'/>
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
<set name='08-24 11:37' value='13.411978221416' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='41.772114387317' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='68.907393939394' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='139.14084388186' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='174.02731391586' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='240.17276497454' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='252.60578366446' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='270.88007162178' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='267.69778894472' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='265.22078387994' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='263.22535021188' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='261.58528905289' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='260.21665536723' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_sent' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 11:37' value='13.411978221416' color='ff6600' showName='0'/>
<set name='08-24 12:35' value='41.772114387317' color='ff6600' showName='0'/>
<set name='08-24 13:00' value='68.907393939394' color='ff6600' showName='0'/>
<set name='08-24 14:00' value='139.14084388186' color='ff6600' showName='0'/>
<set name='08-24 15:00' value='174.02731391586' color='ff6600' showName='0'/>
<set name='08-24 16:00' value='240.17276497454' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='252.60578366446' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='270.88007162178' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='267.69778894472' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='265.22078387994' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='263.22535021188' color='ff6600' showName='0'/>
<set name='08-24 22:00' value='261.58528905289' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='260.21665536723' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr></tr></div></table></body></html>