create table if not exists todo_user(id integer primary key autoincrement, email varchar(60) not null, name varchar(60) not null, password varchar(32) not null);
create table if not exists todo_status(id integer primary key autoincrement, status varchar(25) not null);
create table if not exists todo_task(id integer primary key autoincrement, id_todo_status integer not null, id_todo_user integer not null);
insert into todo_status(status) values('pendente');
insert into todo_status(status) values('realizado');