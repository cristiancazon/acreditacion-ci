# Acreditacion-CI
ABM de Acreditación para Conectar Igualdad

          //     Conectar Igualdad Jujuy - 2015                            CCCCC  IIIII    JJJJJ 
          l->                                                              C        I        J   
          ll     Autores:                                                  C        I        J   
      {   ll            * Roxana Emilce Paco: emilcepaco@gmail.com         C        I        J   
      llllll            * Cristian Damián Cazón: cristiancazon@gmail.com   C        I    J   J   
      ||  ||     Licencia GPLv3                                            C        I    J   J   
      ''  ''                                                               CCCCC  IIIII  JJJJJ   

Este pequeño sistema es el resultado de resolver las acreditaciones de Directivos de los establecimientos de la Provincia
de Jujuy para PNIDE 2015.
Se utilizó para acreditar a más de 250 Directivos en 15 minutos usando como servidor una netbook con Huayra.
Este AMB está desarrollado en PHP y la base de datos es MySQL.
No permite cambios sobre la base de datos por el momento, la primer idea era que funcione para poder acreditar a los Directivos
con una base de datos ya establecida y agregar a los que no se encuentren en la misma.
Compartimos el código bajo Licencia GPLv3 y esperamos poder mejorarlo para que lo puedan implementar o en todo caso usarlo como ejemplo o base de sistemas muchos más desarrollados.

Vamos a administrar el repositorio de github para actualizarlo, mejorarlo y sobre todo compartirlo, vamos a aprender juntos y
desarrollar nuevas herramientas y soluciones.

Los datos de instalación de mysql, usuario, contraseña y estructura de las tablas las vamos a colocar
al final de este archivo.

Las propuestas y actualizaciones aprobadas van en el archivo "Actualizaciones"

Porgramar juntos se puede y esta es la prueba.

Cualquier consulta no duden en contactarse con nosotros.

Requerimientos:
*) apache (Servidor Web)
Comando de instalación: apt-get install apache2

Servidor: 127.0.0.1
Dirección de web: /var/www/

*) mysql (Servidor para la Base de Datos)
Comando de instalación: sudo apt-get install mysql-server mysql-client

Recuerden colocar una contraseña root para mysql

*) php (Soporte PHP para el servidor Web)
Comando de instalación: sudo apt-get install php5-mysql

*) phpmyadmin (Paquete para administrar mysql desde web)
Comando de instalación: sudo apt-get install phpmyadmin

Dirección: 127.0.0.1/phpmyadmin

Son los mismos comandos que utilizamos para instalar en nuestro Huayra

También pueden instalar todo desde el menú en su Huayra:
Sistema -> Administración -> Centro de Software
Buscar los paquetes e instalarlos.

Base de Datos

Nombre de la Base de datos: conectar
Usuario de la Base de datos: conectar
Contraseña de la Base de datos: igualdad

Estructura de la Base de datos:

Tablas:
  -> establecimiento
  
        cue: int(11) - Llave Primaria
        
        nom_establecimiento: varchar(40)
        
        id_region: int(11)
        
        id_tipo: int(11)
        
        id_localidad: int(11)
        
        tel: int(11)

  -> localidad
  
        id_localidad: int(11)
        
        nom_localidad: varchar(30)
        
        cp: int(11)

  -> persona
  
        id: int(11)
        
        nombre: varchar(40)
        
        telefono: int(11)
        
        mail: varchar(40)
        
        id_localidad: int(11)
        
        cue: int(11)
        
        estado: varchar(12)
        
        est2: varchar(12)
        
        est3: varchar(12)
        
        est4: varchar(12)

  -> region
  
        id_region: int(11)
        
        nom_region: varchar(5)

  -> tipo
  
        id_tipo: int(11)
        
        nom_tipo: varchar(12)

Dirección de ABM Acreditación Conectar Igualdad

127.0.0.1/acreditacion-ci

Para poder acceder desde otro Huayra en la red debe modificar la dirección
a la IP de la netbook Huayra que está siendo utilizada como servidor.
Forma: IP/acreditacion-ci
Ejemplo: 192.168.5.1/acreditacion-ci

Voy a definir las ramas del Git y se las paso por aquí.
