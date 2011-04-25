;; Date: $Date$
;; Author: $Author$
;; Revision: $Revision$
;; Name: alter_table_rev322.sql
;; Purpose: SQL script that will update a pre-rev322 kontrollbase schema to support the addition of server_notes.
;; Usage:
;;       Use this SQL command to update your current Kontrollbase server if your installation is of a revision earlier than rev-322. 
;;       To import use the following command from the command line.
;;         shell> mysql --user=[kontrollbase username] --password=[password] kontrollbase < alter_table_rev322.sql
;;       If you want to execute it from the MySQL CLI, just paste it into the console once you are using the kontrollbase schema
;;
alter table server_list add column server_notes longtext after server_snmp_version;
