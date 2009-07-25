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

<h1>VMware Virtual Appliance Install Guide</h1>
<h2>Download the appliance</h2>
If you don't already have the appliance you can get it here: 
<a href="http://kontrollsoft.com/software-downloads">http://kontrollsoft.com/software-downloads</a>.
 If you are having issues running it you might need to convert it from the .ova file format to whatever format 
you need for your player. If you need to convert it download the VMware converter: <a href="http://www.vmware.com/products/converter/">http://www.vmware.com/products/converter/</a>. 
<h2>VA specs</h2>
The virtual appliance has been setup with the following specs:<br>
<ul>
<li>CentOS 5.2 operating system</li>
<li>1024MB RAM</li>
<li>2 CPUs</li>
<li>8GB Disk</li>
<li>Static IP address: 192.168.0.20</li>
<li>OS User: root, Password: password</li>
<li>MySQL User: root, Password: password</li>
</ul>

<h2>Login to the VA</h2>
The VA was setup in our testing lab, and as such it runs on the 192.168.0.0/24 network. It has a static address of 192.168.0.20. You may need to change that for your specific network. I'm not going to get into setting OS settings or network settings for this because you should know how to do that already. If not, refer to the Redhat/Fedora/CentOS documentation.<br><br>
At the console you can login as 'root' with the password 'password'. Once you're in you can find the kontrollbase install at /var/www/html (which is a symlink to /usr/local/src/kontrollbase-googlecode). Apache and MySQL are setup to run at boot. At this time you probably want to set the root password for mysql and the os for your own needs since 'password' is not secure.<br><br>
<strong>If you change the IP address of the server you HAVE to change the config files for Kontrollbase to reference the new IP.</strong>

<h2>Changing the config files for Kontrollbase</h2>
As mentioned before, if you change the server IP then you need to change the Kontrollbase config files to reference the new IP. If you are not changing the IP of the server, skip this step. Files in question with the lines you need to change:<br>
<em>/var/www/html/config.php</em>
<code># Web Stuff - no trailing slash
WEB_ROOT=http://192.168.0.20</code>
<br><br>
<em>/var/www/html/system/application/config/config.php</em>
<code>$config['base_url']= "http://192.168.0.20/"; //USE TRAILING SLASH</code>

<h2>Login to Kontrollbase and setup basics</h2>
Now you should be set to login to the web interface. Using your browser of choice, go to the IP address: http://192.168.0.20/ or whatever you set the IP to. The login box should appear. User: admin , Password: password. Once you login you should go to the System Management -> Users tab and edit the admin user and set a new password. You'll notice that there is no data for the graphs to display, and no content for any of the other display areas. This is because the server install is fresh and you will need to setup your hosts. Generally speaking, once you have your hosts setup and the data collection is working - you will immediately see overview information. You will not see any graphs until after about a day of data collection, so don't think it's broken, it just takes a bit of time. <br><br>
    To setup the hosts you will want to refer to the other sections of documentation: <a href="installation-client_redhat.php">Client Installation</a>. Once your hosts are setup you can test that they are working by running the bin/kontroll-server_loop-5.0.x_linux-x86-2.0.1.pl script by hand - this way you will know if the kontrollbase server is connecting to the host clients correctly or see any errors that might occur.
 <br><br>
    You will also want to set the Kontrollbase system email. Very simple, just go to the System Management -> System tab and edit the necessary field. 

</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
