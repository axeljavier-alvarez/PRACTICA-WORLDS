<?php 
  namespace App\Controllers;
  class Productos extends BaseController {
    public function index(){
        echo "<h1>Controller Productos</h1>";
    }

    public function show()
    {
        return "<h2>Detalles del producto</h2>";
    }
  }
