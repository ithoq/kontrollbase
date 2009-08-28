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

<h1>System Management</h1>
System Management is where you manage the following:
<ul>
<li>System Information</li>
<li>Hosts</li>
<li>Users</li>
<li>Clients</li>
</ul> 

<h2>System Information</h2>
System information contains the following: 
<ul>
<li>The hostname of your kontrollbase server</li>
<li>The email address to send alerts to<li>
<li>Active hosts</li>
<li>Inactive hosts</li>
<li>Number of users and clients</li>
<li>Data size for the kontrollbase stats and reports tables</li>
</ul>
<br><br>
<h2>Hosts, Users, Clients</h2>
These three tabs are all the same in usage and behavior. You can view, add, edit, and 
delete your hosts, users, and clients. It works like this at the most basic level:
<br><br>
<h3>Hosts</h3>
These are the servers you are monitoring with kontrollbase. The add/edit form allows you 
to specify settings for each server. The MySQL parts pertain to the authentication for the
kontrollbase client script when it connects to gather information. The SNMP sections pertain 
to authentication for the kontrollbase client script when it connects to the SNMP daemon to 
gather operating system level data.
<br><br>
<h3>Users</h3>
These are the users that are allowed to login to the webapp. They can be admin/system/client level users. 
These role tiers are important to understand.
<ul>
<li>Admin: these users can do everything which includes adding/editing/deleting hosts,users,clients. They
have access to everything in the webapp. An example of an admin user is a DBA.</li>
<li>System: these users can see everything, but not add/edit/delete anything. An example of a standard user
is the DBA manager, or a system engineer; they need access for reports and graphs but shouldn't be changing
settings or alering anything.</li>
<li>Client: these users can only see the hosts that are associated with their client name. An example would
be a client "foo", and they have two servers "node1.foo.com" and "node2.foo.com". Your kontrollbase app 
manages more than just the foo client, you manage other clients named "bar" and "baz". Clearly you don't
want the foo client users to see bar and baz server reports so you limit that user's login to the "foo" client 
association. Likewise with the "bar" and "baz" users that you create.</li>
</ul>
<br>
<h3>Clients</h3>
Clients are a way to organize servers. Let's say your company manages database servers for 10 clients, you
should make a unique client name for each of your clients, then you associated each database server with
the proper client. Not much else to say about that. 

<p class="important">
<strong>Note about deleting a client</strong><br>
When you delete a client it will automatically delete all severs associated with the client, all reports for 
those servers, all statistics for those servers, all alerts for those servers, and all users associated with 
the client.</p>

</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
