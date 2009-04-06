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

<h1>Kontrollbase Reports</h1>
The reporting process is rather simple, or very complicated - depending on how you look at it. 
The reporting engine is complicated code that I won't discuss here. Suffice to say that it 
analyzes all of the MySQL internal server variables and status variables and then generates 
alerts (if necessary), and then a summary report of alerts,solutions,links and change controll 
steps to tune the server. 
<br><br>
<h2>Reading reports</h2>
When you are logged in and have selected a host to view, select the Perf Report tab. 
You will see the performance report for that server. Any alerts that are associated 
with the server will be in the report, along with a solution and various other bits 
of useful data. At the bottom of the report you will see a summary of changes that 
need to be made. You can also download a PDF file of the report at the bottom of that page. 
<br><br>
<h2>Troubleshooting reports</h2>
If you are not getting hourly reports or reports are not being generated at all then you 
need to check to make sure that the report script is running correctly. See 
<a href="installation-server.php" target="_self">the server scripts page</a> for more
information on that. In addition you can check 
<a href="installation-troubleshooting.php" target="_self">the troubleshooting page</a> to see
how to read the debug log file for the reporting script. 


</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
