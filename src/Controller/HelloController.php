<?php
namespace App\Controller;

use App\Controller\AppController;

class HelloController extends AppController{

    public function index(){
        $this->viewBuilder()->autoLayout(false);
        $this->set('title','Hello!');
        
        if($this->request->isPost()){
            $this->set('data',$this->request->data['Form1']);
        } else {
            $this->set('data',[]);
    }
}
}
?>