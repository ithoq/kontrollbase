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

<h1>Adding In Bulk</h1>
Adding clients, users, and host servers in bulk can save a lot of time. I know that when
I roll out Kontrollbase to a new datacenter I won't be adding more than two servers or clients
by hand. I'll write a quick script to loop through a list of hostnames and IP addresses, and 
then execute some SQL for me. The less clicking and form submission the more time I have to 
do other things. When adding in bulk you will need to use the same user/pass that was setup
for the kontrollbase_w (write access) account, or the kontrollbase_admin account, or the
mysql root user. That said, here is the SQL for your needs.  
<br><br>
<h2>Clients</h2>
You will want to add your clients first. This is because each client has a unique ID, and
each host server is associated with a client ID. In addition, if your users are associated
with a client then you will need to know the proper client ID to give that user when executing 
your SQL. 
<br><br>
I won't be writing your automation script for you, but I will give you the SQL needed
for adding a client. Substitute your values in the query below. There is a UNIQUE constraint
on the server_client_name and server_client_email columns, so please keep that in mind. 

<code>INSERT INTO `kontrollbase`.`server_client` (
`id` ,
`server_client_name` ,
`server_client_email` ,
`server_client_phone` ,
`creation_time`
)
VALUES (
NULL , 'client_name_here', 'email_address@here.com', '000-000-0000', NOW( )
);
</code>

<h2>Users</h2>
Users have some important things to keep in mind during the creation process.
<ul>
<li>role_tier: 0 for admin, 1 for standard, 2 for client</li>
<li>server_client_id: the mapping for the above mentioned client ID</li>
</ul>
<code>INSERT INTO `kontrollbase`.`system_users` (
`id` ,
`system_user_name` ,
`system_user_pass` ,
`system_user_email` ,
`server_client_id` ,
`role_tier` ,
`creation_time`
)
VALUES (
NULL , 'user_name_here', MD5( 'user_pass_here' ) , 'user_email@here.com', '0', '0', NOW( )
);</code>

<h2>Hosts</h2>
Hosts require a lot of information. The column names are self explanatory. If you have questions on 
what to put in each column, see the <a href="admin-system_management.php" target="_self">sytem management page.</a>
Some things to remember:
<ul>
<li>server_type: 0 = production, 1 = staging, 2 = development</li>
<li>active: 0 = active, 1 = deactivated</li>
<li>if a server is not going to be associated with a client, set server_client_id = '0'</li>
<li>server_ipaddress and server_hostname are UNIQUE columns, so no two can have the same value.</li>
</ul>

<code>
INSERT INTO `kontrollbase`.`server_list` (
`id` ,
`active` ,
`server_client_id` ,
`server_type` ,
`server_is_slave` ,
`server_ipaddress` ,
`server_hostname` ,
`server_ssh_user` ,
`server_mysql_port` ,
`server_mysql_db` ,
`server_mysql_user` ,
`server_mysql_pass` ,
`server_mysql_host` ,
`server_snmp_local_address` ,
`server_snmp_port` ,
`server_snmp_rocommunity` ,
`server_snmp_version` ,
`threshold_queries_per_second` ,
`threshold_seconds_behind_master` ,
`creation_time`
)
VALUES (
NULL , '0', '0', '0', '0', 'ip_address_here', 'server_hostname_here', 
'kontrollbase', '3306', 'mysql', 'kontrollbase', 'mysql_password_here', 
'localhost', '127.0.0.1', '161', 'public', '1', '100', '3600', NOW( )
);</code>

</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
