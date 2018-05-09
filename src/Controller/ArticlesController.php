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
//        $this->log("add new", "info");
        $isPost = $this->request->is("post");
        if ($isPost) {
            $title = $this->request->data("title");
            $mapUrl = $this->request->data("map_url");
            $description_meta = $this->request->data("metades");
            $keywords = $this->request->data("metakey");
            $content_article = $this->request->data("content");
            $type = $this->request->data("type");
            $newDate = date("Y-m-d H:i:s");
            if ($title == '' || $mapUrl == '' || $type == '' || $content_article == '') {
                $this->log("error data empty", "error");
            } else {
                $articles_table = TableRegistry::get("Articles");
                $article = $articles_table->newEntity();
                $article->title = $title;
                $article->map_url = $mapUrl;
                $article->meta_des = $description_meta;
                $article->meta_keys = $keywords;
                $article->type = $type;
                $article->content = $content_article;
                $article->createdDate = $newDate;
                if ($articles_table->save($article)) {
                    $this->log("added " . $title, "info");
                    $this->redirect(
                            "/view/" . $type . "/" . $mapUrl
                    );
                } else {
                    $this->log("added fail" . $title, "info");
                }
            }
        }
    }

    public function index() {
        $this->log("call home", "info");
        $listArticles = TableRegistry::get("Articles");
        $query = $listArticles->find()->order(["createdDate" => "DESC"]);
        $listNew = $listArticles->find()->order(["createdDate" => "DESC"])->limit(20);
        $listType = $listArticles->find()->select(["type"])->group("type");
//        $this->log($listType,"info");
        $this->set("results", $query);
        $this->set("activeMenu", "index");
        $this->set("listType", $listType);
        $this->set("listArticleNew", $listNew);
        $this->set("title", "CodeWR Online Web Example");
        $this->set("keys", "PHP ,CakePHP");
        $this->set("des", "CodeWR Web Example");
        $this->set("activeMenu", "index");
    }

    public function view($type, $mapUrl) {
        $this->log("call view " . $type ."/". $mapUrl, "info");
        $activeMenu = $type == null ? "index" : $type;
        $this->set("activeMenu", $activeMenu);
        $articles = TableRegistry::get("Articles");
        $article = $articles->find()->where(['map_url = "' . $mapUrl . '"'])->first();
        if (empty($article)) {
            $this->redirect(["controller" => "Articles", "action" => "index"]);
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
            $newDate = date("Y-m-d H:i:s");
            $article->updatedDate = $newDate;
            if ($articles->save($article)) {
                
            } else {
                $this->log("call view fail" . $type . $mapUrl, "error");
            }
        }
    }

    public function detail($type) {
        $this->log("call detail " . $type, "info");
        $listArticles = TableRegistry::get("Articles");
        $listArticle = $listArticles->find()->where(['type LIKE' => '%'.$type.'%'], ['type' => 'string'])->order(["createdDate" => "DESC"]);
        $listNew = $listArticles->find()->where(['type LIKE' => '%'.$type.'%'], ['type' => 'string'])->order(["createdDate" => "DESC"])->limit(10);
        $listType = $listArticles->find()->select(["type"])->where(['type LIKE' => '%'.$type.'%'], ['type' => 'string'])->group("type");
        $count = 0;
        foreach ($listArticle as $article) {
            $count++;
        }
//        $this->log("count " . $count, "info");
        if ($count == 0) {
            $this->log("no article ", "info");
            $this->redirect("/");
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
        $this->log("call edit " . $id, "info");
        if ($this->request->is("post")) {
//            $this->log("update article", "info");
            $title = $this->request->data("title");
            $mapUrl = $this->request->data("map_url");
            $description_meta = $this->request->data("metades");
            $keywords = $this->request->data("metakey");
            $content_article = $this->request->data("content");
            $type = $this->request->data("type");
            $newDate = date("Y-m-d H:i:s");
            
            if ($title == '' || $mapUrl == '' || $type == '' || $content_article == '') {
                $this->log("error data empty", "error");
            } else {
                $articles = TableRegistry::get("Articles");
                $article = $articles->get($id);
                $article->title = $title;
                $article->map_url = $mapUrl;
                $article->meta_des = $description_meta;
                $article->meta_keys = $keywords;
                $article->content = $content_article;
                $article->type = $type;
                $article->updatedDate = $newDate;

                if ($articles->save($article)) {
                    $this->log("udpated " . $mapUrl, "info");
                } else {
                    $this->log("updated failed " . $id, "error");
                }
                $this->redirect(
                        "/view/" . $type . "/" . $mapUrl
                );
            }
        } else {
            $articles = TableRegistry::get("Articles")->find();
            $article = $articles->where(["id" => $id])->first();
            $this->set("title", $article->title);
            $this->set("mapUrl", $article->map_url);
            $this->set("meta_des", $article->meta_des);
            $this->set("meta_keys", $article->meta_keys);
            $this->set("des_article", $article->des_article);
            $this->set("content", $article->content);
            $this->set("type", $article->type);
            $this->set("id", $id);
        }
    }

}

?>