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
<body><table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder"><tr><td colspan='3'><div id='content'><h1>Date range: start 2009-10-26 -> end 2009-11-02</h1></td></tr><tr><td colspan="3">

<div id="content"><table cellpadding="0" cellspacing="1" border="0" class="tableborder"><form action="http://testing.kontrollbase.com/index.php/main/graphs" method="post" name="graphform"><input type="hidden" name="server_list_id" value="12" /><tr><th>Start date</th><th>End Date</th><th>&nbsp;</th></tr><tr><td class='td'><input type="text" name="sday" value="2009-10-26" id="sday" maxlength="10" size="15" style="width:50%"  />
<a href="#"onClick="cal.select(document.forms['graphform'].sday,'anchor1','yyyy-MM-dd'); return false;" NAME="anchor1" ID="anchor1"><img src='http://testing.kontrollbase.com/includes/images/icon_calendar.gif' height='20' width='20' border='0'></a></td><td class='td'><input type="text" name="eday" value="2009-11-02" id="eday" maxlength="10" size="15" style="width:50%"  /> 
<a href="#"onClick="cal.select(document.forms['graphform'].eday,'anchor1','yyyy-MM-dd'); return false;" NAME="anchor1" ID="anchor1"><img src='http://testing.kontrollbase.com/includes/images/icon_calendar.gif' height='20' width='20' border='0'></a></td><td><input type="submit" name="submit" value="Submit"  /></td></tr></table></td></tr><table><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Query Rate' xAxisName='' yAxisName='Q/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.112111' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.122995' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.122385' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.146326' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.133631' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Query Rate' xAxisName='' yAxisName='Q/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.112111' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.122995' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.122385' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.146326' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.133631' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Connections' xAxisName='' yAxisName='connections' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='13' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='10' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='10' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='11' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='11' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Connections' xAxisName='' yAxisName='connections' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='13' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='10' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='10' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='11' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='11' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 1 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.011' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.051' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 1 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.011' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.051' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 5 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.011' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 5 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.011' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 15 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 15 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Total' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='36707921920' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='36707921920' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='36707921920' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='36707921920' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='36707921920' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Total' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='36707921920' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='36707921920' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='36707921920' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='36707921920' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='36707921920' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Used' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='30752464896' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='30749306880' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='30745452544' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='30739750912' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='30726803456' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Used' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='30752464896' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='30749306880' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='30745452544' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='30739750912' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='30726803456' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Total' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Total' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Free' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Free' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU User' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='1' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU User' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='1' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU System' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU System' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU Idle' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='98' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='99' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='99' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='99' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='99' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU Idle' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='98' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='99' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='99' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='99' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='99' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Schemas' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='4' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='4' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='4' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='4' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='4' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Schemas' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='4' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='4' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='4' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='4' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='4' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Tables' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='57' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='57' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='57' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='57' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='57' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Tables' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='57' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='57' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='57' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='57' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='57' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Data Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='685878' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='702262' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='898870' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='1193782' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='2258742' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Data Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='685878' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='702262' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='898870' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='1193782' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='2258742' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Index Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='303104' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='303104' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='303104' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='303104' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='303104' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Index Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='303104' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='303104' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='303104' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='303104' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='303104' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='11' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='11' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='11' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='11' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='11' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='11' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='11' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='11' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='11' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='11' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='26' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='26' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='26' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='26' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='26' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='26' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='26' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='26' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='26' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='26' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='180224' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='196608' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='393216' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='688128' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='1753088' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='180224' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='196608' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='393216' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='688128' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='1753088' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='212992' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='212992' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='212992' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='212992' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='212992' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='212992' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='212992' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='212992' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='212992' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='212992' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='505654' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='505654' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='505654' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='505654' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='505654' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='505654' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='505654' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='505654' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='505654' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='505654' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='90112' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='90112' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='90112' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='90112' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='90112' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='90112' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='90112' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='90112' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='90112' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='90112' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_free_memory' xAxisName='' yAxisName='free' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='134178896' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='133988496' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='134177904' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='134177400' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='134180408' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_free_memory' xAxisName='' yAxisName='free' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='134178896' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='133988496' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='134177904' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='134177400' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='134180408' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_hits' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0031135265700483' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.010014423076923' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0089204273346841' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0090859548072663' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.007888906485074' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_hits' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0031135265700483' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.010014423076923' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0089204273346841' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0090859548072663' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.007888906485074' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_inserts' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.010963768115942' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.028043269230769' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.019419598452754' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.020494904740806' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.015015361469633' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_inserts' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.010963768115942' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.028043269230769' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.019419598452754' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.020494904740806' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.015015361469633' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_queries_in_cache' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0052270531400966' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.027442307692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.003394547798858' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0024399645547187' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0019501939979412' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_queries_in_cache' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0052270531400966' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.027442307692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.003394547798858' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0024399645547187' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0019501939979412' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_lowmem_prunes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0013019323671498' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0013004807692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0011841959845275' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0011107665042091' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0010791828331618' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_lowmem_prunes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0013019323671498' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0013004807692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0011841959845275' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0011107665042091' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0010791828331618' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_not_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0049251207729469' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0055072115384615' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.026050653895745' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.038882144439521' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.044233826906327' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_not_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0049251207729469' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0055072115384615' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.026050653895745' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.038882144439521' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.044233826906327' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.008548309178744' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0052067307692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0068942715048812' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0045445281346921' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0035338506611767' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.008548309178744' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0052067307692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0068942715048812' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0045445281346921' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0035338506611767' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.010057971014493' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0064086538461538' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0091046233192116' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0058737261852016' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0044840446591179' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.010057971014493' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0064086538461538' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0091046233192116' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0058737261852016' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0044840446591179' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Slow_queries' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0013019323671498' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0013004807692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0011841959845275' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0011107665042091' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0010791828331618' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Slow_queries' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0013019323671498' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0013004807692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0011841959845275' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0011107665042091' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0010791828331618' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Uptime' xAxisName='' yAxisName='days' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.038333333333333' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.038518518518519' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.062835648148148' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.10449074074074' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.14616898148148' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Uptime' xAxisName='' yAxisName='days' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.038333333333333' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.038518518518519' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.062835648148148' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.10449074074074' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.14616898148148' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_immediate' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.034514492753623' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.039161057692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.034523669184012' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.038549844926894' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.033860875762135' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_immediate' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.034514492753623' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.039161057692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.034523669184012' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.038549844926894' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.033860875762135' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_waited' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0013019323671498' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0013004807692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0011841959845275' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0011107665042091' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0010791828331618' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_waited' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0013019323671498' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0013004807692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0011841959845275' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0011107665042091' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0010791828331618' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0013019323671498' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0013004807692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0011841959845275' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0011107665042091' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0010791828331618' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0013019323671498' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0013004807692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0011841959845275' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0011107665042091' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0010791828331618' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_created' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0049251207729469' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0040048076923077' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0028419598452754' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0022184315463004' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0019501939979412' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_created' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0049251207729469' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0040048076923077' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0028419598452754' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0022184315463004' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0019501939979412' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Seconds_Behind_Master' xAxisName='' yAxisName='seconds' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Seconds_Behind_Master' xAxisName='' yAxisName='seconds' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.009756038647343' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0028028846153846' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0022893718916928' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0017753655294639' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0015542798321324' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.009756038647343' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0028028846153846' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0022893718916928' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0017753655294639' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0015542798321324' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.016700483091787' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0013004807692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0011841959845275' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0011107665042091' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0010791828331618' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.016700483091787' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0013004807692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0011841959845275' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0011107665042091' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0010791828331618' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0013019323671498' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.02053125' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.018867010499171' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.011744350908285' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0086807348166917' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0013019323671498' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.02053125' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.018867010499171' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.011744350908285' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0086807348166917' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.39170048309179' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0058076923076923' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.018130226561061' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.028027027027027' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.031881304933091' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.39170048309179' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0058076923076923' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.018130226561061' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.028027027027027' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.031881304933091' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0013019323671498' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.014221153846154' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.014077914901455' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.008864421798848' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0066219811544857' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0013019323671498' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.014221153846154' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.014077914901455' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.008864421798848' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0066219811544857' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_write_requests' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.89773913043478' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.00490625' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.03618143304476' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.056383252104564' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.064979729194711' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_write_requests' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.89773913043478' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.00490625' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.03618143304476' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.056383252104564' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.064979729194711' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_free' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='1572623' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='1572768' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='1572729' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='1572711' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='1572693' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_free' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='1572623' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='1572768' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='1572729' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='1572711' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='1572693' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_total' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='1572864' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='1572864' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='1572864' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='1572864' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='1572864' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_total' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='1572864' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='1572864' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='1572864' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='1572864' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='1572864' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_disk_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0016038647342995' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0013004807692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.059205931110702' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.095926894107222' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.11161841792699' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_disk_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0016038647342995' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0013004807692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.059205931110702' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.095926894107222' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.11161841792699' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.002207729468599' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0022019230769231' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0017367839381101' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0014430660168365' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0013167313326471' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.002207729468599' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0022019230769231' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0017367839381101' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0014430660168365' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0013167313326471' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0070386473429952' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.025038461538462' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.32297458095414' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.5167288435977' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.59487124871328' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0070386473429952' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.025038461538462' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.32297458095414' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.5167288435977' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.59487124871328' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_select' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.01337922705314' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.031949519230769' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.041523116596058' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.053946389011963' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.053181487053607' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_select' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.01337922705314' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.031949519230769' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.041523116596058' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.053946389011963' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.053181487053607' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_insert' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0043212560386473' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0016009615384615' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0026577638607478' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0035476295968099' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0039297648269855' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_insert' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0043212560386473' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0016009615384615' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0026577638607478' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0035476295968099' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0039297648269855' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_delete' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0013019323671498' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0013004807692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0011841959845275' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0011107665042091' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0010791828331618' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_delete' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.0013019323671498' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0013004807692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0011841959845275' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0011107665042091' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0010791828331618' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_update' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.002207729468599' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0013004807692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0011841959845275' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0012215330084183' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0011583656663235' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_update' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='0.002207729468599' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='0.0013004807692308' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='0.0011841959845275' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='0.0012215330084183' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='0.0011583656663235' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_received' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='22.488828502415' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='12.190504807692' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='33.755756124516' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='49.989587948604' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='54.771399160662' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_received' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='22.488828502415' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='12.190504807692' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='33.755756124516' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='49.989587948604' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='54.771399160662' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://testing.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_sent' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='31.7288647343' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='170.84675480769' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='144.38478541168' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='135.9525919362' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='129.85161137065' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_sent' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='11-01 19:19' value='31.7288647343' color='ff6600' showName='0'/>
<set name='11-01 20:25' value='170.84675480769' color='ff6600' showName='0'/>
<set name='11-01 21:00' value='144.38478541168' color='ff6600' showName='0'/>
<set name='11-01 22:00' value='135.9525919362' color='ff6600' showName='0'/>
<set name='11-01 23:00' value='129.85161137065' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr></tr></div></table></body></html>