# Nginx Setup

* Open Nginx directory within this repository

`cd ~/bitcoin-sandbox-php/etc/nginx`

* Create/modify nginx file  

`pico ~/bitcoin-sandbox-php/etc/nginx/bitcoin-sandbox.nginx`

 *(Replace all `USER` with appropriate linux username)*  

* Creating symbolic link (`SUDO` privileges required OR run as `root` user)

`sudo ln -s ~/bitcoin-sandbox-php/etc/nginx/bitcoin-sandbox.nginx /etc/nginx/sites-enabled`

* Check nginx files

`sudo nginx -t`

* Restart nginx service

`sudo service nginx restart`