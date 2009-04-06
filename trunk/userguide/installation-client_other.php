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

<h1>Kontrollbase Client setup process on Redhat Servers</h1>
    These instructions apply to the following Linux flavors: Redhat, Redhat Enterprise, Fedora, and Centos. In fact, most Linux'es that use Yum or Up2Date will see this document as useful. This has been tested on RHEL5 and Fedora 7,8,9.<br><br>
    <p class="important">
<strong>Important:</strong>&nbsp; The following Perl modules are required to be on each client server.
If you don't have them installed the client script will fail to run. The first example installs one
required module. Repeat as needed for the other modules. If they are not available on apt-get you can
<strong>always</strong> get them on CPAN.<br><br>
<strong>Perl-5 Modules: </strong>
<kbd><a href="http://search.cpan.org/~dtown/Net-SNMP-5.2.0/lib/Net/SNMP.pm" target="_blank">Net::SNMP</a>, 
<a href="http://perldoc.perl.org/Getopt/Long.html" target="_blank">Getopt::Long</a>, 
<a href="http://perldoc.perl.org/POSIX.html" target="_blank">POSIX</a>, 
<a href="http://perldoc.perl.org/Sys/Hostname.html" target="_blank">Sys::Hostname</a>, 
<a href="http://search.cpan.org/~timb/DBI/DBI.pm" target="_blank">DBI</a>, 
<a href="http://perldoc.perl.org/Time/HiRes.html" target="_blank">Time::HiRes</a>
</kbd>.</p>

<h2>1. Install SNMP and SNMPd using yum / up2date</h2>
Here we will install the apt-get version of SNMP and SNMPd so that Kontrollbase can query the client server's OS information. 
<code>ROOT-(0)> apt-get install snmp snmpd
Reading package lists... Done
Building dependency tree       
Reading state information... Done
The following NEW packages will be installed:
  snmp snmpd
0 upgraded, 2 newly installed, 0 to remove and 0 not upgraded.
Need to get 231kB of archives.
After this operation, 1008kB of additional disk space will be used.
Get:1 http://us.archive.ubuntu.com intrepid-updates/main snmp 5.4.1~dfsg-7.1ubuntu6.1 [156kB]
Get:2 http://us.archive.ubuntu.com intrepid-updates/main snmpd 5.4.1~dfsg-7.1ubuntu6.1 [74.5kB]
Fetched 231kB in 1s (147kB/s)
Preconfiguring packages ...
Selecting previously deselected package snmp.
(Reading database ... 125559 files and directories currently installed.)
Unpacking snmp (from .../snmp_5.4.1~dfsg-7.1ubuntu6.1_i386.deb) ...
Selecting previously deselected package snmpd.
Unpacking snmpd (from .../snmpd_5.4.1~dfsg-7.1ubuntu6.1_i386.deb) ...
Processing triggers for man-db ...
Setting up snmp (5.4.1~dfsg-7.1ubuntu6.1) ...
Setting up snmpd (5.4.1~dfsg-7.1ubuntu6.1) ...
 * Starting network management services:
</code>

<h2>2. Modify the config file</h2>
We only need the most basic setup for snmpd. If you already have snmp running on your client server(s) then make sure the host settings reflect the correct read-only community string for said client server so that Kontrollbase can properly poll the system information using a local-listening snmpd.
<code>ROOT-(0)> cd /etc/snmp/
ROOT-(0)> cp snmpd.conf snmpd.conf.orig
ROOT-(0)> echo "rocommunity public" > snmpd.conf
ROOT-(0)> /etc/init.d/snmpd restart
 * Restarting network management services:                                                                                                                                                          [ OK ]
</code>

<h2>3. Create Kontrollbase system user on client server and set password</h2>
If your server is setup to use a non-passwd style authentication scheme then go ahead and add the required user in the other manner. We'll only discuss the system passwd/shadow authentication method here.
<code>ROOT-(0)> useradd -m kontrollbase
ROOT-(0)> passwd kontrollbase
Enter new UNIX password:
Retype new UNIX password:
passwd: password updated successfully
</code>

<h2>4. Login remotely, create ssh-key and then copy public key to authorized_keys file</h2>
<code>ROOT-(0)> ssh kontrollbase@192.168.0.105
kontrollbase@192.168.0.105's password:
$ ssh-keygen -t dsa
Generating public/private dsa key pair.
Enter file in which to save the key (/home/kontrollbase/.ssh/id_dsa):
Created directory '/home/kontrollbase/.ssh'.
Enter passphrase (empty for no passphrase):
Enter same passphrase again:
Your identification has been saved in /home/kontrollbase/.ssh/id_dsa.
Your public key has been saved in /home/kontrollbase/.ssh/id_dsa.pub.
</code>
<br>
Here you will want to get the id_dsa.pub or id_sha.pub key from the user you're running Kontrollbase as on the Kontrollbase server, and paste that key into the kontrollbase client servers's user authorized_keys file. Then we'll set the proper permissions on the file to ensure we can use it for keybased authentication.
<code>$ emacs .ssh/authorized_keys (note: paste the key into this file)
$ chmod 644 .ssh/authorized_keys
</code>

<h2>5. Login again to make sure ssh key is working correctly.</h2>
Using ssh from the Kontrollbase server, login to the Kontrollbase client server that we're working on.
<code>ROOT-(0)> ssh kontrollbase@192.168.0.105
Linux human 2.6.27-11-generic #1 SMP Thu Jan 29 19:24:39 UTC 2009 i686
Last login: Wed Mar  4 18:56:49 2009 from node1
</code>

<h2>6. copy the kontrollbase client script to the host</h2>
Using the scp command, copy the Kontrollbase client script to the server that we're working on. You have to put the script into the user's home directory - no where else.
<code>
ROOT-(root@node1)-(/var/www/html/kontrollbase/bin)-ROOT
ROOT-(0)> scp kontroll-client-5.0.x_linux-x86.pl kontrollbase@192.168.0.105:.
kontroll-client-5.0.x_linux-x86.pl                                                                                                                                      100%   19KB  19.4KB/s   00:00   
</code>

<h2>7. Install perl modules if needed<h2>
See note at the top of this page if you need to know what this step is about.
<code>$ apt-get install libnet-snmp-perl
Reading package lists... Done
Building dependency tree       
Reading state information... Done
Suggested packages:
  libcrypt-des-perl libdigest-hmac-perl libdigest-sha1-perl libio-socket-inet6-perl
The following NEW packages will be installed:
  libnet-snmp-perl
0 upgraded, 1 newly installed, 0 to remove and 0 not upgraded.
Need to get 112kB of archives.
After this operation, 532kB of additional disk space will be used.
Get:1 http://us.archive.ubuntu.com intrepid/main libnet-snmp-perl 5.2.0-1 [112kB]
Fetched 112kB in 1s (72.5kB/s)          
Selecting previously deselected package libnet-snmp-perl.
(Reading database ... 125704 files and directories currently installed.)
Unpacking libnet-snmp-perl (from .../libnet-snmp-perl_5.2.0-1_all.deb) ...
Processing triggers for man-db ...
Setting up libnet-snmp-perl (5.2.0-1) ...
</code>

<h2>8. Test the client script without flags</h2>
<br><img src="images/kontrollbase-client-dryrun.png"><br><br>

Note: If you get the same output as above, that means your client server is ready to be polled by the Kontrollbase server. Later we will test the script with the correct MySQL flags.
<br><br>

<h2>9. Symlink the cnf file</h2>
We need the cnf file to be in the same place on all servers - since Kontrollbase was designed for Redhat servers we're going to symlink the MySQL cnf file to the Redhat location - it's ok, this is a better place for it :)
<code>--(0)> sudo ln -s /etc/mysql/my.cnf /etc/my.cnf</code>

<h2>10. Run the client script with MySQL testing flags</h2>
Run the client with the help flag to get the default options. This way you can tell if you need to specify things differently.
<code>--(0)> ./kontroll-client-5.0.x_linux-x86.pl --help
####################################
kontroll-client_linux-x86.pl
Gets OS and MySQL stats, outputs XML
http://kontrollsoft.com
package version: 2.0
####################################
--help        = this message

--snmp-host        = snmp host address
--snmp-port        = snmp port
--snmp-retries     = snmp retries
--snmp-rocomminity = snmp rocommunity
--snmp-timeout     = snmp timeout
--snmp-version     = snmp version
--mysql-user       = mysql username
--mysql-pass       = mysql password
--mysql-port       = mysql port
--mysql-db         = mysql database
--mysql-host       = mysql host
                
defaults if variables not specified
snmp-host:        localhost
snmp-port:        161
snmp-rocommunity: public
snmp-version:     1
snmp-timeout:     5
snmp-retries:     2
mysql-user:       root
mysql-pass:       <blank>
mysql-port:       3306
mysql-db:         mysql
mysql-host:       127.0.0.1
</code>

Then run the script with the user we created on the server for Kontrollbase


</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
