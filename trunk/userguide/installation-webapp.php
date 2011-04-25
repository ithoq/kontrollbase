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

<h1>Webapp Install Guide</h1>
First, make sure you have <a href="general-server_req.php" target="_self">the pre-requisites installed</a> for the server. 
<br><br>
<h2>Getting the database ready</h2>You will need to create the schema and users on your database.<br><br><h3>On the database server</h3><code>shell> mysql -uroot -p --host=localhost<br>mysql> create database kontrollbase;<br>mysql> grant all on kontrollbase.* to 'kb_admin'@'localhost' identified by 'password';<br>mysql> grant all on kontrollbase.* to 'kb_app'@'localhost' identified by 'password';<br>mysql> grant select,super,process,replication client on *.* to 'kontrollbase'@'webapp_server' identified by 'password';</code>
<br>
<h3>System Commands</h3>Make sure all files are owned by the webserver user. The following command assumes you installed to /var/www/html/kontrollbase and that the webs-server is running under the 'apache' user and group. The last step is to import the schema file into the kontrollbase database you created at the start.<br><br>
<code>shell> cd /var/www/html/kontrollbase<br>shell> chown -R apache:apache *<br>shell> mysql --user=kb_admin -p --host=localhost kontrollbase < /var/www/html/kontrollbase/install/sql/kontrollbase-schema-2.0.1.sql
</code>
<br>
<h2>Completing installtion</h2>
After that is complete, go ahead and continue with the installation wizard.
<code>example: http://localhost/kontrollbase/install.php</code>
<br>
<h2>Post Install</h2>
Once the installation script completes you will be redirected to the login page. The default user and password is 'admin'/'password'. You will want to change your password in the System Management -> Users tab.

</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
