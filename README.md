## 💡 Use some extension or program to support the server:

/programs
- Apache2.4 (You need to have installed and configure php for apache, I leave you the configurations that must be added)

/extensions
- Live Preview
-Live Server

⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡

## 👾 Download php in https://windows.php.net/download#php-8.2 safe in 'C:/'(Download VS16 x64 Thread Safe (2023-Mar-14 18:31:10))
1. Rename php.ini-development to php.ini
2. Enable the mysql extension by removing ';' in line 938 if it gives an error when executing also line 944


⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡

## 👾 Download Apache2.4 at https://www.apachelounge.com/download/VS17/binaries/httpd-2.4.56-win64-VS17.zip
 
You just need to add /conf/httpd.conf to the end of the file
AddHandler application/x-httpd-php .php
AddType application/x-httpd-php .php .html
LoadModule php_module "C:/php/php8apache2_4.dll"
PHPIniDir "C:/php"
DirectoryIndex index.php

⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡⚡

# 💡 Note: *It is important to already have the database created and to have modified the /db/db.php file according to your mysql configuration. If you make any other changes, modify the .php files in /entrar/ because the columns may be different even in table name*
