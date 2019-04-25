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
            <div class="col-md-9 agileinfo_news_original_grids_left1">
                <div><a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "edit", $id]); ?>"> 
                        <?php
                        if ($Auth->user()) {
                            echo "edit";
                        }
                        ?>

                    </a></div>
                <h2><?php echo "$article->title" ?></h2>
                <div class="content-article"><?php echo "$article->content" ?></div>

            </div>
            <div class="col-md-3 agileinfo_news_original_grids_right">
                <div class="w3layouts_add_market">

                    <div class="articles-news-title">New</div>
                    <div class="articles-news">
                        <?php
                        foreach ($listRelated as $row):
                            if ($row->isSubmit == 0) {
                                ?>
                                <div class="col-md-12 article-line">
                                    <!--<div class="col-md-2 list-article-news"><?php echo $row->view; ?></div>-->
                                    <div class="col-md-10"><a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "view", $row->type, $row->map_url]); ?>">
                                            <?php echo $row->title ?> </a></div>
                                </div>
                                <?php
                            } else {
                                if ($Auth->user()) {
                                    ?>
                                    <div class="col-md-12 article-line">
                                                <!--<div class="col-md-2 list-article-news"><?php echo $row->view; ?></div>-->
                                        <div class="col-md-10"><a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "view", $row->type, $row->map_url]); ?>">
                                                <?php echo $row->title ?> </a>- <span style="color: red;">unSubmit</span>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                        endforeach;
                        ?>

                    </div>


                </div>
                <div class="">
                    <div class="articles-news-title">Related</div>
                    <div class="articles-news">
                        <?php
                        foreach ($listRelated as $row):
                            if ($row->isSubmit == 0) {
                                ?>
                                <div class="col-md-12 article-line">
                                    <!--<div class="col-md-2 list-article-news"><?php echo $row->view; ?></div>-->
                                    <div class="col-md-10"><a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "view", $row->type, $row->map_url]); ?>">
                                            <?php echo $row->title ?> </a></div>
                                </div>
                                <?php
                            } else {
                                if ($Auth->user()) {
                                    ?>
                                    <div class="col-md-12 article-line">
                                        <!--<div class="col-md-2 list-article-news"><?php echo $row->view; ?></div>-->
                                        <div class="col-md-10"><a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "view", $row->type, $row->map_url]); ?>">
                                                <?php echo $row->title ?> </a>- <span style="color: red;">unSubmit</span>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                        endforeach;
                        ?>

                    </div>
                </div>
                <div class="agileinfo_chat">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({
                            google_ad_client: "ca-pub-7326494175928694",
                            enable_page_level_ads: true
                        });
                    </script>
                                        <!--<img src="<?php echo $this->request->webroot . "images" ?>/13.jpg" alt=" " class="img-responsive" />-->
                </div>

            </div>
            <!--            <div class="clearfix"> </div>-->
        </div>
    </div>
</div>
<!-- //news-original -->
<!-- footer -->
<?php echo $this->element("article/footer"); ?>
<!-- //footer -->