<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Betternewsteaser
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Fabil',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'Fabil\ContentNewsTeaserEnd' => 'system/modules/betternewsteaser/elements/ContentNewsTeaserEnd.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_newsteaser_end'           => 'system/modules/betternewsteaser/templates/elements',
	'news_short_betternewsteaser' => 'system/modules/betternewsteaser/templates/news',
));
