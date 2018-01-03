<!-- header -->
<?php echo $this->element("article/header"); ?>
<!-- //header -->
<!-- navigation -->
<?php echo $this->element("article/navigation"); ?>
<!-- //navigation -->
<!-- news-original -->
<div class="news-original">
    <div class="container">
        <div class="agileinfo_news_original_grids">
            <div class="col-md-8 agileinfo_news_original_grids_left1">
                <div><a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "edit", $id]); ?>"> 
                        <?php
                        if ($Auth->user()) {
                            echo "edit";
                        }
                        ?>

                    </a></div>
                <h2><?php echo "$article->title" ?></h2>
                <div class="content-article"><?php echo "$article->des_article" ?></div>
                <div class="content-article"><?php echo "$article->content" ?></div>

            </div>
            <div class="col-md-4 agileinfo_news_original_grids_right">
                <div class="w3layouts_add_market">

                    <div class="articles-news-title">New</div>
                    <div class="articles-news">
<?php foreach ($listRelated as $row): ?>
                            <div class="col-md-12 article-line">
                                <div class="col-md-2 list-article-news"><?php echo $row->view; ?></div>
                                <div class="col-md-10"><a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "view", $row->type, $row->map_url]); ?>">
                            <?php echo $row->title ?> </a></div>
                            </div>
                        <?php endforeach;
                        ?>

                    </div>


                </div>
                <div class="">
                    <div class="articles-news-title">Related</div>
                    <div class="articles-news">
<?php foreach ($listRelated as $row): ?>
                            <div class="col-md-12 article-line">
                                <div class="col-md-2 list-article-news"><?php echo $row->view; ?></div>
                                <div class="col-md-10"><a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "view", $row->type, $row->map_url]); ?>">
                            <?php echo $row->title ?> </a></div>
                            </div>
                        <?php endforeach;
                        ?>

                    </div>
                </div>
                <div class="agileinfo_chat">
                    <!--<img src="<?php echo $this->request->webroot . "images" ?>/13.jpg" alt=" " class="img-responsive" />-->
                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //news-original -->
<!-- footer -->
<?php echo $this->element("article/footer"); ?>
<!-- //footer -->