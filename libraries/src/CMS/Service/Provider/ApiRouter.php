<?php
/**
 * Joomla! Content Management System
 *
 * @copyright  Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\CMS\Service\Provider;

defined('JPATH_PLATFORM') or die;

use Joomla\CMS\Router\ApiRouter;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;

/**
 * Service provider for the application's API router dependency
 *
 * @since  __DEPLOY_VERSION__
 */
class ApiRouter implements ServiceProviderInterface
{
	/**
	 * Registers the service provider with a DI container.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  void
	 *
	 * @since   __DEPLOY_VERSION__
	 */
	public function register(Container $container)
	{
		$container->alias('ApiRouter', 'Joomla\CMS\Router\ApiRouter')
			->share(
			'Joomla\CMS\Router\ApiRouter',
			function (Container $container)
			{
				return new ApiRouter;
			},
			true
		);
	}
}
