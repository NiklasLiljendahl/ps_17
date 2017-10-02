# ps_17
Ps 1.7 dev

New fresh installation of Prestashop 1.7

Works with WAMP (64 bit)

Edit parameters.php:<br />
    'database_host' => '127.0.0.1',<br />
    'database_port' => '',<br />
    'database_name' => 'presta',<br />
    'database_user' => 'root',<br />
    'database_password' => '',<br />
    'database_prefix' => 'ps_',<br />

Back office login:<br />
URL: localhost/admin_yabs/<br />
Login:                niklas.liljendahl@yabs.se<br />
Password (temporary): asd12345 <br />

When uploading to server:
1. Upload files through FTP
2. Import SQL-dump
3. Edit parameters.php (dbhost, dbname, dbuser, dbpass)
4. Change shop domain <br />
<br />4a) If you can access /admin-yabs/: 
Go to "Butiksparametrar" -> Trafik & SEO (SEO & URLs) -> edit "Butikens domännamn (localhost/IP/domain) and "Standard URL" (if files are located on a subfolder (ex. domain.com/sub-folder) otherwise leave blank.<br />
<br />4b) If you can't access the /admin-yabs/: 
Go to database and edit ps_shop_domain (set domain and physical_uri)
5) Check if the website works (clear cache)
6) If it doesn't work and you've done all the earlier steps: Go to the place where you uploaded all the files. Go to app/cache/ and rename /prod/ to /prod_/ or /prod.backup/
7) Clear browser cache and try again
