# php-learning

Ficheros de curso de php para repasar.

## Configuración

Si se utiliza Visual Studio, es necesario instalar la extensión `PHP Intelephense` y deshabilitar la que tiene por defecto para php buscando `@builtin php` en las extensiones. La opción por defecto que se debe deshabilitar se llama `PHP Language Features`.

Instalación de dependencias del servidor:

```
sudo apt install php8.1-cli
sudo apt-get install php-curl
```

Revisar Versión y Módulos:

```
php -v
php -m
```

Iniciar el servidor local:

```
cd carpetaRaizIndex
php -S localhost:8000
```
