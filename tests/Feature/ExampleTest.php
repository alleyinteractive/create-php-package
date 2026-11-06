<?php
/**
 * ExampleTest class file
 *
 * @package create-php-package
 */

declare(strict_types=1);

namespace Alley\CreatePhpPackage\Tests\Feature;

use Alley\CreatePhpPackage\Tests\TestCase;

/**
 * Visit {@see https://mantle.alley.co/testing/test-framework.html} to learn more.
 */
class ExampleTest extends TestCase {
	/**
	 * Example feature test.
	 */
	public function test_example(): void {
		$this->assertTrue( true );
		$this->assertNotEmpty( home_url() );
	}
}
