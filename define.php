<?php

// ====================== PATHS ===========================
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', dirname(__FILE__));                        // Định nghĩa đường dẫn đến thư mục gốc
define('LIBRARY_PATH', ROOT_PATH . DS . 'libs' . DS);            // Định nghĩa đường dẫn đến thư mục thư viện
define('PUBLIC_PATH', ROOT_PATH . DS . 'public' . DS);            // Định nghĩa đường dẫn đến thư mục public							
define('APPLICATION_PATH', ROOT_PATH . DS . 'application' . DS);        // Định nghĩa đường dẫn đến thư mục public							
define('TEMPLATE_PATH', PUBLIC_PATH . 'template' . DS);        // Định nghĩa đường dẫn đến thư mục public							

define('ROOT_URL', DS . 'chuong11_bookstore' . DS);
define('APPLICATION_URL', ROOT_URL . 'application' . DS);
define('PUBLIC_URL', ROOT_URL . 'public' . DS);
define('TEMPLATE_URL', PUBLIC_URL . 'template' . DS);

define('DEFAULT_MODULE', 'student');
define('DEFAULT_CONTROLLER', 'user');
define('DEFAULT_ACTION', 'login');

// ====================== DATABASE ===========================
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mvc_multy_login');
define('DB_TABLE', 'user');
define('DB_TABLE_RSS', 'rss');