<html>
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
<body><table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder"><tr><td colspan='3'><div id='content'><h1>Date range: start 2009-03-17 -> end 2009-03-24</h1></td></tr><tr><td colspan="3">

<div id="content"><table cellpadding="0" cellspacing="1" border="0" class="tableborder"><form action="http://192.168.0.20/kontrollbase/index.php/main/graphs" method="post" name="graphform"><input type="hidden" name="server_list_id" value="17" /><tr><th>Start date</th><th>End Date</th><th>&nbsp;</th></tr><tr><td class='td'><input type="text" name="sday" value="2009-03-17" id="sday" maxlength="10" size="15" style="width:50%"  />
<a href="#"onClick="cal.select(document.forms['graphform'].sday,'anchor1','yyyy-MM-dd'); return false;" NAME="anchor1" ID="anchor1"><img src='http://192.168.0.20/kontrollbase/includes/images/icon_calendar.gif' height='20' width='20' border='0'></a></td><td class='td'><input type="text" name="eday" value="2009-03-24" id="eday" maxlength="10" size="15" style="width:50%"  /> 
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
<set name='03-17 00:01' value='0.24837' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.248583' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.248797' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.249004' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.249209' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.249413' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.249612' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.249809' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.250008' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.254021' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.256882' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.257737' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.258011' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.258537' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.259003' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.259308' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.259435' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.260069' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.260866' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Query Rate' xAxisName='' yAxisName='Q/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.24837' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.248583' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.248797' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.249004' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.249209' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.249413' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.249612' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.249809' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.250008' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.254021' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.256882' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.257737' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.258011' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.258537' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.259003' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.259308' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.259435' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.260069' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.260866' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='20' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='20' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='20' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='20' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='20' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='20' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='20' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='20' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='20' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='24' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='24' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='25' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='26' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='26' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='25' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='25' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='25' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='25' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='24' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Connections' xAxisName='' yAxisName='connections' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='20' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='20' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='20' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='20' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='20' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='20' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='20' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='20' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='20' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='24' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='24' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='25' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='26' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='26' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='25' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='25' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='25' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='25' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='24' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.081' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.011' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.161' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.071' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.041' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.151' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.531' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.161' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 1 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.081' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.011' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.161' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.071' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.041' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.151' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.531' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.161' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.091' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.011' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.161' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.271' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.021' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.201' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.151' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.101' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.061' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.031' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.011' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.031' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.011' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.141' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.021' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.021' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.031' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.111' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 5 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.091' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.011' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.161' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.271' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.021' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.201' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.151' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.101' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.061' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.031' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.011' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.031' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.011' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.141' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.021' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.021' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.031' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.111' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.111' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.051' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.141' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.141' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.041' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.021' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.151' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.131' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.111' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.081' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.071' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.041' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.031' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.041' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.031' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.071' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.051' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.061' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.061' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.081' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 15 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.111' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.051' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.141' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.141' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.041' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.021' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.151' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.131' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.111' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.081' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.071' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.041' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.031' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.041' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.031' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.071' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.051' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.061' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.061' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.081' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='3452481536' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Total' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='3452481536' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='3452481536' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='101883904' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='99774464' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='103428096' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='101298176' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='104091648' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='102633472' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='100327424' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='103653376' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='157523968' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='155770880' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='153296896' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='151777280' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='150700032' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='148520960' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='146644992' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='145063936' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='143556608' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='141910016' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='140255232' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='287653888' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Used' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='101883904' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='99774464' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='103428096' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='101298176' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='104091648' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='102633472' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='100327424' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='103653376' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='157523968' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='155770880' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='153296896' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='151777280' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='150700032' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='148520960' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='146644992' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='145063936' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='143556608' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='141910016' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='140255232' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='287653888' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='3306520576' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Total' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='3306520576' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='3306520576' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='3301724160' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Free' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='3301724160' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='3301724160' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='3' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='1' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU User' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='3' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='1' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='1' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU System' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='1' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='1' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='93' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='95' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='96' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU Idle' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='93' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='95' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='95' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='96' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='10' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Schemas' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='10' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='10' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='94' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Tables' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='94' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='94' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='375175064' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='375175064' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='376223640' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='376223640' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='376223640' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='377272216' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='377272216' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='378320792' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='378320792' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='379369368' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='379369368' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='379369368' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='380417944' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='380417944' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='381466520' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='381466520' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='383563672' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='383563672' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='383563672' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Data Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='375175064' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='375175064' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='376223640' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='376223640' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='376223640' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='377272216' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='377272216' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='378320792' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='378320792' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='379369368' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='379369368' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='379369368' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='380417944' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='380417944' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='381466520' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='381466520' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='383563672' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='383563672' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='383563672' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Index Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='18688000' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='34' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='34' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='34' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='43' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='43' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='43' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='153321472' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='153321472' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='154370048' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='154370048' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='154370048' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='155418624' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='155418624' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='156467200' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='156467200' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='157515776' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='157515776' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='157515776' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='158564352' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='158564352' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='159612928' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='159612928' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='161710080' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='161710080' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='161710080' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='153321472' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='153321472' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='154370048' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='154370048' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='154370048' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='155418624' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='155418624' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='156467200' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='156467200' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='157515776' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='157515776' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='157515776' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='158564352' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='158564352' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='159612928' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='159612928' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='161710080' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='161710080' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='161710080' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='14860288' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='221853592' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='3827712' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='33424512' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='33424512' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='33424512' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='33424512' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='33424512' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='33424512' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='33424512' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='33424512' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='33424512' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='33373912' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='33392448' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='33391128' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='33388128' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='33386392' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='33382096' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='33385120' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='33385120' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='33349968' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='33385328' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_free_memory' xAxisName='' yAxisName='free' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='33424512' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='33424512' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='33424512' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='33424512' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='33424512' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='33424512' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='33424512' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='33424512' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='33424512' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='33373912' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='33392448' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='33391128' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='33388128' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='33386392' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='33382096' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='33385120' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='33385120' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='33349968' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='33385328' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.024456168562798' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.02450194901038' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.024547074687451' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.024591645247056' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.024635628670775' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.02467903648436' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.024721837088388' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.024764127270542' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.024805874658274' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.025450882200863' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.02600329916861' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.026087117761533' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.026124755007576' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.026160197468958' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.026212362500644' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.026265549211027' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.026296135825824' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.02635153841229' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.026444832408082' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_hits' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.024456168562798' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.02450194901038' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.024547074687451' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.024591645247056' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.024635628670775' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.02467903648436' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.024721837088388' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.024764127270542' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.024805874658274' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.025450882200863' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.02600329916861' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.026087117761533' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.026124755007576' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.026160197468958' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.026212362500644' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.026265549211027' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.026296135825824' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.02635153841229' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.026444832408082' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.0057209155532845' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0056947918785325' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0056690082759515' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0056435752214996' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0056184772011845' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.0055937076381292' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0055692518775274' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0055451202734964' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0055212983985657' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0061742089941281' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0063912813970879' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0064062843684596' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0063794081261033' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0063649532314907' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0063523930465224' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0063621497718016' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0063345131303269' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0064554583225224' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0065983990219967' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_inserts' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.0057209155532845' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0056947918785325' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0056690082759515' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0056435752214996' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0056184772011845' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.0055937076381292' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0055692518775274' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0055451202734964' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0055212983985657' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0061742089941281' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0063912813970879' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0064062843684596' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0063794081261033' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0063649532314907' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0063523930465224' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0063621497718016' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0063345131303269' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0064554583225224' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0065983990219967' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.0011371376185395' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.00113621613956' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0011353067106568' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0011344095920577' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.001133524291361' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.0011326505765757' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0011317879838244' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0011309367718884' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0011300964852563' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0011434328981945' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0011741961025821' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0011748474892775' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0011737534924452' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0011743998314711' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0011767542429599' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0011773739110265' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0011762915047836' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0011802761088666' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0011741649710702' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_queries_in_cache' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.0011371376185395' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.00113621613956' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0011353067106568' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0011344095920577' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.001133524291361' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.0011326505765757' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0011317879838244' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0011309367718884' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0011300964852563' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0011434328981945' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0011741961025821' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0011748474892775' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0011737534924452' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0011743998314711' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0011767542429599' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0011773739110265' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0011762915047836' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0011802761088666' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0011741649710702' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.0010018785975142' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0010018659745145' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0010018535165843' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0010018412272885' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0010018290998817' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.001001817131186' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0010018053148469' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0010017936544094' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0010017821436336' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0010017707765209' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0010017595565917' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0010017484748928' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0010017375349245' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0010017267310047' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0010017160606113' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0010017055183753' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0010016951106229' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0010016848234474' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0010016746631834' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_lowmem_prunes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.0010018785975142' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0010018659745145' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0010018535165843' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0010018412272885' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0010018290998817' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.001001817131186' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0010018053148469' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0010017936544094' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0010017821436336' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0010017707765209' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0010017595565917' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0010017484748928' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0010017375349245' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0010017267310047' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0010017160606113' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0010017055183753' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0010016951106229' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0010016848234474' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0010016746631834' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.058704879844903' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.058697797963475' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.058690703687571' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.058683809720207' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.058677006568298' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.058670292449093' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.05866356152513' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.058657020991138' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.058650564404889' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.058681274392447' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.058847182510007' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.059126299335405' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.059198732294519' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.059391135653714' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.059517666843993' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.059509513381497' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.059498267596943' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.059486961151341' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.059479238363184' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_not_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.058704879844903' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.058697797963475' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.058690703687571' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.058683809720207' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.058677006568298' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.058670292449093' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.05866356152513' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.058657020991138' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.058650564404889' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.058681274392447' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.058847182510007' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.059126299335405' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.059198732294519' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.059391135653714' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.059517666843993' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.059509513381497' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.059498267596943' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.059486961151341' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.059479238363184' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.001140894813568' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.001139948088589' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0011390137438255' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0011380920466346' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0011371824911243' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.0011362848389477' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0011353986135182' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0011345240807073' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0011336607725236' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.001132808239069' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0011319667443804' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0011311356169581' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0011303151193339' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0011295048253498' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0011287045458446' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0011279138781441' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0011271332967189' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0011263617585513' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0011255997387525' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.001140894813568' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.001139948088589' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0011390137438255' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0011380920466346' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0011371824911243' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.0011362848389477' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0011353986135182' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0011345240807073' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0011336607725236' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.001132808239069' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0011319667443804' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0011311356169581' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0011303151193339' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0011295048253498' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0011287045458446' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0011279138781441' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0011271332967189' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0011263617585513' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0011255997387525' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.0011596807887104' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0011586078337342' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0011575489096689' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0011565043195192' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0011554734899409' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.0011544561508074' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0011534517619873' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0011524606248016' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0011514822088601' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0011505160042782' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0011495623102978' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0011486203658859' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0011476904685784' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0011467721353964' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0011458651519572' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0011449690618967' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0011440844029481' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0011432099930248' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0011423463705862' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.0011596807887104' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0011586078337342' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0011575489096689' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0011565043195192' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0011554734899409' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.0011544561508074' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0011534517619873' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0011524606248016' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0011514822088601' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0011505160042782' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0011495623102978' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0011486203658859' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0011476904685784' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0011467721353964' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0011458651519572' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0011449690618967' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0011440844029481' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0011432099930248' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0011423463705862' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.052464178902598' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.052456113212406' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.052451766864684' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.052443890439611' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.052436117772083' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.052430263956476' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.052422588099365' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.05241510364632' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.052407715256219' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.052588032383961' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.052787269608059' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.052807311072917' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.052801128702687' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.052807110332931' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.052814734096408' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.052832408942374' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.052822921963887' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.052831908534305' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.052865993452067' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Slow_queries' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.052464178902598' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.052456113212406' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.052451766864684' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.052443890439611' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.052436117772083' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.052430263956476' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.052422588099365' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.05241510364632' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.052407715256219' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.052588032383961' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.052787269608059' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.052807311072917' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.052801128702687' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.052807110332931' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.052814734096408' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.052832408942374' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.052822921963887' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.052831908534305' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.052865993452067' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='6.1610185185185' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='6.2026967592593' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='6.2443865740741' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='6.2860648148148' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='6.3277430555556' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='6.3694212962963' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='6.4111111111111' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='6.4527893518519' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='6.4944675925926' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='6.5361574074074' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='6.5778356481481' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='6.619525462963' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='6.6612037037037' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='6.7028819444444' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='6.7445601851852' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='6.78625' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='6.8279166666667' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='6.8696064814815' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='6.9112847222222' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1.1574074074074E-08' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Uptime' xAxisName='' yAxisName='days' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='6.1610185185185' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='6.2026967592593' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='6.2443865740741' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='6.2860648148148' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='6.3277430555556' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='6.3694212962963' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='6.4111111111111' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='6.4527893518519' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='6.4944675925926' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='6.5361574074074' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='6.5778356481481' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='6.619525462963' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='6.6612037037037' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='6.7028819444444' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='6.7445601851852' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='6.78625' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='6.8279166666667' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='6.8696064814815' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='6.9112847222222' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1.1574074074074E-08' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.050369542674221' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.050392345399347' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.050418459171663' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.050440635149765' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.050462518999775' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.050485933587489' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.050507149046794' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.050528179207599' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.050548939446324' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.051337864160192' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.051757929001892' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.051852643781462' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.05187328505303' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.051938564637585' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.051987592881781' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.052042753934631' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.052053341741082' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0522304265636' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.052430581024391' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_immediate' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.050369542674221' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.050392345399347' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.050418459171663' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.050440635149765' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.050462518999775' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.050485933587489' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.050507149046794' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.050528179207599' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.050548939446324' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.051337864160192' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.051757929001892' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.051852643781462' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.05187328505303' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.051938564637585' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.051987592881781' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.052042753934631' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.052053341741082' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0522304265636' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.052430581024391' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.0010018785975142' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0010018659745145' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0010018535165843' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0010018412272885' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0010018290998817' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.001001817131186' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0010018053148469' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0010017936544094' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0010017821436336' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0010017707765209' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0010017595565917' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0010017484748928' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0010017375349245' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0010017267310047' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0010017160606113' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0010017055183753' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0010016951106229' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0010016848234474' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0010016746631834' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_waited' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.0010018785975142' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0010018659745145' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0010018535165843' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0010018412272885' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0010018290998817' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.001001817131186' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0010018053148469' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0010017936544094' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0010017821436336' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0010017707765209' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0010017595565917' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0010017484748928' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0010017375349245' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0010017267310047' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0010017160606113' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0010017055183753' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0010016951106229' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0010016848234474' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0010016746631834' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.001007514390057' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0010074638980581' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0010074140663374' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0010073649091538' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0010073163995266' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.0010072685247439' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0010072212593876' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0010071746176377' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0010071285745346' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0010017707765209' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0010052786697752' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0010034969497855' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0010017375349245' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0010034534620093' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0010051481818338' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0010051165551258' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0010050853318688' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0010050544703421' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0010066986527335' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.001007514390057' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0010074638980581' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0010074140663374' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0010073649091538' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0010073163995266' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.0010072685247439' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0010072212593876' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0010071746176377' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0010071285745346' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0010017707765209' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0010052786697752' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0010034969497855' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0010017375349245' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0010034534620093' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0010051481818338' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0010051165551258' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0010050853318688' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0010050544703421' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0010066986527335' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.0010450863403418' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0010447833883485' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0010444843980242' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0010441894549231' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0010438983971598' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.0010436111484633' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0010433275563258' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0010430477058263' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0010427714472076' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0010424986365021' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0010475080279769' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0010472088221049' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0010469134429602' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0010483484681306' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0010480496971153' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0010477545145071' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0010474630974417' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0010471750565258' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0010468905691343' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_created' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.0010450863403418' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0010447833883485' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0010444843980242' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0010441894549231' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0010438983971598' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.0010436111484633' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0010433275563258' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0010430477058263' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0010427714472076' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0010424986365021' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0010475080279769' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0010472088221049' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0010469134429602' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0010483484681306' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0010480496971153' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0010477545145071' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0010474630974417' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0010471750565258' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0010468905691343' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Seconds_Behind_Master' xAxisName='' yAxisName='seconds' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.0010601151204557' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0010597111844646' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0010593125306989' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0010589192732308' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.001058531196213' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.001058148197951' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0010577700751011' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0010573969411018' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0010570285962767' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0010566648486694' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0010826991598117' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0010821783199604' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0010816641414492' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0010811563572192' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0010806548487293' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.001080159363637' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0010796701992772' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0010791867020255' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0010787091696183' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.0010601151204557' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0010597111844646' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0010593125306989' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0010589192732308' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.001058531196213' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.001058148197951' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0010577700751011' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0010573969411018' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0010570285962767' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0010566648486694' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0010826991598117' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0010821783199604' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0010816641414492' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0010811563572192' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0010806548487293' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.001080159363637' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0010796701992772' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0010791867020255' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0010787091696183' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.0010018785975142' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0010018659745145' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0010018535165843' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0010018412272885' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0010018290998817' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.001001817131186' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0010018053148469' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0010017936544094' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0010017821436336' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0010017707765209' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0010351911318348' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0010349694978555' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.001034750698489' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0010345346200933' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0010343212122252' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0010341103675051' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0010339022124584' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.001033696468947' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0010334932636673' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.0010018785975142' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0010018659745145' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0010018535165843' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0010018412272885' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0010018290998817' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.001001817131186' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0010018053148469' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0010017936544094' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0010017821436336' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0010017707765209' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0010351911318348' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0010349694978555' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.001034750698489' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0010345346200933' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0010343212122252' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0010341103675051' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0010339022124584' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.001033696468947' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0010334932636673' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.011982281068246' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.011908487011884' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.011837511468634' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.011765655955634' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.01169474700805' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.01162476604436' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.011555675909879' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.011487497331939' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.011420193825942' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.011353730317819' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.011288127391897' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.011223332698054' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.011159366703271' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.011125550611349' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.011062979424433' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.011001159752495' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.010940128692798' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.010879804695266' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.010820224907266' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.011982281068246' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.011908487011884' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.011837511468634' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.011765655955634' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.01169474700805' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.01162476604436' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.011555675909879' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.011487497331939' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.011420193825942' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.011353730317819' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.011288127391897' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.011223332698054' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.011159366703271' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.011125550611349' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.011062979424433' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.011001159752495' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.010940128692798' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.010879804695266' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.010820224907266' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.097311937360044' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.097299212745352' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.097305014689119' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0972851398228' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.097281988670555' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.097297050069233' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.097273830155979' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.097267225808535' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.097264270515146' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.09743471855278' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.097708749395152' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.097734373442765' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.097707718825148' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.097771185694379' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.097821855747945' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.097835922310227' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.097821328559902' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.097848706224075' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.097849121220495' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.097311937360044' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.097299212745352' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.097305014689119' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0972851398228' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.097281988670555' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.097297050069233' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.097273830155979' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.097267225808535' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.097264270515146' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.09743471855278' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.097708749395152' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.097734373442765' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.097707718825148' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.097771185694379' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.097821855747945' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.097835922310227' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.097821328559902' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.097848706224075' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.097849121220495' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.010169434467004' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.010107821605373' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.010047014448162' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0099870303949801' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.009927836522369' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.0098694173187139' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0098117417677643' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0097548271724294' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0096986430758373' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0096431601986103' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0095883957242775' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0095343059516337' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0094809079662501' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0094471680748158' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0093949685102878' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0093433958917473' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.009292481167321' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0092421563044409' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0091924522930326' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.010169434467004' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.010107821605373' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.010047014448162' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0099870303949801' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.009927836522369' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.0098694173187139' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0098117417677643' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0097548271724294' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0096986430758373' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0096431601986103' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0095883957242775' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0095343059516337' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0094809079662501' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0094471680748158' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0093949685102878' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0093433958917473' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.009292481167321' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0092421563044409' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0091924522930326' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.43000028554682' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.43001366453137' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.43023181005162' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.43021217566781' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.43022206552933' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.43030996260344' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.43028942807626' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.4303219448236' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.43033265849494' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.4305921547517' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.43103563102098' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.43107936327538' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.43105900668603' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.43148439984874' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.43172949736585' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.4317593650014' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.43175642616437' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.4318043010173' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.43179538127894' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_write_requests' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.43000028554682' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.43001366453137' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.43023181005162' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.43021217566781' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.43022206552933' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.43030996260344' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.43028942807626' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.4303219448236' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.43033265849494' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.4305921547517' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.43103563102098' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.43107936327538' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.43105900668603' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.43148439984874' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.43172949736585' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.4317593650014' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.43175642616437' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.4318043010173' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.43179538127894' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='2' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_free' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='2' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.001' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='8192' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_total' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='8192' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='8192' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='0.001' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.12173370504516' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.12173041706396' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.12172694920438' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.12172374962255' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.12172059218938' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.12171747607747' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.12171418255344' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.12171114810025' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.12170815259427' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.12171206465459' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.1217231777592' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.12175841846949' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.12176388985419' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.12179519416227' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.12180895097215' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.12180527755606' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.12180205854234' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.12180184117506' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.12180350339538' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_disk_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.12173370504516' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.12173041706396' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.12172694920438' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.12172374962255' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.12172059218938' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.12171747607747' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.12171418255344' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.12171114810025' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.12170815259427' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.12171206465459' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.1217231777592' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.12175841846949' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.12176388985419' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.12179519416227' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.12180895097215' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.12180527755606' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.12180205854234' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.12180184117506' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.12180350339538' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.001007514390057' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0010074638980581' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0010074140663374' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0010073649091538' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0010073163995266' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.0010072685247439' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0010072212593876' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0010071746176377' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0010071285745346' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0010070831060837' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.001007038226367' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0010069938995711' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0010069501396978' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0010069069240187' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.001006864242445' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.001006822073501' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0010067804424917' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0010067392937894' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0010066986527335' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.001007514390057' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0010074638980581' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0010074140663374' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0010073649091538' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0010073163995266' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.0010072685247439' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0010072212593876' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0010071746176377' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0010071285745346' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0010070831060837' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.001007038226367' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0010069938995711' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0010069501396978' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0010069069240187' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.001006864242445' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.001006822073501' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0010067804424917' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0010067392937894' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0010066986527335' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.67463876824118' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.67461493376723' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.67459016894804' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.67456697280139' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.6745440822217' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.67452149121054' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.67449797804737' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.67447597668967' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.67445425771936' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.67494337764997' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.67512308098359' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.67534305427091' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.6753859551577' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.67552501946889' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.67560916719579' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.67559903262998' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.67557266261196' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.67565385302274' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.67575528984233' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.67463876824118' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.67461493376723' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.67459016894804' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.67456697280139' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.6745440822217' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.67452149121054' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.67449797804737' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.67447597668967' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.67445425771936' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.67494337764997' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.67512308098359' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.67534305427091' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.6753859551577' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.67552501946889' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.67560916719579' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.67559903262998' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.67557266261196' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.67565385302274' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.67575528984233' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.056228888321135' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.056199258088533' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.056169921132869' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.056141074834842' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.056112608534214' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.056084514771459' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.056056686886193' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.056029317281322' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.056002298965287' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.056689150806412' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.056945101834338' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.057014141664933' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.056999013080163' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.057020333984311' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.057031095018276' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.057039922774128' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.057008150091875' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.057124838678155' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.057267008297956' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_select' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.056228888321135' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.056199258088533' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.056169921132869' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.056141074834842' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.056112608534214' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.056084514771459' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.056056686886193' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.056029317281322' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.056002298965287' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.056689150806412' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.056945101834338' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.057014141664933' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.056999013080163' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.057020333984311' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.057031095018276' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.057039922774128' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.057008150091875' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.057124838678155' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.057267008297956' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.026804415455597' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.026860540796734' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.026915868882237' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.026970510903748' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.027024433116219' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.027077649649839' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.027130127094165' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.027181973414454' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.027233154287303' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.027304885218266' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.027372234196982' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.027424701054505' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.02747308210895' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.027520861500633' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.02756805038354' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.027616319764229' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.027662394987897' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.027709506110855' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.027754419017475' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_insert' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.026804415455597' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.026860540796734' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.026915868882237' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.026970510903748' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.027024433116219' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.027077649649839' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.027130127094165' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.027181973414454' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.027233154287303' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.027304885218266' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.027372234196982' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.027424701054505' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.02747308210895' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.027520861500633' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.02756805038354' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.027616319764229' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.027662394987897' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.027709506110855' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.027754419017475' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.0012310674942515' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.001229514865286' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0012316895730425' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0012301534110577' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0012286374852072' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.0012289585294321' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0012274696707106' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0012260004555882' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0012245500978397' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0012355132772824' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.001309681960146' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0013077315811284' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0013058061467035' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0013039046568208' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0013020266675819' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0013001712340449' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0012983394696338' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0012965289267338' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0012947407202726' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_delete' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.0012310674942515' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.001229514865286' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0012316895730425' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0012301534110577' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0012286374852072' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.0012289585294321' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0012274696707106' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0012260004555882' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0012245500978397' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0012355132772824' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.001309681960146' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0013077315811284' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0013058061467035' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0013039046568208' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.0013020266675819' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.0013001712340449' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0012983394696338' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0012965289267338' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0012947407202726' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='0.0010582365229414' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0010578452099501' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0010574590141145' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0010570780459423' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0010567020963314' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.001056331066765' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0010559647602542' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0010556032866923' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0010552464526431' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0010602064017113' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0010756609334448' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0010769328952821' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0010764515366759' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0010777028952099' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.001078938788118' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.001080159363637' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0010796701992772' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0010825563489202' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0010837331591684' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_update' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='0.0010582365229414' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='0.0010578452099501' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='0.0010574590141145' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='0.0010570780459423' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='0.0010567020963314' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='0.001056331066765' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='0.0010559647602542' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='0.0010556032866923' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='0.0010552464526431' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='0.0010602064017113' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='0.0010756609334448' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='0.0010769328952821' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='0.0010764515366759' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='0.0010777028952099' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='0.001078938788118' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='0.001080159363637' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='0.0010796701992772' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='0.0010825563489202' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='0.0010837331591684' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='139.76531996273' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='139.80595731024' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='139.84607656877' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='139.88567083275' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='139.92473253987' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='139.9634193321' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='140.00129260543' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='140.03892050703' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='140.07633277612' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='140.47325950376' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='140.7113904896' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='140.78749735543' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='140.8286564685' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='140.88152207885' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='140.9337343195' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='140.98144396008' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='141.01161150777' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='141.09396428848' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='141.19184271563' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_received' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='139.76531996273' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='139.80595731024' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='139.84607656877' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='139.88567083275' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='139.92473253987' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='139.9634193321' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='140.00129260543' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='140.03892050703' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='140.07633277612' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='140.47325950376' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='140.7113904896' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='140.78749735543' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='140.8286564685' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='140.88152207885' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='140.9337343195' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='140.98144396008' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='141.01161150777' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='141.09396428848' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='141.19184271563' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
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
<set name='03-17 00:01' value='877.391779633' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='874.45462043279' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='871.55698544063' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='868.69751581614' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='865.87571815034' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='863.0917832962' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='860.341731658' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='857.62876734688' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='854.95165935394' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='855.88649499579' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='854.93009809528' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='852.78495682141' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='866.26633804089' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='863.87264322802' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='861.46799375354' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='859.130127641' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='856.58231457185' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='854.61968311841' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='852.9089083708' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_sent' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-17 00:01' value='877.391779633' color='ff6600' showName='0'/>
<set name='03-17 01:01' value='874.45462043279' color='ff6600' showName='0'/>
<set name='03-17 02:01' value='871.55698544063' color='ff6600' showName='0'/>
<set name='03-17 03:01' value='868.69751581614' color='ff6600' showName='0'/>
<set name='03-17 04:01' value='865.87571815034' color='ff6600' showName='0'/>
<set name='03-17 05:01' value='863.0917832962' color='ff6600' showName='0'/>
<set name='03-17 06:01' value='860.341731658' color='ff6600' showName='0'/>
<set name='03-17 07:01' value='857.62876734688' color='ff6600' showName='0'/>
<set name='03-17 08:01' value='854.95165935394' color='ff6600' showName='0'/>
<set name='03-17 09:01' value='855.88649499579' color='ff6600' showName='0'/>
<set name='03-17 10:01' value='854.93009809528' color='ff6600' showName='0'/>
<set name='03-17 11:01' value='852.78495682141' color='ff6600' showName='0'/>
<set name='03-17 12:01' value='866.26633804089' color='ff6600' showName='0'/>
<set name='03-17 13:01' value='863.87264322802' color='ff6600' showName='0'/>
<set name='03-17 14:01' value='861.46799375354' color='ff6600' showName='0'/>
<set name='03-17 15:01' value='859.130127641' color='ff6600' showName='0'/>
<set name='03-17 16:01' value='856.58231457185' color='ff6600' showName='0'/>
<set name='03-17 17:01' value='854.61968311841' color='ff6600' showName='0'/>
<set name='03-17 18:01' value='852.9089083708' color='ff6600' showName='0'/>
<set name='03-18 02:18' value='1' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr></tr></div></table></body></html>