<?php 

// Biến môi trường, dùng chung toàn hệ thống
// Khai báo dưới dạng HẰNG SỐ để không phải dùng $GLOBALS

define('BASE_URL'       , 'http://localhost/DUANMAU_WEB2031_WD19331_PH50988/');
define('BASE_URL_ADMIN' , 'http://localhost/DUANMAU_WEB2031_WD19331_PH50988/admin/');
define('BASE_URL_CLIENT' , 'http://localhost/DUANMAU_WEB2031_WD19331_PH50988/client/');

define('DB_HOST'    , 'localhost');
define('DB_PORT'    , 3306);
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME'    , 'db_web_thu_cung');  // Tên database

define('PATH_ROOT'    , __DIR__ . '/../');
