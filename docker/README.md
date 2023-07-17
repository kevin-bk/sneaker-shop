1. Thay đổi user id và group id trong env/user.env bằng user id và group id của máy 
- check user id: id -u
- check group id: id -g
và WORK_DIR trong .env bằng đường dẫn chứa các folder code

2. enable/disable xdebug, blackfire, ioncube thay đổi trong conf/php/custom.ini

3. setup xdebug phpstorm: https://kipalog.kaopiz.com/posts/Cau-hinh-X-Debug-cho-PHP-FPM-tren-Docker-voi-PHPStorm
(setup với port 9003)
- xdebug với php cli : XDEBUG_CONFIG="idekey=docker" php script.php
