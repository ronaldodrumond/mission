CREATE TYPE role AS ENUM ('employee', 'admin', 'manager');
CREATE TYPE mission_status AS ENUM ('pending', 'validated', 'rejected');

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
    type_employee role not null default 'employee'
);

CREATE TABLE Service (
    id serial primary key not null,
    name varchar(50) not null,
    id_employee integer not null,
    id_manager integer,
    foreign key (id_employee) references Employee(id),
    foreign key (id_manager) references Employee(id)
);

CREATE TABLE Mission (
    id serial primary key not null,
    status mission_status not null,
    startDate date not null,
    endDate date not null,
    purpose varchar(200) not null,
    dstAddress varchar(200) not null,
    id_employee integer not null,
    id_manager integer,
    foreign key (id_employee) references Employee(id),
    foreign key (id_manager) references Employee(id)
);

Insertion of data in the database

insert into Employee (firstName, lastName, email, username, password, address, birthday, phoneNumber, type_employee) values ('Ryan', 'Bradley', 'ryan.bradley@gmail.com', 'Ryan1980', 'Help1234', '2 James downey street 38610 Gieres', '01/01/1980', '0618715225', 'employee');

insert into Employee (firstName, lastName, email, username, password, address, birthday, phoneNumber, type_employee) values ('Tom', 'Jones', 'tom.jones@gmail.com', 'Tom1980', 'Help1234', '2 George street 38610 Gieres', '01/05/1979', '0618714787', 'admin');

insert into Employee (firstName, lastName, email, username, password, address, birthday, phoneNumber, type_employee) values ('Marco', 'Sousa', 'marco.sousa@gmail.com', 'msousa1980', 'Help1234', '2 James downey street 38610 Gieres', '01/01/1980', '0618715225', 'manager');

insert into Employee (firstName, lastName, email, username, password, address, birthday, phoneNumber, type_employee) values ('Elvis', 'Presley', 'elvis.presley@gmail.com', 'Elvis1980', 'Help1234', '2 Elvis street 38610 Memphis', '01/05/1945', '0617414787', 'employee');

insert into Mission (status, startDate, endDate, purpose, dstAddress, id_employee) values ('pending', '01/01/2018', '02/01/2018', 'start the project', '122 James downey street 38000 Grenoble', 4);

insert into Service (name, id_employee) values ('service to begin the project', 4);

