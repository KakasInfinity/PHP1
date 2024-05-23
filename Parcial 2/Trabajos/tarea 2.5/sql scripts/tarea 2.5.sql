use nwind;
/*select * from products where productname like 'C%';
-- COLUMNAD CORRELACIONADAS
select e.employeeId, e.lastname, e.firstname,
(
	select count(*) from orders o where o.employeeid=e.employeeId
    and year(o.orderdate)=1997 and month(o.orderdate)=1
) as ordenes from employees e order by ordenes desc;

select c.CustomerID, c.CompanyName, c.Country,
(
	select count(*) from orders o where o.customerid=c.customerid
    and year(o.orderdate)=1997 and month(o.orderdate)<=6 
) as ordenes from customers c where c.country='USA';

-- COUNT: SIRVE PARA CONTAR LAS VESES QUE APARECE UN DATO
-- SUM(X): PARA SUMAR DATOS DE LA COLUMNA X SOLO ES PARA COLUMNAS QUE CONTENGAN NUMEROS
-- MAX(X): SIRVE PARA ENCONTRAR EL MAXIMO DE UNA COLUMNA
-- MIN(X):ENCUENTRA EL MINIMO
-- AVG(X): ENCUENTRA EL PROMEDIO DE UNA COLUMNA
-- STDEV(X): CALCULA LA DESVIACION ESTANDAR
use nwind;
select c.customerid, c.companyName,c.country,
(
select sum(o.freight) from orders o where c.customerid=o.customerid
) as monto from customers c;

select s.supplierid, s.companyName,
(
	select max(p.unitprice) from products p where p.supplierid=s.supplierid
) as producto_mas_caro,
(
	select min(p.unitprice) from products p where p.supplierid=s.supplierid
) as producto_mas_bara,
(
	select avg(p.unitprice) from products p where p.supplierid=s.supplierid
) as precio_promedio
from suppliers s where s.companyName like 'a%';
-- consultas anidadas y con una condicion de que debe empezar su nombre con a

/*
SELECCIONAR LA CLAVE DEL EMPLEADO, EL NOMBRE COMPLETO DEL EMPLEADO (EN UNA SOLA COLUMNA),
EL PAIS DEL EMPLEADO Y LA CANTIDAD DE ORDENES QUE REGISTRO EN EL ULTIMO TRIMESTRE DE 1997.
*/
/*select e.employeeId, concat(e.LastName, ' ', e.FirstName) as nombre, e.country,
(
	select count(*) from orders o where o.employeeId=e.employeeId and year(o.orderDate)=1997 and month(o.orderdate)>=10
) as ordenes
from employees e;

/*select p.productid, p.productname, p.unitprice, 
(
	select c.companyname, c.country where p.unitprice >=20
) as 
from products p;*/

/*-- LOS VIEWS SON TABLAS QUE CONTIENEN DATOS DE UN COMPLEMENTO DE TABLAS USANDO CREATE VIEW
create view vwEjemploView as
select e.employeeId,concat(e.FirstName,' ',e.LastName) as nombre, o.OrderDate from employees e
join orders o on e.employeeId=o.employeeId;

select * from vwEjemploView where orderDate="1997" ;

-- TAREA 2.5 
/*NUMERO 1_*/
create view vwn1 as
select e.CustomerId, concat(e.ContactName,'',e.ContactTitle) as nombre, e.country, e.city
from customers e where country="Mexico" or country="Brasil" order by country,city;
select * from vwn1 ;
/*NUMERO 2_*/
create view vwn2 as
select orderId, OrderDate, shipcountry, shipcity from orders
where year(OrderDate)=1996 and (shipcity="Reims" or (shipcountry="USA" and shipcity not in ("Seattle")));
select * from vwn2;
/*NUMERO 3_*/
create view vwn3 as
select p.productId, p.ProductName, s.contactName, c.CategoryName from products p
join categories c on p.categoryId=c.categoryId 
join suppliers s on p.supplierId=s.supplierId where c.categoryId=1 or c.categoryId=2 or c.categoryId=3;
select * from vwn3;
/*NUMERO 4_*/
create view vwn4 as
select o.orderId, concat(e.lastname,' ',e.firstname) as nombre, o.orderdate from orders o
join employees e on o.employeeId=e.employeeId  where year(o.orderdate) = 1997 and month(o.orderdate) = 3
and day(o.orderdate) <= 15;
select * from vwn4;
/*NUMERO 5_*/
create view vwn5 as
select p.productId, p.productname, s.supplierId, s.companyName, c.categoryId, c.categoryName, p.unitprice
from products p join suppliers s on p.supplierId=s.supplierId
join categories c on p.categoryId=c.categoryId where s.country="España" and c.categoryName="Beverages" or c.categoryName="Condiments";
select * from vwn5;
/*NUMERO 6_*/
create view vwn6 as
select c.customerId, ca.categoryName, p.unitPrice from products p
join categories ca on p.categoryId=ca.categoryId cross join customers c 
where ca.categoryName="Grains/Cereals";
select * from vwn6;
/*NUMERO 7_*/
create view vwn7 as
select o.orderId, o.orderDate, e.lastName, e.firstName, s.supplierId from orders o
join employees e on o.employeeId=e.employeeId cross join suppliers s
where s.country="Mexico" or s.country="Canada" or s.country="USA";
select * from vwn7;
/*NUMERO 8_*/
create view vwn8 as
select p.productId, p.productName, p.unitPrice, s.contactName, s.country from products p
join suppliers s on p.supplierId=s.supplierId 
where p.unitPrice > 20  and s.country='spain' or s.country='Italy';
select * from vwn8;