<?php

$this->arrMeta = array
(
	'engine' => 'MyISAM',
	'charset' => 'utf8',
);

$this->arrFields = array
(
	'name' => "varchar(255) NOT NULL default ''",
	'tableName' => "varchar(64) NOT NULL default ''",
	'noTable' => "char(1) NOT NULL default ''",
	'addImage' => "char(1) NOT NULL default ''",
	'singleSRC' => "varchar(255) NOT NULL default ''",
	'size' => "varchar(255) NOT NULL default ''",
	'format' => "text NULL",
	'id' => "int(10) unsigned NOT NULL auto_increment",
	'tstamp' => "int(10) unsigned NOT NULL default '0'",
	'dca' => "text NULL",
);

$this->arrKeys = array
(
	'id' => 'primary',
);

$this->arrRelations = array
(
);

$this->blnIsDbTable = true;
