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

<h1>Kontrollbase Client Setup the Experimental Way</h1>
    This method's instructions are different from the other clients. It's experimental because it requires opening up more ports between the Kontrollbase server and the client servers. However, it does simplify several things. Only consider using this method if you are behind a good firewall and your feel comfortable with the differnces in security, which I will go over below.

<h2>Standard Approach Explained</h2>
    The normal client script install has you install the client script on each server, 
then the kontrollbase polling server contacts that script over SSH (port 22), 
which is an encrypted stream, and the script outputs XML which is saved on the polling server for later analysis.
    When the script is contacted over SSH it polls SNMPd via port 161 on the localhost, 
then contacts MySQL on port 3306 on the localhost - which defaults to it connecting via a local unix socket. <br><br>
<strong>Benefits</strong>
<ul>
    <li>Aside from the remote SSH connection, we are doing all client data gathering on the localhost - so no sensitive data is being transferred over an unencrypted network connection. 
<li>Data 


</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
