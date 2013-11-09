Virtual Hosts:

<VirtualHost *:80>
	ServerAdmin webmaster@localhost
        ServerName mteixeira.com-local
	DocumentRoot /var/www/mteixeira.com-local/public
	SetEnv APPLICATION_ENV "development"
	<Directory />
		Options FollowSymLinks
		AllowOverride None
	</Directory>
       <Directory /var/www/mteixeira.com-local/public>
          DirectoryIndex index.php
          AllowOverride All
          Order allow,deny
          Allow from all
       </Directory>
	ScriptAlias /cgi-bin/ /usr/lib/cgi-bin/
	<Directory "/usr/lib/cgi-bin">
		AllowOverride None
		Options +ExecCGI -MultiViews +SymLinksIfOwnerMatch
		Order allow,deny
		Allow from all
	</Directory>

	ErrorLog ${APACHE_LOG_DIR}/error.log

	# Possible values include: debug, info, notice, warn, error, crit,
	# alert, emerg.
	LogLevel warn

	CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
