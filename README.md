# myprojectmpwarfwk


CREATE DATABASE mpwarfwk;

CREATE TABLE Users ( user_id smallint(5) unsigned NOT NULL AUTO_INCREMENT, username varchar(45) NOT NULL, password varchar(50) DEFAULT NULL, PRIMARY KEY (user_id) ) ENGINE=InnoDB CHARSET=utf8;



Para hacer funcionar la  base de datos simplemente se tiene que crear la base de datos y la tabla indicada, e indicar en el config.json la contraseña o los parametros que quieras cambiar.


En el proyecto existen 3 paginas.

- Login (pagina para que los usuarios se logueen)
- Register (pagina para que los usuarios se registren)
-Smarty (pagina super simple para demostrar que smarty tambien funciona. si pones /smarty/<tu nombre> te hara un hello Nombre!)

Creo que eso es todo.