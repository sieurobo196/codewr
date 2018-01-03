<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Log\Log;
use Cake\I18n\Time;
use Cake\Event\Event;

class ArticlesController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(["index", "view", "detail"]);
    }

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
//            $file = $this->request->data('File');
            $type = $this->request->data('Type');
            $newDate = date("Y-m-d H:i:s");
//            $imageName = date("Y-m-d") . $file["name"];
            $this->log($title, "info");
            $this->log($mapUrl, "info");
            $this->log($description_meta, "info");
            $this->log($keywords, "info");
            $this->log($description, "info");
            $this->log($content_article, "info");
            $this->log($type, "info");
            $this->log($newDate, "info");
//            $this->log($imageName, "info");
//            $pathFile = SITE_ROOT . "/uploads/articles" . DS . $imageName;
//            $isUpload = move_uploaded_file($file["tmp_name"], $pathFile);
//            $this->log("upload $isUpload", "info");
//            if ($isUpload) {
            $articles_table = TableRegistry::get('Articles');
            $article = $articles_table->newEntity();
            $article->title = $title;
            $article->map_url = $mapUrl;
            $article->meta_des = $description_meta;
            $article->meta_keys = $keywords;
            $article->des_article = $description;
//                $article->image = $imageName;
            $article->type = $type;
            $article->content = $content_article;
            $article->createdDate = $newDate;
            if ($articles_table->save($article)) {
                echo "Article add success";
                $this->setAction('index');
            } else {
                echo "Article add fail";
            }
//            } else {
//                echo "upload file fail";
//            }
        }
    }

    public function index() {
        $listArticles = TableRegistry::get('Articles');
        $query = $listArticles->find()->order(["createdDate" => "DESC"]);
        $listNew = $listArticles->find()->order(["createdDate" => "DESC"])->limit(20);
        $listType = $listArticles->find()->select(["type"])->group("type");

        $this->set("results", $query);
        $this->set("listType", $listType);
        $this->set("listArticleNew", $listNew);
        $this->set("title", "CodeWR Online Web Example");
        $this->set("keys", "PHP ,CakePHP");
        $this->set("des", "CodeWR Web Example");
        $this->set("activeMenu", "index");
    }

    public function view($type, $mapUrl) {
        $this->log("call view $mapUrl", "info");
        $articles = TableRegistry::get('Articles');
        $article = $articles->find()->where(['map_url = "' . $mapUrl . '"'])->first();
        if (empty($article)) {
            $this->redirect(['controller' => 'Articles', 'action' => 'index']);
        } else {
            $listType = $articles->find()->select(["type"])->group("type");
            $listNew = $articles->find()->where(["type" => $type])->order(["createdDate" => "DESC"])->limit(10);
            $keys = $article->meta_keys;

            $arrayKeys = explode(",", $keys);
            $listRelated = $articles->find();
            foreach ($arrayKeys as $key) {
                $listRelated->orWhere(["meta_keys" => $key]);
            }
            $listRelated->orWhere(["type" => $type])->limit(10);
            $this->set("listType", $listType);
            $this->set("listArticleNew", $listNew);
            $this->set("listRelated", $listRelated);

            $this->set("article", $article);
            $this->set("title", $article->title);
            $this->set("keys", $keys);
            $this->set("des", $article->meta_des);
            $this->set("id", $article->id);
            $this->set("activeMenu", $type);
            $view = $article->view;
            $view++;
            $article->view = $view;
            if ($articles->save($article)) {
                
            } else {
                $this->log("update view fail" + $view, "info");
            }
        }
    }

    public function detail($type) {
        $this->log("call detail $type", "info");
        $listArticles = TableRegistry::get('Articles');
        $listArticle = $listArticles->find()->where(["type" => $type])->order(["createdDate" => "DESC"]);
        $listNew = $listArticles->find()->where(["type" => $type])->order(["createdDate" => "DESC"])->limit(10);
        $listType = $listArticles->find()->select(["type"])->group("type");
        if(empty($listArticle)){
            $this->log("empty ","info");
        }
        $count = 0;
        foreach ($listArticle as $article) {
            $count++;
        }
        $this->log("count " . $count, "info");
        if ($count == 0) {

            $this->redirect(['controller' => 'Articles', 'action' => 'index']);
        } else {
            $this->set("results", $listArticle);
            $this->set("listType", $listType);
            $this->set("listArticleNew", $listNew);
            $this->set("title", $type);
            $this->set("keys", $type);
            $this->set("des", $type);
            $this->set("activeMenu", $type);
        }
    }

    public function edit($id) {
        if ($this->request->is('post')) {
            $title = $this->request->data("Title");
            $mapUrl = $this->request->data("MapUrl");
            $description_meta = $this->request->data("MetaDes");
            $keywords = $this->request->data("MetaKey");
            $description = $this->request->data('Description');
            $content_article = $this->request->data('Content');
            $type = $this->request->data('Type');
            $newDate = date("Y-m-d H:i:s");
            $articles = TableRegistry::get('Articles');
            $article = $articles->get($id);
            $article->title = $title;
            $article->map_url = $mapUrl;
            $article->meta_des = $description_meta;
            $article->meta_keys = $keywords;
            $article->des_article = $description;
            $article->content = $content_article;
            $article->type = $type;
            $article->updatedDate = $newDate;

            if ($articles->save($article)) {
                echo "Article is udpated";
            } else {
                echo "Article update failed";
            }
            $this->setAction('index');
        } else {
            $articles = TableRegistry::get('Articles')->find();
            $article = $articles->where(['id' => $id])->first();
            $this->set('title', $article->title);
            $this->set('mapUrl', $article->map_url);
            $this->set('meta_des', $article->meta_des);
            $this->set('meta_keys', $article->meta_keys);
            $this->set('des_article', $article->des_article);
            $this->set('content', $article->content);
            $this->set('type', $article->type);
            $this->set('id', $id);
        }
    }

}

?>