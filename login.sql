-- SHOW VARIABLES LIKE 'validate_password%';
-- SET GLOBAL validate_password_length = 4;
-- SET GLOBAL validate_password_check_user_name = OFF;

-- create user "ubuntu"@"localhost" identified by "test";
-- grant select, insert, update on CS2830. * to "ubuntu"@"localhost";
-- rename user "ubuntu"@"localhost" to "destiny";
-- select host, user from mysql.user;

-- use CS2830;
-- show tables;
create table users (
id int primary key auto_increment,
username varchar(255) not null unique,
userPassword text not null,
addDate datetime,
modifyDate datetime
);

insert into users (username, userPassword, addDate, modifyDate) values ('test', 'pass', now(), now());
select * from users;
