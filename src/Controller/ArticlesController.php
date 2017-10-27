<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Log\Log;
use Cake\I18n\Time;

class ArticlesController extends AppController {

    public function add() {
        $this->log("start upload file add", 'info');
        $isPost = $this->request->is('post');
        $this->log("request is $isPost", 'info');
        if ($isPost) {
            $this->log("upload file ", "info");
            $title = $this->request->data("Title");
            $mapUrl = $this->request->data("MapUrl");
            $description_meta = $this->request->data("MetaDes");
            $keywords = $this->request->data("MetaKey");
            $description = $this->request->data('Description');
            $content_article = $this->request->data('Content');
            $file = $this->request->data('File');
            $type = $this->request->data('Type');
            $newDate = date("Y-m-d H:i:s");
            $imageName = date("Y-m-d") . $file["name"];
            $this->log($title, "info");
            $this->log($mapUrl, "info");
            $this->log($description_meta, "info");
            $this->log($keywords, "info");
            $this->log($description, "info");
            $this->log($content_article, "info");
            $this->log($type, "info");
            $this->log($newDate, "info");
            $this->log($imageName, "info");
            $pathFile = SITE_ROOT . "/uploads/articles" . DS . $imageName;
            $isUpload = move_uploaded_file($file["tmp_name"], $pathFile);
            $this->log("upload $isUpload", "info");
            if ($isUpload) {
                $articles_table = TableRegistry::get('Articles');
                $article = $articles_table->newEntity();
                $article->title = $title;
                $article->map_url = $mapUrl;
                $article->meta_des = $description_meta;
                $article->meta_keys = $keywords;
                $article->des_article = $description;
                $article->image = $imageName;
                $article->type = $type;
                $article->content = $content_article;
                $article->createdDate = $newDate;
                if ($articles_table->save($article)) {
                    echo "Article add success";
                } else {
                    echo "Article add fail";
                }
            } else {
                echo "upload file fail";
            }
        }
    }

    public function index() {
        $listArticles = TableRegistry::get('Articles');
        $query = $listArticles->find();
        $this->set('results', $query);
    }

}

?>