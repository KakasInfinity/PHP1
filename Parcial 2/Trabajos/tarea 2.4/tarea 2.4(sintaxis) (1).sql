use escuela_compu;
-- 2
select nombre, localidad, fecha_nac from alumnos;
-- 3
select nombre as nombre_y_apellidos from alumnos;
-- 4
select nombre, faltas * 2 as falras_de_asistencia from alumnos;
-- 5
select * from alumnos where localidad = "Lorca";
-- 6
select * from alumnos where localidad = "Murcia" or "Alhama de Murcia";
-- 7
select * from alumnos where localidad = "Muricia" and nivel = "ESO";
-- 8
select * from alumnos where localidad = "Lorca" and curso = "2" and faltas > 10;
-- 9
select * from alumnos where localidad = "Murcia" order by nombre ;
-- 10
select * from alumnos order by curso, nivel;
-- 11
select * from alumnos where faltas > 10 and curso = "1" or curso = "2";
-- 12
select * from alumnos where faltas < 10 and curso = "3" or curso = "4" and localidad = "Muricia";
-- 13
select distinct curso from alumnos;
-- 14
select * from alumnos where faltas < 10 and curso = "1" and nivel = "ESO";
-- 15
select * from alumnos where nombre like 'B%';
-- 16
select * from alumnos where nombre like '%O' and localidad = "Murcia";
-- 17
select * from alumnos where substring(nombre, 2,1)='u' and curso = "1" and nivel = "ESO";
-- 18
select * from alumnos where faltas is null;
-- 19
select * from alumnos where faltas between 10 and 20 order by nombre;
-- 20
select * from alumnos where localidad = "Muricia" and faltas between 10 and 20;
-- 21
select * from alumnos where localidad = "Muricia" and faltas between 10 and 20 and curso = "1" and nivel = "ESO";
-- 22
select * from alumnos where faltas < 10 and faltas > 20;
-- 23
select * from alumnos where fecha_nac = '1993' and fecha_nac = '1994';
-- 24
select * from alumnos where curso = "1" or curso = "2";
-- 25
select * from alumnos where curso in (3,4) and localidad = "Muricia";
-- 26
select * from alumnos where nivel not in("ESO") order by curso, nombre desc;
-- 27
select * from alumnos where nivel not in("BARCHILLER")and curso in ("1","2")order by nombre ;
-- 28
select * from alumnos where nombre like'J%' and faltas > 10 not in("BARCHILLER")order by curso, nombre;
-- 29
select expediente, nombre, curso, nivel from alumnos 
where nivel not in("BARCHILLER") order by nivel, nombre;
-- 30
