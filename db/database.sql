create table if not exists todo_user(id integer primary key autoincrement, email varchar(60) not null unique, name varchar(60) not null, password varchar(32) not null);
create table if not exists todo_status(id integer primary key autoincrement, status varchar(25) not null);
create table if not exists todo_task(id_task integer primary key autoincrement,id_todo_status integer not null default 1,id_todo_user integer not null,task_active boolean not null default 1,task text not null,foreign key(id_todo_status) references todo_status(id),foreign key(id_todo_user) REFERENCES todo_user(id));
insert into todo_status(status) values('pendente');
insert into todo_status(status) values('realizado');