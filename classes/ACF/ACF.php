<?php

namespace {{ SITE_NAMESPACE }}\ACF;

use {{ SITE_NAMESPACE }}\ACF\Blocks\Content\ContentWithImage;

/**
 * Class ACF
 * @package Pryor\ACF
 */
class ACF
{
	/**
	 * ACF Constructor
	 */
	public function __construct()
	{
		new ContentWithImage();
	}
}
