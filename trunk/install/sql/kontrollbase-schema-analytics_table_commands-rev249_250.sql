create view view_analytics_overview as select ((MAX(os_mem_used)) / POWER(1024,3)) max_os_mem_used, ((MIN(os_mem_used)) / POWER(1024,3)) min_os_mem_used, ((AVG(os_mem_used)) / POWER(1024,3)) avg_os_mem_used, ((STDDEV_POP(os_mem_used)) / POWER(1024,3))stdev_os_mem_used, ((MAX(length_data + length_index)) / POWER(1024,3)) max_size, ((MIN(length_data + length_index)) / POWER(1024,3)) min_size, ((AVG(length_data + length_index)) / POWER(1024,3)) avg_size, ((STDDEV_POP(length_data + length_index)) / POWER(1024,3)) stdev_size, MAX(num_connections) max_connections,  MIN(num_connections) min_connections, AVG(num_connections) avg_connections, STDDEV_POP(num_connections) stdev_connections, MAX(queries_per_second) max_qps, MIN(queries_per_second) min_qps, AVG(queries_per_second) avg_qps, STDDEV_POP(queries_per_second) stdev_qps from server_statistics where DATE_SUB(CURDATE(), INTERVAL 7 DAY);

CREATE TABLE  `kontrollbase`.`analytics_overview_data` (
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
) ENGINE = INNODB CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT =  'data updated daily by kontroll-overview_daily.pl script'