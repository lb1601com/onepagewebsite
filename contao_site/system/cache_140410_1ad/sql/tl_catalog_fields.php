<?php

$this->arrMeta = array
(
	'engine' => 'MyISAM',
	'charset' => 'utf8',
);

$this->arrFields = array
(
	'name' => "varchar(255) NOT NULL default ''",
	'description' => "varchar(255) NOT NULL default ''",
	'colName' => "varchar(64) NOT NULL default ''",
	'type' => "varchar(64) NOT NULL default 'number'",
	'titleField' => "char(1) NOT NULL default ''",
	'filteredField' => "char(1) NOT NULL default ''",
	'searchableField' => "char(1) NOT NULL default ''",
	'sortingField' => "char(1) NOT NULL default ''",
	'groupingMode' => "int(10) NOT NULL default '0'",
	'parentCheckbox' => "varchar(255) NOT NULL default ''",
	'mandatory' => "char(1) NOT NULL default ''",
	'defValue' => "varchar(255) NOT NULL default ''",
	'uniqueItem' => "char(1) NOT NULL default ''",
	'minValue' => "int(10) NULL default NULL",
	'maxValue' => "int(10) NULL default NULL",
	'format' => "char(1) NOT NULL default ''",
	'formatFunction' => "varchar(6) NOT NULL default ''",
	'formatStr' => "varchar(255) NOT NULL default ''",
	'rte' => "char(1) NOT NULL default ''",
	'itemTable' => "varchar(255) NOT NULL default ''",
	'itemTableValueCol' => "varchar(255) NOT NULL default ''",
	'limitItems' => "char(1) NOT NULL default ''",
	'items' => "text NULL",
	'childrenSelMode' => "char(1) NOT NULL default ''",
	'itemSortCol' => "varchar(255) NOT NULL default ''",
	'includeTime' => "char(1) NOT NULL default ''",
	'linkToDetails' => "char(1) NOT NULL default ''",
	'multiple' => "char(1) NOT NULL default ''",
	'showLink' => "char(1) NOT NULL default ''",
	'showImage' => "char(1) NOT NULL default ''",
	'imageWidth' => "int(10) NULL default NULL",
	'imageHeight' => "int(10) NULL default NULL",
	'insertBreak' => "char(1) NOT NULL default ''",
	'aliasTitle' => "varchar(255) NOT NULL default ''",
	'taxonomyRoot' => "int(10) unsigned NOT NULL default '0'",
	'customFiletree' => "char(1) NOT NULL default ''",
	'uploadFolder' => "varchar(255) NOT NULL default ''",
	'validFileTypes' => "varchar(255) NOT NULL default ''",
	'filesOnly' => "char(1) NOT NULL default ''",
	'id' => "int(10) unsigned NOT NULL auto_increment",
	'pid' => "int(10) unsigned NOT NULL default '0'",
	'sorting' => "int(10) unsigned NOT NULL default '0'",
	'tstamp' => "int(10) unsigned NOT NULL default '0'",
);

$this->arrKeys = array
(
	'id' => 'primary',
	'pid' => 'index',
);

$this->arrRelations = array
(
);

$this->blnIsDbTable = true;
