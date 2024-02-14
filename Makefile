lint:
	composer phpcs

lint-fix:
	composer phpcbf

test:
	php artisan test

test-coverage:
	XDEBUG_MODE=coverage php artisan test --coverage-clover build/logs/clover.xml

setup:
	composer update
	composer install
	cp -n .env.example .env
	php artisan key:gen --ansi