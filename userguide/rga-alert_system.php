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

<h1>The alerting process</h1>
    The alert process is controlled by one script, the kontroll-alerter script. It runs, by default, once per day. It's a relatively simple script that gathers data from the alerts_current table. If an alert is active, is not ignored, and not acknowledged then the alerter script will send off an email to the system_alerts_email address (you set that email address in the System Management tab). 
<br><br>
<h2>Viewing alerts</h2>
There is one way to manage alerts and several ways to view them. You can view alerts in the Critical Environment Alerts pane on the overview page. You can view alerts in the Alerts tab on each host's page. You can also see detailed information about alerts in the Perf Report for each host. 
<br><br>
<h2>Managing alerts</h2>
    There is only one way to manage alerts. You do this in the Alert Management tab on the Overview page. There are three ways to make alerts go away. You can solve the problem via the method mentioned in the Perf Report, you can ignore an alert by pressing the <img src="../includes/images/Volume-Normal-Red-16x16.png"> button next to the the alert you want to ignore, or you can acknowledge the alert by pressing the <img src="../includes/images/Pause-Normal-Red-16x16.png"> button next to the alert. 
<ul>
<li>Ignoring an alert implies that you never want to get that alert brought up. It's saying "I will never fix this so leave me alone."</li>
<li>Acknowledging an alert implies that you will fix the error but you don't want to be notified about it anymore.</li>
<li>Fixing the alert is the best method, and you can get the solution in the Perf Report.</li>
</ul>

</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
