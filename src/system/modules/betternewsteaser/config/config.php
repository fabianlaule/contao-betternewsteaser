<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   betternewsteaser
 * @author    Fabian Laule
 * @license   LGPL
 * @copyright Fabian Laule 2014
 */


/**
 * CONTENT ELEMENTS
 */


// Show only if we are at the content elements of news

if ((TL_MODE == 'BE') && \Input::get('do') == 'news' || TL_MODE == 'FE')
{
	$GLOBALS['TL_CTE']['news']['betternewsteaser'] = 'ContentNewsTeaserEnd';
}