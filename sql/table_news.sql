create table `2015` (
	id int not null auto_increment primary key,
	title varchar(50),
	content text,
	author varchar(20),
	created date default null,
	modified date default null
) CHARACTER SET 'utf8';

create table `2014` (
	id int not null auto_increment primary key,
	title varchar(50),
	content text,
	author varchar(20),
	created date default null,
	modified date default null
) CHARACTER SET 'utf8';

create table `2013` (
	id int not null auto_increment primary key,
	title varchar(50),
	content text,
	author varchar(20),
	created date default null,
	modified date default null
) CHARACTER SET 'utf8';

create table `2012` (
	id int not null auto_increment primary key,
	title varchar(50),
	content text,
	author varchar(20),
	created date default null,
	modified date default null
) CHARACTER SET 'utf8';

insert into `2015` (title, content, author, created, modified) values
('2015 news 01', 'content 1', '2015', now(), now()); 