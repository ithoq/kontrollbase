CREATE VIEW view_analytics_overview AS SELECT (max(`server_statistics`.`os_mem_used`) / pow(1024,3)) AS `max_os_mem_used`,(min(`server_statistics`.`os_mem_used`) / pow(1024,3)) AS `min_os_mem_used`,(avg(`server_statistics`.`os_mem_used`) / pow(1024,3)) AS `avg_os_mem_used`,(std(`server_statistics`.`os_mem_used`) / pow(1024,3)) AS `stdev_os_mem_used`,(max((`server_statistics`.`length_data` + `server_statistics`.`length_index`)) / pow(1024,3)) AS `max_size`,(min((`server_statistics`.`length_data` + `server_statistics`.`length_index`)) / pow(1024,3)) AS `min_size`,(avg((`server_statistics`.`length_data` + `server_statistics`.`length_index`)) / pow(1024,3)) AS `avg_size`,(std((`server_statistics`.`length_data` + `server_statistics`.`length_index`)) / pow(1024,3)) AS `stdev_size`,max(`server_statistics`.`num_connections`) AS `max_connections`,min(`server_statistics`.`num_connections`) AS `min_connections`,avg(`server_statistics`.`num_connections`) AS `avg_connections`,std(`server_statistics`.`num_connections`) AS `stdev_connections`,max(`server_statistics`.`queries_per_second`) AS `max_qps`,min(`server_statistics`.`queries_per_second`) AS `min_qps`,avg(`server_statistics`.`queries_per_second`) AS `avg_qps`,std(`server_statistics`.`queries_per_second`) AS `stdev_qps` FROM `server_statistics` WHERE Creation_time < (curdate() - interval 7 day);

CREATE TABLE  `analytics_overview_data` (
`id` BIGINT( 32 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`max_os_mem_used` DOUBLE NOT NULL ,
`min_os_mem_used` DOUBLE NOT NULL ,
`avg_os_mem_used` DOUBLE NOT NULL ,
`stdev_os_mem_used` DOUBLE NOT NULL ,
`max_size` DOUBLE NOT NULL ,
`min_size` DOUBLE NOT NULL ,
`avg_size` DOUBLE NOT NULL ,
`stdev_size` DOUBLE NOT NULL ,
`max_connections` INT( 16 ) UNSIGNED NOT NULL ,
`min_connections` INT( 16 ) UNSIGNED NOT NULL ,
`avg_connections` DECIMAL( 14, 4 ) NOT NULL ,
`stdev_connections` DECIMAL( 26, 4 ) NOT NULL ,
`max_qps` FLOAT NOT NULL ,
`min_qps` FLOAT NOT NULL ,
`avg_qps` DOUBLE NOT NULL ,
`stdev_qps` DOUBLE NOT NULL ,
`Creation_time` DATETIME NOT NULL ,
INDEX (  `Creation_time` )
) ENGINE = INNODB CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT =  'data updated daily by kontroll-overview_daily.pl script';