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

                <?php foreach ($listType as $rowType): ?>
                    <div class="list-article-details">

                        <div class="row article-type">
                            <a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "detail", $rowType->type]); ?>" />
                            - <?php echo $rowType->type; ?>
                            </a>
                        </div>
                        <!--                        <div class="row article-block">
                        
                        <?php
                        foreach ($results as $row):
                            if ($row->type == $rowType->type) {
                                if ($row->isSubmit == 0) {
                                    ?>
                                                
                                                                                        <div class="col-md-6  article-title">
                                                                                            -<a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "view", $row->type, $row->map_url]); ?>" />
                                    <?php echo $row->title ?> </a> 
                                                
                                                                                        </div>
                                    <?php
                                } else {
                                    if ($Auth->user()) {
                                        ?>
                                                                                                    <div class="col-md-6  article-title">
                                                                                                        -<a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "view", $row->type, $row->map_url]); ?>" />
                                        <?php echo $row->title ?> </a> - <span style="color: red;">unSubmit</span>
                                                        
                                                                                                    </div>
                                        <?php
                                    }
                                }
                            }
                        endforeach;
                        ?>
                        
                                                </div>-->
                    </div>
                    <?php
                endforeach;
                ?>


            </div>
            <div class="col-md-4 agileinfo_news_original_grids_right">
                <div class="w3layouts_add_market">
                    <!--<img src="<?php echo $this->request->webroot . "images" ?>/13.jpg" alt=" " class="img-responsive" />-->
                    <div class="articles-news-title">New</div>

                    <div class="articles-news">
                        <?php
                        foreach ($listArticleNew as $row):
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
                <div class="w3layouts_add_market">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({
                            google_ad_client: "ca-pub-7326494175928694",
                            enable_page_level_ads: true
                        });
                    </script>
                                        <!--<img src="<?php echo $this->request->webroot . "images" ?>/13.jpg" alt=" " class="img-responsive" />-->
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
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //news-original -->
<!-- footer -->
<?php echo $this->element("article/footer"); ?>
<!-- //footer -->