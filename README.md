# CURDPHP

create database GSL;

use GSL;

create table Productos (
 id_Productos  int  NOT NULL AUTO_INCREMENT,
 nombre varchar(50),
 precio float,
 Descripcion varchar(200),
  PRIMARY KEY (id_Productos)
);

select * from Productos;
insert into Productos set nombre = 'Equipo1' , precio = 10, Descripcion  = 'Descripcion1'; 
insert into Productos set nombre = 'Equipo2' , precio = 10, Descripcion  = 'Descripcion2'; 
insert into Productos set nombre = 'Equipo3' , precio = 10, Descripcion  = 'Descripcion3'; 

DELETE FROM Productos WHERE id_Productos = 4;

select * from Productos where id_Productos = 1;
UPDATE Productos SET nombre = 'Equipo1' , precio = 10, Descripcion  = 'Descripcion1' WHERE id_Productos = 2;

UPDATE Productos SET nombre = 'juan' WHERE id_Productos = 2;
