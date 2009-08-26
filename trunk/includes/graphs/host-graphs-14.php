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

<div id="content"><table cellpadding="0" cellspacing="1" border="0" class="tableborder"><form action="http://demo01.kontrollbase.com/index.php/main/graphs" method="post" name="graphform"><input type="hidden" name="server_list_id" value="14" /><tr><th>Start date</th><th>End Date</th><th>&nbsp;</th></tr><tr><td class='td'><input type="text" name="sday" value="2009-08-19" id="sday" maxlength="10" size="15" style="width:50%"  />
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
<set name='08-24 16:28' value='12.4859' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='12.4848' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='12.4844' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='12.4854' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='12.4843' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='12.4846' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='12.4848' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='12.4829' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='12.4802' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='12.4766' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='12.4756' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='12.4736' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='12.4705' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='12.4789' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='12.4766' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='12.4738' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='12.4743' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='12.4717' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='12.4692' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='12.4685' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='12.4668' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='12.4675' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='12.4697' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='12.4721' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='12.4724' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='12.4759' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='12.4796' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='12.4795' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='12.4805' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='12.4809' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='12.4805' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='12.4816' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Query Rate' xAxisName='' yAxisName='Q/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='12.4859' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='12.4848' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='12.4844' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='12.4854' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='12.4843' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='12.4846' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='12.4848' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='12.4829' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='12.4802' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='12.4766' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='12.4756' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='12.4736' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='12.4705' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='12.4789' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='12.4766' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='12.4738' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='12.4743' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='12.4717' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='12.4692' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='12.4685' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='12.4668' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='12.4675' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='12.4697' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='12.4721' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='12.4724' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='12.4759' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='12.4796' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='12.4795' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='12.4805' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='12.4809' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='12.4805' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='12.4816' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.001' color='ff6600' showName='0'/>
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
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Connections' xAxisName='' yAxisName='connections' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.001' color='ff6600' showName='0'/>
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
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 1 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.091' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.101' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.251' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.081' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.121' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.161' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.101' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.241' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.161' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.161' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.231' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.161' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.081' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 1 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.091' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.101' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.251' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.081' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.121' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.161' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.101' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.241' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.161' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.161' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.231' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.161' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.041' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.091' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.111' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.021' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.031' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.051' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.031' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.051' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.051' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.091' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.021' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 5 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.041' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.091' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.111' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.021' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.031' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.051' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.031' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.051' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.051' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.091' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.041' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.011' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.061' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.011' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 15 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.011' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.061' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.011' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='134225920' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='134225920' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='483328' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='32026624' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='24956928' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='24915968' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='16732160' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='10522624' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='483328' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='32026624' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='24956928' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='24915968' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='16732160' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='10522624' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='2937774080' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='2937774080' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2937643008' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2917351424' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2912399360' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2916134912' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2915799040' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='2920595456' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='2920513536' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='2921582592' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='2921287680' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='2921172992' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2921390080' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='2917298176' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='2917117952' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2917298176' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2917232640' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2917294080' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2915479552' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='2913972224' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2900922368' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='2937774080' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='2937774080' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2937643008' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2917351424' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2912399360' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2916134912' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2915799040' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='2920595456' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='2920513536' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='2921582592' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='2921287680' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='2921172992' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2921390080' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='2917298176' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='2917117952' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2917298176' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2917232640' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2917294080' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2915479552' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='2913972224' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2900922368' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='2937774080' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='99' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='99' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='99' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='99' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='99' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='99' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='99' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='97' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='99' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='99' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='99' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='99' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='99' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='99' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='99' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='99' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='97' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='2' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='2' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='2' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='2' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='2' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='2' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='2' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='2' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Schemas' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='2' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='2' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='2' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='2' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='2' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='2' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='2' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='2' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='24' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='24' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='24' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='24' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='24' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='24' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='24' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='24' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='24' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='24' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='24' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='24' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='24' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Tables' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='24' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='24' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='24' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='24' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='24' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='24' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='24' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='24' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='24' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='24' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='24' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='24' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='24' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='24' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='126607192' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='126607192' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='126625336' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='126639428' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='126659584' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='126659584' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='126683092' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='126692000' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='126697196' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='126746420' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='126747828' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='126751144' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='126778156' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='126788784' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='126789520' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='126795152' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='126832964' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='126845144' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='126886096' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='126898944' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='126905664' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='126919204' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='126946596' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='126969796' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='126977300' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='126977300' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='126979096' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='126986108' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='126994704' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='126998432' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='126998432' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='126998432' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Data Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='126607192' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='126607192' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='126625336' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='126639428' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='126659584' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='126659584' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='126683092' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='126692000' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='126697196' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='126746420' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='126747828' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='126751144' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='126778156' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='126788784' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='126789520' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='126795152' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='126832964' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='126845144' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='126886096' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='126898944' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='126905664' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='126919204' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='126946596' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='126969796' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='126977300' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='126977300' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='126979096' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='126986108' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='126994704' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='126998432' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='126998432' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='126998432' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='100198400' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='100198400' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='100214784' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='100235264' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='100249600' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='100249600' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='100267008' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='100281344' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='100283392' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='100319232' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='100320256' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='100325376' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='100366336' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='100373504' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='100375552' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='100384768' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='100426752' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='100440064' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='100482048' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='100501504' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='100508672' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='100524032' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='100545536' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='100562944' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='100569088' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='100569088' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='100571136' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='100579328' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='100587520' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='100590592' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='100590592' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='100590592' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Index Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='100198400' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='100198400' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='100214784' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='100235264' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='100249600' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='100249600' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='100267008' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='100281344' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='100283392' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='100319232' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='100320256' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='100325376' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='100366336' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='100373504' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='100375552' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='100384768' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='100426752' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='100440064' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='100482048' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='100501504' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='100508672' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='100524032' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='100545536' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='100562944' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='100569088' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='100569088' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='100571136' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='100579328' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='100587520' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='100590592' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='100590592' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='100590592' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='2' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='2' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='2' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='2' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='2' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='2' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='2' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='2' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='2' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='2' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='2' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='2' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='2' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='2' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='2' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='2' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='2' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='6' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='6' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='6' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='6' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='6' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='6' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='6' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='6' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='6' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='6' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='6' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='6' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='6' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='6' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='6' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='6' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='6' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='6' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='6' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='6' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='6' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='6' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='6' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='6' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='6' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='6' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='6' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='11042816' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='11042816' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='11042816' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='11042816' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='6832128' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='6832128' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='6832128' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='6832128' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='115564376' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='115564376' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='115582520' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='115596612' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='115616768' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='115616768' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='115640276' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='115649184' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='115654380' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='115703604' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='115705012' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='115708328' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='115735340' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='115745968' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='115746704' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='115752336' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='115790148' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='115802328' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='115843280' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='115856128' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='115862848' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='115876388' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='115903780' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='115926980' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='115934484' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='115934484' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='115936280' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='115943292' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='115951888' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='115955616' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='115955616' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='115955616' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='115564376' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='115564376' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='115582520' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='115596612' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='115616768' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='115616768' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='115640276' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='115649184' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='115654380' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='115703604' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='115705012' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='115708328' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='115735340' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='115745968' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='115746704' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='115752336' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='115790148' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='115802328' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='115843280' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='115856128' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='115862848' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='115876388' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='115903780' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='115926980' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='115934484' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='115934484' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='115936280' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='115943292' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='115951888' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='115955616' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='115955616' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='115955616' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='93366272' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='93366272' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='93382656' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='93403136' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='93417472' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='93417472' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='93434880' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='93449216' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='93451264' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='93487104' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='93488128' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='93493248' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='93534208' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='93541376' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='93543424' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='93552640' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='93594624' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='93607936' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='93649920' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='93669376' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='93676544' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='93691904' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='93713408' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='93730816' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='93736960' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='93736960' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='93739008' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='93747200' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='93755392' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='93758464' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='93758464' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='93758464' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='93366272' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='93366272' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='93382656' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='93403136' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='93417472' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='93417472' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='93434880' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='93449216' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='93451264' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='93487104' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='93488128' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='93493248' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='93534208' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='93541376' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='93543424' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='93552640' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='93594624' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='93607936' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='93649920' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='93669376' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='93676544' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='93691904' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='93713408' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='93730816' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='93736960' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='93736960' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='93739008' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='93747200' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='93755392' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='93758464' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='93758464' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='93758464' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='3560120' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2869480' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2509328' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2272752' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='3565576' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2993512' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='3664408' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='3688176' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='8747928' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='137528' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='112592' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='143464' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='638760' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='1552544' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='1864000' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='1634592' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='1964432' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='1961960' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='1874064' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2162976' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2280784' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2109928' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='3097576' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='2643136' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='2667816' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='2392216' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='2427416' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='2826200' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='2754192' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='2863024' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='3197528' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='3123600' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_free_memory' xAxisName='' yAxisName='free' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='3560120' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2869480' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2509328' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2272752' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='3565576' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2993512' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='3664408' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='3688176' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='8747928' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='137528' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='112592' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='143464' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='638760' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='1552544' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='1864000' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='1634592' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='1964432' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='1961960' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='1874064' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2162976' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2280784' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2109928' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='3097576' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='2643136' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='2667816' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='2392216' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='2427416' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='2826200' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='2754192' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='2863024' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='3197528' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='3123600' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='3.8830814837822' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='3.883098525769' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='3.8840234045538' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='3.8856986697848' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='3.8863261803906' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='3.8879554208424' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='3.8892616389055' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='3.8892504547601' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='3.8886918707336' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='3.8881462928939' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='3.888012636196' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='3.8877780783225' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='3.8871416062657' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='3.8866245808982' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='3.8862428375991' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='3.8857894784648' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='3.8872189063575' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='3.8868411140132' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='3.8866737682513' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='3.8874557678478' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='3.8876731576888' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='3.8886073769099' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='3.8896697609509' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='3.891297113998' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='3.891847217902' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='3.8940376711179' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='3.8962076125099' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='3.8961673470858' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='3.8965841394129' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='3.89662554813' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='3.8963530369853' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='3.8968218915904' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_hits' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='3.8830814837822' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='3.883098525769' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='3.8840234045538' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='3.8856986697848' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='3.8863261803906' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='3.8879554208424' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='3.8892616389055' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='3.8892504547601' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='3.8886918707336' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='3.8881462928939' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='3.888012636196' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='3.8877780783225' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='3.8871416062657' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='3.8866245808982' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='3.8862428375991' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='3.8857894784648' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='3.8872189063575' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='3.8868411140132' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='3.8866737682513' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='3.8874557678478' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='3.8876731576888' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='3.8886073769099' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='3.8896697609509' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='3.891297113998' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='3.891847217902' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='3.8940376711179' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='3.8962076125099' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='3.8961673470858' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='3.8965841394129' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='3.89662554813' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='3.8963530369853' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='3.8968218915904' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='1.5562452447494' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='1.5561561686397' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='1.5565580222148' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='1.5572981568289' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='1.557395850683' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='1.5576974201177' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='1.5579716291626' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='1.5578574560234' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='1.557729287402' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='1.5576772999733' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='1.5576044452154' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='1.5574826705491' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='1.5571465200698' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='1.556893867054' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='1.5566850112096' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='1.5564124536558' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='1.556996046251' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='1.5568037075759' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='1.5565872582263' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1.5570831682455' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1.5570471723376' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1.5572369888126' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1.5575336802501' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='1.5577774422115' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1.5578001479688' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1.558799356214' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1.5598034239963' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1.5596900224491' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1.5597341703456' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1.5596660627957' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1.5594666036491' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1.5596372041205' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_inserts' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='1.5562452447494' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='1.5561561686397' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='1.5565580222148' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='1.5572981568289' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='1.557395850683' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='1.5576974201177' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='1.5579716291626' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='1.5578574560234' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='1.557729287402' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='1.5576772999733' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='1.5576044452154' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='1.5574826705491' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='1.5571465200698' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='1.556893867054' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='1.5566850112096' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='1.5564124536558' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='1.556996046251' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='1.5568037075759' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='1.5565872582263' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1.5570831682455' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1.5570471723376' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1.5572369888126' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1.5575336802501' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='1.5577774422115' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1.5578001479688' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1.558799356214' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1.5598034239963' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1.5596900224491' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1.5597341703456' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1.5596660627957' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1.5594666036491' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1.5596372041205' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.0015422942553755' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0015784784239443' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0016171411035374' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0016578956421638' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0015814485646848' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0016115585694504' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.0017149488011459' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0015681769225515' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0014971497827544' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.0015882008848208' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0016051975658911' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0017070141739389' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.0017431754935732' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.0016693425424905' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0016186770767072' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0016552302893079' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001548848512587' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0015036007891528' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.0015062146735406' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0015441377571489' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0015388045417002' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0016617882379395' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001632715993872' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.0016303025253758' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0016886620474962' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001554201981972' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0016022433813589' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0016017275347525' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0015945317184404' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0017153218224842' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0016881831852672' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0015276442469543' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_queries_in_cache' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.0015422942553755' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0015784784239443' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0016171411035374' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0016578956421638' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0015814485646848' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0016115585694504' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.0017149488011459' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0015681769225515' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0014971497827544' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.0015882008848208' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0016051975658911' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0017070141739389' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.0017431754935732' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.0016693425424905' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0016186770767072' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0016552302893079' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001548848512587' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0015036007891528' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.0015062146735406' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0015441377571489' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0015388045417002' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0016617882379395' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001632715993872' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.0016303025253758' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0016886620474962' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001554201981972' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0016022433813589' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0016017275347525' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0015945317184404' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0017153218224842' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0016881831852672' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0015276442469543' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='1.172823042371' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='1.1727351599311' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='1.173128417289' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='1.1738689705566' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='1.1739675349132' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='1.1739412306338' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='1.1738656043666' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='1.1738924826946' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='1.1733648540192' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='1.1727099235451' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='1.172653899197' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='1.1724780522707' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='1.172194322513' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='1.1720515429871' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='1.1719364592501' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='1.1716923593006' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='1.1724457649864' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='1.1723003404993' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='1.1720702453004' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1.1717856934372' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1.171619799155' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1.1714855514118' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1.1714051318588' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='1.1714112924822' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1.17122540205' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1.1718386610758' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1.1723802815314' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1.1722575636421' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1.1721878161079' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1.1719391305025' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1.1718192446324' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1.1721102397205' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_lowmem_prunes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='1.172823042371' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='1.1727351599311' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='1.173128417289' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='1.1738689705566' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='1.1739675349132' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='1.1739412306338' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='1.1738656043666' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='1.1738924826946' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='1.1733648540192' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='1.1727099235451' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='1.172653899197' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='1.1724780522707' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='1.172194322513' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='1.1720515429871' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='1.1719364592501' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='1.1716923593006' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='1.1724457649864' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='1.1723003404993' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='1.1720702453004' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1.1717856934372' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1.171619799155' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1.1714855514118' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1.1714051318588' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='1.1714112924822' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1.17122540205' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1.1718386610758' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1.1723802815314' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1.1722575636421' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1.1721878161079' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1.1719391305025' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1.1718192446324' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1.1721102397205' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.90498335795366' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.9048314679491' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.90456190916499' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.90432199144098' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.90402675863807' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.9037311908244' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.90347738566847' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.90320701145307' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.90290322367247' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.90240800274993' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.90229904853166' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.90203397083442' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.9016681477849' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.90143557699444' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.90116680629432' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.90084196582027' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.9006273849663' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.90030333773823' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.89996270723707' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.89965462219004' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.89935204023802' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.89933279745818' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.89956375578031' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.89974160175195' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.89977733673554' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.89993047936242' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.90010380390242' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.90021224682611' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.90043952458245' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.90061852387994' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.90074463806051' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.90095193013896' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_not_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.90498335795366' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.9048314679491' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.90456190916499' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.90432199144098' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.90402675863807' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.9037311908244' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.90347738566847' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.90320701145307' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.90290322367247' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.90240800274993' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.90229904853166' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.90203397083442' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.9016681477849' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.90143557699444' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.90116680629432' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.90084196582027' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.9006273849663' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.90030333773823' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.89996270723707' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.89965462219004' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.89935204023802' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.89933279745818' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.89956375578031' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.89974160175195' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.89977733673554' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.89993047936242' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.90010380390242' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.90021224682611' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.90043952458245' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.90061852387994' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.90074463806051' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.90095193013896' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.0010438344086331' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010438241230261' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010438043776593' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010437846500775' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001043764945729' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010437452481724' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.0010437239350692' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010437059171193' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010436862726498' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.0010436535855995' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010436470529697' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010436274613679' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.0010436062737218' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.0010435850957901' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010435688082188' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010435492976183' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010435297936563' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010435103125657' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.001043489233122' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010434714026483' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010434519791694' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010434325676503' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001043413173467' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.0010433921880176' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.00104337443164' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010433550947005' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001043335769629' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010433164617777' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010432971496992' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010432778976438' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010432586413153' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010432394021152' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.0010438344086331' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010438241230261' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010438043776593' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010437846500775' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001043764945729' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010437452481724' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.0010437239350692' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010437059171193' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010436862726498' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.0010436535855995' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010436470529697' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010436274613679' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.0010436062737218' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.0010435850957901' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010435688082188' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010435492976183' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010435297936563' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010435103125657' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.001043489233122' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010434714026483' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010434519791694' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010434325676503' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001043413173467' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.0010433921880176' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.00104337443164' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010433550947005' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001043335769629' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010433164617777' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010432971496992' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010432778976438' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010432586413153' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010432394021152' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.0010869173702611' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010865213400315' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010861068909417' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010868187061536' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010860293790329' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010868655642281' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.0010717072535135' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001071303081929' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.00108000828791' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.001075458340822' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010754470487047' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001073294135098' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.0010728847717922' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.00108156639355' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010845234879445' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010851077702026' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010748712450889' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010863990492375' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.0010856116617745' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010857007652209' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010841726910767' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010740835511063' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010742985454478' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.00107401467499' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010736126068405' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010740752760883' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010734231754' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010727716557866' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010738525667726' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010743143328112' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010723037290556' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010731363601491' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.0010869173702611' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010865213400315' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010861068909417' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010868187061536' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010860293790329' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010868655642281' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.0010717072535135' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001071303081929' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.00108000828791' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.001075458340822' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010754470487047' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001073294135098' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.0010728847717922' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.00108156639355' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010845234879445' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010851077702026' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010748712450889' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010863990492375' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.0010856116617745' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010857007652209' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010841726910767' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010740835511063' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010742985454478' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.00107401467499' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010736126068405' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010740752760883' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010734231754' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010727716557866' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010738525667726' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010743143328112' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010723037290556' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010731363601491' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.27864050650033' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.27860591069721' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.27856293468805' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.27854314070297' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.27851552155061' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.27852822849618' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.27853567904333' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.27849498661912' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.27844427815924' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.27839658496753' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.27837627338718' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.27832842877568' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.27823996706854' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.27913978313053' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.27908451601901' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.27901809386217' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.27896235792186' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.27893840680153' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.27888911711762' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.27885045092265' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.27881420157174' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.27882473320925' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.27882781318294' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.27887005849763' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.27885115630038' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.27883926631288' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.27882599054116' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.27879700891168' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.27877657507918' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.27875791803141' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.27871256709261' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.27870283634418' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Slow_queries' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.27864050650033' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.27860591069721' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.27856293468805' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.27854314070297' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.27851552155061' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.27852822849618' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.27853567904333' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.27849498661912' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.27844427815924' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.27839658496753' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.27837627338718' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.27832842877568' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.27823996706854' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.27913978313053' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.27908451601901' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.27901809386217' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.27896235792186' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.27893840680153' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.27888911711762' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.27885045092265' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.27881420157174' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.27882473320925' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.27882781318294' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.27887005849763' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.27885115630038' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.27883926631288' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.27882599054116' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.27879700891168' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.27877657507918' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.27875791803141' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.27871256709261' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.27870283634418' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='92.414293981481' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='92.435983796296' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='92.477650462963' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='92.51931712963' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='92.560972222222' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='92.602650462963' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='92.647789351852' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='92.685983796296' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='92.727662037037' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='92.797094907407' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='92.810983796296' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='92.852662037037' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='92.897777777778' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='92.942916666667' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='92.977662037037' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='93.01931712963' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='93.06099537037' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='93.102662037037' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='93.147789351852' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='93.18599537037' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='93.227650462963' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='93.26931712963' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='93.310983796296' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='93.356111111111' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='93.394328703704' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='93.435983796296' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='93.477650462963' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='93.51931712963' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='93.561030092593' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='93.602650462963' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='93.64431712963' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='93.685983796296' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Uptime' xAxisName='' yAxisName='days' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='92.414293981481' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='92.435983796296' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='92.477650462963' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='92.51931712963' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='92.560972222222' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='92.602650462963' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='92.647789351852' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='92.685983796296' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='92.727662037037' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='92.797094907407' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='92.810983796296' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='92.852662037037' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='92.897777777778' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='92.942916666667' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='92.977662037037' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='93.01931712963' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='93.06099537037' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='93.102662037037' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='93.147789351852' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='93.18599537037' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='93.227650462963' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='93.26931712963' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='93.310983796296' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='93.356111111111' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='93.394328703704' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='93.435983796296' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='93.477650462963' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='93.51931712963' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='93.561030092593' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='93.602650462963' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='93.64431712963' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='93.685983796296' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='5.71714294839' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='5.7165722423764' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='5.7163831751641' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='5.7166669022698' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='5.7159993887913' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='5.7156328893774' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='5.7155157131955' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='5.7145166955979' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='5.7134743443003' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='5.7120745443595' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='5.7116252927938' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='5.7107469395336' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='5.7092997729484' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='5.709981410334' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='5.7088933896159' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='5.7075473048024' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='5.7076368669991' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='5.7064382831079' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='5.7052122094407' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='5.7047681918505' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='5.7037769329334' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='5.7039155948853' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='5.7047244324007' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='5.7053517941058' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='5.7052312043097' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='5.7067683124797' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='5.7083105253051' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='5.7083480351467' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='5.7088519043262' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='5.7091586789063' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='5.7090844011935' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='5.7097846690129' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_immediate' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='5.71714294839' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='5.7165722423764' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='5.7163831751641' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='5.7166669022698' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='5.7159993887913' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='5.7156328893774' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='5.7155157131955' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='5.7145166955979' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='5.7134743443003' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='5.7120745443595' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='5.7116252927938' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='5.7107469395336' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='5.7092997729484' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='5.709981410334' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='5.7088933896159' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='5.7075473048024' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='5.7076368669991' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='5.7064382831079' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='5.7052122094407' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='5.7047681918505' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='5.7037769329334' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='5.7039155948853' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='5.7047244324007' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='5.7053517941058' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='5.7052312043097' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='5.7067683124797' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='5.7083105253051' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='5.7083480351467' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='5.7088519043262' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='5.7091586789063' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='5.7090844011935' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='5.7097846690129' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.0014889415180106' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0014888267894109' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0014886065439485' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001488386496864' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0014881667089311' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0014879469967575' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.0014878341898436' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001487633161003' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0014874139848496' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.0014870492907602' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0014869764052761' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0014871317686448' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.0014868951934424' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.0014866587267075' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0014864768643404' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0014862590145491' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0014860412388828' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0014858237185902' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.0014855883515456' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0014853892615699' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001485172384554' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0014850797341282' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0014848631288073' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.0014847527289967' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001484554364893' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0014843383436545' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0014841224549986' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001483906758717' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0014836910152105' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0014834759422495' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0014832608215508' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0014830458922012' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_waited' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.0014889415180106' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0014888267894109' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0014886065439485' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001488386496864' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0014881667089311' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0014879469967575' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.0014878341898436' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001487633161003' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0014874139848496' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.0014870492907602' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0014869764052761' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0014871317686448' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.0014868951934424' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.0014866587267075' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0014864768643404' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0014862590145491' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0014860412388828' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0014858237185902' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.0014855883515456' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0014853892615699' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001485172384554' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0014850797341282' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0014848631288073' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.0014847527289967' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001484554364893' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0014843383436545' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0014841224549986' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001483906758717' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0014836910152105' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0014834759422495' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0014832608215508' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0014830458922012' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.0010008766881727' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010002504235601' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010003754660942' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010007505940013' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010008752989146' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010004999456934' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.0010008744787014' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010007492442935' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010007489075311' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.001000873071712' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010007482351938' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010007478993377' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.0010008721254744' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.0010008717019158' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001000622411546' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010008709859524' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010006218541951' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010008702062513' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.0010009940396142' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001000869428053' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010009931880953' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001000868651353' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010004961505539' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.0010012397768005' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010009914155803' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010011148452923' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010008667153926' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010012376131936' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.001000989649136' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010012365113613' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010012359611804' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010011118703401' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.0010008766881727' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0010002504235601' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0010003754660942' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0010007505940013' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0010008752989146' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0010004999456934' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.0010008744787014' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0010007492442935' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0010007489075311' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.001000873071712' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010007482351938' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010007478993377' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.0010008721254744' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.0010008717019158' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001000622411546' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010008709859524' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010006218541951' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010008702062513' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.0010009940396142' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001000869428053' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010009931880953' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001000868651353' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010004961505539' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.0010012397768005' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010009914155803' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010011148452923' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010008667153926' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010012376131936' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.001000989649136' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010012365113613' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010012359611804' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010011118703401' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.0011357614255952' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0011357295696008' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0011356684153791' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0011356073162399' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0011355462890577' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0011354852829111' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.0011354192731858' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0011353634690211' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0011360515348236' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.0011359497380099' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0011359293935342' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0011358683796885' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.0011358023953051' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.0011357364411748' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0011356857170243' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0011356249554397' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0011356885853688' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0011356278600261' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.001135562152389' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0011355065722551' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0011355701750084' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0011355096110688' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0011354491012171' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.001135507604295' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0011354521536645' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0011353917671648' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0011353314177272' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0011352711220659' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0011352108132034' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0011351506917848' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0011350905570217' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0011350304757483' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_created' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.0011357614255952' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0011357295696008' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0011356684153791' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0011356073162399' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0011355462890577' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0011354852829111' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.0011354192731858' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0011353634690211' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0011360515348236' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.0011359497380099' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0011359293935342' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0011358683796885' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.0011358023953051' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.0011357364411748' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0011356857170243' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0011356249554397' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0011356885853688' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0011356278600261' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.001135562152389' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0011355065722551' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0011355701750084' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0011355096110688' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0011354491012171' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.001135507604295' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0011354521536645' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0011353917671648' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0011353314177272' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0011352711220659' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0011352108132034' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0011351506917848' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0011350905570217' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0011350304757483' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='2.6355287901265' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2.6352569577369' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2.6352544640103' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2.6366538319262' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2.6372346156212' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2.6375672442581' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='2.6387283630546' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='2.6387232677441' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='2.6390852344143' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='2.6408140570532' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='2.6407391117126' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2.6403676174545' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='2.6400055417344' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='2.6410466001882' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2.6409628955581' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2.6406947780286' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2.6410293179379' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2.6411688361737' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='2.6417296090479' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2.6411839374409' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2.6413021738777' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2.6408891068514' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='2.6416113531154' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='2.6413902212357' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='2.6415902553763' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='2.6414077820413' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='2.6416469870682' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='2.6414780616354' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='2.6418063917232' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='2.6412717321509' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='2.6407090511538' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='2.6410014047864' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='2.6355287901265' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2.6352569577369' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2.6352544640103' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2.6366538319262' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2.6372346156212' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2.6375672442581' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='2.6387283630546' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='2.6387232677441' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='2.6390852344143' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='2.6408140570532' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='2.6407391117126' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2.6403676174545' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='2.6400055417344' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='2.6410466001882' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2.6409628955581' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2.6406947780286' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2.6410293179379' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2.6411688361737' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='2.6417296090479' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2.6411839374409' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2.6413021738777' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2.6408891068514' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='2.6416113531154' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='2.6413902212357' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='2.6415902553763' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='2.6414077820413' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='2.6416469870682' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='2.6414780616354' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='2.6418063917232' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='2.6412717321509' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='2.6407090511538' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='2.6410014047864' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='1.5796746109227' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='1.5796347547333' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='1.5795864841718' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='1.5795357551082' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='1.5796719579736' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='1.5795916668552' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='1.5797004260835' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='1.5795269746052' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='1.5793846975724' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='1.5794363673532' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='1.5793633740619' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='1.5792722191544' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='1.5793173201129' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='1.5791700849835' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='1.5796172666921' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='1.5801230553839' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='1.5801805118358' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='1.5801208840798' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='1.580262672483' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1.5801916964653' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1.5801227803953' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1.5801324048029' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1.5801781155681' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='1.5802883175336' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1.5801876749694' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1.5801710643391' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1.5801070987829' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1.5800165815416' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1.5799508466015' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1.5798742443215' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1.5797531760803' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1.5796509937835' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='1.5796746109227' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='1.5796347547333' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='1.5795864841718' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='1.5795357551082' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='1.5796719579736' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='1.5795916668552' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='1.5797004260835' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='1.5795269746052' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='1.5793846975724' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='1.5794363673532' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='1.5793633740619' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='1.5792722191544' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='1.5793173201129' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='1.5791700849835' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='1.5796172666921' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='1.5801230553839' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='1.5801805118358' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='1.5801208840798' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='1.580262672483' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1.5801916964653' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1.5801227803953' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1.5801324048029' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1.5801781155681' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='1.5802883175336' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1.5801876749694' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1.5801710643391' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1.5801070987829' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1.5800165815416' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1.5799508466015' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1.5798742443215' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1.5797531760803' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1.5796509937835' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.36736873880266' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.36738594602947' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.36731686159406' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.36735880219709' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.36732947651623' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.36734608065699' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.36749952047336' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.3675442942612' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.36758399559642' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.36764122701997' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.36765120729619' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.36764954808183' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.3676112742401' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.36909120193747' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.36909257002441' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.36909670532144' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.36916280640311' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.36919856117612' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.3691631974477' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.36912117839794' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.3691189600973' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.36946353817332' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.37003727814783' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.37129938626089' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.37161295507524' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.37198867825057' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.37238160252952' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.37287739362127' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.37393900928452' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.37436893331976' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.37459250285723' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.37498043034077' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.36736873880266' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.36738594602947' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.36731686159406' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.36735880219709' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.36732947651623' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.36734608065699' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.36749952047336' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.3675442942612' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.36758399559642' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.36764122701997' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.36765120729619' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.36764954808183' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.3676112742401' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.36909120193747' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.36909257002441' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.36909670532144' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.36916280640311' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.36919856117612' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.3691631974477' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.36912117839794' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.3691189600973' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.36946353817332' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.37003727814783' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.37129938626089' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.37161295507524' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.37198867825057' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.37238160252952' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.37287739362127' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.37393900928452' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.37436893331976' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.37459250285723' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.37498043034077' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.1762111409533' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.17619106378551' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.17617796154201' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.17613584813182' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.17610842452698' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.17610072968324' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.17610311665458' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.17604781739518' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.17598174537893' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.17586017444721' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.1758347553751' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.17576425589625' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.17568436533187' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.1756122296292' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.17555519358866' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.17551609575819' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.17545932887008' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.17539119749082' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.17532162077165' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.17526244555207' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.17520841977691' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.17520455423977' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.17525985810838' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.17533505811082' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.17536286058094' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.17540206201785' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.17544987407244' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.17549714847732' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.17555468572269' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.17560467804397' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.17565330361918' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.17570744529382' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.1762111409533' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.17619106378551' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.17617796154201' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.17613584813182' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.17610842452698' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.17610072968324' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.17610311665458' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.17604781739518' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.17598174537893' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.17586017444721' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.1758347553751' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.17576425589625' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.17568436533187' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.1756122296292' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.17555519358866' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.17551609575819' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.17545932887008' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.17539119749082' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.17532162077165' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.17526244555207' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.17520841977691' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.17520455423977' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.17525985810838' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.17533505811082' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.17536286058094' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.17540206201785' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.17544987407244' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.17549714847732' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.17555468572269' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.17560467804397' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.17565330361918' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.17570744529382' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.33457220998686' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.33458772193318' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.33452177559418' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.33456897815008' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.33454790661011' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.33456239178519' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.33470169707583' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.33473588564234' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.33476699239984' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.3348102383623' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.33481814817027' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.33480567331508' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.33475942892227' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.33608383530911' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.33607986162547' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.33608073853139' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.3361366275852' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.33618219011023' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.33616145502052' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.33611296975508' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.33612078222501' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.33644188108188' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.33698236383241' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.33818482394178' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.33847538501004' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.33883218828399' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.33920014662348' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.33967619199787' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.34068877761384' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.34109317607712' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.34130250644276' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.34166162956458' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.33457220998686' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.33458772193318' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.33452177559418' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.33456897815008' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.33454790661011' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.33456239178519' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.33470169707583' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.33473588564234' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.33476699239984' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.3348102383623' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.33481814817027' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.33480567331508' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.33475942892227' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.33608383530911' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.33607986162547' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.33608073853139' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.3361366275852' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.33618219011023' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.33616145502052' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.33611296975508' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.33612078222501' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.33644188108188' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.33698236383241' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.33818482394178' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.33847538501004' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.33883218828399' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.33920014662348' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.33967619199787' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.34068877761384' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.34109317607712' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.34130250644276' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.34166162956458' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.32939010619825' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.32933145661744' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.32924147075576' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.32912517005645' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.32902276977588' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.32894275221854' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.32888104191389' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.32877165131819' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.32899129270177' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.32877207440217' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.32872364781118' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.32859623906353' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.32844112903869' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.32846042846889' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.32834677161355' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.32823639019125' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.32811868833538' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.32798248523446' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.32783649750639' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.32771578521153' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.32765348126704' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.32765050892421' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.32775421160499' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.32790323095752' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.327941346615' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.32800282885799' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.3280783308894' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.32814497858867' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.32825148580355' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.32833064771309' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.32840315039089' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.32851326862824' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_write_requests' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.32939010619825' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.32933145661744' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.32924147075576' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.32912517005645' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.32902276977588' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.32894275221854' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.32888104191389' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.32877165131819' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.32899129270177' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.32877207440217' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.32872364781118' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.32859623906353' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.32844112903869' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.32846042846889' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.32834677161355' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.32823639019125' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.32811868833538' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.32798248523446' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.32783649750639' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.32771578521153' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.32765348126704' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.32765050892421' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.32775421160499' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.32790323095752' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.327941346615' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.32800282885799' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.3280783308894' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.32814497858867' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.32825148580355' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.32833064771309' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.32840315039089' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.32851326862824' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.001' color='ff6600' showName='0'/>
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
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_free' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.001' color='ff6600' showName='0'/>
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
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_total' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='448' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='448' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='448' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='448' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='448' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='448' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='448' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='448' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='448' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='448' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='448' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='448' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='448' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_total' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='448' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='448' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='448' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='448' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='448' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='448' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='448' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='448' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='448' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='448' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='448' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='448' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='448' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='448' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.57086246641188' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.57080550478566' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.57080509179583' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.57088912100313' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.57078883288643' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.57066886971903' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.57053735954154' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.57041729647934' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.57031638472378' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.57015956495585' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.5701232766117' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.56998822931092' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.56982216215354' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.57333195704054' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.57320895102493' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.57306867500267' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.57315187669378' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.57301354538188' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.57286403178243' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.57273948954637' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.57261326894329' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.57248100960617' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.57236102407459' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.57225716343035' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.57213642250166' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.57217203313964' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.57221298924072' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.57207767272779' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.57195357518791' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.57181543843787' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.57168196259265' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.57161334103571' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_disk_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.57086246641188' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.57080550478566' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.57080509179583' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.57088912100313' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.57078883288643' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.57066886971903' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.57053735954154' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.57041729647934' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.57031638472378' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.57015956495585' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.5701232766117' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.56998822931092' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.56982216215354' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.57333195704054' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.57320895102493' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.57306867500267' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.57315187669378' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.57301354538188' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.57286403178243' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.57273948954637' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.57261326894329' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.57248100960617' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.57236102407459' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.57225716343035' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.57213642250166' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.57217203313964' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.57221298924072' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.57207767272779' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.57195357518791' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.57181543843787' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.57168196259265' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.57161334103571' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.00934945291527' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0093489962835892' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0093472370513947' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0093497327697707' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0093474756629389' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0093449685277937' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.0093478986089417' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0093452078147678' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0093424554431223' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.00934419580055' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0093456906454015' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0093456840598968' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.0093486079880713' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.0093599949590723' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.009373800457348' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0093710459881827' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0093697843534022' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0093782214724636' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.0093890730692427' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0093861303868831' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0093900805835576' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0093972526295007' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0094034259691898' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.0094328378193417' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0094323612916658' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0094300884852709' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0094307882566008' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0094314874043774' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0094527169765526' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0094561302461931' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0094548396470144' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0094515735374365' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.00934945291527' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.0093489962835892' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.0093472370513947' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.0093497327697707' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.0093474756629389' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.0093449685277937' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.0093478986089417' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.0093452078147678' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.0093424554431223' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.00934419580055' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0093456906454015' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0093456840598968' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.0093486079880713' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.0093599949590723' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.009373800457348' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0093710459881827' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0093697843534022' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0093782214724636' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.0093890730692427' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0093861303868831' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0093900805835576' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0093972526295007' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0094034259691898' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.0094328378193417' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0094323612916658' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0094300884852709' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0094307882566008' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0094314874043774' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0094527169765526' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0094561302461931' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0094548396470144' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0094515735374365' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.89059590311093' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.89061993091064' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.8907787991568' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.89100770484742' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.89105045222944' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.8910809399579' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.89118771185027' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.89119300408126' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.89122301218098' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.89130377781872' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.89130560294725' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.89131408032688' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.89128026125889' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.8968713457633' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.8968567308207' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.89683605257221' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.89704824096104' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.89703745367706' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.89702991761027' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.89702509914585' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.89704722311437' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.89706090189092' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.89710086443071' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.89715096414962' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.89715888426091' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.89735679706929' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.89756841374616' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.8975944473989' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.89763424040037' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.89766734221404' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.89768452177387' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.89781509682723' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.89059590311093' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.89061993091064' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.8907787991568' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.89100770484742' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.89105045222944' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.8910809399579' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.89118771185027' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.89119300408126' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.89122301218098' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.89130377781872' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.89130560294725' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.89131408032688' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.89128026125889' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.8968713457633' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.8968567308207' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.89683605257221' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.89704824096104' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.89703745367706' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.89702991761027' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.89702509914585' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.89704722311437' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.89706090189092' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.89710086443071' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.89715096414962' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.89715888426091' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.89735679706929' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.89756841374616' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.8975944473989' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.89763424040037' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.89766734221404' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.89768452177387' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.89781509682723' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='2.5774398075294' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2.5771642011006' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2.5772250527499' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2.5776577689169' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2.5773938049844' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2.5773329122124' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='2.5772792444104' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='2.5768331916221' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='2.5763372680103' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='2.5756663189763' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='2.5754630734085' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2.5750094422291' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='2.5742358187414' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='2.5753882684862' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2.5748555694008' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2.5741907700623' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2.5744925358841' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2.5739048765115' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='2.5732669944429' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2.5733940111312' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2.572970336327' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2.5730696488378' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='2.5735248606778' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='2.5738682573499' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='2.5738640546171' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='2.574945412839' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='2.5760434417565' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='2.5759668636493' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='2.5761674179547' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='2.5762078644843' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='2.5760637083606' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='2.5763656640108' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_select' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='2.5774398075294' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='2.5771642011006' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='2.5772250527499' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='2.5776577689169' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='2.5773938049844' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='2.5773329122124' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='2.5772792444104' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='2.5768331916221' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='2.5763372680103' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='2.5756663189763' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='2.5754630734085' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='2.5750094422291' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='2.5742358187414' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='2.5753882684862' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2.5748555694008' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='2.5741907700623' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='2.5744925358841' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='2.5739048765115' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='2.5732669944429' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='2.5733940111312' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='2.572970336327' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='2.5730696488378' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='2.5735248606778' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='2.5738682573499' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='2.5738640546171' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='2.574945412839' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='2.5760434417565' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='2.5759668636493' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='2.5761674179547' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='2.5762078644843' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='2.5760637083606' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='2.5763656640108' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='1.2598020312865' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='1.2597671136018' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='1.259723664464' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='1.2596785030754' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='1.2596496703624' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='1.2596265480662' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='1.259674326642' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='1.2595465898208' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='1.2594912171869' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='1.2594453574973' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='1.2593848334472' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='1.2593365883575' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='1.2593617686107' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='1.259262953615' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='1.2591822508144' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='1.2591354916946' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='1.2590899536967' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='1.2590436184668' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='1.2590720714754' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1.258962499084' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1.2589246330387' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1.258918412418' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1.2589241049661' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='1.2590046228797' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1.2589055763409' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1.2588975493099' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1.2588903640935' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1.2588773684977' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1.2588726684021' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1.2588627879201' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1.258847473615' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1.2588351379195' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_insert' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='1.2598020312865' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='1.2597671136018' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='1.259723664464' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='1.2596785030754' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='1.2596496703624' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='1.2596265480662' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='1.259674326642' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='1.2595465898208' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='1.2594912171869' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='1.2594453574973' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='1.2593848334472' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='1.2593365883575' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='1.2593617686107' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='1.259262953615' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='1.2591822508144' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='1.2591354916946' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='1.2590899536967' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='1.2590436184668' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='1.2590720714754' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1.258962499084' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1.2589246330387' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1.258918412418' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1.2589241049661' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='1.2590046228797' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1.2589055763409' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1.2588975493099' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1.2588903640935' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1.2588773684977' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1.2588726684021' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1.2588627879201' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1.258847473615' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1.2588351379195' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.024952248047647' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.024953890010717' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.024950982150467' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.024947826711364' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.024959432146078' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.024986894423593' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.025002441544534' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.025006911029363' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.025001363011707' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.024995004034215' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.024994406193691' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.024990616356309' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.024983076778937' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.024982512165223' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.02498313513675' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.024978740974875' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.024976085975074' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.024985992165657' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.024983069517291' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.025002548666235' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.025004114778279' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.025019947213298' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.02503402898189' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.025066671229045' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.025076775222542' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.025102211989319' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.025107936277599' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.025108705012296' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.02511045078147' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.025113702660317' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.025109894746782' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.025108313961052' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_delete' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.024952248047647' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.024953890010717' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.024950982150467' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.024947826711364' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.024959432146078' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.024986894423593' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.025002441544534' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.025006911029363' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.025001363011707' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.024995004034215' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.024994406193691' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.024990616356309' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.024983076778937' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.024982512165223' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.02498313513675' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.024978740974875' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.024976085975074' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.024985992165657' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.024983069517291' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.025002548666235' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.025004114778279' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.025019947213298' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.02503402898189' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.025066671229045' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.025076775222542' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.025102211989319' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.025107936277599' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.025108705012296' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.02511045078147' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.025113702660317' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.025109894746782' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.025108313961052' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='0.12372557343234' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.12371643450942' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.12371133077824' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.12372136862309' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.12374091602282' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.1238514052661' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.12390161027757' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.12390740751609' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.12388923532797' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.12391340538004' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.12391546351487' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.12392984579562' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.12389045306669' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.1238836945417' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.12386864502251' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.1238579189234' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.12385612656972' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.12385198910502' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.1238480129583' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.12389055018649' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.12389870884306' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.12396268683295' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.12400576936268' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.12402863090952' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.12403442566676' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.12408214093403' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.12412979843048' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.12414610184641' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.12415280442442' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.12417903608746' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.12418837445026' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.12420314031717' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_update' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='0.12372557343234' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='0.12371643450942' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='0.12371133077824' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='0.12372136862309' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='0.12374091602282' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='0.1238514052661' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='0.12390161027757' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='0.12390740751609' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='0.12388923532797' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='0.12391340538004' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.12391546351487' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.12392984579562' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='0.12389045306669' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='0.1238836945417' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.12386864502251' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.1238579189234' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.12385612656972' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.12385198910502' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='0.1238480129583' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.12389055018649' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.12389870884306' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.12396268683295' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.12400576936268' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='0.12402863090952' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.12403442566676' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.12408214093403' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.12412979843048' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.12414610184641' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.12415280442442' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.12417903608746' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.12418837445026' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.12420314031717' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='39.885783186248' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='41.03820912596' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='43.679204397359' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='46.502436865975' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='48.974691732227' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='51.6178273885' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='54.89505818344' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='56.719351194402' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='58.911275052517' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='62.892279539103' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='63.474263639922' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='65.800905581448' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='68.389380601537' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='71.239058023966' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='72.889314314096' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='74.984181526413' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='77.653629949493' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='79.781256254607' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='82.434715764934' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='84.364584469282' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='86.660106576532' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='89.381131825412' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='92.076357446209' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='95.229897143158' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='97.214214916591' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='100.21842247161' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='103.21665309432' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='105.59045782901' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='108.1332571221' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='110.56930466886' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='112.84971997446' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='115.52201830657' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_received' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='39.885783186248' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='41.03820912596' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='43.679204397359' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='46.502436865975' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='48.974691732227' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='51.6178273885' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='54.89505818344' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='56.719351194402' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='58.911275052517' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='62.892279539103' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='63.474263639922' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='65.800905581448' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='68.389380601537' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='71.239058023966' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='72.889314314096' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='74.984181526413' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='77.653629949493' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='79.781256254607' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='82.434715764934' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='84.364584469282' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='86.660106576532' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='89.381131825412' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='92.076357446209' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='95.229897143158' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='97.214214916591' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='100.21842247161' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='103.21665309432' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='105.59045782901' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='108.1332571221' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='110.56930466886' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='112.84971997446' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='115.52201830657' color='ff6600' showName='0'/>
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
<set name='08-24 16:28' value='178.80603411945' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='186.0672067969' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='209.80702995181' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='241.53221668298' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='258.27000833285' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='277.45058143059' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='293.8280162738' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='304.79859763946' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='315.88234313196' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='337.87310339202' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='341.65152504674' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='352.30767431975' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='360.23029357737' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='529.5930951495' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2.9549443750801' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='12.916068931819' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='42.078396909633' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='52.954485105177' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='65.663409116014' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='77.919722851178' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='91.82532465767' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='107.5005919859' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='126.31095007994' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='149.42068986636' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='163.4563433867' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='196.00409234932' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='228.12449537044' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='240.64573037681' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='255.481543724' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='267.11405395319' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='277.66615180644' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='295.29074754626' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_sent' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='08-24 16:28' value='178.80603411945' color='ff6600' showName='0'/>
<set name='08-24 17:00' value='186.0672067969' color='ff6600' showName='0'/>
<set name='08-24 18:00' value='209.80702995181' color='ff6600' showName='0'/>
<set name='08-24 19:00' value='241.53221668298' color='ff6600' showName='0'/>
<set name='08-24 20:00' value='258.27000833285' color='ff6600' showName='0'/>
<set name='08-24 21:00' value='277.45058143059' color='ff6600' showName='0'/>
<set name='08-24 22:05' value='293.8280162738' color='ff6600' showName='0'/>
<set name='08-24 23:00' value='304.79859763946' color='ff6600' showName='0'/>
<set name='08-25 00:00' value='315.88234313196' color='ff6600' showName='0'/>
<set name='08-25 01:40' value='337.87310339202' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='341.65152504674' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='352.30767431975' color='ff6600' showName='0'/>
<set name='08-25 04:05' value='360.23029357737' color='ff6600' showName='0'/>
<set name='08-25 05:10' value='529.5930951495' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='2.9549443750801' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='12.916068931819' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='42.078396909633' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='52.954485105177' color='ff6600' showName='0'/>
<set name='08-25 10:05' value='65.663409116014' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='77.919722851178' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='91.82532465767' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='107.5005919859' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='126.31095007994' color='ff6600' showName='0'/>
<set name='08-25 15:05' value='149.42068986636' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='163.4563433867' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='196.00409234932' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='228.12449537044' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='240.64573037681' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='255.481543724' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='267.11405395319' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='277.66615180644' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='295.29074754626' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr></tr></div></table></body></html>