<?php
/**
 * Create PHP Package Test Bootstrap
 *
 * @package create-php-package
 */

declare(strict_types=1);

/**
 * Visit {@see https://mantle.alley.co/testing/test-framework.html} to learn more.
 */
\Mantle\Testing\manager()
	->maybe_rsync_plugin()
	->install();
