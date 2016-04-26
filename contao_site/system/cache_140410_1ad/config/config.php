<?php 

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Core
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Back end modules
 */
$GLOBALS['BE_MOD'] = array
(
	// Content modules
	'content' => array
	(
		'article' => array
		(
			'tables'      => array('tl_article', 'tl_content'),
			'table'       => array('TableWizard', 'importTable'),
			'list'        => array('ListWizard', 'importList')
		),
		'form' => array
		(
			'tables'      => array('tl_form', 'tl_form_field')
		)
	),

	// Design modules
	'design' => array
	(
		'themes' => array
		(
			'tables'      => array('tl_theme', 'tl_module', 'tl_style_sheet', 'tl_style', 'tl_layout'),
			'importTheme' => array('Theme', 'importTheme'),
			'exportTheme' => array('Theme', 'exportTheme'),
			'import'      => array('StyleSheets', 'importStyleSheet')
		),
		'page' => array
		(
			'tables'      => array('tl_page')
		),
		'tpl_editor' => array
		(
			'tables'      => array('tl_templates'),
			'new_tpl'     => array('tl_templates', 'addNewTemplate')
		)
	),

	// Account modules
	'accounts' => array
	(
		'member' => array
		(
			'tables'      => array('tl_member')
		),
		'mgroup' => array
		(
			'tables'      => array('tl_member_group')
		),
		'user' => array
		(
			'tables'      => array('tl_user')
		),
		'group' => array
		(
			'tables'      => array('tl_user_group')
		)
	),

	// System modules
	'system' => array
	(
		'files' => array
		(
			'tables'      => array('tl_files')
		),
		'log' => array
		(
			'tables'      => array('tl_log')
		),
		'settings' => array
		(
			'tables'      => array('tl_settings')
		),
		'maintenance' => array
		(
			'callback'    => 'ModuleMaintenance'
		),
		'undo' => array
		(
			'tables'      => array('tl_undo')
		)
	)
);


/**
 * Front end modules
 */
$GLOBALS['FE_MOD'] = array
(
	'navigationMenu' => array
	(
		'navigation'     => 'ModuleNavigation',
		'customnav'      => 'ModuleCustomnav',
		'breadcrumb'     => 'ModuleBreadcrumb',
		'quicknav'       => 'ModuleQuicknav',
		'quicklink'      => 'ModuleQuicklink',
		'booknav'        => 'ModuleBooknav',
		'articlenav'     => 'ModuleArticlenav',
		'sitemap'        => 'ModuleSitemap'
	),
	'user' => array
	(
		'login'          => 'ModuleLogin',
		'logout'         => 'ModuleLogout',
		'personalData'   => 'ModulePersonalData',
		'registration'   => 'ModuleRegistration',
		'lostPassword'   => 'ModulePassword',
		'closeAccount'   => 'ModuleCloseAccount'
	),
	'application' => array
	(
		'form'           => 'Form',
		'search'         => 'ModuleSearch'
	),
	'miscellaneous' => array
	(
		'flash'          => 'ModuleFlash',
		'articleList'    => 'ModuleArticleList',
		'randomImage'    => 'ModuleRandomImage',
		'html'           => 'ModuleHtml',
		'rss_reader'     => 'ModuleRssReader'
	)
);


/**
 * Content elements
 */
$GLOBALS['TL_CTE'] = array
(
	'texts' => array
	(
		'headline'        => 'ContentHeadline',
		'text'            => 'ContentText',
		'html'            => 'ContentHtml',
		'list'            => 'ContentList',
		'table'           => 'ContentTable',
		'code'            => 'ContentCode'
	),
	'accordion' => array
	(
		'accordionSingle' => 'ContentAccordion',
		'accordionStart'  => 'ContentAccordionStart',
		'accordionStop'   => 'ContentAccordionStop'
	),
	'slider' => array
	(
		'sliderStart'     => 'ContentSliderStart',
		'sliderStop'      => 'ContentSliderStop'
	),
	'links' => array
	(
		'hyperlink'       => 'ContentHyperlink',
		'toplink'         => 'ContentToplink'
	),
	'media' => array
	(
		'image'           => 'ContentImage',
		'gallery'         => 'ContentGallery',
		'player'          => 'ContentMedia',
		'youtube'         => 'ContentYouTube'
	),
	'files' => array
	(
		'download'        => 'ContentDownload',
		'downloads'       => 'ContentDownloads'
	),
	'includes' => array
	(
		'article'         => 'ContentArticle',
		'alias'           => 'ContentAlias',
		'form'            => 'Form',
		'module'          => 'ContentModule',
		'teaser'          => 'ContentTeaser'
	)
);


/**
 * Back end form fields
 */
$GLOBALS['BE_FFL'] = array
(
	'text'           => 'TextField',
	'password'       => 'Password',
	'textStore'      => 'TextStore',
	'textarea'       => 'TextArea',
	'select'         => 'SelectMenu',
	'checkbox'       => 'CheckBox',
	'checkboxWizard' => 'CheckBoxWizard',
	'radio'          => 'RadioButton',
	'radioTable'     => 'RadioTable',
	'inputUnit'      => 'InputUnit',
	'trbl'           => 'TrblField',
	'chmod'          => 'ChmodTable',
	'pageTree'       => 'PageTree',
	'pageSelector'   => 'PageSelector',
	'fileTree'       => 'FileTree',
	'fileSelector'   => 'FileSelector',
	'fileUpload'     => 'Upload',
	'tableWizard'    => 'TableWizard',
	'listWizard'     => 'ListWizard',
	'optionWizard'   => 'OptionWizard',
	'moduleWizard'   => 'ModuleWizard',
	'keyValueWizard' => 'KeyValueWizard',
	'imageSize'      => 'ImageSize',
	'timePeriod'     => 'TimePeriod',
	'metaWizard'     => 'MetaWizard'
);


/**
 * Front end form fields
 */
$GLOBALS['TL_FFL'] = array
(
	'headline'    => 'FormHeadline',
	'explanation' => 'FormExplanation',
	'html'        => 'FormHtml',
	'fieldset'    => 'FormFieldset',
	'text'        => 'FormTextField',
	'password'    => 'FormPassword',
	'textarea'    => 'FormTextArea',
	'select'      => 'FormSelectMenu',
	'radio'       => 'FormRadioButton',
	'checkbox'    => 'FormCheckBox',
	'upload'      => 'FormFileUpload',
	'hidden'      => 'FormHidden',
	'captcha'     => 'FormCaptcha',
	'submit'      => 'FormSubmit'
);


/**
 * Page types
 */
$GLOBALS['TL_PTY'] = array
(
	'regular'   => 'PageRegular',
	'forward'   => 'PageForward',
	'redirect'  => 'PageRedirect',
	'root'      => 'PageRoot',
	'error_403' => 'PageError403',
	'error_404' => 'PageError404'
);


/**
 * Maintenance
 */
$GLOBALS['TL_MAINTENANCE'] = array
(
	'LiveUpdate',
	'RebuildIndex',
	'PurgeData'
);


/**
 * Purge jobs
 */
$GLOBALS['TL_PURGE'] = array
(
	'tables' => array
	(
		'index' => array
		(
			'callback' => array('Automator', 'purgeSearchTables'),
			'affected' => array('tl_search', 'tl_search_index')
		),
		'undo' => array
		(
			'callback' => array('Automator', 'purgeUndoTable'),
			'affected' => array('tl_undo')
		),
		'versions' => array
		(
			'callback' => array('Automator', 'purgeVersionTable'),
			'affected' => array('tl_version')
		),
		'log' => array
		(
			'callback' => array('Automator', 'purgeSystemLog'),
			'affected' => array('tl_log')
		)
	),
	'folders' => array
	(
		'images' => array
		(
			'callback' => array('Automator', 'purgeImageCache'),
			'affected' => array('assets/images')
		),
		'scripts' => array
		(
			'callback' => array('Automator', 'purgeScriptCache'),
			'affected' => array('assets/js', 'assets/css')
		),
		'pages' => array
		(
			'callback' => array('Automator', 'purgePageCache'),
			'affected' => array('system/cache/html')
		),
		'search' => array
		(
			'callback' => array('Automator', 'purgeSearchCache'),
			'affected' => array('system/cache/search')
		),
		'internal' => array
		(
			'callback' => array('Automator', 'purgeInternalCache'),
			'affected' => array('system/cache/config', 'system/cache/dca', 'system/cache/language', 'system/cache/sql')
		),
		'temp' => array
		(
			'callback' => array('Automator', 'purgeTempFolder'),
			'affected' => array('system/tmp')
		)
	),
	'custom' => array
	(
		'xml' => array
		(
			'callback' => array('Automator', 'generateXmlFiles')
		)
	)
);


/**
 * Image crop modes
 */
$GLOBALS['TL_CROP'] = array
(
	'relative' => array
	(
		'proportional', 'box'
	),
	'crop' => array
	(
		'left_top',    'center_top',    'right_top',
		'left_center', 'center_center', 'right_center',
		'left_bottom', 'center_bottom', 'right_bottom'
	)
);


/**
 * Cron jobs
 */
$GLOBALS['TL_CRON'] = array
(
	'monthly' => array
	(
		array('Automator', 'purgeImageCache')
	),
	'weekly' => array
	(
		array('Automator', 'generateSitemap'),
		array('Automator', 'purgeScriptCache'),
		array('Automator', 'purgeSearchCache')
	),
	'daily' => array
	(
		array('Automator', 'rotateLogs'),
		array('Automator', 'purgeTempFolder'),
		array('Automator', 'checkForUpdates')
	),
	'hourly' => array(),
	'minutely' => array()
);


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS'] = array
(
	'getSystemMessages' => array
	(
		array('Messages', 'versionCheck'),
		array('Messages', 'lastLogin'),
		array('Messages', 'topLevelRoot'),
		array('Messages', 'languageFallback')
	)
);


/**
 * Register the auto_item keywords
 */
$GLOBALS['TL_AUTO_ITEM'] = array('items', 'events');


/**
 * Do not index a page if one of the following parameters is set
 */
$GLOBALS['TL_NOINDEX_KEYS'] = array('id', 'file', 'token', 'day', 'month', 'year', 'page', 'PHPSESSID');


/**
 * Wrapper elements
 */
$GLOBALS['TL_WRAPPERS'] = array
(
	'start' => array
	(
		'accordionStart',
		'sliderStart'
	),
	'stop' => array
	(
		'accordionStop',
		'sliderStop'
	),
	'single' => array
	(
		'accordionSingle'
	),
	'separator' => array()
);


/**
 * Other global arrays
 */
$GLOBALS['TL_MIME'] = array();
$GLOBALS['TL_PERMISSIONS'] = array();
$GLOBALS['TL_MODELS'] = array();


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
 * This is the widget configuration file.
 *
 * PHP version 5
 * @copyright  2008 Thyon Design
 * @author     John Brand <john.brand@thyon.com> 
 * @package    TableTree 
 * @license    LGPL 
 * @filesource
 */

$GLOBALS['BE_FFL']['tableTree'] = 'TableTree';

if (TL_MODE == 'BE')
{
	$GLOBALS['TL_HOOKS']['executePreActions'][] = array('TableTree', 'executePreActions');
	$GLOBALS['TL_HOOKS']['executePostActions'][] = array('TableTree', 'executePostActions');

/**
 * TL Icons Configuration
 */

	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_page'] = array('pagemounts.gif', 'regular.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_article'] = array('regular.gif', 'articles.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_news_archive'] = array('news.gif', 'news.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_news'] = array('news.gif', 'iconPLAIN.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_news_comments'] = array('system/modules/news/html/comments.gif', 'iconPLAIN.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_comments'] = array('system/modules/comments/html/icon.gif', 'iconPLAIN.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_calendar'] = array('system/modules/calendar/html/icon.gif', 'system/modules/calendar/html/icon.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_calendar_events'] = array('system/modules/calendar/html/icon.gif', 'iconPLAIN.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_faq_category'] = array('system/modules/faq/html/icon.gif', 'system/modules/faq/html/icon.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_faq'] = array('system/modules/faq/html/icon.gif', 'iconPLAIN.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_form'] = array('form.gif', 'form.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_flash'] = array('flash.gif', 'iconPLAIN.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_layout'] = array('layout.gif', 'layout.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_log'] = array('log.gif', 'iconPLAIN.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_module'] = array('modules.gif', 'modules.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_member'] = array('mgroup.gif', 'member.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_member_group'] = array('mgroup.gif', 'mgroup.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_user'] = array('group.gif', 'user.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_user_group'] = array('group.gif', 'group.gif');	
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_newsletter'] = array('system/modules/newsletter/html/icon.gif', 'iconPLAIN.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_newsletter_channel'] = array('system/modules/newsletter/html/icon.gif', 'system/modules/newsletter/html/icon.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_newsletter_recipients'] = array('mgroup.gif', 'member.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_search'] = array('system/modules/development/html/labels.gif', 'regular.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_search_index'] = array('system/modules/development/html/labels.gif', 'iconPLAIN.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_style_sheet'] = array('css.gif', 'css.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_style'] = array('css.gif', 'iconCSS.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_task'] = array('taskcenter.gif', 'taskcenter.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_task_status'] = array('taskcenter.gif', 'iconPLAIN.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_undo'] = array('undo.gif', 'iconPLAIN.gif');


/**
 * Custom Application Icons
 */

	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_catalog_types'] = array('system/modules/catalog/html/icon.gif', 'system/modules/catalog/html/icon.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_gallery_archive'] = array('system/modules/gallery/html/gallery.gif', 'system/modules/gallery/html/gallery.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_gallery'] = array('system/modules/gallery/html/gallery.gif', 'iconJPG.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_invitation_group'] = array('system/modules/invitation/html/icon.gif', 'system/modules/invitation/html/icon.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_invitation'] = array('system/modules/invitation/html/icon.gif', 'iconPLAIN.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_quickpoll'] = array('system/modules/quickpoll/html/icon.gif', 'system/modules/quickpoll/html/icon.gif');
	$GLOBALS['TL_CONFIG']['tableTree']['icon']['tl_taxonomy'] = array('system/modules/taxonomy/html/icon.gif', 'iconPLAIN.gif');



}


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Calendar
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 1, array
(
	'calendar' => array
	(
		'tables'      => array('tl_calendar', 'tl_calendar_events', 'tl_calendar_feed', 'tl_content'),
		'icon'        => 'system/modules/calendar/assets/icon.gif',
		'table'       => array('TableWizard', 'importTable'),
		'list'        => array('ListWizard', 'importList')
	)
));


/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 2, array
(
	'events' => array
	(
		'calendar'    => 'ModuleCalendar',
		'eventreader' => 'ModuleEventReader',
		'eventlist'   => 'ModuleEventlist',
		'eventmenu'   => 'ModuleEventMenu'
	)
));


/**
 * Cron jobs
 */
$GLOBALS['TL_CRON']['daily'][] = array('Calendar', 'generateFeeds');


/**
 * Register hook to add news items to the indexer
 */
$GLOBALS['TL_HOOKS']['removeOldFeeds'][] = array('Calendar', 'purgeOldFeeds');
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('Calendar', 'getSearchablePages');
$GLOBALS['TL_HOOKS']['generateXmlFiles'][] = array('Calendar', 'generateFeeds');


/**
 * Add permissions
 */
$GLOBALS['TL_PERMISSIONS'][] = 'calendars';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarp';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarfeeds';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarfeedp';


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
 * This is the catalog configuration file.
 *
 * PHP version 5
 * @copyright  Martin Komara 2007 
 * @author     Martin Komara 
 * @package    CatalogModule 
 * @license    GPL 
 * @filesource
 */


/**
 * Back-end module
 */

$GLOBALS['BE_MOD']['content']['catalog'] = array
(
    'tables'       	=> array('tl_catalog_types', 'tl_catalog_fields', 'tl_catalog_items'),
    'icon'         	=> 'system/modules/catalog/html/icon.gif',
    'regenerateDca'	=> array('Catalog', 'regenerateAllDca'),
    'export'				=> array('Catalog', 'exportItems'),
);

if (TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'][] = 'system/modules/catalog/html/style.css'; 
}

/**
 * Front-end module
 */

$GLOBALS['FE_MOD']['catalog'] = array
	(
		'cataloglisting' 		=> 'ModuleCatalogListing',
	);

/**
 * HOOK Permissions
 */
 
$GLOBALS['TL_PERMISSIONS'][] = 'catalogs';


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Comments
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Add content element
 */
$GLOBALS['TL_CTE']['includes']['comments'] = 'ContentComments';


/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['application']['comments'] = 'ModuleComments';


/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 5, array
(
	'comments' => array
	(
		'tables'     => array('tl_comments'),
		'icon'       => 'system/modules/comments/assets/icon.gif',
		'stylesheet' => 'system/modules/comments/assets/style.css'
	)
));


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Devtools
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['devtools'] = array
(
	'autoload' => array
	(
		'callback'   => 'ModuleAutoload',
		'icon'       => 'system/modules/devtools/assets/autoload.gif'
	),
	'extension' => array
	(
		'tables'     => array('tl_extension'),
		'create'     => array('ModuleExtension', 'generate'),
		'icon'       => 'system/modules/devtools/assets/extension.gif'
	),
	'labels' => array
	(
		'callback'   => 'ModuleLabels',
		'icon'       => 'system/modules/devtools/assets/labels.gif',
		'stylesheet' => 'system/modules/devtools/assets/labels.css'
	)
);


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Faq
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Add back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 2, array
(
	'faq' => array
	(
		'tables' => array('tl_faq_category', 'tl_faq'),
		'icon'   => 'system/modules/faq/assets/icon.gif'
	)
));


/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 3, array
(
	'faq' => array
	(
		'faqlist'   => 'ModuleFaqList',
		'faqreader' => 'ModuleFaqReader',
		'faqpage'   => 'ModuleFaqPage'
	)
));


/**
 * Register hooks
 */
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('ModuleFaq', 'getSearchablePages');


/**
 * Add permissions
 */
$GLOBALS['TL_PERMISSIONS'][] = 'faqs';
$GLOBALS['TL_PERMISSIONS'][] = 'faqp';


/**
 * htaccess Generator
 * Copyright (C) 2011 Tristan Lins
 *
 * Extension for:
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  InfinitySoft 2011
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    htaccess Generator
 * @license    LGPL
 * @filesource
 */


/**
 * Include htaccess config file.
 */
if (file_exists(TL_ROOT . '/system/config/htaccess.php')) {
	include(TL_ROOT . '/system/config/htaccess.php');
}


/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['system']['htaccess'] = array
(
	'tables' => array('tl_htaccess'),
	'icon'   => 'system/modules/htaccess/html/icon.png',
);


/**
 * htaccess Modules
 */
$GLOBALS['TL_HTACCESS']['auth']    = 'HtaccessAuth';
$GLOBALS['TL_HTACCESS']['etag']    = 'HtaccessEtag';
$GLOBALS['TL_HTACCESS']['mime']    = 'HtaccessMime';
$GLOBALS['TL_HTACCESS']['deflate'] = 'HtaccessDeflate';
$GLOBALS['TL_HTACCESS']['headers'] = 'HtaccessHeaders';
$GLOBALS['TL_HTACCESS']['expires'] = 'HtaccessExpires';
$GLOBALS['TL_HTACCESS']['custom']  = 'HtaccessCustom';
$GLOBALS['TL_HTACCESS']['rewrite'] = 'HtaccessRewrite';
$GLOBALS['TL_HTACCESS']['h5bp']    = 'HtaccessHtml5Boilerplate';

$GLOBALS['TL_HTACCESS_SUBMODULES']['headers']['etag'] = 'HtaccessEtag';
$GLOBALS['TL_HTACCESS_SUBMODULES']['headers']['h5bp'] = 'HtaccessHtml5Boilerplate';

$GLOBALS['TL_HTACCESS_SUBMODULES']['rewrite']['favicon'] = 'HtaccessRewriteFavicon';


/**
 * Allow .htusers on root level
 */
$GLOBALS['TL_CONFIG']['rootFiles'][] = '.htusers';


/**
 * Contao default configuration
 */
$GLOBALS['TL_HTACCESS_DEFAULTS']['contao'] = array
(
	/* base config */
	'htaccess_default_charset'            => 'utf-8',
	/* etag config */
	'htaccess_etag_disable'               => true,
	/* mime config */
	'htaccess_mime_types'                 => array
	(
		array('extension' => 'js jsonp',
		      'mimetype'  => 'application/javascript'),
		array('extension' => 'json',
		      'mimetype'  => 'application/json'),
		array('extension' => 'oga ogg',
		      'mimetype'  => 'audio/ogg'),
		array('extension' => 'm4a f4a f4b',
		      'mimetype'  => 'audio/mp4'),
		array('extension' => 'ogv',
		      'mimetype'  => 'video/ogg'),
		array('extension' => 'mp4 m4v f4v f4p',
		      'mimetype'  => 'video/mp4'),
		array('extension' => 'webm',
		      'mimetype'  => 'video/webm'),
		array('extension' => 'flv',
		      'mimetype'  => 'video/x-flv'),
		array('extension' => 'svg svgz',
		      'mimetype'  => 'image/svg+xml'),
		array('extension' => 'svgz',
		      'encoding'  => 'gzip'),
		array('extension' => 'eot',
		      'mimetype'  => 'application/vnd.ms-fontobject'),
		array('extension' => 'ttf ttc',
		      'mimetype'  => 'application/x-font-ttf'),
		array('extension' => 'otf',
		      'mimetype'  => 'font/opentype'),
		array('extension' => 'woff',
		      'mimetype'  => 'application/x-font-woff'),
		array('extension' => 'ico',
		      'mimetype'  => 'image/x-icon'),
		array('extension' => 'webp',
		      'mimetype'  => 'image/webp'),
		array('extension' => 'appcache manifest',
		      'mimetype'  => 'text/cache-manifest'),
		array('extension' => 'htc',
		      'mimetype'  => 'text/x-component'),
		array('extension' => 'rss atom xml rdf',
		      'mimetype'  => 'application/xml'),
		array('extension' => 'webapp',
		      'mimetype'  => 'application/x-web-app-manifest+json'),
		array('extension' => 'vcf',
		      'mimetype'  => 'text/x-vcard'),
		array('extension' => 'swf',
		      'mimetype'  => 'application/x-shockwave-flash')
	),
	/* deflate config */
	'htaccess_deflate_files'              => array
	(
		array('mimetype' => 'text/html'),
		array('mimetype' => 'text/css'),
		array('mimetype' => 'text/plain'),
		array('mimetype' => 'text/xml'),
		array('mimetype' => 'text/x-component'),
		array('mimetype' => 'application/javascript'),
		array('mimetype' => 'application/json'),
		array('mimetype' => 'application/xml'),
		array('mimetype' => 'application/xhtml+xml'),
		array('mimetype' => 'application/rss+xml'),
		array('mimetype' => 'application/atom+xml'),
		array('mimetype' => 'application/vnd.ms-fontobject'),
		array('mimetype' => 'image/svg+xml'),
		array('mimetype' => 'image/x-icon'),
		array('mimetype' => 'application/x-font-ttf'),
		array('mimetype' => 'font/opentype')
	),
	/* expires config */
	'htaccess_expires_default'            => (60 * 60 * 24 * 30),
	'htaccess_expires'                    => array
	(
		array('mimetype' => 'text/cache-manifest',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'text/html',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'text/xml',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/xml',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/json',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/rss+xml',
		      'mode'     => 'A',
		      'time'     => (60 * 60)),
		array('mimetype' => 'application/atom+xml',
		      'mode'     => 'A',
		      'time'     => (60 * 60)),
		array('mimetype' => 'image/gif',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'image/png',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'image/jpg',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'image/jpeg',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'image/x-icon',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'video/ogg',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'audio/ogg',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'video/mp4',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'video/webm',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'text/x-component',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'application/x-font-ttf',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'font/opentype',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'application/x-font-woff',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'image/svg+xml',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'application/vnd.ms-fontobject',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'text/css',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30 * 12)),
		array('mimetype' => 'application/javascript',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30 * 12)),
	),
	/* custom config */
	// 'htaccess_custom'              => '',
	/* rewrite config */
	// 'htaccess_rewrite_rules'       => '',
	'htaccess_rewrite_prepend_www'        => false,
	'htaccess_rewrite_remove_www'         => false,
	'htaccess_rewrite_gzip'               => false,
	'htaccess_rewrite_suffix'             => 'html',
	/* h5bp settings */
	'htaccess_h5bp_disable_multiview'     => false,
	'htaccess_h5bp_disable_indexes'       => false,
	'htaccess_h5bp_ie_x_ua_compatible'    => false,
	'htaccess_h5bp_cross_domain_ajax'     => false,
	'htaccess_h5bp_concatenation_include' => false,
	'htaccess_h5bp_ie_flicker_fix'        => false
);


/**
 * Contao development configuration
 */
$GLOBALS['TL_HTACCESS_DEFAULTS']['contao development'] = array
(
	/* base config */
	'htaccess_default_charset'            => 'utf-8',
	/* etag config */
	'htaccess_etag_disable'               => true,
	/* mime config */
	'htaccess_mime_types'                 => array
	(
		array('extension' => 'js jsonp',
		      'mimetype'  => 'application/javascript'),
		array('extension' => 'json',
		      'mimetype'  => 'application/json'),
		array('extension' => 'oga ogg',
		      'mimetype'  => 'audio/ogg'),
		array('extension' => 'm4a f4a f4b',
		      'mimetype'  => 'audio/mp4'),
		array('extension' => 'ogv',
		      'mimetype'  => 'video/ogg'),
		array('extension' => 'mp4 m4v f4v f4p',
		      'mimetype'  => 'video/mp4'),
		array('extension' => 'webm',
		      'mimetype'  => 'video/webm'),
		array('extension' => 'flv',
		      'mimetype'  => 'video/x-flv'),
		array('extension' => 'svg svgz',
		      'mimetype'  => 'image/svg+xml'),
		array('extension' => 'svgz',
		      'encoding'  => 'gzip'),
		array('extension' => 'eot',
		      'mimetype'  => 'application/vnd.ms-fontobject'),
		array('extension' => 'ttf ttc',
		      'mimetype'  => 'application/x-font-ttf'),
		array('extension' => 'otf',
		      'mimetype'  => 'font/opentype'),
		array('extension' => 'woff',
		      'mimetype'  => 'application/x-font-woff'),
		array('extension' => 'ico',
		      'mimetype'  => 'image/x-icon'),
		array('extension' => 'webp',
		      'mimetype'  => 'image/webp'),
		array('extension' => 'appcache manifest',
		      'mimetype'  => 'text/cache-manifest'),
		array('extension' => 'htc',
		      'mimetype'  => 'text/x-component'),
		array('extension' => 'rss atom xml rdf',
		      'mimetype'  => 'application/xml'),
		array('extension' => 'webapp',
		      'mimetype'  => 'application/x-web-app-manifest+json'),
		array('extension' => 'vcf',
		      'mimetype'  => 'text/x-vcard'),
		array('extension' => 'swf',
		      'mimetype'  => 'application/x-shockwave-flash')
	),
	/* deflate config */
	'htaccess_deflate_files'              => array
	(
		array('mimetype' => 'text/html'),
		array('mimetype' => 'text/css'),
		array('mimetype' => 'text/plain'),
		array('mimetype' => 'text/xml'),
		array('mimetype' => 'text/x-component'),
		array('mimetype' => 'application/javascript'),
		array('mimetype' => 'application/json'),
		array('mimetype' => 'application/xml'),
		array('mimetype' => 'application/xhtml+xml'),
		array('mimetype' => 'application/rss+xml'),
		array('mimetype' => 'application/atom+xml'),
		array('mimetype' => 'application/vnd.ms-fontobject'),
		array('mimetype' => 'image/svg+xml'),
		array('mimetype' => 'image/x-icon'),
		array('mimetype' => 'application/x-font-ttf'),
		array('mimetype' => 'font/opentype')
	),
	/* expires config */
	'htaccess_expires_default'            => 0,
	'htaccess_expires'                    => array
	(
		array('mimetype' => 'text/cache-manifest',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'text/html',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'text/xml',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/xml',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/json',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/rss+xml',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/atom+xml',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'image/gif',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'image/png',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'image/jpg',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'image/jpeg',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'image/x-icon',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'video/ogg',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'audio/ogg',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'video/mp4',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'video/webm',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'text/x-component',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/x-font-ttf',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'font/opentype',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/x-font-woff',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'image/svg+xml',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/vnd.ms-fontobject',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'text/css',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/javascript',
		      'mode'     => 'A',
		      'time'     => 0),
	),
	/* custom config */
	// 'htaccess_custom'              => '',
	/* rewrite config */
	// 'htaccess_rewrite_rules'       => '',
	'htaccess_rewrite_prepend_www'        => false,
	'htaccess_rewrite_remove_www'         => false,
	'htaccess_rewrite_gzip'               => false,
	'htaccess_rewrite_suffix'             => 'html',
	/* h5bp settings */
	'htaccess_h5bp_disable_multiview'     => false,
	'htaccess_h5bp_disable_indexes'       => false,
	'htaccess_h5bp_ie_x_ua_compatible'    => false,
	'htaccess_h5bp_cross_domain_ajax'     => false,
	'htaccess_h5bp_concatenation_include' => false,
	'htaccess_h5bp_ie_flicker_fix'        => false
);


/**
 * HTML5 Boilerplate default configuration
 */
$GLOBALS['TL_HTACCESS_DEFAULTS']['html5boilerplate'] = array
(
	/* base config */
	'htaccess_default_charset'            => 'utf-8',
	/* etag config */
	'htaccess_etag_disable'               => true,
	/* mime config */
	'htaccess_mime_types'                 => array
	(
		array('extension' => 'htc',
		      'mimetype'  => 'text/x-component'),
		array('extension' => 'js',
		      'mimetype'  => 'application/javascript'),
		array('extension' => 'oga ogg',
		      'mimetype'  => 'audio/ogg'),
		array('extension' => 'm4a',
		      'mimetype'  => 'audio/mp4'),
		array('extension' => 'ogv',
		      'mimetype'  => 'video/ogg'),
		array('extension' => 'mp4 m4v',
		      'mimetype'  => 'video/mp4'),
		array('extension' => 'webm',
		      'mimetype'  => 'video/webm'),
		array('extension' => 'svg svgz',
		      'mimetype'  => 'image/svg+xml'),
		array('extension' => 'svgz',
		      'encoding'  => 'gzip'),
		array('extension' => 'eot',
		      'mimetype'  => 'application/vnd.ms-fontobject'),
		array('extension' => 'ttf ttc',
		      'mimetype'  => 'application/x-font-ttf'),
		array('extension' => 'otf',
		      'mimetype'  => 'font/opentype'),
		array('extension' => 'woff',
		      'mimetype'  => 'application/x-font-woff'),
		array('extension' => 'ico',
		      'mimetype'  => 'image/x-icon'),
		array('extension' => 'webp',
		      'mimetype'  => 'image/webp'),
		array('extension' => 'appcache manifest',
		      'mimetype'  => 'text/cache-manifest'),
		array('extension' => 'htc',
		      'mimetype'  => 'text/x-component'),
		array('extension' => 'crx',
		      'mimetype'  => 'application/x-chrome-extension'),
		array('extension' => 'oex',
		      'mimetype'  => 'application/x-opera-extension'),
		array('extension' => 'xpi',
		      'mimetype'  => 'application/x-xpinstall'),
		array('extension' => 'safariextz',
		      'mimetype'  => 'application/octet-stream'),
		array('extension' => 'vcf',
		      'mimetype'  => 'text/x-vcard')
	),
	/* deflate config */
	'htaccess_deflate_files'              => array
	(
		array('mimetype' => 'text/html'),
		array('mimetype' => 'text/css'),
		array('mimetype' => 'text/plain'),
		array('mimetype' => 'text/xml'),
		array('mimetype' => 'text/x-component'),
		array('mimetype' => 'application/javascript'),
		array('mimetype' => 'application/json'),
		array('mimetype' => 'application/xml'),
		array('mimetype' => 'application/xhtml+xml'),
		array('mimetype' => 'application/rss+xml'),
		array('mimetype' => 'application/atom+xml'),
		array('mimetype' => 'application/vnd.ms-fontobject'),
		array('mimetype' => 'image/svg+xml'),
		array('mimetype' => 'image/x-icon'),
		array('mimetype' => 'application/x-font-ttf'),
		array('mimetype' => 'font/opentype')
	),
	/* expires config */
	'htaccess_expires_default'            => (60 * 60 * 24 * 30),
	'htaccess_expires'                    => array
	(
		array('mimetype' => 'text/cache-manifest',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'text/html',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'text/xml',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/xml',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/json',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/rss+xml',
		      'mode'     => 'A',
		      'time'     => (60 * 60)),
		array('mimetype' => 'application/atom+xml',
		      'mode'     => 'A',
		      'time'     => (60 * 60)),
		array('mimetype' => 'image/x-icon',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 7.5)),
		array('mimetype' => 'image/gif',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'image/png',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'image/jpg',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'image/jpeg',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'video/ogg',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'audio/ogg',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'video/mp4',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'video/webm',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'text/x-component',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'application/x-font-ttf',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'font/opentype',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'application/x-font-woff',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'image/svg+xml',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'application/vnd.ms-fontobject',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30)),
		array('mimetype' => 'text/css',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30 * 12)),
		array('mimetype' => 'application/javascript',
		      'mode'     => 'A',
		      'time'     => (60 * 60 * 24 * 30 * 12)),
	),
	/* custom config */
	// 'htaccess_custom'              => '',
	/* rewrite config */
	// 'htaccess_rewrite_rules'       => '',
	'htaccess_rewrite_prepend_www'        => false,
	'htaccess_rewrite_remove_www'         => false,
	'htaccess_rewrite_gzip'               => false,
	'htaccess_rewrite_suffix'             => 'html',
	/* h5bp settings */
	'htaccess_h5bp_disable_multiview'     => true,
	'htaccess_h5bp_disable_indexes'       => true,
	'htaccess_h5bp_ie_x_ua_compatible'    => false,
	'htaccess_h5bp_cross_domain_ajax'     => false,
	'htaccess_h5bp_concatenation_include' => false,
	'htaccess_h5bp_ie_flicker_fix'        => false
);


/**
 * HTML5 Boilerplate developer configuration
 */
$GLOBALS['TL_HTACCESS_DEFAULTS']['html5boilerplate development'] = array
(
	/* base config */
	'htaccess_default_charset'            => 'utf-8',
	/* etag config */
	'htaccess_etag_disable'               => true,
	/* mime config */
	'htaccess_mime_types'                 => array
	(
		array('extension' => 'htc',
		      'mimetype'  => 'text/x-component'),
		array('extension' => 'js',
		      'mimetype'  => 'application/javascript'),
		array('extension' => 'oga ogg',
		      'mimetype'  => 'audio/ogg'),
		array('extension' => 'm4a',
		      'mimetype'  => 'audio/mp4'),
		array('extension' => 'ogv',
		      'mimetype'  => 'video/ogg'),
		array('extension' => 'mp4 m4v',
		      'mimetype'  => 'video/mp4'),
		array('extension' => 'webm',
		      'mimetype'  => 'video/webm'),
		array('extension' => 'svg svgz',
		      'mimetype'  => 'image/svg+xml'),
		array('extension' => 'svgz',
		      'encoding'  => 'gzip'),
		array('extension' => 'eot',
		      'mimetype'  => 'application/vnd.ms-fontobject'),
		array('extension' => 'ttf ttc',
		      'mimetype'  => 'application/x-font-ttf'),
		array('extension' => 'otf',
		      'mimetype'  => 'font/opentype'),
		array('extension' => 'woff',
		      'mimetype'  => 'application/x-font-woff'),
		array('extension' => 'ico',
		      'mimetype'  => 'image/x-icon'),
		array('extension' => 'webp',
		      'mimetype'  => 'image/webp'),
		array('extension' => 'appcache manifest',
		      'mimetype'  => 'text/cache-manifest'),
		array('extension' => 'htc',
		      'mimetype'  => 'text/x-component'),
		array('extension' => 'crx',
		      'mimetype'  => 'application/x-chrome-extension'),
		array('extension' => 'oex',
		      'mimetype'  => 'application/x-opera-extension'),
		array('extension' => 'xpi',
		      'mimetype'  => 'application/x-xpinstall'),
		array('extension' => 'safariextz',
		      'mimetype'  => 'application/octet-stream'),
		array('extension' => 'vcf',
		      'mimetype'  => 'text/x-vcard')
	),
	/* deflate config */
	'htaccess_deflate_files'              => array
	(
		array('mimetype' => 'text/html'),
		array('mimetype' => 'text/css'),
		array('mimetype' => 'text/plain'),
		array('mimetype' => 'text/xml'),
		array('mimetype' => 'text/x-component'),
		array('mimetype' => 'application/javascript'),
		array('mimetype' => 'application/json'),
		array('mimetype' => 'application/xml'),
		array('mimetype' => 'application/xhtml+xml'),
		array('mimetype' => 'application/rss+xml'),
		array('mimetype' => 'application/atom+xml'),
		array('mimetype' => 'application/vnd.ms-fontobject'),
		array('mimetype' => 'image/svg+xml'),
		array('mimetype' => 'image/x-icon'),
		array('mimetype' => 'application/x-font-ttf'),
		array('mimetype' => 'font/opentype')
	),
	/* expires config */
	'htaccess_expires_default'            => 0,
	'htaccess_expires'                    => array
	(
		array('mimetype' => 'text/cache-manifest',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'text/html',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'text/xml',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/xml',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/json',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/rss+xml',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/atom+xml',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'image/x-icon',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'image/gif',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'image/png',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'image/jpg',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'image/jpeg',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'video/ogg',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'audio/ogg',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'video/mp4',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'video/webm',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'text/x-component',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/x-font-ttf',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'font/opentype',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/x-font-woff',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'image/svg+xml',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/vnd.ms-fontobject',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'text/css',
		      'mode'     => 'A',
		      'time'     => 0),
		array('mimetype' => 'application/javascript',
		      'mode'     => 'A',
		      'time'     => 0),
	),
	/* custom config */
	// 'htaccess_custom'              => '',
	/* rewrite config */
	// 'htaccess_rewrite_rules'       => '',
	'htaccess_rewrite_prepend_www'        => false,
	'htaccess_rewrite_remove_www'         => false,
	'htaccess_rewrite_gzip'               => false,
	'htaccess_rewrite_suffix'             => 'html',
	/* h5bp settings */
	'htaccess_h5bp_disable_multiview'     => true,
	'htaccess_h5bp_disable_indexes'       => true,
	'htaccess_h5bp_ie_x_ua_compatible'    => false,
	'htaccess_h5bp_cross_domain_ajax'     => false,
	'htaccess_h5bp_concatenation_include' => false,
	'htaccess_h5bp_ie_flicker_fix'        => false
);


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Listing
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Front end module
 */
$GLOBALS['FE_MOD']['application']['listing'] = 'ModuleListing';


/**
 * htaccess Generator
 * Copyright (C) 2011 Tristan Lins
 *
 * Extension for:
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  InfinitySoft 2011
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    MetaPalettes
 * @license    LGPL
 * @filesource
 */


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('MetaPalettes', 'generatePalettes');


/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  MEN AT WORK 2012, certo web & design GmbH 2012 
 * @package    MultiColumnWizard 
 * @license    LGPL 
 * @filesource
 */

$GLOBALS['BE_FFL']['multiColumnWizard'] = 'MultiColumnWizard';
$GLOBALS['TL_FFL']['multiColumnWizard'] = 'MultiColumnWizard';


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('MultiColumnWizardHelper', 'supportModalSelector');


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package News
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 1, array
(
	'news' => array
	(
		'tables'      => array('tl_news_archive', 'tl_news', 'tl_news_feed', 'tl_content'),
		'table'       => array('TableWizard', 'importTable'),
		'list'        => array('ListWizard', 'importList')
	)
));


/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 2, array
(
	'news' => array
	(
		'newslist'    => 'ModuleNewsList',
		'newsreader'  => 'ModuleNewsReader',
		'newsarchive' => 'ModuleNewsArchive',
		'newsmenu'    => 'ModuleNewsMenu'
	)
));


/**
 * Cron jobs
 */
$GLOBALS['TL_CRON']['daily'][] = array('News', 'generateFeeds');


/**
 * Register hook to add news items to the indexer
 */
$GLOBALS['TL_HOOKS']['removeOldFeeds'][] = array('News', 'purgeOldFeeds');
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('News', 'getSearchablePages');
$GLOBALS['TL_HOOKS']['generateXmlFiles'][] = array('News', 'generateFeeds');


/**
 * Add permissions
 */
$GLOBALS['TL_PERMISSIONS'][] = 'news';
$GLOBALS['TL_PERMISSIONS'][] = 'newp';
$GLOBALS['TL_PERMISSIONS'][] = 'newsfeeds';
$GLOBALS['TL_PERMISSIONS'][] = 'newsfeedp';


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Newsletter
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 4, array
(
	'newsletter' => array
	(
		'tables'     => array('tl_newsletter_channel', 'tl_newsletter', 'tl_newsletter_recipients'),
		'send'       => array('Newsletter', 'send'),
		'import'     => array('Newsletter', 'importRecipients'),
		'icon'       => 'system/modules/newsletter/assets/icon.gif',
		'stylesheet' => 'system/modules/newsletter/assets/style.css'
	)
));


/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 4, array
(
	'newsletter' => array
	(
		'subscribe'   => 'ModuleSubscribe',
		'unsubscribe' => 'ModuleUnsubscribe',
		'nl_list'     => 'ModuleNewsletterList',
		'nl_reader'   => 'ModuleNewsletterReader'
	)
));


/**
 * Register hooks
 */
$GLOBALS['TL_HOOKS']['createNewUser'][] = array('Newsletter', 'createNewUser');
$GLOBALS['TL_HOOKS']['activateAccount'][] = array('Newsletter', 'activateAccount');
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('Newsletter', 'getSearchablePages');
$GLOBALS['TL_HOOKS']['closeAccount'][] = array('Newsletter', 'removeSubscriptions');


/**
 * Add permissions
 */
$GLOBALS['TL_PERMISSIONS'][] = 'newsletters';
$GLOBALS['TL_PERMISSIONS'][] = 'newsletterp';


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   Repository
 * @author    Peter Koch, IBK Software AG
 * @license   See accompaning file LICENSE.txt
 * @copyright Peter Koch 2008-2010
 */


/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['system']['repository_catalog'] = array
(
	'callback'   => 'RepositoryCatalog',
	'icon'       => RepositoryBackendTheme::image('catalog16'),
	'stylesheet' => RepositoryBackendTheme::file('backend.css')
);

$GLOBALS['BE_MOD']['system']['repository_manager'] = array
(
	'callback'   => 'RepositoryManager',
	'icon'       => RepositoryBackendTheme::image('install16'),
	'stylesheet' => RepositoryBackendTheme::file('backend.css')
);


/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Lingo4you 2011
 * @author     Mario Müller <http://www.lingo4u.de/>
 * @package    SlickMap
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Content elements
 */
$GLOBALS['TL_CTE']['includes']['slickmap'] = 'SlickMap';

$GLOBALS['SLICKMAP']['CSS'] = 'system/modules/slickmap/assets/styles/slickmap.css';


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
 * This is the catalog configuration file.
 *
 * PHP version 5
 * @copyright  2007 Martin Komara, 2008 Thyon Design, 2008 Evan Ruchelman
 * @author     Martin Komara <martin.komara@gmail.com>, John Brand <john.brand@thyon.com>, Evan Ruchelman <tl@ruchelman.com>
 * @package    CatalogModule 
 * @license    GPL 
 * @filesource
 */

$GLOBALS['BE_MOD']['content']['taxonomy'] = array
(
    'tables'       => array('tl_taxonomy'),
    'icon'         => 'system/modules/taxonomy/html/icon.gif'
);

$GLOBALS['BE_FFL']['taxonomyTree'] = 'TaxonomyTree';

if (TL_MODE == 'BE')
{
	$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/taxonomy/html/taxonomywizard.js'; 
}

$GLOBALS['TL_HOOKS']['executePreActions'][] = array('TaxonomyTree', 'executePreActions');
$GLOBALS['TL_HOOKS']['executePostActions'][] = array('TaxonomyTree', 'executePostActions')
