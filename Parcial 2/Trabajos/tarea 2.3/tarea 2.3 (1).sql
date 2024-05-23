create database hospital;

use hospital;

create table Medicamentos
(
ID_medicamento char(5) primary key,
    Nombre varchar(50) not null,
    Sustancia varchar(50) not null,
    Via_administrativa varchar(50) not null,
    Cantidad int(4) not null,
    Excipiente char(10) not null,
    Indicaciones varchar(50) null,
    Contraindicaciones varchar(50) null,
    Reacciones varchar(50) null,
    Controlado tinyint(1) not null
);

create table Medicos
(
    ID_Medico char(10) primary key,
    Apellido_paterno varchar(30) not null,
    Apellido_materno varchar(30) not null,
    Nombre varchar(50) null,
    Especialidad varchar(50) not null,
    Fecha_titulacion datetime(6) null
);

create table Pacientes
(
    Numero_JSSSTE char(10) primary key,
    RFC char(10) not null,
    CURP char(18) not null,
    Nombre varchar(50) not null,
    Apellido_paterno varchar(30) not null,
    Apellido_materno varchar(30) not null,
    Fecha_nacimiento datetime(6) not null,
    Sexo char(1) not null,
    Tipo_sanguineo char(1) not null,
    Factor_RH char(1) not null,
    Calle varchar(50) not null,
    Colonia varchar(50) not null,
    Ciudad varchar(50) not null,
    CP char(5) not null
);

create table Consultas
(
ID_consulta int(4) primary key,
    ID_Medico char(10),
    Numero_JSSSTE char(10) not null,
    Indicaciones text(16) not null,
    Fecha datetime(6) null,
    foreign key (Numero_JSSSTE) references  pacientes(Numero_JSSSTE),
    foreign key (ID_Medico) references  Medicos(ID_Medico)
);

create table Detalle_consulta
(
ID_consulta int(4),
    ID_medicamento char(5) not null,
    Prescripcion text(16) null,
    foreign key (ID_consulta) references Consultas(ID_consulta),
    foreign key (ID_medicamento) references Medicamentos(ID_medicamento)
);

