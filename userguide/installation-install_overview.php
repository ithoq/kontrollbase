<?php
  /** 
   * @package Kontrollbase
   * ID: $Id$ 
   * @link http://kontrollsoft.com
   */

include("doc_header.php");
?>

<!-- START CONTENT -->
<div id="content">

<h1>Installation Process Overview</h1>
    There are three main components to Kontrollbase. 
<strong>The webapp, the client scripts, and the server scripts.</strong> 
Each component needs to be installed in a specific sequence. 
<br><br>
<ul>
    <li>If you have a large database environment you might be 
interested in the ability to add hosts in bulk. 
If that is the case please see <a href="admin-bulk.php" target="_self">this page</a>.</li> 
<li>If you are scaling your environment by splitting the webapp and the backend
MySQL database onto separate servers, see <a href="perf-scaling_options.php" taget="_self">this page</a>.</li>
</ul>
<br>
<p class="important">Note: You only have to setup the Webapp and the Server Scripts one time, but you 
do have to setup the Client Script on each client host that you want to be monitored.</p>

<h2>Reference: Location of Files</h2>
Here is a brief explanation of where the files are that you will be dealing with. 
You'll see these once you download the application tar.gz file and then unpack it. 

<strong>Naming conventions</strong>
<em>example: $root/bin/kontroll-stats-gather-5.0.x_linux-x86.pl</em>
<ul>
<li>$root is the main directory of the unpacked application. ex: <em>kontrollbase-2.0.1</em></li>
<li>"5.0.x" references that the script is intended for the various MySQL versions 5.0. 
Other options include 5.1 and 4.1 if those scripts are included with the software distribution. Currently the 5.0 script works with 5.1 versions and 4.x is not supported.</li>
<li>"linux" refers to the operating system the script supports, in this case Linux. 
Other options would be solaris, windows, aix, etc. You would need to choose the correct 
client script based on the operating system your client server runs.</li> 
<li>"x86" is the processor architecture. In this case x86 supports the Intel/Amd i386 32bit 
and 64bit architectures. Other choices would be ppc, sparc, power, etc.</li>
<li>"$release" refers to the version of Kontrollbase, like 2.0.1</li>
</ul>

<strong>Directories</strong>
The following directories within your installation location have special permissions requirements. 
The installer will check for the webserver permissions requirements but since it does not know
what user you will have running the server scripts, it will not check for that - so please be aware
of this when you are setting up the user that will run the scripts as they write out their debug/error
information to the /system/logs directory.
<ul>
 <li>system/cache -> this needs to be writeable by the webserver process user.</li>
 <li>system/logs -> this needs to be writeable by both the webserver and the kontrollbase script user.</li>
 <li>system/application/config -> this needs to be writeable by the webserver process user.</li>
 <li>includes/ -> this needs to be writeable by the webserver process user.</li> 
 <li>includes/pages -> this needs to be writeable by the webserver process user.</li>
</ul>

<strong>Files</strong>
<ul>
 <li>Pre-requisite check script. Run this prior to installing anything to ensure you have the required modules for perl and php installed.
 <ul>
   <li>$root/bin/kontroll-check_reqs.php</li>
 </ul>
 </li>
 <li>Webapp files
 <ul>
   <li>MVC database config: $root/system/application/config/database.php</li>
   <li>MVC general config: $root/system/application/config/config.php</li>
   <li>initial schema (sql file): $root/sql/kontrollbase-schema-$release.sql</li>
   <li>user guide: $root/userguide</li>
  </ul>
 </li>
 <li>Client files
  <ul>
   <li>client script (called by looper): $root/bin/kontroll-client-5.0.x_linux-x86.pl</li> 
  </ul>
 </li>
 <li>Server scripts
  <ul>
   <li>reporting script (cron hourly): $root/bin/kontroll-reporter-5.0.x_linux-x86-$release.pl</li>
   <li>host polling looper (cron 5 minutes): $root/bin/kontroll-server_loop-5.0.x_linux-x86-$release.pl</li> 
   <li>alert processor (cron 5 minutes): $root/bin/kontroll-alerter-5.0.x_linux-x86-$release.pl</li>
   <li>XML statistics processor (called by looper): $root/bin/kontroll-stats-gather-5.0.x_linux-x86-$release.pl</li>
  </ul>
 </li>
</ul>
<h2>Checking requirements</h2>
Before you do anything you will want to run the pre-requisite check script that looks for various PHP and Perl
modules to see if they are installed. You need all of the required modules to be found by this script or the
application will fail to run. You can find the script in the $root/bin/ directory and it is run as follows:
<code>shell> php kontroll-check_reqs.php
Starting...
Beggining PHP prerequisite checks
Prerequisite dom located
Prerequisite mbstring located
Prerequisite mysql located
Prerequisite xml located
All required PHP modules are available.
Beginning Perl prerequisite checks
Prerequisite XML/Parser.pm located
Prerequisite XML/SimpleObject.pm located
Prerequisite DBI.pm located
Prerequisite /Math/Calc/Units.pm located
All required Perl modules are available.</code>

<a name="simple"></a><h2>The Simplest Method for Installing Requirements</h2>
The easiest way to do this is to use Redhat/Centos for your server. This is because RPMforge has all of the required modules as RPM files. You may find that Ubuntu/Debian has most or all of the packages in their various repositories but we don't keep very up to date on that platform since most enterprise servers that we encounter run Redhat and, as such, the application is built and developed on that OS. So, here are the instructions for the quickets method of installing all required dependencies.<br>
<h3>Install the RPMforge repository RPM for your particular OS</h3>
This is required since most of the RPMs are not found in the standard OS repositories.<br>
<code>http://dag.wieers.com/rpm/FAQ.php#B</code>

<h3>Install MySQL client and server</h3>
Not required if you are installing MySQL from alternate means<br>
<code>yum -y install mysql mysql-server</code>

<h3>Install Apache and PHP requirements</h3>
You might already have Apache installed but you may not have the other PHP modules installed.<br>
<code>yum -y install httpd php php-mysql php-mbstring php-xml</code>

<h3>Install Perl and Perl modules requirements</h3>
You probably already have Perl installed but you definitely need the other modules.<br>
<code>yum -y install perl perl-DBD-mysql perl-DBI perl-Digest-HMAC perl-XML-LibXML perl-XML-Simple perl-XML-Parser perl-XML-SimpleObject perl-XML-LibXML-Common perl-Crypt-DES perl-Math-Calc-Units perl-Net-SNMP </code>

<h3>For Reporter-CLI functionality if desired</h3>
<code>yum -y install sqlite perl-DBD-SQLite</code>

<h3>Check that all requirements are met</h3>
Go to the bin/ directory and run the php script for checking requirements.<br>
<code>ROOT-(root@localhost)-(/usr/local/src/kontrollbase-read-only/bin)-ROOT
ROOT-(0)> php ./kontroll-check_reqs.php 
Starting...
Beggining PHP prerequisite checks
Prerequisite dom located
Prerequisite mbstring located
Prerequisite mysql located
Prerequisite xml located
All required PHP modules are available.
Beginning Perl prerequisite checks
Prerequisite XML/Parser.pm located
Prerequisite XML/SimpleObject.pm located
Prerequisite DBI.pm located
Prerequisite /Math/Calc/Units.pm located
All required Perl modules are available.</code>

<h2>Webapp Installation</h2>
    The webapp is simply the visual interaction with the application. 
Think of it as the display layer that makes all of the data able to be used and interpreted.<br>
<br>
<strong>It offers the following features</strong>
<ul>
    <li>Overall environment (all servers) graphs of historical data</li>
    <li>Overall data summary reporting</li>
    <li>Overall critical alerts - non critical alerts are featured on a per-host basis to keep the overall environment interface clean</li>
    <li>Overall RSS feeds for data and alerts</li>
    <li>Per-host graphing, including over 50 graphs for very detailed visual analysis</li>
    <li>Per-host alerts - featuring crital,warning,information level alert states</li>
    <li>Per-host performance and security tuning reports</li>
    <li>Per-host RSS feeds for data and alerts</li>
    <li>Per-host monitoring of replication status if server is setup as a slave</li>
    <li>Tiered authentication levels: client, standard, admin</li>
    <li>Admin functions: add/edit/delete hosts, clients, application users</li>
    <li>System management: alert email templates, system email address, etc</li>
    <li>And much more</li>
</ul>

<strong>Install steps</strong>
<ul>
<li>Download the tar.gz file and then decompress the Kontrollbase tar.gz file into your webroot directory.</li>
<li>I recommend installing the program to /var/www/html/kontrollbase on Redhat or /var/www/kontrollbase on Ubuntu/Debian.</li>
<li>See <a href="installation-webapp.php" taget="_self">this page for full instructions.</a></li>
</ul>

<h2>Client Script Installation</h2>
The client scripts are installed on a per-host basis. 
This means that each client host has it's own copy of the client script. 
There is only one file needed on each client host so the process is relatively simple. 
The added bonus is that this process can be scripted to automate installation 
across multiple servers - if you are familiar with automation scripting that is :)<br>
<br>
<strong>The client scripts gather the following data from the client server</strong>
<ul>
    <li>OS load: 1,5,15 minute</li>
<li>OS Swap: total, free</li>
<li>OS RAM: total, used</li> 
<li>OS CPU: user,system,idle</li> 
<li>MySQL: user information - security profiling</li> 
<li>MySQL: all global variables</li> 
<li>MySQL: all global status information</li> 
<li>MySQL: process/connections count</li>
<li>MySQL: table and schema statistics</li>
<li>MySQL: engine statistics</li>
<li>MySQL: configuration (cnf) file</li>
</ul>

<strong>Install steps are dependent upon the type of Linux you are using on the client server</strong>
<ul>
<li>Redhat, Fedora, Centos: <a href="installation-client_redhat.php" target="_self">click here</a></li>
<li>Ubuntu, Debian: <a href="installation-client_ubuntu.php" target="_self">click here</a></li>
<li>Other: <a href="installation-client_other.php" target="_self">click here</a></li>
<li>Experimental: <a href="installation-client_experimental.php" target="_self">click here</a></li>
</ul>

<h2>Server Scripts Installation</h2>
The server scripts are the backend code that provides the life-blood of Kontrollbase. 
Without these scripts running at periodic intervals we won't have any data to display 
for your client servers. They're the worker ants in the equation. Written in Perl, they provide the following services:
<ul>
<li>Data collection from client servers</li>
<li>Data analytics processing</li>
<li>Report generation for performance and security tuning.</li>
</ul>

<h3>Installation instructions</h3>
Please <a href="installation-server.php" target="_self">see this page for detailed instructions</a>.
</ul>

</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
