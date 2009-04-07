-- MySQL dump 10.11
--
-- Host: localhost    Database: kontrollbase2
-- ------------------------------------------------------
-- Server version	5.0.45-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alerts_current`
--

DROP TABLE IF EXISTS `alerts_current`;
CREATE TABLE `alerts_current` (
  `id` int(11) NOT NULL auto_increment,
  `server_list_id` int(11) NOT NULL,
  `alerts_def_id` int(11) NOT NULL,
  `alert_state` tinyint(4) NOT NULL COMMENT '0 = not active, 1 = active',
  `alerts_ign` tinyint(1) NOT NULL default '0' COMMENT '0 = not ignore, 1 = ignore',
  `alerts_ack` tinyint(1) NOT NULL default '0' COMMENT '0 = not acknowledged, 1 = acknowledged',
  `system_users_id` int(4) NOT NULL default '0',
  `renew_time` datetime default NULL,
  `response_time` datetime default NULL,
  `creation_time` datetime default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `alerts_current_server_id_alerts_def_id_ux` (`server_list_id`,`alerts_def_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alerts_current`
--

LOCK TABLES `alerts_current` WRITE;
/*!40000 ALTER TABLE `alerts_current` DISABLE KEYS */;
/*!40000 ALTER TABLE `alerts_current` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alerts_custom`
--

DROP TABLE IF EXISTS `alerts_custom`;
CREATE TABLE `alerts_custom` (
  `id` int(16) NOT NULL auto_increment,
  `server_list_id` int(16) NOT NULL,
  `server_statistics_variable_name` varchar(255) character set utf8 NOT NULL,
  `server_statistics_variable_threshold_over` bigint(32) NOT NULL,
  `server_statistics_variable_threshold_under` bigint(32) NOT NULL,
  `creation_time` datetime NOT NULL,
  `comment` longtext character set utf8 NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `server_list_id_ix` (`server_list_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alerts_custom`
--

LOCK TABLES `alerts_custom` WRITE;
/*!40000 ALTER TABLE `alerts_custom` DISABLE KEYS */;
INSERT INTO `alerts_custom` (`id`, `server_list_id`, `server_statistics_variable_name`, `server_statistics_variable_threshold_over`, `server_statistics_variable_threshold_under`, `creation_time`, `comment`) VALUES (1,0,'this table is not currently in use',0,0,'2009-03-17 10:26:41','this table is not currently in use');
/*!40000 ALTER TABLE `alerts_custom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alerts_def`
--

DROP TABLE IF EXISTS `alerts_def`;
CREATE TABLE `alerts_def` (
  `id` int(11) NOT NULL auto_increment,
  `alert_name` varchar(255) NOT NULL,
  `alert_desc` longtext NOT NULL,
  `alert_links` longtext NOT NULL,
  `alert_solution` longtext NOT NULL,
  `alert_function` longtext NOT NULL,
  `alert_category` enum('Connection Status','Connection Buffers','Myisam','Innodb','Caches','Operating System','Logging','Replication','Locking','Threads','Security','General Memory','Indexing') NOT NULL,
  `alert_level` tinyint(1) NOT NULL default '0' COMMENT '0 = crit, 1 = warn, 2 = info',
  `Creation_time` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alerts_def`
--

LOCK TABLES `alerts_def` WRITE;
/*!40000 ALTER TABLE `alerts_def` DISABLE KEYS */;
INSERT INTO `alerts_def` (`id`, `alert_name`, `alert_desc`, `alert_links`, `alert_solution`, `alert_function`, `alert_category`, `alert_level`, `Creation_time`) VALUES (1,'number of connection failures','Over 100 connections have terminated abnormally. ','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_wait_timeout','Check if the network serivces are functioning correctly and check the value of the variable wait_timeout.','$Aborted_connects > 99','Connection Status',2,'2008-06-18 14:43:48'),(3,'binary logging not enabled','Binary log not enabled. Transaction logging not available for point in time recovery. ','http://dev.mysql.com/doc/refman/5.0/en/binary-log.html','Enable the binary log by adding the entry \"log-bin\" in mysql configuration file.','$log_bin eq \"OFF\"','Logging',2,'2008-06-18 14:43:48'),(4,'sync_binlog not set','Binary log is not being synced to disk at each write. Please enable.','http://dev.mysql.com/doc/refman/5.0/en/replication-options-binary-log.html#option_mysqld_sync_binlog\r\n','Enable sync_binlog by adding the entry \"sync_binlog=1\" in mysql configuration file.','$sync_binlog = 0','Logging',1,'2008-06-18 14:43:48'),(5,'max_used_connections too high compared to max_connections (ratio over 85% utilization)','Server is using more than 85% of the connections as allowed in max_connections. ','http://dev.mysql.com/doc/refman/5.0/en/too-many-connections.html\r\nhttp://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_max_connections\r\n','Increase the value of max_connections to allow 85% max utilization. Keep in mind that increasing the number of connections will increase the amount of RAM used by per-thread-buffers. \r\n','round((($Max_used_connections * 100)/$max_connections)/85)','Connection Status',0,'2008-06-18 14:43:48'),(6,'query cache size too small','The query cache is too small for the majority of queries that could be cached.','http://dev.mysql.com/doc/refman/5.0/en/query-cache-configuration.html\r\nhttp://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_query_cache_size\r\n','Increase query_cache_size to solve the issue. ','(($Qcache_lowmem_prunes >= 50) && (((($query_cache_size - $Qcache_free_memory) * 100) / $query_cache_size) >= 80))','Caches',1,'2008-06-18 14:43:48'),(7,'query cache size too large','The query_cache_size value is set too high.','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_query_cache_size','Decrease the size of the query_cache. This can be set at runtime as well as the server configuration file. ','(((($query_cache_size - $Qcache_free_memory) * 100) / $query_cache_size) <= 25)','Caches',1,'2008-06-18 14:43:48'),(8,'memory usage over 85%','Total memory usage of MySQL has exceeded over 85 % of available memory.','http://dev.mysql.com/doc/refman/5.0/en/memory-use.html','Increase the amount of RAM in the server or decrease per-thread and global memory buffers. \r\n\r\nThis is set by the following equations:\r\n\r\nper_thread_buffers=((read_buffer_size+read_rnd_buffer_size+sort_buffer_size+\r\nthread_stack+join_buffer_size+binlog_cache_size)*max_connections)\r\n\r\nglobal_buffers=(innodb_buffer_pool_size+innodb_additional_mem_pool_size+\r\ninnodb_log_buffer_size+key_buffer_size+query_cache_size)\r\n\r\ntotal_memory=(global_buffers+per_thread_buffers)\r\n\r\nMAX MEMORY % = ((total_memory*100)/total_system_memory)','','General Memory',0,'2008-06-18 14:43:48'),(9,'table scans excessive','Over abundance of table scans, leading to increased resource utilization. ','http://dev.mysql.com/doc/refman/5.0/en/how-to-avoid-table-scan.html','Add proper indexing to the tables to avoid full table scans, or increase read_buffer_size.','','Indexing',1,'2008-06-18 14:43:48'),(10,'tmp table to disk ratio too high','Ratio of created_tmp_disk_tables to created_tmp_tables is too high. Typically relates to excessive I/O usage. ','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_tmp_table_size','Increase the value of the variable tmp_table_size. Keep in mind this value lives in RAM. ','','Operating System',0,'2008-06-18 14:43:48'),(11,'innodb buffer too small','The InnoDB buffer size is too small for caching data and indexes into RAM. ','http://dev.mysql.com/doc/refman/5.0/en/innodb-parameters.html#option_mysqld_innodb_buffer_pool_size','Increase the value for innodb_buffer_pool size by adding the entry in my.cnf as  innodb_buffer_pool_size=[desired value] and restart the MySQL for changes to affect.','','Innodb',1,'2008-06-18 14:43:48'),(12,'innodb buffer too large','The InnoDB buffer size is set to too high, we can make use this memory elsewhere for better performance.','http://dev.mysql.com/doc/refman/5.0/en/innodb-parameters.html#option_mysqld_innodb_buffer_pool_size','Decrease the value of Innodb_buffer_pool size by adding the entry in my.cnf as  Innodb_buffer_pool_size=[desired value] and restart the MySQL for changes to affect.','','Innodb',1,'2008-06-18 14:43:48'),(13,'key buffer too large','Key_buffer_size for caching MyISAM indexes is set too large, the ratio of key blocks used to key blocks total is low.','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_key_buffer_size','Decrease the value of key_buffer_size by adding the entry in my.cnf as  key_buffer_size=[desired value] , since it is a dynamic variable the changes can be done in runtime.','','Connection Buffers',1,'2008-06-18 14:43:48'),(14,'key buffer too small','Key Buffer value is too small to cache the MyISAM indexes.','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_key_buffer_size','Increase the value of key_buffer_size by adding the entry in my.cnf as  key_buffer_size=[desired value] , since it is a dynamic variable the changes can be done in runtime.','','Connection Buffers',1,'2008-06-18 14:43:48'),(15,'sort buffer too small','The buffer size required for sorting query results is too small.','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_sort_buffer_size','Increase this value for faster order by or group by operations. Increase sort_buffer_size=[desired value] in the server configuration file, since it is a dynamic variable the changes can be done in runtime as well.','','Connection Buffers',1,'2008-06-18 14:43:48'),(16,'sort buffer too large','The sort buffer is allocated more than the required size , use the resource elsewhere to gain performance','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_sort_buffer_size','Decrease the value of sort_buffer_size by adding the entry in my.cnf as  sort_buffer_size=[desired value] , since it is a dynamic variable the changes can be done in runtime.','','Connection Buffers',1,'2008-06-18 14:43:48'),(17,'join buffer too small','Join buffer size is set to too small.','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_join_buffer_size','Increase the value to get a faster full join when adding indexes is not possible.\r\n\r\nIncrease the value of join_buffer_size by adding the entry in my.cnf as  join_buffer_size=[desired value] , since it is a dynamic variable the changes can be done in runtime.','','Connection Buffers',1,'2008-06-18 14:43:48'),(18,'join buffer too large','The join buffer size is allocated more than the required size, use the resource elsewhere to gain performance','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_join_buffer_size','Decrease the value of join_buffer_size by adding the entry in my.cnf as  join_buffer_size=[desired value] , since it is a dynamic variable the changes can be done in runtime.','','Connection Buffers',1,'2008-06-18 14:43:48'),(19,'open_files_limit too small compared to open_files usage ratio','open_files usage is more than the open_files_limit set, you should try increasing the value of open_files_limit if mysqld gives you the Too many open files error.','http://dev.mysql.com/doc/refman/5.0/en/server-options.html#option_mysqld_open-files-limit','Increasing the value of open_files_limit by adding open-files-limit=[desired value] in my.cnf file , this requires a service restart to take effect. Keep in mind some operating systems have limits to this value. ','','Operating System',0,'2008-06-18 14:43:48'),(20,'table locks too high','If you encounter more table locks in MySQL, you may try to convert some of your MyISAM tables to InnoDB to avoid this problem.','http://dev.mysql.com/doc/refman/5.0/en/table-locking.html','Try converting your MyISAM tables which are causing the table locks to InnoDB to avoid this problem. ','','Locking',1,'2008-06-18 14:43:48'),(21,'table cache too small','Increase the table_cache value, increasing this value increases the number of file descriptors that mysqld requires.','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_table_cache','Increase the value of table_cache_size by adding the entry in my.cnf as  table_cache_size=[desired value] , since it is a dynamic variable the changes can be done in runtime.','','Caches',1,'2008-06-18 14:43:48'),(22,'table cache too large','table_cache size is too large. Use the resource elsewhere to gain the performance.','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_table_cache','Decrease the value of table_cache_size by adding the entry in my.cnf as  table_cache_size=[desired value] , since it is a dynamic variable the changes can be done in runtime.','','Caches',1,'2008-06-18 14:43:48'),(23,'thread cache too small','thread_cache size is too small given the number of incoming connections seeking new threads. ','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_thread_cache_size','Increase the value of thread_cache_size by adding the entry in my.cnf as  thread_cache_size=[desired value] , since it is a dynamic variable the changes can be done in runtime.','','Caches',1,'2008-06-18 14:43:48'),(24,'thread cache too large','thread_cache_size is set too large. Resources utilization may suffer.','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_thread_cache_size','The optimal usage of thread cache can be find by checking the difference between Connections and Threads_created status variables.The thread cache size value seems to be high.\r\n\r\nDecrease the value of thread_cache_size by adding the entry in my.cnf as  thread_cache_size=[desired value] , since it is a dynamic variable the changes can be done in runtime.','','Caches',1,'2008-06-18 14:43:48'),(25,'bin_log_cache size too small','binlog_cache_size is set too small for the size of transactional queries. ','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_binlog_cache_size','Increase the value of binlog_cache_size in the cnf file. This variable can be increased dynamically as well.','','Logging',1,'2008-06-18 14:43:48'),(26,'excessive disk tmp table usage','Temporary table usage on disk is excessive. ','http://dev.mysql.com/doc/refman/5.1/en/internal-temporary-tables.html\r\nhttp://dev.mysql.com/doc/refman/5.0/en/memory-use.html\r\nhttp://dev.mysql.com/doc/refman/5.0/en/temporary-files.html','Increase the value of the variable tmp_table_size or add more RAM to allow data/indexes to be stored in RAM.','','Operating System',0,'2008-06-18 14:43:48'),(27,'flush time not zero value','flush_time variable is set to non-zero value.','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_flush_time','Set the value of flush_time=0 in the server configuration file. ','','Logging',2,'2008-06-18 14:43:48'),(29,'innodb doublewrite buffer not enabled','Innodb doublewrite buffer is not enabled. This should be enabled for best InnoDB functionality. ','http://dev.mysql.com/doc/refman/5.0/en/innodb-parameters.html','Remove --skip-innodb_doublewrite from the configuration file.','','Innodb',1,'2008-06-18 14:43:48'),(30,'innodb flush method not properly set','innodb_flush_method not set to O_DIRECT or OS is Windows. ','http://dev.mysql.com/doc/refman/5.0/en/innodb-parameters.html#option_mysqld_innodb_flush_method','Set innodb_flush_method=O_DIRECT or use MySQL on Linux/Unix/Solaris with this setting to achieve best InnoDB functionality. ','','Innodb',2,'2008-06-18 14:43:48'),(31,'innodb transaction isolation level not properly set for ACID','InnoDB transaction-isolation is not set to REPEATABLE-READ or SERIALIZABLE. In regard to the SQL:1992 transaction isolation levels, the default InnoDB level is REPEATABLE READ.','http://dev.mysql.com/doc/refman/5.0/en/innodb-transaction-isolation.html','Set transaction-isolation=REPEATABLE-READ or transaction-isolation=SERIALIZABLE to ensure ACID compliance for transactions. ','','Innodb',2,'2008-06-18 14:43:48'),(32,'innodb_lock_wait_timeout too high','innodb_lock_wait_timeout too high, over the default of 50 seconds.','http://dev.mysql.com/doc/refman/5.0/en/innodb-parameters.html#option_mysqld_innodb_lock_wait_timeout','The default value is 50 seconds, to change the value add the entry innodb_lock_wait_timeout=50 in the config file.','innodb_lock_wait_timeout > 50','Innodb',2,'2008-06-18 14:43:48'),(33,'concurrent insert not set correctly','concurrent_insert not set to the correct value for concurrent inserts on MyISAM tables. ','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#sysvar_concurrent_insert','Set the value for the variable concurrent_insert=[desired value] to allow concurrent inserts into the MyISAM tables.','concurrent_insert eq 0 or eq OFF','Myisam',2,'2008-06-18 14:43:48'),(34,'query cache not enabled','query_cache_type disabled. Please enable for best performance. ','http://dev.mysql.com/doc/refman/5.0/en/query-cache-configuration.html\r\nhttp://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_query_cache_type','Set query_cache_type = 1 or 2\r\n\r\nOR \r\n\r\nEnable it by adding the entry query_cache_size=[desired value] in config file. ','','Caches',1,'2008-06-18 14:43:48'),(37,'thread cache not enabled','thread_cache_size=0, please change to the non-zero value','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_thread_cache_size','Enable this variable by adding the entry thread_cache_size=[desired value] in config file where [value] is greater than zero. ','thread_cache_size=0','Caches',1,'2008-06-18 14:43:48'),(38,'concurrent queries too high','queries_per_second is over threshold. ','','The important action to take is to look at the queries and schema and trying to optimize them.The number of concurrent queries varies for each system, so you need to do benchmarking to identify your system limits.','server_statistics.queries_per_second > server_list.threshold_queries_per_second','General Memory',1,'2008-06-18 14:43:48'),(39,'binary logs not set to auto-purge','Purging of binary logs is not enabled, this may lead to huge disk usage.','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_expire_logs_days','set expire_logs_days=[desired number of days] in config file for the number of days for automatic binary log removal. ','','Logging',0,'2008-06-18 14:43:48'),(42,'slave sql thread stopped','Slave_SQL_Running: NO\r\n','http://dev.mysql.com/doc/refman/5.0/en/show-slave-status.html','Check error log for more information. Also check \"show slave status\\G\" output for the values of \"Last_Errno:\" and \"Last_Error:\".','Slave_SQL_Running = NO','Replication',0,'2008-06-18 14:43:48'),(43,'slave io thread stopped','Slave_IO_Running: NO','http://dev.mysql.com/doc/refman/5.0/en/show-slave-status.html','Check error log for more information. Also check \"show slave status\\G\" output for the values of \"Last_Errno:\" and \"Last_Error:\".','Slave_IO_Running = NO','Replication',0,'2008-06-18 14:43:48'),(44,'slave out of sync with master','Seconds_Behind_Master > threshold_seconds_behind_master','http://dev.mysql.com/doc/refman/5.0/en/show-slave-status.html','Slave server is lagging behind master server. Troubleshoot network connection, resource usage, and general replication information in the error log. ','','Replication',0,'2008-06-18 14:43:48'),(45,'slave not set as read-only','read-only not set to when server is configured as slave.','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#option_mysqld_read_only','Enable the read only option by adding the entry \"read_only\" in the configuration file.','read_only != ON','Replication',0,'2008-06-18 14:43:48'),(46,'slave relay logs not automatically purged','relay_log_purge is set to OFF.','http://dev.mysql.com/doc/refman/5.0/en/replication-options.html\r\nhttp://dev.mysql.com/doc/refman/5.0/en/replication-options-slave.html#option_mysqld_relay_log_purge\r\n','By default this variable is enabled. To fix this alert set relay_log_purge=1 in the configuration file.','relay_log_purge != ON','Replication',0,'2008-06-18 14:43:48'),(47,'account with remote access has global privs','A remote user has been found with ALL privileges.','http://dev.mysql.com/doc/refman/5.0/en/privileges.html','Change user account to only allow privileges as needed. Full global privileges is considered a security risk for production servers. ','','Security',0,'2008-06-18 14:43:48'),(48,'old_passwords enabled','old_passwords is set to ON.','http://dev.mysql.com/doc/refman/5.0/en/password-hashing.html','Remove the setting \"old_passwords=1\" in the configuration file. ','old_passwords=ON','Security',2,'2008-06-18 14:43:48'),(50,'account has grant option','User with grant option detected.','http://dev.mysql.com/doc/refman/5.0/en/grant.html','Remove Grant privilege from user account.\r\n','Grant_priv = Y where User != root\r\n','Security',1,'2008-06-18 14:43:48'),(51,'root can login remotely','Root user allows to connect remotely. Major security violation.','http://dev.mysql.com/doc/refman/5.0/en/request-access.html','Remove remote host privilege for roor user.','','Security',0,'2008-06-18 14:43:48'),(52,'user has no password','User found with blank password.','http://dev.mysql.com/doc/refman/5.0/en/set-password.html','Set a password for the user. ','','Security',0,'2008-06-18 14:43:48'),(53,'blank username detected','DB user account with no password is detected , which lead to security violation.','http://dev.mysql.com/doc/refman/5.0/en/request-access.html','Make sure to delete the blank user and host entries once you complete installing MySQL server.','','Security',0,'2008-06-18 14:43:48'),(56,'general query log enabled','General query log will log all the transaction into a file , which will cause more disk I/O in the server and more processing resources to be consumed. It also has a tendency to fill up disk space very rapidly. Typically only enabled on a development server or during extensive troubleshooting outside of production use. ','http://dev.mysql.com/doc/refman/5.0/en/query-log.html\r\nhttp://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#sysvar_log\r\n','Comment out the \"log\" directive in the cnf file. It should look like this #log or #log=mysql-gen.log','','Logging',1,'0000-00-00 00:00:00'),(57,'warnings not being logged','The warning log variable is set to 0 value; as such no warnings will be logged to the error log. This is not recommended. ','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#sysvar_log_warnings','Enable this variable by adding the entry \"log-warnings\" in config file, all warnings will get logged in error log file.\r\n\r\nNote: Aborted connections are not logged to the error log unless the value is greater than 1.','','Logging',2,'0000-00-00 00:00:00'),(99,'Uptime less than 48 hours','Server has been running LESS than 48 hours. These recommendations should be taken lightly. Please be aware that we cannot make solid recommendations based on these usage patterns.','','Allow MySQL process to run without restart for at least 48 hours before reading performance and analysis reports. ','','Connection Status',2,'2008-12-14 10:19:21'),(100,'max_heap_table_size ratio too small','max_heap_table_size is too small compared to tmp_table_size','http://dev.mysql.com/doc/refman/5.0/en/server-system-variables.html#sysvar_max_heap_table_size\r\nhttp://dev.mysql.com/doc/refman/5.0/en/internal-temporary-tables.html\r\n','Increase the max_heap_table_size so that it is within range of 75% of the tmp_table_size.','','Operating System',0,'2008-12-14 17:07:42');
/*!40000 ALTER TABLE `alerts_def` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `api_users`
--

DROP TABLE IF EXISTS `api_users`;
CREATE TABLE `api_users` (
  `id` int(16) NOT NULL auto_increment,
  `api_username` varchar(255) character set utf8 NOT NULL,
  `api_password` varchar(255) character set utf8 NOT NULL,
  `api_server_client_id` int(16) NOT NULL,
  `creation_time` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `api_users`
--

LOCK TABLES `api_users` WRITE;
/*!40000 ALTER TABLE `api_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `api_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `graphs_custom`
--

DROP TABLE IF EXISTS `graphs_custom`;
CREATE TABLE `graphs_custom` (
  `id` int(11) NOT NULL auto_increment,
  `server_list_id` int(16) NOT NULL,
  `graph_name` varchar(255) character set utf8 NOT NULL,
  `graph_server_statistics_column` varchar(255) character set utf8 NOT NULL,
  `graph_comment` varchar(255) character set utf8 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graphs_custom`
--

LOCK TABLES `graphs_custom` WRITE;
/*!40000 ALTER TABLE `graphs_custom` DISABLE KEYS */;
INSERT INTO `graphs_custom` (`id`, `server_list_id`, `graph_name`, `graph_server_statistics_column`, `graph_comment`) VALUES (1,0,'this table is not in use currently','0','this table is not in use currently');
/*!40000 ALTER TABLE `graphs_custom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `graphs_default`
--

DROP TABLE IF EXISTS `graphs_default`;
CREATE TABLE `graphs_default` (
  `id` int(11) NOT NULL auto_increment,
  `graph_name` varchar(255) character set utf8 NOT NULL,
  `graph_server_statistics_column` varchar(255) character set utf8 NOT NULL,
  `graph_comment` varchar(255) character set utf8 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graphs_default`
--

LOCK TABLES `graphs_default` WRITE;
/*!40000 ALTER TABLE `graphs_default` DISABLE KEYS */;
INSERT INTO `graphs_default` (`id`, `graph_name`, `graph_server_statistics_column`, `graph_comment`) VALUES (1,'query rate','queries_per_second',''),(2,'data size - overall','length_data',''),(3,'data size - innodb','engine_innodb_size_data',''),(4,'data size - myisam','engine_myisam_size_data',''),(5,'index size - overall','length_index',''),(6,'index size - innodb','engine_innodb_size_index',''),(7,'index size - myisam','engine_myisam_size_index',''),(8,'total size - overall','length_index,length_data',''),(9,'total size - innodb','engine_innodb_size_data,engine_innodb_size_index',''),(10,'total size - myisam','engine_myisam_size_data,engine_myisam_size_index',''),(11,'connections','num_connections',''),(12,'mysql memory allocation - allocated','',''),(13,'mysql memory allocation - allowed','',''),(14,'data transfer - sent','Bytes_sent',''),(15,'data transfer - received','Bytes_received',''),(16,'tmp files - created','Created_tmp_files',''),(17,'tmp tables - created','Created_tmp_tables',''),(18,'tmp tables on disk - created','Created_tmp_disk_tables',''),(19,'tables - open','Open_tables',''),(20,'threads - cached ','Threads_cached',''),(21,'threads - created','Threads_created',''),(22,'threads - connected','Threads_connected',''),(23,'threads - running','Threads_running',''),(24,'query cache - inserts','Qcache_inserts',''),(25,'query cache - hits','Qcache_hits',''),(26,'query cache - queries in cache','Qcache_queries_in_cache',''),(27,'query cache - queries not cached','Qcache_not_cached',''),(28,'uptime','Uptime',''),(29,'os mem - total','os_mem_total',''),(30,'os mem - used','os_mem_used',''),(31,'os swap - total','os_swap_total',''),(32,'os swap - free','os_swap_free',''),(33,'os load - 1 minute','os_load_1',''),(34,'os load - 5 minute','os_load_5',''),(35,'os load - 15 minute','os_load_15',''),(36,'os cpu - user','os_cpu_user',''),(37,'os cpu - system','os_cpu_system',''),(38,'os cpu - idle','os_cpu_idle',''),(39,'schema total - quantity','num_schema',''),(40,'table total - quantity','num_tables','');
/*!40000 ALTER TABLE `graphs_default` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `server_client`
--

DROP TABLE IF EXISTS `server_client`;
CREATE TABLE `server_client` (
  `id` int(16) NOT NULL auto_increment,
  `server_client_name` varchar(45) NOT NULL,
  `server_client_email` varchar(45) NOT NULL,
  `server_client_phone` varchar(12) NOT NULL default '000-000-0000',
  `creation_time` datetime default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `server_client_name_uix` (`server_client_name`),
  UNIQUE KEY `server_client_email_uix` (`server_client_email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `server_client`
--

LOCK TABLES `server_client` WRITE;
/*!40000 ALTER TABLE `server_client` DISABLE KEYS */;
INSERT INTO `server_client` (`id`, `server_client_name`, `server_client_email`, `server_client_phone`, `creation_time`) VALUES (6,'test','test@test.com','000-000-0000','2009-03-29 15:18:46');
/*!40000 ALTER TABLE `server_client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `server_list`
--

DROP TABLE IF EXISTS `server_list`;
CREATE TABLE `server_list` (
  `id` int(11) NOT NULL auto_increment,
  `active` tinyint(1) NOT NULL default '0' COMMENT '0=active, 1=not active',
  `server_client_id` int(16) NOT NULL,
  `server_type` tinyint(1) NOT NULL default '0' COMMENT '0 = prod, 1 = stage, 2 = dev',
  `server_is_slave` tinyint(1) NOT NULL default '0' COMMENT '0=not slave, 1=slave',
  `server_ipaddress` varchar(16) NOT NULL,
  `server_hostname` varchar(255) NOT NULL,
  `server_ssh_user` varchar(255) NOT NULL default 'kontrollbase',
  `server_mysql_port` int(11) NOT NULL default '3306',
  `server_mysql_socket` varchar(255) NOT NULL default '/var/run/mysql.sock',
  `server_mysql_db` varchar(255) NOT NULL default 'mysql',
  `server_mysql_user` varchar(255) NOT NULL default 'kontrollbase' COMMENT 'user needs SUPER,REPL_CLIENT,PROCESS privileges ',
  `server_mysql_pass` varchar(255) NOT NULL,
  `server_mysql_host` varchar(255) NOT NULL default 'localhost',
  `server_snmp_local_address` varchar(16) NOT NULL default '127.0.0.1',
  `server_snmp_port` int(5) NOT NULL default '161',
  `server_snmp_rocommunity` varchar(255) NOT NULL default 'public',
  `server_snmp_version` char(1) NOT NULL default '1',
  `threshold_queries_per_second` bigint(32) NOT NULL default '100',
  `threshold_seconds_behind_master` int(16) NOT NULL default '3600',
  `creation_time` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `server_type_ix` (`server_type`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `server_list`
--

LOCK TABLES `server_list` WRITE;
/*!40000 ALTER TABLE `server_list` DISABLE KEYS */;
INSERT INTO `server_list` (`id`, `active`, `server_client_id`, `server_type`, `server_is_slave`, `server_ipaddress`, `server_hostname`, `server_ssh_user`, `server_mysql_port`, `server_mysql_db`, `server_mysql_user`, `server_mysql_pass`, `server_mysql_host`, `server_snmp_local_address`, `server_snmp_port`, `server_snmp_rocommunity`, `server_snmp_version`, `threshold_queries_per_second`, `threshold_seconds_behind_master`, `creation_time`) VALUES (12,0,6,0,1,'127.0.0.1','localhost.localdomain','kontrollbase',3306,'mysql','kontrollbase','password','localhost','127.0.0.1',161,'public','1',1000,3600,'2009-02-18 13:05:06');
/*!40000 ALTER TABLE `server_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `server_report`
--

DROP TABLE IF EXISTS `server_report`;
CREATE TABLE `server_report` (
  `id` bigint(32) NOT NULL auto_increment,
  `server_list_id` int(16) NOT NULL,
  `server_statistics_id` int(11) NOT NULL,
  `server_report_document` longtext NOT NULL,
  `creation_time` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `server_statistics_id_ix` (`server_statistics_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `server_report`
--

LOCK TABLES `server_report` WRITE;
/*!40000 ALTER TABLE `server_report` DISABLE KEYS */;
/*!40000 ALTER TABLE `server_report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `server_statistics`
--

DROP TABLE IF EXISTS `server_statistics`;
CREATE TABLE `server_statistics` (
  `id` bigint(32) NOT NULL auto_increment,
  `server_list_id` int(11) NOT NULL,
  `cnf_file` longtext NOT NULL,
  `os_load_1` float NOT NULL,
  `os_load_5` float NOT NULL,
  `os_load_15` float NOT NULL,
  `os_mem_total` bigint(64) NOT NULL,
  `os_mem_used` bigint(64) NOT NULL,
  `os_swap_total` bigint(64) NOT NULL,
  `os_swap_free` bigint(64) NOT NULL,
  `os_cpu_user` float NOT NULL,
  `os_cpu_system` float NOT NULL,
  `os_cpu_idle` float NOT NULL,
  `queries_per_second` float NOT NULL,
  `num_schema` int(16) NOT NULL,
  `num_tables` int(16) NOT NULL,
  `num_connections` int(16) NOT NULL,
  `length_data` bigint(64) NOT NULL,
  `length_index` bigint(64) NOT NULL,
  `engine_count_innodb` int(16) NOT NULL,
  `engine_count_myisam` int(16) NOT NULL,
  `engine_myisam_size_data` bigint(128) NOT NULL,
  `engine_myisam_size_index` bigint(128) NOT NULL,
  `engine_innodb_size_data` bigint(128) NOT NULL,
  `engine_innodb_size_index` bigint(128) NOT NULL,
  `auto_increment_increment` bigint(32) NOT NULL,
  `auto_increment_offset` bigint(32) NOT NULL,
  `automatic_sp_privileges` char(4) NOT NULL,
  `back_log` bigint(32) NOT NULL,
  `basedir` char(16) NOT NULL,
  `binlog_cache_size` bigint(32) NOT NULL,
  `bulk_insert_buffer_size` bigint(32) NOT NULL,
  `character_set_client` char(16) NOT NULL,
  `character_set_connection` char(16) NOT NULL,
  `character_set_database` char(16) NOT NULL,
  `character_set_filesystem` char(16) NOT NULL,
  `character_set_results` char(16) NOT NULL,
  `character_set_server` char(16) NOT NULL,
  `character_set_system` char(16) NOT NULL,
  `character_sets_dir` varchar(255) NOT NULL,
  `collation_connection` char(64) NOT NULL,
  `collation_database` char(64) NOT NULL,
  `collation_server` char(64) NOT NULL,
  `completion_type` bigint(32) NOT NULL,
  `concurrent_insert` bigint(32) NOT NULL,
  `connect_timeout` bigint(32) NOT NULL,
  `datadir` varchar(255) NOT NULL,
  `date_format` varchar(128) NOT NULL,
  `datetime_format` bigint(32) NOT NULL,
  `default_week_format` bigint(32) NOT NULL,
  `delay_key_write` char(8) NOT NULL,
  `delayed_insert_limit` bigint(32) NOT NULL,
  `delayed_insert_timeout` bigint(32) NOT NULL,
  `delayed_queue_size` bigint(32) NOT NULL,
  `div_precision_increment` bigint(32) NOT NULL,
  `keep_files_on_create` char(8) NOT NULL,
  `engine_condition_pushdown` char(8) NOT NULL,
  `expire_logs_days` bigint(32) NOT NULL,
  `flush` char(8) NOT NULL,
  `flush_time` bigint(32) NOT NULL,
  `ft_boolean_syntax` varchar(64) NOT NULL,
  `ft_max_word_len` bigint(32) NOT NULL,
  `ft_min_word_len` bigint(32) NOT NULL,
  `ft_query_expansion_limit` bigint(32) NOT NULL,
  `ft_stopword_file` char(64) NOT NULL,
  `group_concat_max_len` bigint(32) NOT NULL,
  `have_archive` char(8) NOT NULL,
  `have_bdb` char(8) NOT NULL,
  `have_blackhole_engine` char(8) NOT NULL,
  `have_compress` char(8) NOT NULL,
  `have_crypt` char(8) NOT NULL,
  `have_csv` char(8) NOT NULL,
  `have_dynamic_loading` char(8) NOT NULL,
  `have_example_engine` char(8) NOT NULL,
  `have_federated_engine` char(8) NOT NULL,
  `have_geometry` char(8) NOT NULL,
  `have_innodb` char(8) NOT NULL,
  `have_isam` char(8) NOT NULL,
  `have_merge_engine` char(8) NOT NULL,
  `have_ndbcluster` char(8) NOT NULL,
  `have_openssl` char(8) NOT NULL,
  `have_ssl` char(8) NOT NULL,
  `have_query_cache` char(8) NOT NULL,
  `have_raid` char(8) NOT NULL,
  `have_rtree_keys` char(8) NOT NULL,
  `have_symlink` char(8) NOT NULL,
  `hostname` char(255) NOT NULL,
  `init_connect` char(128) NOT NULL,
  `init_file` char(128) NOT NULL,
  `init_slave` char(128) NOT NULL,
  `innodb_additional_mem_pool_size` bigint(32) NOT NULL,
  `innodb_autoextend_increment` bigint(32) NOT NULL,
  `innodb_buffer_pool_awe_mem_mb` bigint(32) NOT NULL,
  `innodb_buffer_pool_size` bigint(32) NOT NULL,
  `innodb_checksums` char(8) NOT NULL,
  `innodb_commit_concurrency` bigint(32) NOT NULL,
  `innodb_concurrency_tickets` bigint(32) NOT NULL,
  `innodb_data_file_path` varchar(255) NOT NULL,
  `innodb_data_home_dir` varchar(255) NOT NULL,
  `innodb_adaptive_hash_index` char(8) NOT NULL,
  `innodb_doublewrite` char(8) NOT NULL,
  `innodb_fast_shutdown` bigint(32) NOT NULL,
  `innodb_file_io_threads` bigint(32) NOT NULL,
  `innodb_file_per_table` char(8) NOT NULL,
  `innodb_flush_log_at_trx_commit` bigint(32) NOT NULL,
  `innodb_flush_method` char(16) NOT NULL,
  `innodb_force_recovery` bigint(32) NOT NULL,
  `innodb_lock_wait_timeout` bigint(32) NOT NULL,
  `innodb_locks_unsafe_for_binlog` char(8) NOT NULL,
  `innodb_log_arch_dir` varchar(255) NOT NULL,
  `innodb_log_archive` char(8) NOT NULL,
  `innodb_log_buffer_size` bigint(32) NOT NULL,
  `innodb_log_file_size` bigint(32) NOT NULL,
  `innodb_log_files_in_group` bigint(32) NOT NULL,
  `innodb_log_group_home_dir` varchar(255) NOT NULL,
  `innodb_max_dirty_pages_pct` bigint(32) NOT NULL,
  `innodb_max_purge_lag` bigint(32) NOT NULL,
  `innodb_mirrored_log_groups` bigint(32) NOT NULL,
  `innodb_open_files` bigint(32) NOT NULL,
  `innodb_rollback_on_timeout` char(8) NOT NULL,
  `innodb_support_xa` char(8) NOT NULL,
  `innodb_sync_spin_loops` bigint(32) NOT NULL,
  `innodb_table_locks` char(8) NOT NULL,
  `innodb_thread_concurrency` bigint(32) NOT NULL,
  `innodb_thread_sleep_delay` bigint(32) NOT NULL,
  `innodb_read_ahead` bigint(32) NOT NULL,
  `innodb_ibuf_contract_const` bigint(32) NOT NULL,
  `innodb_ibuf_contract_burst` bigint(32) NOT NULL,
  `innodb_buf_flush_const` bigint(32) NOT NULL,
  `innodb_buf_flush_burst` bigint(32) NOT NULL,
  `interactive_timeout` bigint(32) NOT NULL,
  `join_buffer_size` bigint(32) NOT NULL,
  `key_buffer_size` bigint(32) NOT NULL,
  `key_cache_age_threshold` bigint(32) NOT NULL,
  `key_cache_block_size` bigint(32) NOT NULL,
  `key_cache_division_limit` bigint(32) NOT NULL,
  `language` varchar(255) NOT NULL,
  `large_files_support` char(8) NOT NULL,
  `large_page_size` bigint(32) NOT NULL,
  `large_pages` char(8) NOT NULL,
  `lc_time_names` char(8) NOT NULL,
  `license` varchar(32) NOT NULL,
  `local_infile` char(8) NOT NULL,
  `locked_in_memory` char(8) NOT NULL,
  `log` char(8) NOT NULL,
  `log_bin` char(8) NOT NULL,
  `log_bin_trust_function_creators` char(8) NOT NULL,
  `log_error` varchar(255) NOT NULL,
  `log_queries_not_using_indexes` char(8) NOT NULL,
  `log_slave_updates` char(8) NOT NULL,
  `log_slow_queries` char(8) NOT NULL,
  `log_slow_filter` char(8) NOT NULL,
  `log_slow_verbosity` char(32) NOT NULL,
  `log_warnings` bigint(32) NOT NULL,
  `long_query_time` bigint(32) NOT NULL,
  `low_priority_updates` char(8) NOT NULL,
  `lower_case_file_system` char(8) NOT NULL,
  `lower_case_table_names` bigint(32) NOT NULL,
  `max_allowed_packet` bigint(64) NOT NULL,
  `max_binlog_cache_size` bigint(64) NOT NULL,
  `max_binlog_size` bigint(64) NOT NULL,
  `max_connect_errors` bigint(64) NOT NULL,
  `max_connections` bigint(64) NOT NULL,
  `max_delayed_threads` bigint(64) NOT NULL,
  `max_error_count` bigint(64) NOT NULL,
  `max_heap_table_size` bigint(64) NOT NULL,
  `max_insert_delayed_threads` bigint(64) NOT NULL,
  `max_join_size` bigint(64) NOT NULL,
  `max_length_for_sort_data` bigint(64) NOT NULL,
  `max_prepared_stmt_count` bigint(64) NOT NULL,
  `max_relay_log_size` bigint(64) NOT NULL,
  `max_seeks_for_key` bigint(64) NOT NULL,
  `max_sort_length` bigint(64) NOT NULL,
  `max_sp_recursion_depth` bigint(64) NOT NULL,
  `max_tmp_tables` bigint(64) NOT NULL,
  `max_user_connections` bigint(64) NOT NULL,
  `max_write_lock_count` bigint(64) NOT NULL,
  `min_examined_row_limit` bigint(32) NOT NULL,
  `multi_range_count` bigint(32) NOT NULL,
  `myisam_data_pointer_size` bigint(32) NOT NULL,
  `myisam_max_sort_file_size` bigint(32) NOT NULL,
  `myisam_recover_options` char(32) NOT NULL,
  `myisam_repair_threads` bigint(32) NOT NULL,
  `myisam_sort_buffer_size` bigint(32) NOT NULL,
  `myisam_stats_method` char(32) NOT NULL,
  `net_buffer_length` bigint(32) NOT NULL,
  `net_read_timeout` bigint(32) NOT NULL,
  `net_retry_count` bigint(32) NOT NULL,
  `net_write_timeout` bigint(32) NOT NULL,
  `new` char(8) NOT NULL,
  `old_passwords` char(8) NOT NULL,
  `open_files_limit` bigint(32) NOT NULL,
  `optimizer_prune_level` bigint(32) NOT NULL,
  `optimizer_search_depth` bigint(32) NOT NULL,
  `pid_file` varchar(255) NOT NULL,
  `port` bigint(32) NOT NULL,
  `preload_buffer_size` bigint(32) NOT NULL,
  `protocol_version` bigint(32) NOT NULL,
  `query_alloc_block_size` bigint(32) NOT NULL,
  `query_cache_limit` bigint(32) NOT NULL,
  `query_cache_min_res_unit` bigint(32) NOT NULL,
  `query_cache_size` bigint(32) NOT NULL,
  `query_cache_type` char(8) NOT NULL,
  `query_cache_wlock_invalidate` char(8) NOT NULL,
  `query_prealloc_size` bigint(32) NOT NULL,
  `range_alloc_block_size` bigint(32) NOT NULL,
  `log_slow_rate_limit` bigint(32) NOT NULL,
  `read_buffer_size` bigint(32) NOT NULL,
  `read_only` char(8) NOT NULL,
  `read_rnd_buffer_size` bigint(32) NOT NULL,
  `relay_log` varchar(255) NOT NULL,
  `relay_log_index` varchar(255) NOT NULL,
  `relay_log_info_file` varchar(255) NOT NULL,
  `relay_log_purge` char(8) NOT NULL,
  `relay_log_space_limit` bigint(32) NOT NULL,
  `rpl_recovery_rank` bigint(32) NOT NULL,
  `secure_auth` char(8) NOT NULL,
  `secure_file_priv` char(8) NOT NULL,
  `server_id` bigint(32) NOT NULL,
  `skip_external_locking` char(8) NOT NULL,
  `skip_networking` char(8) NOT NULL,
  `skip_show_database` char(8) NOT NULL,
  `slave_compressed_protocol` char(8) NOT NULL,
  `slave_load_tmpdir` varchar(255) NOT NULL,
  `slave_net_timeout` bigint(32) NOT NULL,
  `slave_skip_errors` varchar(255) NOT NULL,
  `slave_transaction_retries` bigint(32) NOT NULL,
  `slow_launch_time` bigint(32) NOT NULL,
  `socket` varchar(255) NOT NULL,
  `sort_buffer_size` bigint(32) NOT NULL,
  `sql_big_selects` char(8) NOT NULL,
  `sql_mode` varchar(255) NOT NULL,
  `sql_notes` char(8) NOT NULL,
  `sql_warnings` char(8) NOT NULL,
  `ssl_ca` varchar(255) NOT NULL,
  `ssl_capath` varchar(255) NOT NULL,
  `ssl_cert` varchar(255) NOT NULL,
  `ssl_cipher` varchar(255) NOT NULL,
  `ssl_key` varchar(255) NOT NULL,
  `storage_engine` char(32) NOT NULL,
  `sync_binlog` bigint(32) NOT NULL,
  `sync_frm` char(8) NOT NULL,
  `system_time_zone` char(8) NOT NULL,
  `table_cache` bigint(32) NOT NULL,
  `table_lock_wait_timeout` bigint(32) NOT NULL,
  `table_type` char(32) NOT NULL,
  `thread_cache_size` bigint(32) NOT NULL,
  `thread_stack` bigint(32) NOT NULL,
  `time_format` varchar(32) NOT NULL,
  `time_zone` varchar(32) NOT NULL,
  `timed_mutexes` char(8) NOT NULL,
  `tmp_table_size` bigint(32) NOT NULL,
  `tmpdir` varchar(255) NOT NULL,
  `transaction_alloc_block_size` bigint(32) NOT NULL,
  `transaction_prealloc_size` bigint(32) NOT NULL,
  `tx_isolation` char(32) NOT NULL,
  `updatable_views_with_limit` char(8) NOT NULL,
  `version` varchar(255) NOT NULL,
  `version_comment` varchar(255) NOT NULL,
  `version_compile_machine` varchar(255) NOT NULL,
  `version_compile_os` varchar(255) NOT NULL,
  `wait_timeout` bigint(32) NOT NULL,
  `Aborted_clients` bigint(32) NOT NULL,
  `Aborted_connects` bigint(32) NOT NULL,
  `Binlog_cache_disk_use` bigint(32) NOT NULL,
  `Binlog_cache_use` bigint(32) NOT NULL,
  `Bytes_received` bigint(32) NOT NULL,
  `Bytes_sent` bigint(32) NOT NULL,
  `Com_admin_commands` bigint(32) NOT NULL,
  `Com_alter_db` bigint(32) NOT NULL,
  `Com_alter_table` bigint(32) NOT NULL,
  `Com_analyze` bigint(32) NOT NULL,
  `Com_backup_table` bigint(32) NOT NULL,
  `Com_begin` bigint(32) NOT NULL,
  `Com_call_procedure` bigint(32) NOT NULL,
  `Com_change_db` bigint(32) NOT NULL,
  `Com_change_master` bigint(32) NOT NULL,
  `Com_check` bigint(32) NOT NULL,
  `Com_checksum` bigint(32) NOT NULL,
  `Com_commit` bigint(32) NOT NULL,
  `Com_create_db` bigint(32) NOT NULL,
  `Com_create_function` bigint(32) NOT NULL,
  `Com_create_index` bigint(32) NOT NULL,
  `Com_create_table` bigint(32) NOT NULL,
  `Com_create_user` bigint(32) NOT NULL,
  `Com_dealloc_sql` bigint(32) NOT NULL,
  `Com_delete` bigint(32) NOT NULL,
  `Com_delete_multi` bigint(32) NOT NULL,
  `Com_do` bigint(32) NOT NULL,
  `Com_drop_db` bigint(32) NOT NULL,
  `Com_drop_function` bigint(32) NOT NULL,
  `Com_drop_index` bigint(32) NOT NULL,
  `Com_drop_table` bigint(32) NOT NULL,
  `Com_drop_user` bigint(32) NOT NULL,
  `Com_execute_sql` bigint(32) NOT NULL,
  `Com_flush` bigint(32) NOT NULL,
  `Com_grant` bigint(32) NOT NULL,
  `Com_ha_close` bigint(32) NOT NULL,
  `Com_ha_open` bigint(32) NOT NULL,
  `Com_ha_read` bigint(32) NOT NULL,
  `Com_help` bigint(32) NOT NULL,
  `Com_insert` bigint(32) NOT NULL,
  `Com_insert_select` bigint(32) NOT NULL,
  `Com_kill` bigint(32) NOT NULL,
  `Com_load` bigint(32) NOT NULL,
  `Com_load_master_data` bigint(32) NOT NULL,
  `Com_load_master_table` bigint(32) NOT NULL,
  `Com_lock_tables` bigint(32) NOT NULL,
  `Com_optimize` bigint(32) NOT NULL,
  `Com_preload_keys` bigint(32) NOT NULL,
  `Com_prepare_sql` bigint(32) NOT NULL,
  `Com_purge` bigint(32) NOT NULL,
  `Com_purge_before_date` bigint(32) NOT NULL,
  `Com_rename_table` bigint(32) NOT NULL,
  `Com_repair` bigint(32) NOT NULL,
  `Com_replace` bigint(32) NOT NULL,
  `Com_replace_select` bigint(32) NOT NULL,
  `Com_reset` bigint(32) NOT NULL,
  `Com_restore_table` bigint(32) NOT NULL,
  `Com_revoke` bigint(32) NOT NULL,
  `Com_revoke_all` bigint(32) NOT NULL,
  `Com_rollback` bigint(32) NOT NULL,
  `Com_savepoint` bigint(32) NOT NULL,
  `Com_select` bigint(32) NOT NULL,
  `Com_set_option` bigint(32) NOT NULL,
  `Com_show_binlog_events` bigint(32) NOT NULL,
  `Com_show_binlogs` bigint(32) NOT NULL,
  `Com_show_charsets` bigint(32) NOT NULL,
  `Com_show_collations` bigint(32) NOT NULL,
  `Com_show_column_types` bigint(32) NOT NULL,
  `Com_show_create_db` bigint(32) NOT NULL,
  `Com_show_create_table` bigint(32) NOT NULL,
  `Com_show_databases` bigint(32) NOT NULL,
  `Com_show_errors` bigint(32) NOT NULL,
  `Com_show_fields` bigint(32) NOT NULL,
  `Com_show_grants` bigint(32) NOT NULL,
  `Com_show_innodb_status` bigint(32) NOT NULL,
  `Com_show_keys` bigint(32) NOT NULL,
  `Com_show_logs` bigint(32) NOT NULL,
  `Com_show_master_status` bigint(32) NOT NULL,
  `Com_show_ndb_status` bigint(32) NOT NULL,
  `Com_show_new_master` bigint(32) NOT NULL,
  `Com_show_open_tables` bigint(32) NOT NULL,
  `Com_show_privileges` bigint(32) NOT NULL,
  `Com_show_processlist` bigint(32) NOT NULL,
  `Com_show_slave_hosts` bigint(32) NOT NULL,
  `Com_show_slave_status` bigint(32) NOT NULL,
  `Com_show_status` bigint(32) NOT NULL,
  `Com_show_storage_engines` bigint(32) NOT NULL,
  `Com_show_tables` bigint(32) NOT NULL,
  `Com_show_triggers` bigint(32) NOT NULL,
  `Com_show_variables` bigint(32) NOT NULL,
  `Com_show_warnings` bigint(32) NOT NULL,
  `Com_slave_start` bigint(32) NOT NULL,
  `Com_slave_stop` bigint(32) NOT NULL,
  `Com_stmt_close` bigint(32) NOT NULL,
  `Com_stmt_execute` bigint(32) NOT NULL,
  `Com_stmt_fetch` bigint(32) NOT NULL,
  `Com_stmt_prepare` bigint(32) NOT NULL,
  `Com_stmt_reset` bigint(32) NOT NULL,
  `Com_stmt_send_long_data` bigint(32) NOT NULL,
  `Com_truncate` bigint(32) NOT NULL,
  `Com_unlock_tables` bigint(32) NOT NULL,
  `Com_update` bigint(32) NOT NULL,
  `Com_update_multi` bigint(32) NOT NULL,
  `Com_xa_commit` bigint(32) NOT NULL,
  `Com_xa_end` bigint(32) NOT NULL,
  `Com_xa_prepare` bigint(32) NOT NULL,
  `Com_xa_recover` bigint(32) NOT NULL,
  `Com_xa_rollback` bigint(32) NOT NULL,
  `Com_xa_start` bigint(32) NOT NULL,
  `Compression` bigint(32) NOT NULL,
  `Connections` bigint(32) NOT NULL,
  `Created_tmp_disk_tables` bigint(32) NOT NULL,
  `Created_tmp_files` bigint(32) NOT NULL,
  `Created_tmp_tables` bigint(32) NOT NULL,
  `Delayed_errors` bigint(32) NOT NULL,
  `Delayed_insert_threads` bigint(32) NOT NULL,
  `Delayed_writes` bigint(32) NOT NULL,
  `Flush_commands` bigint(32) NOT NULL,
  `Handler_commit` bigint(32) NOT NULL,
  `Handler_delete` bigint(32) NOT NULL,
  `Handler_discover` bigint(32) NOT NULL,
  `Handler_prepare` bigint(32) NOT NULL,
  `Handler_read_first` bigint(32) NOT NULL,
  `Handler_read_key` bigint(32) NOT NULL,
  `Handler_read_next` bigint(32) NOT NULL,
  `Handler_read_prev` bigint(32) NOT NULL,
  `Handler_read_rnd` bigint(32) NOT NULL,
  `Handler_read_rnd_next` bigint(32) NOT NULL,
  `Handler_rollback` bigint(32) NOT NULL,
  `Handler_savepoint` bigint(32) NOT NULL,
  `Handler_savepoint_rollback` bigint(32) NOT NULL,
  `Handler_update` bigint(32) NOT NULL,
  `Handler_write` bigint(32) NOT NULL,
  `Innodb_buffer_pool_pages_data` bigint(32) NOT NULL,
  `Innodb_buffer_pool_pages_dirty` bigint(32) NOT NULL,
  `Innodb_buffer_pool_pages_flushed` bigint(32) NOT NULL,
  `Innodb_buffer_pool_pages_free` bigint(32) NOT NULL,
  `Innodb_buffer_pool_pages_misc` bigint(32) NOT NULL,
  `Innodb_buffer_pool_pages_total` bigint(32) NOT NULL,
  `Innodb_buffer_pool_read_ahead_rnd` bigint(32) NOT NULL,
  `Innodb_buffer_pool_read_ahead_seq` bigint(32) NOT NULL,
  `Innodb_buffer_pool_read_requests` bigint(32) NOT NULL,
  `Innodb_buffer_pool_reads` bigint(32) NOT NULL,
  `Innodb_buffer_pool_wait_free` bigint(32) NOT NULL,
  `Innodb_buffer_pool_write_requests` bigint(32) NOT NULL,
  `Innodb_data_fsyncs` bigint(32) NOT NULL,
  `Innodb_data_pending_fsyncs` bigint(32) NOT NULL,
  `Innodb_data_pending_reads` bigint(32) NOT NULL,
  `Innodb_data_pending_writes` bigint(32) NOT NULL,
  `Innodb_data_read` bigint(32) NOT NULL,
  `Innodb_data_reads` bigint(32) NOT NULL,
  `Innodb_data_writes` bigint(32) NOT NULL,
  `Innodb_data_written` bigint(32) NOT NULL,
  `Innodb_dblwr_pages_written` bigint(32) NOT NULL,
  `Innodb_dblwr_writes` bigint(32) NOT NULL,
  `Innodb_log_waits` bigint(32) NOT NULL,
  `Innodb_log_write_requests` bigint(32) NOT NULL,
  `Innodb_log_writes` bigint(32) NOT NULL,
  `Innodb_os_log_fsyncs` bigint(32) NOT NULL,
  `Innodb_os_log_pending_fsyncs` bigint(32) NOT NULL,
  `Innodb_os_log_pending_writes` bigint(32) NOT NULL,
  `Innodb_os_log_written` bigint(32) NOT NULL,
  `Innodb_page_size` bigint(32) NOT NULL,
  `Innodb_pages_created` bigint(32) NOT NULL,
  `Innodb_pages_read` bigint(32) NOT NULL,
  `Innodb_pages_written` bigint(32) NOT NULL,
  `Innodb_row_lock_current_waits` bigint(32) NOT NULL,
  `Innodb_row_lock_time` bigint(32) NOT NULL,
  `Innodb_row_lock_time_avg` bigint(32) NOT NULL,
  `Innodb_row_lock_time_max` bigint(32) NOT NULL,
  `Innodb_row_lock_waits` bigint(32) NOT NULL,
  `Innodb_rows_deleted` bigint(32) NOT NULL,
  `Innodb_rows_inserted` bigint(32) NOT NULL,
  `Innodb_rows_read` bigint(32) NOT NULL,
  `Innodb_rows_updated` bigint(32) NOT NULL,
  `Key_blocks_not_flushed` bigint(32) NOT NULL,
  `Key_blocks_unused` bigint(32) NOT NULL,
  `Key_blocks_used` bigint(32) NOT NULL,
  `Key_read_requests` bigint(32) NOT NULL,
  `Key_reads` bigint(32) NOT NULL,
  `Key_write_requests` bigint(32) NOT NULL,
  `Key_writes` bigint(32) NOT NULL,
  `Last_query_cost` float NOT NULL,
  `Max_used_connections` bigint(32) NOT NULL,
  `Not_flushed_delayed_rows` bigint(32) NOT NULL,
  `Open_files` bigint(32) NOT NULL,
  `Open_streams` bigint(32) NOT NULL,
  `Open_tables` bigint(32) NOT NULL,
  `Opened_tables` bigint(32) NOT NULL,
  `Prepared_stmt_count` bigint(32) NOT NULL,
  `Qcache_free_blocks` bigint(32) NOT NULL,
  `Qcache_free_memory` bigint(32) NOT NULL,
  `Qcache_hits` bigint(32) NOT NULL,
  `Qcache_inserts` bigint(32) NOT NULL,
  `Qcache_lowmem_prunes` bigint(32) NOT NULL,
  `Qcache_not_cached` bigint(32) NOT NULL,
  `Qcache_queries_in_cache` bigint(32) NOT NULL,
  `Qcache_total_blocks` bigint(32) NOT NULL,
  `Questions` bigint(32) NOT NULL,
  `Rpl_status` bigint(32) NOT NULL,
  `Select_full_join` bigint(32) NOT NULL,
  `Select_full_range_join` bigint(32) NOT NULL,
  `Select_range` bigint(32) NOT NULL,
  `Select_range_check` bigint(32) NOT NULL,
  `Select_scan` bigint(32) NOT NULL,
  `Slave_open_temp_tables` bigint(32) NOT NULL,
  `Slave_retried_transactions` bigint(32) NOT NULL,
  `Slave_running` bigint(32) NOT NULL,
  `Slow_launch_threads` bigint(32) NOT NULL,
  `Slow_queries` bigint(32) NOT NULL,
  `Sort_merge_passes` bigint(32) NOT NULL,
  `Sort_range` bigint(32) NOT NULL,
  `Sort_rows` bigint(32) NOT NULL,
  `Sort_scan` bigint(32) NOT NULL,
  `Table_locks_immediate` bigint(32) NOT NULL,
  `Table_locks_waited` bigint(32) NOT NULL,
  `Tc_log_max_pages_used` bigint(32) NOT NULL,
  `Tc_log_page_size` bigint(32) NOT NULL,
  `Tc_log_page_waits` bigint(32) NOT NULL,
  `Threads_cached` bigint(32) NOT NULL,
  `Threads_connected` bigint(32) NOT NULL,
  `Threads_created` bigint(32) NOT NULL,
  `Threads_running` bigint(32) NOT NULL,
  `Uptime` bigint(32) NOT NULL,
  `server_snmp_error_code` longtext NOT NULL,
  `server_mysql_error_code` longtext NOT NULL,
  `Slave_IO_Running` varchar(3) NOT NULL default '0',
  `Slave_SQL_Running` varchar(3) NOT NULL default '0',
  `Seconds_Behind_Master` bigint(32) NOT NULL default '0',
  `illegal_global_user` longtext NOT NULL,
  `illegal_grant_user` longtext NOT NULL,
  `illegal_remote_root` longtext NOT NULL,
  `illegal_user_nopass` longtext NOT NULL,
  `illegal_user_noname` longtext NOT NULL,
  `collection_time_elapse` float NOT NULL COMMENT 'time in seconds for collection',
  `Creation_time` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `server_list_id_ix` (`server_list_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22548 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `server_statistics`
--

LOCK TABLES `server_statistics` WRITE;
/*!40000 ALTER TABLE `server_statistics` DISABLE KEYS */;
/*!40000 ALTER TABLE `server_statistics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system_main`
--

DROP TABLE IF EXISTS `system_main`;
CREATE TABLE `system_main` (
  `system_version` varchar(255) NOT NULL default '2.0.1-GA',
  `system_help_doc` longtext NOT NULL,
  `system_alerts_email_template` longtext NOT NULL,
  `system_owner_name` varchar(255) NOT NULL default 'Kontrollsoft',
  `system_alerts_email` varchar(255) NOT NULL default 'null@kontrollsoft.com',
  `system_hostname` varchar(255) NOT NULL default 'kontrollbase.null.com',
  PRIMARY KEY  (`system_version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system_main`
--

LOCK TABLES `system_main` WRITE;
/*!40000 ALTER TABLE `system_main` DISABLE KEYS */;
INSERT INTO `system_main` (`system_version`, `system_help_doc`, `system_alerts_email_template`, `system_owner_name`, `system_alerts_email`, `system_hostname`) VALUES ('2.0.1-GA','For help please go to http://kontrollsoft.com/kontrollbase/userguide/toc.php','============================================\r\n This is a Kontrollbase alert notiofication \r\n============================================\r\nState:       $alert_state\r\nCustomer:    $server_client_name\r\nCheck:       Kontrollbase -> MySQL Alert -> $hostname\r\nBegin Time:  $date\r\nMessage:\r\n$alert_name\r\n$alert_category\r\n$alert_description\r\n$alert_solution\r\n\r\nFor more information please read the following documentation\r\n$alert_links\r\n','Kontrollsoft','email@null.com','localhost.localdomain');
/*!40000 ALTER TABLE `system_main` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system_pages`
--

DROP TABLE IF EXISTS `system_pages`;
CREATE TABLE `system_pages` (
  `id` int(4) NOT NULL auto_increment,
  `system_pages_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_pages`
--

LOCK TABLES `system_pages` WRITE;
/*!40000 ALTER TABLE `system_pages` DISABLE KEYS */;
INSERT INTO `system_pages` (`id`, `system_pages_name`) VALUES (2,'host'),(3,'login'),(4,'main'),(5,'logout'),(6,'login-failed');
/*!40000 ALTER TABLE `system_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system_pruning_audit`
--

DROP TABLE IF EXISTS `system_pruning_audit`;
CREATE TABLE `system_pruning_audit` (
  `id` int(11) NOT NULL auto_increment,
  `system_users_id` int(11) NOT NULL,
  `pruning_table_type` varchar(255) character set utf8 NOT NULL,
  `Creation_time` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_pruning_audit`
--

LOCK TABLES `system_pruning_audit` WRITE;
/*!40000 ALTER TABLE `system_pruning_audit` DISABLE KEYS */;
/*!40000 ALTER TABLE `system_pruning_audit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system_users`
--

DROP TABLE IF EXISTS `system_users`;
CREATE TABLE `system_users` (
  `id` int(11) NOT NULL auto_increment,
  `system_user_name` varchar(255) NOT NULL,
  `system_user_pass` varchar(255) NOT NULL COMMENT 'MD5',
  `system_user_email` varchar(255) NOT NULL,
  `server_client_id` int(11) NOT NULL default '0' COMMENT '0 = not associated with a client, can see all clients. If set to a number other than 0, limited to that client view.',
  `role_tier` tinyint(4) NOT NULL COMMENT '0 = admin, 1 = standard, 2 = client',
  `creation_time` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `system_user_name_uix` (`system_user_name`),
  UNIQUE KEY `system_user_email_uix` (`system_user_email`),
  KEY `server_client_id_ix` (`server_client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system_users`
--

LOCK TABLES `system_users` WRITE;
/*!40000 ALTER TABLE `system_users` DISABLE KEYS */;
INSERT INTO `system_users` (`id`, `system_user_name`, `system_user_pass`, `system_user_email`, `server_client_id`, `role_tier`, `creation_time`) VALUES (9,'admin','5f4dcc3b5aa765d61d8327deb882cf99','admin@null.com',0,0,'2009-03-03 11:16:22');
/*!40000 ALTER TABLE `system_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system_users_audit`
--

DROP TABLE IF EXISTS `system_users_audit`;
CREATE TABLE `system_users_audit` (
  `id` bigint(32) NOT NULL auto_increment,
  `system_user_id` int(4) NOT NULL,
  `system_pages_id` int(4) NOT NULL,
  `system_pages_attribute` bigint(32) NOT NULL COMMENT 'this would be the server_list_id if visiting a host specific page',
  `Creation_time` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_users_audit`
--

LOCK TABLES `system_users_audit` WRITE;
/*!40000 ALTER TABLE `system_users_audit` DISABLE KEYS */;
/*!40000 ALTER TABLE `system_users_audit` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2009-03-29 22:31:14
