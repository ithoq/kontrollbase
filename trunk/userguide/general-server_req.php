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

<h1>General Server Requirements</h1>
    The following is required in order to install Kontrollbase on a server. This referes to the web application (webapp) portion of Kontrollbase, not the servers that are monitored by Kontrollbase.

<h2>Software</h2>
<h3>Operating System</h3>
    Currently Kontrollbase has been developed and tested to run on Redhat, Fedora, and Centos. It might run on other versions of linux just fine, but those validation will come later. In the mean time if you want to know for sure that the application will work as intended, please choose one of the approved versions.<br>

<h3>Application Software</h3>
<a href="http://php.net" target="_blank">PHP 5</a><br>
<ul>
<li>php-xml</li>
<li>php-mysql</li>
<li>php-mbstring</li>
</ul>
    <a href="http://apache.org" target="_blank">Apache Webserver</a><br><br>
<a href="http://perl.org" target="_blank">Perl 5.0 or greater</a><br>
<ul>
<li><a href="http://search.cpan.org/~msergeant/XML-Parser-2.36/Parser.pm" target="_blank">XML::Parser</a></li>
<li><a href="http://search.cpan.org/~dbrian/XML-SimpleObject-0.53/SimpleObject.pm" target="_blank">XML::SimpleObject</a></li>
<li><a href="http://search.cpan.org/~timb/DBI/DBI.pm" target="_blank">DBI</a></li>
</ul>
<p class="important">You can use other web server software like lighttpd but we have not tested Kontrollbase on anything other than Apache2. If you have success with it on other webservers please let us know.</p>

<h2>Hardware</h2>
    Kontrollbase is written for the Intel/AMD architecture. It has not been tested on other hardware - if you do get it to work please contact us and let us know. Scaling the hardware and separating the stack is only required for very large installations where many hundreds of servers are being monitored. While it never hurts to have more system resources, it can be frustrating or slow with too little system resources. The majority of the processing is on the webapp side since it is responsible for displaying the SVG graphs, generating PDF reports from XML, and analyzing overall server data. The poller,reporting, and alerting processes are serial, not parallel, so it does require more CPU than RAM, and disk usage is relatively little for that side of the application. The general requirements are as follows when assuming you are running the full LAMP stack on one server. You can get away with less if you split the web and database to separate servers. In additon, we make it easy to scale the database to separate servers for READ/WRITE queries.  See the <a href="perf-scaling_options.php">scaling document</a> for more info. 

<ul>
<strong>1-50 Servers</strong>
    <li>CPU: Dual 1gz / Single 2gz</li>
   <li>RAM: 1GB</li>
</ul>

<ul>
<strong>51-100 Servers</strong>
   <li>CPU: Dual 2gz</li>
   <li>RAM: 2GB</li>
</ul>

<ul>
<strong>100-250 Servers</strong>
   <li>CPU: Dual 3gz / Quad 1.8ghz</li>
   <li>RAM: 4GB</li>
</ul>

<ul>
<strong>250+ Servers</strong>
   <li>CPU: Quad 2.4ghz+</li>
   <li>RAM: 8GB</li>
</ul>

</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
