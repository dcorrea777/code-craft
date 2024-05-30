# CodeCraft

**CodeCraft** is a boilerplate for PHP projects focused on code quality. This project serves as the basis for new projects, including a pre-installed configuration of several essential tools for keeping code clean, standardized and well-tested.

## Pakages

* [PHP Stan](https://github.com/phpstan/phpstan)
* [PHP Stan Strict Rules](https://github.com/phpstan/phpstan-strict-rules)
* [PHP Stan Deprecation Rules](https://github.com/phpstan/phpstan-deprecation-rules)
* [PHP Stan PHPUnit](https://github.com/phpstan/phpstan-phpunit)
* [PHP Unit](https://github.com/sebastianbergmann/phpunit)
* [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)
* [PHP CodeSniffer Security Audit](https://github.com/FloeDesignTechnologies/phpcs-security-audit)
* [PHP Paraller Lint](https://github.com/php-parallel-lint/PHP-Parallel-Lint)

## How to use

Clone the repository
```sh
git clone https://github.com/dcorrea777/code-craft.git
```

Install dependencies
```sh
composer install
```

Use the tools as needed

```sh
composer phpstan
composer phpcs
composer phplint
composer phpunit
```

## License

This project is licensed under the MIT License. See the LICENSE file for more details.

---

CodeCraft - Keep your PHP code clean, standardized, and well-tested.
