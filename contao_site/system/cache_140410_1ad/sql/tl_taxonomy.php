<?php

$this->arrMeta = array
(
	'engine' => 'MyISAM',
	'charset' => 'utf8',
);

$this->arrFields = array
(
	'name' => "varchar(255) NOT NULL default ''",
	'alias' => "varchar(255) NOT NULL default ''",
	'id' => "int(10) unsigned NOT NULL auto_increment",
	'pid' => "int(10) unsigned NOT NULL default '0'",
	'tstamp' => "int(10) unsigned NOT NULL default '0'",
	'sorting' => "int(10) unsigned NOT NULL default '0'",
	'type' => "varchar(255) NOT NULL default ''",
);

$this->arrKeys = array
(
	'id' => 'primary',
	'alias' => 'index',
	'pid' => 'index',
);

$this->arrRelations = array
(
);

$this->blnIsDbTable = true;
