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
<body><table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder"><tr><td colspan='3'><div id='content'><h1>Date range: start 2009-08-20 -> end 2009-08-27</h1></td></tr><tr><td colspan="3">

<div id="content"><table cellpadding="0" cellspacing="1" border="0" class="tableborder"><form action="http://demo01.kontrollbase.com/index.php/main/graphs" method="post" name="graphform"><input type="hidden" name="server_list_id" value="12" /><tr><th>Start date</th><th>End Date</th><th>&nbsp;</th></tr><tr><td class='td'><input type="text" name="sday" value="2009-08-20" id="sday" maxlength="10" size="15" style="width:50%"  />
<a href="#"onClick="cal.select(document.forms['graphform'].sday,'anchor1','yyyy-MM-dd'); return false;" NAME="anchor1" ID="anchor1"><img src='http://demo01.kontrollbase.com/includes/images/icon_calendar.gif' height='20' width='20' border='0'></a></td><td class='td'><input type="text" name="eday" value="2009-08-27" id="eday" maxlength="10" size="15" style="width:50%"  /> 
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
<set name='08-25 00:00' value='0.398074' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.390201' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.382708' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.376731' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.372438' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.370421' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.365742' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.361785' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.358182' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.354923' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.353964' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.362955' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.374048' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.370741' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.367606' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.374324' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.372266' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.379423' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.384702' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.390333' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.388546' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.387022' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.384998' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.387108' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.385142' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.39643' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.394244' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.392237' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.390775' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.39013' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.388052' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.386933' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.385351' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.384162' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.382715' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.387518' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.383992' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.392759' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.405154' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.416639' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.42143' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.422146' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.423452' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.428589' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.432137' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.440995' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.451825' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.459484' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.398074' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.390201' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.382708' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.376731' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.372438' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.370421' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.365742' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.361785' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.358182' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.354923' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.353964' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.362955' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.374048' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.370741' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.367606' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.374324' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.372266' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.379423' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.384702' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.390333' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.388546' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.387022' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.384998' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.387108' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.385142' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.39643' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.394244' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.392237' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.390775' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.39013' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.388052' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.386933' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.385351' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.384162' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.382715' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.387518' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.383992' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.392759' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.405154' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.416639' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.42143' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.422146' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.423452' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.428589' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.432137' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.440995' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.451825' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.459484' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='15' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='15' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='25' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='27' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='27' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='32' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='31' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='30' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='29' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='29' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='18' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='15' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='15' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='25' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='27' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='27' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='32' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='31' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='30' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='29' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='29' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='18' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='18' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.051' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.051' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.051' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.021' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.051' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.021' color='ff6600' showName='0'/>
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
<set name='08-25 18:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.051' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.051' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.061' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-25 18:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.051' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.051' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.061' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='134225920' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='134225920' color='ff6600' showName='0'/>
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
<set name='08-25 15:00' value='16736256' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='10518528' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='643072' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-25 15:00' value='16736256' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='10518528' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='643072' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='2937774080' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='2937774080' color='ff6600' showName='0'/>
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
<set name='08-25 20:00' value='2923474944' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='2928148480' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='2927554560' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='2926907392' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='2926604288' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='2918002688' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='2917724160' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='2917347328' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='2906648576' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='2907004928' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='2907025408' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2907774976' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2907774976' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='2907348992' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2902622208' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2893488128' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='2899021824' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2898268160' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='2896953344' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2894675968' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2894876672' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2894909440' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2890539008' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2892410880' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2892128256' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2894843904' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2891796480' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='2892722176' color='ff6600' showName='0'/>
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
<set name='08-25 20:00' value='2923474944' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='2928148480' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='2927554560' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='2926907392' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='2926604288' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='2918002688' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='2917724160' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='2917347328' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='2906648576' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='2907004928' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='2907025408' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2907774976' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2907774976' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='2907348992' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2902622208' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2893488128' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='2899021824' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2898268160' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='2896953344' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2894675968' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2894876672' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2894909440' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2890539008' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2892410880' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2892128256' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2894843904' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2891796480' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='2892722176' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='100' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='100' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='100' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='100' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='100' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='100' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='100' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='100' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='100' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='100' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='99' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='99' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='100' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='99' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='100' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='100' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='100' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='100' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='100' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='99' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='100' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='100' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='100' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='100' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='100' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='99' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='99' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='100' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='99' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='4' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='4' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='4' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='4' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='4' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='4' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='4' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='49' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='49' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='49' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='49' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='49' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='49' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='49' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='12177560' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='12177560' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='13226136' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='13226136' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='13226136' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='13226136' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='14274712' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='14274712' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='14274712' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='14274712' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='15323288' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='16371864' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='16371864' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='16371864' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='16371936' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='17420512' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='17420512' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='17420512' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='17420512' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='18469088' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='18469088' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='18469088' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='19517664' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='20599008' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='12177560' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='12177560' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='13226136' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='13226136' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='13226136' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='13226136' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='14274712' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='14274712' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='14274712' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='14274712' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='15323288' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='16371864' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='16371864' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='16371864' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='16371936' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='17420512' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='17420512' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='17420512' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='17420512' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='18469088' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='18469088' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='18469088' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='19517664' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='20599008' color='ff6600' showName='0'/>
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
<set name='08-25 17:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='235520' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='235520' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='251904' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='251904' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='251904' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='251904' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='251904' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='251904' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='251904' color='ff6600' showName='0'/>
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
<set name='08-25 17:00' value='202752' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='235520' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='235520' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='235520' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='235520' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='251904' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='251904' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='251904' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='251904' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='251904' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='251904' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='251904' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='11' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='11' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='11' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='11' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='11' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='11' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='11' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='25' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='25' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='25' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='25' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='25' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='25' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='25' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='11714560' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='11714560' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='12763136' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='12763136' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='12763136' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='12763136' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='13811712' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='13811712' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='13811712' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='13811712' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='14860288' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='15908864' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='15908864' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='15908864' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='15908864' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='16957440' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='16957440' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='16957440' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='16957440' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='18006016' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='18006016' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='18006016' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='19054592' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='20135936' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='11714560' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='11714560' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='12763136' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='12763136' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='12763136' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='12763136' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='13811712' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='13811712' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='13811712' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='13811712' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='14860288' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='15908864' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='15908864' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='15908864' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='15908864' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='16957440' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='16957440' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='16957440' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='16957440' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='18006016' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='18006016' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='18006016' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='19054592' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='20135936' color='ff6600' showName='0'/>
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
<set name='08-25 17:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='147456' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='147456' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='163840' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='163840' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='163840' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='163840' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='163840' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='163840' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='163840' color='ff6600' showName='0'/>
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
<set name='08-25 17:00' value='114688' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='147456' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='147456' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='147456' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='147456' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='163840' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='163840' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='163840' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='163840' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='163840' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='163840' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='163840' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='463000' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='463000' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='463072' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='463072' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='463072' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='463072' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='463072' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='463072' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='463072' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='463072' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='463072' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='463072' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='463000' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='463000' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='463000' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='463072' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='463072' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='463072' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='463072' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='463072' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='463072' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='463072' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='463072' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='463072' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='463072' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='88064' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='88064' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='88064' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='88064' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='88064' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='88064' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='88064' color='ff6600' showName='0'/>
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
<set name='08-25 11:00' value='3830104' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='4180384' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='3842552' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='4103248' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='4149152' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='4158256' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='4133224' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='4133568' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='3812856' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='4112968' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='3932408' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='4136800' color='ff6600' showName='0'/>
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
<set name='08-25 11:00' value='3830104' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='4180384' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='3842552' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='4103248' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='4149152' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='4158256' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='4133224' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='4181408' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='4133568' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='3812856' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='4112968' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='3932408' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='4136800' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.037489028213166' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.036044412913759' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.034787465940054' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.033684864708189' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.032710843373494' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.031144725052772' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.029726115566819' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.029090733617161' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.028540769732551' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.028028374185348' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.027607036374478' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.028295597484277' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.030577155409116' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.03005441098785' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.029539440203562' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.029905252822779' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.029449502133713' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.029335625859697' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.030081225033289' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.031331182795699' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.030503792271942' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.029748714043856' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.029028335301063' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.028393800229621' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.027756052141527' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.028014871236852' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.02738406775587' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.026798000689417' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.026240497813656' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.025709359605911' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.025209175489252' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.024712762621511' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.024256812369288' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.023814281428143' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.023378854625551' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.023306151645207' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.02314767340944' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.024280861640431' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0252567018684' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.02640770252324' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.026827334754575' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.026858275773855' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.026892991710625' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.027908462867012' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.028001212121212' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.028767452942578' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.030440011993385' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.031310988251555' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.037489028213166' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.036044412913759' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.034787465940054' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.033684864708189' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.032710843373494' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.031144725052772' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.029726115566819' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.029090733617161' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.028540769732551' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.028028374185348' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.027607036374478' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.028295597484277' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.030577155409116' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.03005441098785' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.029539440203562' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.029905252822779' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.029449502133713' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.029335625859697' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.030081225033289' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.031331182795699' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.030503792271942' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.029748714043856' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.029028335301063' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.028393800229621' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.027756052141527' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.028014871236852' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.02738406775587' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.026798000689417' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.026240497813656' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.025709359605911' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.025209175489252' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.024712762621511' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.024256812369288' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.023814281428143' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.023378854625551' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.023306151645207' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.02314767340944' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.024280861640431' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0252567018684' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.02640770252324' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.026827334754575' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.026858275773855' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.026892991710625' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.027908462867012' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.028001212121212' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.028767452942578' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.030440011993385' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.031310988251555' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.029652037617555' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.027764368598029' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.026122615803815' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.024682460657107' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.023409638554217' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.022974517456605' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.022598583132946' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.021616298648852' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.020699934768428' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.019878739921993' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.019938580799046' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0220405946255' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.023372322899506' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.022584786053883' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.021885496183206' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.023503681885125' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.022801801801802' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.024787253553416' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.025323124722592' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.025688172043011' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.025589274837504' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.025479744671889' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.025187327823691' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.026189437428243' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.025886405959032' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.029044976423649' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.028720238389808' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.028397449155464' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.028090480995627' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.02779802955665' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.02751267244145' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.027422075885858' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.027157780789824' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.027054605460546' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.026826725403818' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.029011444921316' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.029567772659501' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.029644020988677' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.032069591118332' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.034078353253652' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.034630265153687' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.03427705295472' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.034057020849033' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.03420503330866' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.034769696969697' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.036492018108173' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.037912452975156' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.039120248790601' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.029652037617555' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.027764368598029' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.026122615803815' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.024682460657107' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.023409638554217' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.022974517456605' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.022598583132946' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.021616298648852' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.020699934768428' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.019878739921993' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.019938580799046' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0220405946255' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.023372322899506' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.022584786053883' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.021885496183206' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.023503681885125' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.022801801801802' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.024787253553416' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.025323124722592' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.025688172043011' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.025589274837504' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.025479744671889' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.025187327823691' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.026189437428243' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.025886405959032' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.029044976423649' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.028720238389808' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.028397449155464' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.028090480995627' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.02779802955665' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.02751267244145' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.027422075885858' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.027157780789824' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.027054605460546' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.026826725403818' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.029011444921316' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.029567772659501' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.029644020988677' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.032069591118332' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.034078353253652' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.034630265153687' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.03427705295472' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.034057020849033' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.03420503330866' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.034769696969697' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.036492018108173' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.037912452975156' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.039120248790601' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0021703239289446' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0020884565297673' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0020172570390554' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0019548004296602' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0010160642570281' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151862594724' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0016623565494104' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0016297143013594' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0016131767775603' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0015732158656183' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0015605247465713' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0033785020011435' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0015601317957166' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0015176967776017' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001498727735369' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0014909180166912' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094831673779' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091701054562' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.00111540168664' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010344086021505' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083438326561' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081005111423' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078709169618' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010076540375048' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0010074487895717' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010072542618789' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0010070696858939' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010068941744226' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010067272115708' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0010065681444992' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010064164260507' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010062715584823' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010061331256248' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.00101200120012' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010058737151248' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0019327610872675' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010055633442375' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0012595967964651' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0010541565123206' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010212483399734' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0010260618917806' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010051163980558' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010050238633509' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0011381692573402' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0018' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0011096020967358' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0014075876899148' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0010598940336328' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0021703239289446' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0020884565297673' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0020172570390554' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0019548004296602' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0010160642570281' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151862594724' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0016623565494104' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0016297143013594' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0016131767775603' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0015732158656183' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0015605247465713' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0033785020011435' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0015601317957166' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0015176967776017' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.001498727735369' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0014909180166912' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094831673779' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091701054562' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.00111540168664' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010344086021505' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083438326561' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081005111423' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078709169618' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010076540375048' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0010074487895717' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010072542618789' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0010070696858939' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010068941744226' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010067272115708' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0010065681444992' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010064164260507' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010062715584823' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010061331256248' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.00101200120012' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010058737151248' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0019327610872675' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010055633442375' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0012595967964651' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0010541565123206' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010212483399734' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0010260618917806' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010051163980558' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010050238633509' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0011381692573402' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0018' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0011096020967358' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0014075876899148' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0010598940336328' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0010208986415883' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194367237458' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181653042688' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170500076725' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0010160642570281' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151862594724' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001014399055422' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136894413339' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130463144162' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.00101246121447' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119260584377' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114351057747' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109829763866' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105652403592' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101781170483' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098183603338' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094831673779' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091701054562' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088770528185' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086021505376' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083438326561' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081005111423' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078709169618' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010076540375048' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0010074487895717' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010072542618789' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0010070696858939' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010068941744226' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010067272115708' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0010065681444992' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010064164260507' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010062715584823' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010061331256248' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.00100600060006' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010058737151248' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010057224606581' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010055633442375' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001005523336095' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0010054156512321' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010053120849934' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0010052123783561' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010051163980558' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010050238633509' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010049346163336' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010048484848485' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010047653085537' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001004684915976' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0010046072333564' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0010208986415883' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194367237458' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181653042688' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170500076725' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0010160642570281' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151862594724' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001014399055422' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136894413339' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130463144162' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.00101246121447' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119260584377' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114351057747' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109829763866' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105652403592' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101781170483' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098183603338' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094831673779' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091701054562' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088770528185' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086021505376' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083438326561' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081005111423' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078709169618' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010076540375048' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0010074487895717' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010072542618789' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0010070696858939' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010068941744226' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010067272115708' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0010065681444992' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010064164260507' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010062715584823' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010061331256248' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.00100600060006' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010058737151248' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010057224606581' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010055633442375' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001005523336095' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0010054156512321' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010053120849934' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0010052123783561' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010051163980558' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010050238633509' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010049346163336' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010048484848485' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010047653085537' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001004684915976' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0010046072333564' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.10605747126437' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.10663859355867' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.10713987284287' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.10757959796082' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.10803614457831' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.11047774453674' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.1106776051491' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.11085776670454' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.11101956947162' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.11116959712894' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.11130411449016' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.11142881646655' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.11154365733114' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.11164976228209' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.11174809160305' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.11183946980854' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.1125030820294' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.11312287941311' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.11370306258322' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.11424731182796' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.11475981443316' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.1152415086392' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.11569500196773' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.11612437810945' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.11653072625698' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.11691585056221' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.11728219358214' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.11762874870734' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.11798620921628' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.11920689655172' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.11948572345204' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.11975195986203' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.12000716962386' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.1202499249925' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.12048311306902' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.11954077253219' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.11732396466164' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.11780751173709' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.11809721093962' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.11834926958831' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.11859125571407' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.1188255308263' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.11905074101984' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.11926794966691' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.11947757575758' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.11968000953062' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.11987505797584' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.12006473162866' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.10605747126437' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.10663859355867' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.10713987284287' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.10757959796082' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.10803614457831' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.11047774453674' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.1106776051491' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.11085776670454' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.11101956947162' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.11116959712894' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.11130411449016' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.11142881646655' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.11154365733114' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.11164976228209' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.11174809160305' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.11183946980854' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.1125030820294' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.11312287941311' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.11370306258322' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.11424731182796' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.11475981443316' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.1152415086392' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.11569500196773' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.11612437810945' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.11653072625698' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.11691585056221' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.11728219358214' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.11762874870734' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.11798620921628' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.11920689655172' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.11948572345204' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.11975195986203' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.12000716962386' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.1202499249925' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.12048311306902' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.11954077253219' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.11732396466164' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.11780751173709' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.11809721093962' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.11834926958831' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.11859125571407' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.1188255308263' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.11905074101984' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.11926794966691' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.11947757575758' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.11968000953062' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.11987505797584' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.12006473162866' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0015224660397074' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0014859180936461' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0014541326067212' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0014262501918126' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0014016064257028' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0013796564868107' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0013599763855491' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0013422360333475' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0013261578604044' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0013115303617491' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0012981514609422' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0012858776443682' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001274574409665' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0012641310089805' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0012544529262087' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0012454590083456' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0012370791844476' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0012292526364053' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0012219263204616' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0012150537634409' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0012085958164023' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0012025127785563' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0011967729240457' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0011913509376196' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0011862197392924' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0011813565469713' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0011767421473464' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0011723543605653' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0011681802892701' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0011642036124795' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0011604106512672' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0011567889620571' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0011533281406203' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.0011500150015002' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0011468428781204' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0011430615164521' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010834501635623' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001138083402375' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0011353912808015' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001132802124834' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001130309458903' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0011279099513942' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0011255965837729' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0011233654083395' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0011212121212121' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0011191327138432' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0011171228994008' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0011151808339092' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0015224660397074' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0014859180936461' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0014541326067212' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0014262501918126' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0014016064257028' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0013796564868107' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0013599763855491' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0013422360333475' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0013261578604044' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0013115303617491' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0012981514609422' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0012858776443682' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001274574409665' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0012641310089805' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0012544529262087' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0012454590083456' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0012370791844476' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0012292526364053' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0012219263204616' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0012150537634409' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0012085958164023' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0012025127785563' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0011967729240457' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0011913509376196' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0011862197392924' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0011813565469713' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0011767421473464' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0011723543605653' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0011681802892701' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0011642036124795' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0011604106512672' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0011567889620571' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0011533281406203' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.0011500150015002' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0011468428781204' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0011430615164521' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010834501635623' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001138083402375' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0011353912808015' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001132802124834' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001130309458903' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0011279099513942' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0011255965837729' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0011233654083395' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0011212121212121' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0011191327138432' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0011171228994008' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0011151808339092' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0017941483803553' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0017385955023421' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0016902815622162' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0016479002915551' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0016104417670683' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0015770778599523' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0015471641060346' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0015201987706882' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0014957599478147' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0014735261498586' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0014531902206321' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0014574042309891' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0014173531026908' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0014014791336503' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0013867684478372' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0013730976926853' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0013603603603604' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0013484640073361' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0013373280071016' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0013268817204301' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0013170656409315' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0013078194234056' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0012990948445494' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0012908534251818' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0012830540037244' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0012756619513964' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0012686480639665' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0012619786280593' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0012556340396905' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0012495894909688' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0012438241899262' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0012383192223267' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0012330587737429' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.0012280228022802' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001223201174743' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0012174535050072' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010556334423749' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0012098867716101' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0012057947468183' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0012018592297477' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0011980703775326' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0011944231261192' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0011909068073348' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001187515420676' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0011939393939394' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0011810817250417' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0011780268070892' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.001175074867542' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0017941483803553' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0017385955023421' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0016902815622162' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0016479002915551' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0016104417670683' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0015770778599523' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0015471641060346' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0015201987706882' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0014957599478147' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0014735261498586' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0014531902206321' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0014574042309891' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0014173531026908' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0014014791336503' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0013867684478372' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0013730976926853' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0013603603603604' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0013484640073361' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0013373280071016' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0013268817204301' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0013170656409315' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0013078194234056' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0012990948445494' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0012908534251818' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0012830540037244' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0012756619513964' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0012686480639665' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0012619786280593' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0012556340396905' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0012495894909688' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0012438241899262' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0012383192223267' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0012330587737429' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.0012280228022802' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001223201174743' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0012174535050072' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010556334423749' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0012098867716101' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0012057947468183' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0012018592297477' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0011980703775326' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0011944231261192' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0011909068073348' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001187515420676' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0011939393939394' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0011810817250417' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0011780268070892' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.001175074867542' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0010208986415883' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194367237458' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181653042688' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170500076725' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0010160642570281' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151862594724' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001014399055422' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136894413339' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130463144162' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.00101246121447' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119260584377' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114351057747' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109829763866' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105652403592' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101781170483' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098183603338' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094831673779' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091701054562' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088770528185' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086021505376' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083438326561' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081005111423' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078709169618' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010076540375048' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0010074487895717' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010072542618789' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0010070696858939' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010068941744226' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010067272115708' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0010065681444992' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010064164260507' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010062715584823' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010061331256248' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.00100600060006' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010058737151248' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010057224606581' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010055633442375' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001005523336095' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0010054156512321' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010053120849934' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0010052123783561' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010051163980558' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010050238633509' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010049346163336' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010048484848485' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010047653085537' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001004684915976' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0010046072333564' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0010208986415883' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194367237458' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181653042688' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170500076725' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0010160642570281' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151862594724' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001014399055422' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136894413339' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130463144162' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.00101246121447' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119260584377' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114351057747' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109829763866' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105652403592' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101781170483' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098183603338' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094831673779' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091701054562' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088770528185' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086021505376' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083438326561' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081005111423' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078709169618' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010076540375048' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0010074487895717' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010072542618789' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0010070696858939' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010068941744226' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010067272115708' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0010065681444992' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010064164260507' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010062715584823' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010061331256248' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.00100600060006' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010058737151248' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010057224606581' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010055633442375' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001005523336095' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0010054156512321' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010053120849934' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0010052123783561' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010051163980558' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010050238633509' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010049346163336' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010048484848485' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010047653085537' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001004684915976' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0010046072333564' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.55381944444444' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.59547453703704' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.63715277777778' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.67883101851852' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.72048611111111' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.7621412037037' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.80380787037037' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.84547453703704' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.88715277777778' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.92880787037037' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.97048611111111' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1.0121527777778' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1.0538194444444' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1.0954861111111' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1.1371527777778' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='1.1788194444444' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1.2204861111111' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1.2621527777778' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1.3038194444444' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1.3454861111111' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1.3871412037037' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1.4288078703704' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1.4704861111111' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1.5121527777778' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='1.5538194444444' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='1.5954861111111' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='1.6371412037037' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='1.6788194444444' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='1.7204861111111' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='1.7621527777778' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='1.8038194444444' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='1.8454861111111' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='1.8871412037037' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='1.9288194444444' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='1.9704861111111' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2.0225694444444' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='2.0804166666667' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2.0954861111111' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='2.1371527777778' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2.1788194444444' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2.2204976851852' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2.2621527777778' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2.3038194444444' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2.3454861111111' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2.3871527777778' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2.4288194444444' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2.4704976851852' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='2.5121527777778' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.55381944444444' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.59547453703704' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.63715277777778' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.67883101851852' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.72048611111111' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.7621412037037' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.80380787037037' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.84547453703704' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.88715277777778' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.92880787037037' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.97048611111111' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1.0121527777778' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1.0538194444444' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1.0954861111111' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1.1371527777778' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='1.1788194444444' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1.2204861111111' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1.2621527777778' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1.3038194444444' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1.3454861111111' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1.3871412037037' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1.4288078703704' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1.4704861111111' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1.5121527777778' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='1.5538194444444' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='1.5954861111111' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='1.6371412037037' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='1.6788194444444' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='1.7204861111111' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='1.7621527777778' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='1.8038194444444' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='1.8454861111111' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='1.8871412037037' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='1.9288194444444' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='1.9704861111111' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2.0225694444444' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='2.0804166666667' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2.0954861111111' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='2.1371527777778' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2.1788194444444' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2.2204976851852' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2.2621527777778' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2.3038194444444' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2.3454861111111' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2.3871527777778' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2.4288194444444' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2.4704976851852' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='2.5121527777778' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.084427377220481' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.082848043693755' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.081345140781108' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.080146135615761' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.080421686746988' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.080743048489726' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.080425189707555' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.079508946049912' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.07861252446184' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.077835848421787' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.078197376267144' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.080622641509434' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.082241076331686' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.081464870575806' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.08081679389313' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.082688757977418' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.08217591275486' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.084530490600642' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.085332001775411' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.086032258064516' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.086157156088078' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.086217377216502' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.086029515938607' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.087222732491389' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.086996275605214' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.090474066013783' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.090247714724035' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.090010685970355' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.090350824083417' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.090392446633826' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.090092075713827' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.090137660708686' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.089918055308527' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.089910891089109' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.089751835535977' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.091678111587983' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.090948149631707' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.092648715824358' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.095941781749255' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.098683930942895' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.099805844118613' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.099894858019954' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.10014091936699' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.10083715766099' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.10189212121212' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.10413557302835' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.10599833685483' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.10770352453352' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.084427377220481' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.082848043693755' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.081345140781108' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.080146135615761' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.080421686746988' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.080743048489726' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.080425189707555' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.079508946049912' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.07861252446184' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.077835848421787' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.078197376267144' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.080622641509434' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.082241076331686' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.081464870575806' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.08081679389313' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.082688757977418' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.08217591275486' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.084530490600642' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.085332001775411' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.086032258064516' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.086157156088078' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.086217377216502' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.086029515938607' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.087222732491389' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.086996275605214' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.090474066013783' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.090247714724035' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.090010685970355' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.090350824083417' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.090392446633826' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.090092075713827' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.090137660708686' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.089918055308527' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.089910891089109' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.089751835535977' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.091678111587983' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.090948149631707' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.092648715824358' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.095941781749255' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.098683930942895' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.099805844118613' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.099894858019954' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.10014091936699' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.10083715766099' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.10189212121212' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.10413557302835' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.10599833685483' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.10770352453352' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0010208986415883' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194367237458' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181653042688' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170500076725' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0010160642570281' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151862594724' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001014399055422' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136894413339' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130463144162' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.00101246121447' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119260584377' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114351057747' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109829763866' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105652403592' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101781170483' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098183603338' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094831673779' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091701054562' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088770528185' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086021505376' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083438326561' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081005111423' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078709169618' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010076540375048' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0010074487895717' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010072542618789' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0010070696858939' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010068941744226' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010067272115708' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0010065681444992' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010064164260507' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010062715584823' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010061331256248' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.00100600060006' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010058737151248' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010057224606581' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010055633442375' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001005523336095' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0010054156512321' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010053120849934' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0010052123783561' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010051163980558' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010050238633509' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010049346163336' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010048484848485' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010047653085537' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001004684915976' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0010046072333564' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0010208986415883' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194367237458' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181653042688' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170500076725' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0010160642570281' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151862594724' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001014399055422' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136894413339' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130463144162' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.00101246121447' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119260584377' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114351057747' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109829763866' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105652403592' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101781170483' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098183603338' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094831673779' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091701054562' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088770528185' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086021505376' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083438326561' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081005111423' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078709169618' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010076540375048' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0010074487895717' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010072542618789' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0010070696858939' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010068941744226' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010067272115708' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0010065681444992' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010064164260507' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010062715584823' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010061331256248' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.00100600060006' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010058737151248' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010057224606581' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010055633442375' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001005523336095' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0010054156512321' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010053120849934' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0010052123783561' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010051163980558' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010050238633509' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010049346163336' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010048484848485' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010047653085537' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001004684915976' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0010046072333564' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0010417972831766' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010583101712375' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0013269754768392' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0013239501457776' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0013052208835341' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0012885389299762' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0012735820530173' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0012600993853441' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0012478799739074' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0012367630749293' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.001190816935003' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010343053173242' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001164744645799' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0011267828843106' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0011221374045802' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0011080019636721' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0011043148411569' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010733608436497' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010621393697292' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010258064516129' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010250314979683' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010243015334268' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010236127508855' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010229621125144' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0010223463687151' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010217627856366' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0010212090576816' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010206825232678' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010201816347124' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0010197044334975' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010192492781521' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010188146754468' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010183993768744' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.00103600360036' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010352422907489' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010057224606581' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010055633442375' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.00101104667219' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0010054156512321' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010159362549801' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0010208495134245' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010255819902788' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010251193167546' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010789538613373' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010775757575758' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010762449368597' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0010749586556165' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0010737157337019' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0010417972831766' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010583101712375' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0013269754768392' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0013239501457776' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0013052208835341' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0012885389299762' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0012735820530173' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0012600993853441' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0012478799739074' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0012367630749293' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.001190816935003' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010343053173242' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.001164744645799' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0011267828843106' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0011221374045802' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0011080019636721' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0011043148411569' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010733608436497' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010621393697292' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010258064516129' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010250314979683' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010243015334268' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010236127508855' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010229621125144' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0010223463687151' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010217627856366' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0010212090576816' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010206825232678' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010201816347124' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0010197044334975' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010192492781521' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010188146754468' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010183993768744' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.00103600360036' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010352422907489' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010057224606581' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010055633442375' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.00101104667219' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0010054156512321' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010159362549801' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0010208495134245' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010255819902788' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010251193167546' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010789538613373' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010775757575758' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010762449368597' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0010749586556165' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0010737157337019' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0014179728317659' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0014081711986628' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0013814713896458' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0013580501611226' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0013373493975904' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001318911448921' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0013023801638613' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0012874782680119' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0012739726027397' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0012616855038692' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0012504472271914' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0012401372212693' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0012306425041186' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0012218700475436' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0012137404580153' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0012061855670103' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001199146514936' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0011925722145805' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0011864181091877' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0011806451612903' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0011752204857779' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0011701107339873' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0011652892561983' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0011607347876005' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0011564245810056' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0011523394994559' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.001148463403771' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0011447776628749' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0011412714429869' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0011379310344828' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0011347449470645' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0011317027281279' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0011287956381211' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.0011260126012601' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0011233480176211' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0011487839771102' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0011502102944122' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001160176746755' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0011733008394259' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0011806108897742' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0011772208641081' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0011739575338961' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0011708113539312' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0011677769553417' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0011648484848485' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0011620204908268' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0011592871431851' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0011566459341166' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0014179728317659' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0014081711986628' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0013814713896458' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0013580501611226' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0013373493975904' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001318911448921' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0013023801638613' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0012874782680119' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0012739726027397' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0012616855038692' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0012504472271914' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0012401372212693' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0012306425041186' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0012218700475436' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0012137404580153' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0012061855670103' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.001199146514936' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0011925722145805' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0011864181091877' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0011806451612903' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0011752204857779' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0011701107339873' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0011652892561983' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0011607347876005' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0011564245810056' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0011523394994559' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.001148463403771' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0011447776628749' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0011412714429869' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0011379310344828' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0011347449470645' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0011317027281279' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0011287956381211' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.0011260126012601' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0011233480176211' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0011487839771102' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0011502102944122' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001160176746755' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0011733008394259' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0011806108897742' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0011772208641081' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0011739575338961' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0011708113539312' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0011677769553417' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0011648484848485' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0011620204908268' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0011592871431851' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0011566459341166' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.001' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.011574712643678' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.011301463585298' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.011063578564941' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.010854904434707' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.010879518072289' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.010931813694969' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.010776958631514' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.010623677257731' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.010484670580561' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.010358372066942' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.010266547406082' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.010228130360206' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.010203734211971' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.010107237189646' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.010017811704835' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0099445262641139' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0098667614983404' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0098491517652453' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0097971593430981' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0098172043010753' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.009769368121553' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0097566525447756' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0097052341597796' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0097026406429392' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0096554934823091' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0096543344214726' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0096108774187163' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0095694588073078' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0095502859064918' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0096042692939245' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0095659287776708' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0095544057698338' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0095189114928641' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.0094908490849085' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0094581497797357' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0094177396280401' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0092337494714823' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0092573874620271' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0093617655023017' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0094196547144754' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0094232034234901' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0093960092095165' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0093948756593821' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.009413520848754' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0094169696969697' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0094203002144389' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0094234789249055' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0094312370421562' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.011574712643678' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.011301463585298' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.011063578564941' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.010854904434707' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.010879518072289' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.010931813694969' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.010776958631514' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.010623677257731' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.010484670580561' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.010358372066942' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.010266547406082' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.010228130360206' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.010203734211971' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.010107237189646' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.010017811704835' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0099445262641139' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0098667614983404' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0098491517652453' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0097971593430981' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0098172043010753' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.009769368121553' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0097566525447756' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0097052341597796' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0097026406429392' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0096554934823091' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0096543344214726' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0096108774187163' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0095694588073078' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0095502859064918' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0096042692939245' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0095659287776708' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0095544057698338' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0095189114928641' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.0094908490849085' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0094581497797357' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0094177396280401' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0092337494714823' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0092573874620271' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0093617655023017' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0094196547144754' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0094232034234901' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0093960092095165' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0093948756593821' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.009413520848754' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0094169696969697' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0094203002144389' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0094234789249055' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0094312370421562' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0021703239289446' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0020884565297673' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0020172570390554' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0019548004296602' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0018995983935743' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001850430530456' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.00180634710363' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0017666087146984' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0017305936073059' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0016978280103179' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0016678592725104' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0016403659233848' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0016150466776496' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0015916534601162' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0015699745547074' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0015498281786942' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0015310573731626' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0015135259055479' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001497114957834' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0014817204301075' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0014672546287412' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0014536286239662' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0014407713498623' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0014286261002679' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0014171322160149' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0014062386652158' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0013959024100559' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0013860737676663' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001376723847965' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.001367816091954' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0013593198588386' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0013512072750078' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0013434550349895' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.0013360336033603' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0013289280469897' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0013204577968526' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0013115472772993' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0013093068213201' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.001357432981316' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0013505976095618' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0013440169715039' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0013376822716807' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0013315749811605' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0013256846780163' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.00132' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0013145103645461' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0013092044544181' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0013040774015204' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0021703239289446' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0020884565297673' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0020172570390554' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0019548004296602' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0018995983935743' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.001850430530456' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.00180634710363' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0017666087146984' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0017305936073059' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0016978280103179' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0016678592725104' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0016403659233848' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0016150466776496' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0015916534601162' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0015699745547074' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0015498281786942' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0015310573731626' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0015135259055479' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001497114957834' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0014817204301075' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0014672546287412' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0014536286239662' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0014407713498623' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0014286261002679' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0014171322160149' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0014062386652158' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0013959024100559' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0013860737676663' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001376723847965' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.001367816091954' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0013593198588386' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0013512072750078' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0013434550349895' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.0013360336033603' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0013289280469897' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0013204577968526' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0013115472772993' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0013093068213201' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.001357432981316' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0013505976095618' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0013440169715039' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0013376822716807' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0013315749811605' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0013256846780163' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.00132' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0013145103645461' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0013092044544181' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0013040774015204' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0010208986415883' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194367237458' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181653042688' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170500076725' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0010160642570281' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151862594724' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001014399055422' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136894413339' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130463144162' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.00101246121447' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119260584377' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114351057747' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109829763866' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105652403592' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101781170483' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098183603338' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094831673779' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091701054562' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088770528185' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086021505376' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083438326561' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081005111423' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078709169618' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010076540375048' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0010074487895717' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010072542618789' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0010070696858939' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010068941744226' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010067272115708' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0010065681444992' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010064164260507' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010062715584823' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010061331256248' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.00100600060006' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010058737151248' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010057224606581' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010055633442375' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001005523336095' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0010054156512321' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010053120849934' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0010052123783561' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010051163980558' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010050238633509' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010049346163336' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010048484848485' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010047653085537' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001004684915976' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0010046072333564' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0010208986415883' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194367237458' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181653042688' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170500076725' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0010160642570281' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151862594724' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001014399055422' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136894413339' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130463144162' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.00101246121447' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119260584377' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114351057747' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109829763866' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105652403592' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101781170483' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098183603338' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094831673779' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091701054562' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088770528185' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086021505376' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083438326561' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081005111423' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078709169618' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010076540375048' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0010074487895717' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010072542618789' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0010070696858939' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010068941744226' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010067272115708' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0010065681444992' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010064164260507' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010062715584823' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010061331256248' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.00100600060006' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010058737151248' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010057224606581' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010055633442375' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001005523336095' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0010054156512321' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010053120849934' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0010052123783561' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010051163980558' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010050238633509' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010049346163336' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010048484848485' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010047653085537' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001004684915976' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0010046072333564' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.057300940438871' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.05732762541546' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.05705812897366' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.057009275204174' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.060100401606426' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.06001380430986' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.060266512116805' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.060357417623787' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.060204174820613' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.06032784209149' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.060427549194991' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.060599771297885' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.060747391543108' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.060619651347068' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.060552162849873' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.060685812469318' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.060516358463727' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.060376432828978' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.060360852197071' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.060827956989247' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.060917062303398' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.060976184497242' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.060952774498229' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.060877535399923' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.060821229050279' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.060949220166848' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.061007493867047' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.060965529127887' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.062681802892701' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.062543513957307' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.062443695861405' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.062542803386642' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.062453918760618' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.062518151815182' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.062491923641703' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.062052932761087' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.060633486881634' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.06253548743441' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.063502030869212' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.064468791500664' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.065263412752605' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.066060117677155' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.066882943983924' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.067903528250679' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.068694545454545' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.069448892065761' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.070154044722208' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.070983874683253' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.057300940438871' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.05732762541546' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.05705812897366' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.057009275204174' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.060100401606426' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.06001380430986' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.060266512116805' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.060357417623787' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.060204174820613' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.06032784209149' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.060427549194991' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.060599771297885' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.060747391543108' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.060619651347068' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.060552162849873' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.060685812469318' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.060516358463727' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.060376432828978' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.060360852197071' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.060827956989247' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.060917062303398' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.060976184497242' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.060952774498229' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.060877535399923' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.060821229050279' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.060949220166848' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.061007493867047' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.060965529127887' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.062681802892701' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.062543513957307' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.062443695861405' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.062542803386642' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.062453918760618' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.062518151815182' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.062491923641703' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.062052932761087' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.060633486881634' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.06253548743441' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.063502030869212' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.064468791500664' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.065263412752605' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.066060117677155' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.066882943983924' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.067903528250679' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.068694545454545' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.069448892065761' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.070154044722208' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.070983874683253' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0010208986415883' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194367237458' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181653042688' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170500076725' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0010160642570281' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151862594724' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001014399055422' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136894413339' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130463144162' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.00101246121447' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119260584377' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114351057747' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109829763866' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105652403592' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101781170483' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098183603338' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094831673779' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091701054562' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088770528185' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086021505376' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083438326561' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081005111423' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078709169618' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010076540375048' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0010074487895717' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010072542618789' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0010070696858939' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010068941744226' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010067272115708' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0010065681444992' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010064164260507' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010062715584823' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010061331256248' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.00100600060006' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010058737151248' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010057224606581' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010055633442375' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001005523336095' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0010054156512321' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010053120849934' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0010052123783561' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010051163980558' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010050238633509' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010049346163336' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010048484848485' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010047653085537' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001004684915976' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0010046072333564' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0010208986415883' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194367237458' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181653042688' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170500076725' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0010160642570281' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151862594724' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001014399055422' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136894413339' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130463144162' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.00101246121447' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119260584377' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114351057747' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109829763866' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105652403592' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101781170483' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098183603338' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094831673779' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091701054562' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088770528185' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086021505376' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083438326561' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081005111423' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078709169618' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010076540375048' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0010074487895717' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010072542618789' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0010070696858939' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010068941744226' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010067272115708' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0010065681444992' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010064164260507' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010062715584823' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010061331256248' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.00100600060006' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010058737151248' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010057224606581' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010055633442375' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001005523336095' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0010054156512321' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010053120849934' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0010052123783561' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010051163980558' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010050238633509' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010049346163336' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010048484848485' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010047653085537' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001004684915976' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0010046072333564' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.36570219435737' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.35952980621586' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.35311625794732' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.34863260643467' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.5039718875502' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.49065056416954' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.47927902489597' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.46937054579803' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.46038682322244' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.45264425724931' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.44512641621944' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.43858719268153' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.4325540911587' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.42685314315901' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.4213358778626' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.41660137457045' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.4119435751541' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.40760247592847' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.40387616511318' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.40037204301075' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.39677301437642' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.39344546330873' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.39031129476584' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.38726100267891' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.38446368715084' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.38181247733043' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.37904438348804' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.37662219924164' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.48899865455769' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.48344991789819' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.47815110683349' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.47375634995296' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.46947880085128' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.46545244524452' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.46149339207048' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.45483690987124' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.44270171573536' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.45676912455123' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.45944029244517' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.46201460823373' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.46438043585908' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.46678664620107' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.46898794272796' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.47141204046385' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.4734896969697' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.47551512985466' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.47744190001452' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.4794796129924' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.36570219435737' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.35952980621586' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.35311625794732' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.34863260643467' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.5039718875502' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.49065056416954' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.47927902489597' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.46937054579803' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.46038682322244' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.45264425724931' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.44512641621944' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.43858719268153' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.4325540911587' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.42685314315901' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.4213358778626' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.41660137457045' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.4119435751541' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.40760247592847' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.40387616511318' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.40037204301075' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.39677301437642' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.39344546330873' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.39031129476584' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.38726100267891' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.38446368715084' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.38181247733043' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.37904438348804' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.37662219924164' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.48899865455769' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.48344991789819' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.47815110683349' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.47375634995296' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.46947880085128' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.46545244524452' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.46149339207048' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.45483690987124' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.44270171573536' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.45676912455123' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.45944029244517' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.46201460823373' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.46438043585908' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.46678664620107' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.46898794272796' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.47141204046385' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.4734896969697' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.47551512985466' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.47744190001452' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.4794796129924' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='1605' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='1586' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='1570' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='1550' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='1531' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='1513' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='1496' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='1477' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='1457' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='1436' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='1418' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1399' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1380' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1359' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1341' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='1323' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1303' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1284' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1262' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1242' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1223' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1204' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1183' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1163' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='1143' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='1123' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='1104' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='1085' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='1068' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='1051' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='1036' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='1017' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='997' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='978' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='960' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='945' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='942' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='920' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='898' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='876' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='854' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='828' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='805' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='781' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='758' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='734' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='710' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='683' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='1605' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='1586' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='1570' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='1550' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='1531' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='1513' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='1496' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='1477' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='1457' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='1436' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='1418' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1399' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1380' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1359' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1341' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='1323' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1303' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1284' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1262' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1242' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1223' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1204' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1183' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1163' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='1143' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='1123' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='1104' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='1085' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='1068' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='1051' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='1036' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='1017' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='997' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='978' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='960' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='945' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='942' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='920' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='898' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='876' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='854' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='828' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='805' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='781' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='758' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='734' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='710' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='683' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2048' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='2048' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='2048' color='ff6600' showName='0'/>
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
<set name='08-26 00:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2048' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='2048' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2048' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='2048' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.21537826541275' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.21717524150129' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.21872933696639' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.22009259859167' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.22130522088353' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.22344832875215' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.22435814770551' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.22517829128393' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.2259184605349' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.2265978267642' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.22723732856291' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.22783819325329' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.22840252608457' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.22888166930798' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.22932569974555' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.22977761413844' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.23044523470839' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.23110545621275' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.23171460275189' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.2322688172043' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.23279167118624' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.23328215700411' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.23373514364423' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.23418790662074' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.23459404096834' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.23501523394995' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.235381296439' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.2357259565667' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.23605549949546' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.23682922824302' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.23711806223933' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.23740012543117' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.23766505161025' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.23792169216922' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.23816299559471' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.23596995708155' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.23058252664842' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.2317152720243' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.23213457893312' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.23250066401062' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.23283095214515' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.23313609618828' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.23343406179352' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.23372144090797' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.23400848484848' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.2342952108649' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.2345618010691' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.23484012900253' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.21537826541275' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.21717524150129' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.21872933696639' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.22009259859167' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.22130522088353' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.22344832875215' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.22435814770551' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.22517829128393' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.2259184605349' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.2265978267642' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.22723732856291' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.22783819325329' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.22840252608457' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.22888166930798' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.22932569974555' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.22977761413844' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.23044523470839' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.23110545621275' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.23171460275189' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.2322688172043' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.23279167118624' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.23328215700411' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.23373514364423' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.23418790662074' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.23459404096834' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.23501523394995' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.235381296439' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.2357259565667' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.23605549949546' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.23682922824302' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.23711806223933' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.23740012543117' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.23766505161025' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.23792169216922' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.23816299559471' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.23596995708155' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.23058252664842' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.2317152720243' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.23213457893312' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.23250066401062' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.23283095214515' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.23313609618828' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.23343406179352' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.23372144090797' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.23400848484848' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.2342952108649' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.2345618010691' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.23484012900253' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0010835945663532' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010777468949834' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010726612170754' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.00106820003069' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0010642570281124' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010607450378897' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010575962216879' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010547577653356' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010521852576647' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010498448578798' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010477042337507' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0011143510577473' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0011537616694124' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0011479133650291' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0011424936386768' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0011963672066765' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0011896633475581' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0012384227418615' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001248557478917' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0012408602150538' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0012336273143706' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0012268143119831' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0012203856749311' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0012449292001531' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0012383612662942' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0013191875226696' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0013110661793297' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001303343674595' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0012959973091154' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0012889983579639' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0012823227462303' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0012759485732204' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0012698575274917' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.0012640264026403' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0012584434654919' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001343347639485' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0013783074081492' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0013755868544601' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0015848903330626' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0017543160690571' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0018027062668425' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0017879253005884' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0017937704094449' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0018783617073773' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0019309090909091' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0021055515844651' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0022274479857204' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0023360976733472' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0010835945663532' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010777468949834' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010726612170754' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.00106820003069' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0010642570281124' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010607450378897' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0010575962216879' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010547577653356' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010521852576647' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0010498448578798' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010477042337507' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0011143510577473' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0011537616694124' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0011479133650291' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0011424936386768' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0011963672066765' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0011896633475581' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0012384227418615' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.001248557478917' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0012408602150538' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0012336273143706' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0012268143119831' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0012203856749311' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0012449292001531' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0012383612662942' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0013191875226696' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0013110661793297' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001303343674595' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0012959973091154' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0012889983579639' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0012823227462303' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0012759485732204' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0012698575274917' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.0012640264026403' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0012584434654919' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001343347639485' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0013783074081492' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0013755868544601' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0015848903330626' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0017543160690571' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0018027062668425' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0017879253005884' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0017937704094449' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0018783617073773' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0019309090909091' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0021055515844651' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0022274479857204' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0023360976733472' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.99498119122257' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='1.0014188808334' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='1.0078474114441' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='1.013486556069' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='1.0185702811245' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='1.0246472991238' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='1.0285533269018' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='1.0320743610453' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='1.0352511415525' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='1.0381686999215' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='1.0411806797853' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1.0457061177816' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1.0494014277869' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1.0513259376651' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1.0531094147583' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='1.0564948453608' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1.0584163110479' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1.0618248509858' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1.0640479360852' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1.0658838709677' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1.0673931363633' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1.0688057416423' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1.0700432900433' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1.0721469575201' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='1.0732364990689' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='1.0768661588683' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='1.0777877538901' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='1.0786487418132' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='1.0795021863438' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='1.0809852216749' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='1.0817196021816' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='1.0824898087175' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='1.0831651834725' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='1.0838643864386' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='1.0844757709251' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='1.0756680972818' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='1.0509713599039' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='1.0561723280862' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='1.0594042783645' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='1.0621035856574' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='1.0636848387551' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='1.0645945254541' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='1.0655212258227' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='1.0665926474217' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='1.0680290909091' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='1.0703264236359' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='1.0724053764096' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='1.0742455655379' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.99498119122257' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='1.0014188808334' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='1.0078474114441' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='1.013486556069' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='1.0185702811245' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='1.0246472991238' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='1.0285533269018' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='1.0320743610453' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='1.0352511415525' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='1.0381686999215' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='1.0411806797853' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='1.0457061177816' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='1.0494014277869' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='1.0513259376651' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='1.0531094147583' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='1.0564948453608' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='1.0584163110479' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='1.0618248509858' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='1.0640479360852' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='1.0658838709677' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='1.0673931363633' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='1.0688057416423' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='1.0700432900433' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='1.0721469575201' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='1.0732364990689' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='1.0768661588683' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='1.0777877538901' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='1.0786487418132' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='1.0795021863438' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='1.0809852216749' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='1.0817196021816' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='1.0824898087175' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='1.0831651834725' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='1.0838643864386' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='1.0844757709251' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='1.0756680972818' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='1.0509713599039' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='1.0561723280862' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='1.0594042783645' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='1.0621035856574' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='1.0636848387551' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='1.0645945254541' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='1.0655212258227' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='1.0665926474217' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='1.0680290909091' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='1.0703264236359' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='1.0724053764096' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='1.0742455655379' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.12049843260188' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.11925302726972' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.11816621253406' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.11721285229578' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.11642168674699' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.11685597351516' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.11679720370344' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.11610082273542' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.11544227005871' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.11485811661205' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.11513237924866' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.11743224699828' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.11894618341571' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.11832699418912' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.11778371501272' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.11954688267059' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.11912233285917' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.12136680421825' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.12214513981358' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.1227376344086' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.12285333210957' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.12294509473548' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.12284179456907' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.12402334481439' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.12389013035382' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.1272096481683' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.12703836011566' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.12686004825922' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.12671140262361' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.12676026272578' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.1265951235162' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.12661931640013' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.12646535090678' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.12646654665467' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.12633920704846' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.12761516452074' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.12594158488551' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.12649019607843' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.12908556728947' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.13123107569721' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.13191409479231' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.1316881555385' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.13159030394373' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.13185615593388' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.13253454545455' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.13436669049321' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.13589278569789' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.13720363971435' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.12049843260188' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.11925302726972' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.11816621253406' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.11721285229578' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.11642168674699' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.11685597351516' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.11679720370344' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.11610082273542' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.11544227005871' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.11485811661205' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.11513237924866' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.11743224699828' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.11894618341571' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.11832699418912' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.11778371501272' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.11954688267059' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.11912233285917' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.12136680421825' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.12214513981358' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.1227376344086' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.12285333210957' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.12294509473548' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.12284179456907' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.12402334481439' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.12389013035382' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.1272096481683' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.12703836011566' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.12686004825922' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.12671140262361' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.12676026272578' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.1265951235162' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.12661931640013' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.12646535090678' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.12646654665467' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.12633920704846' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.12761516452074' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.12594158488551' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.12649019607843' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.12908556728947' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.13123107569721' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.13191409479231' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.1316881555385' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.13159030394373' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.13185615593388' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.13253454545455' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.13436669049321' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.13589278569789' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.13720363971435' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0170710553814' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.017598962078952' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.017930063578565' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.018339857802936' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.018670682730924' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.018874227399049' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.019099612665409' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.019371230270093' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.019630136986301' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.019853817493053' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.020033989266547' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.020245283018868' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.02045085118067' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.020609086106709' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.020735368956743' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.020852724594993' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.020981033665244' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.021100871160018' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.021221926320462' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.021404301075269' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.021492453003363' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.02159959983475' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.021692640692641' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.021788365862993' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.021871508379888' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.021957562568009' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.021989897418858' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.022047914512237' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.022096535486041' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.022096880131363' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.022090792428617' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.022141423643775' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.022196082159351' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.022242124212421' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.02228046989721' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.022190271816881' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.021656697153793' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.023143054404861' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.023675331708638' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.024166002656042' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.024627711088292' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.025077769250448' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.025521477015825' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.026008635578584' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.026415757575758' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.026823207052657' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.027207419969923' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.027583736466252' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0170710553814' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.017598962078952' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.017930063578565' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.018339857802936' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.018670682730924' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.018874227399049' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.019099612665409' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.019371230270093' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.019630136986301' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.019853817493053' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.020033989266547' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.020245283018868' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.02045085118067' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.020609086106709' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.020735368956743' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.020852724594993' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.020981033665244' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.021100871160018' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.021221926320462' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.021404301075269' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.021492453003363' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.02159959983475' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.021692640692641' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.021788365862993' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.021871508379888' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.021957562568009' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.021989897418858' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.022047914512237' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.022096535486041' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.022096880131363' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.022090792428617' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.022141423643775' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.022196082159351' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.022242124212421' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.02228046989721' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.022190271816881' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.021656697153793' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.023143054404861' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.023675331708638' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.024166002656042' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.024627711088292' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.025077769250448' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.025521477015825' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.026008635578584' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.026415757575758' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.026823207052657' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.027207419969923' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.027583736466252' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0010208986415883' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194367237458' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181653042688' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170500076725' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0010160642570281' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151862594724' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001014399055422' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136894413339' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130463144162' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.00101246121447' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119260584377' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114351057747' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109829763866' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105652403592' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101781170483' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098183603338' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094831673779' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091701054562' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088770528185' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086021505376' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083438326561' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081005111423' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078709169618' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010076540375048' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0010074487895717' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010072542618789' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0010070696858939' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010068941744226' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010067272115708' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0010065681444992' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010064164260507' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010062715584823' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010061331256248' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.00100600060006' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010058737151248' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010057224606581' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010055633442375' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001005523336095' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0010054156512321' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010053120849934' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0010052123783561' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010051163980558' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010050238633509' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010049346163336' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010048484848485' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010047653085537' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001004684915976' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0010046072333564' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0010208986415883' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0010194367237458' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0010181653042688' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0010170500076725' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0010160642570281' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0010151862594724' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.001014399055422' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0010136894413339' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0010130463144162' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.00101246121447' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0010119260584377' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0010114351057747' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0010109829763866' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0010105652403592' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0010101781170483' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0010098183603338' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0010094831673779' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0010091701054562' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0010088770528185' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0010086021505376' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0010083438326561' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0010081005111423' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0010078709169618' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0010076540375048' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.0010074487895717' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010072542618789' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0010070696858939' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010068941744226' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010067272115708' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.0010065681444992' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010064164260507' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010062715584823' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010061331256248' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.00100600060006' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010058737151248' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010057224606581' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0010055633442375' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001005523336095' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0010054156512321' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010053120849934' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0010052123783561' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010051163980558' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010050238633509' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010049346163336' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010048484848485' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010047653085537' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001004684915976' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0010046072333564' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0016478578892372' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0016414118836129' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0016357856494096' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0016308502838826' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0016104417670683' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0016226366383696' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0016479574939884' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0016434037426933' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0016131767775603' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0016105995090281' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0016559332140727' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0016975414522584' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0016919275123558' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0016867406233492' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0017124681933842' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0017756504663721' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0017681365576102' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0017794589637781' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0017723035952064' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0017569892473118' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0017759764370166' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0017614480473718' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0017477371113735' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0017271335629545' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.001707635009311' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0017036634022488' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0017281776470671' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001730782488797' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0017265388496468' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.001735632183908' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0017314725697786' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0017588585763562' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0017543744518519' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.0017620762076208' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0017812041116006' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0017725321888412' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0017510514720609' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0017566970450152' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0017852694286488' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0018127490039841' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0018287681586231' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0018237400869788' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0018188897261994' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0018043424623736' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001809696969697' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0017958065284727' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0017823809679973' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0017786224372264' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='0.0016478578892372' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='0.0016414118836129' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='0.0016357856494096' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='0.0016308502838826' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='0.0016104417670683' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='0.0016226366383696' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='0.0016479574939884' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='0.0016434037426933' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='0.0016131767775603' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='0.0016105995090281' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='0.0016559332140727' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='0.0016975414522584' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='0.0016919275123558' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='0.0016867406233492' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='0.0017124681933842' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='0.0017756504663721' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='0.0017681365576102' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='0.0017794589637781' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='0.0017723035952064' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='0.0017569892473118' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='0.0017759764370166' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='0.0017614480473718' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='0.0017477371113735' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='0.0017271335629545' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='0.001707635009311' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0017036634022488' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='0.0017281776470671' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001730782488797' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0017265388496468' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='0.001735632183908' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0017314725697786' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0017588585763562' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0017543744518519' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='0.0017620762076208' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0017812041116006' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0017725321888412' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='0.0017510514720609' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0017566970450152' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='0.0017852694286488' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0018127490039841' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0018287681586231' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0018237400869788' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0018188897261994' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0018043424623736' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001809696969697' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0017958065284727' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0017823809679973' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='0.0017786224372264' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='163.73506792059' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='165.34016210228' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='164.85204359673' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='166.19358578711' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='166.95693172691' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='166.3804461723' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='166.37538337485' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='167.38101822065' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='168.4799086758' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='169.29630275767' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='169.96738223017' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='171.56344196684' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='173.67205930807' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='174.18172213418' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='174.35341475827' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='175.32729504173' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='175.76752015173' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='176.9455479138' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='178.04891256103' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='179.25504516129' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='179.46700431376' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='179.78952441899' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='180.14270759543' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='180.88211251435' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='181.18703165736' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='182.6861661226' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='182.30647795318' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='182.35173388487' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='182.3162193071' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='181.64097865353' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='180.84252807186' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='180.88351834431' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='181.04913860251' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='181.16280828083' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='181.14430543319' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='180.19871244635' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='176.39859692458' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='178.50884838442' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='179.9929596534' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='181.29958565737' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='182.07401577266' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='182.58357124584' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='183.1239889475' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='184.15492721441' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='184.83146666667' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='186.19161305695' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='187.70578259179' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='188.83612531675' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='163.73506792059' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='165.34016210228' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='164.85204359673' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='166.19358578711' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='166.95693172691' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='166.3804461723' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='166.37538337485' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='167.38101822065' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='168.4799086758' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='169.29630275767' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='169.96738223017' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='171.56344196684' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='173.67205930807' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='174.18172213418' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='174.35341475827' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='175.32729504173' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='175.76752015173' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='176.9455479138' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='178.04891256103' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='179.25504516129' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='179.46700431376' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='179.78952441899' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='180.14270759543' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='180.88211251435' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='181.18703165736' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='182.6861661226' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='182.30647795318' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='182.35173388487' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='182.3162193071' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='181.64097865353' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='180.84252807186' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='180.88351834431' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='181.04913860251' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='181.16280828083' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='181.14430543319' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='180.19871244635' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='176.39859692458' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='178.50884838442' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='179.9929596534' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='181.29958565737' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='182.07401577266' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='182.58357124584' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='183.1239889475' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='184.15492721441' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='184.83146666667' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='186.19161305695' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='187.70578259179' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='188.83612531675' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='259.05515151515' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='258.06169216117' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='257.13513169846' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='256.04758657141' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='255.31037751004' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='301.28396786587' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='298.06486774468' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='295.17173404153' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='292.54553163731' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='290.16351605627' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='288.63713774597' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='290.93978273299' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='292.33132344865' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='290.40315900687' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='288.62725699746' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='289.29127147766' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='331.43849217639' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='374.81121503897' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='415.92126941855' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='456.38700215054' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='494.02016704353' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='530.88778361915' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='566.87932310114' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='603.62957520092' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='638.36766480447' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='678.29981864345' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='711.7671033376' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='744.7256325405' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='777.35761183989' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='856.45903448276' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='886.85513634905' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='917.0208466604' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='946.75520242381' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='976.3600660066' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='1005.5496035242' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='1032.8657339056' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='1094.1569419409' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='1092.1278431373' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='1125.3003141078' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='1158.2548313413' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='1188.0723061126' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='1216.384614991' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='1244.8345189651' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='1274.5792450037' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='1304.6289406061' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='1336.8408577555' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='1370.5534900282' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='1401.5463487676' color='ff6600' showName='0'/>
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
<set name='08-25 00:00' value='259.05515151515' color='ff6600' showName='0'/>
<set name='08-25 01:00' value='258.06169216117' color='ff6600' showName='0'/>
<set name='08-25 02:00' value='257.13513169846' color='ff6600' showName='0'/>
<set name='08-25 03:00' value='256.04758657141' color='ff6600' showName='0'/>
<set name='08-25 04:00' value='255.31037751004' color='ff6600' showName='0'/>
<set name='08-25 05:00' value='301.28396786587' color='ff6600' showName='0'/>
<set name='08-25 06:00' value='298.06486774468' color='ff6600' showName='0'/>
<set name='08-25 07:00' value='295.17173404153' color='ff6600' showName='0'/>
<set name='08-25 08:00' value='292.54553163731' color='ff6600' showName='0'/>
<set name='08-25 09:00' value='290.16351605627' color='ff6600' showName='0'/>
<set name='08-25 10:00' value='288.63713774597' color='ff6600' showName='0'/>
<set name='08-25 11:00' value='290.93978273299' color='ff6600' showName='0'/>
<set name='08-25 12:00' value='292.33132344865' color='ff6600' showName='0'/>
<set name='08-25 13:00' value='290.40315900687' color='ff6600' showName='0'/>
<set name='08-25 14:00' value='288.62725699746' color='ff6600' showName='0'/>
<set name='08-25 15:00' value='289.29127147766' color='ff6600' showName='0'/>
<set name='08-25 16:00' value='331.43849217639' color='ff6600' showName='0'/>
<set name='08-25 17:00' value='374.81121503897' color='ff6600' showName='0'/>
<set name='08-25 18:00' value='415.92126941855' color='ff6600' showName='0'/>
<set name='08-25 19:00' value='456.38700215054' color='ff6600' showName='0'/>
<set name='08-25 20:00' value='494.02016704353' color='ff6600' showName='0'/>
<set name='08-25 21:00' value='530.88778361915' color='ff6600' showName='0'/>
<set name='08-25 22:00' value='566.87932310114' color='ff6600' showName='0'/>
<set name='08-25 23:00' value='603.62957520092' color='ff6600' showName='0'/>
<set name='08-26 00:00' value='638.36766480447' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='678.29981864345' color='ff6600' showName='0'/>
<set name='08-26 02:00' value='711.7671033376' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='744.7256325405' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='777.35761183989' color='ff6600' showName='0'/>
<set name='08-26 05:00' value='856.45903448276' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='886.85513634905' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='917.0208466604' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='946.75520242381' color='ff6600' showName='0'/>
<set name='08-26 09:00' value='976.3600660066' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='1005.5496035242' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='1032.8657339056' color='ff6600' showName='0'/>
<set name='08-26 12:38' value='1094.1569419409' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='1092.1278431373' color='ff6600' showName='0'/>
<set name='08-26 14:00' value='1125.3003141078' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='1158.2548313413' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='1188.0723061126' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='1216.384614991' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='1244.8345189651' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='1274.5792450037' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='1304.6289406061' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='1336.8408577555' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='1370.5534900282' color='ff6600' showName='0'/>
<set name='08-26 23:00' value='1401.5463487676' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr></tr></div></table></body></html>