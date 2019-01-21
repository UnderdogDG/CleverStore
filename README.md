# CleverStore(en proceso)

<h2>Especificaciones</h2>

<ul>
  <li>PHP 7.0+</li>
  <li>PostgreSQL</li>
  <li>HTML</li>
  <li>CSS/SASS</li>
  <li>JavaScript/AJAX</li>
</ul>

<h2>Descripción</h2>
<p>Proyecto de Tienda en Linea <b>"Clever Store"</b></p>

<h2>Consideraciones de Instalación</h2>

<h3>Requerimientos</h3>
<p>Tener Instaldo un Servidor Local (se recomienda Bitnami, pero se igualmente útil cualquier paquete que cuente con PHP 7+ y PostgresSQL, por ejemplo: XAMPP con la extensión de PostgresSQL activa [extension=pgsql] y pgAdmin)</p>

<h3>Instalación</h3>

<h4>Primer Método</h4>
<p>Instalar (descomprimir o clonar, según el método) los archivos dentro de la carpeta raíz (htdocs) dentro del Servidor Local
bajo en nombre de "Store" (en caso de la descompresión por archivo .zip la carpeta contenedora tiene el nombre del proyecto, solo
es necesario cambiar el nombre de la carpeta tras descomprimir)</p>

<h4>Segundo Método</h4>
<p><p>Instalar (descomprimir o clonar, según el método) los archivos dentro de la carpeta raíz (htdocs) dentro del Servidor Local
y editar el archivo "config.php" al interior del proyecto. Cambiar el valor de la constante "URL" por la dirección elegida.</p>


<h2>Base de Datos</h2>
<p>Se incluye archivo para la creación de la BD (aún en desarrollo) dentro de la carpeta "bd"; al desplegar la BD deberá tener el nombre de "CleverStore"</p>

<p>El nombre y la contraseña para el acceso a la BD deberán ser cambiados en el archivo "config.php" a las constantes "DB_NAME" y "PASSWORD"</p>
