<?php
  /**
   * Kontrollbase
   *
   * An open source MySQL monitoring and analytics application
   *
   * @package Kontrollbase
   * ID: $Id$
   * @copyright Copyright (c) 2009 Matt Reid, Kontrollbase LLC
   * @license http://kontrollsoft.com/kontrollbase/userguide/general-LICENSE.php
   * @link http://kontrollbase.com
   */

$nroot = substr_replace($root,"",-1);
print<<<HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kontrollbase 2.0.1 - MySQL Monitoring</title>

<link rel="stylesheet" type="text/css" href="$nroot/includes/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="$nroot/userguide/css/userguide-nofluff.css" />
<link rel="stylesheet" type="text/css" href="$nroot/includes/extjs/resources/css/ext-all.css" />
<link rel="stylesheet" type="text/css" href="$nroot/includes/extjs/resources/css/xtheme-slate.css" />
HEAD;

echo google_analytics();

print<<<HEAD
<script type="text/javascript" src="$nroot/includes/extjs/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="$nroot/includes/extjs/ext-all.js"></script>
<script type="text/javascript" src="$nroot/includes/extjs/states.js"></script>

<script type="text/javascript">
  Ext.onReady(function(){
		var win;
		if(!win){
		  win = new Ext.Window({
		    applyTo:'news-window',
			layout:'fit',
			width:580,
			height:400,
			closeAction:'hide',
			plain: true,
			
			items: new Ext.TabPanel({
			  applyTo: 'news-tabs',
			      autoTabs:true,
			      activeTab:0,
			      deferredRender:false,
			      border:false
			      }),
			
			buttons: [
				  {
				  text: 'Continue',
				      handler: function(){
				      var redirect = '$nroot/index.php/main';
				      window.location = redirect;
				    }
				  }]
			});
		}
		win.show(this);
	      });
</script>
</head>
<body>
<div id="news-window" class="x-hidden">

    <div class="x-window-header">Kontrollbase Announcements</div>
    <div id="news-tabs">
HEAD;

print "
$news
</div>
</div>
</body>
</html>";



?>