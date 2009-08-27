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

<h1>Google Analytics Support</h1>
As of version 2.0.1 revision 116, Kontrollbase has support for integration with Google Analytics. That means you can have GA gather usage information about your Kontrollbase installation. So if you are using it in a shared hosting environment, a distributed branch office setting, or just for your own needs, you will get some of the best usage analytics in the industry. 

<h2>Setting up your account</h2>
If you do not have a GA account you will need to sign up for one at the main site: <a href="http://analytics.google.com" target="_blank">http://analytics.google.com</a>. Once you do that you will have an account number. They look something like this "UA-xxxxxx-xx" where the x's are numbers. The setup process itself is very simple.
<br><br>
<ol>
<li>Open the system/application/config/config.php file</li>
<li>Locate the variable $config['google_uacct'] = "UA-xxxxxx-xx";</li>
<li>Replace the value with your account number</li>
<li>Save the file and you are done</li>
</ol>

</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
