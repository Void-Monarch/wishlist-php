create database db;
use db;
create table employee(id int(3) primary key auto_increment,
name varchar(225),
salary varchar(335),
dept varchar(225) 
);
use db;
select * from employee;
insert into employee(name,salary,dept) values('harsh',20000,'dev'),('Tirth',30000,'stocks'),('Manish',40000,'java');
