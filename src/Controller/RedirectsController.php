<?php
   namespace App\Controller;
   use App\Controller\AppController;
   use Cake\ORM\TableRegistry;
   use Cake\Datasource\ConnectionManager;

   class RedirectsController extends AppController{
      public function action1(){
      }
      public function action2(){
         echo "redirecting from action2";
         $this->setAction('action1');
      }
   }
?>