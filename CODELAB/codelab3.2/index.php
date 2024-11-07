<?php
// Autoloader sederhana
spl_autoload_register(function ($class_name) {
    $file = __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';
    
    if (file_exists($file)) {
        require $file;
    } else {
        echo "File tidak ditemukan: " . $file . "\n";
    }
});

// Menggunakan kelas ProductControllerExtended
use App\Controller\ProductControllerExtended;

// Instansiasi dan panggil metode
$controller = new ProductControllerExtended();
$response = $controller->getAllProduct();

// Menampilkan response
print_r($response);
