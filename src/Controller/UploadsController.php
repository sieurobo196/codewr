<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Log\Log;

class UploadsController extends AppController {

    public function add() {
        $this->log("start upload file add", 'info');
        $isPost = $this->request->is('post');
        $this->log("request is $isPost", 'info');
        if ($isPost) {
            $this->log("upload file ", "info");
            $title = $this->request->data("title");
            $description = $this->request->data('description');
            $file = $this->request->data('file');
            $this->log("infodasfasdf", "info");
            $this->log($title, "info");
            $this->log($description, "info");
            $this->log($file["tmp_name"], "info");
            $this->log($file["name"], "info");
            $this->log($file["type"], "info");
            $this->log($file["size"], "info");

            $pathFile = SITE_ROOT . "/uploads" . DS . $file["name"];
            $this->log($pathFile, "info");
            $this->log(SITE_ROOT, "info");
            $isUpload = move_uploaded_file($file["tmp_name"], $pathFile);
            $this->log("upload $isUpload", "info");
            if ($isUpload) {
                echo "upload filed success";
            } else {
                echo "upload file fail";
            }
        }
    }

}
