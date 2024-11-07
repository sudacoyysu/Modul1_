<?php
namespace App\Controller;

use Traits\ResponseFormatter;

// Kelas ProductControllerExtended untuk mengelola produk
class ProductControllerExtended extends ProductController {
    use ResponseFormatter;

    public function __construct() {
        $this->controllerName = "Get All Product";
        $this->controllerMethod = "GET";
    }

    public function getAllProduct() {
        // Array Dummy Data
        $dummyData = [
            "Air Mineral",
            "Kebab",
            "Spaghetti",
            "Jus Jambu"
        ];

        // Tidak memanggil getControllerAttribute()
        $response = [
            "message" => "List of Products",
            "product" => $dummyData
        ];
        return $this->responseFormatter(200, "Success", $response);
    }
}
