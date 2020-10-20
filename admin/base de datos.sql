create table noticia(
	id int not null auto_increment primary key,
	titulo varchar(255),
	descripcion varchar(511),
	contenido text,
	imagen varchar(255)
);
create table usuario(
	id int not null auto_increment primary key,
	nombre varchar(50),
	apellido varchar(50),
	nombre_usuario varchar(50),
	password varchar(60)
);
create table galeria(
	id int not null auto_increment primary key,
	descripcion varchar(511),
	imagen varchar(255)
);