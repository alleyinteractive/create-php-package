# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this repo is

A **skeleton PHP package** for WordPress development, maintained by Alley Interactive. Consumers click "Use template" on GitHub, then run `make` (or `php ./configure.php`) to replace placeholders throughout the files. Most changes here are to the template itself — keep placeholder tokens like `create-php-package`, `Alley\CreatePhpPackage`, `ExamplePackage`, `author_name`, and `vendor_name` intact unless the task is to change them. If you add a new placeholder, add it to `$search_and_replace` in `configure.php`.

## Rules

- Autoloading is PSR-4: `Alley\CreatePhpPackage\` → `src/`, `Alley\CreatePhpPackage\Tests\` → `tests/`. Class names are StudlyCase and each file is named after its class (`src/ExamplePackage.php`).
- All PHP uses `declare(strict_types=1);`, full type coverage, and passes PHPStan level max.
- Code follows `alleyinteractive/alley-coding-standards`; method and function names stay snake_case.
- Tests extend `tests/TestCase.php` (Mantle Testkit) for WordPress-aware tests, or `PHPUnit\Framework\TestCase` for pure unit tests.

## Common commands

```sh
composer test        # lint (phpcs, phpstan, rector dry-run) then phpunit
composer lint:fix    # rector:fix + phpcbf
composer phpunit     # PHPUnit only
vendor/bin/phpunit --filter ExampleUnitTest
```
