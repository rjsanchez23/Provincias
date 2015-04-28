#Mpwar Framework
-----------------------------------------------------------
##Requisitos:
----------------------------

* php 5.4
* mpstring

----------------------------
##Instalación:
----------------------------
* Como primer paso es necesario clonar el repositorio de la aplicación (incluye ejemplo de uso de componentes) :
```bash
$ git clone https://github.com/rjsanchez23/mpwarApp.git mpwarApp
```
* Una vez clonado nuestro repositorio, necesitaremos instalar Composer (si ya lo tienes instalado, puedes omitir este paso) :
```bash
$ curl -sS https://getcomposer.org/installer 
$ sudo mv composer.phar /usr/local/bin/composer
```
* Una vez tenemos instalado Composer, es necesario bajarnos el framework y todas las dependencias. Para ello, nos dirigimos a nuestra carpeta del proyecto donde hemos descargado la aplicación y ejecutaremos el siguiente comando:
```bash
$ composer update
```
* Ahora es necesario tener la base de datos mysql creada.
```bash
$ >mysql create database "nombre de la base de datos"
```
Una vez creada, podremos importar a nuestra base de datos el fichero `users.sql` que se encuentra en este repositorio.

## Configuración:
------------------------
Desde los siguientes ficheros podras configurar la aplicación.
* Para la configuración general de la aplicación:
```bash
app/Config/appConfig.php
```
En este fichero se podrá configurar el entorno de desarrollo (dev, pro), el tipo de fichero para la creación de las rutas de nuestra applicación (php,json o yml) además del tipo de base de datos que vamos a utilizar (actualmente sólo es posible mysql).

* Para la configración de conexión a la base de datos en producción:
```bash
app/Config/databaseConfig.php
```
* Para la configuración de conexión a la base de datos en desarrollo:
```bash
app/Config/dev/databaseConfig.php
```
* Crear un virtual host apuntando a la siguiente ruta:
```bash
public/index.php
```
*Listo! ya podemos a empezar a utilizar el framework.

## Utilización:
------------------------
* Para añadir los textos de i18N en los diferentes idiomas:
```bash
app/Config/Language.php
```
* Para registrar servicios del container dependency injection:
```bash
/app/Config/services.php
```
* La carpeta donde crear los controladores:
```bash
app/Controller
```
* La carpeta donde crear los modelos:
```bash
app/Model
```
* La carpeta donde configurar las rutas segun el tipo de fichero elegido en la configuración de la aplicación:
```bash
app/Routing
```
* La carpeta donde incluir nuestras plantillas:
```bash
app/View
```
## Utilización de componentes:
------------------------
* Utilizacion de plantillas Twig:
```bash
$this->container->get('Twig')->render('tamplate', 'nombre acceso en plantilla', array o string )
```
* Utilizacion de plantillas Smarty:
```bash
$this->container->get('Smarty')->render('tamplate', 'nombre acceso en plantilla', array o string )
```
* Utilización de clase Request:
```bash
$request = $this->request->get //post,server,cookie,session
```
Se permite manejar : get, post, server, cookie, session
```bash
$request = $this->request->isAjaxRequest() 
```
true/false si hay request ajax
* Utilización de clase Response:
```bash
return new Response("texto o plantilla", http code(default 200));
```
* Utilización de clase Response en Json:
```bash
 return new JsonResponse(array);
```
* Utilización del service container:
Accesible desde cualquier controlador, para usarlo fuera hay que instanciar una nueva clase container
```bash
 $this->container->get('service') 
```

* Utilización del acceso a base de datos mediante PDO:
```bash
 $database = new SqlDatabase(); 
 $this->database->select("query", array data(opcional), modo(opcional));
 $this->database->selectAll(tabla, modo(opcional)));
 $this->database->update(tabla, array data, where);
 $this->database->insert(tabla, array data);
 $this->database->delete(tabla, array data, limit(opcional));
```
* Utilización del acceso a base de datos mediante Eloquent:
```bash
new Eloquent(); //solo necesario para inicializarlo para usarlo mirar la documentación oficial
```
* Paso de variables por URL:
*definir en la ruta la variable entre llaves {}. Ej:
```bash
/usuario/{nombre}
```


