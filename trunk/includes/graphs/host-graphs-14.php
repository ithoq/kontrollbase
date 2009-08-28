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
<body><table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder"><tr><td colspan='3'><div id='content'><h1>Date range: start 2009-08-21 -> end 2009-08-28</h1></td></tr><tr><td colspan="3">

<div id="content"><table cellpadding="0" cellspacing="1" border="0" class="tableborder"><form action="http://demo01.kontrollbase.com/index.php/main/graphs" method="post" name="graphform"><input type="hidden" name="server_list_id" value="14" /><tr><th>Start date</th><th>End Date</th><th>&nbsp;</th></tr><tr><td class='td'><input type="text" name="sday" value="2009-08-21" id="sday" maxlength="10" size="15" style="width:50%"  />
<a href="#"onClick="cal.select(document.forms['graphform'].sday,'anchor1','yyyy-MM-dd'); return false;" NAME="anchor1" ID="anchor1"><img src='http://demo01.kontrollbase.com/includes/images/icon_calendar.gif' height='20' width='20' border='0'></a></td><td class='td'><input type="text" name="eday" value="2009-08-28" id="eday" maxlength="10" size="15" style="width:50%"  /> 
<a href="#"onClick="cal.select(document.forms['graphform'].eday,'anchor1','yyyy-MM-dd'); return false;" NAME="anchor1" ID="anchor1"><img src='http://demo01.kontrollbase.com/includes/images/icon_calendar.gif' height='20' width='20' border='0'></a></td><td><input type="submit" name="submit" value="Submit"  /></td></tr></table></td></tr><table><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Query Rate' xAxisName='' yAxisName='Q/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='12.4823' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='12.482' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='12.4814' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='12.4813' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='12.4805' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='12.4916' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='12.4914' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='12.4917' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='12.4915' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='12.492' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='12.4919' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='12.494' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='12.4933' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='12.493' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='12.4961' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='12.4964' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='12.4963' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='12.4968' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='12.4966' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='12.497' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='12.4972' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='12.497' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='12.4952' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='12.4935' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='12.4946' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='12.4946' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='12.4941' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='12.4943' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='12.4991' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='12.5038' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='12.5036' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='12.503' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='12.503' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='12.5031' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='12.504' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='12.5042' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='12.504' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='12.5042' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='12.5044' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='12.5044' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='12.5047' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='12.505' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='12.5057' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='12.5059' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Query Rate' xAxisName='' yAxisName='Q/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='12.4823' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='12.482' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='12.4814' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='12.4813' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='12.4805' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='12.4916' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='12.4914' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='12.4917' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='12.4915' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='12.492' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='12.4919' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='12.494' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='12.4933' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='12.493' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='12.4961' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='12.4964' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='12.4963' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='12.4968' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='12.4966' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='12.497' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='12.4972' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='12.497' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='12.4952' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='12.4935' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='12.4946' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='12.4946' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='12.4941' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='12.4943' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='12.4991' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='12.5038' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='12.5036' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='12.503' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='12.503' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='12.5031' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='12.504' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='12.5042' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='12.504' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='12.5042' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='12.5044' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='12.5044' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='12.5047' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='12.505' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='12.5057' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='12.5059' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Connections' xAxisName='' yAxisName='connections' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Connections' xAxisName='' yAxisName='connections' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 1 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.111' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.101' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.161' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.151' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.161' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.131' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.161' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.101' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.161' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.231' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.151' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.151' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.161' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.231' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.081' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.391' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.161' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.161' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.081' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.081' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.081' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.151' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.231' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.151' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.071' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.311' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.081' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.151' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.161' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.081' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.151' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.081' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.151' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 1 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.111' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.101' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.161' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.151' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.161' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.131' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.161' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.101' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.161' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.231' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.151' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.151' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.161' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.231' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.081' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.391' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.161' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.161' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.081' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.081' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.081' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.151' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.231' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.151' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.071' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.311' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.081' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.151' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.161' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.081' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.151' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.081' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.151' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 5 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.091' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.061' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.031' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.041' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.111' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.061' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.061' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.031' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.241' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.061' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.101' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.041' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.031' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.041' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.061' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.091' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.051' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.021' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.041' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.061' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.071' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.041' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.041' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.031' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.041' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 5 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.091' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.061' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.031' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.041' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.111' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.041' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.061' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.061' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.031' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.241' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.061' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.101' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.041' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.031' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.041' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.061' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.091' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.051' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.021' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.071' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.041' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.061' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.071' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.041' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.041' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.031' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.041' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 15 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.031' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.061' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.091' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.031' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.021' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.011' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Load AVG 15 minute' xAxisName='' yAxisName='load avg' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.031' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.061' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.081' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.091' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.031' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.031' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.021' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.021' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.011' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.011' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Total' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='134225920' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Total' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='134225920' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='134225920' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Used' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Memory Used' xAxisName='' yAxisName='ram' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Total' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='2937774080' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Total' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='2937774080' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='2937774080' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Free' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='2926485504' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='2918002688' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='2917679104' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='2917347328' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='2906648576' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='2907009024' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='2907025408' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2907774976' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2907774976' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='2907336704' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2902622208' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2893488128' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='2898726912' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2898268160' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='2896904192' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2894565376' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2895077376' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2894921728' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2890543104' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2892419072' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2892124160' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2894831616' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2891804672' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='2892750848' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='2891653120' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='2891862016' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='2891902976' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='2892009472' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='2881003520' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='2880737280' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='2879381504' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='2879586304' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='2878128128' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='2873847808' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='2876366848' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='2871865344' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='2871205888' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='2871013376' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='2870259712' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='2923384832' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='2915074048' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='2915065856' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='2927185920' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='2925805568' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS Swap Free' xAxisName='' yAxisName='swap size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='2926485504' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='2918002688' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='2917679104' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='2917347328' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='2906648576' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='2907009024' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='2907025408' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2907774976' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2907774976' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='2907336704' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2902622208' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2893488128' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='2898726912' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2898268160' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='2896904192' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2894565376' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2895077376' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2894921728' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2890543104' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2892419072' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2892124160' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2894831616' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2891804672' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='2892750848' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='2891653120' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='2891862016' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='2891902976' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='2892009472' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='2881003520' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='2880737280' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='2879381504' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='2879586304' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='2878128128' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='2873847808' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='2876366848' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='2871865344' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='2871205888' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='2871013376' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='2870259712' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='2923384832' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='2915074048' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='2915065856' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='2927185920' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='2925805568' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU User' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='1' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='1' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='1' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='1' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='1' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='1' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU User' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='1' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='1' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='1' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='1' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='1' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='1' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU System' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU System' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU Idle' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='99' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='99' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='99' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='99' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='99' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='99' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='99' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='97' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='98' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='98' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='98' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='97' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='99' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='99' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='98' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='98' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='99' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='99' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='98' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='98' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='98' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='99' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='99' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='98' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='99' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='99' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='98' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='98' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='98' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='99' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='99' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='OS CPU Idle' xAxisName='' yAxisName='percentage' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='99' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='99' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='99' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='99' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='99' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='99' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='99' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='97' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='98' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='98' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='99' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='98' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='97' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='99' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='99' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='98' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='98' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='99' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='99' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='98' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='98' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='98' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='99' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='99' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='98' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='99' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='99' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='98' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='98' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='98' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='99' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='99' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Schemas' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='2' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='2' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='2' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='2' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='2' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='2' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='2' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='2' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='2' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='2' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='2' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='2' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Schemas' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='2' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='2' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='2' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='2' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='2' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='2' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='2' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='2' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='2' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='2' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='2' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='2' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Tables' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='24' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='24' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='24' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='24' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='24' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='24' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='24' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='24' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='24' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='24' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='24' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='24' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='24' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='24' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='24' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='24' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='24' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='24' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='24' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='24' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='24' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='24' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='24' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='24' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='24' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='24' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='24' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='24' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Tables' xAxisName='' yAxisName='quantity' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='24' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='24' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='24' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='24' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='24' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='24' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='24' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='24' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='24' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='24' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='24' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='24' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='24' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='24' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='24' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='24' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='24' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='24' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='24' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='24' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='24' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='24' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='24' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='24' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='24' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='24' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='24' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='24' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='24' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Data Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='126998432' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='127019532' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='127039108' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='127093872' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='127115364' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='127143508' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='127155708' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='127167464' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='127167908' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='127169440' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='127185856' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='127201788' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='127229492' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='127229492' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='127251976' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='127262260' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='127269568' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='127296784' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='127358024' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='127364208' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='127385952' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='127387248' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='127392524' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='127393216' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='127451620' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='127453424' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='127458700' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='127479656' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='127501640' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='127536040' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='127536828' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='127553780' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='127570632' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='127614128' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='127626972' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='127658448' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='127678144' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='127690288' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='127717556' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='127736184' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='127742544' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='127768960' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='127816004' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='127833864' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Data Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='126998432' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='127019532' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='127039108' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='127093872' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='127115364' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='127143508' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='127155708' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='127167464' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='127167908' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='127169440' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='127185856' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='127201788' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='127229492' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='127229492' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='127251976' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='127262260' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='127269568' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='127296784' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='127358024' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='127364208' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='127385952' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='127387248' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='127392524' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='127393216' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='127451620' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='127453424' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='127458700' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='127479656' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='127501640' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='127536040' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='127536828' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='127553780' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='127570632' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='127614128' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='127626972' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='127658448' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='127678144' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='127690288' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='127717556' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='127736184' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='127742544' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='127768960' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='127816004' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='127833864' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Index Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='100590592' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='100620288' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='100643840' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='100671488' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='100683776' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='100718592' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='100727808' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='100739072' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='100739072' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='100742144' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='100750336' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='100762624' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='100787200' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='100787200' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='100812800' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='100828160' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='100830208' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='100845568' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='100908032' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='100914176' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='100934656' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='100936704' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='100942848' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='100944896' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='101002240' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='101005312' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='101014528' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='101041152' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='101051392' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='101088256' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='101088256' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='101100544' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='101112832' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='101167104' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='101191680' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='101214208' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='101233664' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='101246976' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='101266432' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='101279744' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='101284864' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='101310464' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='101336064' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='101354496' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Total Index Size' xAxisName='' yAxisName='size' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='100590592' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='100620288' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='100643840' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='100671488' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='100683776' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='100718592' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='100727808' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='100739072' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='100739072' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='100742144' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='100750336' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='100762624' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='100787200' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='100787200' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='100812800' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='100828160' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='100830208' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='100845568' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='100908032' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='100914176' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='100934656' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='100936704' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='100942848' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='100944896' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='101002240' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='101005312' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='101014528' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='101041152' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='101051392' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='101088256' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='101088256' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='101100544' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='101112832' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='101167104' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='101191680' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='101214208' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='101233664' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='101246976' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='101266432' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='101279744' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='101284864' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='101310464' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='101336064' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='101354496' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='2' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='2' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='2' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='2' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='2' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='2' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='2' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='2' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='2' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='2' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='2' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='2' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='2' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='2' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='2' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='2' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='2' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='2' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='2' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='2' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='2' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='2' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='2' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='2' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='2' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='2' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='6' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='6' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='6' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='6' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='6' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='6' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='6' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='6' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='6' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='6' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='6' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='6' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='6' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='6' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='6' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='6' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='6' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='6' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='6' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='6' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='6' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='6' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='6' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='6' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='6' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='6' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='6' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='6' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Tables' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='6' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='6' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='6' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='6' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='6' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='6' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='6' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='6' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='6' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='6' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='6' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='6' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='6' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='6' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='6' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='6' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='6' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='6' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='6' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='6' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='6' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='6' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='6' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='6' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='6' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='6' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='6' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='6' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='6' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='11042816' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='11042816' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='11042816' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='6832128' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='InnoDB Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='6832128' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='6832128' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='115955616' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='115976716' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='115996292' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='116051056' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='116072548' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='116100692' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='116112892' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='116124648' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='116125092' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='116126624' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='116143040' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='116158972' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='116186676' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='116186676' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='116209160' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='116219444' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='116226752' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='116253968' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='116315208' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='116321392' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='116343136' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='116344432' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='116349708' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='116350400' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='116408804' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='116410608' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='116415884' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='116436840' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='116458824' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='116493224' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='116494012' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='116510964' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='116527816' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='116571312' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='116584156' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='116615632' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='116635328' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='116647472' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='116674740' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='116693368' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='116699728' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='116726144' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='116773188' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='116791048' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Data Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='115955616' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='115976716' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='115996292' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='116051056' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='116072548' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='116100692' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='116112892' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='116124648' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='116125092' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='116126624' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='116143040' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='116158972' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='116186676' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='116186676' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='116209160' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='116219444' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='116226752' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='116253968' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='116315208' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='116321392' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='116343136' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='116344432' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='116349708' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='116350400' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='116408804' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='116410608' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='116415884' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='116436840' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='116458824' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='116493224' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='116494012' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='116510964' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='116527816' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='116571312' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='116584156' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='116615632' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='116635328' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='116647472' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='116674740' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='116693368' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='116699728' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='116726144' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='116773188' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='116791048' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='93758464' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='93788160' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='93811712' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='93839360' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='93851648' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='93886464' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='93895680' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='93906944' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='93906944' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='93910016' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='93918208' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='93930496' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='93955072' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='93955072' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='93980672' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='93996032' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='93998080' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='94013440' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='94075904' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='94082048' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='94102528' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='94104576' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='94110720' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='94112768' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='94170112' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='94173184' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='94182400' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='94209024' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='94219264' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='94256128' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='94256128' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='94268416' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='94280704' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='94334976' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='94359552' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='94382080' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='94401536' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='94414848' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='94434304' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='94447616' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='94452736' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='94478336' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='94503936' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='94522368' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='MyISAM Index Size' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='93758464' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='93788160' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='93811712' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='93839360' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='93851648' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='93886464' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='93895680' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='93906944' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='93906944' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='93910016' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='93918208' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='93930496' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='93955072' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='93955072' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='93980672' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='93996032' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='93998080' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='94013440' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='94075904' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='94082048' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='94102528' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='94104576' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='94110720' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='94112768' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='94170112' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='94173184' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='94182400' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='94209024' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='94219264' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='94256128' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='94256128' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='94268416' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='94280704' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='94334976' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='94359552' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='94382080' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='94401536' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='94414848' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='94434304' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='94447616' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='94452736' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='94478336' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='94503936' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='94522368' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_free_memory' xAxisName='' yAxisName='free' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='1090352' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='8981240' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='190816' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='598144' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='940440' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='1562464' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='1845208' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2334312' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2407856' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='2441344' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2683992' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='1900944' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='2608528' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='3052768' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='2834600' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2994960' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='3686616' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2583064' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2356184' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2652000' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2323144' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2281816' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2730384' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='26869160' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='49881752' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='377960' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='508912' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='1200320' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='1398608' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='1559896' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='1396248' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='3988824' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='2566760' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='3817920' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='2574896' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='3311880' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='2338472' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='2354400' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='2722120' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='2850736' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='2711880' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='2074176' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='2863240' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='2292872' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_free_memory' xAxisName='' yAxisName='free' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='1090352' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='8981240' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='190816' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='598144' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='940440' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='1562464' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='1845208' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2334312' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2407856' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='2441344' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2683992' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='1900944' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='2608528' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='3052768' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='2834600' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2994960' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='3686616' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2583064' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2356184' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2652000' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2323144' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2281816' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2730384' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='26869160' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='49881752' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='377960' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='508912' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='1200320' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='1398608' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='1559896' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='1396248' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='3988824' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='2566760' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='3817920' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='2574896' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='3311880' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='2338472' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='2354400' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='2722120' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='2850736' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='2711880' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='2074176' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='2863240' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='2292872' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_hits' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='3.8971595391615' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='3.8969118585319' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='3.8968258736678' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='3.8967923886796' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='3.8964665381156' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='3.8961419689201' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='3.8959231101757' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='3.8958352850312' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='3.8954503880892' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='3.8959688806803' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='3.8960269454316' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='3.8977767467475' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='3.8974175568802' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='3.897427350292' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='3.8985780096897' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='3.8987371926779' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='3.8986217075211' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='3.89844730001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='3.8981821469432' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='3.8984137701585' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='3.8981563318116' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='3.8980803117718' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='3.8979027604924' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='3.8974839909837' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='3.8988132975091' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='3.8993248837241' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='3.8995657906671' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='3.8999393674718' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='3.9004599030875' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='3.9009416135264' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='3.9010364020832' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='3.9012861191941' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='3.9019478353996' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='3.9019584218859' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='3.9024255754114' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='3.9031595369759' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='3.9032686163557' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='3.9034854833282' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='3.9041840485419' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='3.9045499626097' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='3.9045915947138' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='3.9049087354518' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='3.9053560917331' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='3.9054620339261' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_hits' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='3.8971595391615' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='3.8969118585319' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='3.8968258736678' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='3.8967923886796' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='3.8964665381156' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='3.8961419689201' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='3.8959231101757' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='3.8958352850312' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='3.8954503880892' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='3.8959688806803' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='3.8960269454316' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='3.8977767467475' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='3.8974175568802' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='3.897427350292' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='3.8985780096897' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='3.8987371926779' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='3.8986217075211' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='3.89844730001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='3.8981821469432' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='3.8984137701585' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='3.8981563318116' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='3.8980803117718' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='3.8979027604924' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='3.8974839909837' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='3.8988132975091' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='3.8993248837241' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='3.8995657906671' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='3.8999393674718' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='3.9004599030875' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='3.9009416135264' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='3.9010364020832' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='3.9012861191941' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='3.9019478353996' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='3.9019584218859' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='3.9024255754114' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='3.9031595369759' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='3.9032686163557' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='3.9034854833282' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='3.9041840485419' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='3.9045499626097' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='3.9045915947138' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='3.9049087354518' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='3.9053560917331' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='3.9054620339261' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_inserts' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='1.5597404860164' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='1.5598147739682' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='1.5596700243993' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='1.5595637320075' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='1.559340565739' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='1.5591967983709' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='1.559091564066' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='1.5589717637074' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='1.5588065957505' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='1.5589035920219' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='1.5588815388706' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='1.5593883887941' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='1.5589961251995' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='1.5589264704131' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='1.5594587407571' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='1.5593229944523' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='1.5591020039921' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='1.5589074072917' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='1.5586437663905' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='1.5587071820864' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='1.5584994304211' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='1.5583821516672' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='1.5581624827739' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='1.5580457858661' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='1.5588541709302' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='1.559147447549' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='1.5591470897696' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='1.5591388009012' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='1.5592159829829' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='1.5591760366725' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='1.5592094239951' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='1.5591355388631' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='1.559214349557' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='1.5590951835559' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='1.5592139715362' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='1.5592102391607' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='1.5591761022044' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='1.5592332932843' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='1.5593865404813' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='1.5593824612919' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='1.5593938614551' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='1.5595308158297' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='1.5595044750745' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='1.559560682797' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_inserts' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='1.5597404860164' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='1.5598147739682' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='1.5596700243993' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='1.5595637320075' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='1.559340565739' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='1.5591967983709' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='1.559091564066' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='1.5589717637074' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='1.5588065957505' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='1.5589035920219' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='1.5588815388706' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='1.5593883887941' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='1.5589961251995' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='1.5589264704131' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='1.5594587407571' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='1.5593229944523' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='1.5591020039921' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='1.5589074072917' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='1.5586437663905' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='1.5587071820864' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='1.5584994304211' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='1.5583821516672' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='1.5581624827739' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='1.5580457858661' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='1.5588541709302' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='1.559147447549' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='1.5591470897696' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='1.5591388009012' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='1.5592159829829' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='1.5591760366725' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='1.5592094239951' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='1.5591355388631' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='1.559214349557' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='1.5590951835559' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='1.5592139715362' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='1.5592102391607' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='1.5591761022044' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='1.5592332932843' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='1.5593865404813' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='1.5593824612919' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='1.5593938614551' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='1.5595308158297' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='1.5595044750745' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='1.559560682797' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_queries_in_cache' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.0016863110337403' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0015282862086812' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.0015960099778313' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0016273377951968' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0016529454842909' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.0016443768937042' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0016873432048347' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0016845766156457' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0016260713689368' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.001648647132885' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0016022815887104' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0016087065183081' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.0015946968464367' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0015219235516437' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.0016817955077333' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0017060779004119' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0015575261679879' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0015474753810726' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0015735727049956' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0015081754407748' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0015124802464997' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0015642507509784' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0015413785255794' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.0011802920388781' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.0010294448929055' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.0014863172290519' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.0015268766287123' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.001552147695909' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.0016081877164618' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.0015422190469888' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.0016159848244736' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.0014976875676769' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.0016275209962024' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.0015486273302818' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.0017280339033894' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.0014722205099568' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.001586435699726' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.0015659916638017' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.0016625483265008' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.0015654969655061' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.0014753314156699' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.00154681236526' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.0015185804880183' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.0015038063551573' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_queries_in_cache' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.0016863110337403' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0015282862086812' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.0015960099778313' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0016273377951968' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0016529454842909' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.0016443768937042' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0016873432048347' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0016845766156457' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0016260713689368' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.001648647132885' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0016022815887104' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0016087065183081' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.0015946968464367' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0015219235516437' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.0016817955077333' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0017060779004119' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0015575261679879' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0015474753810726' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0015735727049956' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0015081754407748' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0015124802464997' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0015642507509784' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0015413785255794' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.0011802920388781' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.0010294448929055' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.0014863172290519' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.0015268766287123' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.001552147695909' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.0016081877164618' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.0015422190469888' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.0016159848244736' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.0014976875676769' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.0016275209962024' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.0015486273302818' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.0017280339033894' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.0014722205099568' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.001586435699726' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.0015659916638017' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.0016625483265008' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.0015654969655061' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.0014753314156699' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.00154681236526' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.0015185804880183' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.0015038063551573' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_lowmem_prunes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='1.1715457766866' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='1.1710685785855' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='1.170875234052' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='1.170760188628' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='1.1705594190868' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='1.1704684903395' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='1.1703497802251' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='1.1702633508751' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='1.1701903894353' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='1.170000402176' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='1.1699539308063' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='1.1704964349384' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='1.1701776047458' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='1.170175684796' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='1.1699274678058' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='1.1697304060623' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='1.1696621896592' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='1.1694599921978' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='1.1692105632932' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='1.1693135260016' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='1.1691720916501' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='1.1690680968197' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='1.1689085102087' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='1.1686197489333' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='1.1691719057602' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='1.1690442107793' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='1.1690117925879' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='1.1690183277649' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='1.1690013050364' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='1.1690853243644' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='1.1690348876501' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='1.1691247349259' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='1.1689295288077' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='1.1688668350763' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='1.1687563125162' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='1.1689616899561' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='1.1687930885909' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='1.1688404520644' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='1.1687087751587' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='1.168812314361' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='1.1689364004625' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='1.1689994619192' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='1.1690036722382' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='1.1690734385608' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_lowmem_prunes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='1.1715457766866' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='1.1710685785855' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='1.170875234052' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='1.170760188628' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='1.1705594190868' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='1.1704684903395' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='1.1703497802251' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='1.1702633508751' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='1.1701903894353' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='1.170000402176' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='1.1699539308063' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='1.1704964349384' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='1.1701776047458' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='1.170175684796' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='1.1699274678058' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='1.1697304060623' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='1.1696621896592' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='1.1694599921978' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='1.1692105632932' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='1.1693135260016' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='1.1691720916501' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='1.1690680968197' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='1.1689085102087' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='1.1686197489333' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='1.1691719057602' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='1.1690442107793' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='1.1690117925879' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='1.1690183277649' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='1.1690013050364' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='1.1690853243644' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='1.1690348876501' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='1.1691247349259' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='1.1689295288077' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='1.1688668350763' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='1.1687563125162' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='1.1689616899561' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='1.1687930885909' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='1.1688404520644' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='1.1687087751587' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='1.168812314361' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='1.1689364004625' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='1.1689994619192' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='1.1690036722382' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='1.1690734385608' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_not_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.90110284786974' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.90119315773083' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.90119849315946' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.90129891961505' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.90134365616682' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.90160775952988' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.90174584311924' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.90196511638356' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.90213301937068' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.90218843617375' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.90221918070771' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.90231078325932' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.90243381741223' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.90243392080734' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.90252178082631' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.90267693501348' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.90281175773275' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.90312005459801' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.90327764226582' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.90340068200818' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.9036740404092' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.90378700965576' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.90358977534442' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.90346041795239' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.90333397814798' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.9032604957871' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.90319687777988' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.9032774231627' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.90318726840054' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.90302434537927' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.90297177290668' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.90291157823963' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.90283082964144' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.90295464916025' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.90307171565781' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.90303090077764' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.90304190225885' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.90311101891863' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.90306258240111' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.90306075639194' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.90320899295981' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.90322087799705' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.90341464115479' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.90345300866782' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Qcache_not_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.90110284786974' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.90119315773083' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.90119849315946' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.90129891961505' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.90134365616682' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.90160775952988' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.90174584311924' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.90196511638356' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.90213301937068' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.90218843617375' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.90221918070771' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.90231078325932' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.90243381741223' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.90243392080734' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.90252178082631' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.90267693501348' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.90281175773275' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.90312005459801' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.90327764226582' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.90340068200818' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.9036740404092' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.90378700965576' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.90358977534442' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.90346041795239' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.90333397814798' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.9032604957871' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.90319687777988' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.9032774231627' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.90318726840054' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.90302434537927' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.90297177290668' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.90291157823963' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.90283082964144' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.90295464916025' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.90307171565781' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.90303090077764' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.90304190225885' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.90311101891863' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.90306258240111' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.90306075639194' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.90320899295981' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.90322087799705' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.90341464115479' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.90345300866782' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.0010432185789509' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001043200975009' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.0010431801888307' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010431626161429' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010431434622431' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.0010431227366724' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010431052000882' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010430861024053' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001043067016338' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.0010430463588376' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010430288948864' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010430051032313' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.0010429782978015' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0010429718285287' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.0010429496810127' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010429338542641' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001042914923861' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010428959891147' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010428770710697' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010428581697039' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010428392849952' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010428204169216' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0010428015549927' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.0010183347836147' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.0010076972126682' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.0010427451105395' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.0010427263253126' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.0010427075565896' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.0010426841188614' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.0010426560275222' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.0010426497900229' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.0010426310936581' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.0010426139597732' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.0010425952896182' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.0010425750820696' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.0010425533415255' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.0010425393771822' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.0010425192278022' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.0010425021837015' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.0010424820643759' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.0010424619692405' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.0010424449607099' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.0010424171934579' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.0010424079423533' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.0010432185789509' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001043200975009' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.0010431801888307' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010431626161429' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010431434622431' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.0010431227366724' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010431052000882' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010430861024053' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001043067016338' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.0010430463588376' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010430288948864' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010430051032313' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.0010429782978015' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0010429718285287' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.0010429496810127' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010429338542641' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001042914923861' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010428959891147' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010428770710697' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010428581697039' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010428392849952' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010428204169216' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0010428015549927' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.0010183347836147' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.0010076972126682' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.0010427451105395' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.0010427263253126' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.0010427075565896' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.0010426841188614' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.0010426560275222' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.0010426497900229' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.0010426310936581' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.0010426139597732' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.0010425952896182' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.0010425750820696' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.0010425533415255' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.0010425393771822' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.0010425192278022' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.0010425021837015' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.0010424820643759' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.0010424619692405' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.0010424449607099' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.0010424171934579' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.0010424079423533' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.0010743359557955' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010743056770154' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.0010743932967568' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010737464127241' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010737136869182' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.0010726926132477' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010732788401499' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010738618898377' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010737061222471' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.0010733017996207' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001073517940406' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010734772906638' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.0010710983840774' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0010714560120105' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.0010728917443473' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010733555567141' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0010730779846318' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001074148781184' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010730135267359' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010733486961504' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010720923967491' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010729170528151' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0010736186745875' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.0010364251034479' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.0010144170015056' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.0010725445590298' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.0010728789034618' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.0010728468893829' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.001056343036897' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.0010731246186094' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.0010732357822965' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.001070036796724' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.001073174256639' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.0010731421973157' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.0010734724273429' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.0010728270044964' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.0010724384822874' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.0010731330718198' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.0010718894078608' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.0010724622640925' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.0010730345870937' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.0010700948208295' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.0010683522774579' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.0010724569986494' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Open_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.0010743359557955' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010743056770154' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.0010743932967568' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010737464127241' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010737136869182' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.0010726926132477' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010732788401499' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010738618898377' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010737061222471' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.0010733017996207' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001073517940406' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010734772906638' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.0010710983840774' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0010714560120105' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.0010728917443473' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010733555567141' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0010730779846318' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001074148781184' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010730135267359' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010733486961504' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010720923967491' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010729170528151' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0010736186745875' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.0010364251034479' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.0010144170015056' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.0010725445590298' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.0010728789034618' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.0010728468893829' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.001056343036897' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.0010731246186094' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.0010732357822965' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.001070036796724' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.001073174256639' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.0010731421973157' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.0010734724273429' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.0010728270044964' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.0010724384822874' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.0010731330718198' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.0010718894078608' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.0010724622640925' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.0010730345870937' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.0010700948208295' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.0010683522774579' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.0010724569986494' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Slow_queries' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.27869023614508' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.27869080667206' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.27865700347502' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.27864611809612' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.27861942757501' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.27953838071413' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.27952227984635' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.27950154906848' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.27947920275324' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.27945804006976' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.27947083667473' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.27944293020063' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.27937055765569' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.27935308871067' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.27975017900813' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.27974216073822' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.27970717197886' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.27970945823469' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.279692386539' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.27968537095154' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.27964788445535' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.27961018629206' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.27956364829693' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.27951966423877' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.27951362180613' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.27948793690235' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.27945539695137' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.27941763866015' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.27980144457693' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.28028899958331' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.2802783801756' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.28024389492288' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.28024306893076' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.28021966889829' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.28021638980091' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.28022201792566' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.2802046497727' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.2801958277704' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.28019854482238' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.28020183726432' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.28019775994914' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.28019725179794' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.28018972495601' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.28019305197966' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Slow_queries' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.27869023614508' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.27869080667206' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.27865700347502' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.27864611809612' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.27861942757501' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.27953838071413' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.27952227984635' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.27950154906848' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.27947920275324' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.27945804006976' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.27947083667473' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.27944293020063' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.27937055765569' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.27935308871067' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.27975017900813' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.27974216073822' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.27970717197886' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.27970945823469' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.279692386539' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.27968537095154' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.27964788445535' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.27961018629206' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.27956364829693' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.27951966423877' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.27951362180613' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.27948793690235' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.27945539695137' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.27941763866015' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.27980144457693' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.28028899958331' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.2802783801756' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.28024389492288' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.28024306893076' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.28021966889829' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.28021638980091' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.28022201792566' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.2802046497727' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.2801958277704' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.28019854482238' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.28020183726432' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.28019775994914' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.28019725179794' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.28018972495601' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.28019305197966' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Uptime' xAxisName='' yAxisName='days' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='93.731122685185' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='93.76931712963' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='93.814456018519' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='93.852650462963' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='93.89431712963' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='93.939444444444' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='93.977662037037' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='94.01931712963' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='94.060983796296' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='94.106122685185' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='94.14431712963' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='94.196400462963' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='94.255150462963' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='94.269340277778' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='94.317951388889' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='94.352719907407' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='94.394340277778' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='94.436006944444' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='94.477673611111' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='94.519340277778' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='94.561006944444' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='94.602673611111' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='94.644363425926' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='94.689479166667' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='94.731261574074' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='94.769340277778' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='94.811006944444' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='94.852673611111' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='94.904756944444' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='94.967256944444' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='94.981145833333' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='95.022800925926' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='95.061006944444' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='95.102673611111' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='95.1478125' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='95.196423611111' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='95.227673611111' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='95.272800925926' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='95.311006944444' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='95.356145833333' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='95.401273148148' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='95.439502314815' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='95.501979166667' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='95.5228125' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Server Uptime' xAxisName='' yAxisName='days' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='93.731122685185' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='93.76931712963' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='93.814456018519' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='93.852650462963' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='93.89431712963' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='93.939444444444' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='93.977662037037' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='94.01931712963' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='94.060983796296' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='94.106122685185' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='94.14431712963' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='94.196400462963' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='94.255150462963' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='94.269340277778' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='94.317951388889' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='94.352719907407' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='94.394340277778' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='94.436006944444' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='94.477673611111' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='94.519340277778' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='94.561006944444' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='94.602673611111' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='94.644363425926' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='94.689479166667' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='94.731261574074' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='94.769340277778' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='94.811006944444' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='94.852673611111' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='94.904756944444' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='94.967256944444' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='94.981145833333' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='95.022800925926' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='95.061006944444' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='95.102673611111' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='95.1478125' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='95.196423611111' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='95.227673611111' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='95.272800925926' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='95.311006944444' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='95.356145833333' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='95.401273148148' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='95.439502314815' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='95.501979166667' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='95.5228125' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_immediate' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='5.7102532621075' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='5.7104400340226' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='5.7102212071725' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='5.7101763513506' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='5.7098615723524' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='5.7120243931768' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='5.712062436035' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='5.7123271431735' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='5.7124182757222' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='5.7125916380111' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='5.7125104298968' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='5.7132262440731' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='5.7128930595575' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='5.7126877761477' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='5.7133242549979' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='5.7133291830608' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='5.7132172202631' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='5.7135557821281' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='5.7134188449138' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='5.71364228196' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='5.7138830250068' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='5.7138913469847' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='5.7129442786122' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='5.7124503325991' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='5.7132534150883' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='5.7133100091584' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='5.7130253400069' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='5.7131185777749' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='5.7137383470831' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='5.7140453258073' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='5.7140464402596' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='5.713674593208' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='5.7134861372527' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='5.7135128444879' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='5.7139664880581' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='5.7136768020216' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='5.7136312329455' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='5.7138445035394' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='5.7137520429889' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='5.713683994858' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='5.7139735061576' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='5.7141671455873' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='5.7144176404139' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='5.7145251201023' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_immediate' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='5.7102532621075' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='5.7104400340226' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='5.7102212071725' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='5.7101763513506' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='5.7098615723524' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='5.7120243931768' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='5.712062436035' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='5.7123271431735' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='5.7124182757222' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='5.7125916380111' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='5.7125104298968' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='5.7132262440731' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='5.7128930595575' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='5.7126877761477' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='5.7133242549979' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='5.7133291830608' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='5.7132172202631' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='5.7135557821281' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='5.7134188449138' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='5.71364228196' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='5.7138830250068' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='5.7138913469847' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='5.7129442786122' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='5.7124503325991' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='5.7132534150883' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='5.7133100091584' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='5.7130253400069' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='5.7131185777749' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='5.7137383470831' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='5.7140453258073' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='5.7140464402596' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='5.713674593208' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='5.7134861372527' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='5.7135128444879' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='5.7139664880581' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='5.7136768020216' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='5.7136312329455' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='5.7138445035394' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='5.7137520429889' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='5.713683994858' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='5.7139735061576' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='5.7141671455873' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='5.7144176404139' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='5.7145251201023' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_waited' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.0014828132677086' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0014826166065289' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.0014826311391588' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0014824347267171' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0014822206408431' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.0014826050272733' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001482408767844' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0014821950374904' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0014819814371316' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.0014817502501916' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0014816777433287' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0014814114127434' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.0014811113451041' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001481038926215' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.0014829998413316' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0014829445263936' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0014827315864017' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0014825185975561' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0014823057965757' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0014820931832122' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0014818807572174' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0014816685183438' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0014814563485896' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.0014812269539409' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.0014810147027758' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.0014808214291254' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.0014806101221594' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.0014803990008384' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.0014801353598777' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.0014798193724421' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.0014798710660291' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.0014797825083405' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.0014797114328749' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.0014795012602729' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.0014792737810115' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.0014792722065525' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.0014791149281492' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.0014788879885611' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.0014786960232893' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.0014785907995258' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.0014783644134728' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.0014781728002262' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.0014781023662613' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.0014779980930966' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Table_locks_waited' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.0014828132677086' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0014826166065289' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.0014826311391588' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0014824347267171' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0014822206408431' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.0014826050272733' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001482408767844' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0014821950374904' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0014819814371316' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.0014817502501916' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0014816777433287' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0014814114127434' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.0014811113451041' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001481038926215' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.0014829998413316' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0014829445263936' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0014827315864017' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0014825185975561' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0014823057965757' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0014820931832122' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0014818807572174' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0014816685183438' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0014814563485896' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.0014812269539409' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.0014810147027758' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.0014808214291254' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.0014806101221594' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.0014803990008384' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.0014801353598777' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.0014798193724421' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.0014798710660291' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.0014797825083405' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.0014797114328749' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.0014795012602729' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.0014792737810115' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.0014792722065525' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.0014791149281492' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.0014788879885611' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.0014786960232893' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.0014785907995258' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.0014783644134728' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.0014781728002262' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.0014781023662613' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.0014779980930966' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.0010004939266166' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010006171567858' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.0010006168598404' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010007399305624' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010006163351749' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.0010008624547334' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010008621040018' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010007386188984' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010004921944724' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.0010008609271768' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010007376381981' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010008601020646' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.001000859565956' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0010003683299588' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.0010006135668716' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010008586770853' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001000735684409' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010008579197823' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010007350355041' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010003673557403' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010008567856999' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010008564083384' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0010007337409427' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.0010004889275631' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.0010007330678732' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.001000488515549' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.0010004883008607' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.0010007321295415' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.0010007317277519' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.0010010968692791' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.0010010967088863' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.0010010962281226' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.0010012175417078' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.0010013387091023' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.0010013380740079' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.0010013373907337' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.0010012154107766' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.0010013363185881' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.0010012143481058' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.0010010923959411' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.0010013345190333' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.0010012127131631' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.001001575495757' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.0010015751521446' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_cached' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.0010004939266166' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0010006171567858' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.0010006168598404' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0010007399305624' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0010006163351749' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.0010008624547334' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0010008621040018' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0010007386188984' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0010004921944724' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.0010008609271768' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0010007376381981' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0010008601020646' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.001000859565956' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0010003683299588' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.0010006135668716' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0010008586770853' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001000735684409' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0010008579197823' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0010007350355041' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0010003673557403' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0010008567856999' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0010008564083384' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0010007337409427' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.0010004889275631' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.0010007330678732' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.001000488515549' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.0010004883008607' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.0010007321295415' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.0010007317277519' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.0010010968692791' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.0010010967088863' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.0010010962281226' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.0010012175417078' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.0010013387091023' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.0010013380740079' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.0010013373907337' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.0010012154107766' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.0010013363185881' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.0010012143481058' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.0010010923959411' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.0010013345190333' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.0010012127131631' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.001001575495757' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.0010015751521446' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_created' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.0011353358929434' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0011354041988138' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.0011353390489921' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0011352839711679' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0011352239373734' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.0011352821853322' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0011352271705624' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001135167258403' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0011351073826833' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.0011350425771535' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0011349877902437' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0011349131524227' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.0011348290599603' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001134808764927' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.0011347392850056' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0011346896342342' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0011346302468552' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0011345708458513' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0011345114972416' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0011344522009568' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0011343929569278' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0011343337650855' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.00113427459252' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.001134577311732' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.0011347623106837' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.0011348302915302' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.0011347710375575' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.0011347118356428' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.0011346379063513' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.00113479304697' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.0011347733364724' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.0011347142559595' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.0011349036212247' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.0011348445168483' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.001134780545523' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.001134711721172' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.0011346675140511' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.0011346037268711' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.0011345497701178' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.0011344860780813' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.0011344224626244' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.001134368618476' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.0011345230992522' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.0011344937600348' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Threads_created' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.0011353358929434' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0011354041988138' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.0011353390489921' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0011352839711679' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0011352239373734' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.0011352821853322' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0011352271705624' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001135167258403' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0011351073826833' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.0011350425771535' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0011349877902437' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.0011349131524227' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.0011348290599603' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001134808764927' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.0011347392850056' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0011346896342342' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0011346302468552' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0011345708458513' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0011345114972416' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0011344522009568' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0011343929569278' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0011343337650855' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.00113427459252' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.001134577311732' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.0011347623106837' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.0011348302915302' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.0011347710375575' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.0011347118356428' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.0011346379063513' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.00113479304697' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.0011347733364724' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.0011347142559595' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.0011349036212247' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.0011348445168483' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.001134780545523' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.001134711721172' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.0011346675140511' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.0011346037268711' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.0011345497701178' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.0011344860780813' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.0011344224626244' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.001134368618476' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.0011345230992522' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.0011344937600348' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Seconds_Behind_Master' xAxisName='' yAxisName='seconds' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.001' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Seconds_Behind_Master' xAxisName='' yAxisName='seconds' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.001' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='2.6421180610565' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='2.6427327504987' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='2.6434335455043' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='2.6440644188481' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='2.644527085404' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='2.6464094530953' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='2.6469202566114' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2.6472048383477' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2.6471123134875' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='2.6467759691611' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2.6471195412776' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2.6471491487017' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='2.647422990565' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2.6472170031913' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='2.6470974421502' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2.6476143803878' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2.6474464210241' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2.6475216964849' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2.6475545185021' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2.6474904521182' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2.6476003696908' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2.6474071442318' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2.6472206565685' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='2.6479277844211' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='2.6487273147565' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='2.6490183096849' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='2.6489955468182' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='2.6494574737065' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='2.6501816940985' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='2.6525259497943' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='2.6529592678664' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='2.6532792446257' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='2.6537800834771' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='2.6547837978715' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='2.6551166551167' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='2.6554043777176' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='2.6557526425157' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='2.6568005860364' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='2.6577578446584' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='2.6581109002787' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='2.6585117443741' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='2.6590635210666' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='2.6588151229656' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='2.6594821554043' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='2.6421180610565' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='2.6427327504987' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='2.6434335455043' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='2.6440644188481' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='2.644527085404' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='2.6464094530953' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='2.6469202566114' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2.6472048383477' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2.6471123134875' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='2.6467759691611' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2.6471195412776' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2.6471491487017' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='2.647422990565' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2.6472170031913' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='2.6470974421502' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2.6476143803878' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2.6474464210241' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2.6475216964849' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2.6475545185021' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2.6474904521182' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2.6476003696908' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2.6474071442318' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2.6472206565685' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='2.6479277844211' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='2.6487273147565' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='2.6490183096849' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='2.6489955468182' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='2.6494574737065' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='2.6501816940985' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='2.6525259497943' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='2.6529592678664' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='2.6532792446257' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='2.6537800834771' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='2.6547837978715' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='2.6551166551167' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='2.6554043777176' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='2.6557526425157' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='2.6568005860364' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='2.6577578446584' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='2.6581109002787' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='2.6585117443741' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='2.6590635210666' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='2.6588151229656' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='2.6594821554043' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='1.5796075728335' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='1.579656364633' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='1.579719943165' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='1.5797552038392' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='1.5798339568385' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='1.580289730579' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='1.5801466069434' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='1.5800805069979' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='1.5799672666066' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='1.5799783513712' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='1.5799226684701' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='1.5798666817225' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='1.5798544754836' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='1.579766211153' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='1.5798822957856' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='1.5798255045495' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='1.5797466572646' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='1.5797271594484' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='1.5798653439458' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='1.5797897280233' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='1.5797746433293' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='1.5796367384985' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='1.5795196026842' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='1.5794622799108' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='1.579581054154' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='1.5794078971714' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='1.5793368654576' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='1.5793403293192' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='1.5793482525305' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='1.5793547751778' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='1.5794076334107' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='1.5793771475413' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='1.5793050052774' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='1.5795669665497' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='1.5795935685351' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='1.5795335934923' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='1.5795581763053' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='1.5796017041707' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='1.579610658139' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='1.5796274711362' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='1.5795266582309' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='1.5796998122599' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='1.5796646399732' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='1.5797022744349' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Key_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='1.5796075728335' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='1.579656364633' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='1.579719943165' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='1.5797552038392' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='1.5798339568385' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='1.580289730579' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='1.5801466069434' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='1.5800805069979' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='1.5799672666066' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='1.5799783513712' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='1.5799226684701' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='1.5798666817225' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='1.5798544754836' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='1.579766211153' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='1.5798822957856' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='1.5798255045495' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='1.5797466572646' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='1.5797271594484' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='1.5798653439458' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='1.5797897280233' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='1.5797746433293' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='1.5796367384985' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='1.5795196026842' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='1.5794622799108' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='1.579581054154' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='1.5794078971714' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='1.5793368654576' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='1.5793403293192' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='1.5793482525305' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='1.5793547751778' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='1.5794076334107' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='1.5793771475413' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='1.5793050052774' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='1.5795669665497' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='1.5795935685351' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='1.5795335934923' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='1.5795581763053' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='1.5796017041707' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='1.579610658139' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='1.5796274711362' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='1.5795266582309' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='1.5796998122599' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='1.5796646399732' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='1.5797022744349' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.37545527611794' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.37561984684884' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.37610802757956' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.37651710355661' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.37709438014493' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.37908130434697' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.37996909603469' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.38062573934213' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.38113261933963' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.38145429651242' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.38186522255958' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.38219637494012' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.38251356057392' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.38262495145718' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.3830074705448' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.38379014852047' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.3845616959046' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.38520099050516' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.38588933611716' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.38658001369257' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.38731218749507' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.38790436647132' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.38803807491813' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.38831240307775' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.38849821161983' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.38871305231721' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.38908711922146' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.38966268119749' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.39057209902569' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.39176248380442' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.39190043577118' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.39230130804376' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.39255824762144' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.39322387694781' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.39373092511639' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.39408260175021' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.39438665826575' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.39484831812157' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.39511339898342' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.39557365667768' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.39616722130086' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.3964339894152' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.39702243069667' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.39731009705239' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.37545527611794' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.37561984684884' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.37610802757956' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.37651710355661' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.37709438014493' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.37908130434697' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.37996909603469' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.38062573934213' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.38113261933963' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.38145429651242' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.38186522255958' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.38219637494012' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.38251356057392' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.38262495145718' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.3830074705448' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.38379014852047' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.3845616959046' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.38520099050516' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.38588933611716' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.38658001369257' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.38731218749507' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.38790436647132' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.38803807491813' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.38831240307775' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.38849821161983' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.38871305231721' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.38908711922146' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.38966268119749' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.39057209902569' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.39176248380442' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.39190043577118' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.39230130804376' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.39255824762144' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.39322387694781' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.39373092511639' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.39408260175021' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.39438665826575' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.39484831812157' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.39511339898342' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.39557365667768' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.39616722130086' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.3964339894152' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.39702243069667' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.39731009705239' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.1757555588045' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.17580040223811' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.17584867502824' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.17588517819193' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.17592874240875' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.17599280466337' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.17602792601177' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.17606757439647' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.17610815050667' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.1761213200129' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.1761615335449' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.17619664697811' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.17623565921648' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.17624304559274' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.1762652541621' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.17629684160168' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.17633272247005' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.17639079165283' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.17643116876403' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.17645057099939' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.17650361557445' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.1765169739521' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.1764802609623' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.176473779976' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.17646663740911' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.17647820481772' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.17650302007979' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.17653989367771' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.17654246332001' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.17653491572571' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.1765285009659' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.17652658535902' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.17652203013878' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.17656403161252' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.17660968429847' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.17661703257069' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.17663779592062' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.17668058098273' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.17669564841999' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.1767109161063' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.17675191048532' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.17675779110603' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.17680023974198' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.17680818330312' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_data_writes' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.1757555588045' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.17580040223811' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.17584867502824' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.17588517819193' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.17592874240875' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.17599280466337' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.17602792601177' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.17606757439647' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.17610815050667' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.1761213200129' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.1761615335449' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.17619664697811' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.17623565921648' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.17624304559274' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.1762652541621' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.17629684160168' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.17633272247005' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.17639079165283' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.17643116876403' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.17645057099939' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.17650361557445' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.1765169739521' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.1764802609623' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.176473779976' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.17646663740911' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.17647820481772' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.17650302007979' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.17653989367771' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.17654246332001' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.17653491572571' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.1765285009659' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.17652658535902' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.17652203013878' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.17656403161252' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.17660968429847' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.17661703257069' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.17663779592062' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.17668058098273' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.17669564841999' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.1767109161063' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.17675191048532' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.17675779110603' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.17680023974198' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.17680818330312' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.34210893193432' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.34226215227998' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.34272628719834' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.34311158177546' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.34366374392309' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.34545074447093' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.34629075689037' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.34690790973437' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.34738776630951' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.34769033150493' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.34807610668166' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.34839546964583' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.34869848145394' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.34880685906505' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.34916974842899' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.34991496950163' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.35064603157729' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.35124379016214' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.35189357653698' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.35255136165915' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.3532372082201' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.35380340987544' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.35393868750621' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.35420078262635' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.35437866706513' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.35458853141356' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.35494475681457' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.35549346336442' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.35634711884027' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.35741012234846' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.35754602990774' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.35793260754911' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.35817608733475' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.35880335361234' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.35928525086029' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.35962801218387' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.35991371932592' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.36035501975929' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.36060551173176' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.36104302097971' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.36160366361871' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.36186511561462' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.36242345314494' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.36269782499357' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_reads' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.34210893193432' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.34226215227998' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.34272628719834' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.34311158177546' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.34366374392309' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.34545074447093' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.34629075689037' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.34690790973437' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.34738776630951' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.34769033150493' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.34807610668166' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.34839546964583' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.34869848145394' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.34880685906505' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.34916974842899' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.34991496950163' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.35064603157729' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.35124379016214' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.35189357653698' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.35255136165915' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.3532372082201' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.35380340987544' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.35393868750621' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.35420078262635' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.35437866706513' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.35458853141356' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.35494475681457' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.35549346336442' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.35634711884027' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.35741012234846' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.35754602990774' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.35793260754911' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.35817608733475' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.35880335361234' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.35928525086029' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.35962801218387' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.35991371932592' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.36035501975929' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.36060551173176' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.36104302097971' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.36160366361871' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.36186511561462' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.36242345314494' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.36269782499357' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_write_requests' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.32891874512016' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.32898204913086' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.32903718036328' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.32910333968893' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.32915336490038' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.32943200308315' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.32951544459319' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.32960391549264' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.32967700955928' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.32969609258362' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.32975022328923' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.32978396681284' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.32983199108016' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.32983663841944' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.32987356117035' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.32994864191019' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.33002406190735' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.33014362079651' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.330237347987' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.33028262403675' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.33041121319509' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.33045710684954' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.33038083392838' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.33034551789713' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.33065231446022' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.33063136250284' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.33064068014939' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.33069159897214' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.33065103537648' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.3307542488755' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.3307302790722' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.33071204523281' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.33069775379383' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.33078368529821' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.33085458419898' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.33082851854432' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.33085567847815' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.33090948263818' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.33090340710862' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.33092481524247' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.33100629650344' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.33100205069796' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.33107472333992' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.33109142788875' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_write_requests' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.32891874512016' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.32898204913086' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.32903718036328' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.32910333968893' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.32915336490038' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.32943200308315' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.32951544459319' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.32960391549264' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.32967700955928' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.32969609258362' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.32975022328923' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.32978396681284' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.32983199108016' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.32983663841944' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.32987356117035' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.32994864191019' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.33002406190735' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.33014362079651' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.330237347987' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.33028262403675' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.33041121319509' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.33045710684954' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.33038083392838' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.33034551789713' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.33065231446022' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.33063136250284' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.33064068014939' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.33069159897214' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.33065103537648' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.3307542488755' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.3307302790722' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.33071204523281' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.33069775379383' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.33078368529821' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.33085458419898' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.33082851854432' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.33085567847815' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.33090948263818' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.33090340710862' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.33092481524247' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.33100629650344' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.33100205069796' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.33107472333992' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.33109142788875' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_free' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='1' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='1' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_free' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='1' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.001' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='1' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_total' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='448' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='448' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='448' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='448' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='448' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='448' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='448' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='448' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='448' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='448' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='448' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='448' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='448' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='448' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='448' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='448' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='448' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='448' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='448' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='448' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='448' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='448' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='448' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='448' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='448' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='448' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='448' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='448' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Innodb_buffer_pool_pages_total' xAxisName='' yAxisName='quant' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='448' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='448' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='448' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='448' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='448' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='448' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='448' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='448' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='448' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='448' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='448' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='448' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='448' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='448' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='448' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='448' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='448' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='448' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='448' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='448' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='448' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='448' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='448' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='448' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='448' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='448' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='448' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='448' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='448' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_disk_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.57151845871681' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.57144579332974' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.57132084977625' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.57120997626179' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.57107502894618' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.57458143445443' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.57447084302687' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.57436227570452' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.57423736853639' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.57411491692852' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.57399612285069' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.57400613903992' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.57372572662487' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.5736953809336' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.57355888431945' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.57343572955352' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.57329981444813' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.57315111497093' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.57300903946663' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.5729278253728' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.57281755213633' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.5727136155835' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.57258297148695' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.57248237092221' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.57262018140742' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.5726063038535' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.57251282076636' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.57242393460814' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.57399807519015' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.57575377417485' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.57571664393433' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.57562365879534' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.57552871091189' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.57539784560327' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.57527740050173' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.57515922803862' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.57506488421815' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.5749655983002' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.5748587769013' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.57474528312536' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.57463366481977' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.57455196287934' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.57439877215556' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.57436034840427' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_disk_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.57151845871681' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.57144579332974' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.57132084977625' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.57120997626179' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.57107502894618' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.57458143445443' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.57447084302687' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.57436227570452' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.57423736853639' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.57411491692852' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.57399612285069' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.57400613903992' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.57372572662487' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.5736953809336' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.57355888431945' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.57343572955352' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.57329981444813' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.57315111497093' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.57300903946663' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.5729278253728' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.57281755213633' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.5727136155835' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.57258297148695' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.57248237092221' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.57262018140742' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.5726063038535' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.57251282076636' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.57242393460814' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.57399807519015' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.57575377417485' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.57571664393433' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.57562365879534' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.57552871091189' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.57539784560327' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.57527740050173' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.57515922803862' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.57506488421815' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.5749655983002' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.5748587769013' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.57474528312536' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.57463366481977' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.57455196287934' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.57439877215556' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.57436034840427' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.0094529366345248' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0094499872803986' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.0094543108571403' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0094587628681632' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0094651170932055' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.0094632682993181' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0094733739179055' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0094821763258117' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0094816181976109' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.0094782878470659' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0094807493027168' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.00947778030757' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.0094806005173359' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0094793239819268' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.0094759354777986' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0094850789522913' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0094845256754472' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0094834784872325' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0094863524120374' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0094941218795732' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0094964989900333' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0094961824374874' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0094936628629129' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.0094910827557571' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.0094888037932841' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.0094868585042802' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.0094853261318722' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.0094898961852512' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.0094947494265389' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.0094920838334753' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.0094925480459024' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.0094988130285494' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.0094983193663036' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.0095033585168856' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.0095029737478395' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.0095030087036173' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.009501676841478' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.0095025092418579' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.0095076013941202' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.0095079437212176' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.0095063456380032' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.0095065764828481' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.0095036777524608' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.0095040040973342' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_files' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.0094529366345248' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.0094499872803986' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.0094543108571403' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.0094587628681632' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.0094651170932055' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.0094632682993181' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.0094733739179055' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.0094821763258117' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.0094816181976109' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.0094782878470659' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.0094807493027168' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.00947778030757' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.0094806005173359' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.0094793239819268' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.0094759354777986' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.0094850789522913' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.0094845256754472' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.0094834784872325' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.0094863524120374' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.0094941218795732' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.0094964989900333' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.0094961824374874' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.0094936628629129' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.0094910827557571' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.0094888037932841' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.0094868585042802' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.0094853261318722' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.0094898961852512' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.0094947494265389' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.0094920838334753' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.0094925480459024' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.0094988130285494' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.0094983193663036' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.0095033585168856' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.0095029737478395' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.0095030087036173' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.009501676841478' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.0095025092418579' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.0095076013941202' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.0095079437212176' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.0095063456380032' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.0095065764828481' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.0095036777524608' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.0095040040973342' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.89790442606406' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.89798579391481' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.89801056150407' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.89804125199211' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.89804996099215' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.90364647931193' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.90367917292205' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.90372647624989' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.90375393881703' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.90378115145074' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.90379600529575' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.90385786113013' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.90350790647186' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.90355241611561' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.90361429799789' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.90361448772245' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.90361843568727' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.90362156999075' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.90361392100892' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.90367558655385' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.90370157994955' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.90374162001382' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.903723316196' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.90376807562145' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.90403564628058' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.90414727363747' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.90418678569977' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.90424676267569' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.90690627469962' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.90988684708704' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.90990601948169' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.90994168919009' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.90999667136272' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.91000587340364' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.9100528126863' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.91009317491819' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.91011498527348' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.91018548952387' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.9102286934428' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.91026013115306' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.91030984741595' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.91037212624878' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.91042535488951' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.91045964890343' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Created_tmp_tables' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.89790442606406' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.89798579391481' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.89801056150407' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.89804125199211' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.89804996099215' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.90364647931193' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.90367917292205' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.90372647624989' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.90375393881703' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.90378115145074' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.90379600529575' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.90385786113013' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.90350790647186' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.90355241611561' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.90361429799789' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.90361448772245' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.90361843568727' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.90362156999075' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.90361392100892' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.90367558655385' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.90370157994955' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.90374162001382' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.903723316196' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.90376807562145' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.90403564628058' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.90414727363747' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.90418678569977' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.90424676267569' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.90690627469962' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.90988684708704' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.90990601948169' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.90994168919009' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.90999667136272' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.91000587340364' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.9100528126863' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.91009317491819' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.91011498527348' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.91018548952387' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.9102286934428' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.91026013115306' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.91030984741595' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.91037212624878' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.91042535488951' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.91045964890343' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_select' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='2.5765452278107' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='2.5766400725579' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='2.5764249246413' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='2.5763552229047' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='2.5761068547689' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='2.5778516942554' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='2.5778185566655' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2.5778464310366' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2.5777770012043' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='2.5778494014527' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2.5777939675702' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2.5783060879621' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='2.5779403448947' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2.5778470892909' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='2.578351446441' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2.5783035607499' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2.5781472793594' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2.5781859678395' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2.5780071741915' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2.5781231574814' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2.5781149270306' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2.5780834584607' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2.577602459891' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='2.5772803184287' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='2.5778932875541' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='2.5780500682029' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='2.5779157878777' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='2.5779224384404' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='2.5786105490019' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='2.5791980447452' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='2.5791564870757' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='2.5789533944704' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='2.578888362505' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='2.578825321707' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='2.578985353077' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='2.5788585759147' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='2.57878614738' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='2.5788222659833' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='2.5788530263558' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='2.5787689693038' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='2.5788568509961' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='2.5789435643313' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='2.5790085065864' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='2.5790667611273' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_select' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='2.5765452278107' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='2.5766400725579' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='2.5764249246413' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='2.5763552229047' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='2.5761068547689' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='2.5778516942554' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='2.5778185566655' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='2.5778464310366' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='2.5777770012043' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='2.5778494014527' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='2.5777939675702' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='2.5783060879621' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='2.5779403448947' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='2.5778470892909' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='2.578351446441' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='2.5783035607499' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='2.5781472793594' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='2.5781859678395' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='2.5780071741915' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='2.5781231574814' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='2.5781149270306' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='2.5780834584607' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='2.577602459891' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='2.5772803184287' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='2.5778932875541' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='2.5780500682029' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='2.5779157878777' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='2.5779224384404' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='2.5786105490019' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='2.5791980447452' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='2.5791564870757' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='2.5789533944704' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='2.578888362505' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='2.578825321707' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='2.578985353077' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='2.5788585759147' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='2.57878614738' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='2.5788222659833' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='2.5788530263558' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='2.5787689693038' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='2.5788568509961' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='2.5789435643313' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='2.5790085065864' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='2.5790667611273' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_insert' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='1.2589048486183' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='1.258807783927' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='1.2588681929671' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='1.2587719693092' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='1.2587521752009' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='1.2588121928429' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='1.2587101446241' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='1.2586940060707' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='1.2586820336344' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='1.2587505560667' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='1.2586567682177' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='1.2586411689819' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='1.2586675868116' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='1.2586161278675' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='1.2586508327146' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='1.258613788514' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='1.2585995683249' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='1.2585994508578' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='1.2585869603967' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='1.2585695828712' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='1.2585621348945' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='1.2585364642154' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='1.2584960780935' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='1.2585463621284' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='1.2585119870648' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='1.2584122682864' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='1.2583944106154' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='1.2583779108708' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='1.2583662397401' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='1.2583222214382' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='1.258394483993' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='1.2583676919648' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='1.258267503897' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='1.2582525635367' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='1.2583213910228' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='1.2582193906824' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='1.2582059977848' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='1.2582774610433' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='1.2581891082447' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='1.2582285634593' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='1.2581872136092' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='1.2582021551611' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='1.2581741870533' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='1.2581598030624' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_insert' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='1.2589048486183' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='1.258807783927' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='1.2588681929671' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='1.2587719693092' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='1.2587521752009' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='1.2588121928429' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='1.2587101446241' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='1.2586940060707' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='1.2586820336344' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='1.2587505560667' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='1.2586567682177' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='1.2586411689819' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='1.2586675868116' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='1.2586161278675' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='1.2586508327146' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='1.258613788514' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='1.2585995683249' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='1.2585994508578' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='1.2585869603967' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='1.2585695828712' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='1.2585621348945' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='1.2585364642154' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='1.2584960780935' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='1.2585463621284' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='1.2585119870648' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='1.2584122682864' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='1.2583944106154' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='1.2583779108708' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='1.2583662397401' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='1.2583222214382' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='1.258394483993' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='1.2583676919648' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='1.258267503897' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='1.2582525635367' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='1.2583213910228' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='1.2582193906824' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='1.2582059977848' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='1.2582774610433' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='1.2581891082447' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='1.2582285634593' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='1.2581872136092' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='1.2582021551611' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='1.2581741870533' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='1.2581598030624' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_delete' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.025107570302119' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.025107872094009' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.025109720119587' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.025111500629743' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.025106964230002' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.025104008098204' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.025098639476728' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.025095102599705' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.025094026863236' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.025106575897065' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.025115113850153' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.025128566090673' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.025130472288515' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.025132119465121' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.025149501213083' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.025155322417912' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.025154726202173' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.025161594828754' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.025164659713476' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.02517090564578' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.025174086124833' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.02517163597605' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.025182267120102' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.025181379413778' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.025187941009051' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.02519141211648' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.025199091980134' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.025199931887548' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.025207139443284' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.025219848678352' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.025222399889062' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.025226641510261' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.025244421010825' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.0252463341581' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.025255024255024' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.025269143319776' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.025280504166975' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.025294028964098' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.025314284947512' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.025326322457561' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.025337987569562' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.025341821153186' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.025359103475047' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.02535936441884' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_delete' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.025107570302119' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.025107872094009' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.025109720119587' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.025111500629743' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.025106964230002' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.025104008098204' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.025098639476728' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.025095102599705' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.025094026863236' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.025106575897065' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.025115113850153' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.025128566090673' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.025130472288515' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.025132119465121' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.025149501213083' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.025155322417912' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.025154726202173' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.025161594828754' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.025164659713476' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.02517090564578' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.025174086124833' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.02517163597605' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.025182267120102' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.025181379413778' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.025187941009051' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.02519141211648' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.025199091980134' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.025199931887548' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.025207139443284' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.025219848678352' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.025222399889062' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.025226641510261' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.025244421010825' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.0252463341581' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.025255024255024' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.025269143319776' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.025280504166975' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.025294028964098' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.025314284947512' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.025326322457561' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.025337987569562' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.025341821153186' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.025359103475047' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.02535936441884' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr><tr><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_update' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.12420098034555' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.12420103425603' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.12420924046171' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.1242238429305' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.12422980833579' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.1242285179775' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.12423912178697' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.12425075040602' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.12426604501684' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.12429534881633' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.1243659316143' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.12436370189895' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.12435483680833' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.12435210711133' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.12442842515423' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.1244364256953' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.12443447890431' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.12443982691591' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.12444088250323' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.12444548826537' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.12443736058108' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.12442434629434' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.1244146151168' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.12440372790154' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.12441356476123' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.12441380527843' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.12443000591699' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.12443545442243' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.12446686267214' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.12447372163237' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.12447796608269' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.12447182754626' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.12450694382299' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.12452743520009' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.12456602561974' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.12462001033195' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.12463523043155' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.12465490422848' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.1246812331365' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.12469090001409' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.12470566818761' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.12473409420574' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.12476949236678' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.12478236195518' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Com_update' xAxisName='' yAxisName='per/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='0.12420098034555' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='0.12420103425603' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='0.12420924046171' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='0.1242238429305' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='0.12422980833579' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='0.1242285179775' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='0.12423912178697' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='0.12425075040602' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='0.12426604501684' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='0.12429534881633' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='0.1243659316143' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='0.12436370189895' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='0.12435483680833' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='0.12435210711133' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='0.12442842515423' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='0.1244364256953' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='0.12443447890431' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='0.12443982691591' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='0.12444088250323' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='0.12444548826537' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='0.12443736058108' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='0.12442434629434' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='0.1244146151168' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='0.12440372790154' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='0.12441356476123' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='0.12441380527843' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='0.12443000591699' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='0.12443545442243' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='0.12446686267214' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='0.12447372163237' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='0.12447796608269' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='0.12447182754626' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='0.12450694382299' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='0.12452743520009' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='0.12456602561974' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='0.12462001033195' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='0.12463523043155' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='0.12465490422848' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='0.1246812331365' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='0.12469090001409' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='0.12470566818761' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='0.12473409420574' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='0.12476949236678' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='0.12478236195518' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_received' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='118.51652610544' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='120.39841741251' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='123.19069358363' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='125.07744014609' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='127.31242979172' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='130.6748799463' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='132.50244221748' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='134.84837274255' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='137.11854725356' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='140.04849418302' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='142.10803645752' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='145.41376413962' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='148.71382212756' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='149.30889574556' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='152.5985174261' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='154.37515172517' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='156.69598798186' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='159.07067261279' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='161.30157465431' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='163.71027081343' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='165.99903452491' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='168.27139360026' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='170.43633164748' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='173.1655322936' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='176.50326819985' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='178.62478268691' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='181.02822281315' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='183.44955438325' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='186.74672951232' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='190.58461048527' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='191.6583357004' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='194.01956621035' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='195.99063588673' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='198.3091931223' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='201.2147973712' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='203.71114317607' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='205.43712455201' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='208.33684825616' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='210.26852151054' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='213.08708750371' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='215.53816154232' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='217.92787849293' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='221.50498359606' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='222.73010494996' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_received' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='118.51652610544' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='120.39841741251' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='123.19069358363' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='125.07744014609' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='127.31242979172' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='130.6748799463' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='132.50244221748' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='134.84837274255' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='137.11854725356' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='140.04849418302' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='142.10803645752' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='145.41376413962' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='148.71382212756' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='149.30889574556' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='152.5985174261' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='154.37515172517' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='156.69598798186' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='159.07067261279' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='161.30157465431' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='163.71027081343' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='165.99903452491' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='168.27139360026' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='170.43633164748' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='173.1655322936' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='176.50326819985' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='178.62478268691' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='181.02822281315' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='183.44955438325' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='186.74672951232' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='190.58461048527' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='191.6583357004' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='194.01956621035' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='195.99063588673' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='198.3091931223' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='201.2147973712' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='203.71114317607' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='205.43712455201' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='208.33684825616' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='210.26852151054' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='213.08708750371' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='215.53816154232' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='217.92787849293' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='221.50498359606' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='222.73010494996' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td><td>	<!-- START Code Block for Chart kontrollbase -->
	<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"  width="240" height="130" id="kontrollbase">
		<param name="allowScriptAccess" value="always" />
		<param name="movie" value="http://demo01.kontrollbase.com//includes/FCF_Line.swf"/>		
		<param name="FlashVars" value="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_sent' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='310.76710841405' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='323.19135205351' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='336.99074895297' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='348.64046490331' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='359.42192765236' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='15.194473685767' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='25.438047974856' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='38.068659796936' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='48.962029042181' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='64.505915123157' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='75.927745265008' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='108.63845585139' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='123.18272910963' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='127.3554360775' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='153.89185920702' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='164.29856962798' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='176.23172501686' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='188.0027416665' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='199.33104957802' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='216.67349752421' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='230.50008745334' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='244.25201332425' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='255.48349614841' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='268.81010823512' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='317.86083952643' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='340.14483948661' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='357.59212631953' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='374.68548654462' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='472.46553312282' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='67.89359575809' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='72.789163200153' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='90.059832130933' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='104.54843776615' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='118.76787502201' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='135.39608997745' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='155.48558335342' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='165.35326789319' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='183.58083670551' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='198.22737393215' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='215.62276727925' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='232.62204358539' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='248.55374799311' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='272.03277721969' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='281.30054545095' color='ff6600' showName='0'/>
</graph>" />
		<param name="quality" value="high" />
		<embed src="http://demo01.kontrollbase.com//includes/FCF_Line.swf" FlashVars="&chartWidth=240&chartHeight=130&dataXML=<graph caption='Bytes_sent' xAxisName='' yAxisName='bytes/sec' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
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
<set name='08-26 00:05' value='310.76710841405' color='ff6600' showName='0'/>
<set name='08-26 01:00' value='323.19135205351' color='ff6600' showName='0'/>
<set name='08-26 02:05' value='336.99074895297' color='ff6600' showName='0'/>
<set name='08-26 03:00' value='348.64046490331' color='ff6600' showName='0'/>
<set name='08-26 04:00' value='359.42192765236' color='ff6600' showName='0'/>
<set name='08-26 05:05' value='15.194473685767' color='ff6600' showName='0'/>
<set name='08-26 06:00' value='25.438047974856' color='ff6600' showName='0'/>
<set name='08-26 07:00' value='38.068659796936' color='ff6600' showName='0'/>
<set name='08-26 08:00' value='48.962029042181' color='ff6600' showName='0'/>
<set name='08-26 09:05' value='64.505915123157' color='ff6600' showName='0'/>
<set name='08-26 10:00' value='75.927745265008' color='ff6600' showName='0'/>
<set name='08-26 11:15' value='108.63845585139' color='ff6600' showName='0'/>
<set name='08-26 12:39' value='123.18272910963' color='ff6600' showName='0'/>
<set name='08-26 13:00' value='127.3554360775' color='ff6600' showName='0'/>
<set name='08-26 14:10' value='153.89185920702' color='ff6600' showName='0'/>
<set name='08-26 15:00' value='164.29856962798' color='ff6600' showName='0'/>
<set name='08-26 16:00' value='176.23172501686' color='ff6600' showName='0'/>
<set name='08-26 17:00' value='188.0027416665' color='ff6600' showName='0'/>
<set name='08-26 18:00' value='199.33104957802' color='ff6600' showName='0'/>
<set name='08-26 19:00' value='216.67349752421' color='ff6600' showName='0'/>
<set name='08-26 20:00' value='230.50008745334' color='ff6600' showName='0'/>
<set name='08-26 21:00' value='244.25201332425' color='ff6600' showName='0'/>
<set name='08-26 22:00' value='255.48349614841' color='ff6600' showName='0'/>
<set name='08-26 23:05' value='268.81010823512' color='ff6600' showName='0'/>
<set name='08-27 00:05' value='317.86083952643' color='ff6600' showName='0'/>
<set name='08-27 01:00' value='340.14483948661' color='ff6600' showName='0'/>
<set name='08-27 02:00' value='357.59212631953' color='ff6600' showName='0'/>
<set name='08-27 03:00' value='374.68548654462' color='ff6600' showName='0'/>
<set name='08-27 04:15' value='472.46553312282' color='ff6600' showName='0'/>
<set name='08-27 05:45' value='67.89359575809' color='ff6600' showName='0'/>
<set name='08-27 06:05' value='72.789163200153' color='ff6600' showName='0'/>
<set name='08-27 07:05' value='90.059832130933' color='ff6600' showName='0'/>
<set name='08-27 08:00' value='104.54843776615' color='ff6600' showName='0'/>
<set name='08-27 09:00' value='118.76787502201' color='ff6600' showName='0'/>
<set name='08-27 10:05' value='135.39608997745' color='ff6600' showName='0'/>
<set name='08-27 11:15' value='155.48558335342' color='ff6600' showName='0'/>
<set name='08-27 12:00' value='165.35326789319' color='ff6600' showName='0'/>
<set name='08-27 13:05' value='183.58083670551' color='ff6600' showName='0'/>
<set name='08-27 14:00' value='198.22737393215' color='ff6600' showName='0'/>
<set name='08-27 15:05' value='215.62276727925' color='ff6600' showName='0'/>
<set name='08-27 16:10' value='232.62204358539' color='ff6600' showName='0'/>
<set name='08-27 17:05' value='248.55374799311' color='ff6600' showName='0'/>
<set name='08-27 18:35' value='272.03277721969' color='ff6600' showName='0'/>
<set name='08-27 19:05' value='281.30054545095' color='ff6600' showName='0'/>
</graph>" quality="high" width="240" height="130" name="kontrollbase" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
	<!-- END Code Block for Chart kontrollbase --></td></tr></tr></div></table></body></html>