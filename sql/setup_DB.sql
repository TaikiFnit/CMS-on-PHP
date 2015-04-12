create database news character set utf8;
use news;
grant all on news.* to cms_user@localhost;
set password for cms_user@localhost=password('cms_password');

create database cms character set utf8;
use cms;
grant all on cms.* to cms_user@localhost;
set password for cms_user@localhost=password('cms_password');