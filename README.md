## Instalación y Configuración Básica
Para poder realizar las tareas de administración de manera más rapida es recomendable instalar [Composer](https://getcomposer.org/download/).
Una vez instalado Composer, podemos pasar a configurar el framework para que funcione, lo primero que vamos a tener que hacer dentro de la carpeta del framework es actualizar el composer para que introduzca el Vendor de Laravel, para ello hacemos uso del comando: 
> ~~~
> composer update
> ~~~
A continuación, se tiene que copiar la información del archivo .env en un archivo llamado .env que se creara nuevo en la carpeta del framework (donde están las carpetas resource, public, config, etc.).
Para acabar, es necesario generar una llave para que funcione laravel, para ello usaremos el siguiente comando:
> ~~~
> php artisan key:generate
> ~~~

## Base de datos
Para generar los datos laravel permite crear tablas de una Base de Datos (previamente definida su conexión en el archivo .env), ellas se encuentran dentro de **Database/Migrations**, dentro ser pueden encontrar los campos que contendrá la tabla.
