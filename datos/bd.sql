create database empleados;

use empleados;

create table areas(
    id int(11) primary key auto_increment not null,
    nombre varchar(255) not null
);

create table empleado_rol(
    empleado_id int(11) not null,
    rol_id int(11) not null
);

create table empleados(
    id int(11) primary key auto_increment not null,
    nombre varchar(255) not null,
    email varchar(255) not null,
    sexo char(1) not null,
    area_id int(11) not null,
    boletin int(11) not null,
    descripcion text not null
);

create table roles(
    id int(11) primary key auto_increment not null,
    nombre varchar(255) not null
);

ALTER TABLE empleado_rol
    ADD CONSTRAINT `fk_empleado` FOREIGN KEY (empleado_id)
        REFERENCES empleados(id);

ALTER TABLE empleado_rol
    ADD CONSTRAINT `fk_rol` FOREIGN KEY (rol_id)
        REFERENCES roles(id);

ALTER TABLE empleados
    ADD CONSTRAINT `fk_area` FOREIGN KEY (area_id)
        REFERENCES areas(id);

insert into areas (nombre) values ('Ventas'),('Calidad'),('Producción');
insert into roles (nombre) values ('Profesional de proyectos - Desarrollador'),('Gerente estratégico'),('Auxiliar administrativo');