<?php
  /** 
   * @package Kontrollbase
   * @author Matt Reid 
   * @link http://kontrollsoft.com
   */

include("doc_header.php");
?>

<!-- START CONTENT -->
<div id="content">

<h1>The Kontrollbase CLI Reporter</h1>
<p>Good news for everyone that has wanted the performance tuning abilities of Kontrollbase but didn&#8217;t want to install a centralized monitoring application for their MySQL database servers. Now the same performance tuning reports are available in a single script that can be run from the command line with results available in HTML, TXT, and XML formats. Download it now to get the best automated tuning analysis for your MySQL servers without any installation necessary. Soon I&#8217;ll be adding the analytics report from the webapp in addition to the current performance tuning report, so stay tuned for that in the next version.</p> 
<p>How it&#8217;s different than the regular Kontrollbase application:</p> 
<ul> 
<li>runs as a single script on any Linux or Unix server</li> 
<li>does not require a webserver</li> 
<li>does not require any schema importing or local MySQL database (aside from the database you&#8217;re analyzing)</li> 
<li>does not require a special operating system user</li> 
								   <li>does not offer the historical analysis features of the webapp (like % growth over time) as there is only the current data to analyze</li> 
<li>utilizes a singe SQLite schema file to operate and report on data.</li> 
</ul> 
								   <p>How it&#8217;s the same as the regular Kontrollbase application:</p> 
<ul> 
<li>has the same perl module requirements</li> 
<li>generates the same performance tuning reports</li> 
								   <li>combines the reporter, stats gather, and client code into one modified process</li> 
</ul> 

<h2>How to use the CLI script</h2>
The script is located in the /bin directory and named "kontroll-reporter-cli.pl". It requires the same perl modules as the main applications's client and server scripts. It also requires that you have SQLite installed on your system. You can install that via the OS's paackage management system or get it from <a href="http://www.sqlite.org/" target=_blank">http://www.sqlite.org</a>.<br><br>

For all of the settings you can specify the "--help" option on the command line and you will see the following explanation:
<code>ROOT-(0)> ./kontroll-reporter-cli.pl --help
#########################################################
Filename: kontroll-reporter-cli.pl
Kontrollbase Reporter CLI version
Copyright 2010-present Matt Reid - http://kontrollsoft.com
Kontrollbase package version: 2.1
#########################################################
!! Requires SQLite database application !!
!! Requires SQLite database file to run !!
SQLite file: kontroll-reporter-cli_sqlite3-alerts_def.db
#########################################################
--help        = this message

--snmp-host        = snmp host address
--snmp-port        = snmp port
--snmp-retries     = snmp retries
--snmp-rocomminity = snmp rocommunity
--snmp-timeout     = snmp timeout
--snmp-version     = snmp version
--mysql-user       = mysql username
--mysql-pass       = mysql password
--mysql-port       = mysql port
--mysql-socket     = mysql socket
--mysql-db         = mysql database
--mysql-host       = mysql host
--sqlite-file      = SQLite DB file

--output           = output style for report
                     [XML,HTML,TXT]

defaults if variables not specified
snmp-host:        localhost
snmp-port:        161
snmp-rocommunity: public
snmp-version:     1
snmp-timeout:     5
snmp-retries:     2
mysql-user:       root
mysql-pass:       <blank>
mysql-port:       3306
mysql-socket:     /var/lib/mysql/mysql.sock
mysql-db:         mysql
mysql-host:       localhost
sqlite-file:      ./kontroll-reporter-cli_sqlite3-alerts_def.db
output:           XML report output</code>

The help contents is subject to change so please refer to the actual script's output if you want the latest information. 

<strong>You must specify the --sqlite-file=<filename> for the CLI script to work. That file *should* be named "kontroll-reporter-cli_sqlite3-alerts_def.db" and is in the same location as the CLI script. If you are installing the script somewhere on the filesystem for some reason, please copy the sqlite file to a place that you can reference later, as you will need it every time the script it run. 

</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
