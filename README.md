# 📚 Sistema de Gestión de Bibliotecas (SGB)
Este proyecto es una aplicación web desarrollada con **Laravel 11** que permite gestionar libros, lectores y sus préstamos. El sistema incluye operaciones CRUD completas para cada entidad y está protegido mediante autenticación con **Laravel Breeze**.


## ✅ Requisitos del Sistema

Asegúrate de tener las siguientes herramientas instaladas antes de comenzar:

- PHP 8.2 o superior  
- Composer  
- Node.js y npm  
- MySQL (u otro motor de base de datos compatible)  
- Git


## 🚀 Instalación del Proyecto

Sigue estos pasos para configurar el proyecto en tu entorno local:

### 1. Clonar el Repositorio

```bash
git https://github.com/Varelaso32/Library_Management_System-.git
cd Library_Management_System-
cd Library_Management_System
```


### 2. Instalar Dependencias de PHP

```bash
composer install
```

### 3. Instalar Dependencias de JavaScript

```bash
npm install
```

### 5. Configurar la Base de Datos

Edita el archivo `.env` y ajusta los valores según tu configuración de base de datos local:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=biblioteca
DB_USERNAME=root
DB_PASSWORD=
```

Luego ejecuta las migraciones:

```bash
php artisan migrate:status
php artisan migrate
```

## 🧪 Ejecución del Proyecto

### Iniciar el servidor Vite (modo desarrollo frontend)

```bash
npm run dev
```

### Iniciar el servidor de desarrollo Laravel

```bash
php artisan serve
```

Accede a la aplicación desde: [http://127.0.0.1:8000].
