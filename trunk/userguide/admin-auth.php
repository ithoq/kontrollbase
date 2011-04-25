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

<h1>Authentication and User Roles</h1>
Kontrollbase relies on session data to authenticate your login, and to allow you authorization to 
different parts of the application depending on your user role. All of the session data is stored
    server side in a database table so it's secure from being tampered with on the client side.<br><br>
<p class="important">You have to allow Javascript and Cookies in order to use Kontrollbase.</p>
<br><br>

<h2>User Roles - Authentication Tiers</h2>
There are three types of user accounts. These are only for the webapp, they do not apply to any other
part of the application. These role tiers are important to understand.
<ul>
<li>Admin: these users can do everything which includes adding/editing/deleting hosts,users,clients. They
have access to everything in the webapp. An example of an admin user is a DBA.</li>
   <li>System: these users can see everything, but not add/edit/delete anything. An example of a standard user
				is the DBA manager, or a system engineer; they need access for reports and graphs but shouldn't be changing
settings or alering anything.</li>
<li>Client: these users can only see the hosts that are associated with their client name. An example would
be a client "foo", and they have two servers "node1.foo.com" and "node2.foo.com". Your kontrollbase app 
manages more than just the foo client, you manage other clients named "bar" and "baz". Clearly you don't
want he foo client users to see bar and baz server reports so you limit that user's login to the "foo" client 
association. Likewise with the "bar" and "baz" users that you create.</li>
</ul>

</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
