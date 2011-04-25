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

<h1>Scaling Options</h1>
Scaling the Kontrollbase environment is relatively simple. I'll give some simple 
examples but you should consider reading a book 
<a href="http://www.amazon.com/Art-Capacity-Planning-Scaling-Resources/dp/0596518579/ref=sr_1_2?ie=UTF8&s=books&qid=1237760013&sr=8-2" target="_blank">
like this</a>.
<br><br>
So, there are three components to the application.
<ul>
<li>1. Webapp</li>
<li>2. Database</li>
<li>3. Server Side Scripts</li>
</ul>

<h2>Scaling the webapp</h2>
The webapp scaled like any other PHP/Apache application. You can set it up for 
Load Balancing and High Availability. Basically you could use LVS/Ldirector or an F5, Ace, etc to 
split the port 80 traffic to seprate apache servers running the webapp. Easy.
<br><br>
If you want to use Memcache with the webapp you can edit the system/application/config/config.php file 
and set <code>$config['memcache_enabled']= TRUE;</code> then put in the IP and Port for their respective 
option variables, and you're all set. Now the webapp will make use of Memcache. 
<br><br>
    I recommend using eAccelerator as well, as this speeds up the app considerably: http://eaccelerator.net

<h2>Scaling the database</h2>
The database is MySQL, and hopefully if you are using Kontrollbase you are a DBA that knows 
what they are doing, and thus knows how to scale MySQL appropriately. This is where I have
already done the hard part for you when it comes to scaling support. You may have noticed in
the config files that there are provisions for a READ database and a
WRITE database. This is so we can split the query traffic between master and slave database
servers. So, you setup replication between a master and slave MySQL server for the kontrollbase
database, edit the config files appropriately and you're good to go.

<h2>Scaling the server side scripts</h2>
Currently there is no built in method to scale this aspect of the application. Perhaps there will
be in the future. Stay tuned. I will note that the best way to scale this part is vertically - with
a fast, low latency network, and high CPU clock speed with a big cache. The scripts are not 
mult-threaded (yet) so the faster one CPU can work on processing the incoming XML from the clients,
the faster you will be able to finish the client host polling process.


<h2>Improving the speed of login</h2>
Added in 2.0.1-revision 205 is a script called "kontroll-query_cache_preload.pl". This script runs the nine queries that generate the overview graphs during the login process. The purpose of this is to preload the query cache with the data that is generally requested from the database during the login process. This proves useful once the Kontrollbase schema gets larger over time. On a 8GB dataset it has been tested to decrease page-load time during login by 50%. You can optionally set this script to run via /etc/crontab with the other servers scripts with the following line:
<br>
<code>#Kontrollbase query-cache preload script to speed up logins
*/30 * * * * root cd /var/www/html/kontrollbase/bin/ && /var/www/html/kontrollbase/bin/kontroll-query_cache_preload.pl > /dev/null 2>&1
</code>

</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
