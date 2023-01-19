
CREATE USER 'gym_user'@'%' IDENTIFIED BY '1234';
GRANT ALL ON gymDB.* TO 'gym_user'@'%' WITH GRANT OPTION;

DROP DATABASE IF EXISTS gymDB;
CREATE DATABASE if not exists gymDB;

use gymDB;
drop table gym;


create table if not exists gym(
id varchar(20) NOT NULL,
phone_num char(14) NOT NULL,
sex char(1) NULL,
birth date NULL,
last_visit datetime NULL,
PRIMARY KEY(id, phone_num),
UNIQUE(phone_num),
CONSTRAINT CK_gym_1 CHECK (sex='남' OR sex = '여')
);

create table gym_admin(
pass char(12) NOT NULL PRIMARY KEY
);

INSERT INTO gym
VALUES ('박민지', '01020203030','여', '1999-01-01', '2019-05-21 11:05:14') ;

insert into gym_admin
value('1234');


select user();
show databases;
desc gym;

select *
from gym;