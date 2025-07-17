<?php

namespace App\Controllers;

use App\Core\Database;

class HomeController {
    public $db;
    public function __construct () {
        $this->db = Database::getInstance()->getConnection();
    }
    public function render() {

        ob_start();
        include __DIR__ . '/../Views/home/index.php';
        $data = [
            "ime" => "Franjo",
        ];

        $content = ob_get_clean();

        include __DIR__ . '/../Views/layouts/main.php';
    }
}