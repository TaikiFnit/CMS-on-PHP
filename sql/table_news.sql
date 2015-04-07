create table `2013` (
	id int not null auto_increment primary key,
	title varchar(50),
	content text,
	author varchar(20),
	created datetime default null,
	modified datetime default null
) CHARACTER SET 'utf8';

insert into `2013` (title, content, author, created, modified) values
('2013 news 03', 'content 1', '2013', now(), now()); 
