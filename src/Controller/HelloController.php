<?php
namespace App\Controller;

use App\Controller\AppController;

class HelloController extends AppController{
    public $autoRender = false;

    public function index(){
        $id = $this->request->query['id'];
        $pass = $this->request->query['pass'];
        echo "<html><body><h1>Hello!</h1>";
        echo "<ul><li>your id: " . $id . "</li>";
        echo "<li>password: " . $pass . "</li>";
        echo "</body></html>";
    }
}
?>