COMPOSE = docker compose
BASE = -f docker-compose.yml

DB_PASS = $(shell grep DB_PASS .env | cut -d '=' -f2) 
DB_USER = $(shell grep DB_USER .env | cut -d '=' -f2)
DB_HOST = $(shell grep DB_HOST .env | cut -d '=' -f2)
DB_NAME = $(shell grep DB_NAME .env | cut -d '=' -f2)

include .env
export

PHP_SERVICE = php

dev-up:
	$(COMPOSE) $(BASE) up -d

dev-down:
	$(COMPOSE) $(BASE) down

dev-logs:
	$(COMPOSE) $(BASE) logs -f

dev-shell:
	$(COMPOSE) $(BASE) exec $(PHP_SERVICE) bash

dev-reset:
	$(COMPOSE) $(BASE) down -v --remove-orphans


dev-mysql:
	@docker exec -it mysql_server_externo mysql -h $(DB_HOST) -u $(DB_USER) -p$(DB_PASS)  $(DB_NAME)

help:
	@echo ""
	@echo "Comandos disponibles:"
	@echo "  make dev-up       → levantar contenedor"
	@echo "  make dev-down     → bajar contenedor"
	@echo "  make dev-logs     → ver logs"
	@echo "  make dev-shell    → entrar al contenedor PHP"
	@echo "  make dev-mysql    → conectar al MySQL externo"
	@echo "  make dev-reset    → borrar contenedores y volúmenes"
	@echo ""
