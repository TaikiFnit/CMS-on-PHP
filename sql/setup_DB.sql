create database CMS;
use CMS;
grant all on CMS.* to cms_user@localhost;
set password for cms_user@localhost=password('cms_password');
