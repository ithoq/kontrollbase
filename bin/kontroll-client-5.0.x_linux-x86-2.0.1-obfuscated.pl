#! /usr/bin/perl
# THIS FILE IS NOT AS CURRENT AS THE NON-OBFUSCATED VERSION!!!!
# THIS FILE has passed through RJ's Perl Obfuscator v 1.9 2000/03/02 19:06:02

use strict;use warnings;use Net::SNMP;use Getopt::Long;use POSIX qw(strftime);use Sys::Hostname;use DBI;use Time::HiRes qw(gettimeofday tv_interval);use File::Find;my $g0n9=hostname;my $gk2m="kontroll-client_linux-x86.pl";my $hhg1="http://kontrollsoft.com";my $hdla="2.0";my $fd4i=strftime "%Y-%m-%d %H:%M:%S", localtime;sub aah{print '<?xml version="1.0" encoding="UTF-8"?>
	<!-- generator="'.$gk2m.'" -->
	<!-- website="'.$hhg1.'" -->
	<!-- package_ver="'.$hdla.'" -->
	<!-- copyright-notice "Copyright 2008, Matt Reid" -->
	<!-- license-type "BSD http://www.opensource.org/licenses/bsd-license.php" -->
	<kontrollbase version="2.0">
	  <server hostname="'.$g0n9.'">
	    <datetime>'.$fd4i.'</datetime>
';}sub aab{print '     </server>
	     </kontrollbase>
';}sub aaf{my $e85h=$_[0];print $e85h;aab();exit 1;}sub aad{my($g79h, $f2fn, $kb2e, $cejl, $g0bf, $bjn1)=@_;my($cf05, $cj6f)=Net::SNMP->session( -hostname=> "$g79h", -community=> "$kb2e", -port=> "$f2fn", -timeout=> "$g0bf", -retries=> "$bjn1" );if(!defined($cf05)){aaf("<error type=\"snmp\"><![CDATA[$cj6f]]></error>");}my $iepl='<item name="os_swap_total"><![CDATA[';my $hcdd='<item name="os_swap_free"><![CDATA[';my $c9ij='<item name="os_mem_total"><![CDATA[';my $f4cn='<item name="os_mem_used"><![CDATA[';my $db9e='<item name="os_load_1"><![CDATA[';my $gnam='<item name="os_load_5"><![CDATA[';my $ecdh='<item name="os_load_15"><![CDATA[';my $f94d='<item name="os_cpu_user"><![CDATA[';my $dhpe='<item name="os_cpu_system"><![CDATA[';my $igif='<item name="os_cpu_idle"><![CDATA[';my $cd9o='.1.3.6.1.4.1.2021.4.3.0';my $j6ap='.1.3.6.1.4.1.2021.4.4.0';my $dc72='.1.3.6.1.4.1.2021.4.5.0';my $dclp='.1.3.6.1.4.1.2021.4.6.0';my $cbjj='.1.3.6.1.4.1.2021.10.1.3.1';my $ch7g='.1.3.6.1.4.1.2021.10.1.3.2';my $fjp1='.1.3.6.1.4.1.2021.10.1.3.3';my $hma0='.1.3.6.1.4.1.2021.11.9.0';my $d3cj='.1.3.6.1.4.1.2021.11.10.0';my $d90c='.1.3.6.1.4.1.2021.11.11.0';my @g1pn=( $iepl, $hcdd, $c9ij, $f4cn, $db9e, $gnam, $ecdh, $f94d, $dhpe, $igif );my @hme4=( $cd9o, $j6ap, $dc72, $dclp, $cbjj, $ch7g, $fjp1, $hma0, $d3cj, $d90c );my $j64n=0;my $kf4b=undef;my @blgd=[];$blgd[$j64n]=[];foreach my $ej0o(@hme4){$kf4b=$cf05->get_request( -varbindlist=> [$ej0o] );if(!defined($kf4b)){$cj6f=$cf05->error;$cf05->close;aaf("<error type=\"snmp\"><![CDATA[SNMP: $cj6f]]></error>\n");}$blgd[$j64n][0]=$g1pn[$j64n];$blgd[$j64n][1]=$kf4b->{$ej0o};if($j64n < 4){$blgd[$j64n][1]=($blgd[$j64n][1] * 1024);}print "   ".$blgd[$j64n][0].$blgd[$j64n][1]."]]></item>\n";$j64n++;}$cf05->close;return 0;}sub aag{my($i7bd, $ifn3, $eglm, $k27l, $k8g6, $c5ck)=@_;my $gfa6="show global variables;";my $bhh5="show global status;";my $hdli="select count(SCHEMA_NAME) from INFORMATION_SCHEMA.SCHEMATA;";my $idaf="select count(TABLE_NAME) from INFORMATION_SCHEMA.TABLES;";my $genl="select sum(DATA_LENGTH) from INFORMATION_SCHEMA.TABLES;";my $j4ok="select sum(INDEX_LENGTH) from INFORMATION_SCHEMA.TABLES;";my $chp8="select count(ENGINE) from INFORMATION_SCHEMA.TABLES where ENGINE='InnoDB';";my $j7kh="select count(ENGINE) from INFORMATION_SCHEMA.TABLES where ENGINE='MyISAM';";my $cak1="show full processlist;";my $flg4="select sum(INDEX_LENGTH) from INFORMATION_SCHEMA.TABLES where ENGINE='InnoDB';";my $elag="select sum(INDEX_LENGTH) from INFORMATION_SCHEMA.TABLES where ENGINE='MyISAM';";my $kfjb="select sum(DATA_LENGTH) from INFORMATION_SCHEMA.TABLES where ENGINE='InnoDB';";my $e825="select sum(DATA_LENGTH) from INFORMATION_SCHEMA.TABLES where ENGINE='MyISAM';";my $ffm0="show slave status;";my $hijc="select User,Host from user where Select_priv='Y' and Insert_priv='Y' and Update_priv='Y' and Delete_priv='Y' and Create_priv='Y' and Drop_priv='Y' and Reload_priv='Y' and Shutdown_priv='Y' and Process_priv='Y' and File_priv='Y' and References_priv='Y' and Index_priv='Y' and Alter_priv='Y' and Show_db_priv='Y' and Super_priv='Y' and Create_tmp_table_priv='Y' and Lock_tables_priv='Y' and Execute_priv='Y' and Repl_slave_priv='Y' and Repl_client_priv='Y' and Create_view_priv='Y' and Show_view_priv='Y' and Create_routine_priv='Y' and Alter_routine_priv='Y' and Create_user_priv='Y' and Host != 'localhost' AND Host != '127.0.0.1';";my $dkbl="select * from user where Grant_priv='Y' and User != 'root';";my $b1a9="select * from user where User='root' and Host != 'localhost' AND Host != '127.0.0.1';";my $blbh="select * from user where Password='';";my $chj1="select * from user where User='';";my $ge7k="DBI:mysql:database=$k8g6;host=$c5ck;port=$eglm;mysql_socket=$k27l";my $k6g3=DBI->connect( $ge7k, $i7bd, $ifn3,{PrintError=> 0, RaiseError=> 0}) or aaf("<error type=\"mysql-connection-error\"><![CDATA[$DBI::errstr ]]></error>\n");my $j3nn=$k6g3->prepare($gfa6) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");while(my $j611=$j3nn->fetchrow_hashref){my $d6pp=$j611->{'Variable_name'};my $dbe3=$j611->{'Value'};print '   <item name="'.$d6pp.'"><![CDATA['.$dbe3."]]></item>\n";}$j3nn=$k6g3->prepare($bhh5) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");while(my $j611=$j3nn->fetchrow_hashref){my $d6pp=$j611->{'Variable_name'};my $dbe3=$j611->{'Value'};print '   <item name="'.$d6pp.'"><![CDATA['.$dbe3."]]></item>\n";}$j3nn=$k6g3->prepare($hdli) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");while(my $j611=$j3nn->fetchrow_hashref){my $d6pp=$j611->{'count(SCHEMA_NAME)'};print '   <item name="num_schema"><![CDATA['.$d6pp."]]></item>\n";}$j3nn=$k6g3->prepare($idaf) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");while(my $j611=$j3nn->fetchrow_hashref){my $d6pp=$j611->{'count(TABLE_NAME)'};print '   <item name="num_tables"><![CDATA['.$d6pp."]]></item>\n";}$j3nn=$k6g3->prepare($genl) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");while(my $j611=$j3nn->fetchrow_hashref){my $d6pp=$j611->{'sum(DATA_LENGTH)'};print '   <item name="length_data"><![CDATA['.$d6pp."]]></item>\n";}$j3nn=$k6g3->prepare($j4ok) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");while(my $j611=$j3nn->fetchrow_hashref){my $d6pp=$j611->{'sum(INDEX_LENGTH)'};print '   <item name="length_index"><![CDATA['.$d6pp."]]></item>\n";}$j3nn=$k6g3->prepare($chp8) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");while(my $j611=$j3nn->fetchrow_hashref){my $d6pp=$j611->{'count(ENGINE)'};print '   <item name="engine_count_innodb"><![CDATA['.$d6pp."]]></item>\n";}$j3nn=$k6g3->prepare($j7kh) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");while(my $j611=$j3nn->fetchrow_hashref){my $d6pp=$j611->{'count(ENGINE)'};print '   <item name="engine_count_myisam"><![CDATA['.$d6pp."]]></item>\n";}$j3nn=$k6g3->prepare($cak1) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");my $jodb=0;while(my $j611=$j3nn->fetchrow_hashref){$jodb++;}$j3nn=$k6g3->prepare($flg4) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");while(my $j611=$j3nn->fetchrow_hashref){my $d6pp=$j611->{'sum(INDEX_LENGTH)'};print '   <item name="engine_innodb_size_index"><![CDATA['.$d6pp."]]></item>\n";}$j3nn=$k6g3->prepare($elag) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");while(my $j611=$j3nn->fetchrow_hashref){my $d6pp=$j611->{'sum(INDEX_LENGTH)'};print '   <item name="engine_myisam_size_index"><![CDATA['.$d6pp."]]></item>\n";}$j3nn=$k6g3->prepare($kfjb) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");while(my $j611=$j3nn->fetchrow_hashref){my $d6pp=$j611->{'sum(DATA_LENGTH)'};print '   <item name="engine_innodb_size_data"><![CDATA['.$d6pp."]]></item>\n";}$j3nn=$k6g3->prepare($e825) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");while(my $j611=$j3nn->fetchrow_hashref){my $d6pp=$j611->{'sum(DATA_LENGTH)'};print '   <item name="engine_myisam_size_data"><![CDATA['.$d6pp."]]></item>\n";}my $g9ph="NULL";my $acoi="NULL";my $cffj="NULL";$j3nn=$k6g3->prepare($ffm0) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");if($j3nn->fetchrow_hashref){while(my $j611=$j3nn->fetchrow_hashref){$g9ph=$j611->{'Slave_IO_Running'};$acoi=$j611->{'Slave_SQL_Running'};$cffj=$j611->{'Seconds_Behind_Master'};print '   <item name="Slave_IO_Running"><![CDATA['.$g9ph."]]></item>\n";print '   <item name="Slave_SQL_Running"><![CDATA['.$acoi."]]></item>\n";print '   <item name="Seconds_Behind_Master"><![CDATA['.$cffj."]]></item>\n";}}else{print '   <item name="Slave_IO_Running"><![CDATA['.$g9ph."]]></item>\n";print '   <item name="Slave_SQL_Running"><![CDATA['.$acoi."]]></item>\n";print '   <item name="Seconds_Behind_Master"><![CDATA['.$cffj."]]></item>\n";}$j3nn=$k6g3->prepare($hijc) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");if($j3nn->fetchrow_hashref){print '   <item name="illegal_global_user"><![CDATA[';while(my $j611=$j3nn->fetchrow_hashref){my $do0e=$j611->{'User'};my $h7h2=$j611->{'Host'};print 'Host: '.$h7h2.' User:'.$do0e.",";}print "]]></item>\n";}else{print '   <item name="illegal_global_user"><![CDATA[0]]></item>\n';}$j3nn=$k6g3->prepare($dkbl) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");if($j3nn->fetchrow_hashref){print '   <item name="illegal_grant_user"><![CDATA[';while(my $j611=$j3nn->fetchrow_hashref){my $do0e=$j611->{'User'};my $h7h2=$j611->{'Host'};print 'Host: '.$h7h2.' User:'.$do0e.",";}print "]]></item>\n";}else{print "   <item name=\"illegal_grant_user\"><![CDATA[0]]></item>\n";}$j3nn=$k6g3->prepare($b1a9) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");if($j3nn->fetchrow_hashref){print '   <item name="illegal_remote_root"><![CDATA[';while(my $j611=$j3nn->fetchrow_hashref){my $do0e=$j611->{'User'};my $h7h2=$j611->{'Host'};print 'Host: '.$h7h2.' User:'.$do0e.",";}print "]]></item>\n";}else{print "   <item name=\"illegal_remote_root\"><![CDATA[0]]></item>\n";}$j3nn=$k6g3->prepare($blbh) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");if($j3nn->fetchrow_hashref){print '   <item name="illegal_user_nopass"><![CDATA[';while(my $j611=$j3nn->fetchrow_hashref){my $do0e=$j611->{'User'};my $h7h2=$j611->{'Host'};print 'Host: '.$h7h2.' User:'.$do0e.",";}print "]]></item>\n";}else{print "   <item name=\"illegal_user_nopass\"><![CDATA[0]]></item>\n";}$j3nn=$k6g3->prepare($chj1) or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");$j3nn->execute or aaf("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");if($j3nn->fetchrow_hashref){print '   <item name="illegal_user_noname"><![CDATA[';while(my $j611=$j3nn->fetchrow_hashref){my $do0e=$j611->{'User'};my $h7h2=$j611->{'Host'};print 'Host: '.$h7h2.' User:'.$do0e.",";}print "]]></item>\n";}else{print "   <item name=\"illegal_user_noname\"><![CDATA[0]]></item>\n";}print '   <item name="num_connections"><![CDATA['.$jodb."]]></item>\n";$j3nn->finish;$k6g3->disconnect;}sub aac{my $e20n="/etc/my.cnf";open(DAT, $e20n) || print "<error type=\"mysql\"><![CDATA[Could not open cnf file $e20n]]></error>\n";my @g4j3=<DAT>;close(DAT);print "   <item name=\"cnf_file\"><![CDATA[";foreach my $fee8(@g4j3){chomp($fee8);}foreach my $fee8(@g4j3){print $fee8."\n";}print "]]></item>\n";}sub aae{no warnings 'File::Find';my @gmic;find({wanted=> sub{push @gmic, $File::Find::name}, follow=>1}, @INC);print qq�\n\n$gk2m\nGets OS and MySQL stats, outputs XML\n$hhg1\npackage version: $hdla\n\n\nPREREQUISITE            STATUS\n\n�;my @d91h=grep(m/\/Net\/SNMP.pm/is, @gmic);if(@d91h){print "SNMP.pm                 FOUND.\n";}else {print "SNMP.pm                 NOT FOUND.\n";}@d91h=grep(m/\/Getopt\/Long.pm/is, @gmic);if(@d91h){print "Getopt/Long.pm          FOUND.\n";}else {print "Getopt/Long.pm          NOT FOUND.\n";}@d91h=grep(m/POSIX.pm/is, @gmic);if(@d91h){print "POSIX.pm                FOUND.\n";}else {print "POSIX.pm                NOT FOUND.\n";}@d91h=grep(m/\/Sys\/Hostname.pm/is, @gmic);if(@d91h){print "Sys/Hostname.pm         FOUND.\n";}else {print "Sys/Hostname.pm         NOT FOUND.\n";}@d91h=grep(m/DBI.pm/is, @gmic);if(@d91h){print "DBI.pm                  FOUND.\n";}else {print "DBI.pm                  NOT FOUND.\n";}@d91h=grep(m/\/Time\/HiRes.pm/is, @gmic);if(@d91h){print "Time/HiRes.pm           FOUND.\n";}else {print "Time/HiRes.pm            NOT FOUND.\n";}}my $g79h='localhost';my $f2fn='161';my $kb2e='public';my $cejl='1';my $eglm='3306';my $k27l='/var/run/mysql.sock';my $k8g6='mysql';my $i7bd='root';my $ifn3='';my $c5ck='localhost';my $g0bf=5;my $bjn1=2;my $k84a=undef;my $d8k1=undef;my $fopl=undef;GetOptions( 'snmp-host=s'=> \$g79h, 'snmp-port=i'=> \$f2fn, 'snmp-rocommunity=s'=> \$kb2e, 'snmp-version=i'=> \$cejl, 'snmp-timeout=i'=> \$g0bf, 'snmp-retries=i'=> \$bjn1, 'mysql-user=s'=> \$i7bd, 'mysql-pass=s'=> \$ifn3, 'mysql-port=i'=> \$eglm, 'mysql-socket=s'=> \$k27l, 'mysql-db=s'=> \$k8g6, 'mysql-host=s'=> \$c5ck, 'verbose'=> \$fopl, 'help'=> \$k84a, 'prereq'=> \$d8k1 );if(!$ARGV[0]){$ARGV[0]='';}if($k84a || $ARGV[0] eq "help" || $ARGV[0] eq "?"){print qq�\n\n$gk2m\nGets OS and MySQL stats, outputs XML\n$hhg1\npackage version: $hdla\n\n--help        = this message\n--prereq      = prerequisite checks\n\n--snmp-host        = snmp host address\n--snmp-port        = snmp port\n--snmp-retries     = snmp retries\n--snmp-rocomminity = snmp rocommunity\n--snmp-timeout     = snmp timeout\n--snmp-version     = snmp version\n--mysql-user       = mysql username\n--mysql-pass       = mysql password\n--mysql-port       = mysql port\n--mysql-socket     = mysql socket\n--mysql-db         = mysql database\n--mysql-host       = mysql host\n                \ndefaults if variables not specified\nsnmp-host:        localhost\nsnmp-port:        161\nsnmp-rocommunity: public\nsnmp-version:     1\nsnmp-timeout:     5\nsnmp-retries:     2\nmysql-user:       root\nmysql-pass:       <blank>\nmysql-port:       3306\nmysql-socket:     /var/run/mysql.sock\nmysql-db:         mysql\nmysql-host:       localhost\n\n�;}else{if($fopl){print qq�\n\n$gk2m\nGets OS and MySQL stats, outputs XML\n$hhg1\npackage version: $hdla\n\nCurrent Settings\nsnmp address:     $g79h\nsnmp port:        $f2fn\nsnmp rocommunity: $kb2e\nsnmp version:     $cejl\nsnmp timeout:     $g0bf\nsnmp retries:     $bjn1\nmysql user:       $i7bd\nmysql pass:       $ifn3\nmysql port:       $eglm\nmysql socket:       $k27l\nmysql db:         $k8g6\nmysql host:       $c5ck\n\n�;}else{if($d8k1){aae();exit;}}my $e37l=[gettimeofday];aah();aad( $g79h, $f2fn, $kb2e, $cejl, $g0bf, $bjn1 );aag( $i7bd, $ifn3, $eglm, $k27l, $k8g6, $c5ck );aac();my $inf3=[gettimeofday];my $h9pc=tv_interval $e37l, $inf3;print "   <item name=\"collection_time_elapse\"><![CDATA[$h9pc]]></item>\n";aab();}