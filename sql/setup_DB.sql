create database CMS character set utf8;
use CMS;
grant all on CMS.* to cms_user@localhost;
set password for cms_user@localhost=password('cms_password');
