# SQL Dump for wgxpiwik module
# PhpMyAdmin Version: 4.0.4
# http://www.phpmyadmin.net
#
# Host: localhost
# Generated on: Tue Jan 12, 2016 to 23:05
# Server version: 5.6.16
# PHP Version: 5.5.11

#
# Structure table for `wgxpiwik_permissions` 3
#

CREATE TABLE `mod_wgxpiwik_perms` (
  `perm_id` INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `perm_groupid` INT(10) NOT NULL DEFAULT '0',
  `perm_piwik_login` varchar(100) NULL DEFAULT '',
  `perm_weight` INT(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`perm_id`)
) ENGINE=InnoDB;
