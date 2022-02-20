ALTER TABLE `Maquina` ADD `token` VARCHAR(32) NOT NULL AFTER `firmwarebackup`;
ALTER TABLE `Maquina` ADD `codegroups` TEXT DEFAULT NULL AFTER `token`;