drop database if exists todo_motos;

-- Base de datos de la tienda "Todo Motos"
create database todo_motos;
use todo_motos;

drop table if exists productos;

/*
drop table if exists imagenes;
drop table if exists marcas;
drop table if exists clientes;
*/
/*
create table usuarios(
nombre varchar(200),
apellido varchar(200),
dni int unique,
fecha_nacimiento date,
tarjeta int unique,
ID_nombre_usuario varchar(200) primary key,
cuenta varchar(200) unique,
contraseña varchar(200)
);

create table iniciar_sesion(
nombre_usuario_cuenta varchar(200),
contraseña varchar(200)
);

*/
-- Tabla de productos del apartado "Accesorios"

/*
create table marcas(
ID_marca int primary key,
marca varchar(200)
);

create table imagenes(
ID_imagen int primary key,
imagen varchar(200)
);

create table categorias(
ID_categoria int auto_increment primary key,
categoria varchar(200));
*/

create table productos(
  ID_producto int auto_increment primary key,
  titulo varchar(200),
  marca varchar (200),
  categoria varchar(200),
  modelo varchar(50),
  caracteristica1 varchar(200),
  caracteristica2 varchar(200),
  caracteristica3 varchar(200),
  caracteristica4 varchar(200),
  precio float(10,2),
);







