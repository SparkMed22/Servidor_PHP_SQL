# Servidor Base PHP + MySQL + Docker

Plantilla mínima para iniciar proyectos en **PHP** utilizando **Docker** y una **base de datos MySQL externa**.

La idea es simple:
tener un entorno listo para desarrollar sin instalar PHP ni Apache en tu sistema.

---

# Requisitos

Antes de usar el proyecto debes tener instalado:

* Docker
* Docker Compose
* Make

Verificar instalación:

```
docker --version
docker compose version
make --version
```

---

# Configuración inicial

1️⃣ Clonar el repositorio

```
git clone <repo>
cd <repo>
```

2️⃣ Crear archivo de entorno

Renombrar:

```
.env.example
```

a:

```
.env
```

3️⃣ Completar los datos dentro del `.env`

```
DB_HOST=<IP del Servidor MYSQL>
DB_NAME=<nombre_base_datos>
DB_USER=<usuario_mysql>
DB_PASS=<password_mysql>
```

---

# Base de datos

Este proyecto **no levanta MySQL**, espera conectarse a un servidor existente.

Por defecto el comando `make dev-mysql` usa el contenedor:

```
mysql_server_externo
```

Si tu contenedor tiene otro nombre debes modificar el comando dentro del **Makefile**.

---

# Levantar el servidor

Iniciar contenedor:

```
make dev-up
```

La aplicación estará disponible en:

```
http://localhost:8001
```

---

# Detener servidor

```
make dev-down
```

---

# Ver logs

```
make dev-logs
```

---

# Entrar al contenedor PHP

```
make dev-shell
```

---

# Conectarse a MySQL

```
make dev-mysql
```

Este comando ejecuta:

```
docker exec -it mysql_server_externo mysql -h DB_HOST -u DB_USER -pDB_PASS DB_NAME
```

---

# Reset completo del entorno

Elimina contenedores y volúmenes:

```
make dev-reset
```

---

# Estructura del proyecto

```
app/
│
├── views/
│   ├── error/
│   │   └── error_404.php
│   │
│   └── utils/
│       └── componentes reutilizables
│
public/
│
├── css/
├── js/
├── img/
└── index.php
```

### app/

Código **privado del servidor**.

Aquí viven:

* lógica del sistema
* vistas
* componentes reutilizables

### public/

Contenido **accesible desde el navegador**.

Ejemplos:

* imágenes
* CSS
* JavaScript
* `index.php`

---

# Manejo de errores

Las páginas de error se almacenan en:

```
app/views/error/
```

Formato esperado:

```
error_404.php
error_500.php
```

---

# Componentes reutilizables

Se ubican en:

```
app/views/utils/
```

Pensado para:

* headers
* footers
* layouts
* componentes de UI

---

# Base de datos

La conexión a MySQL **ya funciona**, pero todavía **no está integrada directamente en el flujo del proyecto**.

Próximamente se agregará:

* conexión centralizada
* helper de consultas
* manejo de errores SQL

---

# Makefile incluido

El proyecto incluye comandos de desarrollo para simplificar el uso de Docker.

```
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
	@docker exec -it mysql_server_externo mysql -h $(DB_HOST) -u $(DB_USER) -p$(DB_PASS) $(DB_NAME)

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
```
---

# Objetivo del proyecto

Servir como **base rápida para proyectos PHP**, evitando configurar desde cero:

* Apache
* PHP
* Docker
* conexión MySQL
* estructura inicial

Pensado para **prototipos, APIs o aplicaciones web pequeñas**.
