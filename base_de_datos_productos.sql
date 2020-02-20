create database productos;
use productos;
create table registros(
marca varchar (255) not null,
  modelo varchar (255) not null,
  precio varchar (255) not null
)Engine InnoDB default charset=latin1;
