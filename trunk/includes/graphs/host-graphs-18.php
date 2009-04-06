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

<div id="content"><table cellpadding="0" cellspacing="1" border="0" class="tableborder"><form action="http://192.168.0.20/kontrollbase/index.php/main/graphs" method="post" name="graphform"><input type="hidden" name="server_list_id" value="18" /><tr><th>Start date</th><th>End Date</th><th>&nbsp;</th></tr><tr><td class='td'><input type="text" name="sday" value="2009-03-17" id="sday" maxlength="10" size="15" style="width:50%"  />
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
<set name='03-18 04:12' value='0.0718119' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.00510365' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0058902' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.00881582' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.01030927' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0118457' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0160698' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0173911' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0186736' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0199227' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0211396' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0223256' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0234816' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0246091' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0257088' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.026782' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0278295' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0288521' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.029851' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0308267' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0317802' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0330381' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0339456' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0349896' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0378456' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0426712' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0490675' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0564213' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0650539' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0677441' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0795596' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0815269' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0836051' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.085493' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0878742' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0897517' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0915254' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0932654' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0949726' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0966476' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0982913' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0999046' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Query Rate' xAxisName='' yAxisName='Q/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0718119' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.00510365' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0058902' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.00881582' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.01030927' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0118457' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0160698' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0173911' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0186736' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0199227' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0211396' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0223256' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0234816' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0246091' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0257088' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.026782' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0278295' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0288521' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.029851' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0308267' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0317802' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0330381' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0339456' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0349896' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0378456' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0426712' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0490675' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0564213' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0650539' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0677441' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0795596' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0815269' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0836051' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.085493' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0878742' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0897517' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0915254' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0932654' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0949726' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0966476' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0982913' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0999046' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='14' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='14' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='14' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='16' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='16' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='17' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='16' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='16' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='16' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='15' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='11' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='9' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='2' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='2' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='2' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='2' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='2' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='2' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='2' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='2' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='2' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='2' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='5' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='17' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='17' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='18' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='18' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='11' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='11' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='11' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='11' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Connections' xAxisName='' yAxisName='connections' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='14' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='14' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='14' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='16' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='16' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='17' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='16' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='16' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='16' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='15' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='11' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='9' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='2' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='2' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='2' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='2' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='2' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='2' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='2' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='2' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='2' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='2' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='5' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='17' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='17' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='18' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='18' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='20' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='11' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='11' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='11' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='11' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.251' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.151' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.091' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.121' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.161' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.041' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.241' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.111' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.241' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.101' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.081' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 1 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.251' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.151' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.091' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.121' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.161' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.041' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.241' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.111' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.241' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.081' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.101' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.081' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.311' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.121' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.041' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.041' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.031' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.031' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.071' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.031' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.041' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.041' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.051' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.031' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.041' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.021' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 5 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.311' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.121' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.041' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.041' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.031' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.031' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.071' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.031' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.041' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.041' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.051' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.031' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.041' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.021' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.241' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.051' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.011' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 15 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.241' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.051' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.021' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.011' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='1060134912' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='1051709440' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Total' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='1060134912' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='1051709440' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='1051709440' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='130940928' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='82878464' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='77058048' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='70684672' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='64811008' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='47505408' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='139223040' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='120307712' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='117293056' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='112214016' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='107745280' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='103682048' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='99491840' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='95301632' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='90857472' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='86667264' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='83128320' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='79818752' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='75882496' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='72708096' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='69283840' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='13434880' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='37785600' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='18890752' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='32018432' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='35885056' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='36622336' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='32903168' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='37072896' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='33554432' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='56205312' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='51625984' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='49643520' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='45580288' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='36839424' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='41603072' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='38191104' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='35717120' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='35672064' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='35655680' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='34947072' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='34828288' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Used' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='130940928' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='82878464' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='77058048' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='70684672' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='64811008' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='47505408' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='139223040' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='120307712' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='117293056' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='112214016' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='107745280' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='103682048' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='99491840' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='95301632' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='90857472' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='86667264' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='83128320' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='79818752' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='75882496' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='72708096' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='69283840' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='13434880' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='37785600' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='18890752' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='32018432' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='35885056' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='36622336' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='32903168' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='37072896' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='33554432' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='56205312' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='51625984' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='49643520' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='45580288' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='36839424' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='41603072' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='38191104' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='35717120' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='35672064' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='35655680' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='34947072' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='34828288' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='2080366592' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Total' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='2080366592' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='2080305152' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='2080362496' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='2080288768' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Free' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='2080305152' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='2080362496' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='2080366592' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='2080288768' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='2080288768' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='4' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='1' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='1' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='1' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='1' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='2' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='1' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='1' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='1' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='1' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU User' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='4' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='1' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='1' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='1' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='1' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='2' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='1' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='1' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='1' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='1' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='1' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU System' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='1' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='93' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='99' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='98' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='98' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='98' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='98' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='95' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='98' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='98' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='98' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='98' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='98' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='98' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='98' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='99' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU Idle' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='93' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='99' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='98' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='98' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='99' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='98' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='98' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='95' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='98' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='98' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='98' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='98' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='98' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='98' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='98' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='99' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='99' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='7' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='4' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='4' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Schemas' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='7' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='4' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='4' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='4' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='4' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='75' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='50' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='50' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Tables' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='75' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='50' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='50' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='50' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='50' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='160100624' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='125522040' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='125522040' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='125522040' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='125522040' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='125522040' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='125522124' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='126570700' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='126570700' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='126570700' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='126570700' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='126570700' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='127619276' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='127619276' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='127619276' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='127619276' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='127619276' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='127619276' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='128667852' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='128667852' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='128667852' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='128667852' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='128667852' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='129716428' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='129716428' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='129716428' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='129716428' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='129716428' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='130765004' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='130765004' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='130765004' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='130765004' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='130765004' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='130765004' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='132862156' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='132862156' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='132862156' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='132862156' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='132862156' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='133927116' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='133927116' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='133927116' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Data Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='160100624' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='125522040' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='125522040' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='125522040' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='125522040' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='125522040' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='125522124' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='126570700' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='126570700' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='126570700' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='126570700' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='126570700' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='127619276' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='127619276' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='127619276' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='127619276' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='127619276' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='127619276' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='128667852' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='128667852' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='128667852' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='128667852' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='128667852' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='129716428' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='129716428' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='129716428' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='129716428' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='129716428' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='130765004' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='130765004' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='130765004' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='130765004' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='130765004' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='130765004' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='132862156' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='132862156' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='132862156' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='132862156' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='132862156' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='133927116' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='133927116' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='133927116' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='14984192' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='350208' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='350208' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='350208' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='350208' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='350208' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='399360' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='399360' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Index Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='14984192' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='350208' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='350208' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='350208' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='350208' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='350208' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='382976' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='382976' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='399360' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='399360' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='21' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='12' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='12' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='21' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='12' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='12' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='12' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='12' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='37' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='25' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='25' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='37' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='25' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='25' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='25' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='25' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='159072256' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='125059072' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='125059072' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='125059072' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='125059072' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='125059072' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='125059072' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='126107648' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='126107648' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='126107648' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='126107648' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='126107648' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='127156224' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='127156224' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='127156224' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='127156224' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='127156224' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='127156224' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='128204800' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='128204800' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='128204800' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='128204800' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='128204800' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='129253376' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='129253376' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='129253376' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='129253376' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='129253376' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='130301952' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='130301952' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='130301952' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='130301952' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='130301952' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='130301952' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='132399104' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='132399104' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='132399104' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='132399104' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='132399104' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='133464064' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='133464064' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='133464064' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='159072256' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='125059072' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='125059072' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='125059072' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='125059072' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='125059072' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='125059072' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='126107648' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='126107648' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='126107648' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='126107648' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='126107648' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='127156224' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='127156224' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='127156224' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='127156224' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='127156224' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='127156224' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='128204800' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='128204800' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='128204800' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='128204800' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='128204800' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='129253376' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='129253376' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='129253376' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='129253376' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='129253376' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='130301952' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='130301952' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='130301952' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='130301952' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='130301952' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='130301952' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='132399104' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='132399104' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='132399104' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='132399104' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='132399104' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='133464064' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='133464064' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='133464064' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='14761984' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='262144' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='262144' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='262144' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='262144' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='262144' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='311296' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='311296' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='14761984' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='262144' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='262144' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='262144' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='262144' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='262144' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='294912' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='294912' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='311296' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='311296' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='1028368' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='462968' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='462968' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='462968' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='462968' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='462968' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='463052' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='1028368' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='462968' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='462968' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='462968' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='462968' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='462968' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='463052' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='463052' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='463052' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='222208' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='88064' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='88064' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='222208' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='88064' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='88064' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='88064' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='88064' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='927544' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='1013288' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='1013288' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='989488' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='989488' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='988680' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='998936' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='990464' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='845696' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='880440' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='873176' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='856088' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='882056' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='855552' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='887392' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='887392' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='887392' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='888776' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='890656' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='890656' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='890656' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='890656' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='890656' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='890656' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='890656' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_free_memory' xAxisName='' yAxisName='free' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='927544' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='1013288' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='1013288' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='989488' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='989488' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='988680' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='1003008' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='998936' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='990464' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='845696' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='880440' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='873176' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='856088' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='882056' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='855552' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='887392' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='887392' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='887392' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='888776' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='890656' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='890656' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='890656' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='890656' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='890656' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='890656' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='890656' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.014714348158671' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0013536934844033' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.001375248003002' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0014722550177096' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0015161039968956' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0015587425995308' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0015813492587797' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0016182495344507' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.001654171260566' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0016891523788452' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0017232340736338' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0017564510427713' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0017888279622061' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0018204067562909' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.001851205818162' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0018812647157753' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0019106015287471' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0019392415788454' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0019672184355729' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0019945428471516' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0020212496035522' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.002047343698064' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0020728648903414' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0021008892977614' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.002258720048529' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0028241824182418' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0039741674854037' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0059485904593525' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0077683616147585' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0080606641913598' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.011760034158839' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.011949563257256' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.012135254852846' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.012317284404075' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.012580498822809' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.012770917952884' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.012941507263322' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.013108865580702' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.013273086029992' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.013434193380245' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.013592273193201' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.013747440534968' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_hits' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.014714348158671' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0013536934844033' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.001375248003002' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0014722550177096' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0015161039968956' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0015587425995308' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0015813492587797' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0016182495344507' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.001654171260566' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0016891523788452' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0017232340736338' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0017564510427713' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0017888279622061' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0018204067562909' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.001851205818162' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0018812647157753' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0019106015287471' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0019392415788454' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0019672184355729' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0019945428471516' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0020212496035522' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.002047343698064' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0020728648903414' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0021008892977614' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.002258720048529' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0028241824182418' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0039741674854037' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0059485904593525' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0077683616147585' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0080606641913598' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.011760034158839' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.011949563257256' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.012135254852846' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.012317284404075' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.012580498822809' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.012770917952884' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.012941507263322' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.013108865580702' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.013273086029992' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.013434193380245' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.013592273193201' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.013747440534968' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0054985976031763' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0014823092969136' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0014790400038323' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0018933490751673' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0018808692277842' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0018802109444663' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0019550737822809' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0019422718808194' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0019298052186696' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0019176607991991' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0019058327753929' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0018943089430894' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0018830684709652' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0018721130644605' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.00186142028798' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0018509922637067' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0018408109006314' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0018308675505171' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0018211619604025' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.001811675291385' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.001802410402791' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0017933471724856' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0017844936914924' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0017942348972708' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0019159842280861' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0025421542154215' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0031757133401207' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0035697428201386' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0043769154986472' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0045145139070638' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0049026473099915' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0048686954071569' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0048354146850357' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0048028063993195' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0047899814329192' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0047611697806661' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0047302125765284' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0046998573708968' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0046700868192581' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0046408652593172' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.00461217760863' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0045840185008007' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_inserts' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0054985976031763' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0014823092969136' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0014790400038323' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0018933490751673' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0018808692277842' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0018802109444663' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0019550737822809' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0019422718808194' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0019298052186696' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0019176607991991' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0019058327753929' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0018943089430894' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0018830684709652' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0018721130644605' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.00186142028798' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0018509922637067' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0018408109006314' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0018308675505171' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0018211619604025' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.001811675291385' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.001802410402791' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0017933471724856' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0017844936914924' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0017942348972708' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0019159842280861' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0025421542154215' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0031757133401207' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0035697428201386' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0043769154986472' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0045145139070638' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0049026473099915' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0048686954071569' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0048354146850357' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0048028063993195' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0047899814329192' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0047611697806661' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0047302125765284' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0046998573708968' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0046700868192581' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0046408652593172' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.00461217760863' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0045840185008007' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0021292026372345' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010321539531276' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010319360002555' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010747737111373' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0010737291424137' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010727130780211' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0010603999229901' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010595903165736' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010588019110621' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010580338845343' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010572858672185' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.00105655708731' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010558462274128' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010551533953809' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010544771723624' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010538176925664' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010531738118976' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010525449834319' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010519311911717' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.001051331243724' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010507453219156' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0010501721532007' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0010496122492643' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010582643360932' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0010788595693054' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0012580258025803' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0012522996369853' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0012525690086079' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0012673633613387' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0012530910178573' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0012704241389126' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0012479571710341' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0012454665398423' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0012430261170226' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0012378992674343' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0012328730029786' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0012306242139335' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0012284190480238' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0012262562483557' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0012241334375814' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0012220495170423' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0012200039907701' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_queries_in_cache' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0021292026372345' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010321539531276' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010319360002555' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010747737111373' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0010737291424137' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010727130780211' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0010603999229901' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010595903165736' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010588019110621' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010580338845343' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010572858672185' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.00105655708731' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010558462274128' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010551533953809' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010544771723624' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010538176925664' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010531738118976' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010525449834319' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010519311911717' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.001051331243724' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010507453219156' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0010501721532007' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0010496122492643' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010582643360932' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0010788595693054' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0012580258025803' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0012522996369853' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0012525690086079' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0012673633613387' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0012530910178573' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0012704241389126' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0012479571710341' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0012454665398423' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0012430261170226' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0012378992674343' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0012328730029786' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0012306242139335' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0012284190480238' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0012262562483557' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0012241334375814' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0012220495170423' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0012200039907701' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0010182129457618' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010040192441409' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010039920000319' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010039354584809' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0010038804811797' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010038270041064' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0010037749951869' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010037243947858' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010036751194414' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010036271177834' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010035803667012' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0010035348179569' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010034903892133' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010034470872113' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010034048232726' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010033636057854' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010033233632436' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010032840614645' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010032456994482' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010032082027327' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010031715826197' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.001003135759575' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001003100765579' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010030665440049' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0010030330603579' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.00100300030003' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0010029682310234' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0010029368489373' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0010029061234928' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0010028760342938' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0010028465698833' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0010028176951254' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0010027893924982' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0010027616604207' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0010027344743383' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.001002707825616' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0010026816769062' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0010026560354421' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0010026308866088' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0010026062027626' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0010025819711284' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0010025581859392' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_lowmem_prunes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0010182129457618' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010040192441409' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010039920000319' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010039354584809' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0010038804811797' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010038270041064' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0010037749951869' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010037243947858' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010036751194414' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010036271177834' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010035803667012' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0010035348179569' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010034903892133' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010034470872113' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010034048232726' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010033636057854' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010033233632436' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010032840614645' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010032456994482' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010032082027327' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010031715826197' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.001003135759575' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001003100765579' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010030665440049' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0010030330603579' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.00100300030003' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0010029682310234' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0010029368489373' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0010029061234928' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0010028760342938' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0010028465698833' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0010028176951254' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0010027893924982' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0010027616604207' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0010027344743383' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.001002707825616' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0010026816769062' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0010026560354421' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0010026308866088' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0010026062027626' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0010025819711284' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0010025581859392' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0027302298473755' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0011085195918056' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0015149680041197' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0023183785911059' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0030915793558401' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0038434640510369' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0063453931846237' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0070335195530726' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0077034178610805' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0083557948647266' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0089913784769836' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.009610816542948' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.010214627523115' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.010803516028956' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.011377901335031' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.011938446014127' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.01248554336989' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.013019664960049' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.013541382667965' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.014050968716815' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.014549000951475' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.015239484230265' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.015713132672457' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.016197792088316' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.017299666363361' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.017735673567357' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.018200898780354' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.018635777868494' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.019073182001796' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.019472768269289' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.020274124679761' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.020653423499577' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.021125466874569' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.021488758661257' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.021962480277604' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.022310587598159' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.022651859340683' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.02298666139001' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.023315180215733' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.023637477195726' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.023953723331466' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.024264142930965' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_not_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0027302298473755' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0011085195918056' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0015149680041197' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0023183785911059' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0030915793558401' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0038434640510369' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0063453931846237' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0070335195530726' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0077034178610805' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0083557948647266' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0089913784769836' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.009610816542948' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.010214627523115' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.010803516028956' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.011377901335031' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.011938446014127' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.01248554336989' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.013019664960049' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.013541382667965' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.014050968716815' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.014549000951475' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.015239484230265' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.015713132672457' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.016197792088316' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.017299666363361' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.017735673567357' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.018200898780354' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.018635777868494' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.019073182001796' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.019472768269289' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.020274124679761' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.020653423499577' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.021125466874569' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.021488758661257' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.021962480277604' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.022310587598159' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.022651859340683' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.02298666139001' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.023315180215733' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.023637477195726' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.023953723331466' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.024264142930965' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0016192401559028' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0011326350566512' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0011317360010539' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0011298701298701' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001128055878929' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0011262911355104' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0011245748411671' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.001122905027933' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0011212789415656' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0011196948868521' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0011181521011382' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0011166489925769' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0011151828440389' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0011137538779731' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0011123591679974' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0011109989909183' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0011096709870389' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0011083740283283' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0011071080817916' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0011058706901807' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.001104662226451' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0011034800659764' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0011023252641077' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0011011959521619' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0011000909918107' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0010990099009901' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0010979516237708' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0010998528638682' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0011017143222484' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0011006612002842' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0010996299459152' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0010986193293886' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0010976287374373' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0010966581147249' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0010957066018414' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0010947738965611' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0010938586917171' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0010929612404748' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0010920810313076' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0010912170966901' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.001090368989494' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0010895365078715' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0016192401559028' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0011326350566512' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0011317360010539' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0011298701298701' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001128055878929' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0011262911355104' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0011245748411671' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.001122905027933' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0011212789415656' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0011196948868521' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0011181521011382' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0011166489925769' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0011151828440389' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0011137538779731' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0011123591679974' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0011109989909183' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0011096709870389' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0011083740283283' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0011071080817916' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0011058706901807' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.001104662226451' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0011034800659764' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0011023252641077' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0011011959521619' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0011000909918107' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0010990099009901' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0010979516237708' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0010998528638682' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0011017143222484' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0011006612002842' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0010996299459152' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0010986193293886' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0010976287374373' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0010966581147249' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0010957066018414' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0010947738965611' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0010938586917171' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0010929612404748' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0010920810313076' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0010912170966901' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.001090368989494' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0010895365078715' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0018742213965687' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0011808659863426' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0011796400014371' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0011770956316411' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001174621653085' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0011722151847869' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0011698747834097' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0011675977653631' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0011653803748622' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0011632203002528' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0011611165015521' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0011590668080594' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0011570675145986' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0011551189245088' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0011532170472692' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0011513622603431' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0011495513459621' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0011477827659022' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0011460564751704' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0011443691229736' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0011427212178877' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0011411091808769' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001139534451056' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0011379944802208' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0011364877161056' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0011350135013501' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0011335703960511' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0011321582021786' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0011307755571765' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0011294215432225' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0011280956447481' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0011267962806424' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0011255226624194' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.001124274718932' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0011230513452247' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0011218521527214' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0011206754607791' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0011195215948962' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0011183898973954' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0011172791243159' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0011161887007779' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0011151183672634' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0018742213965687' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0011808659863426' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0011796400014371' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0011770956316411' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001174621653085' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0011722151847869' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0011698747834097' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0011675977653631' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0011653803748622' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0011632203002528' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0011611165015521' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0011590668080594' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0011570675145986' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0011551189245088' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0011532170472692' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0011513622603431' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0011495513459621' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0011477827659022' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0011460564751704' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0011443691229736' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0011427212178877' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0011411091808769' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001139534451056' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0011379944802208' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0011364877161056' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0011350135013501' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0011335703960511' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0011321582021786' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0011307755571765' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0011294215432225' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0011280956447481' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0011267962806424' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0011255226624194' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.001124274718932' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0011230513452247' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0011218521527214' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0011206754607791' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0011195215948962' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0011183898973954' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0011172791243159' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0011161887007779' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0011151183672634' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0032766182202309' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0012090006953292' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0015668640045349' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0023734750098386' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0030527745440435' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0037209999196329' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0045182955141732' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0051415270018622' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0057482543182653' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0063391173771586' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0069147657903122' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0074757864969954' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.008022663097162' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0085560151671837' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0090762408027211' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0095839219643458' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.010079428381522' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.010563186984608' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.011035702693931' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.011497239341548' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.011948303203298' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.012436115170178' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.012866629870915' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.013312174179699' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.013769184106764' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.014315331533153' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.014950685809778' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.015557960182202' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.016178683002956' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.016619742249807' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.017259607173356' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.017601859678783' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.017942770034114' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.018271424271129' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.018612749213155' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.018928513403737' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.019238084639087' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.019541783421558' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.019839779005525' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.020132134480063' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.020419004856688' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.020700589917678' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Slow_queries' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0032766182202309' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0012090006953292' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0015668640045349' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0023734750098386' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0030527745440435' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0037209999196329' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0045182955141732' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0051415270018622' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0057482543182653' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0063391173771586' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0069147657903122' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0074757864969954' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.008022663097162' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0085560151671837' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0090762408027211' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0095839219643458' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.010079428381522' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.010563186984608' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.011035702693931' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.011497239341548' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.011948303203298' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.012436115170178' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.012866629870915' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.013312174179699' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.013769184106764' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.014315331533153' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.014950685809778' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.015557960182202' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.016178683002956' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.016619742249807' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.017259607173356' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.017601859678783' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.017942770034114' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.018271424271129' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.018612749213155' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.018928513403737' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.019238084639087' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.019541783421558' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.019839779005525' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.020132134480063' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.020419004856688' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.020700589917678' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.63548611111111' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='2.8796643518519' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='2.8993171296296' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='2.9409722222222' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='2.9826388888889' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='3.0243171296296' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='3.0659837962963' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='3.1076388888889' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='3.1493055555556' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='3.1909837962963' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='3.232650462963' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='3.2743055555556' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='3.3159837962963' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='3.3576388888889' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='3.3993171296296' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='3.4409722222222' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='3.4826388888889' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='3.5243171296296' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='3.5659722222222' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='3.607650462963' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='3.6493055555556' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='3.6909953703704' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='3.732650462963' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='3.7743055555556' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='3.8159722222222' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='3.8576388888889' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='3.8993171296296' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='3.9409837962963' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='3.982650462963' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='4.0243171296296' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='4.0659722222222' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='4.1076388888889' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='4.1493171296296' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='4.1909837962963' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='4.232650462963' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='4.2743055555556' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='4.3159837962963' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='4.357650462963' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='4.3993055555556' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='4.4409722222222' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='4.482650462963' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='4.5243287037037' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Uptime' xAxisName='' yAxisName='days' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.63548611111111' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='2.8796643518519' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='2.8993171296296' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='2.9409722222222' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='2.9826388888889' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='3.0243171296296' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='3.0659837962963' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='3.1076388888889' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='3.1493055555556' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='3.1909837962963' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='3.232650462963' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='3.2743055555556' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='3.3159837962963' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='3.3576388888889' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='3.3993171296296' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='3.4409722222222' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='3.4826388888889' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='3.5243171296296' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='3.5659722222222' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='3.607650462963' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='3.6493055555556' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='3.6909953703704' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='3.732650462963' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='3.7743055555556' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='3.8159722222222' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='3.8576388888889' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='3.8993171296296' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='3.9409837962963' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='3.982650462963' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='4.0243171296296' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='4.0659722222222' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='4.1076388888889' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='4.1493171296296' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='4.1909837962963' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='4.232650462963' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='4.2743055555556' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='4.3159837962963' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='4.357650462963' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='4.3993055555556' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='4.4409722222222' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='4.482650462963' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='4.5243287037037' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.01174563799949' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0018681567344445' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0020299360082395' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0028063754427391' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0031071012805588' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0034224935993356' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0039633712217017' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0042364990689013' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0045023888276369' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0047613211413814' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0050135910719976' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0052594556380346' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0054991116959452' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0057328507411238' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0059608275082482' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0061833165153044' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0064004652708541' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0066124610428209' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0068195391106784' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0070217965293663' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0072194735172851' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0074753435224614' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0076635452293171' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0078690585709905' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0085523202911738' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0097758775877588' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.011029652627923' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.011995562421256' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.013659073934688' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.014261394128864' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.01521292342727' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.015584389969005' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.015951143790394' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.016307883712003' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.016712289548019' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.017062821554292' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.017398454281431' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.017727711214578' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.01805077611155' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.018367735209799' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.018678756316147' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.018984047152483' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_immediate' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.01174563799949' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0018681567344445' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0020299360082395' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0028063754427391' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0031071012805588' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0034224935993356' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0039633712217017' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0042364990689013' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0045023888276369' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0047613211413814' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0050135910719976' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0052594556380346' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0054991116959452' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0057328507411238' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0059608275082482' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0061833165153044' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0064004652708541' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0066124610428209' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0068195391106784' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0070217965293663' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0072194735172851' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0074753435224614' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0076635452293171' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0078690585709905' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0085523202911738' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0097758775877588' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.011029652627923' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.011995562421256' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.013659073934688' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.014261394128864' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.01521292342727' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.015584389969005' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.015951143790394' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.016307883712003' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.016712289548019' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.017062821554292' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.017398454281431' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.017727711214578' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.01805077611155' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.018367735209799' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.018678756316147' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.018984047152483' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0010182129457618' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010040192441409' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010039920000319' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010039354584809' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0010038804811797' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010038270041064' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0010037749951869' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010037243947858' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010036751194414' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010036271177834' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010035803667012' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0010035348179569' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010034903892133' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010034470872113' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010034048232726' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010033636057854' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010033233632436' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010032840614645' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010032456994482' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010032082027327' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010031715826197' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.001003135759575' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001003100765579' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010030665440049' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0010030330603579' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.00100300030003' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0010029682310234' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0010029368489373' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0010029061234928' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0010028760342938' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0010028465698833' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0010028176951254' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0010027893924982' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0010027616604207' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0010027344743383' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.001002707825616' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0010026816769062' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0010026560354421' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0010026308866088' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0010026062027626' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0010025819711284' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0010025581859392' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_waited' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0010182129457618' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010040192441409' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010039920000319' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010039354584809' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0010038804811797' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010038270041064' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0010037749951869' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010037243947858' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010036751194414' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010036271177834' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010035803667012' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0010035348179569' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010034903892133' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010034470872113' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010034048232726' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010033636057854' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010033233632436' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010032840614645' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010032456994482' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010032082027327' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010031715826197' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.001003135759575' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001003100765579' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010030665440049' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0010030330603579' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.00100300030003' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0010029682310234' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0010029368489373' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0010029061234928' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0010028760342938' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0010028465698833' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0010028176951254' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0010027893924982' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0010027616604207' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0010027344743383' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.001002707825616' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0010026816769062' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0010026560354421' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0010026308866088' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0010026062027626' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0010025819711284' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0010025581859392' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0010182129457618' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010120577324228' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010119760000958' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010118063754427' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0010038804811797' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010038270041064' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0010037749951869' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010037243947858' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010036751194414' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010036271177834' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010071607334023' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0010212089077413' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010279231137064' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010517063081696' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010510723490897' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.001050454086781' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.001049850448654' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010492609219674' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010486854917235' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010481230409912' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010475737392959' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0010470363936256' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0010465114836853' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010367985280589' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0010030330603579' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.00100600060006' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0010029682310234' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0010058736978746' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0010029061234928' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0010057520685877' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0010056931397666' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0010056353902508' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0010055787849964' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0010055233208414' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0010054689486767' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0010054156512321' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0010053633538124' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0010053120708843' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0010289397526967' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0010286682303883' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0010284016824124' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0010281400453311' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0010182129457618' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010120577324228' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010119760000958' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010118063754427' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0010038804811797' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010038270041064' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0010037749951869' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010037243947858' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010036751194414' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010036271177834' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010071607334023' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0010212089077413' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010279231137064' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010517063081696' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010510723490897' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.001050454086781' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.001049850448654' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010492609219674' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010486854917235' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010481230409912' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010475737392959' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0010470363936256' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0010465114836853' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010367985280589' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0010030330603579' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.00100600060006' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0010029682310234' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0010058736978746' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0010029061234928' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0010057520685877' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0010056931397666' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0010056353902508' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0010055787849964' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0010055233208414' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0010054689486767' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0010054156512321' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0010053633538124' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0010053120708843' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0010289397526967' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0010286682303883' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0010284016824124' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0010281400453311' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0013824718609988' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010683271503961' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010678640005429' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010669027941755' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0010659681800543' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010650590698084' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.001064174918177' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010633147113594' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010624770305035' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010616610023177' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010608662339197' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0010600919052669' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010593366166261' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010586004825922' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.001057881995635' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010571812983518' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010564971751412' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010558290448964' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010551768906199' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010545394464567' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010539169045354' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0010533079127757' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0010527130148434' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010521312480834' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0010515620260843' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0010570057005701' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0010563963894438' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.001058736978746' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0010581224698562' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0010632727544643' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0010626245374324' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0010619892927585' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0010613666349606' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0010607565292556' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0010601584354432' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0010595721635527' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0010589968919365' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.001058432779727' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0010578795053933' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0010573364607766' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0010568033648248' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0010562800906621' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_created' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0013824718609988' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010683271503961' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010678640005429' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010669027941755' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0010659681800543' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010650590698084' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.001064174918177' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010633147113594' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010624770305035' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010616610023177' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010608662339197' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0010600919052669' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010593366166261' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010586004825922' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.001057881995635' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010571812983518' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010564971751412' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010558290448964' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010551768906199' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010545394464567' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010539169045354' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0010533079127757' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0010527130148434' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010521312480834' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0010515620260843' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0010570057005701' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0010563963894438' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.001058736978746' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0010581224698562' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0010632727544643' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0010626245374324' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0010619892927585' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0010613666349606' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0010607565292556' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0010601584354432' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0010595721635527' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0010589968919365' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.001058432779727' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0010578795053933' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0010573364607766' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0010568033648248' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0010562800906621' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Seconds_Behind_Master' xAxisName='' yAxisName='seconds' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0012185553491422' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.001072346394537' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010718560005748' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010708382526564' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001069848661234' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010803670862339' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0011094748604196' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0011080074487896' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0011065784638001' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0011051864157185' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0011038306343336' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0011025097207494' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0011012212871857' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010999655291279' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010987398749068' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010975445677767' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010963775340645' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010952377824703' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010941252839987' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010930378792497' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010919758959721' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0010909370276762' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0010899222017916' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010889297761423' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0011486199575372' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0011470147014701' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0011454433201445' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0011439055979278' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0011453061746406' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0011438017146916' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0011423284941645' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0011408847562694' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0011394696249104' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0011380830210356' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0011367237169163' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0011353912808015' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0011340838453101' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0011328017721068' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0011315443304394' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0011303101381287' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0011290985564199' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0011279092969593' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0012185553491422' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.001072346394537' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010718560005748' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010708382526564' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001069848661234' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010803670862339' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0011094748604196' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0011080074487896' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0011065784638001' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0011051864157185' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0011038306343336' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0011025097207494' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0011012212871857' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010999655291279' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010987398749068' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010975445677767' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010963775340645' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010952377824703' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010941252839987' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010930378792497' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010919758959721' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0010909370276762' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0010899222017916' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010889297761423' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0011486199575372' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0011470147014701' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0011454433201445' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0011439055979278' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0011453061746406' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0011438017146916' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0011423284941645' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0011408847562694' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0011394696249104' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0011380830210356' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0011367237169163' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0011353912808015' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0011340838453101' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0011328017721068' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0011315443304394' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0011303101381287' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0011290985564199' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0011279092969593' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0010546388372855' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010884233711008' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010878240007026' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010865800865801' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0010853705859527' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010880210944466' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0011245748411671' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.001122905027933' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0011212789415656' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0011196948868521' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0011181521011382' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0011166489925769' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0011151828440389' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0011137538779731' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0011123591679974' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0011109989909183' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0011096709870389' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0011083740283283' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0011071080817916' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0011058706901807' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.001104662226451' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0011034800659764' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0011023252641077' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0011011959521619' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.001185016681832' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0011830183018302' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0011810620924248' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0011791477851754' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0011772735330615' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0011754380919238' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0011736407628807' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0011718794026486' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0011701529423907' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0011684612856634' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0011668029346379' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0011651773625779' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0011635822912784' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0011620181619704' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.001160484083136' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0011589783685171' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0011575002388323' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0011560493422904' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0010546388372855' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010884233711008' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010878240007026' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010865800865801' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0010853705859527' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010880210944466' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0011245748411671' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.001122905027933' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0011212789415656' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0011196948868521' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0011181521011382' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0011166489925769' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0011151828440389' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0011137538779731' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0011123591679974' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0011109989909183' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0011096709870389' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0011083740283283' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0011071080817916' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0011058706901807' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.001104662226451' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0011034800659764' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0011023252641077' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0011011959521619' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.001185016681832' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0011830183018302' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0011810620924248' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0011791477851754' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0011772735330615' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0011754380919238' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0011736407628807' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0011718794026486' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0011701529423907' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0011684612856634' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0011668029346379' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0011651773625779' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0011635822912784' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0011620181619704' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.001160484083136' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0011589783685171' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0011575002388323' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0011560493422904' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.094377772920992' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010040192441409' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010039920000319' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010039354584809' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0010038804811797' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010038270041064' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0010037749951869' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010037243947858' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010036751194414' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010036271177834' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010035803667012' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0010035348179569' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010034903892133' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010034470872113' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010034048232726' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010033636057854' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010033233632436' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010032840614645' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010032456994482' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010032082027327' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010031715826197' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.001003135759575' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001003100765579' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010030665440049' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0010030330603579' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.00100300030003' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0010029682310234' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0010029368489373' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0010029061234928' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0010028760342938' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0010028465698833' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0010028176951254' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0010027893924982' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0010027616604207' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0010027344743383' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.001002707825616' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0010026816769062' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0010026560354421' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0010026308866088' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0010026062027626' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0010025819711284' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0010025581859392' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.094377772920992' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010040192441409' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010039920000319' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010039354584809' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0010038804811797' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010038270041064' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0010037749951869' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010037243947858' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010036751194414' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010036271177834' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010035803667012' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0010035348179569' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010034903892133' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010034470872113' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010034048232726' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010033636057854' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010033233632436' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010032840614645' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010032456994482' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010032082027327' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010031715826197' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.001003135759575' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001003100765579' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010030665440049' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0010030330603579' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.00100300030003' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0010029682310234' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0010029368489373' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0010029061234928' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0010028760342938' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0010028465698833' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0010028176951254' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0010027893924982' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0010027616604207' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0010027344743383' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.001002707825616' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0010026816769062' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0010026560354421' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0010026308866088' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0010026062027626' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0010025819711284' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0010025581859392' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.012091683968965' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0071655205122125' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0075069600520557' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0081625344352617' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0088075281334886' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0094347170504514' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.010471462923885' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.011059590316574' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.011632120543918' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.012189658361776' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.012732861679693' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0132622834924' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.013792276466749' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.014295415374009' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.014786129430952' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.01526505213589' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.01573246925889' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.016188784273286' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.016634534242129' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.01706988748833' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.017495401205201' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.017911151388201' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.018317775758835' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.018733823980374' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.019589626933576' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.020435943594359' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.02142439767172' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.022339144378431' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.023382963141636' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.024074423139422' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.024820096783376' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.025406875176106' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.026004114353935' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.026606115420836' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.027349394724105' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.02796452748443' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.02850864170383' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.029045078233524' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.029571428571429' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.03011910346625' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.030648774467404' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.031140546735499' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.012091683968965' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0071655205122125' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0075069600520557' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0081625344352617' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0088075281334886' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0094347170504514' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.010471462923885' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.011059590316574' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.011632120543918' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.012189658361776' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.012732861679693' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0132622834924' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.013792276466749' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.014295415374009' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.014786129430952' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.01526505213589' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.01573246925889' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.016188784273286' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.016634534242129' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.01706988748833' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.017495401205201' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.017911151388201' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.018317775758835' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.018733823980374' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.019589626933576' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.020435943594359' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.02142439767172' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.022339144378431' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.023382963141636' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.024074423139422' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.024820096783376' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.025406875176106' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.026004114353935' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.026606115420836' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.027349394724105' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.02796452748443' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.02850864170383' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.029045078233524' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.029571428571429' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.03011910346625' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.030648774467404' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.031140546735499' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.09326678322952' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010040192441409' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010039920000319' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010039354584809' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0010038804811797' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010038270041064' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0010037749951869' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010037243947858' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010036751194414' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010036271177834' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010035803667012' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0010035348179569' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010034903892133' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010034470872113' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010034048232726' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010033636057854' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010033233632436' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010032840614645' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010032456994482' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010032082027327' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010031715826197' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.001003135759575' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001003100765579' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010030665440049' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0010030330603579' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.00100300030003' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0010029682310234' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0010029368489373' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0010029061234928' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0010028760342938' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0010028465698833' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0010028176951254' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0010027893924982' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0010027616604207' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0010027344743383' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.001002707825616' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0010026816769062' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0010026560354421' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0010026308866088' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0010026062027626' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0010025819711284' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0010025581859392' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.09326678322952' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010040192441409' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010039920000319' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010039354584809' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0010038804811797' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010038270041064' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0010037749951869' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010037243947858' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010036751194414' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010036271177834' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010035803667012' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0010035348179569' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010034903892133' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010034470872113' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010034048232726' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010033636057854' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010033233632436' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010032840614645' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010032456994482' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010032082027327' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010031715826197' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.001003135759575' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001003100765579' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010030665440049' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0010030330603579' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.00100300030003' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0010029682310234' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0010029368489373' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0010029061234928' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0010028760342938' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0010028465698833' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0010028176951254' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0010027893924982' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0010027616604207' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0010027344743383' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.001002707825616' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0010026816769062' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0010026560354421' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0010026308866088' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0010026062027626' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0010025819711284' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0010025581859392' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.077603649874331' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.34267192517775' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.34088287471906' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.33711176702086' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.33344082266201' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.32986977087726' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.33090060437673' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.32746927374302' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.32412017640573' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.32085738172876' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.31767985435068' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.31458430540827' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.31156785142111' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.30862495691141' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.30575211184163' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.30295089135553' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.30021568627451' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.29754418212091' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.2949435248296' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.29239463780995' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.28990580399619' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.28747045173752' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.28509214234995' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.28278472861086' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.28167333939945' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.28235913591359' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.28437998403092' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.28589784170972' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.28791866632181' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.28917000813918' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.29053885567891' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.29163116370809' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.29275092956505' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.29382713938929' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.29512552877898' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.29622610343894' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.29721266770537' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.29822630218778' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.29922415153907' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.30017904612979' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.30116447156088' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.3020601122532' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_write_requests' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.077603649874331' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.34267192517775' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.34088287471906' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.33711176702086' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.33344082266201' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.32986977087726' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.33090060437673' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.32746927374302' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.32412017640573' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.32085738172876' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.31767985435068' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.31458430540827' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.31156785142111' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.30862495691141' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.30575211184163' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.30295089135553' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.30021568627451' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.29754418212091' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.2949435248296' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.29239463780995' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.28990580399619' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.28747045173752' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.28509214234995' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.28278472861086' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.28167333939945' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.28235913591359' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.28437998403092' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.28589784170972' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.28791866632181' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.28917000813918' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.29053885567891' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.29163116370809' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.29275092956505' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.29382713938929' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.29512552877898' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.29622610343894' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.29721266770537' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.29822630218778' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.29922415153907' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.30017904612979' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.30116447156088' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.3020601122532' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='10079' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='9506' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='9500' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='9487' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='9475' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='9463' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='9449' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='9437' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='9425' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='9413' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='9401' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='9389' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='9377' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='9365' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='9353' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='9341' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='9329' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='9317' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='9305' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='9293' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='9281' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='9269' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='9257' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='9245' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='9232' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='9215' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='9199' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='9183' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='9167' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='9150' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='9134' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='9118' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='9102' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='9086' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='9069' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='9053' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='9037' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='9021' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='9005' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='8988' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='8971' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='8955' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_free' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='10079' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='9506' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='9500' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='9487' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='9475' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='9463' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='9449' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='9437' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='9425' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='9413' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='9401' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='9389' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='9377' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='9365' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='9353' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='9341' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='9329' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='9317' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='9305' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='9293' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='9281' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='9269' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='9257' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='9245' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='9232' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='9215' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='9199' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='9183' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='9167' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='9150' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='9134' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='9118' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='9102' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='9086' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='9069' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='9053' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='9037' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='9021' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='9005' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='8988' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='8971' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='8955' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='16384' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='16384' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='16384' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_total' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='16384' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='16384' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='16384' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='16384' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='16384' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0011092776745711' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010200962207047' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0018822320070579' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.003577725304998' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0052180830422972' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.006820873245797' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0086141652919393' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.01012104283054' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.011588019110621' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.01301664121639' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.014408473295835' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.015764934605868' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.017087203884105' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.018376766632196' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.019634597771203' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.020862092162799' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.022060152874709' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.023229812053162' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.024372281726712' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.025488211459059' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0265788138281' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.027744893415532' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.028785960353611' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.029807114382091' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.030845313921747' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.031840084008401' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.032798658953224' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.033739991953034' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.034667440664224' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.035564180143284' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.036471107315685' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.03732854325162' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.038177023216114' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.039000447388988' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.039815863232531' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.040607365285676' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.041383372530511' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.042144645034143' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.042891607471718' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.043624446181913' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.044343549332431' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.045049403686858' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_disk_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0011092776745711' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010200962207047' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0018822320070579' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.003577725304998' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0052180830422972' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.006820873245797' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0086141652919393' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.01012104283054' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.011588019110621' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.01301664121639' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.014408473295835' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.015764934605868' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.017087203884105' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.018376766632196' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.019634597771203' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.020862092162799' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.022060152874709' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.023229812053162' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.024372281726712' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.025488211459059' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0265788138281' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.027744893415532' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.028785960353611' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.029807114382091' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.030845313921747' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.031840084008401' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.032798658953224' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.033739991953034' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.034667440664224' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.035564180143284' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.036471107315685' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.03732854325162' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.038177023216114' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.039000447388988' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.039815863232531' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.040607365285676' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.041383372530511' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.042144645034143' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.042891607471718' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.043624446181913' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.044343549332431' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.045049403686858' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0010728517830474' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010281347089866' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010279440002236' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010354191263282' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001034924330617' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010344430369574' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0010339749566819' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010335195530726' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010330760749724' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010326440600506' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010322233003104' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0010318133616119' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010314135029197' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010310237849018' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010306434094538' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010302724520686' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010299102691924' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010295565531804' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010292112950341' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010288738245947' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010285442435775' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0010282218361754' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0010279068902112' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010275988960442' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0010272975432211' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.00102700270027' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0010267140792102' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0010264316404357' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0010261551114353' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0010258843086445' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0010256191289496' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0010253592561285' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0010251045324839' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0010248549437864' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0010246102690449' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0010243704305443' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0010241350921558' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0010239043189792' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0010236779794791' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0010234558248632' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0010232377401556' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0010230236734527' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0010728517830474' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010281347089866' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010279440002236' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010354191263282' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001034924330617' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010344430369574' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0010339749566819' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010335195530726' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010330760749724' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010326440600506' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010322233003104' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0010318133616119' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010314135029197' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010310237849018' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010306434094538' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010302724520686' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010299102691924' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010295565531804' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010292112950341' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010288738245947' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010285442435775' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0010282218361754' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0010279068902112' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010275988960442' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0010272975432211' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.00102700270027' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0010267140792102' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0010264316404357' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0010261551114353' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0010258843086445' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0010256191289496' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0010253592561285' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0010251045324839' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0010248549437864' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0010246102690449' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0010243704305443' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0010241350921558' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0010239043189792' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0010236779794791' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0010234558248632' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0010232377401556' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0010230236734527' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0036773030269916' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0014099629023766' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0053592640348741' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.013392758756395' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.020902987970508' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.028213826200436' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.036832254313876' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.04372625698324' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.050437706725469' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.056973681633364' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.063341345000555' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.069547189819724' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.075596598266673' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.081496380558428' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.08725098314272' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.092866801210898' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.098347956131605' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.10369917011767' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.10892599805258' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.11403139868015' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.11902093244529' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.12405034148422' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.12881665793284' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.13349616681999' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.13858871701547' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.1433402340234' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.14808178366939' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.15254727886262' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.15725354183801' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.16141081273853' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.16594449188728' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.16985038038884' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.1737666031615' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.17751704911061' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.1812975654975' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.1849019767127' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.18843580735906' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.19190254740359' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.19530413049198' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.19864138649987' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.20191608335636' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.20513044701741' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0036773030269916' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0014099629023766' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0053592640348741' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.013392758756395' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.020902987970508' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.028213826200436' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.036832254313876' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.04372625698324' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.050437706725469' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.056973681633364' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.063341345000555' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.069547189819724' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.075596598266673' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.081496380558428' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.08725098314272' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.092866801210898' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.098347956131605' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.10369917011767' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.10892599805258' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.11403139868015' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.11902093244529' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.12405034148422' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.12881665793284' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.13349616681999' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.13858871701547' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.1433402340234' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.14808178366939' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.15254727886262' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.15725354183801' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.16141081273853' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.16594449188728' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.16985038038884' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.1737666031615' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.17751704911061' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.1812975654975' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.1849019767127' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.18843580735906' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.19190254740359' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.19530413049198' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.19864138649987' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.20191608335636' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.20513044701741' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0066460131861727' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0015385787148869' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0018942080071537' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0030188902007084' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0036891734575087' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0043524555971849' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0054167443686509' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0060279329608939' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0066229327453142' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0072023714096068' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0077668930651877' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0083170731707317' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0088533757299276' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0093764219234747' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0098865887416114' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.010384460141271' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0108703888335' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.011344793613157' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.01180817916261' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.012260791591942' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.012703139866794' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.013185561708613' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.013607712844301' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.014048144740877' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.014715498938429' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.015743474347435' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.016793957275283' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.017590259646815' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.018794194146486' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.019300206211659' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.020157415314546' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.020475908706678' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.020804686737275' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.02111041118362' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.021448399101999' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.021744652044408' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.02203239197535' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.022314684423149' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.022591686398316' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.022863434975241' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.023130074541506' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.023391801525702' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_select' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0066460131861727' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0015385787148869' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0018942080071537' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0030188902007084' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0036891734575087' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0043524555971849' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0054167443686509' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0060279329608939' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0066229327453142' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0072023714096068' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0077668930651877' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0083170731707317' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0088533757299276' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0093764219234747' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0098865887416114' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.010384460141271' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0108703888335' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.011344793613157' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.01180817916261' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.012260791591942' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.012703139866794' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.013185561708613' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.013607712844301' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.014048144740877' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.014715498938429' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.015743474347435' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.016793957275283' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.017590259646815' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.018794194146486' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.019300206211659' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.020157415314546' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.020475908706678' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.020804686737275' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.02111041118362' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.021448399101999' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.021744652044408' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.02203239197535' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.022314684423149' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.022591686398316' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.022863434975241' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.023130074541506' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.023391801525702' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0052618293082723' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0012451738925978' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0012914160023313' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0013817394726486' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0014695382227396' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0015549155954244' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0016492991721436' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0017299813780261' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.001808526277104' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0018850167391486' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0019595382759102' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0020321668434076' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0021029629914032' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0021720096518442' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0022393556712439' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.002305079044736' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0023692256563642' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0024318507985195' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0024930217461863' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0025527701226496' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0026111639708214' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0026682240939223' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0027240256619359' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0027816620668507' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0028350015165302' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0031752175217522' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0035140916767834' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0038399329223703' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0041560501131935' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0044684973583625' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0047773982351267' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0050743871513102' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0053653992596952' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0056506361484779' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0059329917063393' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0062098564852424' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0064786659193727' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0067423486259001' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0070010523546435' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0072548866301798' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0075039852724367' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0077484945075748' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_insert' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0052618293082723' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0012451738925978' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0012914160023313' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0013817394726486' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0014695382227396' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0015549155954244' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0016492991721436' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0017299813780261' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.001808526277104' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0018850167391486' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0019595382759102' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0020321668434076' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0021029629914032' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0021720096518442' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0022393556712439' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.002305079044736' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0023692256563642' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0024318507985195' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0024930217461863' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0025527701226496' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0026111639708214' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0026682240939223' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0027240256619359' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0027816620668507' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0028350015165302' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0031752175217522' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0035140916767834' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0038399329223703' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0041560501131935' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0044684973583625' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0047773982351267' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0050743871513102' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0053653992596952' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0056506361484779' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0059329917063393' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0062098564852424' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0064786659193727' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0067423486259001' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0070010523546435' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0072548866301798' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0075039852724367' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0077484945075748' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0010182129457618' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010040192441409' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010039920000319' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010039354584809' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0010038804811797' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010038270041064' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0010037749951869' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010037243947858' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010036751194414' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010036271177834' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010035803667012' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0010035348179569' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010034903892133' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010034470872113' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010034048232726' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010033636057854' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010033233632436' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010032840614645' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010032456994482' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010032082027327' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010031715826197' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.001003135759575' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001003100765579' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010030665440049' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0010090991810737' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.00100900090009' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0010118729240934' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0010234947914984' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0010377796054066' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0010373884458198' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0010512382578992' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.001050718512257' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0010502090649677' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0010497098875728' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0010628929097815' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0010622799891687' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0010616785688427' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0010610888151691' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0010605103920021' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0010599426635392' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0010593853359532' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0010588382766013' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_delete' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0010182129457618' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010040192441409' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010039920000319' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010039354584809' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.0010038804811797' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010038270041064' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0010037749951869' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010037243947858' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010036751194414' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010036271177834' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010035803667012' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0010035348179569' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010034903892133' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010034470872113' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010034048232726' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010033636057854' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010033233632436' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010032840614645' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010032456994482' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010032082027327' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010031715826197' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.001003135759575' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.001003100765579' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010030665440049' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0010090991810737' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.00100900090009' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.0010118729240934' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0010234947914984' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0010377796054066' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0010373884458198' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0010512382578992' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.001050718512257' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0010502090649677' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0010497098875728' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0010628929097815' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0010622799891687' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0010616785688427' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.0010610888151691' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0010605103920021' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0010599426635392' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0010593853359532' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0010588382766013' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='0.0011821294576185' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010241154648457' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010239520001916' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010236127508855' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001023282887078' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010267890287446' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0010264249663082' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010260707635009' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010257258360897' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010253898244838' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010250625669081' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0010247437256981' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010244327244931' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010241296104791' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010238337629085' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010235452404978' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010232635427052' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010229884302515' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010227198961376' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010224574191292' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010222010783381' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0010219503170253' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0010217053590532' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010214658080343' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0013275705186533' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0013540354035404' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.00141555234327' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0014346536427206' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0017439676141598' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0017420168478089' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0017486478793054' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0017410538179769' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0017336102270287' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0017263166906471' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0017355735970096' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0017311129163282' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0017240527646748' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.001717129569377' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0017103393843725' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0017036747458952' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0016971322046677' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0016907102035804' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_update' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='0.0011821294576185' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='0.0010241154648457' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='0.0010239520001916' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='0.0010236127508855' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='0.001023282887078' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='0.0010267890287446' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='0.0010264249663082' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='0.0010260707635009' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='0.0010257258360897' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='0.0010253898244838' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='0.0010250625669081' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='0.0010247437256981' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='0.0010244327244931' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='0.0010241296104791' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='0.0010238337629085' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='0.0010235452404978' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='0.0010232635427052' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='0.0010229884302515' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='0.0010227198961376' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='0.0010224574191292' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='0.0010222010783381' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='0.0010219503170253' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='0.0010217053590532' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='0.0010214658080343' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='0.0013275705186533' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='0.0013540354035404' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='0.00141555234327' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='0.0014346536427206' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='0.0017439676141598' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='0.0017420168478089' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='0.0017486478793054' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='0.0017410538179769' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='0.0017336102270287' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='0.0017263166906471' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='0.0017355735970096' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='0.0017311129163282' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='0.0017240527646748' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='0.001717129569377' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='0.0017103393843725' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='0.0017036747458952' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='0.0016971322046677' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='0.0016907102035804' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='16.112810986049' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='171.48452791968' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='171.18323280147' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='170.59701692247' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='169.8899379123' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='169.20650514158' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='168.68348175356' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='168.0306443203' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='167.39449099596' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='166.77440415523' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='166.17098399218' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='165.58363025804' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='165.00982195525' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='164.45135470527' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='163.90548210595' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='163.37392869156' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='162.85454303755' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='162.34690198062' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='161.85232067511' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='161.36815088819' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='160.89616238503' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='160.44739449737' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='159.9963969104' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='159.56173566391' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='159.31160145587' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='159.42569156916' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='159.7098969727' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='160.17896863739' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='160.79447604046' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='160.69176965266' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='161.70329917449' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='161.52793462947' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='161.36549688843' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='161.19698095283' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='161.0716076795' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='160.91544272949' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='160.75581990931' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='160.59971155455' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='160.44698237306' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='160.29672139692' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='160.14884547161' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='160.0037119278' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_received' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='16.112810986049' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='171.48452791968' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='171.18323280147' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='170.59701692247' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='169.8899379123' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='169.20650514158' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='168.68348175356' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='168.0306443203' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='167.39449099596' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='166.77440415523' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='166.17098399218' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='165.58363025804' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='165.00982195525' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='164.45135470527' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='163.90548210595' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='163.37392869156' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='162.85454303755' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='162.34690198062' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='161.85232067511' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='161.36815088819' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='160.89616238503' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='160.44739449737' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='159.9963969104' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='159.56173566391' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='159.31160145587' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='159.42569156916' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='159.7098969727' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='160.17896863739' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='160.79447604046' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='160.69176965266' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='161.70329917449' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='161.52793462947' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='161.36549688843' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='161.19698095283' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='161.0716076795' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='160.91544272949' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='160.75581990931' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='160.59971155455' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='160.44698237306' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='160.29672139692' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='160.14884547161' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='160.0037119278' color='ff6600' showName='0'/>
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
<set name='03-18 04:12' value='5032.0662586967' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='5.082068946114' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='5.7476377339811' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='8.0548170011806' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='9.3101901435778' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='10.542761030383' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='13.700763681526' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='14.83225698324' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='15.933495038589' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='17.006042778227' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='18.048879166204' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='19.05934252386' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='20.036589750123' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='20.977321613237' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='21.8875965693' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='22.775973763875' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='23.643020937188' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='24.489486077221' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='25.31635183382' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='26.12398420281' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='26.913441167142' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='157.96618083298' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='157.26688289339' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='157.04281202085' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='157.36648771611' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='158.49363036304' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='161.25961335823' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='164.56498806171' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='168.11596013961' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='168.3185092939' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='174.92330202106' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='174.7840462102' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='174.75653066519' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='174.62203639316' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='174.6834463127' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='174.56466558354' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='174.43566791186' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='174.30967248427' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='174.18656932386' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='174.04837894188' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='173.91230851457' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='173.77872459082' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://192.168.0.20/kontrollbase//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_sent' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='03-18 04:12' value='5032.0662586967' color='ff6600' showName='0'/>
<set name='03-22 07:31' value='5.082068946114' color='ff6600' showName='0'/>
<set name='03-22 08:00' value='5.7476377339811' color='ff6600' showName='0'/>
<set name='03-22 09:00' value='8.0548170011806' color='ff6600' showName='0'/>
<set name='03-22 10:00' value='9.3101901435778' color='ff6600' showName='0'/>
<set name='03-22 11:00' value='10.542761030383' color='ff6600' showName='0'/>
<set name='03-22 12:00' value='13.700763681526' color='ff6600' showName='0'/>
<set name='03-22 13:00' value='14.83225698324' color='ff6600' showName='0'/>
<set name='03-22 14:00' value='15.933495038589' color='ff6600' showName='0'/>
<set name='03-22 15:00' value='17.006042778227' color='ff6600' showName='0'/>
<set name='03-22 16:00' value='18.048879166204' color='ff6600' showName='0'/>
<set name='03-22 17:00' value='19.05934252386' color='ff6600' showName='0'/>
<set name='03-22 18:00' value='20.036589750123' color='ff6600' showName='0'/>
<set name='03-22 19:00' value='20.977321613237' color='ff6600' showName='0'/>
<set name='03-22 20:00' value='21.8875965693' color='ff6600' showName='0'/>
<set name='03-22 21:00' value='22.775973763875' color='ff6600' showName='0'/>
<set name='03-22 22:00' value='23.643020937188' color='ff6600' showName='0'/>
<set name='03-22 23:00' value='24.489486077221' color='ff6600' showName='0'/>
<set name='03-23 00:00' value='25.31635183382' color='ff6600' showName='0'/>
<set name='03-23 01:00' value='26.12398420281' color='ff6600' showName='0'/>
<set name='03-23 02:00' value='26.913441167142' color='ff6600' showName='0'/>
<set name='03-23 03:00' value='157.96618083298' color='ff6600' showName='0'/>
<set name='03-23 04:00' value='157.26688289339' color='ff6600' showName='0'/>
<set name='03-23 05:00' value='157.04281202085' color='ff6600' showName='0'/>
<set name='03-23 06:00' value='157.36648771611' color='ff6600' showName='0'/>
<set name='03-23 07:00' value='158.49363036304' color='ff6600' showName='0'/>
<set name='03-23 08:00' value='161.25961335823' color='ff6600' showName='0'/>
<set name='03-23 09:00' value='164.56498806171' color='ff6600' showName='0'/>
<set name='03-23 10:00' value='168.11596013961' color='ff6600' showName='0'/>
<set name='03-23 11:00' value='168.3185092939' color='ff6600' showName='0'/>
<set name='03-23 12:00' value='174.92330202106' color='ff6600' showName='0'/>
<set name='03-23 13:00' value='174.7840462102' color='ff6600' showName='0'/>
<set name='03-23 14:00' value='174.75653066519' color='ff6600' showName='0'/>
<set name='03-23 15:00' value='174.62203639316' color='ff6600' showName='0'/>
<set name='03-23 16:00' value='174.6834463127' color='ff6600' showName='0'/>
<set name='03-23 17:00' value='174.56466558354' color='ff6600' showName='0'/>
<set name='03-23 18:00' value='174.43566791186' color='ff6600' showName='0'/>
<set name='03-23 19:00' value='174.30967248427' color='ff6600' showName='0'/>
<set name='03-23 20:00' value='174.18656932386' color='ff6600' showName='0'/>
<set name='03-23 21:00' value='174.04837894188' color='ff6600' showName='0'/>
<set name='03-23 22:00' value='173.91230851457' color='ff6600' showName='0'/>
<set name='03-23 23:00' value='173.77872459082' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr></tr></div></table></body></html>