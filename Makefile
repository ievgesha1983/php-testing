# установка зависимостей проекта composer

install:
	composer install

# проверка верности компоновки composer

validate:
	composer validate

# проверка проекта PHP Codesniffer

lint:
	exec --verbose phpcs -- -standard=PSR12 src bin

# тестируем обработку строк

strings:
	./bin/strings
