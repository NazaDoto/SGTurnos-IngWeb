use sgtsmaunse;

/* SELECCION DE TABLAS */
select * from especialidades;
select * from roles;
select * from usuarios;

select usuario, contraseña from usuarios where idCargo = 1;
select usuario, contraseña from usuarios where idCargo = 2;


/*INSERCION DE DATOS*/
insert into usuarios(idU,apeNom,usuario,contraseña,idCargo) values
(110,'Navarrete Nazareno','admin','admin',1),
(150,'Gonzales Guillermo','guille','12345',2),
(151,'Valentini Rodolfo','rody','1234',2),
(152,'Herlan Bruno','android','123456',2);

insert into roles(idC,descripcion) values (3, 'medico');