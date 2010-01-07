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

<h1>Server Scripts Install Guide</h1>
    These are the scripts that automate data collection from the client servers, analyze that data, insert the data into the database and then generate reports on that data. The web application will not display any data if these scripts are not setup to run correctly. 

<h2>Server Scripts Installation</h2>
    The server scripts - also known as the polling, reporting, 
and analytics scripts - are a number of Perl scripts 
that all work together to gather data from the clients 
and do interesting things with that data.<br>
<br>
<strong>Script Functions</strong>
<ul>
    <li>Analyze XML data from the client scripts</li>
<li>Generate performance tuning and security reports</li>
<li>Generate alerts as needed</li>
<li>Insert historical data into the various schema tables</li>
</ul>

<strong>Install steps</strong>
<ul>
<li>First things first, we need to install some Perl modules if you do not already have them on your system. Several of them are included in the bin/ directory along with the server scripts. In my example below I install those using RPM. You may choose to do otherwise, such as using CPAN. 
  <ul> 
	 <li><a href="http://search.cpan.org/~msergeant/XML-Parser-2.36/Parser.pm" target="_blank">XML::Parser</a></li>
  <li><a href="http://search.cpan.org/~dbrian/XML-SimpleObject-0.53/SimpleObject.pm" target="_blank">XML::SimpleObject</a></li>
  <li><a href="http://search.cpan.org/~timb/DBI/DBI.pm" target="_blank">DBI</a></li>
	 <li><a href="http://dag.wieers.com/rpm/packages/perl-XML-SimpleObject/">RPM for XML::SimpleObject</a></li>
	 <li><a href="http://dag.wieers.com/rpm/packages/perl-Math-Calc-Units/">RPM for Math::Calc::Units</a></li>
  </ul>
	 <em>Using Yum on Redhat/Fedora/Centos to install modules:</em>
<code>shell> yum install perl-DBI perl-XML-Parser perl-XML-LibXML</code>
	 <em>Using rpm to install the modules that are not available in the standard repository:</em>
 <code>ROOT-(0)> ls -al
total 404
-rwxr-xr-x 1 apache apache   6395 Mar 18 03:40 kontroll-alerter-5.0.x_linux-x86-2.0.1.pl
-rwxr-xr-x 1 apache apache  20130 Mar 18 03:40 kontroll-client-5.0.x_linux-x86-2.0.1.pl
-rwxr-xr-x 1 apache apache 114556 Mar 18 03:40 kontroll-reporter-5.0.x_linux-x86-2.0.1.pl
-rwxr-xr-x 1 apache apache   5144 Mar 18 03:40 kontroll-server_loop-5.0.x_linux-x86-2.0.1.pl
-rwxr-xr-x 1 apache apache  47862 Mar 18 03:40 kontroll-stats-gather-5.0.x_linux-x86-2.0.1.pl
-rw-r--r-- 1 root   root    37686 Mar  9  2007 perl-Crypt-DES-2.05-3.2.el5.rf.i386.rpm
-rw-r--r-- 1 root   root    31096 Mar  9  2007 perl-Math-Calc-Units-1.06-1.el5.rf.noarch.rpm
-rw-r--r-- 1 root   root    98284 Mar 10  2007 perl-Net-SNMP-5.2.0-1.2.el5.rf.noarch.rpm
-rw-r--r-- 1 root   root    16522 Mar  9  2007 perl-XML-SimpleObject-0.53-1.2.el5.rf.noarch.rpm
drwxr-xr-x 8 apache apache   4096 Mar 18 03:40 SRC
drwxr-xr-x 4 apache apache   4096 Mar 18 05:02 tmp
drwxr-xr-x 3 apache apache   4096 Mar 18 03:45 xml

ROOT-(0)> rpm -ivh perl-Crypt-DES-2.05-3.2.el5.rf.i386.rpm 
warning: perl-Crypt-DES-2.05-3.2.el5.rf.i386.rpm: Header V3 DSA signature: NOKEY, key ID 6b8d79e6
Preparing...                ########################################### [100%]
   1:perl-Crypt-DES         ########################################### [100%]

ROOT-(0)> rpm -ivh perl-Net-SNMP-5.2.0-1.2.el5.rf.noarch.rpm 
warning: perl-Net-SNMP-5.2.0-1.2.el5.rf.noarch.rpm: Header V3 DSA signature: NOKEY, key ID 6b8d79e6
Preparing...                ########################################### [100%]
   1:perl-Net-SNMP          ########################################### [100%]

ROOT-(0)> rpm -ivh perl-XML-SimpleObject-0.53-1.2.el5.rf.noarch.rpm 
warning: perl-XML-SimpleObject-0.53-1.2.el5.rf.noarch.rpm: Header V3 DSA signature: NOKEY, key ID 6b8d79e6
Preparing...                ########################################### [100%]
   1:perl-XML-SimpleObject  ########################################### [100%]

ROOT-(0)> rpm -ivh perl-Math-Calc-Units-1.06-1.el5.rf.noarch.rpm 
warning: perl-Math-Calc-Units-1.06-1.el5.rf.noarch.rpm: Header V3 DSA signature: NOKEY, key ID 6b8d79e6
Preparing...                ########################################### [100%]
   1:perl-Math-Calc-Units   ########################################### [100%]
ROOT-(root@node0)-(/var/www/html/kontrollbase/bin)-ROOT
ROOT-(0)> 
</code>
</li>

<li>You don't need to move any files anywhere. 
We're just going to add information to the crontab for a couple of scripts.</li>
    <li>The reporting code generally is good to run every hour, 
or more if you don't need new reports every hour. Keep in mind that the more often it is run, 
the more data you will be putting into your kontrollbase database every X minutes. 
So, multiply the number of hosts by the size of the report (approximately 10K bytes) 
then multiplied by the number of reports per day and you'll see what I mean.</li>

    <li>We can run the scripts as the root user (bad idea) or as a dedicated user. Let's name it "kontrollbase" for consistency.</li>
<code>ROOT-(0)> useradd -m kontrollbase 
ROOT-(0)> passwd kontrollbase 
Enter new UNIX password: 
Retype new UNIX password: 
passwd: password updated successfully
</code>
<li>Then we'll put the correct entries in the /etc/crontab file - 
you can also use the user's crontab if you want. 
I like the system crontab because it's eaier to see all of the 
jobs in one file than in multiple user's files.</li>
<li>Here are my /etc/crontab entries.</li>
<code>ROOT-(0)> cat /etc/crontab
SHELL=/bin/bash
PATH=/sbin:/bin:/usr/sbin:/usr/bin
MAILTO=root
HOME=/

# run-parts
01 * * * * root run-parts /etc/cron.hourly
02 4 * * * root run-parts /etc/cron.daily
22 4 * * 0 root run-parts /etc/cron.weekly
42 4 1 * * root run-parts /etc/cron.monthly

#Kontrollbase client server polling script
*/5 * * * * kontrollbase cd /var/www/html/kontrollbase/bin/ && /var/www/html/kontrollbase/bin/kontroll-server_loop-5.0.x_linux-x86-2.0.1.pl > /dev/null 2>&1

#Kontrollbase data analysis and report processing script
02 * * * * kontrollbase  cd /var/www/html/kontrollbase/bin/ && /var/www/html/kontrollbase/bin/kontroll-reporter-5.0.x_linux-x86-2.0.1.pl > /dev/null 2>&1

#Kontrollbase alerting processing and notification script
15 08 * * * kontrollbase cd /var/www/html/kontrollbase/bin/ && /var/www/html/kontrollbase/bin/kontroll-alerter-5.0.x_linux-x86-2.0.1.pl > /dev/null 2>&1

#Kontrollbase query-cache preload script to speed up logins
*/30 * * * * root cd /var/www/html/kontrollbase/bin/ && /var/www/html/kontrollbase/bin/kontroll-query_cache_preload.pl > /dev/null 2>&1
25 01 * * * root cd /var/www/html/kontrollbase/bin/ && /var/www/html/kontrollbase/bin/kontroll-overview_daily.pl > /dev/null 2>&1
</code>
<li>Notice that we are running those two scripts as the user "kontrollbase".
You will want to change that if you decided to call the user something else,
or if you are running them as root (not recommended).</li>

<li>Here I have used the FULL PATH to each script - this is required. 
You cannot modify the $PATH variable to compensate for this - there are
various reasons that don't need to be explained in the scope of this document. 
Modify those if you are installing into a location <strong>other</strong> 
than <em>/var/www/html/kontrollbase</em> for a Redhat server.</li>

<li>There you see that the server loop script runs every 5 minutes - 
so we're collecting client data every 5 minutes.</li>

<li>Then on the second minute of every hour the reporting script gets run. 
Making it run faster is not recommended, as mentioned above. 
Save your crontab file after inserting those lines.</li>

<li>There you also see that the alert/notification script runs every day at 8:15am - 
if you want alerts more often feel free to change that. Personally I don't need to be
reminded of an alert every hour if it can't be addressed until we schedule a MySQL restart
during maintenance hours. ie: if I get an alert at 8:15am when my work day starts then I can address
the easy ones (accounts that need security settings changed, buffer sizes changed, etc) but the 
ones that require a service restart have to wait until off hours and I don't need to know about those
every hour since I was already notified at the start of the workday.
</li>

This is important when you're dealing with hundreds of hosts and the reporter can take 
X minutes to go though and process each host's information. This is where CPU speed 
comes into play - the faster you can finish the 
better. 

    In addition,  this leaves the DBA time to respond to a critical alert before the next 
hourly report comes around.

    Note: there's no sense in making it run more often since the alerts get inserted by the 
reporting script,  which also runs every hour.</li>
</ul>



</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
