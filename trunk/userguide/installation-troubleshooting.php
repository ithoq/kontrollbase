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

<h1>Troubleshooting</h1>
    Installation and runtime errors can occur. Sometimes these are not errors with the application, sometimes it is the underlying setup of your server or operating system. Here are the most common errors that I've seen.
<br><br>
<a name="php"></a>
<h2>PHP Errors</h2>
<h3>1. Script timeout issue</h3>
<code>Fatal error: Maximum execution time of 30 seconds exceeded in includes/dompdf/include/style.cls.php</code>

<em>Solution</em><br>
You can solve this by increasing the "max_execution_time" in your php.ini file.
See the<a href="http://php.net" target="_blank">PHP documentation</a> for more detailed information.
<code>;;;;;;;;;;;;;;;;;;;
; Resource Limits ;
;;;;;;;;;;;;;;;;;;;

max_execution_time = 30     ; Maximum execution time of each script, in seconds
</code>
<br>
<h3>2. Script memory error</h3>
<code>PHP Fatal error:  Allowed memory size of 33554432 bytes exhausted</code>

<em>Solution</em><br>
You can solve this by increasing the "memory_limit" in your php.ini file.
See the <a href="http://php.net" target="_blank">PHP documentation</a> for more detailed information. 
  <code>memory_limit = 16M      ; Maximum amount of memory a script may consume (16MB)
</code>
<br>
<h3>3. DomPDF file error: Failed opening required include/domdocument.cls.php</h3>
From the DomPDF page: "This error occurs when the version of PHP that you are using does not have the DOM extension enabled. You can check which extensions are enabled by examning the output of phpinfo().

There are a couple of ways that the DOM extension could have been disabled. DOM uses libxml, so if libxml is not present on your server then the DOM extension will not work. Alternatively, if PHP was compiled with the '--disable-dom' switch or the '--disable-xml' switch, DOM support will also be removed. You can check which switches were used to compile PHP with phpinfo()." See: <a href="http://www.digitaljunkies.ca/dompdf/faq.php#dom" target="_blank">http://www.digitaljunkies.ca/dompdf/faq.php#dom</a> for more info.
<br>
<br>
<a name="apache"></a>
<h2>Apache Errors</h2>
<h3>1. Directory permissions</h3>
<code>[Tue Mar 17 15:37:06 2009] [error] [client 192.168.0.103] (13)Permission denied: access to /kontrollbase/includes/pages/overview.php denied, referer: http://192.168.0.23/kontrollbase/</code>
OR you might see this type of error
<code>An Error Was Encountered
Directory '/includes/pages' is NOT writeable
</code>

<em>Solution</em>
You can solve this by correcting the permissions on the kontrollbase installation directory. 
You need the following directories to be owned and writeable by the webserver user. In Redhat/Fedora, 
for example, the Apache webserver is user and group apache:apache. So, to fix this we will 
run the following commands. Replace "/var/www/html/kontrollbase" with the directory you installed the
webapp to if it is different.
<code>ROOT-(0)> chmod 1775 /var/www/html/kontrollbase/includes/pages
ROOT-(0)> chmod 1775 /var/www/html/kontrollbase/includes/graphs
ROOT-(0)> chmod 1775 /var/www/html/kontrollbase/system/logs
ROOT-(0)> chmod 1775 /var/www/html/kontrollbase/system/cache
</code>
<br>
<br>
<a name="debug"></a>
<h2>Reading the debug logs</h2>
<h3>Server scripts debug log</h3>
<code>$root/system/logs/sys_debug.log</code>
This is the default location for that file. To read it just open that file up in a text editor,
or you can `tail -f <file>` it in a console and watch what the server scripts
are doing in realtime. It contains a vast amount of useful information for troubleshooting.
<br><br>
<h3>Webapp debug log file</h3>
Assuming you have the log setting enabled to 4 for the webapp, you will be able to read the debug logs.
That setting is locatd in "system/application/config/config.php" and stated as such: 
<code>$config['log_threshold'] = 4;</code> 
The options are as follows:
<code>|--------------------------------------------------------------------------
| Error Logging Threshold
|--------------------------------------------------------------------------
|
| If you have enabled error logging, you can set an error threshold to 
| determine what gets logged. Threshold options are:
| You can enable error logging by setting a threshold over zero. The
| threshold determines what gets logged. Threshold options are:
|
|0 = Disables logging, Error logging TURNED OFF
|1 = Error Messages (including PHP errors)
|2 = Debug Messages
|3 = Informational Messages
|4 = All Messages
|
| For a live site you'll usually only enable Errors (1) to be logged otherwise
| your log files will fill up very fast.
</code>

Once you have it set to '4' you can then read the logs in the system/logs directory.
    They are sorted by date. As such:
    <code>ROOT-(root@node1)-(/var/www/html/kontrollbase/system/logs)-ROOT
    ROOT-(0)> l
total 5784
    -rw-r--r-- 1 apache apache     123 2008-06-27 02:44 index.html
    -rw-rw-rw- 1 apache apache  449721 2009-03-03 20:05 log-2009-03-03.php
    -rw-rw-rw- 1 apache apache  298699 2009-03-04 17:03 log-2009-03-04.php
    -rw-rw-rw- 1 apache apache 2192493 2009-03-10 23:57 log-2009-03-10.php
    -rw-rw-rw- 1 apache apache  972105 2009-03-11 23:03 log-2009-03-11.php
    -rw-rw-rw- 1 apache apache  178440 2009-03-12 23:38 log-2009-03-12.php
    -rw-rw-rw- 1 apache apache  183547 2009-03-13 23:34 log-2009-03-13.php
    -rw-rw-rw- 1 apache apache  204525 2009-03-14 23:39 log-2009-03-14.php
    -rw-rw-rw- 1 apache apache  178350 2009-03-15 23:46 log-2009-03-15.php
    -rw-rw-rw- 1 apache apache  344716 2009-03-16 23:53 log-2009-03-16.php
    -rw-rw-rw- 1 apache apache  858934 2009-03-17 16:13 log-2009-03-17.php
    -rw-rw-rw- 1 apache apache    8934 2009-03-02 15:14 sys_debug.log
    -rw-rw-rw- 1 apache apache     934 2009-03-02 15:15 sys_error.log
    ROOT-(root@node1)-(/var/www/html/kontrollbase/system/logs)-ROOT
    ROOT-(0)>
</code>
To read it just open that file up in a text editor,
or you can tail the current file (choose the right date) it in a console 
and watch what the webapp is in realtime. These files contain a vast amount 
of useful information for troubleshooting.
<br><br>
<a name="perl"></a>
<h2>Perl Errors</h2>
<h3>1. Can't locate XML/Parser.pm in @INC</h3>
You need to install a perl module

<code>ROOT-(0)> yum install perl-XML-Parser
Setting up Install Process
Parsing package install arguments
Resolving Dependencies
--> Running transaction check
---> Package perl-XML-Parser.x86_64 0:2.34-6.1.2.2.1 set to be updated
--> Finished Dependency Resolution

Dependencies Resolved

=============================================================================
 Package                 Arch       Version          Repository        Size 
=============================================================================
Installing:
 perl-XML-Parser         x86_64     2.34-6.1.2.2.1   base              210 k

Transaction Summary
=============================================================================
Install      1 Package(s)         
Update       0 Package(s)         
Remove       0 Package(s)         

Total download size: 210 k
Is this ok [y/N]: y
Downloading Packages:
(1/1): perl-XML-Parser-2. 100% |=========================| 210 kB    00:00     
Running rpm_check_debug
Running Transaction Test
Finished Transaction Test
Transaction Test Succeeded
Running Transaction
  Installing: perl-XML-Parser              ######################### [1/1] 

Installed: perl-XML-Parser.x86_64 0:2.34-6.1.2.2.1
Complete!</code>
<br>
<h3>2. Can't locate XML/SimpleObject.pm in @INC</h3>
You need a perl module! I have included the Redhat/Centos v5 RPM files in the bin/ 
directory of the application. If you are running another OS, please find the correct RPMs for
your version of Linux. 
<code>ROOT-(0)> cd /var/www/html/kontrollbase/bin
ROOT-(0)> yum install perl-XML-LibXML libxml2
ROOT-(0)> rpm -ivh perl-XML-LibXML-Common-0.13-3.2.el5.rf.i386.rpm
ROOT-(0)> rpm -ivh perl-XML-SimpleObject-0.53-1.2.el5.rf.noarch.rpm</code>




</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
