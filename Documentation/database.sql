CREATE TYPE role AS ENUM ('employee', 'admin', 'manager');

CREATE TABLE Employee (
	id serial primary key not null,
	firstName varchar(50) not null,
	lastName varchar (100) not null,
	email varchar (60) not null,
	username varchar (20) not null,
	password varchar (20) not null,
	address varchar (200) not null,
	birthday date not null,
	phoneNumber varchar(14) not null,
	type_employee role not null default 'employee',
	id_manager integer 
);

CREATE TABLE Service (
	id serial primary key not null,
	name varchar(50) not null,
	id_manager integer, 
	foreign key (id_employee) references Employee(id),
	foreign key (id_manager) references Manager(id) not null
);

CREATE TABLE Mission (
	id serial primary key not null,
	status varchar(20) not null,
	startDate date not null,
	endDate date not null,
	purpose varchar(200),
	dstAddress varchar(200) not null,
	id_employee integer, 
	id_manager integer, 
	foreign key (id_employee) references Employee(id),
	foreign key (id_manager) references Manager(id)
);

insert into Manager (firstName, lastName, email, username, password, address, birthday, phoneNumber) values ();

insert into Employe (firstName, lastName, email, username, password, address, birthday, phoneNumber, type_employee, service_name, id_manager) values ();

