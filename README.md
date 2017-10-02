# ps_17
Ps 1.7 dev

New fresh installation of Prestashop 1.7

Works with WAMP (64 bit)

Edit parameters.php:
    'database_host' => '127.0.0.1',
    'database_port' => '',
    'database_name' => 'presta',
    'database_user' => 'root',
    'database_password' => '',
    'database_prefix' => 'ps_',

Back office login:
URL: localhost/admin_yabs/
Login:                niklas.liljendahl@yabs.se
Password (temporary): asd12345 

When uploading to server
1. Upload files through FTP
2. Import SQL-dump
3. Edit parameters.php (dbhost, dbname, dbuser, dbpass)
4. Change shop domain 
<br />4a) If you can access /admin-yabs/: 
Go to "Butiksparametrar" -> Trafik & SEO (SEO & URLs) -> edit "Butikens domännamn (localhost/IP/domain) and "Standard URL" (if files are located on a subfolder (ex. domain.com/sub-folder) otherwise leave blank.<br />
<br />4b) If you can't access the /admin-yabs/: 
Go to database and edit ps_shop_domain
5) Check if the website works (clear cache)
6) If it doesn't work and you've done all the earlier steps: Go to the place where you uploaded all the files. Go to app/cache/ and rename /prod/ to /prod_/ or /prod.backup/
7) Clear browser cache and try again
