<VirtualHost *:80>
     ServerAdmin admin@my
     ServerName my
     DocumentRoot /var/www/site1.your_domain
     DirectoryIndex info.php

     <Directory /var/www/site1.your_domain>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Order allow,deny
        allow from all
     </Directory>

    <FilesMatch \.php$>
      # For Apache version 2.4.10 and above, use SetHandler to run PHP as a fastCGI process server
      SetHandler "proxy:unix:/run/php/php7.0-fpm.sock|fcgi://localhost"
    </FilesMatch>

     ErrorLog ${APACHE_LOG_DIR}/site1.your_domain_error.log
     CustomLog ${APACHE_LOG_DIR}/site1.your_domain_access.log combined
</VirtualHost>