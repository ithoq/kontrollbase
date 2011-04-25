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

<h1>General Client Requirements</h1>
    The following is required in order to install the Kontrollbase client scripts on a server for monitoring. This referes to the host portion of Kontrollbase, as in the servers that are monitored <strong>by</strong> kontrollbase, not the server that Kontrollbase is installed on. 

<p class="important">You do NOT have to install the full Kontrollbase application on every server that is being monitored - you ONLY have to install the client script on each server to be monitored. If you are confused please read <a href="http://en.wikipedia.org/wiki/Client-server" target="_blank">this document</a>.</p>

<h2>Software</h2>
<h3>Operating System</h3>
			      Currently Kontrollbase client scripts have been developed and tested to run on Redhat, Fedora, Centos, Ubuntu, and Debian servers. The client scripts might run on other versions of linux just fine, but those validation will come later. In the mean time if you want to know for sure that the client will work as intended, please choose one of the approved versions. The limiting factor for compatibility is SNMP OIDs, if you were wondering.<br>

<h3>Client Scripts</h3>
Please see the Installation section of the User Guide for information specific to each client OS. 

<h2>Hardware</h2>
    Kontrollbase clients are written for the Intel/AMD architecture. It has not been tested on other hardware - if you do get the client script to work on other hardware or on Linux/Unixes that are not mentioned please contact us and let us know. 

</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
