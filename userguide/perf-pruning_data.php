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
<h2>The System Management Method</h2>
    Login to the webapp and go to the System Management tab, 
and then the Data Management tab. There are two options for pruning data.
<br><br>
<h3>Statistics Table</h3>
The statistics table is where all of the data gathered from your hosts
is stored. Typically there will be many thousands of rows of data - this is 
because one row is created for every host every 5 minutes. Generally each row 
will be anywhere from 5K to 15K (data and indexes). The row size depends on the
size of the cnf file, since that is collected from each host and stored as well. 
<br><br>
So, the stats table is where the data lives. Keep in mind that when you prune this
table you will be removing all historical data that the graphs depend on for graph
generation. It will fill up again, at the rate of 1 row per host every 5 minutes. 
<br><br>
<h3>Reporting Table</h3>
The reporting table is where the host Perf Reports are stored. One report per hour per 
server. The reports can be small or large, it all depends on what issues each report 
contains, so no average value to tell you about there. This table is a good place prune
first, as it does not impact any graph generation, and you probably don't need to keep 
an hourly report for each server for an entire year. 
<br><br>
<h3>To Do</h3>
Keep in mind here that there are improvements to the process coming soon. Such as:
<ul>
<li>1. Date range pruning - only prune certain data</li>
<li>2. Auto pruning - scheduled table pruning</li>
<li>3. If you have other ideas, let us know.</li>
</ul>
</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
