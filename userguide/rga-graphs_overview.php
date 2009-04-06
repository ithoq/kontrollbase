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

<h1>Kontrollbase Graphs</h1>
There are three pages that have graphs on them. 
<br><br>
<h2>Overview graphs</h2>
The overview page shows graphs that display overall historical data for the <strong>entire</strong> 
    database environment that you have setup. That means if you have 10 servers setup for monitoring, 
    then you will see overview graphs that summarize combined data for all hosts. ie: the connections 
graph will show the number of connections across all 10 servers. 

<h2>Host graphs</h2>
The host graphs are very much like the overview graphs. There are just many more of them. Going into detail 
about what each graph means is not in the scope of this document. There is a nice feature called "date range" 
which consists of two date boxes at the top of the Graphs tab. They are titled "Stat Date" and "End Date" - 
simply choose what date range you would like to view graphs for and then hit submit.

</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
