start:
	php artisan serve --host 0.0.0.0
	
lint:
	composer phpcs -- --standard=PSR12 app

lint-fix:
	composer phpcbf -- --standard=PSR12 app

test:
	php artisan test

test-coverage:
	XDEBUG_MODE=coverage php artisan test --coverage-clover build/logs/clover.xml

setup:
	composer install
	cp -n .env.example .env
	php artisan key:gen --ansi