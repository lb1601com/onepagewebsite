<?php 

/**
 * TYPOlight webCMS
 *
 * The TYPOlight webCMS is an accessible web content management system that 
 * specializes in accessibility and generates W3C-compliant HTML code. It 
 * provides a wide range of functionality to develop professional websites 
 * including a built-in search engine, form generator, file and user manager, 
 * CSS engine, multi-language support and many more. For more information and 
 * additional TYPOlight applications like the TYPOlight MVC Framework please 
 * visit the project website http://www.typolight.org.
 *
 * This is the data container array for table tl_catalog_types.
 *
 * PHP version 5
 * @copyright  Martin Komara 2007 
 * @author     Martin Komara 
 * @package    Catalog 
 * @license    GPL 
 * @filesource
 */


/**
 * Table tl_catalog_types 
 */
$GLOBALS['TL_DCA']['tl_catalog_items'] = array
(

	// DC_Catalog container config
	'config' => array
	(
		'dataContainer'               => 'Catalog',
		'ptable'                      => 'tl_catalog_types',
		'switchToEdit'                => false,
		'enableVersioning'            => false,
	)
);


class tl_catalog_items extends Backend
{
}
