# 🐳 Servidor Base PHP + MySQL + Docker

Plantilla mínima para iniciar proyectos en **PHP** utilizando **Docker** y una **base de datos MySQL externa**.
Evita instalar PHP, Apache o MySQL localmente; solo necesitas Docker y Make.

---

## ✅ Requisitos

Antes de usar el proyecto, asegúrate de tener instalados:

```bash
docker --version
docker compose version
make --version
```

---

## ⚙️ Configuración inicial

1️⃣ **Clonar el repositorio**

```bash
git clone <repo>
cd <repo>
```

2️⃣ **Crear archivo de entorno**

```bash
cp .env.example .env
```

3️⃣ **Completar las variables en `.env`**

```env
DB_HOST=<IP del Servidor MYSQL>
DB_NAME=<nombre_base_datos>
DB_USER=<usuario_mysql>
DB_PASS=<password_mysql>
```

> 🔹 Este proyecto **no levanta MySQL**, se conecta a un servidor externo.
> Por defecto `make dev-mysql` apunta al contenedor `mysql_server_externo`.

---

## 🚀 Levantar y detener el servidor

* **Iniciar contenedores**

```bash
make dev-up
```

Disponible en: `http://localhost:8001`

* **Detener contenedores**

```bash
make dev-down
```

* **Reset completo** (elimina contenedores y volúmenes)

```bash
make dev-reset
```

> ⚠️ `dev-reset` borrará todos los datos locales de Docker. Usar con precaución.

---

## 📖 Ver logs y acceder a contenedores

* **Ver logs en tiempo real**

```bash
make dev-logs
```

* **Entrar al contenedor PHP**

```bash
make dev-shell
```

* **Conectarse a MySQL externo**

```bash
make dev-mysql
```

> Ejecuta internamente:

```bash
docker exec -it mysql_server_externo mysql -h $DB_HOST -u $DB_USER -p$DB_PASS $DB_NAME
```

---

## 📁 Estructura del proyecto

```text
app/
│
├── views/
│   ├── error/        # Páginas de error (404, 500)
│   └── utils/        # Componentes reutilizables (headers, footers, layouts)
│
public/
│
├── css/
├── js/
├── img/
└── index.php
```

* **app/** → código privado del servidor (lógica, vistas, componentes)
* **public/** → contenido accesible desde el navegador (CSS, JS, imágenes, index.php)

---

## 🛠 Makefile – Comandos de desarrollo

| Comando          | Descripción                                                                                                                                    |
| ---------------- | ---------------------------------------------------------------------------------------------------------------------------------------------- |
| `make dev-up`    | Levanta los contenedores en segundo plano (`docker-compose up -d`).                                                                            |
| `make dev-down`  | Baja los contenedores (`docker-compose down`).                                                                                                 |
| `make dev-logs`  | Muestra los logs en tiempo real de todos los servicios (`docker-compose logs -f`).                                                             |
| `make dev-shell` | Abre una shell dentro del contenedor PHP (`docker-compose exec <PHP_SERVICE> bash`).                                                           |
| `make dev-reset` | Borra contenedores y volúmenes (`docker-compose down -v --remove-orphans`).                                                                    |
| `make dev-mysql` | Conecta al servidor MySQL externo definido (`docker exec -it mysql_server_externo mysql -h $(DB_HOST) -u $(DB_USER) -p$(DB_PASS) $(DB_NAME)`). |
| `make help`      | Muestra todos los comandos disponibles.                                                                                                        |

---

## 💡 Ejemplos de uso

```bash
make dev-up       # Levanta el entorno completo
make dev-logs     # Ver logs en tiempo real
make dev-shell    # Entrar al contenedor PHP
make dev-mysql    # Conectar a MySQL externo
make dev-reset    # Borrar contenedores y volúmenes
```

---

## 🎯 Objetivo del proyecto

Servir como **base rápida para proyectos PHP**, con:

* Apache y PHP ya configurados en contenedores
* Conexión a MySQL externa
* Makefile para manejo de Docker
* Estructura inicial de proyecto
* Listo para **prototipos, APIs o aplicaciones web pequeñas**

---

## 🔧 Notas importantes

* Antes de usar `dev-mysql`, asegúrate de que el contenedor `mysql_server_externo` esté levantado.
* Las variables como `$(COMPOSE)` o `$(PHP_SERVICE)` deben estar definidas en el Makefile o en un `.env` cargado por `docker-compose`.
* Puedes adaptar `.env` y nombres de contenedor según tu entorno de desarrollo.

---
