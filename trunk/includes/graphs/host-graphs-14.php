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

<div id="content"><table cellpadding="0" cellspacing="1" border="0" class="tableborder"><form action="http://testing.kontrollbase.com/index.php/main/graphs" method="post" name="graphform"><input type="hidden" name="server_list_id" value="14" /><tr><th>Start date</th><th>End Date</th><th>&nbsp;</th></tr><tr><td class='td'><input type="text" name="sday" value="2009-09-10" id="sday" maxlength="10" size="15" style="width:50%"  />
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
<set name='09-10 00:00' value='12.7062' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='12.7032' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='12.7006' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='12.6975' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='12.6944' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='12.7008' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='12.6977' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='12.6965' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='12.6941' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='12.6919' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='12.6914' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='12.6906' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='12.6888' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='12.6868' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='12.6847' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='12.6828' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='12.6828' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='12.6808' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='12.6784' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='12.6765' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='12.6741' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='12.6717' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='12.6693' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='12.6665' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='12.6638' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='12.6613' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='12.659' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='12.6563' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='12.6536' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='12.6589' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='12.6567' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='12.655' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='12.6528' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='12.65' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='12.5388' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='12.5397' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='12.5414' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='12.5423' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='12.5432' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='12.5449' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='12.546' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='12.5472' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='12.5477' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='12.5485' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='12.5488' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='12.5498' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='12.5504' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='12.5526' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='12.5539' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='12.5544' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='12.5565' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='12.564' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='12.5683' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='12.5685' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='12.5692' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='12.5703' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='12.5706' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='12.5706' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='12.5714' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='12.5723' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='12.5725' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='12.5729' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='12.574' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='12.5753' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='12.5756' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='12.5759' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='12.5751' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='12.5752' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='12.5749' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='12.5746' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Query Rate' xAxisName='' yAxisName='Q/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='12.7062' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='12.7032' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='12.7006' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='12.6975' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='12.6944' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='12.7008' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='12.6977' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='12.6965' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='12.6941' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='12.6919' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='12.6914' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='12.6906' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='12.6888' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='12.6868' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='12.6847' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='12.6828' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='12.6828' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='12.6808' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='12.6784' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='12.6765' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='12.6741' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='12.6717' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='12.6693' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='12.6665' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='12.6638' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='12.6613' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='12.659' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='12.6563' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='12.6536' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='12.6589' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='12.6567' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='12.655' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='12.6528' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='12.65' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='12.5388' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='12.5397' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='12.5414' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='12.5423' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='12.5432' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='12.5449' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='12.546' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='12.5472' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='12.5477' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='12.5485' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='12.5488' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='12.5498' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='12.5504' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='12.5526' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='12.5539' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='12.5544' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='12.5565' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='12.564' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='12.5683' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='12.5685' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='12.5692' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='12.5703' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='12.5706' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='12.5706' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='12.5714' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='12.5723' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='12.5725' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='12.5729' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='12.574' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='12.5753' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='12.5756' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='12.5759' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='12.5751' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='12.5752' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='12.5749' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='12.5746' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-11 06:15' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-16 01:25' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-16 18:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Connections' xAxisName='' yAxisName='connections' 
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
<set name='09-10 05:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-11 06:15' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-16 01:25' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-16 18:05' value='0.001' color='ff6600' showName='0'/>
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
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 1 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.091' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.451' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.221' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.351' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.311' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.361' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.231' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.091' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.161' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.571' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.311' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.091' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.241' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.141' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.091' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='1.07' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.691' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.161' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.251' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.161' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.181' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.241' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.161' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.161' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.161' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.361' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.421' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.461' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.451' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.241' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.161' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 1 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.091' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.451' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.221' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.351' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.311' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.361' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.231' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.091' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.161' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.571' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.311' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.091' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.241' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.141' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.091' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='1.07' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.691' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.161' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.251' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.161' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.181' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.241' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.161' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.161' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.161' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.361' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.421' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.461' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.451' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.241' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.161' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.041' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.121' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.101' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.411' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.041' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.261' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.031' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.191' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.031' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.021' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.051' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.321' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.211' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.111' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.111' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.211' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.201' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.171' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.071' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 5 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.041' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.121' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.101' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.411' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.041' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.261' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.031' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.191' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.031' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.051' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.021' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.051' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.321' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.211' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.111' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.111' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.211' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.201' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.171' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.151' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.071' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.211' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.141' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.101' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.101' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.121' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.131' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.131' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.111' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.101' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.071' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 15 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.211' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.141' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.101' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.061' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.021' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.101' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.121' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.091' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.071' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.031' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.011' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.041' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.131' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.131' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.111' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.101' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.081' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.071' color='ff6600' showName='0'/>
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
<set name='09-10 05:15' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='134225920' color='ff6600' showName='0'/>
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
<set name='09-11 06:15' value='134225920' color='ff6600' showName='0'/>
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
<set name='09-16 01:25' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='3959345152' color='ff6600' showName='0'/>
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
<set name='09-16 18:05' value='3959345152' color='ff6600' showName='0'/>
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
<set name='09-10 05:15' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='134225920' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='134225920' color='ff6600' showName='0'/>
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
<set name='09-11 06:15' value='134225920' color='ff6600' showName='0'/>
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
<set name='09-16 01:25' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='3959345152' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='3959345152' color='ff6600' showName='0'/>
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
<set name='09-16 18:05' value='3959345152' color='ff6600' showName='0'/>
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
<set name='09-10 05:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-11 06:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='34566144' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='3366690816' color='ff6600' showName='0'/>
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
<set name='09-16 01:25' value='3045838848' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='3037429760' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='3032731648' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='3027779584' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='2988503040' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='2901536768' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='2918539264' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='2840166400' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='2669834240' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='2677428224' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='2669830144' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='2664275968' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='2734563328' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='2746454016' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='2742611968' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='2734706688' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='2727833600' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='2733342720' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='2733121536' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='2727362560' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='2723221504' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='2715529216' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='2672529408' color='ff6600' showName='0'/>
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
<set name='09-10 05:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-11 06:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='34566144' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='3366690816' color='ff6600' showName='0'/>
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
<set name='09-16 01:25' value='3045838848' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='3037429760' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='3032731648' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='3027779584' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='2988503040' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='2901536768' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='2918539264' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='2840166400' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='2669834240' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='2677428224' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='2669830144' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='2664275968' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='2734563328' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='2746454016' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='2742611968' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='2734706688' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='2727833600' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='2733342720' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='2733121536' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='2727362560' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='2723221504' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='2715529216' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='2672529408' color='ff6600' showName='0'/>
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
<set name='09-10 05:15' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='2937774080' color='ff6600' showName='0'/>
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
<set name='09-11 06:15' value='2937774080' color='ff6600' showName='0'/>
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
<set name='09-16 01:25' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='2080366592' color='ff6600' showName='0'/>
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
<set name='09-16 18:05' value='2080366592' color='ff6600' showName='0'/>
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
<set name='09-10 05:15' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2937774080' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='2937774080' color='ff6600' showName='0'/>
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
<set name='09-11 06:15' value='2937774080' color='ff6600' showName='0'/>
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
<set name='09-16 01:25' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='2080366592' color='ff6600' showName='0'/>
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
<set name='09-16 18:05' value='2080366592' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='2897649664' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2897227776' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2897313792' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2897305600' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2897309696' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='2897285120' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='2893221888' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='2893225984' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='2893193216' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='2875211776' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2894360576' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='2886402048' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='2893348864' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='2875047936' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2888822784' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2880278528' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='2877792256' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='2874105856' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='2895949824' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='2895958016' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='2895941632' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='2895945728' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='2895945728' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='2895966208' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='2894696448' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='2891620352' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='2891968512' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='2891964416' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='2890584064' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='2889199616' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='2889207808' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='2879287296' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='2880397312' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='2871824384' color='ff6600' showName='0'/>
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
<set name='09-16 01:25' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='2080366592' color='ff6600' showName='0'/>
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
<set name='09-16 18:05' value='2080366592' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='2897649664' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2897227776' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2897313792' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2897305600' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2897309696' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='2897285120' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='2893221888' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='2893225984' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='2893193216' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='2875211776' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2894360576' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='2886402048' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='2893348864' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='2875047936' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2888822784' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2880278528' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='2877792256' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='2874105856' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='2895949824' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='2895958016' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='2895941632' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='2895945728' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='2895945728' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='2895966208' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='2894696448' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='2891620352' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='2891968512' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='2891964416' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='2890584064' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='2889199616' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='2889207808' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='2879287296' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='2880397312' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='2871824384' color='ff6600' showName='0'/>
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
<set name='09-16 01:25' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='2080366592' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='2080366592' color='ff6600' showName='0'/>
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
<set name='09-16 18:05' value='2080366592' color='ff6600' showName='0'/>
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
<set name='09-10 05:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='1' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='1' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='1' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='1' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='1' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='1' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='1' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='1' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='1' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='1' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='8' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='7' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='4' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='4' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='3' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='4' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='5' color='ff6600' showName='0'/>
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
<set name='09-10 05:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='1' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='1' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='1' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='1' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='1' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='1' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='5' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='1' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='1' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='1' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='1' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='8' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='7' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='4' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='4' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='3' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='4' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='5' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='6' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='5' color='ff6600' showName='0'/>
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
<set name='09-10 05:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-11 06:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='1' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='1' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='3' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='1' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='1' color='ff6600' showName='0'/>
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
<set name='09-10 05:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-11 06:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='1' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='1' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='3' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='1' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='1' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='1' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='99' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='98' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='96' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='97' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='95' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='98' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='98' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='98' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='92' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='98' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='99' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='98' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='96' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='97' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='94' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='96' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='96' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='95' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='95' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='98' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='98' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='97' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='97' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='89' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='96' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='95' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='99' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='43' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='98' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='96' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='94' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='94' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='92' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='92' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='89' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='90' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='96' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='95' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='94' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='93' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='93' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='92' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='91' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='89' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='89' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU Idle' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='99' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='98' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='96' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='97' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='95' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='98' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='99' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='98' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='98' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='98' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='92' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='98' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='99' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='99' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='98' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='96' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='97' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='94' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='96' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='96' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='95' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='95' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='99' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='98' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='98' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='97' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='97' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='89' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='96' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='95' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='99' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='99' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='43' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='98' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='96' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='94' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='94' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='92' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='92' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='89' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='90' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='96' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='95' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='94' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='93' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='93' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='92' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='91' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='89' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='89' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='2' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='2' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='2' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='2' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='3' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='3' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='3' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='3' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='3' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='3' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Schemas' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='2' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='2' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='2' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='2' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='3' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='3' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='3' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='3' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='3' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='3' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='3' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='3' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='24' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='24' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='24' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='24' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='24' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='36' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='36' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='36' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='36' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='36' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='36' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Tables' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='24' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='24' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='24' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='24' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='24' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='24' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='24' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='36' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='36' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='36' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='36' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='36' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='36' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='36' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='36' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='133685732' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='133700532' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='133708464' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='133718124' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='133745776' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='133757552' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='133781112' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='133781112' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='133809640' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='133856804' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='133866092' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='133907196' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='133943584' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='133981976' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='134004868' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='134080708' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='134098056' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='134117236' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='134122668' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='134126092' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='134146104' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='134147720' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='134170812' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='134183772' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='134189200' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='134212832' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='134219032' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='134252752' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='134256504' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='134281992' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='134301080' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='134302540' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='134326072' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='134350480' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='137165601' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='137191817' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='137219933' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='137229621' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='137239485' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='137267189' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='137299617' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='137305661' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='137328185' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='137333697' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='137335829' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='137346805' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='137376625' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='137384921' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='137384921' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='137422117' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='137435785' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='137443541' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='137457749' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='137463141' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='137470037' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='137505537' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='137537541' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='137542161' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='137556853' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='137589325' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='137597329' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='137617785' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='137626633' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='137633561' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='137674009' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='137685725' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='137707933' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='137707933' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='137726889' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='137741253' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Data Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='133685732' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='133700532' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='133708464' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='133718124' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='133745776' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='133757552' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='133781112' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='133781112' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='133809640' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='133856804' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='133866092' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='133907196' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='133943584' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='133981976' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='134004868' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='134080708' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='134098056' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='134117236' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='134122668' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='134126092' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='134146104' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='134147720' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='134170812' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='134183772' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='134189200' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='134212832' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='134219032' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='134252752' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='134256504' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='134281992' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='134301080' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='134302540' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='134326072' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='134350480' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='137165601' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='137191817' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='137219933' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='137229621' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='137239485' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='137267189' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='137299617' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='137305661' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='137328185' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='137333697' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='137335829' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='137346805' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='137376625' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='137384921' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='137384921' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='137422117' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='137435785' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='137443541' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='137457749' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='137463141' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='137470037' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='137505537' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='137537541' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='137542161' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='137556853' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='137589325' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='137597329' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='137617785' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='137626633' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='137633561' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='137674009' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='137685725' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='137707933' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='137707933' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='137726889' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='137741253' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='106328064' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='106348544' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='106351616' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='106365952' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='106403840' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='106415104' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='106436608' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='106436608' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='106475520' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='106505216' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='106518528' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='106560512' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='106597376' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='106635264' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='106661888' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='107760640' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='107773952' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='107794432' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='107798528' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='107799552' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='107830272' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='107831296' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='107870208' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='107878400' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='107883520' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='107906048' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='107909120' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='107951104' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='107953152' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='107973632' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='107988992' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='107991040' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='108022784' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='108053504' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='109703168' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='109730816' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='109763584' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='109770752' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='109785088' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='109816832' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='109851648' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='109858816' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='109882368' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='109884416' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='109884416' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='109895680' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='109938688' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='109941760' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='109941760' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='109984768' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='110000128' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='110003200' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='110014464' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='110019584' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='110023680' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='110061568' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='110092288' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='110099456' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='110112768' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='110140416' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='110146560' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='110170112' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='110178304' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='110186496' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='110232576' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='110242816' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='110270464' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='110270464' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='110291968' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='110314496' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Index Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='106328064' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='106348544' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='106351616' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='106365952' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='106403840' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='106415104' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='106436608' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='106436608' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='106475520' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='106505216' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='106518528' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='106560512' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='106597376' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='106635264' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='106661888' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='107760640' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='107773952' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='107794432' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='107798528' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='107799552' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='107830272' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='107831296' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='107870208' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='107878400' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='107883520' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='107906048' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='107909120' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='107951104' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='107953152' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='107973632' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='107988992' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='107991040' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='108022784' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='108053504' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='109703168' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='109730816' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='109763584' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='109770752' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='109785088' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='109816832' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='109851648' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='109858816' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='109882368' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='109884416' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='109884416' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='109895680' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='109938688' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='109941760' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='109941760' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='109984768' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='110000128' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='110003200' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='110014464' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='110019584' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='110023680' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='110061568' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='110092288' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='110099456' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='110112768' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='110140416' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='110146560' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='110170112' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='110178304' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='110186496' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='110232576' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='110242816' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='110270464' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='110270464' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='110291968' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='110314496' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='2' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='2' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='2' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='2' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='2' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='2' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='2' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='2' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='2' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='2' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='2' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='2' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='2' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='2' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='2' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='2' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='2' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='2' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='2' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='2' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='2' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='2' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='2' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='2' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='6' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='6' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='6' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='6' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='6' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='6' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='6' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='6' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='6' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='6' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='6' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='6' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='6' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='6' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='18' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='18' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='18' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='18' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='18' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='18' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='6' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='6' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='6' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='6' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='6' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='6' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='6' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='6' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='6' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='6' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='6' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='6' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='6' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='6' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='6' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='18' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='18' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='18' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='18' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='18' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='18' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='18' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='18' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='12091392' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='12091392' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='12091392' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='7880704' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='7880704' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='6832128' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='7880704' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='7880704' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='7880704' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='121594340' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='121609140' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='121617072' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='121626732' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='121654384' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='121666160' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='121689720' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='121689720' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='121718248' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='121765412' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='121774700' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='121815804' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='121852192' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='121890584' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='121913476' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='121989316' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='122006664' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='122025844' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='122031276' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='122034700' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='122054712' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='122056328' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='122079420' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='122092380' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='122097808' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='122121440' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='122127640' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='122161360' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='122165112' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='122190600' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='122209688' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='122211148' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='122234680' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='122259088' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='125074209' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='125100425' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='125128541' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='125138229' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='125148093' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='125175797' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='125208225' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='125214269' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='125236793' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='125242305' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='125244437' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='125255413' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='125285233' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='125293529' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='125293529' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='125330725' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='125344393' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='125352149' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='125366357' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='125371749' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='125378645' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='125414145' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='125446149' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='125450769' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='125465461' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='125497933' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='125505937' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='125526393' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='125535241' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='125542169' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='125582617' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='125594333' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='125616541' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='125616541' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='125635497' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='125649861' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='121594340' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='121609140' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='121617072' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='121626732' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='121654384' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='121666160' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='121689720' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='121689720' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='121718248' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='121765412' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='121774700' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='121815804' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='121852192' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='121890584' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='121913476' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='121989316' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='122006664' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='122025844' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='122031276' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='122034700' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='122054712' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='122056328' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='122079420' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='122092380' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='122097808' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='122121440' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='122127640' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='122161360' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='122165112' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='122190600' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='122209688' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='122211148' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='122234680' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='122259088' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='125074209' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='125100425' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='125128541' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='125138229' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='125148093' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='125175797' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='125208225' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='125214269' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='125236793' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='125242305' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='125244437' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='125255413' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='125285233' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='125293529' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='125293529' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='125330725' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='125344393' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='125352149' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='125366357' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='125371749' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='125378645' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='125414145' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='125446149' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='125450769' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='125465461' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='125497933' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='125505937' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='125526393' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='125535241' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='125542169' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='125582617' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='125594333' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='125616541' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='125616541' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='125635497' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='125649861' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='99495936' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='99516416' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='99519488' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='99533824' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='99571712' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='99582976' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='99604480' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='99604480' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='99643392' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='99673088' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='99686400' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='99728384' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='99765248' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='99803136' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='99829760' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='99879936' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='99893248' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='99913728' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='99917824' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='99918848' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='99949568' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='99950592' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='99989504' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='99997696' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='100002816' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='100025344' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='100028416' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='100070400' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='100072448' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='100092928' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='100108288' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='100110336' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='100142080' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='100172800' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='101822464' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='101850112' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='101882880' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='101890048' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='101904384' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='101936128' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='101970944' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='101978112' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='102001664' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='102003712' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='102003712' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='102014976' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='102057984' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='102061056' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='102061056' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='102104064' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='102119424' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='102122496' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='102133760' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='102138880' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='102142976' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='102180864' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='102211584' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='102218752' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='102232064' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='102259712' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='102265856' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='102289408' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='102297600' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='102305792' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='102351872' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='102362112' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='102389760' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='102389760' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='102411264' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='102433792' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='99495936' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='99516416' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='99519488' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='99533824' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='99571712' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='99582976' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='99604480' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='99604480' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='99643392' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='99673088' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='99686400' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='99728384' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='99765248' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='99803136' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='99829760' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='99879936' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='99893248' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='99913728' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='99917824' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='99918848' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='99949568' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='99950592' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='99989504' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='99997696' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='100002816' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='100025344' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='100028416' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='100070400' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='100072448' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='100092928' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='100108288' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='100110336' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='100142080' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='100172800' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='101822464' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='101850112' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='101882880' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='101890048' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='101904384' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='101936128' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='101970944' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='101978112' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='102001664' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='102003712' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='102003712' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='102014976' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='102057984' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='102061056' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='102061056' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='102104064' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='102119424' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='102122496' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='102133760' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='102138880' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='102142976' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='102180864' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='102211584' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='102218752' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='102232064' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='102259712' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='102265856' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='102289408' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='102297600' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='102305792' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='102351872' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='102362112' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='102389760' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='102389760' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='102411264' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='102433792' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='12339832' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='16187032' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='201296' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='295192' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='432960' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='801096' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='1009496' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='1191864' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='1193288' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='1410736' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2124760' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='1488592' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='1767904' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='1952224' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2176632' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2370976' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='2426568' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='2265592' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='36751832' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='13217856' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='45401352' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='14149248' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='1630384' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='52419904' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='21451448' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='27165448' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='168864' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='148480' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='357256' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='678656' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='1099184' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='1450232' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='1598976' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='1584456' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='1965760' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='2582536' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='2444736' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='2705416' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='2273232' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='2280376' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='2046312' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='2234184' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='1877456' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='2390880' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='2450432' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='1257320' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='160968' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='3096' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='54472' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='560232' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='1191216' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='979312' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='1434016' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='1861136' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='2059288' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='2105816' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='2215648' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='2390288' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='2489408' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='2783400' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='2709768' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='2455960' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='2537800' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='2748552' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='2680528' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='3725592' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='3254944' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='2518800' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='2056464' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='2172408' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_free_memory' xAxisName='' yAxisName='free' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='12339832' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='16187032' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='201296' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='295192' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='432960' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='801096' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='1009496' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='1191864' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='1193288' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='1410736' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2124760' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='1488592' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='1767904' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='1952224' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2176632' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2370976' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='2426568' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='2265592' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='36751832' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='13217856' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='45401352' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='14149248' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='1630384' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='52419904' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='21451448' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='27165448' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='168864' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='148480' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='357256' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='678656' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='1099184' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='1450232' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='1598976' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='1584456' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='1965760' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='2582536' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='2444736' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='2705416' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='2273232' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='2280376' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='2046312' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='2234184' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='1877456' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='2390880' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='2450432' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='1257320' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='160968' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='3096' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='54472' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='560232' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='1191216' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='979312' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='1434016' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='1861136' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='2059288' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='2105816' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='2215648' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='2390288' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='2489408' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='2783400' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='2709768' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='2455960' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='2537800' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='2748552' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='2680528' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='3725592' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='3254944' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='2518800' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='2056464' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='2172408' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='3.8504094017579' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='3.8495749798461' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='3.8491291551687' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='3.8483745445977' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='3.8476541304843' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='3.8470646515324' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='3.8465584903264' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='3.8463288882623' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='3.8459283556316' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='3.8457087741881' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='3.8463960008823' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='3.8470685633451' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='3.8470641316414' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='3.8470039793989' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='3.8469022040722' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='3.8471230059294' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='3.8485776301496' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='3.8485788829154' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='3.8481685604973' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='3.8480080367988' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='3.8475324456086' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='3.8470947201662' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='3.8464183392582' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='3.8457971478781' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='3.8451514861285' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='3.844502234905' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='3.8440161084827' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='3.8433908542501' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='3.8429681832467' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='3.8423432737392' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='3.841486730834' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='3.8412507816386' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='3.8408362027255' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='3.8402461422796' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='3.8012452427038' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='3.8017728180127' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='3.8022933907142' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='3.80257150052' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='3.8026087076175' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='3.8027480391955' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='3.8028778667353' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='3.8030211427234' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='3.8030575458708' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='3.8032310313777' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='3.8032819704341' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='3.8036583997284' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='3.8035504376912' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='3.8032770735729' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='3.8033215426161' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='3.8031561779849' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='3.8033469368183' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='3.8030846154094' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='3.8029397725513' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='3.8027608888966' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='3.8022456690388' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='3.802014103754' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='3.8017450924615' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='3.8015687188695' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='3.8014042448771' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='3.8011363082973' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='3.8010925566629' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='3.8010723757832' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='3.8011329910422' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='3.8014298449247' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='3.8014647656158' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='3.8013078018249' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='3.8010513327197' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='3.8009258044848' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='3.8006868721645' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='3.8004029105364' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_hits' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='3.8504094017579' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='3.8495749798461' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='3.8491291551687' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='3.8483745445977' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='3.8476541304843' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='3.8470646515324' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='3.8465584903264' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='3.8463288882623' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='3.8459283556316' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='3.8457087741881' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='3.8463960008823' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='3.8470685633451' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='3.8470641316414' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='3.8470039793989' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='3.8469022040722' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='3.8471230059294' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='3.8485776301496' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='3.8485788829154' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='3.8481685604973' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='3.8480080367988' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='3.8475324456086' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='3.8470947201662' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='3.8464183392582' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='3.8457971478781' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='3.8451514861285' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='3.844502234905' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='3.8440161084827' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='3.8433908542501' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='3.8429681832467' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='3.8423432737392' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='3.841486730834' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='3.8412507816386' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='3.8408362027255' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='3.8402461422796' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='3.8012452427038' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='3.8017728180127' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='3.8022933907142' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='3.80257150052' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='3.8026087076175' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='3.8027480391955' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='3.8028778667353' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='3.8030211427234' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='3.8030575458708' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='3.8032310313777' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='3.8032819704341' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='3.8036583997284' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='3.8035504376912' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='3.8032770735729' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='3.8033215426161' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='3.8031561779849' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='3.8033469368183' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='3.8030846154094' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='3.8029397725513' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='3.8027608888966' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='3.8022456690388' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='3.802014103754' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='3.8017450924615' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='3.8015687188695' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='3.8014042448771' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='3.8011363082973' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='3.8010925566629' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='3.8010723757832' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='3.8011329910422' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='3.8014298449247' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='3.8014647656158' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='3.8013078018249' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='3.8010513327197' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='3.8009258044848' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='3.8006868721645' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='3.8004029105364' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='1.5248017553196' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='1.5245857697523' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='1.5244651442416' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='1.524118350574' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='1.5238434547243' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='1.5235824055976' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='1.5234316060563' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='1.5233815309718' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='1.5232451323778' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='1.523122260178' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='1.5234663968916' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='1.523798706444' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='1.5237541002298' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='1.523668520909' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='1.5235069230438' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='1.5232867061887' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='1.5234835651227' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='1.5232607244656' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='1.5230710937912' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='1.5228598778713' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='1.522594533129' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='1.522458906448' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='1.5221502642223' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='1.5218255513369' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='1.5216709674371' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='1.5216033788018' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='1.521343908179' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='1.5210593479989' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='1.5207728972018' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='1.5205162472448' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='1.5201636414549' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='1.520110729678' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='1.5198915837204' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='1.5196087995297' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='1.5003605236483' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='1.5005195551567' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='1.5005588030053' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='1.5005518180644' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='1.5005794407501' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='1.5005363463396' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='1.5005951954874' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='1.5005142267376' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='1.5004271035088' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='1.5003314593056' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='1.5002244764882' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='1.5004460650803' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='1.5004406571603' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='1.5005028450523' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='1.5004622130499' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='1.5003675200549' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='1.5002484167212' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='1.500223446968' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='1.5001185781812' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='1.5000958474266' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='1.4998945305675' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='1.4998065334187' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='1.4996265757448' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='1.4994733758906' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='1.4992952258065' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1.4991562131719' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1.4991684123149' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1.4991708698437' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1.4991843587858' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1.499318856481' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='1.4993539007347' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='1.4993832201001' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='1.4992454281499' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='1.4991548917859' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='1.498973544963' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='1.4988569094325' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_inserts' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='1.5248017553196' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='1.5245857697523' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='1.5244651442416' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='1.524118350574' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='1.5238434547243' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='1.5235824055976' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='1.5234316060563' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='1.5233815309718' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='1.5232451323778' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='1.523122260178' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='1.5234663968916' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='1.523798706444' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='1.5237541002298' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='1.523668520909' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='1.5235069230438' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='1.5232867061887' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='1.5234835651227' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='1.5232607244656' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='1.5230710937912' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='1.5228598778713' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='1.522594533129' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='1.522458906448' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='1.5221502642223' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='1.5218255513369' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='1.5216709674371' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='1.5216033788018' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='1.521343908179' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='1.5210593479989' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='1.5207728972018' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='1.5205162472448' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='1.5201636414549' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='1.520110729678' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='1.5198915837204' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='1.5196087995297' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='1.5003605236483' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='1.5005195551567' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='1.5005588030053' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='1.5005518180644' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='1.5005794407501' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='1.5005363463396' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='1.5005951954874' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='1.5005142267376' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='1.5004271035088' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='1.5003314593056' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='1.5002244764882' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='1.5004460650803' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='1.5004406571603' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='1.5005028450523' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='1.5004622130499' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='1.5003675200549' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='1.5002484167212' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='1.500223446968' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='1.5001185781812' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='1.5000958474266' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='1.4998945305675' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='1.4998065334187' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='1.4996265757448' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='1.4994733758906' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='1.4992952258065' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1.4991562131719' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1.4991684123149' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1.4991708698437' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1.4991843587858' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1.499318856481' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='1.4993539007347' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='1.4993832201001' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='1.4992454281499' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='1.4991548917859' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='1.498973544963' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='1.4988569094325' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.0012876281672497' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0012796437245309' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001375693802318' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0013741677717677' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0013806143674962' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.0013772453989288' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.0013840611541733' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0014142570678498' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.0014391440575043' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.0014737718081163' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0014066773558655' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.001433764748346' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0014384739833825' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0014465688713321' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0014471398245302' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0013972238571823' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.0014540851369429' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0014189196864014' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0013425355943643' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0015439380863821' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0012358950749693' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0015591534153291' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.001533923175232' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001000105520027' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0013337386577377' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0013218027024679' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0015407016600068' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0014525210108824' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0014699378780462' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0014646010431994' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.00144554487223' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0014012341263195' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0014215884852607' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0014099708268964' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.001613351177996' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0015213276910693' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0015816856795364' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0014428107174971' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0014509459443599' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0013938398352305' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0014759946245365' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0013650524717448' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0014932275174077' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.00140063956901' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0013733366554709' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0014670563781857' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0014377315518194' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.0014439596481718' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0014047514493429' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0014353404543745' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0014388090987006' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.0014663284853699' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.0014999811764687' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.001448193635751' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0014224812747749' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0014875880730467' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0014889194016768' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0014924603625175' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0014818359304963' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.001502346105924' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0014033978160911' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0014981704152193' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0014793346486033' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0015223754668417' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.0015204674605608' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0015455436249545' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0014783428664716' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0013688400261512' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0013788155533559' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0013358588276396' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_queries_in_cache' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0012876281672497' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0012796437245309' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001375693802318' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0013741677717677' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0013806143674962' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.0013772453989288' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.0013840611541733' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0014142570678498' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.0014391440575043' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.0014737718081163' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0014066773558655' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.001433764748346' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0014384739833825' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0014465688713321' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0014471398245302' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0013972238571823' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.0014540851369429' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0014189196864014' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0013425355943643' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0015439380863821' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0012358950749693' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0015591534153291' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.001533923175232' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001000105520027' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0013337386577377' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0013218027024679' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0015407016600068' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0014525210108824' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0014699378780462' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0014646010431994' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.00144554487223' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0014012341263195' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0014215884852607' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0014099708268964' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.001613351177996' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0015213276910693' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0015816856795364' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0014428107174971' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0014509459443599' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0013938398352305' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0014759946245365' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0013650524717448' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0014932275174077' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.00140063956901' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0013733366554709' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0014670563781857' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0014377315518194' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.0014439596481718' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0014047514493429' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0014353404543745' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0014388090987006' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.0014663284853699' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.0014999811764687' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.001448193635751' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0014224812747749' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0014875880730467' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0014889194016768' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0014924603625175' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0014818359304963' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.001502346105924' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0014033978160911' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0014981704152193' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0014793346486033' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0015223754668417' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.0015204674605608' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0015455436249545' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0014783428664716' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0013688400261512' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0013788155533559' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0013358588276396' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='1.123255695373' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='1.1228255253003' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='1.1225021334877' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='1.1222400474988' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='1.1220287287852' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='1.121846120635' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='1.1217587473724' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='1.1216924195416' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='1.1215983315497' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='1.1214877792652' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='1.121543295497' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='1.1214764961942' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='1.1213286545821' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='1.1211778825962' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='1.1210678457125' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='1.1209366185041' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='1.1207205226592' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='1.1205721928917' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='1.1201890796481' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='1.1197625483568' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='1.1195578145235' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='1.1191322023474' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='1.1189110669565' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='1.1187097137727' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='1.1182851444527' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='1.1178606615386' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='1.1174687531356' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='1.1173114625732' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='1.1170557117568' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='1.1168678499026' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='1.1166176346324' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='1.1165325292099' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='1.1162823908831' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='1.1159961996756' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='1.0973519216361' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='1.0974637666113' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='1.097420353106' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='1.0975474055442' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='1.0975706589902' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='1.0976005707542' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='1.0975743483787' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='1.0976279876796' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='1.0974015234689' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='1.0974375226477' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='1.0973799903869' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='1.0975548367382' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='1.0971597588007' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='1.096663617532' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='1.0966599890238' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='1.0965782643379' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='1.0964838053654' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='1.0964484317829' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='1.096299273613' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='1.0963154437927' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='1.0961325963516' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='1.0958761652993' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='1.0956627501515' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='1.0954859642265' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='1.095283482148' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1.0950983450693' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1.0951056271938' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1.0949407458148' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1.094899935507' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1.0948954692601' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='1.0948455480488' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='1.0948169848921' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='1.0947507479115' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='1.094802999979' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='1.0946442386508' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='1.0945846290711' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_lowmem_prunes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='1.123255695373' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='1.1228255253003' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='1.1225021334877' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='1.1222400474988' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='1.1220287287852' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='1.121846120635' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='1.1217587473724' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='1.1216924195416' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='1.1215983315497' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='1.1214877792652' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='1.121543295497' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='1.1214764961942' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='1.1213286545821' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='1.1211778825962' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='1.1210678457125' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='1.1209366185041' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='1.1207205226592' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='1.1205721928917' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='1.1201890796481' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='1.1197625483568' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='1.1195578145235' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='1.1191322023474' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='1.1189110669565' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='1.1187097137727' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='1.1182851444527' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='1.1178606615386' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='1.1174687531356' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='1.1173114625732' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='1.1170557117568' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='1.1168678499026' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='1.1166176346324' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='1.1165325292099' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='1.1162823908831' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='1.1159961996756' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='1.0973519216361' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='1.0974637666113' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='1.097420353106' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='1.0975474055442' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='1.0975706589902' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='1.0976005707542' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='1.0975743483787' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='1.0976279876796' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='1.0974015234689' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='1.0974375226477' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='1.0973799903869' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='1.0975548367382' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='1.0971597588007' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='1.096663617532' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='1.0966599890238' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='1.0965782643379' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='1.0964838053654' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='1.0964484317829' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='1.096299273613' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='1.0963154437927' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='1.0961325963516' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='1.0958761652993' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='1.0956627501515' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='1.0954859642265' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='1.095283482148' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1.0950983450693' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1.0951056271938' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1.0949407458148' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1.094899935507' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1.0948954692601' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='1.0948455480488' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='1.0948169848921' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='1.0947507479115' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='1.094802999979' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='1.0946442386508' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='1.0945846290711' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.9713629086127' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.97105449860348' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.97074994769325' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.97043945648596' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.97012368245091' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.96984139980884' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.96944571820657' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.96931846452677' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.96901825684642' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.96871997264302' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.96844078523194' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.96815005854022' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.96784551771083' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.96754101797577' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.96724777263909' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.96695453908961' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.96663838741799' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.96638079862951' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.96607363299489' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.96581850306801' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.96556091137265' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.96526413034537' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.96505255079211' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.96474205249537' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.96443620866134' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.96413471681784' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.96391345232002' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.96367507663883' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.96336947691343' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.96315096491309' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.96278079465885' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.96258377861134' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.96235887569954' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.96204951270237' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.95398664233795' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.95409286490077' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.95444317421977' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.9546871608576' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.95496800054393' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.95541116797886' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.95570751404225' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.95605579481383' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.95625278718506' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.95652618003351' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.9567057965816' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.95689849415695' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.95717095560863' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.95774009999226' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.95809906823494' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.95837382080178' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.95892902655702' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.95944228764583' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.95987954288816' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.96007571483816' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.96048957824197' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.9608984199894' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.96117256924934' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.96135558431562' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.96171746444815' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.9621187327102' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.96223998406082' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.96244742937544' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.96275232470785' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.96304516111373' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.96316914160153' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.96337241843647' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.96338718730188' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.96357535239541' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.96371874471435' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.96384362875204' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_not_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.9713629086127' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.97105449860348' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.97074994769325' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.97043945648596' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.97012368245091' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.96984139980884' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.96944571820657' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.96931846452677' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.96901825684642' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.96871997264302' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.96844078523194' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.96815005854022' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.96784551771083' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.96754101797577' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.96724777263909' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.96695453908961' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.96663838741799' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.96638079862951' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.96607363299489' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.96581850306801' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.96556091137265' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.96526413034537' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.96505255079211' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.96474205249537' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.96443620866134' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.96413471681784' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.96391345232002' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.96367507663883' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.96336947691343' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.96315096491309' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.96278079465885' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.96258377861134' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.96235887569954' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.96204951270237' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.95398664233795' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.95409286490077' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.95444317421977' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.9546871608576' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.95496800054393' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.95541116797886' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.95570751404225' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.95605579481383' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.95625278718506' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.95652618003351' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.9567057965816' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.95689849415695' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.95717095560863' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.95774009999226' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.95809906823494' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.95837382080178' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.95892902655702' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.95944228764583' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.95987954288816' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.96007571483816' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.96048957824197' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.9608984199894' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.96117256924934' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.96135558431562' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.96171746444815' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.9621187327102' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.96223998406082' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.96244742937544' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.96275232470785' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.96304516111373' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.96316914160153' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.96337241843647' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.96338718730188' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.96357535239541' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.96371874471435' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.96384362875204' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.001032467280167' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010345830329043' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001037229000796' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010372147542253' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010372005106461' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.0010371827343354' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.0010371637832349' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010371578610321' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.0010371436491364' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.0010371294520467' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010371152736774' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.001037101090401' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010370869729782' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010370728427339' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010370587114813' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010370445909976' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.0010370293098625' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010370163822874' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010370023018603' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010369882125964' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010369741496817' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0010369600935534' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010369460481082' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001000105520027' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010340700336439' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010363767799317' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010368899768036' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010368759845888' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010368620029843' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010368480319782' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.0010368305869817' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010368201217126' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010368061785586' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010367922536958' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0010354596815822' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0010354506881434' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0010354377698586' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0010354248573998' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0010354119543473' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.001035399060691' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0010353861764205' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0010353733015257' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0010353604324237' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0010353475798219' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0010353347294253' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0010353218954981' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0010353090673281' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.0010352909100296' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0010352834389215' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0010352706386646' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0010352578476917' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.0010352440012696' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.0010352312083278' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0010352195268327' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0010352067728979' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0010351940246579' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0010351812891832' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0010351685629221' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0010351558423335' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0010351431415298' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0010351304393212' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0010351177533387' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0010351050694729' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0010350924018032' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.0010350786849983' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0010350670833304' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0010350544395446' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0010350418048732' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0010350291793064' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0010350165593309' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001032467280167' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010345830329043' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001037229000796' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010372147542253' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010372005106461' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.0010371827343354' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.0010371637832349' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010371578610321' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.0010371436491364' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.0010371294520467' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010371152736774' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.001037101090401' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010370869729782' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010370728427339' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010370587114813' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010370445909976' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.0010370293098625' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010370163822874' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010370023018603' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010369882125964' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010369741496817' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0010369600935534' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010369460481082' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001000105520027' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010340700336439' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010363767799317' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010368899768036' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010368759845888' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010368620029843' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010368480319782' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.0010368305869817' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010368201217126' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010368061785586' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010367922536958' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0010354596815822' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0010354506881434' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0010354377698586' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0010354248573998' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0010354119543473' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.001035399060691' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0010353861764205' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0010353733015257' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0010353604324237' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0010353475798219' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0010353347294253' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0010353218954981' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0010353090673281' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.0010352909100296' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0010352834389215' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0010352706386646' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0010352578476917' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.0010352440012696' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.0010352312083278' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0010352195268327' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0010352067728979' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0010351940246579' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0010351812891832' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0010351685629221' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0010351558423335' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0010351431415298' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0010351304393212' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0010351177533387' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0010351050694729' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0010350924018032' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.0010350786849983' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0010350670833304' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0010350544395446' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0010350418048732' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0010350291793064' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0010350165593309' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.0010645087599383' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010675699258284' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010735006844286' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010719839674586' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010719564163069' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.0010654416124303' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.0010728410151404' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010729355729402' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.001071846429901' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.0010715007162271' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010718975872951' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.0010729301434169' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010716308392379' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001071815392496' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010716821362081' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010715489814696' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.0010731064374715' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010728693925601' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010727359533712' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010638310868807' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010637011778802' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0010645217633175' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010554190721623' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0010002110400539' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010672962274452' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010699066814339' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010572321640124' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010586854954742' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010627707250819' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010274781038466' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.0010678735102948' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010621734055204' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010626756640597' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010626519520078' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0010592683249302' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.001060063594483' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0010605479610727' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0010590076910402' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0010596944373283' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0010602795433481' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0010587410528581' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0010598314128663' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.001059304496665' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0010591819479304' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.001060069040023' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0010602490617495' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0010590165839627' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.0010568687807333' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0010556470236706' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0010565337951167' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0010565132930145' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.0010279938067227' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.0010562692727292' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0010559487340542' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0010581414706714' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0010558076676719' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0010570942064458' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0010573749983672' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0010580573624821' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0010579359790362' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0010579150385381' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0010579944612279' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0010581741151266' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0010589552350294' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.0010585312915401' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0010568086749953' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0010573891253116' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0010578690377621' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0010588490212347' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0010586277250512' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0010645087599383' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010675699258284' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010735006844286' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010719839674586' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010719564163069' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.0010654416124303' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.0010728410151404' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010729355729402' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.001071846429901' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.0010715007162271' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010718975872951' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.0010729301434169' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010716308392379' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001071815392496' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010716821362081' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010715489814696' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.0010731064374715' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010728693925601' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0010727359533712' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010638310868807' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010637011778802' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0010645217633175' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010554190721623' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0010002110400539' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010672962274452' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010699066814339' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0010572321640124' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010586854954742' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010627707250819' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0010274781038466' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.0010678735102948' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010621734055204' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010626756640597' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0010626519520078' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0010592683249302' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.001060063594483' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0010605479610727' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0010590076910402' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0010596944373283' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0010602795433481' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0010587410528581' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0010598314128663' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.001059304496665' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0010591819479304' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.001060069040023' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0010602490617495' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0010590165839627' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.0010568687807333' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0010556470236706' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0010565337951167' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0010565132930145' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.0010279938067227' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.0010562692727292' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0010559487340542' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0010581414706714' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0010558076676719' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0010570942064458' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0010573749983672' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0010580573624821' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0010579359790362' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0010579150385381' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0010579944612279' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0010581741151266' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0010589552350294' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.0010585312915401' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0010568086749953' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0010573891253116' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0010578690377621' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0010588490212347' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0010586277250512' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.28458902469674' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.28453649712397' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.28448565135807' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.28441587211394' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.28435373869915' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.28511444165716' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.28503026576034' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.28500602509408' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.28494420132452' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.28487937850389' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.2848507202484' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.28482334156801' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.28477775536076' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.28473265904541' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.28469629517708' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.28463794394899' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.28459097974476' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.28453755623978' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.28447241441394' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.28443073914919' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.28436998880106' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.28431221151987' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.28425680047435' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.28419380420168' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.28415151397525' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.28413038956263' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.28406627800792' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.28400505980653' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.28394020182684' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.28455718688227' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.28460993630308' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.28457490138519' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.28452598563528' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.28446591859956' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.28345591728371' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.28344707794664' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.28344925210105' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.28344714510062' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.28343603488098' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.28343413650768' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.28342789207176' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.28341649778442' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.28342498612608' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.28340736813232' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.28339939773468' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.28339138920813' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.28339031893974' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.28344726933055' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.28345189254318' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.28343195689162' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.28345414364329' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.28398697542829' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.28427089356612' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.28426884302546' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.2842804343188' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.28429158651647' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.28429421509036' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.28430588510732' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.2843073732549' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.28431577347695' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.2843627258009' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.28437779408133' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.28439831114526' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.28443591510807' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.28445110918301' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.28447288362638' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.28446091480069' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.28446056845817' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.28445942169827' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.28445314499227' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Slow_queries' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.28458902469674' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.28453649712397' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.28448565135807' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.28441587211394' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.28435373869915' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.28511444165716' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.28503026576034' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.28500602509408' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.28494420132452' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.28487937850389' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.2848507202484' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.28482334156801' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.28477775536076' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.28473265904541' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.28469629517708' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.28463794394899' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.28459097974476' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.28453755623978' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.28447241441394' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.28443073914919' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.28436998880106' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.28431221151987' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.28425680047435' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.28419380420168' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.28415151397525' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.28413038956263' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.28406627800792' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.28400505980653' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.28394020182684' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.28455718688227' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.28460993630308' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.28457490138519' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.28452598563528' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.28446591859956' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.28345591728371' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.28344707794664' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.28344925210105' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.28344714510062' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.28343603488098' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.28343413650768' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.28342789207176' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.28341649778442' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.28342498612608' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.28340736813232' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.28339939773468' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.28339138920813' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.28339031893974' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.28344726933055' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.28345189254318' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.28343195689162' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.28345414364329' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.28398697542829' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.28427089356612' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.28426884302546' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.2842804343188' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.28429158651647' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.28429421509036' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.28430588510732' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.2843073732549' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.28431577347695' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.2843627258009' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.28437779408133' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.28439831114526' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.28443591510807' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.28445110918301' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.28447288362638' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.28446091480069' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.28446056845817' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.28445942169827' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.28445314499227' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='108.72769675926' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='108.76935185185' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='108.81103009259' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='108.85268518519' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='108.89436342593' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='108.94642361111' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='109.00197916667' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='109.01935185185' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='109.06106481481' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='109.1027662037' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='109.14444444444' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='109.18616898148' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='109.22773148148' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='109.26936342593' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='109.31103009259' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='109.35269675926' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='109.39782407407' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='109.43603009259' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='109.47767361111' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='109.519375' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='109.56103009259' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='109.60269675926' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='109.64436342593' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='109.68604166667' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='109.72768518519' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='109.76935185185' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='109.81101851852' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='109.85268518519' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='109.89435185185' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='109.93601851852' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='109.98809027778' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='110.01935185185' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='110.06103009259' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='110.10268518519' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='114.24033564815' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='114.26931712963' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='114.31097222222' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='114.35263888889' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='114.39430555556' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='114.43597222222' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='114.47763888889' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='114.51930555556' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='114.5609837963' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='114.60263888889' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='114.64431712963' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='114.68597222222' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='114.72763888889' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='114.78666666667' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='114.81097222222' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='114.85263888889' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='114.89430555556' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='114.93944444444' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='114.98118055556' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='115.01931712963' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='115.0609837963' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='115.10266203704' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='115.1443287037' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='115.18599537037' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='115.22767361111' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='115.26931712963' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='115.31099537037' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='115.35265046296' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='115.3943287037' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='115.4359837963' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='115.48112268519' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='115.5193287037' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='115.56099537037' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='115.60266203704' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='115.6443287037' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='115.68600694444' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Uptime' xAxisName='' yAxisName='days' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='108.72769675926' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='108.76935185185' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='108.81103009259' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='108.85268518519' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='108.89436342593' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='108.94642361111' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='109.00197916667' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='109.01935185185' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='109.06106481481' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='109.1027662037' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='109.14444444444' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='109.18616898148' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='109.22773148148' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='109.26936342593' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='109.31103009259' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='109.35269675926' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='109.39782407407' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='109.43603009259' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='109.47767361111' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='109.519375' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='109.56103009259' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='109.60269675926' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='109.64436342593' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='109.68604166667' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='109.72768518519' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='109.76935185185' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='109.81101851852' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='109.85268518519' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='109.89435185185' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='109.93601851852' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='109.98809027778' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='110.01935185185' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='110.06103009259' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='110.10268518519' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='114.24033564815' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='114.26931712963' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='114.31097222222' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='114.35263888889' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='114.39430555556' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='114.43597222222' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='114.47763888889' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='114.51930555556' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='114.5609837963' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='114.60263888889' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='114.64431712963' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='114.68597222222' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='114.72763888889' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='114.78666666667' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='114.81097222222' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='114.85263888889' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='114.89430555556' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='114.93944444444' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='114.98118055556' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='115.01931712963' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='115.0609837963' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='115.10266203704' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='115.1443287037' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='115.18599537037' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='115.22767361111' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='115.26931712963' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='115.31099537037' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='115.35265046296' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='115.3943287037' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='115.4359837963' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='115.48112268519' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='115.5193287037' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='115.56099537037' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='115.60266203704' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='115.6443287037' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='115.68600694444' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='5.812051918268' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='5.8108809288088' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='5.8098638343977' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='5.8084799027568' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='5.8071817817833' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='5.8074627022648' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='5.8062138057933' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='5.8057001645138' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='5.8046593205726' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='5.8036527742755' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='5.8033479037293' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='5.8029319401697' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='5.8019878829442' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='5.8009905439889' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='5.7999016991207' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='5.7987187440233' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='5.798144662299' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='5.7969624991261' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='5.7958337733964' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='5.7947773489259' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='5.7936477988285' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='5.7926325439115' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='5.7915635915908' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='5.7902250256783' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='5.7891494220963' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='5.7881998365259' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='5.7871542144374' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='5.7860115061501' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='5.7847183195308' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='5.7849182479035' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='5.7835631614576' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='5.7828762658758' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='5.7818547222275' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='5.7805625893001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='5.7259667702258' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='5.7263777124967' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='5.7272009588853' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='5.7276461052697' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='5.7282229633776' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='5.7290999900074' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='5.7297513221287' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='5.7303139491684' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='5.7305370370726' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='5.7309015006361' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='5.7309848929898' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='5.7316239352467' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='5.7320877101444' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='5.7335349755101' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='5.7342066286896' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='5.7345595221252' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='5.7355212137403' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='5.7376132440109' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='5.7388212885885' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='5.7390600351048' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='5.7396330388002' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='5.740357490847' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='5.7406282574104' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='5.7407010802778' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='5.7411918292599' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='5.7418176976644' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='5.7419451423134' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='5.742303517926' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='5.7429299894584' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='5.743753176489' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='5.7440160022947' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='5.7444057481963' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='5.7440791549276' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='5.7442370748303' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='5.7441250561718' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='5.7440680697902' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_immediate' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='5.812051918268' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='5.8108809288088' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='5.8098638343977' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='5.8084799027568' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='5.8071817817833' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='5.8074627022648' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='5.8062138057933' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='5.8057001645138' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='5.8046593205726' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='5.8036527742755' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='5.8033479037293' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='5.8029319401697' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='5.8019878829442' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='5.8009905439889' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='5.7999016991207' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='5.7987187440233' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='5.798144662299' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='5.7969624991261' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='5.7958337733964' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='5.7947773489259' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='5.7936477988285' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='5.7926325439115' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='5.7915635915908' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='5.7902250256783' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='5.7891494220963' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='5.7881998365259' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='5.7871542144374' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='5.7860115061501' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='5.7847183195308' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='5.7849182479035' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='5.7835631614576' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='5.7828762658758' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='5.7818547222275' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='5.7805625893001' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='5.7259667702258' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='5.7263777124967' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='5.7272009588853' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='5.7276461052697' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='5.7282229633776' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='5.7290999900074' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='5.7297513221287' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='5.7303139491684' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='5.7305370370726' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='5.7309015006361' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='5.7309848929898' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='5.7316239352467' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='5.7320877101444' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='5.7335349755101' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='5.7342066286896' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='5.7345595221252' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='5.7355212137403' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='5.7376132440109' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='5.7388212885885' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='5.7390600351048' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='5.7396330388002' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='5.740357490847' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='5.7406282574104' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='5.7407010802778' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='5.7411918292599' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='5.7418176976644' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='5.7419451423134' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='5.742303517926' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='5.7429299894584' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='5.743753176489' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='5.7440160022947' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='5.7444057481963' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='5.7440791549276' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='5.7442370748303' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='5.7441250561718' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='5.7440680697902' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.0014289938985997' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0014288296080136' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001428665352022' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0014285013129365' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0014283373082965' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.0014281326267764' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.0014279144183905' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0014278462284559' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.0014276825886279' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.0014275191192809' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0014273558654858' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.0014271925551892' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0014270300031492' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0014268673034792' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0014267045921991' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0014265420049147' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.0014265776496164' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0014264287239512' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0014262665174311' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0014261042091106' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0014259422043333' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001425780277735' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0014261462748936' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0014259843488475' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0014258226805585' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0014256610451713' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0014258157322471' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0014256542221106' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0014254928344479' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0014253315691197' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.0014251302040172' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0014250094049111' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0014248484610758' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0014246877283748' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0014108257394737' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0014107215440618' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0014105718765048' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0014104222764459' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0014103739623791' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0014102245433218' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0014100752330331' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0014099260313945' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0014097768968877' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0014096279535933' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0014095799922243' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0014094312286731' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0014092825318579' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.0014090720628283' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0014089854620134' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0014088370887494' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0014086888231011' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.0014085283232878' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.0014084806954117' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0014083452568203' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0014081973840563' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0014080495773198' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0014079019185865' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0014077543666795' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0014076068805407' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0014074596237937' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0014075130961259' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0014073659387292' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.001407218805886' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.001407071860917' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.0014069127459805' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0014067781666328' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0014066314987175' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0014065850559718' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0014065386466927' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0014064922301757' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_waited' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0014289938985997' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0014288296080136' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.001428665352022' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0014285013129365' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0014283373082965' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.0014281326267764' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.0014279144183905' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0014278462284559' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.0014276825886279' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.0014275191192809' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0014273558654858' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.0014271925551892' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0014270300031492' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0014268673034792' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0014267045921991' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0014265420049147' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.0014265776496164' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0014264287239512' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0014262665174311' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0014261042091106' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0014259422043333' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.001425780277735' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0014261462748936' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0014259843488475' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0014258226805585' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0014256610451713' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0014258157322471' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0014256542221106' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0014254928344479' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0014253315691197' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.0014251302040172' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0014250094049111' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0014248484610758' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0014246877283748' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0014108257394737' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0014107215440618' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0014105718765048' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0014104222764459' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0014103739623791' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0014102245433218' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0014100752330331' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0014099260313945' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0014097768968877' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0014096279535933' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0014095799922243' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0014094312286731' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0014092825318579' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.0014090720628283' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0014089854620134' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0014088370887494' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0014086888231011' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.0014085283232878' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.0014084806954117' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0014083452568203' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0014081973840563' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0014080495773198' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0014079019185865' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0014077543666795' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0014076068805407' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0014074596237937' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0014075130961259' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0014073659387292' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.001407218805886' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.001407071860917' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.0014069127459805' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0014067781666328' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0014066314987175' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0014065850559718' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0014065386466927' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0014064922301757' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.0010002129001978' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010007448653241' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010007445800159' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010008506229537' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010008502973862' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.0010008498910705' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.0010013803690916' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010012739838068' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.0010013796212536' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.0010013790939332' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010011664800299' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.0010012720373852' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010012715533593' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010011651464859' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010012705843936' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010011642585742' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.0010013753743663' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010013748941992' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001001374371212' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010013738478964' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010013733255596' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0010013728034748' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010013722817869' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001000105520027' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010011602797835' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010010543994183' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001001159399271' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010011589595156' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010009478800767' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.001001158081005' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.0010010523024852' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010011572038253' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010011567656118' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001001366569423' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0010015197006392' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0010015193152061' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0010011137584813' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0010013157804177' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0010013153011615' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0010013148222542' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0010016176537792' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.00100192026494' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0010018185365246' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0010016158893633' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0010015143455468' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0010017156349242' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0010011097135446' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.0010016132987442' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0010017137670333' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0010018139185599' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0010018132607384' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.0010016111543438' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.001001811890714' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0010011068994147' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.001001710043255' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.001001809978411' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0010017088054746' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0010014067425169' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0010015066789571' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.001001506134637' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0010013048448891' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0010017057194479' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0010017051033744' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0010017044880876' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.0010017038218428' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0010018034499998' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.001001802799748' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0010017020305224' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.00100180150065' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0010017008043104' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0010002129001978' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0010007448653241' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0010007445800159' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0010008506229537' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0010008502973862' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.0010008498910705' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.0010013803690916' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0010012739838068' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.0010013796212536' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.0010013790939332' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0010011664800299' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.0010012720373852' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0010012715533593' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0010011651464859' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0010012705843936' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0010011642585742' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.0010013753743663' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0010013748941992' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.001001374371212' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0010013738478964' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0010013733255596' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0010013728034748' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0010013722817869' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.001000105520027' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0010011602797835' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0010010543994183' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.001001159399271' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0010011589595156' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0010009478800767' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.001001158081005' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.0010010523024852' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0010011572038253' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0010011567656118' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.001001366569423' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0010015197006392' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0010015193152061' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0010011137584813' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0010013157804177' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0010013153011615' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0010013148222542' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0010016176537792' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.00100192026494' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0010018185365246' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0010016158893633' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0010015143455468' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0010017156349242' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0010011097135446' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.0010016132987442' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0010017137670333' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0010018139185599' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0010018132607384' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.0010016111543438' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.001001811890714' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0010011068994147' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.001001710043255' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.001001809978411' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0010017088054746' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0010014067425169' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0010015066789571' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.001001506134637' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0010013048448891' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0010017057194479' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0010017051033744' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0010017044880876' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.0010017038218428' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0010018034499998' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.001001802799748' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0010017020305224' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.00100180150065' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0010017008043104' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.001133169073734' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0011337565303407' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0011337052971443' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0011336541316033' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0011336029768061' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.0011335391344561' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.0011340019841213' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0011339806303502' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.0011339293863148' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.0011338781956656' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0011338270725169' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.0011337759316746' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0011337250282815' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0011336740786578' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0011336231253983' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0011335722109683' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.0011335171115615' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0011334704984192' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0011334197284221' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0011333689265619' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0011333182197095' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0011332675373268' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0011332168934644' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0011331662740266' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0011341705349691' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0011341196060089' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0011340687156976' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0011340178639913' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.001133967050846' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0011339162762179' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.0011338528761163' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0011338148423383' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0011339744899531' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0011339238034528' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0011340375963807' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0011340036011822' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0011339547700656' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0011339059609711' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0011338571874328' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0011338084494119' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0011337597468695' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.001133711079767' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0011336624345617' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0011336138517268' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0011335652772277' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0011335167649826' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0011346788710945' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.0011353154321705' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0011352867858078' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0011352377059654' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0011351886617209' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.0011351355705823' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.0011350865187882' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0011350417285985' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0011349928263685' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0011349439459742' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0011348951145251' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0011348463184041' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0011347975440329' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0011347488455227' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0011347001416259' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0011346514999445' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0011346028663791' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0011345542949139' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.001134501700765' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0011344572166555' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0011344087367682' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0011343602918282' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0011343118817975' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0011342634932059' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_created' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.001133169073734' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0011337565303407' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0011337052971443' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0011336541316033' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0011336029768061' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.0011335391344561' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.0011340019841213' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0011339806303502' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.0011339293863148' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.0011338781956656' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0011338270725169' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.0011337759316746' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0011337250282815' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0011336740786578' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0011336231253983' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0011335722109683' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.0011335171115615' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0011334704984192' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0011334197284221' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0011333689265619' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.0011333182197095' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0011332675373268' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0011332168934644' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0011331662740266' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0011341705349691' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0011341196060089' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0011340687156976' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0011340178639913' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.001133967050846' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0011339162762179' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.0011338528761163' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.0011338148423383' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0011339744899531' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0011339238034528' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0011340375963807' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0011340036011822' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0011339547700656' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0011339059609711' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0011338571874328' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0011338084494119' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0011337597468695' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.001133711079767' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0011336624345617' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.0011336138517268' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0011335652772277' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0011335167649826' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0011346788710945' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.0011353154321705' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0011352867858078' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.0011352377059654' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0011351886617209' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.0011351355705823' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.0011350865187882' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0011350417285985' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0011349928263685' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0011349439459742' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0011348951145251' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0011348463184041' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0011347975440329' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0011347488455227' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0011347001416259' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0011346514999445' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0011346028663791' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0011345542949139' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.001134501700765' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0011344572166555' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.0011344087367682' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0011343602918282' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0011343118817975' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0011342634932059' color='ff6600' showName='0'/>
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
<set name='09-10 05:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-11 06:15' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-16 01:25' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-16 18:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-10 05:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-11 06:15' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-16 01:25' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-16 18:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='2.7031676249482' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2.7036011684596' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2.7037587356521' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2.7033289767261' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2.7032381343923' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='2.7043862134495' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='2.7044312290031' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='2.7044850175258' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='2.7049279858931' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='2.7054517386609' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2.7054834105331' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='2.706317626675' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='2.7068534394883' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='2.7072370319991' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2.7074055905502' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2.7075985759212' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='2.7075424049077' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='2.7071538812259' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='2.7067149980161' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='2.7065646891077' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='2.7062478812492' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='2.7058139177562' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='2.7055081174162' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='2.7050593898368' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='2.7046937114523' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='2.7051083121258' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='2.7044097856671' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='2.7042127756954' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='2.7038071708602' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='2.7044249854082' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='2.7051727296653' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='2.7049314346214' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='2.7051022722768' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='2.7050594184385' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='2.7061223166519' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='2.7066613564912' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='2.7076589525729' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='2.7080281228834' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='2.7076862557504' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='2.7076823446072' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='2.7084130533336' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='2.7081820872027' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='2.7087103555249' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='2.7088164337564' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='2.708725426841' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='2.7083715314403' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='2.7090238273657' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='2.7106795738633' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='2.7105593654949' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='2.7103374614089' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='2.7104235696496' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='2.711666408882' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='2.7120449662958' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='2.7120647709236' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='2.7124964629767' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='2.7130554748328' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='2.7138524818389' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='2.7139074584483' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='2.7141737608645' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='2.7150606133844' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='2.715527955298' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='2.716292500383' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='2.716981826607' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='2.71792837721' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='2.7192526556318' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='2.719679046015' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='2.7198678547785' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='2.7198364649026' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='2.7201034461707' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='2.720219291703' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='2.7031676249482' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2.7036011684596' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2.7037587356521' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2.7033289767261' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2.7032381343923' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='2.7043862134495' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='2.7044312290031' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='2.7044850175258' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='2.7049279858931' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='2.7054517386609' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2.7054834105331' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='2.706317626675' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='2.7068534394883' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='2.7072370319991' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2.7074055905502' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2.7075985759212' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='2.7075424049077' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='2.7071538812259' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='2.7067149980161' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='2.7065646891077' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='2.7062478812492' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='2.7058139177562' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='2.7055081174162' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='2.7050593898368' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='2.7046937114523' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='2.7051083121258' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='2.7044097856671' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='2.7042127756954' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='2.7038071708602' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='2.7044249854082' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='2.7051727296653' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='2.7049314346214' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='2.7051022722768' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='2.7050594184385' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='2.7061223166519' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='2.7066613564912' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='2.7076589525729' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='2.7080281228834' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='2.7076862557504' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='2.7076823446072' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='2.7084130533336' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='2.7081820872027' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='2.7087103555249' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='2.7088164337564' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='2.708725426841' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='2.7083715314403' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='2.7090238273657' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='2.7106795738633' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='2.7105593654949' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='2.7103374614089' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='2.7104235696496' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='2.711666408882' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='2.7120449662958' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='2.7120647709236' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='2.7124964629767' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='2.7130554748328' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='2.7138524818389' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='2.7139074584483' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='2.7141737608645' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='2.7150606133844' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='2.715527955298' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='2.716292500383' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='2.716981826607' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='2.71792837721' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='2.7192526556318' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='2.719679046015' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='2.7198678547785' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='2.7198364649026' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='2.7201034461707' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='2.720219291703' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='1.5736706538261' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='1.5735981208963' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='1.5735362647165' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='1.5736407683167' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='1.5736235837633' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='1.5737077061004' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='1.5736812882794' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='1.5735453865224' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='1.5735242615949' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='1.5735469203294' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='1.573605844277' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='1.5737012630801' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='1.573698914814' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='1.5737157993758' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='1.5736638772751' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='1.5737072522619' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='1.5738075610042' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='1.5737116210182' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='1.5736204669669' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='1.57350096814' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='1.5734589200823' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='1.5733174735812' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='1.5732907728934' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='1.5731861582205' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='1.5730670371686' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='1.5730420435442' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='1.573455848811' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='1.5735687482141' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='1.5737471763706' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='1.5739138884654' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='1.5737881342582' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='1.5737021012297' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='1.5737571105593' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='1.5737302047163' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='1.5675162975229' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='1.5677377062331' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='1.5677450683787' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='1.5677663352115' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='1.5676914683901' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='1.5676962534039' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='1.5677395553151' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='1.5676433538418' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='1.567654761752' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='1.5679034077895' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='1.5678140593658' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='1.5677404321059' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='1.5677735353093' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='1.5677607655425' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='1.5680669957906' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='1.5686885610668' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='1.5686244644333' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='1.5685994275569' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='1.5685604347088' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='1.5684055284997' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='1.5686034650104' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='1.5686762119565' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='1.5689287900552' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='1.5688480888901' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='1.568782053967' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1.5688006820581' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1.5687119273864' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1.568697298913' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1.5687242918054' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1.5686538223797' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='1.5687702084546' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='1.5686288870609' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='1.5686041422329' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='1.5684810979499' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='1.5688179253318' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='1.5687726725969' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='1.5736706538261' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='1.5735981208963' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='1.5735362647165' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='1.5736407683167' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='1.5736235837633' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='1.5737077061004' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='1.5736812882794' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='1.5735453865224' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='1.5735242615949' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='1.5735469203294' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='1.573605844277' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='1.5737012630801' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='1.573698914814' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='1.5737157993758' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='1.5736638772751' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='1.5737072522619' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='1.5738075610042' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='1.5737116210182' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='1.5736204669669' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='1.57350096814' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='1.5734589200823' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='1.5733174735812' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='1.5732907728934' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='1.5731861582205' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='1.5730670371686' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='1.5730420435442' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='1.573455848811' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='1.5735687482141' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='1.5737471763706' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='1.5739138884654' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='1.5737881342582' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='1.5737021012297' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='1.5737571105593' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='1.5737302047163' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='1.5675162975229' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='1.5677377062331' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='1.5677450683787' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='1.5677663352115' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='1.5676914683901' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='1.5676962534039' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='1.5677395553151' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='1.5676433538418' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='1.567654761752' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='1.5679034077895' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='1.5678140593658' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='1.5677404321059' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='1.5677735353093' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='1.5677607655425' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='1.5680669957906' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='1.5686885610668' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='1.5686244644333' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='1.5685994275569' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='1.5685604347088' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='1.5684055284997' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='1.5686034650104' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='1.5686762119565' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='1.5689287900552' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='1.5688480888901' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='1.568782053967' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1.5688006820581' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1.5687119273864' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1.568697298913' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1.5687242918054' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1.5686538223797' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='1.5687702084546' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='1.5686288870609' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='1.5686041422329' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='1.5684810979499' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='1.5688179253318' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='1.5687726725969' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.54183665306838' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.54181095828839' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.54178559361057' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.5417396294176' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.54166945826384' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.54282744215402' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.54274623698113' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.54272806560847' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.54271847321349' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.54268507668664' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.5426187349418' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.54275234810151' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.54275336188112' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.54280487334169' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.54279793832859' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.54278116532334' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.54271965384578' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.54272333257855' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.54269509236356' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.54291990382219' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.54293634467007' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.54301523114895' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.54309215758904' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.5430295764194' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.54295202517343' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.54282791948437' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.54288656606173' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.542881214657' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.54279698262388' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.54395564591863' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.54395482960013' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.54390185901639' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.54385758753587' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.54382071702426' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.56456183383289' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.56490731002305' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.56568516882756' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.56644924589588' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.56705381726703' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.56771944160915' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.56837598762818' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.56900870951324' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.56966010936072' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.57056807681292' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.5712114702791' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.5716504516964' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.57236567805313' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.57326005407777' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.57362551528942' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.57415876181113' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.5748757682685' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.57685566393254' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.57764931881969' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.57811360682269' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.57888055025973' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.57966729278512' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.58041231164189' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.5812799819535' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.58211884171343' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.58298859775753' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.5838777249929' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.58453515171722' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.58545136292925' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.58629774749894' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.58696618074002' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.5877777057511' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.58835946925575' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.58902751682758' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.58988624223979' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.5905479972479' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.54183665306838' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.54181095828839' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.54178559361057' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.5417396294176' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.54166945826384' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.54282744215402' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.54274623698113' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.54272806560847' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.54271847321349' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.54268507668664' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.5426187349418' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.54275234810151' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.54275336188112' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.54280487334169' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.54279793832859' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.54278116532334' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.54271965384578' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.54272333257855' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.54269509236356' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.54291990382219' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.54293634467007' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.54301523114895' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.54309215758904' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.5430295764194' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.54295202517343' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.54282791948437' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.54288656606173' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.542881214657' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.54279698262388' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.54395564591863' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.54395482960013' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.54390185901639' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.54385758753587' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.54382071702426' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.56456183383289' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.56490731002305' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.56568516882756' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.56644924589588' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.56705381726703' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.56771944160915' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.56837598762818' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.56900870951324' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.56966010936072' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.57056807681292' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.5712114702791' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.5716504516964' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.57236567805313' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.57326005407777' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.57362551528942' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.57415876181113' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.5748757682685' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.57685566393254' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.57764931881969' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.57811360682269' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.57888055025973' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.57966729278512' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.58041231164189' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.5812799819535' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.58211884171343' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.58298859775753' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.5838777249929' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.58453515171722' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.58545136292925' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.58629774749894' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.58696618074002' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.5877777057511' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.58835946925575' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.58902751682758' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.58988624223979' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.5905479972479' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.19228028917808' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.19221256838928' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.19213996583229' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.19207054301217' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.19200240814848' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.19193164103023' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.19189782497366' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.19189872338329' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.19189479687518' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.19189492481763' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.19192330075673' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.19198560106682' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.19206668068201' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.19214800082577' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.19222993945771' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.19229075315146' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.19238048652704' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.19243487448749' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.19250858490405' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.19258097554614' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.19267293554571' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.19273766612638' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.19283084874678' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.19290948407671' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.19300710681915' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.19309934298263' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.19315735957145' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.19310512563543' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.19304461102793' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.19298129972905' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.19289461906176' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.19284503736296' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.19277796241626' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.1927054071578' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.19244854318964' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.19246633060765' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.19251806091003' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.19255455205369' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.19261469203539' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.19268682390323' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.19276608160174' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.19282072244814' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.19286651456966' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.19291211016164' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.19294975926449' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.19299115378265' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.19304652161298' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.19315033363018' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.19320119060436' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.19323747660549' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.19330536761444' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.1933751516499' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.19344332858819' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.19347883985671' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.19353598308224' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.19359477499454' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.19363685772787' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.19366785703879' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.19371528759839' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.19376746114599' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.19379575062206' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.19384954380533' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.19393836452502' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.19403327591882' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.19407067683521' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.19411001946724' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.19410709531903' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.19414932714729' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.19418282129013' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.19419045976842' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.19228028917808' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.19221256838928' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.19213996583229' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.19207054301217' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.19200240814848' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.19193164103023' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.19189782497366' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.19189872338329' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.19189479687518' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.19189492481763' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.19192330075673' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.19198560106682' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.19206668068201' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.19214800082577' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.19222993945771' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.19229075315146' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.19238048652704' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.19243487448749' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.19250858490405' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.19258097554614' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.19267293554571' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.19273766612638' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.19283084874678' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.19290948407671' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.19300710681915' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.19309934298263' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.19315735957145' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.19310512563543' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.19304461102793' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.19298129972905' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.19289461906176' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.19284503736296' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.19277796241626' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.1927054071578' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.19244854318964' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.19246633060765' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.19251806091003' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.19255455205369' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.19261469203539' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.19268682390323' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.19276608160174' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.19282072244814' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.19286651456966' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.19291211016164' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.19294975926449' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.19299115378265' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.19304652161298' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.19315033363018' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.19320119060436' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.19323747660549' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.19330536761444' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.1933751516499' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.19344332858819' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.19347883985671' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.19353598308224' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.19359477499454' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.19363685772787' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.19366785703879' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.19371528759839' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.19376746114599' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.19379575062206' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.19384954380533' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.19393836452502' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.19403327591882' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.19407067683521' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.19411001946724' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.19410709531903' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.19414932714729' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.19418282129013' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.19419045976842' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.49956457364127' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.4995464485247' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.49953301781578' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.49949588596208' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.49943093560453' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.50045888497904' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.50037655099067' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.50035674434287' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.50034743914703' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.50031591636708' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.50024762038074' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.5003944572031' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.50039675389381' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.50044724391484' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.50044660755555' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.50044015038834' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.50038679462868' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.50039213812229' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.50036551624396' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.50058224455888' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.50059206948858' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.5006759655798' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.50074850297252' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.50068428407933' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.50060170759431' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.50049156860049' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.50054899368359' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.50054231635128' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.50046202539645' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.50149092106604' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.50150789379448' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.50144910028455' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.50141575207695' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.50136729181261' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.5213074050453' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.52163488333533' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.52238689661122' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.52312251980452' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.52370189569298' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.52434133149825' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.52497494335179' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.52558414136061' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.5262101192667' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.52708913972878' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.52771350974921' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.52813619759593' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.52882566359861' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.52968606497077' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.53003988318964' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.53055488050912' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.53124659943096' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.53306207213782' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.53381676329077' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.53426449089822' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.53500959173321' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.5357587248501' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.5364602265474' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.53728963622643' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.53808574740969' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.53891407783041' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.53976122041139' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.54038551356554' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.54125999817454' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.54206477766607' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.54270329466025' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.54348146704646' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.54403252951834' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.54467250129404' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.54549716613939' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.54613629495388' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.49956457364127' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.4995464485247' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.49953301781578' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.49949588596208' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.49943093560453' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.50045888497904' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.50037655099067' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.50035674434287' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.50034743914703' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.50031591636708' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.50024762038074' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.5003944572031' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.50039675389381' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.50044724391484' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.50044660755555' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.50044015038834' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.50038679462868' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.50039213812229' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.50036551624396' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.50058224455888' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.50059206948858' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.5006759655798' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.50074850297252' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.50068428407933' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.50060170759431' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.50049156860049' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.50054899368359' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.50054231635128' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.50046202539645' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.50149092106604' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.50150789379448' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.50144910028455' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.50141575207695' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.50136729181261' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.5213074050453' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.52163488333533' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.52238689661122' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.52312251980452' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.52370189569298' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.52434133149825' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.52497494335179' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.52558414136061' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.5262101192667' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.52708913972878' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.52771350974921' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.52813619759593' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.52882566359861' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.52968606497077' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.53003988318964' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.53055488050912' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.53124659943096' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.53306207213782' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.53381676329077' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.53426449089822' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.53500959173321' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.5357587248501' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.5364602265474' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.53728963622643' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.53808574740969' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.53891407783041' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.53976122041139' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.54038551356554' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.54125999817454' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.54206477766607' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.54270329466025' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.54348146704646' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.54403252951834' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.54467250129404' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.54549716613939' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.54613629495388' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.36401059189129' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.36415068242433' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.36401211548691' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.36387957986031' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.36374834396612' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.3640090860792' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.36388650467292' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.36385829732914' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.36378424973437' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.36371210066877' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.3636679731243' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.36364884824965' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.36365697856034' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.36366434258781' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.36367200933287' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.36365479743859' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.36368294066043' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.36366927459419' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.36367933033446' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.36368675612741' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.36373225444173' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.36372023331745' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.36377989666296' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.36379420830118' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.3643592293717' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.36491952739288' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.36493732835621' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.36483858770458' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.36471496108636' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.36458426913297' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.36483295287337' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.36474093278203' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.36462485334052' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.36448728333567' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.36749384293286' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.36753297030478' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.36764139447422' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.3677162007387' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.36781371733652' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.36795960906491' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.36807476027382' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.36818265196269' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.36826810047495' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.3683582067183' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.36841536247022' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.36848163362354' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.36908653505868' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.37006467392006' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.37016759714136' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.37023481256376' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.37038559070192' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.37052680799713' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.37106589443884' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.37113921473939' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.37127757723888' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.37139368035982' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.37147948076438' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.37152824186325' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.37163287848705' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.3717390572541' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.37176786106815' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.37183805708923' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.37198445647824' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.37214024939067' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.37217408058015' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.37225701466906' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.37224844884105' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.37232168677232' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.37236594783455' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.37238832954104' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_write_requests' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.36401059189129' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.36415068242433' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.36401211548691' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.36387957986031' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.36374834396612' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.3640090860792' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.36388650467292' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.36385829732914' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.36378424973437' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.36371210066877' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.3636679731243' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.36364884824965' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.36365697856034' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.36366434258781' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.36367200933287' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.36365479743859' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.36368294066043' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.36366927459419' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.36367933033446' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.36368675612741' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.36373225444173' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.36372023331745' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.36377989666296' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.36379420830118' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.3643592293717' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.36491952739288' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.36493732835621' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.36483858770458' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.36471496108636' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.36458426913297' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.36483295287337' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.36474093278203' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.36462485334052' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.36448728333567' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.36749384293286' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.36753297030478' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.36764139447422' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.3677162007387' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.36781371733652' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.36795960906491' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.36807476027382' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.36818265196269' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.36826810047495' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.3683582067183' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.36841536247022' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.36848163362354' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.36908653505868' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.37006467392006' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.37016759714136' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.37023481256376' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.37038559070192' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.37052680799713' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.37106589443884' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.37113921473939' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.37127757723888' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.37139368035982' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.37147948076438' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.37152824186325' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.37163287848705' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.3717390572541' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.37176786106815' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.37183805708923' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.37198445647824' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.37214024939067' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.37217408058015' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.37225701466906' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.37224844884105' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.37232168677232' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.37236594783455' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.37238832954104' color='ff6600' showName='0'/>
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
<set name='09-10 05:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-11 06:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='1' color='ff6600' showName='0'/>
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
<set name='09-16 01:25' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-16 18:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-10 05:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-11 06:15' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='1' color='ff6600' showName='0'/>
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
<set name='09-16 01:25' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-16 18:05' value='0.001' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='448' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='448' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='448' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='448' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='448' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='448' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='448' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='448' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='448' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='448' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='448' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='448' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='448' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='448' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='448' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='448' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='448' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='448' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='448' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_total' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='448' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='448' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='448' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='448' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='448' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='448' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='448' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='448' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='448' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='448' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='448' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='448' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='448' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='448' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='448' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='448' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='448' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='448' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='448' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='448' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='448' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='448' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.58126438585265' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.58115506393498' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.58103740557263' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.58089954568228' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.58077027728091' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.58374172947096' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.58362321307239' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.58357209262032' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.58346579918912' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.58336124007702' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.58328530404832' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.5831908405888' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.58307707393532' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.58296079959978' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.58284866429286' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.58273619107304' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.58262878603534' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.58251964517577' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.58240321397765' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.5822756790666' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.58214130326272' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.58203548031701' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.58190292552532' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.58176386791678' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.5816566381927' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.58154641508415' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.58143111102492' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.58130051188081' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.58116105956984' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.58362518434544' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.58395905564691' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.58387651835662' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.58373792328814' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.58359156645858' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.58373012193571' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.58369313610866' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.58363450051172' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.58358728583649' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.58354688441579' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.58350003944467' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.58346263118667' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.58341524455888' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.58334631421543' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.58329411448657' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.58323678730987' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.58326863048332' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.58323532222248' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.58327934509751' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.58324448640821' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.58319630871604' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.58313406282828' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.58504788028479' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.58596700446349' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.58591624142442' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.5858238288291' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.58578381316196' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.58572820443747' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.58567816243254' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.58561935915721' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.58557774360749' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.58554993390459' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.58551774645564' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.58549519411599' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.58547317632057' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.58544366558628' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.5854239029263' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.585387153249' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.58536424654613' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.58532884592866' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.58531512262149' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_disk_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.58126438585265' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.58115506393498' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.58103740557263' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.58089954568228' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.58077027728091' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.58374172947096' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.58362321307239' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.58357209262032' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.58346579918912' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.58336124007702' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.58328530404832' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.5831908405888' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.58307707393532' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.58296079959978' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.58284866429286' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.58273619107304' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.58262878603534' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.58251964517577' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.58240321397765' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.5822756790666' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.58214130326272' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.58203548031701' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.58190292552532' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.58176386791678' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.5816566381927' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.58154641508415' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.58143111102492' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.58130051188081' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.58116105956984' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.58362518434544' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.58395905564691' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.58387651835662' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.58373792328814' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.58359156645858' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.58373012193571' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.58369313610866' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.58363450051172' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.58358728583649' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.58354688441579' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.58350003944467' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.58346263118667' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.58341524455888' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.58334631421543' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.58329411448657' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.58323678730987' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.58326863048332' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.58323532222248' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.58327934509751' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.58324448640821' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.58319630871604' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.58313406282828' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.58504788028479' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.58596700446349' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.58591624142442' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.5858238288291' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.58578381316196' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.58572820443747' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.58567816243254' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.58561935915721' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.58557774360749' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.58554993390459' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.58551774645564' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.58549519411599' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.58547317632057' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.58544366558628' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.5854239029263' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.585387153249' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.58536424654613' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.58532884592866' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.58531512262149' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.0096553510921195' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0096645926778462' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0096665922795775' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0096677415705392' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0096742024981099' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.0096738820293826' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.0096705229931796' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0096699906319724' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.0096755890664379' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.0096739704188595' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0096727790220231' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.0096749769575728' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0096744310540457' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0096766340358566' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0096790443468894' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0096822995546288' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.0096837963548771' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0096847836122765' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0096833830379968' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0096910674734747' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.009689875939051' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0096905851976093' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0096957274428806' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0096953778218429' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0096922887383666' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0096908872054113' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0096894867360507' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0096870337295149' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0096845825831038' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0096844494567126' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.0096910714554427' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.009690916328693' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0096937245360397' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0096935890654263' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0097823499941492' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0097811354531292' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0097825931294467' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0097949799535793' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0097960259288353' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0097946437782409' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0097946780808317' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0097937016927034' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0097923210072591' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.009800436451717' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0098002657979304' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0097974731321479' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0097983133968251' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.009796208909281' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0097953548445371' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.009793574858605' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0097936094244428' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.0097984131740868' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.0097964274346828' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0097945171045645' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0097963619131521' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0097957911968683' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0097954228137593' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0098030932258314' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0098039269276777' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0098051643147705' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0098088071007651' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0098070308551604' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0098090655331407' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0098088947006362' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.0098092600512209' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0098141614909322' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.009814188434639' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0098130139256133' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0098216484331448' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0098198709169566' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.0096553510921195' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.0096645926778462' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.0096665922795775' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.0096677415705392' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.0096742024981099' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.0096738820293826' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.0096705229931796' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.0096699906319724' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.0096755890664379' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.0096739704188595' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.0096727790220231' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.0096749769575728' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.0096744310540457' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.0096766340358566' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0096790443468894' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.0096822995546288' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.0096837963548771' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.0096847836122765' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.0096833830379968' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.0096910674734747' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.009689875939051' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.0096905851976093' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.0096957274428806' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.0096953778218429' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.0096922887383666' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.0096908872054113' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.0096894867360507' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.0096870337295149' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.0096845825831038' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.0096844494567126' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.0096910714554427' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.009690916328693' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.0096937245360397' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.0096935890654263' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.0097823499941492' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.0097811354531292' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.0097825931294467' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.0097949799535793' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.0097960259288353' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.0097946437782409' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.0097946780808317' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.0097937016927034' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.0097923210072591' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.009800436451717' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.0098002657979304' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.0097974731321479' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.0097983133968251' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.009796208909281' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.0097953548445371' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.009793574858605' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.0097936094244428' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.0097984131740868' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.0097964274346828' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.0097945171045645' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.0097963619131521' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.0097957911968683' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.0097954228137593' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.0098030932258314' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.0098039269276777' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.0098051643147705' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.0098088071007651' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.0098070308551604' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.0098090655331407' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.0098088947006362' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.0098092600512209' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.0098141614909322' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.009814188434639' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.0098130139256133' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.0098216484331448' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.0098198709169566' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.97398775515157' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.97395340803552' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.97392196492964' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.97384854062873' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.97378580700609' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.97849148488825' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.97847672989713' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.97845919217536' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.9784305636623' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.97840206072702' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.97841122026536' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.97840331588345' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.97836444287525' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.9783176696689' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.97827940987284' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.9782398032911' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.97823850641961' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.97821102288638' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.97816778249751' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.97810799522408' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.97804560275417' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.97802180423759' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.97795643311451' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.97788457185355' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.9778471443194' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.97781829070889' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.97776774660844' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.97770628341491' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.9776341241883' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.98153781702994' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.98221103389666' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.98218333979965' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.9821146446211' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.98203769292807' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.99647443280973' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.99664331300253' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.99689731875808' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.99713504684381' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.99738282062894' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.99762727863754' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.99788126461702' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.99811293219605' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.99832119466938' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.99855515939335' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.99876977283504' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.99907879164401' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.9993366402797' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.99984921383952' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.99998726449313' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='1.0002192088332' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='1.0004578350392' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='1.0027231529324' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='1.0044498022724' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='1.0046502856958' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='1.0048459608124' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='1.0052882541451' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='1.0057125367016' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='1.0061276699219' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='1.0065453147256' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1.0069887659426' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1.0074318946247' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1.0078822299051' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1.0083422684093' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1.0088277443336' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='1.0093197050304' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='1.0097549612409' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='1.0101809109547' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='1.0106209708182' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='1.0110297878132' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='1.0114674229443' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.97398775515157' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.97395340803552' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.97392196492964' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.97384854062873' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.97378580700609' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.97849148488825' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.97847672989713' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.97845919217536' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.9784305636623' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.97840206072702' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.97841122026536' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.97840331588345' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.97836444287525' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.9783176696689' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.97827940987284' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.9782398032911' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.97823850641961' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.97821102288638' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.97816778249751' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.97810799522408' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.97804560275417' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.97802180423759' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.97795643311451' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.97788457185355' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.9778471443194' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.97781829070889' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.97776774660844' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.97770628341491' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.9776341241883' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.98153781702994' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.98221103389666' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.98218333979965' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.9821146446211' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.98203769292807' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.99647443280973' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.99664331300253' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.99689731875808' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.99713504684381' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.99738282062894' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.99762727863754' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.99788126461702' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.99811293219605' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.99832119466938' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.99855515939335' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.99876977283504' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.99907879164401' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.9993366402797' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.99984921383952' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.99998726449313' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='1.0002192088332' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='1.0004578350392' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='1.0027231529324' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='1.0044498022724' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='1.0046502856958' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='1.0048459608124' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='1.0052882541451' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='1.0057125367016' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='1.0061276699219' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='1.0065453147256' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1.0069887659426' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1.0074318946247' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1.0078822299051' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1.0083422684093' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1.0088277443336' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='1.0093197050304' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='1.0097549612409' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='1.0101809109547' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='1.0106209708182' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='1.0110297878132' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='1.0114674229443' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='2.6107473297259' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2.6101719659933' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2.6096890282837' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2.6089763901093' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2.6083286841552' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='2.6091650553263' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='2.6085425096873' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='2.6083419185687' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='2.6078495567595' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='2.6073699416293' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2.607371199396' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='2.607356616211' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='2.6069487636051' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='2.6065038688689' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2.6059868030752' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2.6054126592798' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='2.6052341246885' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='2.6046917947266' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='2.6041364767529' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='2.6036099015966' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='2.6030306337169' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='2.6025429811568' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='2.6019679787545' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='2.6012771721983' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='2.6007628101217' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='2.60032990049' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='2.599794870649' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='2.5992170490952' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='2.5985704704603' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='2.5992455418093' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='2.5986864528998' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='2.5983895720366' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='2.5978885031485' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='2.597238142172' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='2.5699379911483' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='2.5701627358775' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='2.5704898755304' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='2.5706674286047' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='2.570916283307' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='2.5712561852273' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='2.571547411208' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='2.5717539336122' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='2.5718024394455' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='2.5719199027881' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='2.5719324735149' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='2.5722850481003' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='2.5724900196399' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='2.5730741649566' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='2.5733561849046' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='2.5734742828673' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='2.5738450435727' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='2.5751776700453' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='2.5759148991169' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='2.5760333736211' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='2.576185897394' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='2.5764439354159' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='2.5764747745131' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='2.5764433931835' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='2.5765649547881' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='2.5767612060684' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='2.5768326797399' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='2.5769789681782' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='2.5772340615462' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='2.5775995774474' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='2.5776912191737' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='2.5778665587268' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='2.5776829416083' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='2.5777190187894' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='2.5776181559239' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='2.5775658308814' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_select' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='2.6107473297259' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='2.6101719659933' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='2.6096890282837' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='2.6089763901093' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='2.6083286841552' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='2.6091650553263' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='2.6085425096873' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='2.6083419185687' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='2.6078495567595' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='2.6073699416293' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='2.607371199396' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='2.607356616211' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='2.6069487636051' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='2.6065038688689' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='2.6059868030752' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='2.6054126592798' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='2.6052341246885' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='2.6046917947266' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='2.6041364767529' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='2.6036099015966' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='2.6030306337169' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='2.6025429811568' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='2.6019679787545' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='2.6012771721983' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='2.6007628101217' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='2.60032990049' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='2.599794870649' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='2.5992170490952' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='2.5985704704603' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='2.5992455418093' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='2.5986864528998' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='2.5983895720366' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='2.5978885031485' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='2.597238142172' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='2.5699379911483' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='2.5701627358775' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='2.5704898755304' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='2.5706674286047' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='2.570916283307' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='2.5712561852273' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='2.571547411208' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='2.5717539336122' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='2.5718024394455' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='2.5719199027881' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='2.5719324735149' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='2.5722850481003' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='2.5724900196399' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='2.5730741649566' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='2.5733561849046' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='2.5734742828673' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='2.5738450435727' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='2.5751776700453' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='2.5759148991169' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='2.5760333736211' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='2.576185897394' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='2.5764439354159' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='2.5764747745131' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='2.5764433931835' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='2.5765649547881' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='2.5767612060684' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='2.5768326797399' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='2.5769789681782' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='2.5772340615462' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='2.5775995774474' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='2.5776912191737' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='2.5778665587268' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='2.5776829416083' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='2.5777190187894' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='2.5776181559239' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='2.5775658308814' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='1.2558086359346' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='1.2557617461005' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='1.2557143059243' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='1.2556646172324' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='1.2556158688025' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='1.2555583141603' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='1.2555719394749' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='1.2554851372802' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='1.255442818095' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='1.2554071355805' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='1.2554102404221' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='1.255397652137' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='1.2553761276029' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='1.2553553045359' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='1.2553327221117' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='1.2553027479783' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='1.2553682977478' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='1.2552757598855' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='1.2552555162239' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='1.2552313485881' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='1.2552079410332' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='1.255181356315' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='1.2551599642489' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='1.2551334965517' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='1.2551131420461' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='1.255095279749' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='1.2550695260123' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='1.2550247216601' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='1.2549795300031' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='1.2549353201231' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='1.25487471234' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='1.2548456332177' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='1.2548029696907' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='1.2547565025578' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='1.2520312065461' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='1.2520245128341' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='1.2520149915942' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='1.2520049457149' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='1.2519993589424' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='1.2520062164796' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='1.2520098337173' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='1.2520070811286' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='1.2520077400956' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='1.2520021879142' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='1.2519962860171' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='1.2519854942058' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='1.251980536028' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='1.2520115818717' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='1.2519846430344' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='1.2519820083464' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='1.2519877367162' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='1.2520600622228' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='1.2520653037625' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='1.2519895762276' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='1.2519957965125' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='1.2520096290851' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='1.2520056852963' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='1.2519989308757' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='1.2519968769559' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1.2519974106533' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1.2519894367788' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1.2519886431192' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1.2519950210981' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1.252003751077' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='1.2520656083661' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='1.2519896562123' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='1.251969708958' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='1.2519605889827' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='1.2519499743286' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='1.2519370410267' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_insert' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='1.2558086359346' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='1.2557617461005' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='1.2557143059243' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='1.2556646172324' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='1.2556158688025' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='1.2555583141603' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='1.2555719394749' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='1.2554851372802' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='1.255442818095' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='1.2554071355805' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='1.2554102404221' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='1.255397652137' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='1.2553761276029' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='1.2553553045359' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='1.2553327221117' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='1.2553027479783' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='1.2553682977478' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='1.2552757598855' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='1.2552555162239' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='1.2552313485881' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='1.2552079410332' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='1.255181356315' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='1.2551599642489' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='1.2551334965517' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='1.2551131420461' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='1.255095279749' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='1.2550695260123' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='1.2550247216601' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='1.2549795300031' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='1.2549353201231' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='1.25487471234' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='1.2548456332177' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='1.2548029696907' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='1.2547565025578' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='1.2520312065461' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='1.2520245128341' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='1.2520149915942' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='1.2520049457149' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='1.2519993589424' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='1.2520062164796' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='1.2520098337173' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='1.2520070811286' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='1.2520077400956' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='1.2520021879142' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='1.2519962860171' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='1.2519854942058' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='1.251980536028' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='1.2520115818717' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='1.2519846430344' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='1.2519820083464' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='1.2519877367162' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='1.2520600622228' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='1.2520653037625' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='1.2519895762276' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='1.2519957965125' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='1.2520096290851' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='1.2520056852963' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='1.2519989308757' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='1.2519968769559' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='1.2519974106533' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='1.2519894367788' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='1.2519886431192' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='1.2519950210981' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='1.252003751077' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='1.2520656083661' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='1.2519896562123' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='1.251969708958' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='1.2519605889827' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='1.2519499743286' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='1.2519370410267' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.025668639470866' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.025664831886025' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.025674424410396' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.025673701034953' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.025671059798971' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.025672656486459' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.025667620395527' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.025666025145043' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.025662427904177' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.025662761143371' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.025691413010282' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.025705510094942' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.025709566616469' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.02571116813032' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0257112782259' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.025707683778481' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.025720767264228' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.025717530630792' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.025717220480119' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.025714889573277' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.025710774996136' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.025704971333223' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.025700966603623' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.025694957430056' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.025690542833732' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.025688024300111' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.025683294279145' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.025681096485276' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.025679321638038' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.025678706217168' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.025669969002326' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.025672953158914' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.025672864055959' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.02567057267248' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.025322504790856' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.025326768642428' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.025325295237123' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.02533272726463' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.025331857363076' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.025329673272738' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.025326479738684' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.025325815192894' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.025331715610388' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.025327820322798' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.025323821998171' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.025320336086826' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.025318464382432' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.025316445322079' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.025315329908219' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.025310136539696' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.02530786830247' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.025303054909751' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.025301178916759' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.025298756579637' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.02529810520166' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.025301775689376' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.025299414884902' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.025298161086086' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.025295298629294' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.02529174269718' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.025294003635499' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.025293057049593' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.025291404172689' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.025292564752249' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.025289082841722' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.02528575865631' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.025280908250513' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.02527646181895' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.025273920175506' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.025270777650751' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_delete' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.025668639470866' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.025664831886025' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.025674424410396' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.025673701034953' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.025671059798971' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.025672656486459' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.025667620395527' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.025666025145043' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.025662427904177' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.025662761143371' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.025691413010282' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.025705510094942' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.025709566616469' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.02571116813032' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.0257112782259' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.025707683778481' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.025720767264228' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.025717530630792' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.025717220480119' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.025714889573277' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.025710774996136' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.025704971333223' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.025700966603623' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.025694957430056' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.025690542833732' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.025688024300111' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.025683294279145' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.025681096485276' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.025679321638038' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.025678706217168' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.025669969002326' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.025672953158914' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.025672864055959' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.02567057267248' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.025322504790856' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.025326768642428' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.025325295237123' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.02533272726463' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.025331857363076' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.025329673272738' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.025326479738684' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.025325815192894' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.025331715610388' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.025327820322798' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.025323821998171' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.025320336086826' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.025318464382432' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.025316445322079' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.025315329908219' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.025310136539696' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.02530786830247' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.025303054909751' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.025301178916759' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.025298756579637' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.02529810520166' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.025301775689376' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.025299414884902' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.025298161086086' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.025295298629294' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.02529174269718' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.025294003635499' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.025293057049593' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.025291404172689' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.025292564752249' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.025289082841722' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.02528575865631' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.025280908250513' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.02527646181895' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.025273920175506' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.025270777650751' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='0.12635244297122' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.12633178429722' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.1263447272513' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.12631951524699' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.12629089470736' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.12626523241174' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.12623695893646' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.12622337182746' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.12619680827807' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.12617759812545' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.12621240540907' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.12622222228111' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.12621526338744' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.12620717098938' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.12619015089566' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.12616986267993' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.12617895736466' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.12616349342848' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.12615468283688' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.12616504668864' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.12615654590874' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.12614877757659' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.1261294035335' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.12610813164763' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.12609176758288' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.12608277035434' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.12605786456361' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.12603666526468' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.12601221712099' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.12598789278949' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.1259506075521' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.12594203460839' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.12593983504312' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.12593156640813' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.12482956456018' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.12483097557559' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.12484002054176' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.12484631360837' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.12484501381471' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.12484351268723' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.12483614865753' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.12483495504761' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.12483971055364' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.12482721779805' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.12482934779459' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.12482706077021' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.12482203907241' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.12481291461778' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.12481573657505' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.12480165485806' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.12479372829376' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.12479817955671' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.12480518389986' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.12480096378738' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.12480361098769' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.12481820979058' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.12482225608561' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.12483524231642' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.12483595239336' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.12483870743927' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.124851058982' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.12485941299772' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.12487024363921' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.12489502799822' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.12492407409059' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.12493178149801' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.12492655794449' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.12491913552869' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.12490611379279' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.12489769121818' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_update' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='0.12635244297122' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='0.12633178429722' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='0.1263447272513' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='0.12631951524699' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='0.12629089470736' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='0.12626523241174' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='0.12623695893646' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='0.12622337182746' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='0.12619680827807' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='0.12617759812545' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='0.12621240540907' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='0.12622222228111' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='0.12621526338744' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='0.12620717098938' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='0.12619015089566' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='0.12616986267993' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='0.12617895736466' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='0.12616349342848' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='0.12615468283688' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='0.12616504668864' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='0.12615654590874' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='0.12614877757659' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='0.1261294035335' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='0.12610813164763' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='0.12609176758288' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='0.12608277035434' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='0.12605786456361' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='0.12603666526468' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='0.12601221712099' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='0.12598789278949' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='0.1259506075521' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='0.12594203460839' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='0.12593983504312' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='0.12593156640813' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='0.12482956456018' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='0.12483097557559' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='0.12484002054176' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='0.12484631360837' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='0.12484501381471' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='0.12484351268723' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='0.12483614865753' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='0.12483495504761' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='0.12483971055364' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='0.12482721779805' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='0.12482934779459' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='0.12482706077021' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='0.12482203907241' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='0.12481291461778' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='0.12481573657505' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='0.12480165485806' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='0.12479372829376' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='0.12479817955671' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='0.12480518389986' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='0.12480096378738' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='0.12480361098769' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='0.12481820979058' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='0.12482225608561' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='0.12483524231642' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='0.12483595239336' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='0.12483870743927' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='0.124851058982' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='0.12485941299772' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='0.12487024363921' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='0.12489502799822' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='0.12492407409059' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='0.12493178149801' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='0.12492655794449' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='0.12491913552869' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='0.12490611379279' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='0.12489769121818' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='386.6198186878' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='388.19820483201' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='389.9252326786' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='391.47591716293' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='393.08814512196' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='395.66060152528' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='398.15266414951' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='398.60382118703' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='400.29206295403' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='401.98695260447' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='404.04037866063' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='405.98159266501' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='407.69170902705' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='409.38459271722' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='411.06998781192' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='412.81558440541' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='415.14425307227' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='416.48390585867' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='418.10381027503' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='419.73435963998' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='421.30827725499' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='422.93509290131' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='424.51517970611' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='426.04844878174' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='427.63555474875' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='429.24559872595' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='430.83799640207' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='432.3821258099' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='433.92226130063' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='435.87854014835' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='437.88211928669' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='439.16154144599' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='440.72764921146' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='442.2715944249' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='168.67372179246' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='170.12150470142' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='172.09111202507' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='173.98165255543' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='175.86280265586' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='177.80430205796' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='179.74018933424' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='181.64272227673' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='183.50253468631' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='185.39596571002' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='187.23987869486' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='189.35110932954' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='191.18398495713' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='193.9530625855' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='194.984279615' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='196.80008551618' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='198.6850922164' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='201.24058542099' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='203.24406278644' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='204.67952082123' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='206.40377833051' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='208.27096291857' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='210.01432863546' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='211.7643068226' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='213.5408175903' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='215.29312914432' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='217.0863691888' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='218.91343343365' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='220.78429539612' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='222.80360366882' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='225.02159143174' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='226.52359253251' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='228.21700440785' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='230.04622774971' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='231.79209861815' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='233.59010476054' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_received' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='386.6198186878' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='388.19820483201' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='389.9252326786' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='391.47591716293' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='393.08814512196' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='395.66060152528' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='398.15266414951' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='398.60382118703' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='400.29206295403' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='401.98695260447' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='404.04037866063' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='405.98159266501' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='407.69170902705' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='409.38459271722' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='411.06998781192' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='412.81558440541' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='415.14425307227' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='416.48390585867' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='418.10381027503' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='419.73435963998' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='421.30827725499' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='422.93509290131' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='424.51517970611' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='426.04844878174' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='427.63555474875' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='429.24559872595' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='430.83799640207' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='432.3821258099' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='433.92226130063' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='435.87854014835' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='437.88211928669' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='439.16154144599' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='440.72764921146' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='442.2715944249' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='168.67372179246' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='170.12150470142' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='172.09111202507' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='173.98165255543' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='175.86280265586' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='177.80430205796' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='179.74018933424' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='181.64272227673' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='183.50253468631' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='185.39596571002' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='187.23987869486' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='189.35110932954' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='191.18398495713' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='193.9530625855' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='194.984279615' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='196.80008551618' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='198.6850922164' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='201.24058542099' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='203.24406278644' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='204.67952082123' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='206.40377833051' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='208.27096291857' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='210.01432863546' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='211.7643068226' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='213.5408175903' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='215.29312914432' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='217.0863691888' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='218.91343343365' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='220.78429539612' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='222.80360366882' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='225.02159143174' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='226.52359253251' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='228.21700440785' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='230.04622774971' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='231.79209861815' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='233.59010476054' color='ff6600' showName='0'/>
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
<set name='09-10 00:00' value='55.126923327081' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='63.222309844396' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='73.442195115491' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='80.625370552624' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='89.78813597063' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='253.20948168224' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='269.25568374937' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='273.39220897326' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='284.78539524451' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='295.72511210177' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='312.87205940989' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='329.17216379389' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='340.57415752173' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='351.67038440195' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='363.32587662647' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='375.24529679227' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='392.92963087491' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='403.30315634461' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='411.72255504912' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='420.4799713056' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='428.43383903758' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='436.77190342264' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='443.61131532893' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='450.22755499334' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='4.5885098336876' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='12.045133461661' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='20.135885072755' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='27.833687096945' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='35.233478660902' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='185.90301440063' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='202.41797844064' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='210.49913893515' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='218.73007147865' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='226.15433688165' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='427.15139926436' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='2.476262269863' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='15.320533615863' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='28.60153553599' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='41.871683771652' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='56.843593498224' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='70.70940285524' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='85.30713627049' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='95.74477668321' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='109.77368924105' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='123.30455528265' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='144.33208697502' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='157.31064362579' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='175.93690701188' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='184.60586886577' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='196.90226274248' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='210.92005917677' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='334.50451173565' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='376.50206837391' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='387.35500236524' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='395.35771811426' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='404.06129300836' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='412.27354638452' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='420.6448755887' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='429.81064219579' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='7.089714014151' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='18.635501316388' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='29.354599507609' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='41.664117603989' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='54.509265547112' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='66.195136510707' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='75.930230330622' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='85.168823583024' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='97.074484459961' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='107.83171461828' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='119.81379104178' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://testing.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_sent' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='0'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>
<set name='09-10 00:00' value='55.126923327081' color='ff6600' showName='0'/>
<set name='09-10 01:00' value='63.222309844396' color='ff6600' showName='0'/>
<set name='09-10 02:00' value='73.442195115491' color='ff6600' showName='0'/>
<set name='09-10 03:00' value='80.625370552624' color='ff6600' showName='0'/>
<set name='09-10 04:00' value='89.78813597063' color='ff6600' showName='0'/>
<set name='09-10 05:15' value='253.20948168224' color='ff6600' showName='0'/>
<set name='09-10 06:35' value='269.25568374937' color='ff6600' showName='0'/>
<set name='09-10 07:00' value='273.39220897326' color='ff6600' showName='0'/>
<set name='09-10 08:00' value='284.78539524451' color='ff6600' showName='0'/>
<set name='09-10 09:00' value='295.72511210177' color='ff6600' showName='0'/>
<set name='09-10 10:00' value='312.87205940989' color='ff6600' showName='0'/>
<set name='09-10 11:00' value='329.17216379389' color='ff6600' showName='0'/>
<set name='09-10 12:00' value='340.57415752173' color='ff6600' showName='0'/>
<set name='09-10 13:00' value='351.67038440195' color='ff6600' showName='0'/>
<set name='09-10 14:00' value='363.32587662647' color='ff6600' showName='0'/>
<set name='09-10 15:00' value='375.24529679227' color='ff6600' showName='0'/>
<set name='09-10 16:05' value='392.92963087491' color='ff6600' showName='0'/>
<set name='09-10 17:00' value='403.30315634461' color='ff6600' showName='0'/>
<set name='09-10 18:00' value='411.72255504912' color='ff6600' showName='0'/>
<set name='09-10 19:00' value='420.4799713056' color='ff6600' showName='0'/>
<set name='09-10 20:00' value='428.43383903758' color='ff6600' showName='0'/>
<set name='09-10 21:00' value='436.77190342264' color='ff6600' showName='0'/>
<set name='09-10 22:00' value='443.61131532893' color='ff6600' showName='0'/>
<set name='09-10 23:00' value='450.22755499334' color='ff6600' showName='0'/>
<set name='09-11 00:00' value='4.5885098336876' color='ff6600' showName='0'/>
<set name='09-11 01:00' value='12.045133461661' color='ff6600' showName='0'/>
<set name='09-11 02:00' value='20.135885072755' color='ff6600' showName='0'/>
<set name='09-11 03:00' value='27.833687096945' color='ff6600' showName='0'/>
<set name='09-11 04:00' value='35.233478660902' color='ff6600' showName='0'/>
<set name='09-11 05:00' value='185.90301440063' color='ff6600' showName='0'/>
<set name='09-11 06:15' value='202.41797844064' color='ff6600' showName='0'/>
<set name='09-11 07:00' value='210.49913893515' color='ff6600' showName='0'/>
<set name='09-11 08:00' value='218.73007147865' color='ff6600' showName='0'/>
<set name='09-11 09:00' value='226.15433688165' color='ff6600' showName='0'/>
<set name='09-15 12:18' value='427.15139926436' color='ff6600' showName='0'/>
<set name='09-15 13:00' value='2.476262269863' color='ff6600' showName='0'/>
<set name='09-15 14:00' value='15.320533615863' color='ff6600' showName='0'/>
<set name='09-15 15:00' value='28.60153553599' color='ff6600' showName='0'/>
<set name='09-15 16:00' value='41.871683771652' color='ff6600' showName='0'/>
<set name='09-15 17:00' value='56.843593498224' color='ff6600' showName='0'/>
<set name='09-15 18:00' value='70.70940285524' color='ff6600' showName='0'/>
<set name='09-15 19:00' value='85.30713627049' color='ff6600' showName='0'/>
<set name='09-15 20:00' value='95.74477668321' color='ff6600' showName='0'/>
<set name='09-15 21:00' value='109.77368924105' color='ff6600' showName='0'/>
<set name='09-15 22:00' value='123.30455528265' color='ff6600' showName='0'/>
<set name='09-15 23:00' value='144.33208697502' color='ff6600' showName='0'/>
<set name='09-16 00:00' value='157.31064362579' color='ff6600' showName='0'/>
<set name='09-16 01:25' value='175.93690701188' color='ff6600' showName='0'/>
<set name='09-16 02:00' value='184.60586886577' color='ff6600' showName='0'/>
<set name='09-16 03:00' value='196.90226274248' color='ff6600' showName='0'/>
<set name='09-16 04:00' value='210.92005917677' color='ff6600' showName='0'/>
<set name='09-16 05:05' value='334.50451173565' color='ff6600' showName='0'/>
<set name='09-16 06:05' value='376.50206837391' color='ff6600' showName='0'/>
<set name='09-16 07:00' value='387.35500236524' color='ff6600' showName='0'/>
<set name='09-16 08:00' value='395.35771811426' color='ff6600' showName='0'/>
<set name='09-16 09:00' value='404.06129300836' color='ff6600' showName='0'/>
<set name='09-16 10:00' value='412.27354638452' color='ff6600' showName='0'/>
<set name='09-16 11:00' value='420.6448755887' color='ff6600' showName='0'/>
<set name='09-16 12:00' value='429.81064219579' color='ff6600' showName='0'/>
<set name='09-16 13:00' value='7.089714014151' color='ff6600' showName='0'/>
<set name='09-16 14:00' value='18.635501316388' color='ff6600' showName='0'/>
<set name='09-16 15:00' value='29.354599507609' color='ff6600' showName='0'/>
<set name='09-16 16:00' value='41.664117603989' color='ff6600' showName='0'/>
<set name='09-16 17:00' value='54.509265547112' color='ff6600' showName='0'/>
<set name='09-16 18:05' value='66.195136510707' color='ff6600' showName='0'/>
<set name='09-16 19:00' value='75.930230330622' color='ff6600' showName='0'/>
<set name='09-16 20:00' value='85.168823583024' color='ff6600' showName='0'/>
<set name='09-16 21:00' value='97.074484459961' color='ff6600' showName='0'/>
<set name='09-16 22:00' value='107.83171461828' color='ff6600' showName='0'/>
<set name='09-16 23:00' value='119.81379104178' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr></tr></div></table></body></html>