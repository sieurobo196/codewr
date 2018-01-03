<div class="trade_navigation">
    <div class="container">
        <nav class="navbar nav_bottom">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div> 
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <nav class="wthree_nav">
                    <ul class="nav navbar-nav nav_1">
                        <li class="<?php echo $activeMenu == 'index' ? 'act' : ''; ?>">
                            <a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "index"]) ?>">
                                Home</a></li>
                        <?php foreach ($listType as $rowType): ?>
                                <li class="<?php echo $activeMenu == $rowType->type ? 'act' : ''; ?>">
                                <a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "detail", $rowType->type]) ?>">
                                    <?php echo $rowType->type; ?></a></li>
                        <?php endforeach;
                        ?>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
</div>