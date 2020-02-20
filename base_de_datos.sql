create database login;
use login;
create table registros(
nombre varchar (255) not null,
  passwor varchar (255) not null,
  correo varchar (255) not null
)Engine InnoDB default charset=latin1;
