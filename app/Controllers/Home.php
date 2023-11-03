<?php

namespace App\Controllers;

use App\Libraries\Access_API; // Import library

class Home extends BaseController
{
    public function __construct()
    {
        $this->api = new Access_API();
        $this->db = \Config\Database::connect();
    }
    public function index(): string
    {
        $data = [
            'data1' => $this->api->get_data("https://ravictation.online/movies/"),
        ];
        return view('Home', $data);
    }
}
