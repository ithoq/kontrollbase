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

</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
