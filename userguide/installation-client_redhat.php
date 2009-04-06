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
    These instructions apply to the following Linux flavors: Redhat, Redhat Enterprise, 
    Fedora, and Centos. In fact, most Linux'es that use Yum or Up2Date will see this 
    document as useful. This has been tested on RHEL5 and Fedora 7,8,9.<br><br>
    <p class="important">
<strong>Important:</strong>&nbsp; The following Perl modules are required to be on 
each client server. If you don't have them installed the client script will fail to run. 
The first example installs one required module. Repeat as needed for the other modules. 
If they are not available on apt-get you can get them on CPAN.
<br><br>
<strong>Perl-5 Modules: </strong>
<kbd><a href="http://search.cpan.org/~dtown/Net-SNMP-5.2.0/lib/Net/SNMP.pm" target="_blank">Net::SNMP</a>, 
<a href="http://perldoc.perl.org/Getopt/Long.html" target="_blank">Getopt::Long</a>, 
<a href="http://perldoc.perl.org/POSIX.html" target="_blank">POSIX</a>, 
<a href="http://perldoc.perl.org/Sys/Hostname.html" target="_blank">Sys::Hostname</a>, 
<a href="http://search.cpan.org/~timb/DBI/DBI.pm" target="_blank">DBI</a>, 
<a href="http://perldoc.perl.org/Time/HiRes.html" target="_blank">Time::HiRes</a>
</kbd>.</p>

<h2>1. Setup MySQL user for Kontrollbase on Client Server</h2>
<p class="important">
    <strong>Note</strong>: You need to create the "kontrollbase" user on 
    <strong>every client server</strong> that Kontrollbase will be monitoring.
The account needs the following permissions: SELECT,PROCESS,SUPER,REPLICATION CLIENT on every 
single schema that will be monitored.
</p>
<code>--(1)> mysql -uroot -p
Enter password: 
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 4332
Server version: 5.0.67-GA-Community

Type 'help;' or '\h' for help. Type '\c' to clear the buffer.

mysql> grant SELECT, PROCESS, SUPER, REPLICATION CLIENT on *.* to 'kontrollbase'@'localhost' identified by 'password-here';
Query OK, 0 rows affected (0.00 sec)

mysql> flush privileges;
Query OK, 0 rows affected (0.00 sec)
</code>


<h2>2. Install SNMP and SNMPd using yum / up2date</h2>
Here we will install the yum version of SNMP and SNMPd so that Kontrollbase can 
query the client server's OS information. 
<code>ROOT-(0)> yum install net-snmp
Setting up Install Process
Parsing package install arguments
Resolving Dependencies
--> Running transaction check
---> Package net-snmp.i386 1:5.4-18.fc7 set to be updated
--> Finished Dependency Resolution

Dependencies Resolved

=============================================================================
 Package                 Arch       Version          Repository        Size 
=============================================================================
Installing:
 net-snmp                i386       1:5.4-18.fc7     updates           711 k

Transaction Summary
=============================================================================
Install      1 Package(s)         
Update       0 Package(s)         
Remove       0 Package(s)         

Total download size: 711 k
Is this ok [y/N]: y
Downloading Packages:
(1/1): net-snmp-5.4-18.fc 100% |=========================| 711 kB    00:22     
Running rpm_check_debug
Running Transaction Test
Finished Transaction Test
Transaction Test Succeeded
Running Transaction
  Installing: net-snmp                     ######################### [1/1] 

Installed: net-snmp.i386 1:5.4-18.fc7
Complete!
</code>
For more information about setting up SNMPd: 
<a href="http://www.linuxhomenetworking.com/wiki/index.php/Quick_HOWTO_:_Ch22_:_Monitoring_Server_Performance" target="_blank">click here</a>

<h2>3. Install the perl modules</h2>
I've included the Redhat/Centos 5 RPM files you need for the client. 
You can scp those to the client from the kontrollbase sever if you like.
<code>ROOT-(1)> rpm -ivh perl-Crypt-DES-2.05-3.2.el5.rf.i386.rpm
ROOT-(0)> rpm -ivh perl-Net-SNMP-5.2.0-1.2.el5.rf.noarch.rpm</code>

<h2>4. Modify the config file</h2>
We only need the most basic setup for snmpd. If you already have snmp 
running on your client server(s) then make sure the host settings reflect 
the correct read-only community string for said client server so that 
Kontrollbase can properly poll the system information using a local-listening snmpd.
<code>ROOT-(0)> cd /etc/snmp/
ROOT-(0)> cp snmpd.conf snmpd.conf.orig
ROOT-(0)> echo "rocommunity public" > snmpd.conf
ROOT-(0)> /etc/init.d/snmpd restart
 * Restarting network management services:                                                                                                                                                          [ OK ]
</code>

<h2>5. Create Kontrollbase system user on client server and set password</h2>
If your server is setup to use a non-passwd style authentication scheme then go 
ahead and add the required user in the other manner. We'll only discuss the 
system passwd/shadow authentication method here.
<code>ROOT-(0)> useradd -m kontrollbase
ROOT-(0)> passwd kontrollbase
Enter new UNIX password:
Retype new UNIX password:
passwd: password updated successfully
</code>

<h2>6. Login remotely, create ssh-key and then copy public key to authorized_keys file</h2>
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
Here you will want to get the id_dsa.pub or id_sha.pub key from the user you're 
running Kontrollbase as on the Kontrollbase server, and paste that key into the 
kontrollbase client servers's user authorized_keys file. Then we'll set the 
proper permissions on the file to ensure we can use it for keybased authentication.
<code>$ emacs .ssh/authorized_keys (note: paste the key into this file)
$ chmod 644 .ssh/authorized_keys
</code>

<h2>7. Login again to make sure ssh key is working correctly.</h2>
Using ssh from the Kontrollbase server, login to the Kontrollbase client server that we're working on.
<code>ROOT-(0)> ssh kontrollbase@192.168.0.105
Linux human 2.6.27-11-generic #1 SMP Thu Jan 29 19:24:39 UTC 2009 i686
Last login: Wed Mar  4 18:56:49 2009 from node1
</code>

<h2>8a. Copy the kontrollbase client script to the host OR see step 6b</h2>
Using the scp command, copy the Kontrollbase client script to the server 
that we're working on. You have to put the script into the user's home directory - no where else.
<code>ROOT-(root@node1)-(/var/www/html/kontrollbase/bin)-ROOT
ROOT-(0)> scp kontroll-client-5.0.x_linux-x86.pl kontrollbase@192.168.0.105:.
kontroll-client-5.0.x_linux-x86.pl                                                                                                                                      100%   19KB  19.4KB/s   00:00   
</code>

<h2>8b. Copy the kontrollbase client RPM file to the host and install it.</h2>
At some point here there will be an RPM file for the client, but not in the 2.0.1 release.
<code>ROOT-(0)> scp kontroll-client-5.0.x_linux_x86-2.0.1.i386.rpm kontrollbase@192.168.0.105:.
kontroll-client-5.0.x_linux_x86-2.0.1.i386.rpm                                                                              100% 1693     1.7KB/s   00:00    
ROOT-(0)>
</code>
Then install the RPM
<code>ROOT-(0)> rpm -ivh kontroll-client-5.0.x_linux_x86-2.0.1.i386.rpm 
Preparing...                ########################################### [100%]
   1:kontroll-client        ########################################### [100%]
</code>

<h2>9. Install perl modules if needed</h2>
See note at the top of this page if you need to know what this step is about.
<code>ROOT-(0)> yum install perl-Net-SNMP
Setting up Install Process
Parsing package install arguments
Resolving Dependencies
--> Running transaction check
---> Package perl-Net-SNMP.noarch 0:5.2.0-1.fc6 set to be updated
--> Processing Dependency: perl(Digest::HMAC) for package: perl-Net-SNMP
--> Processing Dependency: perl(Crypt::DES) for package: perl-Net-SNMP
--> Processing Dependency: perl(Digest::SHA1) for package: perl-Net-SNMP
--> Running transaction check
---> Package perl-Crypt-DES.i386 0:2.05-4.fc7 set to be updated
---> Package perl-Digest-SHA1.i386 0:2.11-1.2.1 set to be updated
---> Package perl-Digest-HMAC.noarch 0:1.01-15 set to be updated
--> Finished Dependency Resolution

Dependencies Resolved

=============================================================================
 Package                 Arch       Version          Repository        Size 
=============================================================================
Installing:
 perl-Net-SNMP           noarch     5.2.0-1.fc6      fedora            108 k
Installing for dependencies:
 perl-Crypt-DES          i386       2.05-4.fc7       fedora             18 k
 perl-Digest-HMAC        noarch     1.01-15          fedora             12 k
 perl-Digest-SHA1        i386       2.11-1.2.1       fedora             49 k

Transaction Summary
=============================================================================
Install      4 Package(s)         
Update       0 Package(s)         
Remove       0 Package(s)         

Total download size: 187 k
Is this ok [y/N]: y
Downloading Packages:
(1/4): perl-Digest-HMAC-1 100% |=========================|  12 kB    00:00     
(2/4): perl-Digest-SHA1-2 100% |=========================|  49 kB    00:00     
(3/4): perl-Crypt-DES-2.0 100% |=========================|  18 kB    00:00     
(4/4): perl-Net-SNMP-5.2. 100% |=========================| 108 kB    00:00     
Running rpm_check_debug
Running Transaction Test
Finished Transaction Test
Transaction Test Succeeded
Running Transaction
  Installing: perl-Digest-SHA1             ######################### [1/4] 
  Installing: perl-Crypt-DES               ######################### [2/4] 
  Installing: perl-Digest-HMAC             ######################### [3/4] 
  Installing: perl-Net-SNMP                ######################### [4/4] 

Installed: perl-Net-SNMP.noarch 0:5.2.0-1.fc6
Dependency Installed: perl-Crypt-DES.i386 0:2.05-4.fc7 perl-Digest-HMAC.noarch 0:1.01-15 perl-Digest-SHA1.i386 0:2.11-1.2.1
Complete!
</code>

<h2>10. Test the client script without flags</h2>
<br><img src="images/kontrollbase-client-dryrun.png"><br><br>

Note: If you get the same output as above, that means your client server is 
ready to be polled by the Kontrollbase server. Later we will test the script 
with the correct MySQL flags.
<br><br>

<h2>11. Run the client script with MySQL testing flags</h2>
Run the client with the help flag to get the default options. This way you 
can tell if you need to specify things differently.
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
mysql-pass:       [blank]
mysql-port:       3306
mysql-db:         mysql
mysql-host:       127.0.0.1
</code>

Then run the script with the user we created on the server for Kontrollbase

<h2>12. Then run the script with the user we created on the server for Kontrollbase</h2>
Pass the user and password to the script from the user we created on the client server. 
If the script outputs a long list of XML data and no errors the your client server is 
ready to be added to the host panel in Kontrollbase!

</div>
<!-- END CONTENT -->

<?php
include('doc_footer.php');
?>
