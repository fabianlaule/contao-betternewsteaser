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
 * Run in a custom namespace, so the class can be replaced
 */
namespace Fabil;


/**
 * Class ContentNewsTeaserEnd
 *
 * Front end content element "NewsTeaserEnd".
 * @copyright  Fabian Laule 2014
 * @author     Fabian Laule
 * @package    betternewsteaser
 */
class ContentNewsTeaserEnd extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_newsteaser_end';


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		if (TL_MODE == 'BE')
		{
			\System::loadLanguageFile('default');

			$this->strTemplate = 'be_wildcard';
			$this->Template = new \BackendTemplate($this->strTemplate);
			$this->Template->title = '----- ' . $GLOBALS['TL_LANG']['CTE']['betternewsteaser'][0] . ' -----';
		}
		else
		{
			$this->strTemplate = 'ce_newsteaser_end';
			$this->Template = new \FrontendTemplate($this->strTemplate);
			$this->Template->setData($this->arrData);
			$this->Template->newsteaserbreaker = '{{NewsTeaserBreak}}';
		}
	}
}
