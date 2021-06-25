# CicuYTec

¿Que es?
Es una Pagina Web que tiene como objetivo tener Altas-Bajas-Cambios y Consultas. A lo cual todo se deriva de lo que es en si la pagina (tienda de componentes electronicos).


¿Que ocupamos?
Para realizar todo este proyecto unilizamos varias herramientas como Visual Studio Code  donde realizamos el codigo fuente y xampp (PHP) que utlilizamos como Base de Datos.


¿Que modificaciones hicimos?

Entraremos a nuestra carpeta "disco local/xampp/htdocs" y crearemos una carpeta con el nombre "example.com" (Este nombre de carpeta es opcional, pero preferentemente colocar este), descargaremos las carpetas y archivos de este repositorio y las colocaremos dentro de ella, dentro de la carpeta includes hay un archivo llamado "constants" este lo modificaremos dependiendo los valoares de nuestra base de datos.


Para que el programa sea visible en nuestro navegado insetamos el siguiente codigo en la siguiente carpeta ("Disco Local/XAMPP/apache/conf/extra").

<VirtualHost *:80>
ServerAdmin example.com
DocumentRoot "C:/xampp/htdocs/example.com/public"
ServerName example.com
ErrorLog "logs/example.com-error.log"
CustomLog "logs/example.com-access.log" common
<Directory "C:/xampp/htdocs/example.com/public">
Options All
AllowOverride All
Require all granted


En cuanto a la conexion con el puerto de XAMPP entramos a la carpeta ("Disco Local/Windows/Sistem32/Drivers/etc") y agregamos al final del codigo la siguiente linea de codigo:

127.0.0.1 example.com

Reiniciamos el panel de xampp y al abrir nuesto buscador y colocar nuestro nombre de carpeta, en mi caso example.com podremos acceder a nuestros avances.

Abrimos nuestro navegador y en la barra de busqueda escribimos el nombre que le asignamos a nuestra carpeta y si todo lo hicimos correctamente, debería abrir el archivo ya con nuestra pagina, pero notaremos algo, no hay productos.


Especificaciones
Lenguaje de programación: PHP.
Base de datos: MySQL.
Servidor: Apache.
FrontEnd: HTML + Bootstrap
Sin framework BackEnd.
Funcionalidades
Altas: Puedes agregar productos nuevos a la base de datos cada vez que sea necesario.
Bajas: Eliminar un producto no será un problema, solo da clic a un botón y el sistema lo eliminará automáticamente.
Consultas: Te permite hacer búsquedas dentro del sistema para encontrar un producto en específico.
Cambios: Te permite alterar los datos introducidos anteriormente de un producto, y actualizarlo de acuerdo a tu preferencia.


Por: Miguel Angel Garcia Vidal

Para mas: 
