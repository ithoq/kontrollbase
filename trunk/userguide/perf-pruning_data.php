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

<h1>Data Pruning</h1>
    Depending on how many servers you are monitoring, 
and how long you have been monitoring them, 
you may find that you want to prune the historical data 
for your servers. You can do this on the system management 
page.
<br><br>
<h2>Why would I want to prune?</h2>
<ul>
<li>1. Graphs are taking way too long to generate.</li>
<li>2. Your kontrollbase database is under heavy load and performing poorly.</li>
<li>3. You have many months or years of data and don't need it for analysis.</li>
<li>4. You're bored and want to mess with things.</li>
</ul>
<br>
<h2>Tables Involved</h2>

<h3>Statistics Table</h3>
The statistics table is where all of the data gathered from your hosts
is stored. Typically there will be many thousands of rows of data - this is 
because one row is created for every host every 5 minutes. Generally each row 
will be anywhere from 5K to 15K (data and indexes). The row size depends on the
size of the cnf file, since that is collected from each host and stored as well. 
<br><br>
So, the stats table is where the data lives. Keep in mind that when you prune this
table you will be removing all historical data that the graphs depend on for graph
 generation. It will fill up again, at the rate of 1 row per host every X minutes, 
where X is the value that you have the server-loop script running from crontab.
<br><br>
<h3>Reporting Table</h3>
The reporting table is where the host Perf Reports are stored. One report per hour per 
server. The reports can be small or large, it all depends on what issues each report 
contains, so no average value to tell you about there. This table is a good place prune
first, as it does not impact any graph generation, and you probably don't need to keep 
an hourly report for each server for an entire year. 
<br><br>
<h2>How to prune</h2>
To actually prune the data you need to use a GUI tool like <a href="http://www.phpmyadmin.net/" target="_blank">PhpMyAdmin</a>
or, if you aren't a lazy mouse clicker, use the MySQL CLI. I'll give instructions for the CLI because if you can't figure out
a GUI client then you need to leave the data alone and not attempt to prune anything. There used to be a button in the
System Management tab to prune the data but it proved too tempting for users to click and thus removing the data without 
    understanding the process. It is actually a rather rare process to need to prune the data so we now use the manual pruning methods. You can prune the whole table or prune by date range. In the example below we show the whole table (via truncate) and then the by-date range method. You can only use one so don't just paste all four commands into the CLI. <br><br>
 <code>Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 244
 Server version: 5.0.84-log Source distribution
Type 'help;' or '\h' for help. Type '\c' to clear the buffer.
mysql> use kontrollbase;
mysql> truncate table server_statistics;
mysql> truncate table server_report;
mysql> delete from server_statistics where Creation_time between 'YYYY-MM-DD' and 'YYYY-MM-DD'; 
mysql> delete from server_report where creation_time between 'YYYY-MM-DD' and 'YYYY-MM-DD';
</code>
</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
