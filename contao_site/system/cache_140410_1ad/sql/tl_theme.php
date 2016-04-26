<?php

$this->arrMeta = array
(
	'engine' => 'MyISAM',
	'charset' => 'utf8',
);

$this->arrFields = array
(
	'id' => "int(10) unsigned NOT NULL auto_increment",
	'tstamp' => "int(10) unsigned NOT NULL default '0'",
	'name' => "varchar(128) NOT NULL default ''",
	'author' => "varchar(128) NOT NULL default ''",
	'folders' => "blob NULL",
	'screenshot' => "binary(16) NULL",
	'templates' => "varchar(255) NOT NULL default ''",
	'vars' => "text NULL",
);

$this->arrKeys = array
(
	'id' => 'primary',
);

$this->arrRelations = array
(
);

$this->blnIsDbTable = true;
