-- Login/connect to the database server
-- mysql -h localhost -u root -p

-- Creating database
create database broadway_php;

-- Showing databases
show databases;

-- using/selecting database
use broadway_php;

-- Showing tables of selected database
show tables;

-- DDL
CREATE, ALTER
-- creating a table
create table students(
	id int(10) not null,
	name varchar(255) not null,
	email varchar(255) null,
	status smallint(4) not null default '1',
	gender char(6) not null default 'other'
);

alter table students 
 	add column date_of_birth date null after email;

alter table students
	add primary key(id);

alter table students
	modify id int(10) not null auto_increment;

alter table students 
-- show table structure
-- desc | explain `table_name`
desc students;

explain students;

-- DML
INSERT, UPDATE, DELETE
-- INSERT
insert into students
	      (id, name, email, date_of_birth,gender) 
	values(1,'Ram Sharma', 'ram@gmail.com', '1990-10-10', 'Male');

insert into students set 
	id=2,
	name='Shyam Gautam', 
	email='shyam@gmail.com', 
	date_of_birth='1980-11-10',
	gender='Male';

-- UPDATE
update students set id=4;

update students set 
	
	name='Hari Aryal',
	email='hari@hotmail.com'
	
	where id=4;

-- SELECT
-- select everything
SELECT * from students;

-- select only few columns; field names with command separate
select id,name from students;

-- get a particular row with unique field check
-- use where clause; fieldname=value
select * from students where id=2;

-- null value check in where clause
select * from students where email is null;

-- DELETE
-- Delete everything in the table
delete from students;

-- Delete some rows with where clause
-- Delete all students which are inactive i.e. status=0
delete from students where status=0;

-- WHERE clause
-- AND, OR, IN, BETWEEN

-- Dropping (remote) database and tables;
-- Drop database
drop database brdway;

-- Dropping a table
-- select/use database
use broadway_php;
-- drop a table from broadway_php database
drop table students;

-- Primary key and foreigy key
ALTER TABLE `departments` 
	ADD CONSTRAINT `fk_college_id` FOREIGN KEY (`college_id`) 
		REFERENCES `colleges`(`id`) 
		ON DELETE RESTRICT 
		ON UPDATE RESTRICT;

-- Create new user to specific user
GRANT ALL PRIVILEGES 
	ON broadway_php.* 
	TO 'broadway'@'localhost' 
	identified by 'broadway';


